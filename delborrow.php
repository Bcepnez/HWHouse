<?
	$servername = "localhost";
    $usernamesql = "root";
    $passwordsql = "mysql";
    $db_name = "HWHouse";
    $conn = new mysqli($servername, $usernamesql, $passwordsql, $db_name);   
	if (mysqli_connect_errno()) { 
		echo "Failed to connect to MySQL: ".mysqli_connect_error(); 
	} 
	$cmd = "UPDATE `Borrow` SET `retStatus` = '1'  WHERE borrowid='".$_GET['ID']."'";
	$res = mysqli_query($conn,$cmd); 
	mysqli_close($conn); 
?>