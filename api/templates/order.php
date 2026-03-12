


<!DOCTYPE html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>User Order Email</title>
</head>

<body style="margin:0; padding:0; font-family: Arial, sans-serif;">

    <div style="max-width:700px; margin:auto; font-family:'Montserrat', Arial, sans-serif;">

        <!-- Logo -->
        <img src="https://www.adinnoutdoors.com/images/adinn_logo.png" alt="Adinn Logo"
            style="height:50px; margin-bottom:15px;">

        <!-- Header -->
        <div style="
  text-align:center;
  padding:20px 0;
  background: linear-gradient(180deg,#00573F 0%,#12AC81 100%);
  font-weight:700;
  font-size:35px;
  color:#FFFFFF;">
            Order Confirmation – Thank You for Choosing Us
        </div>

        <!-- Intro -->
        <div style="font-size:24px; font-weight:600; margin:30px 0;">Hi <?= $clientName ?>,</div>

        <!-- Order Details Table -->
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
                        <td style="padding:12px;"> <?= $orderId ?></td>
                        <td style="padding:12px;"> <?= $orderDate ?></td>
                        <td style="padding:12px;"> <?= $totalItems ?></td>
                        <td style="padding:12px; font-weight:600; color:#2ecc71;"> <?= $grandTotal  ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- GST Summary -->
     

        <div>
           <?php foreach($products as $product): ?>
             <table width="100%" cellpadding="0" cellspacing="0"
                style="border-bottom:2px solid #C4C1C1; margin-bottom:20px; padding-bottom:20px;">
                <tr>
                    <td width="120">
                        <img src="<?= htmlspecialchars($product['productImageUrl']) ?>"
                            style="height:90px;width:90px;border-radius:10px; object-fit: cover;">
                    </td>
                    <td>
                        <table style="font-size:16px;">
                            <tr>
                                <td>Product Name</td>
                                <td>:</td>
                                <td><?= $product['name'] ?></td>
                            </tr>
                            <tr>
                                <td>Product Code</td>
                                <td>:</td>
                                <td> <?= $product['prodCode'] ?></td>
                            </tr>
                            <tr>
                                <td>Price Per Day</td>
                                <td>:</td>
                                <td> <?= formatIndianCurrency($product['pricePerDay']) ?></td>
                            </tr>
                            <tr>
                                <td>Booked Dates</td>
                                <td>:</td>
                                <td> <?= $product['startDate'] ?> - <?= $product['endDate'] ?></td>
                            </tr>
                            <tr>
                                <td>Total Days</td>
                                <td>:</td>
                                <td> <?= $product['totalDays'] ?></td>
                            </tr>
                            <tr>
                                <td>Booking Amount</td>
                                <td>:</td>
                                <td> <?= formatIndianCurrency($product['bookingAmount']) ?></td>
                            </tr>
                           <tr>
                                <td>Printing Cost</td>
                                <td>:</td>
                                <td> <?= formatIndianCurrency($product['printingCost']) ?></td>
                            </tr>
                            <tr>
                                <td>Mounting Cost</td>
                                <td>:</td>
                                <td> <?= formatIndianCurrency($product['mountingCost']) ?></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <?php endforeach; ?>

        </div>

           <div style="margin:30px 0; background:#f9f9f9; padding:15px; border-radius:5px;">
            <h3 style="color:#E31F25; margin-bottom:15px;">Order Summary</h3>
            <table style="width:100%; font-size:16px;">
                <tr>
                    <td style="padding:8px 0;">Base Amount (Excl. GST):</td>
                    <td style="padding:8px 0; text-align:right; font-weight:600;"><?= $baseAmount ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:8px 0;">GST @ <?= $gstPercentage ?? 18 ?>%:</td>
                    <td style="padding:8px 0; text-align:right; font-weight:600;"><?= $gstAmount ?>
                    </td>
                </tr>
                <tr style="border-top:2px solid #ddd;">
                    <td style="padding:12px 0; font-weight:700; color:#E31F25;">Total Amount (Incl. GST):</td>
                    <td style="padding:12px 0; text-align:right; font-weight:700; color:#E31F25;"><?= $grandTotal ?></td>
                </tr>
            </table>
        </div>

        <!-- Message -->
        <div style="font-size:20px; margin:30px 0;">
            We've received your request, and our team will reach out within the next 15 hours.
            If you need to update anything, contact us below:
        </div>

        <div style="font-size:20px;"><strong>Email :</strong>
            <a href="mailto:Vinothkumar@adinn.co.in" style="color:#2B3333; text-decoration:none;">
                Vinothkumar@adinn.co.in
            </a>
        </div>
        <div style="font-size:20px;"><strong>Phone :</strong>
            <a href="tel:7373785057" style="color:#2B3333; text-decoration:none;">+91 7373785057</a> |
            <a href="tel:9626987861" style="color:#2B3333; text-decoration:none;">+91 9626987861</a>
        </div>

        <div style="font-size:20px; margin:20px 0;">
            <div>We're here to help.</div>
            <div>Thank you.</div>
        </div>

        <!-- FOOTER (Email-Safe Version) -->
        <table width="100%" cellpadding="0" cellspacing="0"
            background="https://www.adinntechnologies.com/images/FooterBannerImgEmail.png" style="
  background-size:cover; 
  background-repeat:no-repeat; 
  text-align:center; 
  padding:50px 0;
  ">
            <tr>
                <td align="center">
                    <!-- Thank You Message -->
                    <table align="center" width="65%" cellpadding="0" cellspacing="0" style="margin-left: 20%;">
                        <tr>
                            <td align="center" style="font-size:24px; font-weight:500; color:#2B3333; ">
                                <img src="https://www.adinntechnologies.com/images/FooterThankIconEmail.png"
                                    style="width:30px; vertical-align:middle;">
                                <span style="color:#E31F25;font-weight:700;">Thank you</span> for choosing us - we're
                                here to keep you happy, steady and ready.
                            </td>
                        </tr>
                    </table>

                    <!-- Footer 3 columns -->
                    <table width="100%" cellpadding="0" cellspacing="0" style="margin-top:40px;">
                        <tr>
                            <!-- Column 1 -->
                            <td width="33%" valign="top" style="padding:10px;">
                                <img src="https://www.adinnoutdoors.com/images/adinn_logo.png" style="height:40px;">

                                <!-- Social -->
                                <div style="margin:20px 0; display: flex;gap: 5px;">
                                    <div>
                                        <a href="https://www.instagram.com/adinnoutdoor/" target="_blank"
                                            rel="noopener noreferrer">
                                            <img src="https://www.adinntechnologies.com/images/FootSocIcon1.png"
                                                style="height:35px; margin:0 2px;">
                                        </a>
                                    </div>
                                    <div> <a href="https://www.instagram.com/adinnoutdoor/" target="_blank"
                                            rel="noopener noreferrer">
                                            <img src="https://www.adinntechnologies.com/images/FootSocIcon2.png"
                                                style="height:35px; margin:0 2px;">
                                        </a> </div>
                                    <div> <a href="https://www.facebook.com/adinnoutdoors/" target="_blank"
                                            rel="noopener noreferrer">
                                            <img src="https://www.adinntechnologies.com/images/FootSocIcon3.png"
                                                style="height:35px; margin:0 2px;">
                                        </a> </div>
                                    <div> <a href="https://www.instagram.com/adinnoutdoor/" target="_blank"
                                            rel="noopener noreferrer">
                                            <img src="https://www.adinntechnologies.com/images/FootSocIcon4.png"
                                                style="height:35px; margin:0 2px;">
                                        </a> </div>
                                    <div> <a href="https://www.linkedin.com/showcase/adinn-outdoors/" target="_blank"
                                            rel="noopener noreferrer">
                                            <img src="https://www.adinntechnologies.com/images/FootSocIcon5.png"
                                                style="height:35px; margin:0 2px;">
                                        </a> </div>
                                </div>

                                <div style="font-size:14px; color:#2B3333;">
                                    <a href="tel:7373785057" style="color:#2B3333; text-decoration:none;">+91 7373785057</a>
                                    |
                                    <a href="tel:9626987861" style="color:#2B3333; text-decoration:none;">+91 9626987861</a>
                                </div>
                                <div style="font-size:14px; margin-top:10px;">
                                    <a href="mailto:ba@adinn.co.in" style="color:#2B3333; text-decoration:none;">
                                        ✉ ba@adinn.co.in
                                    </a>
                                </div>
                            </td>

                            <!-- Column 2 -->
                            <td width="33%" valign="top" style="padding:10px; padding-left: 50px; font-size:15px;">
                                <div style="font-weight:700; margin-bottom:10px;">Services</div>
                                <div style="margin: 10px 0px;">3D & Cutouts</div>
                                <div style="margin: 10px 0px;">Dynamic Advertising</div>
                                <div style="margin: 10px 0px;">Geo Targeting</div>
                                <div style="margin: 10px 0px;">Innovation</div>
                                <div style="margin: 10px 0px;">Traditional</div>
                                <div style="margin: 10px 0px;">Wall Painting</div>
                            </td>

                            <!-- Column 3 -->
                            <td width="33%" valign="top" style="padding:10px; font-size:15px;">
                                <div style="font-weight:700; margin-bottom:10px;">Address</div>
                                29, 1st Cross Street, Vanamamalai Nagar,<br>
                                <span style="font-weight:700;">Madurai-625010</span><br><br>

                                Door No.3, Vijayalakshmi Street,<br>
                                Nungambakkam,<br>
                                <span style="font-weight:700;">Chennai – 600034</span><br><br>

                                Old No.76, New No.976,<br>
                                Rajarajeswari Nagar,<br>
                                <span style="font-weight:700;">Bangalore – 560038</span>
                            </td>
                        </tr>
                    </table>

                    <div style="color:black; font-size:14px; margin-top:30px;">
                        Copyright © <?= date('Y') ?> Adinn Outdoors. All Rights Reserved.
                    </div>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>

<!--Do not delete-->
<!--{-->
<!--  "mailtype": "order",-->
<!--  "userEmail": "sathishdkofficial@gmail.com",-->
<!--  "adminEmail": "srbedev@adinn.co.in",-->
<!--  "client": {-->
<!--    "name": "Sathish Kumar",-->
<!--    "email": "sathishdkofficial@gmail.com",-->
<!--    "phone" : 9898989898,-->
<!--    "company" : "Adinn"-->
<!--  },-->
<!--  "order": {-->
<!--    "orderId": "ORD12345",-->
<!--    "orderDate": "16-Feb-2026",-->
<!--    "gstPercentage": 18-->
<!--  },-->
<!--  "products": [-->
<!--    {-->
<!--      "productImageUrl" : "https://raw.githubusercontent.com/oohdigitalmarketing-cmyk/Outdoor_images/refs/heads/main/Bright_media/16051.jpeg",-->
<!--      "name": "Hoarding Banner",-->
<!--      "prodCode": "HB001",-->
<!--      "pricePerDay": 5000,-->
<!--      "startDate" : "07-Feb-2026",-->
<!--      "endDate" : "10-Feb-2026" ,-->
<!--      "totalDays": 5,-->
<!--      "bookingAmount": 25000,-->
<!--      "printingCost": 2000,-->
<!--      "mountingCost": 1500,-->
<!--      "gstAmount": 5130,-->
<!--      "totalWithGST": 33630-->
<!--    }-->
<!--  ],-->
<!--  "summary": {-->
<!--    "baseAmount": 28500,-->
<!--    "gstAmount": 5130,-->
<!--    "grandTotal": 33630-->
<!--  }-->
<!--}-->
