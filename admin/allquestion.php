</title>
<!--sa poip up-->
	<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
	<script src="lib/jquery.js" type="text/javascript"></script>
	  <script src="src/facebox.js" type="text/javascript"></script>
	  <script type="text/javascript">
		jQuery(document).ready(function($) {
		  $('a[rel*=facebox]').facebox({
			loadingImage : 'src/loading.gif',
			closeImage   : 'src/closelabel.png'
		  })
		})
	  </script>
	  <link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
<script src="runtime.js" type="text/javascript" charset="utf-8"></script>
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
<div class='wrapper'>
  <h1><a href="home.php">Admin Panel</a> -> List of all questions</h1>
    <label for="filter">Filter</label> <input type="text" name="filter" value="" id="filter" />
	<form action="activateall.php" method="post">
    <table cellpadding="1" cellspacing="1" id="resultTable">
			<thead>
				<tr>
					<th><input type="checkbox" /></th>
					<th>Question</th>
							<th>Answer</th>
							<th>Status</th>
							<th>Date</th>
				</tr>
			</thead>
        <tbody>
		<?php
			@require_once('auth.php');
			include('../db.php');
			$results = mysql_query("SELECT * FROM question");
			while($row = mysql_fetch_array($results))
			  {
			echo "<tr>";
		  echo "<td>" . "<input type='checkbox' name='selector[]' value='".$row['id']."' />" . "</td>";
		  echo "<td>" . $row['question'] . "</td>";
		  echo "<td>" . $row['answer'] . "</td>";
		  echo "<td>" . $row['status'] . "</td>";
		  echo "<td>" . $row['date'] . "</td>";
		  echo "</tr>";
			}
		?>
        </tbody>
    </table>
	<input type="submit" name="bnm" value="activate">
	<input type="submit" name="bnm" value="deactivate">
	</form>
</div>
  </body>
</html>