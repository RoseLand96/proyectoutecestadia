   
  <?php
define('HOST','rmspavs8mpub7dkq.chr7pe7iynqr.eu-west-1.rds.amazonaws.com');
      	define('USER','q38dpb0unfwgo9ca');
      	define('PASS','o904u8n2xhtwpbdm');
		define('DB','s3my1t0wrg30n21j');
	 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
	
if(isset($_POST["numero_identif"])){
$numero_identif = $_POST["numero_identif"];
$sql_query = "SELECT * FROM servicio where numero_identif=$numero_identif;";
$result = mysqli_query($con,$sql_query);
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
}else
{
	echo "No existe el supe";
mysqli_close($con);
}
?>
© 2017 GitHub, I
