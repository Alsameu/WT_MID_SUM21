<?php
    $day = "";
    $month = "";
    $year = "";
    $err_date = "";
	$coursename="";
	$err_coursename="";
	$courseid="";
	$err_courseid="";
	$department="";
	$err_department="";
	$year="";
	$err_year="";
	$session="";
	$err_session="";	
	$examinationname="";
	$err_examinationname="";	
	$chapter=[];
	$err_chapter="";	
	$proposal="";
	$err_proposal="";	
	$justification="";
	$err_justification="";
	
	$hasError=false;
	
	$array= array("Science","BusienssAdministration","Arts");
	$months = array("January","February","March","April","May","June","July","August","September","October","November","December");
	$session= array("2018-2019","2019-2020","2020-2021");
	
	
	function chapterExist($chapter){
		global $chapter;
		foreach($chapter as $c){
			if($c == $chapter) return true;
		}
		return false;
	}
	if(isset($_POST["submit"])){
		if (!isset($_POST["day"])){
			$hasError = true;
			$err_date = "Select A Day.";
		}
		else{
			$day = $_POST["day"];
		}

        if (!isset($_POST["month"])){
			$hasError = true;
			$err_date = "Select A Month.";
		}
		else{
			$month = $_POST["month"];
		}

        if (!isset($_POST["year"])){
			$hasError = true;
			$err_date = "Select A Year.";
		}
		else{
			$year = $_POST["year"];
		}
		
		if(empty($_POST["coursename"])){
			$hasError = true;
			$err_coursename="Name Required";
		}
		else if(strlen($_POST["coursename"]) <= 2){
			$hasError = true;
			$err_name="Name must contain >2 character";
		}
		else{
			$name = $_POST["coursename"];
		}
		if(empty($_POST["courseid"])){
			$hasError = true;
			$err_courseid="Id Required";
		}
		else if(strlen($_POST["courseid"]) <= 6){
			$hasError = true;
			$err_courseid="Id must contain >8 character";
		}
		else{
			$id = $_POST["courseid"];
		}
		if (!isset($_POST["department"])){
			$hasError = true;
			$err_department="department Required";
		}
		else{
			$department = $_POST["department"];
		}
		
		if(!isset($_POST["year"])){
			$hasError = true;
			$err_year="year Required";
		}
		else{
			$year = $_POST["year"];
		}
		
		if (!isset($_POST["session"])){
			$hasError = true;
			$err_session="session Required";
		}
		else{
			$session = $_POST["session"];
		}
		
		if(!isset($_POST["examinationname"])){
			$hasError = true;
			$err_examinationname="examinationname Required";
		}
		else{
			$examinationname = $_POST["examinationname"];
		}
		
		if(!isset($_POST["chapter"])){
			$hasError = true;
			$err_chapter="chapter Required";
		}
		else{
			$chapter = $_POST["chapter"];
		}
		
		if(!isset($_POST["proposal"])){
			$hasError = true;
			$err_proposal="Proposal Required";
		}
		else{
			$proposal = $_POST["proposal"];
		}
		
		if(empty($_POST["justification"])){
			$hasError = true;
			$err_justification = "justification Required";
		}
		else{
			$justification = $_POST["justification"];
		}
		
		if(!$hasError){
			echo "<h1>Form submitted</h1>";
			echo $day." ".$month." ".$year." "."<br>";	
			echo $_POST["coursename"]."<br>";
			echo $_POST["courseid"]."<br>";
			echo $_POST["department"]."<br>";
			echo $_POST["year"]."<br>";
			echo $_POST["session"]."<br>";
			echo $_POST["examinationname"]."<br>";
			$arr = $_POST["chapter"];

			foreach($arr as $i){
				echo "$i<br>";
			}
			echo $_POST["proposal"]."<br>";
			echo $_POST["justification"]."<br>";
		}
		
	}
	
