<form  action="form.php"  method="post">
    <div>
      <label  for="first name">First name :</label>
      <input  type="text"  id="first name"  name="user_first name" required >
    </div>
    <div>
      <label  for="last name"> Last name :</label>
      <input  type="text"  id="last nom"  name="user_last name" required >
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email" required >
    </div>
    <div>
      <label  for="phone"> Phone :</label>
      <input  type="numbers"  id="phone"  name="user_phone">
    </div>
    <div>
    <div>
      <label  for=""> Subject :</label>
      <input  type="text"  id="subject"  name="user_subject" >
      <select> subject="nom" size="5" </select>
   </div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>