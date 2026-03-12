<?php
function formatIndianCurrency($amount) {
    $amount = round($amount); // remove decimals completely
    $rupees = (string)$amount;

    $len = strlen($rupees);

    if ($len > 3) {
        $lastThree = substr($rupees, -3);
        $remaining = substr($rupees, 0, $len - 3);
        $remaining = preg_replace("/\B(?=(\d{2})+(?!\d))/", ",", $remaining);
        $rupees = $remaining . "," . $lastThree;
    }

    return "₹" . $rupees;
}




use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/autoload.php';

header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(["status"=>"error","message"=>"Only POST allowed"]);
    exit;
}

$data = json_decode(file_get_contents("php://input"), true);

if(empty($data['mailtype'])){
    http_response_code(422);
    echo json_encode(["status"=>"error","message"=>"mailtype is required"]);
    exit;
}

$mailtype = $data['mailtype'];
$templatePath = __DIR__ . "/templates/{$mailtype}.php";


if(!file_exists($templatePath)){
    http_response_code(404);
    echo json_encode(["status"=>"error","message"=>"Invalid mail type"]);
    exit;
}

switch($mailtype){

    case "register":
        if(empty($data['userName']) || empty($data['userEmail'])){
            http_response_code(422);
            echo json_encode(["status"=>"error","message"=>"Missing fields"]);
            exit;
        }

        $userName  = htmlspecialchars($data['userName']);
        $userEmail = htmlspecialchars($data['userEmail']);
        $userPhone = htmlspecialchars($data['userPhone'] ?? '');
        $currentYear = date('Y');

        $subject = "Welcome to Adinn Outdoors";

        break;

    case "login":
        if (empty($data['otp'])) {
        http_response_code(422);
        echo json_encode([
            "status" => "error",
            "message" => "OTP is required"
        ]);
        exit;
    }

    // Validate OTP format (6 digit number)
    if (!preg_match('/^[0-9]{4}$/', $data['otp'])) {
        http_response_code(422);
        echo json_encode([
            "status" => "error",
            "message" => "Invalid OTP format"
        ]);
        exit;
    }

    $otp = htmlspecialchars($data['otp']);

    // Optional: If userName not provided
    $userName = isset($data['userName']) 
        ? htmlspecialchars($data['userName']) 
        : "User";

    $subject = "Your Login OTP - Adinn Outdoors";

        break;

   case "order":

        if (
            empty($data['client']['name']) ||
            empty($data['client']['email']) ||
            empty($data['order']['orderId']) ||
            empty($data['products']) ||
            !is_array($data['products'])
        ) {
            http_response_code(422);
            echo json_encode([
                "status" => "error",
                "message" => "Missing required order fields"
            ]);
            exit;
        }

        if (!filter_var($data['client']['email'], FILTER_VALIDATE_EMAIL)) {
            http_response_code(422);
            echo json_encode([
                "status" => "error",
                "message" => "Invalid email format"
            ]);
            exit;
        }

        $clientName  = htmlspecialchars($data['client']['name']);
        $clientEmail = htmlspecialchars($data['client']['email']);
        $clientPhone = htmlspecialchars($data['client']['phone']);
        $clientCompany = htmlspecialchars($data['client']['company']);
        $orderId     = htmlspecialchars($data['order']['orderId']);
        $orderDate   = htmlspecialchars($data['order']['orderDate'] ?? date('Y-m-d'));

        $products    = $data['products'];

        $baseAmount  = formatIndianCurrency($data['summary']['baseAmount'] ?? 0);
        $gstAmount   = formatIndianCurrency($data['summary']['gstAmount'] ?? 0);
        $grandTotal  = formatIndianCurrency($data['summary']['grandTotal'] ?? 0);

        $totalItems  = count($products);

        // Subjects
        $subject = "Order Confirmation - #{$orderId}";
        $adminSubject = "New Order Received - #{$orderId}";

        // Admin Template
        $adminTemplatePath = __DIR__ . "/templates/adminOrder.php";

        if(!file_exists($adminTemplatePath)){
            http_response_code(500);
            echo json_encode([
                "status"=>"error",
                "message"=>"Admin template missing"
            ]);
            exit;
        }
    

    break;

    default:
        http_response_code(400);
        echo json_encode(["status"=>"error","message"=>"Unsupported mailtype"]);
        exit;
}

ob_start();
include $templatePath;
$body = ob_get_clean();

$mail = new PHPMailer(true);

try {

    $mail->isSMTP();
    $mail->Host = 'localhost';
    $mail->SMTPAuth = false;
    $mail->Port = 25;

    $mail->setFrom('noreply@adinndigital.com', 'Adinn Digital');
    $mail->isHTML(true);

    // =========================================
    // ORDER CASE → SEND 2 EMAILS
    // =========================================
    if($mailtype === "order"){

        // -------- CLIENT MAIL --------
        ob_start();
        include $templatePath; // order.php
        $body = ob_get_clean();

        $mail->clearAddresses();
        $mail->addAddress($data['userEmail'], $clientName);
        $mail->Subject = $subject;
        $mail->Body    = $body;
        $mail->send();

        // -------- ADMIN MAIL --------
        ob_start();
        include $adminTemplatePath; // adminOrder.php
        $adminBody = ob_get_clean();

        $mail->clearAddresses();
        $mail->addAddress($data['adminEmail'], 'Admin');
        $mail->Subject = $adminSubject;
        $mail->Body    = $adminBody;
        $mail->send();

        echo json_encode([
            "status" => "success",
            "message" => "Client and Admin emails sent successfully"
        ]);

    } else {

        // Normal Single Mail
        ob_start();
        include $templatePath;
        $body = ob_get_clean();

        $mail->clearAddresses();
        $mail->addAddress($data['userEmail'] ?? 'admin@adinndigital.com');
        $mail->Subject = $subject;
        $mail->Body    = $body;
        $mail->send();

        echo json_encode([
            "status" => "success",
            "message" => "Mail sent successfully"
        ]);
    }

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        "status"=>"error",
        "message"=>$e->getMessage()
    ]);
}
