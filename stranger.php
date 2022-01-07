<? php 
$name =$_POST['name'];
$admin_email =$_POST['email'];
$subject =$_POST['subject'];
$school_name =$_POST['school_name'];
$message =$_POST['message'];

$email_from = "miralananair@gmail.com";
$email_subject = "New Stranger Form Submission";
$email_body = "Student Report Name:  $name.\n".
              "School Name:  $school_name.\n".
              "Message:  $message .\n".
              "From:Safety 4 School. If you receive this email this means that one of the students in your school or class has a real emergency and that they need your help urgently. Safety 4 School is a platform which empowers kids to tell what they want when they are in danger. The will report from safety4school.com. If you wish to stop these emails please tell your students to stop reporting. Thank you very much. Made with Love by Safety 4 School!";


$to = $admin_email;

mail($to,$email_subject,$email_body, $email_from);
header("Location: stranger.html");


?>

