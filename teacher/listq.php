<?php
	require_once('auth.php');
?>
<?php
			echo '<div style="display:none;">';
				$rrrr=$_POST['filter'];
			echo '</div>';
?>
<html>
<head>
<title>pcci</title>
<link type="text/css" href="../css/style.css" rel="stylesheet" />
<!--sa poip up-->
	<link href="../src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
	   <script src="../lib/jquery.js" type="text/javascript"></script>
	  <script src="../src/facebox.js" type="text/javascript"></script>
	  <script type="text/javascript">
		jQuery(document).ready(function($) {
		  $('a[rel*=facebox]').facebox({
			loadingImage : '../src/loading.gif',
			closeImage   : '../src/closelabel.png'
		  })
		})
	  </script>
	  <link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
		<link href="../_assets/themes/yui/style.css" rel="stylesheet" type="text/css" />
    <script src="../_assets/js/jquery-1.2.6.min.js" type="text/javascript"></script>        
    <script src="../_assets/js/jquery.wjb.selectallrows.js" type="text/javascript"></script>
	<script type="text/javascript">
        $(document).ready(function() {
        $("#resultTable thead tr th:first input:checkbox").click(function() {
            var checkedStatus = this.checked;
            $("#resultTable tbody tr td:first-child input:checkbox").each(function() {
                this.checked = checkedStatus;
            });
        });

            $("#resultTable").selectAllRows();

            $("#resultTable").selectAllRows({ column: 'last' });

            $("#resultTable").selectAllRows({
                column: '2',
                selectTip: 'Select All Students',
                unselectTip: 'Un-Select All Students'
                })
                .css("border-width", "10px");
        });
    </script>
		
</head>
<body>
<div id="wrapper">
		<div>
		<a rel="facebox" href="addquestion.php?title=<?php echo $_GET['id'] ?>&cat=<?php echo $_GET['cat'] ?>&bla=<?php echo $_GET['title'] ?>" id="addq" style="color:#000;">Add Question</a>
		<form action="activate.php" method="post">
		<table cellpadding="1" cellspacing="1" id="resultTable">
					  <thead>
						<tr>
							<th><input type="checkbox" /></th>
							<th>Question</th>
							<th>Answer</th>
							<th>Status</th>
							<th>Date</th>
							<th>Number Used</th>
							<th>Action</th>
						</tr>
					   </thead>
					   <tbody>
		<?php
		include('../db.php');
		$ttt=$_GET['title'];
		$ccccc=$_GET['cat'];
		$id=$_SESSION['SESS_MEMBER_ID'];
		$result = mysql_query("SELECT * FROM question where teacher_id='$id' AND title='$ttt' AND cat='$ccccc'");
		while($row = mysql_fetch_array($result))
		  {
		  echo "<tr>";
		  echo "<td>" . "<input type='checkbox' name='selector[]' value='".$row['id']."' />" . "</td>";
		  echo "<td>" . $row['question'] . "</td>";
		  echo "<td>" . $row['answer'] . "</td>";
		  echo "<td>" . $row['status'] . "</td>";
		  echo "<td>" . $row['date'] . "</td>";
		  echo "<td>" . $row['num_use'] . "</td>";
		  echo "<td><div align='center'>" . '<a rel="facebox" href="editq.php?id='.$row['id'].'&cat='.$_GET['cat'].'&title='.$_GET['title'].'"><img src="b_edit.png"></a>|<a href="deleteq.php?id='.$row['id'].'"><img src="b_drop.png"></a>' . "</div></td>";
		  echo "</tr>";
		  }
		?> 
		</tbody>
		</table>
		<input type="submit" name="bnm" value="activate">
        <input type="submit" name="bnm" value="deactivate">
		<input type="hidden" name="teacherId11" value="<?php echo $id; ?>" />
		</form>
		</div>
	</div>
</body>
</html>