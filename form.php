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
if($_SERVER["REQUEST_METHOD"] === 'POST') {
    $data = array_map('trim', $_POST);
    $errors= [];
    
    if(!isset($data['lastname']) || empty($data['lastname']))
    $errors[] = "Le nom est obligatoire";
    
    if(!isset($data['firstname']) || empty($data['firstname']))
    $errors[] = "Le prénom est obligatoire";
    
    if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL))
    $errors[] = "L'url comporte une erreur";
    
    if(!isset($data['phone']) || empty($data['phone']))
    $errors[] = "Le téléphone est obligatoire";
    
    if(!isset($data['subject']) || empty($data['subject']))
    $errors[] = "Le sujet est obligatoire";
    
    if(strlen($data['message']) > 200)
    $errors[] = "Le message ne doit pas dépasser 200 caractères";

    if(count($errors) === 0) {
        header('Location: success.php');
        die(); 
    }
  }
?>

 </form>