<style>.back{height:200px;width:420px;border:none;margin-top:10px;margin-left:100px;margin-right:150px;position:absolute;background:url('http://pkmneothunder.com/back.png')}.Gas{margin-top:150px;border:solid black 1px;position:absolute;height:450px;width:340px;margin-left:50px;}</style>
<center>
<div class="back">
<div class="Gas" id="Gas">
<script>
function myfunc(){
document.getElementById('Gas').innerHTML="<img src='Pokeball.png'height='100'width='100'style='margin:150px;'>";
}
</script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <form role="form-horizontal" method="post" action="login.php" >
    <br/>
	<div class="form-group">
    	Username: <input type="text" class="form-control" name="username"  placeholder="Enter Username"><br />
		Password: <input type="password" class="form-control" name="password" placeholder="Enter Password"><br />
      	<input type="checkbox" name="remember-me"> Remember me<br /><br />
		<input type="hidden" name="submitted" id="submitted" value="yes">
	    <button type="submit" class="button_case" value="Login">Catch It!</button>
	</div>
  </form>
</div>
</div> 
</center>
