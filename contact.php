<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contacts.css">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
</head>
<body>

    <div class="container-fluid ">
        <div class="row row1">
            <div class="navbar">
                <div class="logo">
                    <h3 class="logo-text"><span id="izeza">Izeza</span><span id="inv">Investment</span><span
                            id="comp">Company</span></h3>
                </div>
                <div class="mainlinks_div">
                    <ul class="mainlinks">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="contact.php">ContactUs</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="contact_form">
                <?php include('conn.php') ?>
                <form  method="post" action="https://formspree.io/f/xpzvgdje">
                    <input type="text" name="username" placeholder="Enter your name" autocomplete="off"> <br>
                    <input type="email" name="email" placeholder="Enter email address" autocomplete="off"><br>
                    <input type="text" name="phone" placeholder="Enter mobile phone number" autocomplete="off"><br>
                    <input type="text" name="address" placeholder="Type in your address" autocomplete="off">
                    <textarea name="message"></textarea>
                    <button name="submit" type="submit">Submit</button><br><br>

                    <?php include ('contactdb.php')?>
                </form>
            </div>
        </div>

        <div class="row" style>
            <div class=" footer">
                <h3 class="footer-text">Copyright &copy; Izeza Investment Company.com 2024</h3>
            </div>
        </div>
    </div>



    <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="contact.js"></script>
</body>

</html>