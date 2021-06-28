<?php
    $sectionname="";
	$err_sectionname="";
	$sectionid="";
	$err_sectionid="";
    $day = "";
    $month = "";
    $year = "";
    $err_registrationdate = "";
	$status="";
	$err_status="";
	$specialapproval="";
	$err_specialapproval="";
	$department="";
	$err_department="";
	$session="";
	$err_session="";	
	$maximumextention="";
	$err_maximumextention="";	
	$time="";
	$err_time="";
	$duration="";
	$err_duration="";
	$lab="";
	$err_lab="";
	$room="";
	$err_room="";
	$attendencemethod="";
	$err_attendancemethod="";
	
	$hasError=false;
	$sectionname= array("A","B","C","D","E","F","G","H");
	$sectionid= array("A001","B002","C003","D004","E005","F006","G008","H009");
	$array= array("Science","BusienssAdministration","Arts");
	$months = array("January","February","March","April","May","June","July","August","September","October","November","December");
	$session= array("2018-2019","2019-2020","2020-2021");
	$coursename= array("Bangla","English","Math","Botany","Zoology");
	$courseid= array("1001","1002","1003","1004","1005");
	$room= array("501","502","503","504","505","506","507","508");
	$attendencemethod= array("Fingerprint","Rollcall");
	
	if(isset($_POST["submit"])){
		
		if (!isset($_POST["sectionname"])){
			$hasError = true;
			$err_sectionname="Section name Required";
		}
		else{
			$sectionname = $_POST["sectionname"];
		}
		if (!isset($_POST["sectionid"])){
			$hasError = true;
			$err_sectionid="Section id Required";
		}
		else{
			$sectionid = $_POST["sectionid"];
		}
		
		if (!isset($_POST["day"])){
			$hasError = true;
			$err_registrationdate = "Select A Day.";
		}
		else{
			$day = $_POST["day"];
		}

        if (!isset($_POST["month"])){
			$hasError = true;
			$err_registrationdate = "Select A Month.";
		}
		else{
			$month = $_POST["month"];
		}

        if (!isset($_POST["year"])){
			$hasError = true;
			$err_registrationdate = "Select A Year.";
		}
		else{
			$year = $_POST["year"];
		}
		
		if(!isset($_POST["status"])){
			$hasError = true;
			$err_status="status Required";
		}
		else{
			$status = $_POST["status"];
		}
		if(!isset($_POST["specialapproval"])){
			$hasError = true;
			$err_specialapproval="specialapproval Required";
		}
		else{
			$specialapproval = $_POST["specialapproval"];
		}	
		if (!isset($_POST["department"])){
			$hasError = true;
			$err_department="department Required";
		}
		else{
			$department = $_POST["department"];
		}
		
		
		if (!isset($_POST["session"])){
			$hasError = true;
			$err_session="session Required";
		}
		else{
			$session = $_POST["session"];
		}
		
		if(!isset($_POST["maximumextention"])){
			$hasError = true;
			$err_maximumextention="maximumextention Required";
		}
		else{
			$maximumextention = $_POST["maximumextention"];
		}
		if(empty($_POST["time"])){
			$hasError = true;
			$err_time="Time Required";
		}
		
		if(!isset($_POST["duration"])){
			$hasError = true;
			$err_duration="duration Required";
		}
		else{
			$duration = $_POST["duration"];
		}
		if(!isset($_POST["lab"])){
			$hasError = true;
			$err_lab="lab Required";
		}
		else{
			$lab = $_POST["lab"];
		}
		if (!isset($_POST["room"])){
			$hasError = true;
			$err_room="room Required";
		}
		else{
			$room = $_POST["room"];
		}
		
		if (!isset($_POST["attendencemethod"])){
			$hasError = true;
			$err_attendancemethod="attendencemethod Required";
		}
		else{
			$attendencemethod = $_POST["attendencemethod"];
		}
		
		if(!$hasError){
			echo "<h1>Form submitted</h1>";
			echo $_POST["sectionname"]."<br>";
			echo $_POST["sectionid"]."<br>";
			echo $day." ".$month." ".$year." "."<br>";	
			echo $_POST["status"]."<br>";
			echo $_POST["specialapproval"]."<br>";
			echo $_POST["department"]."<br>";
			echo $_POST["session"]."<br>";
			echo $_POST["maximumextention"]."<br>";
			echo $_POST["time"]."<br>";
			echo $_POST["duration"]."<br>";
			echo $_POST["lab"]."<br>";
			echo $_POST["room"]."<br>";
			echo $_POST["attendencemethod"]."<br>";
			
		}
		
	}
	
?>
<html>
	<head><title><?php echo"Section Create";?></title></head>
	<body>
		<form action="" method="post">
		<fieldset>  
