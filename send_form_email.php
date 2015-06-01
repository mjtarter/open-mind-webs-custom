<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "mjtarter@openmindwebs.com";
 
    $email_subject = "New Client Form";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['title']) ||
 
        !isset($_POST['first_name']) ||
 
        !isset($_POST['last_name']) ||
 
        !isset($_POST['email']) ||
		
		!isset($_POST['phone']) ||
		 
		!isset($_POST['business_category']) ||
		
		!isset($_POST['services_requested1']) ||
		
		!isset($_POST['services_requested2']) ||
		
		!isset($_POST['services_requested3']) ||
		
		!isset($_POST['services_requested4']) ||
		
		!isset($_POST['services_requested5']) ||

		!isset($_POST['services_requested6']) ||
		
		!isset($_POST['services_requested7']) ||
		
		!isset($_POST['services_requested8']) ||
		
		!isset($_POST['budget']) ||
		
		!isset($_POST['summary']) ||
 
        !isset($_POST['organization'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');         
 
    }
 
    $title = $_POST['title']; // required     
 
    $first_name = $_POST['first_name']; // required
 
    $last_name = $_POST['last_name']; // required
 
    $email_from = $_POST['email']; // required
 
    $phone = $_POST['phone']; // not required
	
    $organization = $_POST['organization']; // required
	
    $business_category = $_POST['business_category']; // not required
	
	$services_requested1 = $_POST['services_requested1']; // not required
	
	$services_requested2 = $_POST['services_requested2']; // not required
	
	$services_requested3 = $_POST['services_requested3']; // not required
	
	$services_requested4 = $_POST['services_requested4']; // not required
	
	$services_requested5 = $_POST['services_requested5']; // not required
	
	$services_requested6 = $_POST['services_requested6']; // not required
	
	$services_requested7 = $_POST['services_requested7']; // not required
	
	$services_requested8 = $_POST['services_requested8']; // not required
	
	$budget = $_POST['budget']; // not required
	
	$summary = $_POST['summary']; // not required



 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  }
 
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
    $email_message .= "Services Requested1: ".clean_string($services_requested1)."\n";
	
	$email_message .= "Services Requested2: ".clean_string($services_requested2)."\n";

 	$email_message .= "Services Requested3: ".clean_string($services_requested3)."\n";
	
	$email_message .= "Services Requested4: ".clean_string($services_requested4)."\n";
	
    $email_message .= "Services Requested5: ".clean_string($services_requested5)."\n";
	
	$email_message .= "Services Requested6: ".clean_string($services_requested6)."\n";

 	$email_message .= "Services Requested7: ".clean_string($services_requested7)."\n";
	
	$email_message .= "Services Requested8: ".clean_string($services_requested8)."\n";

    $email_message .= "Title: ".clean_string($title)."\n";
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
	
	$email_message .= "Last Name: ".clean_string($last_name)."\n";

    $email_message .= "Email: ".clean_string($email)."\n";
 
    $email_message .= "Phone: ".clean_string($phone)."\n";
	 
    $email_message .= "Organization: ".clean_string($organization)."\n";
	
    $email_message .= "Business Category: ".clean_string($business_category)."\n";
	
	  $email_message .= "Budget: ".clean_string($budget)."\n";
	
    $email_message .= "Summary: ".clean_string($summary)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
 
 
Thank you for contacting us. We will be in touch with you very soon.
 
 
 
<?php
 
}
 
?>