<?php  
  
$to = "pavanyerraboina@gmail.com";  
  
$subject = "Enquiry Received";  
  
$body = "A new enquiry has been received:\n\n";  
$body .= "Name:\n".$_POST['name']."\n\n";  
$body .= "Enquiry:\n".$_POST['enquiry'];  
  
mail($to, $subject, $body);  
  
echo 'success';  
  
?>