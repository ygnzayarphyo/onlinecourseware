<?php
@require_once ('auth.php');
include ('db.php');
?>
<?php
$id = $_SESSION['SESS_MEMBER_ID'];
$qry = "UPDATE student SET log_status='2' WHERE id='$id'";
$result = mysql_query($qry);
?>
<style>
	body {
		/*background: -moz-linear-gradient(45deg, #B4E391 0%, #238210 50%, #B4E391 100%) repeat fixed 0 0 transparent;
		background: -webkit-linear-gradient(45deg, #B4E391 0%, #238210 50%, #B4E391 100%) repeat fixed 0 0 transparent;
		background: linear-gradient(45deg, #B4E391 0%, #238210 50%, #B4E391 100%) repeat fixed 0 0 transparent;
		color: #d9d9d9;*/
		font-family: Tahoma, Arial, helvetica, sans-serif;
		font-size: 100%;
		line-height: 1em;
		min-width: 940px;
		margin: 0;
		padding: 0;
	}
	#list {
		background: url("images/darker-green.png") repeat-x scroll 0 0 transparent;
		margin: 0 auto;
		width: 30%;
		text-align: left;
		font-size: 40px;
		border: 1px solid #fff;
		padding: 50px;
		line-height: 45px;
		color: #000;
	}
	#score {
		margin: 0 auto;
		width: 30%;
		text-align: center;
		font-size: 40px;
		line-height: 50px;
	}
	.coursePreviewBottom .images {
		float: left;
		padding: 0 13px 0 0;
	}
	.courseBox {
		width: 750px;
		margin: 12px 0;
		padding: 0 30 0 190;
	}
	.coursePreviewTop {
		min-width: 440px;
		width: 536px;
		background-color: #b30838;
		padding: 1px 13px;
		margin: 0;
		-webkit-border-radius: 10px 10px 0 0;
		border-radius: 10px 10px 0 0;
		-webkit-box-shadow: 2px 2px 5px 0px #000;
		box-shadow: 2px 2px 5px 0px #000;
	}
	.coursePreviewTop, .coursePreviewBottom {
		z-index: inherit;
		/* position: inherit; */
		width: auto;
		min-width: 0;
		border-radius: 0;
		box-shadow: none;
		-webkit-border-radius: 0;
		border-radius: 0;
		-webkit-box-shadow: none;
		box-shadow: none;
	}
	.coursePreviewTop h3 {
		color: #fff;
		font-size: 1.2em;
		padding: 7px 25px 7px 0;
	}
	.coursePreviewTop, .coursePreviewBottom {
		z-index: inherit;
		/* position: inherit; */
		width: auto;
		min-width: 0;
		border-radius: 0;
		box-shadow: none;
		-webkit-border-radius: 0;
		border-radius: 0;
		-webkit-box-shadow: none;
		box-shadow: none;
	}
	.coursePreviewTop, .coursePreviewBottom {
		z-index: inherit;
		/* position: inherit; */
		width: auto;
		min-width: 0;
		border-radius: 0;
		box-shadow: none;
		-webkit-border-radius: 0;
		border-radius: 0;
		-webkit-box-shadow: none;
		box-shadow: none;
	}
	.coursePreviewTable {
		border-collapse: collapse;
		margin-top: -8px;
		width: 586px;
	}
	table {
		display: table;
		border-collapse: separate;
		border-spacing: 2px;
		border-color: grey;
	}
	.coursePreviewBottom .info {
		float: left;
		position: inherit;
		text-align: inherit;
		width: 400px;
		margin-left: 135px;
	}
	.coursePreviewBottom {
		z-index: 1;
		min-width: 440px;
		width: 723px;
		height: 160px;
		position: absolute;
		background-color: #f3efeb;
		color: #333;
		padding: 13px;
		-webkit-border-radius: 0 0 10px 10px;
		border-radius: 0 0 10px 10px;
		-webkit-box-shadow: 2px 2px 5px 0px #000;
		box-shadow: 2px 2px 5px 0px #000;
	}
	.coursePreviewTable td p.first {
		border-bottom: 1px solid #D5C9BA;
	}
	.coursePreviewBottom p {
		font-size: 1em;
	}
	.coursePreviewBottom p {
		font-size: 0.9em;
		padding: 6px 0;
		margin: 0;
	}
	p {
		margin-bottom: 10px;
		color: #333;
	}
	p {
		display: block;
		margin-block-start: 1em;
		margin-block-end: 1em;
		margin-inline-start: 0px;
		margin-inline-end: 0px;
	}
	.clear {
		clear: both;
		display: block;
		overflow: hidden;
		visibility: hidden;
		width: 0;
		height: 0;
		margin: 0;
		padding: 0;
	}

