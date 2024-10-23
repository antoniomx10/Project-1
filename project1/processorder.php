<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation - Antonio's Home Cleaning</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Order Confirmation</h1>
    </header>

    <nav>
        <a href="index.php">Home</a>
        <a href="orderform.html">Book Service</a>
        <a href="index.php#services">Services</a>
        <a href="index.php#contact">Contact</a>
    </nav>

    <div class="content">
        <div class="form-container">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = htmlspecialchars($_POST['name']);
                $email = htmlspecialchars($_POST['email']);
                $phone = htmlspecialchars($_POST['phone']);
                $service = htmlspecialchars($_POST['service']);
                $date = htmlspecialchars($_POST['date']);
                $message = htmlspecialchars($_POST['message']);

                echo "<h2>Thank you for your order!</h2>";
                echo "<p>Dear " . $name . ",</p>";
                echo "<p>We have received your booking for " . $service . " cleaning service on " . $date . ".</p>";
                echo "<p>We will contact you at " . $email . " or " . $phone . " to confirm your appointment.</p>";
                
                if (!empty($message)) {
                    echo "<p>Special Instructions: " . $message . "</p>";
                }
                
                echo "<p>We look forward to serving you!</p>";
            } else {
                echo "<p>Error: Invalid form submission.</p>";
            }
            ?>
            <p><a href="index.php">Return to Homepage</a></p>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Antonio's Home Cleaning Service</p>
    </footer>
</body>
</html>