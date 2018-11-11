<?php include_once "test_function.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>Test 1</title>
<style>
	div.container {
	    width: 100%;
	    border: 1px solid gray;
	    font-size: 14px;
	    font-family: Arial, Helvetica, sans-serif;
	}
	table{width:99%;border-collapse:collapse; }
	table tr td {border:1px solid gray; padding: 4px 10px; }
</style>
<script>
window.onload = function() {
  document.getElementById("txt_input").focus();  
};
</script>
</head>
<body>
<div class="container">
    <h3>#1. Given an input with a string, use recursion to find the first position letter a is on.</h3>
<?php
if (isset($_POST['txt_input']) && $_POST['txt_input'] == '')
	echo "<div style='color:red'>Please input text string</div>";
?>
	<div>&nbsp;</div>
	<div>&nbsp;</div>
	<form method="post" name="test1" action="test1.php"  >
	<div >Input String</div>	
	<div >
		<input id="txt_input" name="txt_input" type="text" value="">
	</div>
	<div>&nbsp;</div>
	<div >Search Character</div>	
	<div >
		<input id="txt_search" name="txt_search" type="text" value="">
	</div>
	<div>&nbsp;</div>
	<div >
		<input type="submit" name='submit' value='Search'/>  
	</div>
	</form>
<?php
if (isset($_POST['txt_input']) && $_POST['txt_input'] != '')
{
	$txt_input = $_POST['txt_input'];
	$txt_search = $_POST['txt_search'];

	// Find position of character
	$position = findPosition($txt_input, $txt_search);
	echo "<br><table >";
	echo "<tr><td width='140px'>Input String:</td><td>".$txt_input."</td></tr>";
	echo "<tr><td>Search Character:</td><td>".$txt_search."</td></tr>";
	echo "<tr><td>Position Find:</td><td>".$position."</td></tr>";	
	echo "</table><br>";
}	
?>	
</div>
</body>
</html>