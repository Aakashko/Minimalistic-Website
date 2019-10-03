<?php ob_start();

 if(isset($_POST['submit']))
 {

 	/* Example 1
   
   $to = "edwin@codingfaculty.com";
   $subject = $_POST['subject'];
   $email = $_POST['email'];
   $txt = $_POST['message'];
   $headers = "From: " .$email ."\r\n".
   "CC: somebodyelse@example.com";

 	mail($to,$subject,$message,$headers);

 	header("Location: contact.html");

 	*/

 	/* Example 2

    mail('support@coding','hello','some text', 'FROM');

 	*/

 	/* Example 3
    
    echo "IT WORKS";
    
    */

 	/* Example 4
 	
 	echo $_POST['subject'];
    
    */

 	/* Example 5
 	
 	$subject = $_POST['subject'];

 	echo $subject;
    */

    /* Example 6
    
    $to = "somebody@example.com"; //enter your email address where u want to get this mail
    $subject = "My subject";
    $txt = "Hello world!";
    $headers = "From: webmaster@example.com" . "\r\n" .
    "CC: somebodyelse@example.com";

    mail($to,$subject,$txt,$headers);
    
    */

    /* Example 7

    $to = "somebody@example.com";
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $text = $_POST['message'];
    $headers = "From: {$email}" . "\r\n" .
    "CC: somebodyelse@example.com";

    mail($to,$subject,$txt,$headers);

    header("Location: contact.html");

    */

    echo "IT WORKS 100%";
 }



?>