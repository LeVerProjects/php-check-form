<?php
require "header.php";
?>
<form class="container mt-2">
    <form action="check_form.php" method="post">
    <input type="text" name="username" placeholder="Enter your name" class="form-control"><br>
    <input type="email" name="email" placeholder="Enter your email" class="form-control"><br>
    <input type="password" name="pass" placeholder="Enter your password" class="form-control"><br>
    <input type="text" name="message" placeholder="Enter your message" class="form-control"><br>
    <input type="submit" value="Submit" class="btn btn-success"><br>
</form>
<?php
require "footer.php";
?>
