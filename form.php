<form  action="form.php"  method="post">
    <div>
      <label  for="first name">First name :</label>
      <input  type="text"  id="first name"  name="user_first name" required >
    </div>
    <div>
      <label  for="last name"> Last name :</label>
      <input  type="text"  id="last name"  name="user_last name" required >
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email" required >
    </div>
    <div>
      <label  for="phone"> Phone :</label>
      <input  type="numbers"  id="phone"  name="user_phone" required>
    </div>
    <div>
    <div>
      <label  for=""> Subject :</label>
      <input  type="text"  id="subject"  name="user_subject" required>
      <select> subject="nom" size="5" </select>
   </div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
 

  <?php

$firstnameErr = $lastnameErr = $emailErr = $phoneErr = $subjectErr =  "";
$firstname = $lastname = $email = $subject = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
}
  if (empty($_POST["firstname"])) {
    $firstnameErr = "Name is required";
  } else {
    $firstname = test_input($_POST["firstname"]);
  }
  if (empty($_POST["lastname"])) {
    $lasttnameErr = "Name is required";
  } else {
    $lastname = test_input($_POST["lastname"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  }
   else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["phone"])) {
    $phone = "";
  } else {
    $phone = test_input($_POST["phone"]);
  }

  if (empty($_POST["subject"])) {
    $subject = "";
  } else {
    $subject = test_input($_POST["subject"]);
  }

?>
 </form>