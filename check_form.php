<?php
$username = $_POST["username"]; //get username input from form 
$email = $_POST["email"]; //get email input from form
$password = $_POST["pass"]; //get password input from form
$text = $_POST["message"]; //get user message input from form. For example: textarea or text input type
$isTrue = true; //boolean to check each conditional statement

if (strlen(trim($username)) == "" && strlen(trim($email)) == "" && strlen(trim($password)) == "" && strlen(trim($text)) == ""){ //creating if statement to check if input fields are empty
    $isTrue = false; //changing boolean to false so it won't validate the form
    echo "You didn't fill out all input fields."."<br>"; //show an error message
} else if (strlen(trim($username)) > 15 || strlen(trim($email)) > 35 || strlen(trim($password)) > 35 || strlen(trim($text)) > 250) { //creating else-if statement to check of input fields are correct length
    $isTrue = false; //changing boolean to false so it won't validate the form
    echo "You have exceeded the allowed input length" . "<br>"; //show an error message
} else { // if form is valid and there is no errors
    $isTrue = true; //changing boolean to true so it will validate the form
    $_POST["pass"] = md5($password); //hash the user password
    foreach ($_POST as $key => $value) { //loop to show all user input data
        echo "<p>$value</p>"; //show data
    }
}
