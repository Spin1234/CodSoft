<?php
session_start();
if (!isset($_SESSION['name'])) {
    header("location: login.php");
}
else{
if (isset($_POST['name'])) {

$con = mysqli_connect("localhost", "root", "", "irctc_travelbooking");

    
    if (!$con) {
        echo "server error!";
    }
    else{
    
        $acn = $_SESSION['name'];
        $acnemail = $_SESSION['email'];
        $name = $_POST['name'];
        $dt = $_POST['dt'];
        $at = $_POST['at'];
        $nop = $_POST['nop'];
        $trip = $_POST['trip'];
        $date = $_POST['date'];
        $tid = uniqid();

        $insertquery = "insert into `tickets` values ('', '$acn', '$acnemail', '$name', '$dt', '$at', '$nop', '$trip', '$date', '$tid')";

        if (mysqli_query($con, $insertquery)) {
            
            // header('location: login.html');
            ?>
            <!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Invoice</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        /* body{
            background-color: #fff;
        } */
    </style>
</head>
<body>
    <h2>Account Holder Name: </h2><br>
    <h3 style="opacity: 0.6;">Hello  , Indian Railways wishes you happy journey!</h3>
    <div style="margin: 50px auto; width: 700px; height: 400px; border: 2px solid brown;">
        
        <div style="height: 20%; width: 100%; display: flex; border-bottom: 2px solid brown; background-color: brown;">
            <div style="width: 40%; height: 100%; color: #fff;"><h2 style="text-align: center; margin-top: 20px;">INDIAN RAILWAYS</h2></div>
            <div style="width: 10%; height: 80%; background-image: url('Indian_Railway_Logo.png'); background-size: 100% 100%; background-repeat: no-repeat; margin: auto;"></div>
            <div style="width: 40%; height: 100%; color: #fff;"><h2 style="text-align: center; margin-top: 20px;" >HAPPY JOURNEY</h2></div>
        </div>

        <div style="display: flex; height: 80%; width: 100%; background-color: #fff; background-image: url('logo-poster-1.jpg'); background-repeat: no-repeat; background-position: right;">
            <div style="display: flex; flex-direction: column; justify-content: space-around;">
                <div style="padding: 10px;">
                    <b>Passenger Name: &nbsp;&nbsp; </b>
                </div>
                <div style="padding: 10px;">
                    <b>From: &nbsp;&nbsp; </b>
                </div>
                <div style="padding: 10px;">
                    <b>To: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b>
                </div>
                <div style="padding: 10px;">
                    <b>Date: &nbsp;&nbsp; </b>
                </div>
                <div style="padding: 10px;">
                    <b>Ticket Id: &nbsp;&nbsp; </b>
                </div>
            </div>
        </div>

    </div>
    <center><a style="text-decoration: none;" href="Test1.php">Home</a></center>
    
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        .invoice {
            max-width: 800px;
            margin: 45px auto;
            padding: 20px;
            border: 1px solid brown;
            background-color: #fff;
        }

        .invoice-header {
            text-align: center;
            padding: 20px 0;
            border-bottom: 1px solid #ccc;
            background-color: brown;
            color: #fff;
        }

        .invoice-content {
            padding: 20px 0;
            border-bottom: 1px solid brown;
            background-image: url("Indian_Railway_Logo.png");
            background-position: center;
            background-repeat: no-repeat;
            background-size: 20%;
        }

        .invoice-details {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .invoice-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .invoice-total {
            margin-top: 20px;
        }

        /* Media Queries */
        @media (max-width: 600px) {
            .invoice {
                padding: 10px;
                margin: 20px;
            }
            .invoice-header, .invoice-content, .invoice-total {
                padding: 10px 0;
                font-size: 0.6rem;
            }
        }
    </style>
</head>
<body>
<h2>Account Holder Name: <?php echo $_SESSION['name'];?></h2><br>
<h3 style="opacity: 0.6;">Hello <?php echo $name ?> , Indian Railways wishes you happy journey!</h3>
    <div class="invoice">
        <div class="invoice-header">
            <h1>INDIAN RAILWAYS</h1>
        </div>
        <div class="invoice-content">
            <div class="invoice-details">
                <div><b> Invoice Date: </b><?php echo $date; ?></div>
                <!-- <div>Due Date: 2023-09-10</div> -->
            </div>
            <div class="invoice-item">
                <div><b> Name:</b></div>
                <div><?php echo $name; ?></div>
            </div>
            <div class="invoice-item">
                <div><b> From:</b></div>
                <div><?php echo $dt; ?></div>
            </div>
            <div class="invoice-item">
                <div><b> To:</b></div>
                <div><?php echo $at; ?></div>
            </div>
            <div class="invoice-item">
                <div><b> Date:</b></div>
                <div><?php echo $date; ?></div>
            </div>
            <div class="invoice-item">
                <div><b> Ticket Id:</b></div>
                <div><?php echo $tid; ?></div>
            </div>
        </div>
        <div class="invoice-total">
            <h4 style="text-align: center; opacity: 0.6;">HAPPY JOURNEY</h4>
            <h3 style="text-align: end;">Fare: 50.00</h3>
        </div>
    </div>
    
    <center>
        <button id="btn">Print</button>
    </center>

    <script>
        document.getElementById("btn").addEventListener('click', ()=>{
            window.print();
        });
    </script>
</body>
</html>
            <?php
        }
}
}
else{
    echo "First book your ticket after login using login form!";
    echo "<br><a href='Test1.php'>Go Home and book ticket here</a>";
}
}
?>
