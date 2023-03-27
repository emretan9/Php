<?php
/*--Cookies--*/
/*A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer.
Each time the same computer requests a page with a browser, it will send the cookie too.
With PHP, you can both create and retrieve cookie values. */
 

//Creating Cookie
 setcookie(
    "MyNewCookie",
    "Chocolate and pistachio"
 );
 
 //Displaying Cookie
 echo $_COOKIE["MyNewCookie"];

 //Checking Cookie with first way
 echo isset($_COOKIE["MyNewCookie"]);//If it exist,it will print 1
 
 
 //Checking Cookie with second way
 if(
    $_COOKIE["MyNewCookie"]
 ){
    echo 10;
 }
 else echo "No cookie";

 //Creating cookie with time (it will be exist 1 day)
 setcookie("cookie1",
 "deneme",
 time() + 86400);
 
 //Deleting Cookie
 setcookie("cookie2","test",time()-3600)

 
 
 







?>