?>
<html>
	<head><title><?php echo"Syllabus Update";?></title></head>
	<body>
		<form action="" method="post">
		<fieldset>
		<?php
		    echo"<h1>Syllabus Update Form<h1>";
		?>
			<table>
			<tr>
                        <td>Date</td>
                        <td>
                            : <select name="day">
                                <option disabled selected>Day</option>
                                <?php
                                    for($i = 1; $i<=31; $i++){
                                       if($day == $i){
                                        echo "<option selected>$i</option>";
                                       }else{
                                            echo "<option>$i</option>";
                                       }
                                    }
                                ?>
                            </select>
                            <select name="month">
                                <option disabled selected>Month</option>
                                <?php
                                   foreach($months as $m){
                                    if($month == $m){
                                        echo "<option selected>$m</option>";
                                       }
                                       else{
                                            echo "<option>$m</option>";
                                       }
                                   }
                                ?>
                            </select>
                            <select name="year">
                                <option disabled selected>Year</option>
                                <?php
                                    for($i = 2021; $i>=1970; $i--){
                                        if($year == $i){
                                                echo "<option selected>$i</option>";
                                           }
                                           else{
                                                echo "<option>$i</option>";
                                           }
                                    }
                                ?>
                            </select>
                        </td>
                        <td><span><?php echo $err_date; ?> </span></td>
                    </tr>
				<tr>
					<td>Course Name</td>
					<td>: <input type="text" name="coursename" value="<?php echo $coursename; ?>" placeholder="Enter Course Name "> </td>
					<td><span> <?php echo $err_coursename;?> </span></td>
				</tr>
				<tr>
					<td>Course Id</td>
					<td>: <input type="text" name="courseid" placeholder="Enter Course Id">  </td>
					<td><span> <?php echo $err_courseid;?> </span></td>
				</tr>
				<tr>
					<td>Department</td>
					<td>: <select name="department">
						<option disabled selected>**Select Department**</option>
						<?php
							foreach($array as $d){
								if($d == $department) 
									echo "<option selected>$d</option>";
								else
									echo "<option>$d</option>";
							}
						?>
						</select>
					</td>
					<td><span> <?php echo $err_department;?> </span></td>
				</tr>	
				<tr>
					<td>Year</td>
					<td>: <input type="radio" value="First" <?php if($year=="First") echo "checked"; ?> name="year"> First <input name="year" <?php if($year=="Second") echo "checked"; ?> value="Second" type="radio"> Second </td>
					<td><span> <?php echo $err_year;?> </span></td>
				</tr>	
				<tr>
					<td>Session</td>
					<td>: <select name="session">
						<option disabled selected>^^Select Session^^</option>
						<?php
							foreach($session as $s){
								if($s == $session) 
									echo "<option selected>$s</option>";
								else
									echo "<option>$s</option>";
							}
						?>
						</select>
					</td>
					<td><span> <?php echo $err_session;?> </span></td>
				</tr>
				<tr>
					<td>Examination Name</td>
					<td>: <input type="radio" value="FirstTerm" <?php if($examinationname=="FirstTerm") echo "checked"; ?> name="examinationname"> FirstTerm <input name="examinationname" <?php if($examinationname=="SecondTerm") echo "checked"; ?> value="SecondTerm" type="radio"> SecondTerm <input name="examinationname" <?php if($examinationname=="FinalTerm") echo "checked"; ?> value="FinalTerm" type="radio"> FinalTerm </td>
					<td><span> <?php echo $err_examinationname;?> </span></td>
				</tr>
				<tr>
					<td>Chapter</td>
					<td>: <input type="checkbox" name="chapter[]" <?php if(chapterExist("1-5")) echo "checked";?> value="1-5"> 1-5
					<input type="checkbox" name="chapter[]" <?php if(chapterExist("5-10")) echo "checked";?> value="5-10"> 5-10<br>
					: <input type="checkbox" name="chapter[]" <?php if(chapterExist("10-15")) echo "checked";?> value="10-15"> 10-15
					  <input type="checkbox" name="chapter[]" <?php if(chapterExist("15-20")) echo "checked";?> value="15-20"> 15-20
					</td>
					<td><span> <?php echo $err_chapter;?> </span></td>
				</tr>
				
				<tr>
					<td>All Teacher Reviewed Proposal</td>
					<td>: <input type="radio" value="Yes" <?php if($proposal=="Yes") echo "checked"; ?> name="proposal"> Yes <input name="proposal" <?php if($proposal=="No") echo "checked"; ?> value="No" type="radio"> No </td>
					<td><span> <?php echo $err_proposal;?> </span></td>
				</tr>
				
				<tr>
					<td>Justification For Change</td>
					<td>: <textarea name="justification" ><?php echo $justification; ?></textarea>
					<td><span> <?php echo $err_justification;?> </span></td>
					</td>
				</tr>
				
				<tr>
					<td colspan="2" align="right"><input type="submit" name="submit" value="Submit"></td>
					
				</tr>
			</table>
		</fieldset>
		</form>
	</body>
</html>