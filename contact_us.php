<?php

include("elements/header.php");

?>


<div class="container">
  <div class="header"> <h1>CONTACT US</h1> <p>Send us your message and we will get back to you as soon as possible</p>
    </div>
  <form method="post" class="contact_form" target="_blank" action="contact_action_page.php"> <!-- action="contact_action_page.php" -->

    <p class="contact_red_warning"> Please fill in all required fields*</p>
   
    
    <label for="firstname">First Name*</label>
    <input type="text" id="firstname" name="firstname" placeholder="Your name..">
  
    <label for="lastname">Last Name</label>
    <input type="text" id="lastname" name="lastname" placeholder="Your last name..">
    

    <label for="Email">Email*</label>
    <input type="text" id="Email" name="email" placeholder="Your email..">
    
    
    <label for="Message">Message*</label>
    <textarea id="Message" name="message" placeholder="Write something here.." style="height:200px"></textarea>
    

    <input class="contact_btn" name="submit" type="submit" value="SEND MESSAGE"> 

  </form>
</div>



<script>
	
function ok(){
	alert("Your Message has been sent successfully !!");
}
</script>










<?php

include("elements/footer.php");

?>