<?php
		    echo"<h1>Section Create Form<h1>";
		?>		
			<table>
			<tr>
					<td> Section Name</td>
					<td>: <select name="sectionname">
						<option disabled selected>-Select Section Name-</option>
						<?php
							foreach($sectionname as $s){
								if($s == $sectionname) 
									echo "<option selected>$s</option>";
								else
									echo "<option>$s</option>";
							}
						?>
						</select>
					</td>
					<td><span> <?php echo $err_sectionname;?> </span></td>
				</tr>	
				<tr>
					<td>Section Id</td>
					<td>: <select name="sectionid">
						<option disabled selected>-Choose Section Id-</option>
						<?php
							foreach($sectionid as $c){
								if($c == $sectionid) 
									echo "<option selected>$c</option>";
								else
									echo "<option>$c</option>";
							}
						?>
						</select>
					</td>
					<td><span> <?php echo $err_sectionid;?> </span></td>
				</tr>	
				
			<tr>
                        <td>Registration Date</td>
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
                        <td><span><?php echo $err_registrationdate; ?> </span></td>
                    </tr>
				
				<tr>
					<td>Status</td>
					<td>: <input type="radio" value="Valid" <?php if($status=="Valid") echo "checked"; ?> name="status"> Valid <input name="status" <?php if($status=="Invalid") echo "checked"; ?> value="Invalid" type="radio"> Invalid </td>
					<td><span> <?php echo $err_status;?> </span></td>
				</tr>	
				<tr>
					<td>Special Approval</td>
					<td>: <input type="radio" value="Yes" <?php if($specialapproval=="Yes") echo "checked"; ?> name="specialapproval"> Yes <input name="specialapproval" <?php if($specialapproval=="No") echo "checked"; ?> value="No" type="radio"> No <input name="specialapproval" <?php if($specialapproval=="Pending") echo "checked"; ?> value="Pending" type="radio"> Pending </td>
					<td><span> <?php echo $err_specialapproval;?> </span></td>
				</tr>	
				
				
				
				<tr>
					<td>Department</td>
					<td>: <select name="department">
						<option disabled selected>--Select Department--</option>
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
					<td>Session</td>
					<td>: <select name="session">
						<option disabled selected>--Select Session--</option>
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
					<td>Maximum Extention</td>
					<td>: <input type="radio" value="Two" <?php if($maximumextention=="Two") echo "checked"; ?> name="maximumextention"> Two <input name="maximumextention" <?php if($maximumextention=="Four") echo "checked"; ?> value="Four" type="radio"> Four <input name="maximumextention" <?php if($maximumextention=="Six") echo "checked"; ?> value="Six" type="radio"> Six </td>
					<td><span> <?php echo $err_maximumextention;?> </span></td>
				</tr>
				
				<tr>
					<td>Time</td>
					<td>: <input type="text" name="time" value="<?php echo $time; ?>" placeholder="Enter Time "> </td>
					<td><span> <?php echo $err_time;?> </span></td>
				</tr>
				
				<tr>
					<td>Duration</td>
					<td>: <input type="radio" value="1 Hour" <?php if($duration=="1 Hour") echo "checked"; ?> name="duration"> 1 Hour <input name="duration" <?php if($duration=="2 Hour") echo "checked"; ?> value="2 hour" type="radio"> 2 Hour   <input name="duration" <?php if($duration=="3 Hour") echo "checked"; ?> value="3 hour" type="radio"> 3 Hour</td>
					<td><span> <?php echo $err_duration;?> </span></td>
				</tr>	
				
				<tr>
					<td>Lab</td>
					<td>: <input type="radio" value="Yes" <?php if($lab=="Yes") echo "checked"; ?> name="lab"> Yes <input name="lab" <?php if($lab=="No") echo "checked"; ?> value="No" type="radio"> No </td>
					<td><span> <?php echo $err_lab;?> </span></td>
				</tr>	
				<tr>
					<td>Room</td>
					<td>: <select name="room">
						<option disabled selected>--Select Room--</option>
						<?php
							foreach($room as $r){
								if($r == $room) 
									echo "<option selected>$r</option>";
								else
									echo "<option>$r</option>";
							}
						?>
						</select>
					</td>
					<td><span> <?php echo $err_room;?> </span></td>
				</tr>	
				<tr>
					<td>Attendence Method</td>
					<td>: <select name="attendencemethod">
						<option disabled selected>--Select Method--</option>
						<?php
							foreach($attendencemethod as $a){
								if($a == $attendencemethod) 
									echo "<option selected>$a</option>";
								else
									echo "<option>$a</option>";
							}
						?>
						</select>
					</td>
					<td><span> <?php echo $err_attendancemethod;?> </span></td>
				</tr>	
				
				<tr>
					<td colspan="2" align="right"><input type="submit" name="submit" value="Submit"></td>
					
				</tr>
			</table>
		</fieldset>
		</form>
	</body>
</html>