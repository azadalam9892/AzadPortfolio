<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Contact Form Submission</title>

    <!-- <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f6f9;
        padding: 40px;
        margin: 0;
    }

    .main-container {
        max-width: 800px;
        margin: 0 auto;
        background: #ffffff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    h2 {
        color: #333;
        font-size: 2vw;
        line-height: 1.8;
        margin-bottom: 12px;
        text-align: center;
    }

    .logo {
        display: block;
        margin: 0 auto;
        width: 6vw;
        height: 6vw;
        border-radius: 2vw;
        object-fit: cover;
    }

    .table {
        margin-bottom: 20px;
    }

    .table th,
    .table td {
        text-align: left;
        padding: 12px;
    }

    .table th {
        background-color: #2e3b55;
        color: white;
        font-weight: bold;
    }

    .table td {
        background-color: #f9f9f9;
    }

    .footer {
        margin-top: 20px;
        text-align: center;
        color: #777;
        border-top: 1px solid #dee2e6;
    }

    .footer p {
        margin: 1rem 0 0.2vw !important;
    }

    .footer a {
        color: #0d6efd;
        text-decoration: none;
        display: inline-grid;
    }

    .footer button {
        padding: 0.8vw 2vw;
        background: #2e3b55;
        border-radius: 0;
        margin: 0.8vw;
        border: 0;
    }

    .footer button:hover {
        background: #2e3b55;
    }

    @media (max-width: 768px) {
        .main-container {
            padding: 20px;
        }

        h2 {
            font-size: 22px;
        }

        .logo {
            width: 50px;
            height: 50px;
            margin: 5px auto;
        }

        .footer button {
            padding: 10px 15px;
            margin-top: 10px;
        }
    }
    </style> -->

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f6f9;
        padding: 40px;
        margin: 0;
    }

    .container {
        width: 55%;
        margin: 0 auto;
        background: #ffffff;
        padding: 2vw 0 3vw;
        text-align: center;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .container img {
        margin: 1vw 0;
        border-radius: 1vw;
        width: 5vw;
        height: 5vw;
        object-fit: cover;
    }

    .container h2 {
        color: #333;
        font-family: "Cookie", serif;
        font-weight: 900;
        font-style: normal;
        font-size: 3.5vw;
    }

    .container p {
        font-size: 1vw;
        color: #555;
        margin: 1vw 0 1vw;
        line-height: 1.5;
        font-weight: 500;
        font-family: "Poppins", sans-serif;
    }

    .container span {
        font-size: 1.5vw;
        color: #555;
        margin: 2vw 0;
        line-height: 1.5;
        font-weight: 600;
        font-family: "Poppins", sans-serif;
        text-transform: uppercase;
    }

    @media (max-width: 768px) {
        .container {
            width: 100%;
            padding: 30px 20px;
        }

        .container img {
            width: 70px;
            height: 70px;
            margin: 10px 0;
            border-radius: 10px;
        }

        .container h2 {
            font-size: 30px;
        }

        .container p {
            font-size: 14px;
            margin-bottom: 10px;
        }

        .container span {
            font-size: 15px;
            margin: 10px 0;
        }
    }
</style>

</head>

<body>

    <div class='container'>
        <img src="images/main-logo1.png" alt="Azad Portfolio" class="logo">
        <h2>Thank You, Azad Alam...!</h2>
        <p>We have received your message and will get back to you as soon as possible. <br> Here are the details you submitted:</p>
        <span>Thank you for reaching out!</span>
    </div>

</body>

</html>




<?php
    // use PHPMailer\PHPMailer\PHPMailer;
    // use PHPMailer\PHPMailer\Exception;

    // require 'vendor/autoload.php';

    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $name = htmlspecialchars(trim($_POST['name']));
    //     $phone = htmlspecialchars(trim($_POST['phone']));
    //     $email = htmlspecialchars(trim($_POST['email']));
    //     $message = htmlspecialchars(trim($_POST['message']));

    //     $errors = [];

    //     if (empty($name)) {
    //         $errors[] = "Name is required.";
    //     }

    //     if (empty($phone)) {
    //         $errors[] = "Phone number is required.";
    //     }

    //     if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //         $errors[] = "A valid email is required.";
    //     }

    //     if (empty($message)) {
    //         $errors[] = "Message is required.";
    //     }

    //     if (!empty($errors)) {
    //         foreach ($errors as $error) {
    //             echo "<p style='color:red;'>$error</p>";
    //         }
    //     } else {
    //         $mail = new PHPMailer(true);

    //         try {
            
    //             $mail->isSMTP();
    //             $mail->Host = 'smtp.gmail.com';
    //             $mail->SMTPAuth = true;
    //             $mail->Username = 'azadalam9892@gmail.com';
    //             $mail->Password = 'dhrefgwpnycfjwhx';
    //             $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    //             $mail->Port = 587;

    //             $mail->setFrom($email, $name);
    //             $mail->addAddress('azadalam9892@gmail.com');


    //             $mail->isHTML(true);
    //             $mail->Subject = 'Portfolio Contact Page';
    //             $mail->Body = "
    //                 <html>
    //                 <head>
    //                     <style>
    //                         body {
    //                             font-family: Arial, sans-serif;
    //                             background-color: #f4f6f9;
    //                             padding: 40px;
    //                             margin: 0;
    //                         }

    //                         .container {
    //                             max-width: 800px;
    //                             margin: 0 auto;
    //                             background: #ffffff;
    //                             padding: 30px;
    //                             border-radius: 8px;
    //                             box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    //                         }

    //                         h2 {
    //                             color: #333;
    //                             font-size: 2vw;
    //                             line-height: 1.8;
    //                             margin-bottom: 12px;
    //                             text-align:center;
    //                         }

    //                         .logo {
    //                             display: block;
    //                             margin: 0 auto;
    //                             width: 6vw;
    //                             height: 6vw;
    //                             border-radius: 2vw;
    //                             object-fit: cover;
    //                         }

    //                         .table {
    //                             margin-bottom: 20px;
    //                             width:100%
    //                         }

    //                         .table th, .table td {
    //                             text-align: left;
    //                             padding: 12px;
    //                         }

    //                         .table th {
    //                             background-color: #2e3b55;
    //                             color: white;
    //                             font-weight: bold;
    //                         }

    //                         .table td {
    //                             background-color: #f9f9f9;
    //                         }

    //                         .footer {
    //                             margin-top: 20px;
    //                             text-align: center;
    //                             color: #777;
    //                             border-top:1px solid #dee2e6;
    //                         }

    //                         .footer p{
    //                             margin: 1rem 0 0.2vw !important;
    //                         }

    //                         .footer a {
    //                             color: #0d6efd;
    //                             text-decoration: none;
    //                             display:inline-grid;
    //                         }

    //                         .footer a button{
    //                             padding:0.8vw 2vw;
    //                             background:#2e3b55;
    //                             border-radius:0;
    //                             margin:0.8vw;
    //                             border:0;
    //                             color:#fff;
    //                         }

    //                         .footer button:hover{
    //                             background:#2e3b55;
    //                         }

    //                         .name-head{
    //                         text-align:uppercase;
    //                     }

    //                         @media (max-width: 768px) {
    //                             .container {
    //                                 padding: 20px;
    //                             }
    //                             h2 {
    //                                 font-size: 22px;
    //                             }
    //                             .logo {
    //                                 width: 50px;
    //                                 height: 50px;
    //                                 margin: 5px auto;
    //                             }

    //                             .footer button{
    //                                 padding:10px 15px;
    //                                 margin-top:10px;    
    //                             }
    //                         }
    //                     </style>
    //                 </head>
    //                 <body>
    //                     <div class='container'>
    //                         <img src='images/main-logo1.png' alt='Azad Portfolio' class='logo'>
    //                         <h2>Azad Portfolio Contact Form</h2>

    //                         <table class='table table-bordered'>
    //                             <thead>
    //                                 <tr>
    //                                     <th>#Field</th>
    //                                     <th>#Details</th>
    //                                 </tr>
    //                             </thead>
    //                             <tbody>
    //                                 <tr>
    //                                     <td><strong>#Name</strong></td>
    //                                     <td>" . strtoupper($name) . "</td>
    //                                 </tr>
    //                                 <tr>
    //                                     <td><strong>#Phone</strong></td>
    //                                     <td>$phone</td>
    //                                 </tr>
    //                                 <tr>
    //                                     <td><strong>#Email</strong></td>
    //                                     <td>$email</td>
    //                                 </tr>
    //                                 <tr>
    //                                     <td><strong>#Message</strong></td>
    //                                     <td>$message</td>
    //                                 </tr>
    //                             </tbody>
    //                         </table>

    //                         <div class='footer'>
    //                             <p>You can access Azad Portfolio online or on any device</p>
    //                             <a href='https://www.google.com/' target='_blank'>https://www.google.com/
    //                                 <button class='btn btn-primary'>Get Started</button>
    //                             </a>
    //                         </div>
    //                     </div>
    //                 </body>
    //                 </html>
    //             ";

    //             $mail->send();



    

    //             header("Location: thank-you.php");
    //             exit();
    //         } catch (Exception $e) {
    //             echo "<p style='color:red;'>There was an error sending the message. Mailer Error: {$mail->ErrorInfo}</p>";
    //         }
    //     }
    // }





use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    $errors = [];

    if (empty($name)) {
        $errors[] = "Name is required.";
    }

    if (empty($phone)) {
        $errors[] = "Phone number is required.";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "A valid email is required.";
    }

    if (empty($message)) {
        $errors[] = "Message is required.";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    } else {
        $mail = new PHPMailer(true);
        try {
            // SMTP Configuration
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'azadalam9892@gmail.com';
            $mail->Password = 'dhrefgwpnycfjwhx';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Send Email to Owner
            $mail->setFrom($email, $name);
            $mail->addAddress('azadalam9892@gmail.com'); // Owner's email

            $mail->isHTML(true);
            $mail->Subject = 'Portfolio Contact Page';
            $mail->Body = "
                <html>
                <head>
                    <style>
                        body { font-family: Arial, sans-serif; background-color: #f4f6f9; padding: 40px; margin: 0; }
                        .container { max-width: 800px; margin: 0 auto; background: #ffffff; padding: 30px; border-radius: 8px; box-shadow: 0 0 15px rgba(0, 0, 0, 0.1); }
                        h2 { color: #333; font-size: 22px; text-align:center; }
                        .table { width:100%; margin-bottom: 20px; border-collapse: collapse; }
                        .table th, .table td { text-align: left; padding: 12px; border: 1px solid #ddd; }
                        .table th { background-color: #2e3b55; color: white; font-weight: bold; }
                        .footer { margin-top: 20px; text-align: center; color: #777; border-top:1px solid #dee2e6; padding-top: 10px; }
                    </style>
                </head>
                <body>
                    <div class='container'>
                        <h2>New Contact Form Submission</h2>
                        <table class='table'>
                            <tr><th>Name</th><td>" . strtoupper($name) . "</td></tr>
                            <tr><th>Phone</th><td>$phone</td></tr>
                            <tr><th>Email</th><td>$email</td></tr>
                            <tr><th>Message</th><td>$message</td></tr>
                        </table>
                        <div class='footer'>Received via your contact form</div>
                    </div>
                </body>
                </html>
            ";
            $mail->send();

            // Send Thank You Email to User
            $mail->clearAddresses(); // Clear recipient list for second email
            $mail->addAddress($email); // Send to user
            $mail->setFrom('azadalam9892@gmail.com', 'Azad Portfolio');
            $mail->Subject = "Thank You for Contacting Us";
            $mail->Body = "
                <html>
                <head>
                    <style>
                        body {
                            font-family: Arial, sans-serif;
                            background-color: #f4f6f9;
                            padding: 40px;
                            margin: 0;
                        }

                        .container {
                            width: 55%;
                            margin: 0 auto;
                            background: #ffffff;
                            padding: 2vw 0 3vw;
                            text-align: center;
                            border-radius: 10px;
                            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                        }

                        .container img {
                            margin: 1vw 0;
                            border-radius: 1vw;
                            width: 5vw;
                            height: 5vw;
                            object-fit: cover;
                        }

                        .container h2 {
                            color: #333;
                            font-family: "Cookie", serif;
                            font-weight: 900;
                            font-style: normal;
                            font-size: 3.5vw;
                        }

                        .container p {
                            font-size: 1vw;
                            color: #555;
                            margin: 1vw 0 1vw;
                            line-height: 1.5;
                            font-weight: 500;
                            font-family: "Poppins", sans-serif;
                        }

                        .container span {
                            font-size: 1.5vw;
                            color: #555;
                            margin: 2vw 0;
                            line-height: 1.5;
                            font-weight: 600;
                            font-family: "Poppins", sans-serif;
                            text-transform: uppercase;
                        }

                        @media (max-width: 768px) {
                            .container {
                                width: 100%;
                                padding: 30px 20px;
                            }

                            .container img {
                                width: 70px;
                                height: 70px;
                                margin: 10px 0;
                                border-radius: 10px;
                            }

                            .container h2 {
                                font-size: 30px;
                            }

                            .container p {
                                font-size: 14px;
                                margin-bottom: 10px;
                            }

                            .container span {
                                font-size: 15px;
                                margin: 10px 0;
                            }
                        }
                    </style> 
                </head>
                <body>
                    <div class='container'>
                        <h2>Thank You," . strtoupper($name) . "!</h2>
                        <p>We have received your message and will get back to you as soon as possible.</p>
                        <p>Here are the details you submitted:</p>
                        <table class='table'>
                            <tr><th>Name</th><td>" . strtoupper($name) . "</td></tr>
                            <tr><th>Phone</th><td>$phone</td></tr>
                            <tr><th>Email</th><td>$email</td></tr>
                            <tr><th>Message</th><td>$message</td></tr>
                        </table>
                        <div class='footer'>Thank you for reaching out!</div>
                    </div>

                     <div class='container'>
                        <img src="images/main-logo1.png" alt="Azad Portfolio" class="logo">
                       <h2>Thank You," . strtoupper($name) . "!</h2>
                        <p>We have received your message and will get back to you as soon as possible. <br> Here are the details you submitted:</p>
                        <span>Thank you for reaching out!</span>
                    </div>
                </body>
                </html>
            ";
            $mail->send();

            // Redirect user after sending
            header("Location: thank-you.php");
            exit();
        } catch (Exception $e) {
            echo "<p style='color:red;'>There was an error sending the message. Mailer Error: {$mail->ErrorInfo}</p>";
        }
    }
}

?>