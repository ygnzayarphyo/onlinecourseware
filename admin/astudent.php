<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<script type="text/javascript">
function validateForm()
{
var a=document.forms["reg"]["fname"].value;
var b=document.forms["reg"]["lname"].value;
var c=document.forms["reg"]["mname"].value;
var d=document.forms["reg"]["bday"].value;
var e=document.forms["reg"]["address"].value;
var f=document.forms["reg"]["zipcode"].value;
var g=document.forms["reg"]["gender"].value;
var h=document.forms["reg"]["status"].value;
var i=document.forms["reg"]["contact"].value;
var j=document.forms["reg"]["email"].value;
var k=document.forms["reg"]["username"].value;
var l=document.forms["reg"]["password"].value;
var m=document.forms["reg"]["cpassword"].value;
if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f=="") && (g==null || g=="") && (h==null || h=="") && (i==null || i=="") && (j==null || j=="") && (k==null || k=="") && (l==null || l=="") && (m==null || m==""))
  {
  alert("All Field must be filled out");
  return false;
  }
if (a==null || a=="")
  {
  alert("First name must be filled out");
  return false;
  }
if (b==null || b=="")
  {
  alert("Last name must be filled out");
  return false;
  }
if (c==null || c=="")
  {
  alert("Middle Name name must be filled out");
  return false;
  }
if (d==null || d=="")
  {
  alert("Birthday must be filled out");
  return false;
  }
if (e==null || e=="")
  {
  alert("Address must be filled out");
  return false;
  }
if (f==null || f=="")
  {
  alert("Zipcode must be filled out");
  return false;
  }
if (g==null || g=="")
  {
  alert("Gender must be filled out");
  return false;
  }
if (h==null || h=="")
  {
  alert("Status must be filled out");
  return false;
  }
if (i==null || i=="")
  {
  alert("Contact must be filled out");
  return false;
  }
if (j==null || j=="")
  {
  alert("Email must be filled out");
  return false;
  }
if (k==null || k=="")
  {
  alert("Username must be filled out");
  return false;
  }
if (l==null || l=="")
  {
  alert("Password must be filled out");
  return false;
  }
if (m!=l)
  {
  alert("Password mismatched");
  return false;
  }
var x=document.forms["reg"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
}
</script>
<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>
<link rel="stylesheet" type="text/css" href="../tcal.css" />
<script type="text/javascript" src="../tcal.js"></script> 
<h1><a href="home.php">Admin Panel</a> -> add Student</h1>
<h2 class="accordion-header">Register</h2>
            <div class="accordion-content">
                <form action="savestudent.php" method="post" name="reg" onSubmit="return validateForm()">
			<div id="textboxes">
			First Name: <br><input type="text" name="fname" />
			</div>
			<div id="textboxes">
			Last Name: <br><input type="text" name="lname" />
			</div>
			<div id="textboxes">
			Middle Name: <br><input type="text" name="mname" />
			</div>
			<div id="textboxes">
			Birthday: <br><input type="text" name="bday" class="tcal" />
			</div>
			<div id="textboxes">
			Address: <br><input type="text" name="address" />
			</div>
			<div id="textboxes">
			Zipcode: <br><input type="text" name="zipcode"  onkeypress="return isNumberKey(event)" />
			</div>
			<div id="textboxes">
			Gender: <br>
			<select name="gender">
			<option>Male</option>
			<option>Female</option>
			</select>
			</div>
			<div id="textboxes">
			Civil Status:<br>
			<select name="status">
			<option>Single</option>
			<option>Married</option>
			</select>
			</div>
			<div id="textboxes">
			Contact: <br><input type="text" name="contact"  onkeypress="return isNumberKey(event)" />
			</div>
			<div id="textboxes">
			Email: <br><input type="text" name="email" />
			</div>
			
			<div id="textboxes">
			Username: <br><input type="text" name="username" />
			</div>
			<div id="textboxes">
			Password: <br><input type="password" name="password" />
			</div>
			<div id="textboxes">
			Confirm Password: <br><input type="password" name="cpassword" />
			</div>
			<div id="textboxes">
			Teacher: <br><select name="teacher"><?php include('../db.php'); $result = mysql_query("SELECT * FROM teacher"); while($row = mysql_fetch_array($result)) { echo '<option value="'.$row['id'].'">'.$row['fname'].'</option>'; } ?> </select>
			</div>
			<div id="textboxes">
			<input type="submit" value="Save" />
			</div>
			<div class="clearfix"></div>
			</form>
            </div>
			<div class="clearfix"></div>
		</div>