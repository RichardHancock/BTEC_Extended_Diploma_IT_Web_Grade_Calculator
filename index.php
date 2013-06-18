<!DOCTYPE html>
<html>
<head>
	<title>BTEC Calculator Level 3 IT Extended Diploma</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css" />
</head>
<body>
	<h1>BTEC Calculator</h1>
	<?php if ($_POST['submitted']) {
			
			$error1 = False;
			$error2 = False;

			$distinctions = 0;
			$merits = 0;
			$passes = 0;
			$BTECPoints = 0;
			$letterGrade = "PPP";

			$grades = array(
				"1" => $_POST["grade1"], 
				"2" => $_POST["grade2"], 
				"3" => $_POST["grade3"], 
				"4" => $_POST["grade4"],
				"5" => $_POST["grade5"], 
				"6" => $_POST["grade6"], 
				"7" => $_POST["grade7"], 
				"8" => $_POST["grade8"], 
				"9" => $_POST["grade9"], 
				"10" => $_POST["grade10"], 
				"11" => $_POST["grade11"], 
				"12" => $_POST["grade12"], 
				"13" => $_POST["grade13"], 
				"14" => $_POST["grade14"], 
				"15" => $_POST["grade15"], 
				"16" => $_POST["grade16"], 
				"17" => $_POST["grade17"], 
				"18" => $_POST["grade18"], 
			);
			foreach ($grades as $i) {
				if(is_string($i) == False) {
					$error1 = True;

				} else {
					$iUpper = strtoupper($i);
					if($i == "D") {
						$distinctions += 1;
					} elseif ($i == "M") {
						$merits += 1;
					} else if ($i == "P") {
						$passes += 1;
					} else {
						$error2 = True;
					}
				}
			}

			if($distinctions + $merits + $passes != 18) {
				$error3 = True;
			} else {
				$BTECPoints = ($distinctions * 9) * 10;
				$BTECPoints += (($merits * 8) * 10);
				$BTECPoints += (($passes * 7) * 10);
			}

			if($error3 = False) {
				if($BTECPoints >= 1260 and $BTECPoints <= 1299) {
					$letterGrade = "PPP";
				} elseif($BTECPoints >= 1300 and $BTECPoints <= 1339) {
					$letterGrade = "MPP";
				}  elseif($BTECPoints >= 1340 and $BTECPoints <= 1379) {
					$letterGrade = "MMP";
				} elseif($BTECPoints >= 1380 and $BTECPoints <= 1419) {
					$letterGrade = "MMM";
				} elseif($BTECPoints >= 1420 and $BTECPoints <= 1459) {
					$letterGrade = "DMM";
				} elseif($BTECPoints >= 1460 and $BTECPoints <= 1499) {
					$letterGrade = "DDM";
				} elseif($BTECPoints >= 1500 and $BTECPoints <= 1529) {
					$letterGrade = "DDD";
				} elseif($BTECPoints >= 1530 and $BTECPoints <= 1559) {
					$letterGrade = "D*DD";
				} elseif($BTECPoints >= 1560 and $BTECPoints <= 1589) {
					$letterGrade = "D*D*D";
				} elseif($BTECPoints >= 1590) {
					$letterGrade = "D*D*D*";
				}
			}
		} ?>
	<form method="post" action="index.php">
		<label>Module 1: </label>
		<input type="text" class="grade" value="P" size="1" name="grade1">
		<br>
		<label>Module 2: </label>
		<input type="text" class="grade" value="P" size="1" name="grade2">
		<br>
		<label>Module 3: </label>
		<input type="text" class="grade" value="P" size="1" name="grade3">
		<br>
		<label>Module 4: </label>
		<input type="text" class="grade" value="P" size="1" name="grade4">
		<br>
		<label>Module 5: </label>
		<input type="text" class="grade" value="P" size="1" name="grade5">
		<br>
		<label>Module 6: </label>
		<input type="text" class="grade" value="P" size="1" name="grade6">
		<br>
		<label>Module 7: </label>
		<input type="text" class="grade" value="P" size="1" name="grade7">
		<br>
		<label>Module 8: </label>
		<input type="text" class="grade" value="P" size="1" name="grade8">
		<br>
		<label>Module 9: </label>
		<input type="text" class="grade" value="P" size="1" name="grade9">
		<br>
		<label>Module 10: </label>
		<input type="text" class="grade" value="P" size="1" name="grade10">
		<br>
		<label>Module 11: </label>
		<input type="text" class="grade" value="P" size="1" name="grade11">
		<br>
		<label>Module 12: </label>
		<input type="text" class="grade" value="P" size="1" name="grade12">
		<br>
		<label>Module 13: </label>
		<input type="text" class="grade" value="P" size="1" name="grade13">
		<br>
		<label>Module 14: </label>
		<input type="text" class="grade" value="P" size="1" name="grade14">
		<br>
		<label>Module 15: </label>
		<input type="text" class="grade" value="P" size="1" name="grade15">
		<br>
		<label>Module 16: </label>
		<input type="text" class="grade" value="P" size="1" name="grade16">
		<br>
		<label>Module 17: </label>
		<input type="text" class="grade" value="P" size="1" name="grade17">
		<br>
		<label>Module 18: </label>
		<input type="text" class="grade" value="P" size="1" name="grade18">
		<br>
		<input type="hidden" name="submitted" value=1>
		<input type="submit" class="submit">
		<span><?php echo("Grade: " . $letterGrade); ?></span>
</body>
</html>