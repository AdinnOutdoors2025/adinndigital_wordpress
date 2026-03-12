<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/autoload.php';

header("Content-Type: application/json");

// --- SMTP Settings ---
$smtpHost     = 'smtpout.secureserver.net';
$smtpPort     = 465;
$smtpUser     = 'noreply@adinndigital.com';
$smtpPassword = 'Adinn@321@';
$fromEmail    = 'noreply@adinndigital.com';
$fromName     = 'Adinn Digital';
$recipient    = 'karthiyayinitg1312@gmail.com';  


// --- Only POST allowed ---
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(["status"=>"error","message"=>"Only POST method allowed"]);
    exit;
}

// --- Read JSON ---
$rawData = file_get_contents("php://input");
$data = json_decode($rawData, true);
if (!$data) {
    http_response_code(400);
    echo json_encode(["status"=>"error","message"=>"Invalid JSON"]);
    exit;
}

// --- Validate required fields ---
if (
    empty($data['customer']['email']) ||
    empty($data['customer']['name']) ||
    empty($data['order']['order_id']) ||
    empty($data['items']) || !is_array($data['items'])
) {
    http_response_code(422);
    echo json_encode(["status"=>"error","message"=>"Missing required fields"]);
    exit;
}

// --- Build email content ---
$itemsHtml = '';
$grandTotal = 0;
foreach ($data['items'] as $item) {
    $name = htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8');
    $qty = isset($item['quantity']) ? (int)$item['quantity'] : 0;
    $price = isset($item['price']) ? (float)$item['price'] : 0;
    $total = $qty * $price;
    $grandTotal += $total;
    $itemsHtml .= "<tr>
        <td>{$name}</td>
        <td align='center'>{$qty}</td>
        <td align='right'>₹".number_format($price,2)."</td>
        <td align='right'>₹".number_format($total,2)."</td>
    </tr>";
}
$customerName = htmlspecialchars($data['customer']['name'], ENT_QUOTES, 'UTF-8');
$orderId     = htmlspecialchars($data['order']['order_id'], ENT_QUOTES, 'UTF-8');
$currentDate = date('d M Y');
$totalItems  = 0;

foreach ($data['items'] as $item) {
    $totalItems += isset($item['quantity']) ? (int)$item['quantity'] : 0;
}



$body = <<<HTML
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>User Email</title>
</head>

<body style="margin:0; padding:0; font-family: Arial, sans-serif;">

<div style="max-width:700px; margin:auto; font-family:'Montserrat', Arial, sans-serif;">

<img src="https://www.adinnoutdoors.com/images/adinn_logo.png"
alt="Adinn Logo" style="height:50px; margin-bottom:15px;">

<div style="
text-align:center;
padding:20px 0;
background: linear-gradient(180deg,#00573F 0%,#12AC81 100%);
font-weight:700;
font-size:35px;
color:#FFFFFF;">
Order Confirmation – Thank You for Choosing Us
</div>

<div style="font-size:24px; font-weight:600; margin:30px 0;">
Hi {$customerName},
</div>

<div style="margin:30px 0;">
<table border="1" cellpadding="0" cellspacing="0"
style="border-collapse:collapse; width:100%; border:1px solid gray; text-align:center;">
<thead>
<tr style="color:#E31F25; font-weight:600; font-size:20px;">
<th style="padding:12px;">Order ID</th>
<th style="padding:12px;">Order Date</th>
<th style="padding:12px;">Total Items</th>
<th style="padding:12px;">Total Amount</th>
</tr>
</thead>
<tbody>
<tr>
<td style="padding:12px;">{$orderId}</td>
<td style="padding:12px;">{$currentDate}</td>
<td style="padding:12px;">{$totalItems}</td>
<td style="padding:12px; font-weight:600; color:#2ecc71;">
₹{number_format($grandTotal,2)}
</td>
</tr>
</tbody>
</table>
</div>

<div>
<table width="100%" cellpadding="0" cellspacing="0" border="1"
style="border-collapse:collapse; margin-top:20px; text-align:center;">
<thead style="font-weight:600;">
<tr>
<th style="padding:12px;">Item</th>
<th style="padding:12px;">Qty</th>
<th style="padding:12px;">Price</th>
<th style="padding:12px;">Total</th>
</tr>
</thead>
<tbody>
{$itemsHtml}
</tbody>
</table>
</div>

<div style="font-size:20px; margin:30px 0;">
We’ve received your request, and our team will reach out within the next 15 hours.
If you need to update anything, contact us below:
</div>

<div style="font-size:20px;"><strong>Email :</strong>
<a href="mailto:Vinothkumar@adinn.co.in"
style="color:#2B3333; text-decoration:none;">
Vinothkumar@adinn.co.in
</a>
</div>

<div style="font-size:20px;"><strong>Phone :</strong>
<a href="tel:7373785057" style="color:#2B3333; text-decoration:none;">7373785057</a> |
<a href="tel:9626987861" style="color:#2B3333; text-decoration:none;">9626987861</a>
</div>

<div style="font-size:20px; margin:20px 0;">
<div>We’re here to help.</div>
<div>Thank you.</div>
</div>

<table width="100%" cellpadding="0" cellspacing="0"
background="https://www.adinntechnologies.com/images/FooterBannerImgEmail.png"
style="background-size:cover;background-repeat:no-repeat;text-align:center;padding:50px 0;">
<tr><td align="center">
<div style="color:#FFFFFF; font-size:14px; margin-top:30px;">
Copyright © 2025 Adinn Outdoors. All Rights Reserved.
</div>
</td></tr>
</table>

</div>
</body>
</html>
HTML;

$mail = new PHPMailer(true);
// $orderId = $data['order']['order_id'];

try {
     $mail->isSMTP();
    $mail->Host       = 'localhost';
    $mail->SMTPAuth   = false;
    $mail->SMTPSecure = false;
    $mail->Port       = 25;

    $mail->setFrom($fromEmail, $fromName);
    $mail->addReplyTo('noreply@adinndigital.com');
    $mail->addAddress($recipient);

    $mail->isHTML(true);
    // $mail->Subject = "Order Confirmation - {$orderId}";
    $mail->Subject = "Order Confirmation - {$orderId}";
    $mail->Body    = $body;
    $mail->SMTPDebug = 0;
    $mail->Debugoutput = 'html';

    // --- Attempt to send mail ---
    if(!$mail->send()){
        throw new Exception($mail->ErrorInfo);
    }

    // Only return success if send() did NOT throw an exception
    echo json_encode([
        "status"=>"success",
        "message"=>"Email sent successfully",
        "order_id"=>$data['order']['order_id']
    ]);

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        "status"=>"error",
        "message"=>"Email sending failed",
        "error"=>$e->getMessage()
    ]);
}
