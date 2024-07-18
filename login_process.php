<?php
include"database/config.php";
// get user input
$email = $_POST["email"];
$password = $_POST["password"];
// database
$sql = "SELECT id,email,password FROM loginsystem WHERE email=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s",$email);
$stmt->execute();
$result = $stmt->get_result();
if($result->num_rows === 1){
    $row = $result->fetch_assoc();
    if(password_verify($password, $row['password'])){
        $_SESSION['email'] = $email;
        header("Location:welcome.php");
        exit();
    }
    else{
        echo "Login failed Password incorrect";
    }
}
else{
    echo"Email not found";
}
$stmt->close();
$conn->close();
?>  
