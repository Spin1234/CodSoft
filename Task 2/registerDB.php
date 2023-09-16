<?php

$con = mysqli_connect("localhost", "root", "", "irctc_travelbooking");

    
    if (!$con) {
        echo "server error!";
    }
    else{
    
        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];

        $select="select * from `users`";
        $result=mysqli_query($con, $select);
        while($row=mysqli_fetch_assoc($result)){
            if($row['email']==$email){
                $msg="Already registered with this email! please login to continue.";
                header("location: login.php?m=$msg");
                die();
            }
        }

        $insertquery = "insert into `users` values ('', '$name', '$email', '$gender', '$dob', '$phone', '$password')";

        if (mysqli_query($con, $insertquery)) {
            
            header('location: login.php');
            die();
        }
}

?>