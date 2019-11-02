<html>
<head>
	<title>New Employee Form</title>
	<link href="../css/styles.css" rel="stylesheet">
</head>

<body>
<?php
	include ("inc-employee-object.php");

$firstName  = $_POST['firstName'];
$lastName  = $_POST['lastName'];
$employeeID  = $_POST['employeeID'];
$jobTitle  = $_POST['jobTitle'];
$startDate  = $_POST['startDate'];
$hourlyWage  = $_POST['hourlyWage'];
$bonusAmt  = $_POST['bonusAmt'];

	$employee = new Employee();

	$employee->findEmployee($firstName);
	$employee->findEmployee($lastName);
	// $employee->findEmployee($employeeID);
	// $employee->findEmployee($jobTitle);
	// $employee->findEmployee($startDate);
	// $employee->findEmployee($hourlyWage);
	// $employee->findEmployee($bonusAmt);

	print ("<p>First Name: ".$employee->getFirstName($firstName)."</p>");
	print ("<p>Last Name: ".$employee->getLastName()."</p>");
	// print ("<p>ID Number: ".$employee->getEmployeeID()."</p>");
	// print ("<p>Job Title: ".$employee->getJobTitle()."</p>");
	// print ("<p>Start Date: ".$employee->getStartDate()."</p>");
	// print ("<p>Hourly Wage: ".$employee->getHourlyWage()."</p>");
	// print ("<p>Set Bonus Amount: ".$employee->getBonusAmt()."</p>");

?>
</body>

</html>

