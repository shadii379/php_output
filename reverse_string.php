<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reverse string in PHP without using string function PHP </title>
</head>
<body>
<h4>Reverse string in PHP without using string function PHP </h4>
 <form method="post">  
 Enter the String:  
   <input type="String" name="string">  
   <input type="submit" value="Submit">  
  </form>  
 
<?php
    //declare variable and assign a string 
    $str = $_POST['string']; 
 
    //count length of string using php count function
    $count = strlen($str);  
 
    //Declare a variable in which you have stored a reverse string
    $revStr = '';
    for ($i=($count-1) ; $i >= 0 ; $i--)   
    {  
      // stored a string    
      $revStr .= $str[$i]; 
    }
 
    // print $revStr variable, it will return reverse string  
    print_r($revStr);
?>  
 
</body>
</html>          