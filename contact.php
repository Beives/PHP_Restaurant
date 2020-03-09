<?php 
define("TITLE", "Contact form | Basic restaurant");
include('includes/header.php') 
?>

<div id="contact">
    <hr>
    <h1>Get in touch with us</h1>
    <form action="contact.php" method="post" id="contact-form">
        <label for="name">Your name</label>
        <input type="text" name="name" id="name">

        <label for="email">Your email</label>
        <input type="email" name="email" id="email">

        <label for="message">Enter your message</label>
        <textarea name="message" id="message"></textarea>

        <input type="checkbox" value="Subscribe" name="subscribe" id="subscibe">
        <label for="checkbox">Subscribe to newsletter</label>

        <input type="submit" class="button next" value="Send message" name="contact_submit">

    </form>
</div>

<?php include('includes/footer.php') ?>