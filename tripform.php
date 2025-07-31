<?php
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to this database failed due to".
        mysqli_connect_error());
    }
    // echo "success connecting to db";

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $des = $_POST['des'];

    $sql = "INSERT INTO `trip`.`trip` (`Name`, `Age`, `Gender`, `Phone`, `Email`, `Other information`, `DT`) VALUES 
    ('$name', '$age', '$gender', '$phone', '$email', '$des', current_timestamp());"; 
    // echo $sql;

    if($con->query($sql) == true) {
        // echo "successfully inserted";
    }else {
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trip Form</title>
    <style>
        *{
    margin: 0px;
    padding: 0px;
}

.box{
    margin: auto;
    text-align: center;
}

.bgimg{
    width: 100%;
    position: absolute;
    z-index: -1;
    opacity: 0.9;
}

form{
    border: 3px solid rgb(255, 145, 145);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

input{
    width: 70%;
    border: 2px solid black;
}

#des{
    width: 70%;
    border: 2px solid black;
}

.btn{
    color: rgb(0, 0, 0);
    background-color: rgb(208, 208, 208);
    border-radius: 10%;
    border: 2px solid black;
    cursor: pointer;
    width: 10%;
}
    </style>
</head>
<body>
    <img class="bgimg" src="bg2.jpg" alt="Trip image">
    <div class="box">
    <h3>This is the form for trip to Goa</h3><br>
    <p>Regester by submiting your above details </p><br>
    <form action="project.php" method="post"><br>

       <b> Name:</b><input type="text" id="name" name="name" placeholder="Enter your full name"><br><br>
        <b>Age:</b> <input type="number" name="age" id="age" placeholder="Enter your age"><br><br>
        <b>Gender:</b> <input type="text" name="gender" id="gender"><br><br>
        <b>Phone no:</b> <input type="number" name="phone" id="phone" placeholder="Enter your phone number"><br><br>
        <b>Email id:</b> <input type="text" name="email" id="email" placeholder="Enter your email id"><br><br>
        <b>Other Information:</b> <textarea name="des" id="des" cols="30" rows="10" placeholder="enter other information"></textarea><br><br>
        <button class="btn">Submit</button><br><br>

    </form>
    </div>

    <script src="project.js"></script>
</body>
</html>