</style>
<br/>
<h1><a href="home.php">Student Panel</a> -> Courses</h1>
<div class="courseBox">
	<div id="courseInfoInner" style="height: 260px;">
		<div class="coursePreviewTop">
			<h3 id="courseTitle">6.0001 Introduction to Computer Science and Programming in Python</h3>
		</div>
		<div class="coursePreviewBottom">
			<div class="images"><img alt="" class="first" id="courseThumb" src="images/courses/6-0001f16-th.jpg">
				<br>
				<a id="viewCourse" href=""><img src="images/courses/button_view-course.png" alt="Click here to view this course."> </a>
			</div>
			<div class="info">
				<table class="coursePreviewTable">
					<tbody>
						<tr>
							<td colspan="2">
							<p class="first">
								6.0001 is the most common starting point for MIT students with little or no programming experience. This half-semester course introduces computational concepts and basic programming. Students will develop confidence in their ability to apply programming techniques to problems in a broad range of fields. This course uses the Python 3.5 programming language.
							</p>
							<p>
								<strong>Prerequisites:</strong> No prior programming experience is necessary to take, understand, or be successful in 6.0001. Familiarity with pre-calculus, especially series, will be helpful for some topics, but is not required to understand the majority of the content.
							</p></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="clear">
	&nbsp;
</div>
<div class="courseBox">
	<div id="courseInfoInner" style="height: 260px;">
		<div class="coursePreviewTop">
			<h3 id="courseTitle">6.0002 Introduction to Computational Thinking and Data Science</h3>
		</div>
		<div class="coursePreviewBottom">
			<div class="images"><img alt="" class="first" id="courseThumb" src="images/courses/6-0002f16-th.jpg">
				<br>
				<a id="viewCourse" href=""><img src="images/courses/button_view-course.png" alt="Click here to view this course."> </a>
			</div>
			<div class="info">
				<table class="coursePreviewTable">
					<tbody>
						<tr>
							<td colspan="2">
							<p class="first">
								6.0002 is the continuation of 6.0001 Introduction to Computer Science and Programming in Python and is intended for students with little or no programming experience. It aims to provide students with an understanding of the role computation can play in solving problems and to help students, regardless of their major, feel justifiably confident of their ability to write small programs that allow them to accomplish useful goals. The class uses the Python 3.5 programming language.
							</p>
							<p>
								<strong>Prerequisites:</strong> 6.0001 Introduction to Computer Science and Programming in Python or permission of instructor.
							</p></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="clear">
	&nbsp;
</div>

<div class="courseBox">
	<div id="courseInfoInner" style="height: 260px;">
		<div class="coursePreviewTop">
			<h3 id="courseTitle">6.00SC Introduction to Computer Science and Programming</h3>
		</div>
		<div class="coursePreviewBottom">
			<div class="images"><img alt="" class="first" id="courseThumb" src="images/courses/6-00scf11-th.jpg">
				<br>
				<a id="viewCourse" href=""><img src="images/courses/button_view-course.png" alt="Click here to view this course."> </a>
			</div>
			<div class="info">
				<table class="coursePreviewTable">
					<tbody>
						<tr>
							<td colspan="2">
							<p class="first">
								This semester-long course formed the basis for the 6.0001 + 6.0002 sequence, and continues to be taught at MIT. It aims to provide students with an understanding, regardless of their major, to feel justifiably confident of their ability to write small programs that allow them to accomplish useful goals. The course uses the Python programming language.
							</p>
							<p>
								<strong>Prerequisites:</strong> This course is aimed at students with little or no prior programming experience, but a desire to understand computational approaches to problem solving. Since computer programming involves computational modes of thinking, it will help to have some mathematical and logical aptitude. You should be confident with your math skills.
							</p></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="clear">
	&nbsp;
</div>

<div class="courseBox">
	<div id="courseInfoInner" style="height: 260px;">
		<div class="coursePreviewTop">
			<h3 id="courseTitle">6.S095 Programming for the Puzzled</h3>
		</div>
		<div class="coursePreviewBottom">
			<div class="images"><img alt="" class="first" id="courseThumb" src="images/courses/6-S095IAP18-th.jpg">
				<br>
				<a id="viewCourse" href=""><img src="images/courses/button_view-course.png" alt="Click here to view this course."> </a>
			</div>
			<div class="info">
				<table class="coursePreviewTable">
					<tbody>
						<tr>
							<td colspan="2">
							<p class="first">
								This class builds a bridge between the recreational world of algorithmic puzzles (puzzles that can be solved by algorithms) and the pragmatic world of computer programming, teaching students to program while solving puzzles. Python syntax and semantics required to understand the code are explained as needed for each puzzle.
								
							</p>
							<p>
								<strong>Prerequisites:</strong>  There are no formal prerequisites. Students need only the rudimentary grasp of programming concepts that can be obtained from introductory or Advanced Placement computer science classes in high school.
							</p></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="clear">
	&nbsp;
</div>

<div class="courseBox">
	<div id="courseInfoInner" style="height: 260px;">
		<div class="coursePreviewTop">
			<h3 id="courseTitle">6.092 Introduction to Programming in Java</h3>
		</div>
		<div class="coursePreviewBottom">
			<div class="images"><img alt="" class="first" id="courseThumb" src="images/courses/6-092iap10-th.jpg">
				<br>
				<a id="viewCourse" href=""><img src="images/courses/button_view-course.png" alt="Click here to view this course."> </a>
			</div>
			<div class="info">
				<table class="coursePreviewTable">
					<tbody>
						<tr>
							<td colspan="2">
							<p class="first">
								This course is an introduction to software engineering, using the Java programming language. It covers concepts useful to 6.005 Elements of Software Construction. Students will learn the fundamentals of Java. The focus is on developing high quality, working software that solves real problems.

							</p>
							<p>
								<strong>Prerequisites:</strong> Designed for students with some programming experience.
							</p></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="clear">
	&nbsp;
</div>
