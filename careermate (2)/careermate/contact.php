<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerMate - Contact</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="images/favicon-white.png" type="image/x-icon">
</head>
<body>
    <?php include 'header.php'; ?>
    <main>
        <div class="background-contact">
            <div class="container-contact">
                <div class="left-content-contact">
                    <div class="content-card-contact">
                        <i class="envelope-icon-contact">✉️</i>
                    </div>
                </div>
                <div class="right-content-contact">
                    <h1 class="heading-contact">Get in touch</h1>
                    <form id="contactForm-contact" action="submit_form.php" method="POST">
                        <input type="text" id="name-contact" name="name" placeholder="Name" class="input-contact" required>
                        <input type="email" id="email-contact" name="email" placeholder="Email" class="input-contact" required>
                        <textarea id="message-contact" name="message" placeholder="Message" rows="5" class="textarea-contact" required></textarea>
                        <button type="submit" class="button-contact">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

    <!-- Include main.js for header and footer -->
    <script src="main.js"></script>
</body>
</html>
