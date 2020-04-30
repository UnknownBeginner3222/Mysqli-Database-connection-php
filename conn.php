<?php
    $con=mysqli_connect("localhost","username","Password","databsename");//use your datanase username , password and name

    if(!$con)// if not connected to server
    {
        echo 'Not Connected To Server';
    }
    if(!mysqli_select_db($con,'table name'))//use your databse table
    {
        echo 'Database Not Selected';
    }
    [
    $Name=$_POST['Name'];// field area
    $Email=$_POST['Email']; // field area
    $Phone=$_POST['Mobile number']; // field area
    $Message=$_POST['Message']; // field area

    $sql= "INSERT INTO webpage (Name, Email,Phone,Message) VALUES ('$Name','$Email','$Phone','$Message')"; // field area SQL query

    if(!mysqli_query($con,$sql))//queries
    {
        echo 'Not Inserted'
    }
    else
    {
        echo 'Inserted'
    }

    header("refresh:2; Url=home.html"); //Refresh to the page link
    ?>
