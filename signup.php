<img src='http://pkmneothunder.com/Poke_reg.png'style="margin-top:252px;z-index:1;margin-left:610px;position:absolute">
	  <div id="Display"style="background:url('http://pkmneothunder.com/reg.png');height:450px;width:500px;margin-top:170px;margin-left:360px;position:absolute;"><p id="email_error"style="margin-left:168px;margin-top:150px"></p>
	  </div> <div style="height:600px; width:420px;border:none;margin-top:-10px;margin-left:120px;margin-right:150px;position:absolute;background:url('http://pkmneothunder.com/Register.png')">

<div id="Gas" style="margin-top:220px;margin-left:10px;border:solid black 1px;position:absolute;height:450px;width:360px">
  <form role="form-horizontal" method="post"action="signup.php" >
    <br/> 

	<center>Register</center>
	  <div class="form-group">
	
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
      </div><br/>
	 </div>
	
	 <br/>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Pass:  </label>
	  <div class="control-label col-sm-10">
      <input type="password" class="form-control" name="passwd" placeholder="Enter password"id="pass">
	  </div><br/>
    </div>
	<br/>
	  <div class="form-group">
      <label class="control-label col-sm-2" for="Name">Trainer:  </label>
	  <div class="control-label col-sm-10">
      <input type="Trainer_name" class="form-control" name="lastname" placeholder="Enter name"value=""id="user">
	  </div><br/>
    </div>
	<br/>
	 <div class="form-group">
      <label class="control-label col-sm-2" for="name">Real:  </label>
	  <div class="control-label col-sm-10">
      <input type="Username" class="form-control" name="firstname" placeholder="Enter Real name"value="">
	  </div><br/>
    </div>
	<br/>
    <div class="checkbox"style="margin-left:0px">
<center>By clicking the Start! button you're accepting our <u>Terms of Use</u> and <u>Privacy policy.</u></center><br/>
    </div>
<script>
function myfunc(){
document.getElementById('Gas').innerHTML="<img src='http://pkmneothunder.com/Egg_crack.gif'height='80'width='80'style='margin:150px;'><br/><center>Be ready to experience the beta and become a worthy trainer</center>";
}
</script>
	<input type="hidden" name="submitted" id="submitted" value="yes">
    <button type="submit" class="button_case" value="Register"style="margin-left:80px"onclick="myfunc()">Start!</button>
  </form>
</div>
</div>
<!-- Code Ends -->
<script>
		$(document).ready(function(){
		$("#email").mouseleave(function () { //user types username on inputfiled
		   var email = $(this).val(); //get the string typed by user_email
		   var x=email.valueOf();
			 if(x=="")
		   {
		   document.getElementById('Display').style.visibility="visible";
		   document.getElementById('email_error').innerHTML="Please insert the email id.Its's<br/>totally secured by our Team's<br/> Technicial department";
		   }
		   else
			  document.getElementById('Display').style.visibility="hidden";
		   });
				$("#pass").mouseleave(function () { //user types username on inputfiled
			  var lastname = $(this).val(); //get the string typed by user_email
		   var y=lastname.valueOf();
			  if(y=="")
		   {
		   document.getElementById('Display').style.visibility="visible";
		   document.getElementById('email_error').innerHTML="Trainers don't have time<br/> to remember these.<br/>We remember it on your<br/> behalf";
		   }
		   else
			  document.getElementById('Display').style.visibility="hidden";
		   });
		   $("#user").mouseleave(function () { //user types username on inputfiled
			  var passwd = $(this).val(); //get the string typed by user_email
		   var z=passwd.valueOf(); //returns string representation of the value entered
			  if(z=="")
		   {
		   document.getElementById('Display').style.visibility="visible";
		   document.getElementById('email_error').innerHTML="Enter the trainer name to be used";
		   }
		   else
			  document.getElementById('Display').style.visibility="hidden";
		   });
		   });		
	   </script>
