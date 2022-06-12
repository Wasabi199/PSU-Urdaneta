<?php

include "../Database/db_conn.php";



if(isset($_POST['submit'])){
    // session_start();

    // header("Location:../Pages/dashboard.php");
    $role = $_POST['roles'];
    $student_id = $_POST['std_id'];
    $password = $_POST['psw'];
    $re_password = $_POST['psw-repeat'];

        if($password == $re_password){
            // inserting database
            $hash_pass=password_hash($password,PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users`(`Role`, `Student_id`, `password`) VALUES ('$role','$student_id','$hash_pass')";
            mysqli_query($conn,$sql);
            if($role == "Admin"){
                header("Location:../Pages/AdminPanel/Admin_Dashboard.php");
            }else if($role == "User"){
                header("Location:../Pages/UserPanel/USer_Dashboard.php");
            }
        }else{
            echo "<script>alert(Incorect Password)</script>";
        }
        

}

?>