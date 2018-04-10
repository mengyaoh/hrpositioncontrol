<?php
/*
PHP MSSQL Example

Replace data_source_name with the name of your data source.
Replace database_username and database_password
with the SQL Server database username and password.
*/
$version_id=$_POST["version_id"];

// echo "$time";


include 'constants.php';


if ($conn===false){
	echo "unable to connect";
	die(print_r(sqlsrv_errors(),true));

}

$sql = "SELECT CONTENT FROM dbo.VERSION_TABLE
WHERE VERSION_ID = '$version_id'";

if ($stmt = sqlsrv_query( $conn, $sql)) {
    // statement executed successfully
    $data = sqlsrv_fetch_array($stmt);
    $myobject= new \stdClass();
    $myobject->content = $data["CONTENT"];
}
else {
	echo "statment cannot be executed\n";
	die(print_r(sqlsrv_errors(), true));
}
sqlsrv_free_stmt($stmt);
sqlsrv_close($conn);
echo json_encode($myobject);
?>