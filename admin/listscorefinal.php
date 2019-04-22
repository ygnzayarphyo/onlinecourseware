<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=400, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Inel Power System</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 400px; font-size:16px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<a href="javascript:Clickheretoprint()">print</a>
<div id="print_content" style="width: 400px;">
<table cellpadding="1" cellspacing="1" border="1">
<thead>
<tr>
	<th>Name</th>
	<th>Date</th>
	<th>Scores</th>
</tr>
</thead>
<tbody>
<?php
include('../db.php');
$result = mysql_query("SELECT * FROM stud_scores WHERE examtype='finalexam'");
while($row = mysql_fetch_array($result))
  {
  echo '<tr>';
  echo '<td>';
  $ffff=$row['name'];
  $results = mysql_query("SELECT * FROM student WHERE id='$ffff'");
	while($rows = mysql_fetch_array($results))
	  {
	  echo $rows['fname'].' '.$rows['lname'];
	  }
  echo '</td>';
  echo '<td>'.$row['date'].'</td>';
  echo '<td>'.$row['score'].'</td>';
  echo '</tr>';
  }
?> 
</tbody>
</table>
</div>