<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include ("nav.php");
?>
<h1>Contact us here!</h1>
<p>Email: <a href="mailto:info@intensivejournal.org">info@intensivejournal.org</a></p>
<p>Phone: <a href="tel:+13302215844">+1 330-221-5844</a></p>

<!--fomr spree-->
<form class="display-none" action="https://formspree.io/f/xwkdjeza" method="POST">

    <label for="firstname">First Name</label><br>
    <input type = "text" id="firstname" name="firstname" required><br>
    <label for="lastname">Last Name</label><br>
    <input type = "text" id="lastname" name="lastname" required><br>
    <label for="email">Email</label><br>
    <input type = "email" id="email" name="email" required><br>
    <label for="message">Message</label><br>
    <textarea id="message" name="message" rows="5" cols="40"></textarea><br>
    <input type="submit" value="Submit">
<!--    <button>submit</button>-->

</form>


<!--getform-->
<form action="https://getform.io/f/3471bba4-7701-443a-afd0-09aca29ec12c" method="POST">

    <label for="firstname">First Name</label><br>
    <input type = "text" id="firstname" name="firstname" required><br>
    <label for="lastname">Last Name</label><br>
    <input type = "text" id="lastname" name="lastname" required><br>
    <label for="email">Email</label><br>
    <input type = "email" id="email" name="email" required><br>
    <label for="message">Message</label><br>
    <textarea id="message" name="message" rows="5" cols="40"></textarea><br>
    <input type="submit" value="Submit">
<!--    <button>submit</button>-->

</form>



</body>
</html>