<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "irctc_travelbooking");
$email=$_POST['email'];
$password=$_POST['password'];

            $sql1 = "SELECT * FROM `users`";
            $result1 = mysqli_query($con,$sql1);
            // $num = mysqli_num_rows($result1);
            while ($row1 = mysqli_fetch_assoc($result1)) {
                if ($row1['password']==$password && $row1['email']==$email) {
                    echo "Successfull!";
                    $_SESSION["name"]=$row1['name'];
                    $_SESSION["email"]=$row1['email'];
                    header("location: Test1.php");
                    die();
                }
            }
            $msg="wrong password or email!";
            header("location: login.php?em=$msg");
?>