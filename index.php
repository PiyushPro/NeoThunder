<?php
// Pokedex script:   http://pastebin.com/bFscDD5H
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pok&eacute;mon Neo Thunder</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="http://www.pkmneothunder.com/favicon.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="index.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" style="border:solid black 1px">
<table class="table"id="Logo"><tr><td><img id="position"src='http://www.pkmneothunder.com/images/Logo.jpg'height="200px"> </td></tr> </table>  
<table id="btn-placement" class="table" style="background:url('http://www.pkmneothunder.com/images/twitter1.png');margin-top:-20px;">
 <tr><td><button type="button" id="index" class="button_case">Home</button><button id="login"type="button" class="button_case">Login</button><button type="button" id="Register" class="button_case">Register</button><button type="button" id="forum" class="button_case">Forum</button></td></tr>
      </table>
	<table id="Swarm_alert"class="table"style="border:solid black 1px">
	<tr><td><img src="http://www.pkmneothunder.com/images/swarm.jpg"height="100px"width="100px"><br/>
<div id='swarm'><img src="http://www.pkmneothunder.com/images/pkmn/01.png" /></div>

<br/><nav id="Server"style="margin-left:0px;margin-top:-10px"><?=date('l jS F Y h:i:s A',time());?><nav id="txt"style="margin-left:0px;margin-top:-13px"></nav></nav><br/></td></tr>
      </table>
<table id="Content"class="table"style="border:solid black 1px;">
<?php require 'index2.php';?>
      </table> 
<table id="Legal_info" class="table" style="border:solid black 1px;margin-left:6px;margin-top:-15px;background:url('http://pkmneothunder.com/images/twitter1.png')">
<tr><td><center>Pok&eacute;mon is an idea created and developed by Nintendo.All copyrights and trademarks are reserved with their respective owners.<br/>
The site is not affliated to GameFreak or Nintendo and its associates.<br/><terms>Terms of use</terms> | Privacy Policy | <id>Credits</id></center></td></tr>
</table>

