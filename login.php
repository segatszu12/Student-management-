



<?php 
session_start();


$server="fdb1034.awardspace.net";
$user="4428573_stud";
$pass="student123(*)";
$database="4428573_stud";
$conn=mysqli_connect($server,$user,$pass,$database);



?>

<?php

try {
    $host = "fdb1034.awardspace.net";
    
    $user = "4428573_stud";
    $password = "student123(*)";
 $dbname = "4428573_stud";
    $con = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // if($conn){
    //     echo 'Connected to DB';
    // }
} catch (PDOException $err) {
    echo $err->getMessage();
}

if (isset($_POST['login'])) {
	# code...


$username = $_POST['email'];
$password = $_POST['password'];

$stmt = $con->prepare("SELECT * FROM auth WHERE email = ?");
$stmt->execute([$_POST['email']]);
$user = $stmt->fetch();
if ($user && password_verify($password, $user['password']))
{

$username =$_POST['email'];
 
$sql = "SELECT id FROM auth WHERE email = ? ";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
 
// Step 3: Process the result
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $id = $row["id"];
 
    // Step 4: Display the ID

$_SESSION['login']=$_POST['login'];
echo '<script>window.location.href="index.php";</script>';
   
}
 
} else {
   echo '<script>window.location.href="index1.php";alert("invalid");</script>';
}
}
?>



<?php

$conn=mysqli_connect("fdb1034.awardspace.ne","4428573_stud","student123(*)",'4428573_stud');

if (isset($_POST['register'])) {
    # code...
$password=$_POST['password'];
$email=$_POST['email'];


$password=password_hash($password, PASSWORD_DEFAULT);

$sql=mysqli_query($conn,"SELECT * FROM auth WHERE email ='$email'");
if ($sql->num_rows>0) {
   echo '<script>alert("email already exist");window.location.href="index1.php";</script>';
}
else{
$query= mysqli_query($conn,"INSERT INTO auth (email,password) VALUES('$email','$password')");
if ($query) {

   echo '<script>alert("you are registered successfully");window.location.href="index1.php";</script>';

}else{
    $mg="Failed to register";

}

}}


?>


