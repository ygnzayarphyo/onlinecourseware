<?php
include('../db.php');
?>
<?php
	require_once('auth.php');
?>
<script type="text/javascript">
function validateForms()
{
var a=document.forms["question"]["quest"].value;
var b=document.forms["question"]["ans"].value;
if (a==null || a=="")
  {
  alert("question must be filled out");
  return false;
  }
if (b==null || b=="")
  {
  alert("Answer must be filled out");
  return false;
  }
}
</script>
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">
/*<![CDATA[*/
google.load("jquery","1.5.2");
google.load("jqueryui","1.8.2");

/*]]>*/
</script>
<style type="text/css">
    #buttondiv, #dropdowndiv { border:solid 1px #0066A4;border-left: none;border-right:none;padding:10px 0;}
    label { padding:0 10px;color:#000;}
    .choices { margin:10px 0;color:#000;}
</style>
<script type="text/javascript">
    $(document).ready(function(){
        $counter = 0; // initialize 0 for limitting textboxes
        $('#buttonadd').click(function(){
            
                $counter++;
                $('#buttondiv').append('<div><label>Teacher #'+$counter+'</label><select name="teacher[]"> <?php $id=$_SESSION['SESS_MEMBER_ID']; $result = mysql_query("SELECT * FROM teacher where id!='$id'"); while($row = mysql_fetch_array($result)) { echo '<option value="'.$row['id'].'">'.$row['fname'].'</option>'; } ?> </select></div>');
         
        });
    });
</script>
<form action="savequestion.php" method="post" name="question" onsubmit="return validateForms()">
<input type="hidden" name="cat" value="<?php echo $_GET['cat'] ?>">
<input type="hidden" name="titl" value="<?php echo $_GET['title'] ?>">
<input type="hidden" name="titleeee" value="<?php echo $_GET['bla'] ?>">
Question:<br> <textarea name="questions" style="width: 413px;"></textarea><br>
Answer:<br><input type="text" name="ans1" placeholder="correct answer"></br>
<input type="text" name="ans2" placeholder="option"></br>
<input type="text" name="ans3" placeholder="option"></br>
<input type="text" name="ans4" placeholder="option"></br>
<div id="buttondiv">

</div>
<input name="button" type="button" id="buttonadd" value="Add Teacher"/>
<input type="submit" value="save">

</form>