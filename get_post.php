<?php
/*-- $_GET & $_POST Superglobals --*/

/*We can pass data through urls and forms using $_GET and $_POST superglobals.*/


if(isset($_POST['submit'])){
    //In order to avoid from unnecesarry errors 
    echo $_POST['name'];
    echo $_POST['age'];
}
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?
name=Emre&age=22">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
/*When we use get method anything at form will be visible at url 
  so if you are using forms,POST method is much more secure. */
<div>
    <label> Name: </label>
    <input type="text" name="name">
</div>
<div>
    <label> Age: </label>
    <input type="text" name="age">
</div>
<input type="submit" value="Submit" name="submit">
</form>