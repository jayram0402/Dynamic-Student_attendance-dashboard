<?php
$host = 'localhost:3307';
$username = 'root';
$password = '';
$dbname = '';

$conn = mysqli_connect($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
$student= $_POST["studentname"];
 $father = $_POST["fathername"];
 $mother= $_POST["mothername"];
 $dob= $_POST["dob"];
 //$Gender = $_POST["gender"];
 // present address
 $division_a = $_POST["division"];
 $district_a = $_POST["district"];
 $state_a = $_POST["state1"];
 $ZIP_a = $_POST["zip"];
 $address_a = $_POST["address1"];
 // permanent address
 $division_b = $_POST["Division"];
 $district_b = $_POST["District"];
 $state_b = $_POST["State2"];
 $ZIP_b = $_POST["Zip"];
 $address_b = $_POST["Address2"];
 // next block
 $religion = $_POST["religion"];
 $nationality = $_POST["nationality"];
 $phone = $_POST["number"];
 $email = $_POST["email"];
 $NID = $_POST["nid"];
 $blood = $_POST["blood"];
 $occupation = $_POST["occupation"];
 $course = $_POST["course"];
 $checkbox=$_POST["checkbox2"];
  
    
    $stmt = $conn->prepare("INSERT INTO (Student_name,Father_name,Mother_name,DOB,Division,district,State1,ZIP,Address1,Perma_division,Perma_district,Perma_state,Perma_ZIP,Perma_address,Religion,Nationality,Phone_number,Email,NID,Blood,Occupation,Course,Checkbox)
    VALUES ('$student', '$father','$mother','$dob','$division_a','$district_a','$state_a','$ZIP_a','$address_a','$division_b','$district_b','$state_b','$ZIP_b','$address_b','$religion','$nationality','$phone','$email','$NID','$blood','$occupation','$course', '$checkbox')");
    echo "<script>alert('Registration successful!');window.location.replace('registersucces.html');</script>";
    $stmt->bind_param("sssssssissssisssisissss",$student, $father,$mother,$dob,$division_a,$district_a,$state_a,$ZIP_a,$address_a,$division_b,$district_b,$state_b,$ZIP_b,$address_b,$religion,$nationality,$phone,$email,$NID,$blood,$occupation,$course, $checkbox);
    $stmt->execute();
    // echo" success  registered...............";
    $stmt->close();
 } 
}
mysqli_close($conn);   
?>