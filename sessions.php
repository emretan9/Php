<?php
 /*--Sessions--*/
 /*Session variables solve this problem by storing user information to be used across multiple pages (e.g. username, favorite color, etc).
 By default, session variables last until the user closes the browser.

 So; Session variables hold information about one single user, and are available to all pages in one application. */
 
 session_start();
 if(isset($_POST['submit'])){
    $username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];
    if($username == 'emre' && $password=='password'){
        $_SESSION['username']= $username;
        header('Location: /Php/session_example/dashboard.php');
    }else{
        echo "Incorrect login";
    }
 }
 
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
/*When we use get method anything at form will be visible at url 
  so if you are using forms,POST method is much more secure. */
<div>
    <label> Username: </label>
    <input type="text" name="username">
</div>
<div>
    <label> Password: </label>
    <input type="password" name="password">
</div>
<input type="submit" value="Submit" name="submit">
</form>