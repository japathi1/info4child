<?php
include 'connection.php';

$SchoolName = $_POST['SchoolName'];
$SchoolTitle = $_POST['SchoolTitle'];
/*
echo $SchoolLogo = $_POST['SchoolLogo'];
echo $Document = $_POST['Document'];
*/
$Country = $_POST['Country'];
$State = $_POST['State'];
$City = $_POST['City'];
$PinCode = $_POST['PinCode'];
$Landmark = $_POST['Landmark'];
$Address = $_POST['Address'];
$PhoneCode = $_POST['PhoneCode'];
$PhoneNo = $_POST['PhoneNo'];
$MobileCode = $_POST['MobileCode'];
$MobileNo = $_POST['MobileNo'];
$Website = $_POST['Website'];
$Email = $_POST['Email'];

$SchoolUniqId = uniqid();
$sid = "sc".$SchoolUniqId;
echo $sid;
$sql = "INSERT INTO school (SchoolName,
							SchoolTitle,
							SchoolLogo,
							Document,
							Country,
							State,
							City,
							PinCode,
							Landmark,
							Address,
							PhoneCode,
							PhoneNo,
							MobileCode,
							MobileNo,
							Website,
							Email,
							sid
							) VALUES (							
							'$SchoolName',
							'$SchoolTitle',
							'SchoolLogo',
							'Document',
							'$Country',
							'$State',
							'$City',
							'$PinCode',
							'$Landmark',
							'$Address',
							'$PhoneCode',
							'$PhoneNo',
							'$MobileCode',
							'$MobileNo',
							'$Website',
							'$Email',
							'$sid'
							)";
							
if ($conn->query($sql) === TRUE) {
	header('Location: ../admin/add-school.php?success=yes');
	//echo "New record created successfully";
} else {
	header('Location: ../admin/add-school.php?success=no');
	//echo "Error: " . $sql . "<br>" . $conn->error;
}

include 'connection-close.php';
?>