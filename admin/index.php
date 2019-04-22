<script type="text/javascript">
function validateForms()
{
var a=document.forms["login"]["username"].value;
var b=document.forms["login"]["password"].value;
if (a==null || a=="")
  {
  alert("Username must be filled out");
  return false;
  }
if (b==null || b=="")
  {
  alert("Password must be filled out");
  return false;
  }
}
</script>
<style>
fieldset {
    background-color: #DAF5C7;
    border: 1px solid #2B6600;
    margin: 0 auto;
    padding: 12px 17px;
	width:414px;
}
legend {
    background-color: #2B6600;
    color: #FFFFFF;
    font-size: 1.1em;
    font-weight: bold;
    padding: 4px 8px;
}
#vbvbvbv{
	margin: 0 0 8px;
    width: 300px;
	border: 1px solid #909090;
    padding: 3px;
}
label.float {
    clear: left;
    display: block;
    float: left;
    margin: 4px 0 0;
    width: 100px;
}
</style>
<fieldset>
<legend>Administrative Login</legend>
<form action="adminlogin.php" method="post" name="login" onsubmit="return validateForms()">
	<label class="float" for="input-one">Username: </label><input type="text" id="vbvbvbv" name="username" /><br>
	<label class="float" for="input-one">Password: </label><input type="password" id="vbvbvbv" name="password" /><br>
	<input type="submit" value="login" style="margin-left: 99px;">
</form>
</fieldset>