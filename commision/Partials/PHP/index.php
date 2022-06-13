<?php
include "../Database/db_conn.php";

if(isset($_POST['login'])){
    $student_id = $_POST['std_id'];
    $password = $_POST['password'];

    
// checking if exist
    $sql="SELECT * FROM users WHERE Student_id = '$student_id'";
    $result =mysqli_query($conn,$sql);

    // $row = mysqli_fetch_array($result);

 
    if(mysqli_num_rows($result)> 0){
        while($row = mysqli_fetch_assoc($result)){;
        
        if(password_verify($password,$row['password'])){
            if($row['Role']=='Admin'){
                header("Location:../Pages/Admin_Dashboard.php");
                exit();
            }
            else if($row['Role']=="User"){
                header("Location:../Pages/User_Dashboard.php");
                exit();
            }
            }else{
                echo "Please double check Student ID and Passwords";
            }
        }
    }else{
        echo "Please double check Student ID and Password";
    }
   
}
?>