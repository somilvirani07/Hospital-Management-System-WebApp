<?php
   
$conn = mysqli_connect("127.0.0.1","root","","hospital");


$user = $_POST['username'];
$pass = $_POST['password'];

$sql = "SELECT * FROM employee WHERE Name='".$user."' AND pass='".$pass."' limit 1";
$retval = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($retval);
if($row){echo 'login';}
else{echo 'unsucessful';}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="G:\somil\Final proj\login.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
        $("#unamereq").hide();
        $("#passreq").hide();

        $("input").focus(function(){
        $(this).css("border-color","red");
        });

        $("#uname").focusout(function(){
            var username=$("#uname").val();
            var unamelen = $("#uname").val().length;
            if (username=="" || username==" ")
            {
                $("#unamereq").html("Please enter your username!")
                $("#unamereq").show()
                $("input").focus(function(){
                $(this).css("border-color","red");
                });
            }
            else if(unamelen < 5 || unamelen > 15){
                $("#unamereq").html("Username must be between 5-15 characters");
                $("#unamereq").show();
                $("input").focus(function(){
                $(this).css("border-color","red");
                });
            }
            else
            {
                $("#unamereq").hide();
                $("input").blur(function(){
                $(this).css("border-color","green");
                });
            }
        });
        $("#pass").focusout(function(){
            var pword = $("#pass").val();
            var plength = $("#pass").val().length;
            if (plength < 1)
            {
                $("#passreq").html("Please enter your password!")
                $("passreq").show()
                $("input").focus(function(){
                $(this).css("border-color","red");
                });
            }
            else if(plength < 5 || plength > 13)
            {
                $("#passreq").html("Password must be between 5-13 characters");
                $("#passreq").show();
                $("input").focus(function(){
                $(this).css("border-color","red");
                });
            }
            else
            {
                $("#passreq").hide();
                $("input").focus(function(){
                $(this).css("border-color","green");
                });
            }
        });
    });
    </script>

    <style>
        body {
        font-family: Arial;
        padding: 10px;
        background: #f1f1f1;
        }

        .header{
        padding: 30px;
        text-align: center;
        background: white;
        }

        .topnav {
        overflow: hidden;
        background-color:rgb(4, 27, 100);
        }

        .topnav a {
        float: left;
        display:block;
        color: #f2f2f2;
        text-align: center;
        padding: 0.5px 16px;
        text-decoration:none;
        }

        .topnav a:hover {
        background-color:#ddd;
        color: black;
        }

        .card {
        width:45%;
        float:left;
        background-color: rgb(221, 221, 223);
        padding: 20px;
        margin-top: 20px;
        }

        .footer {
        padding: 10px;
        text-align: center;
        background: rgb(183, 181, 212);
        margin: 40px -350px 1px -390px;
        }


    </style>

    <body>
        <div class="header" style="height:90px">
            <h1>Columbia Saint Mary's Health Care</h1>
            <p>Always caring for the loved ones</p>
        </div>

        <div class="topnav">
            <a href="login (1).html" style="float:right"><h4>Login</h4></a>
            <a href="adminlogin.html" style="float:right"><h4>Admin Login </h4></a>
            <a href="sign.html" style="float:right"><h4>Sign Up</h4></a>
        </div>

        <h1 style="margin:70px 0px -83px 10cm"><b>Kindly Login to Proceed Further</b></h1>
        
        <div class="frame">
            <h1 class="u"><b>Login form</b>
            </h1>
            <form method='post' action ="#">
            <div class="form">
                Username : <input id="uname" type="text" name="username" style="border-radius: 20px ; margin-left: 40px">
                <br><br>
                <div id = "unamereq"></div>
                <br>
                Password : <input id="pass" type="text" name="password" style="border-radius: 20px ; margin-left: 40px">
                <br>
                <div id = "passreq"></div>
                <br>   
                <input type="submit" name="submit">
            </form>
        </div>
        <div class="footer">
            <h2>Follow us</h2>
            <img src="G:\somil\Final proj\images\insta.jpg"height="100" width="100">
            <img src="G:\somil\Final proj\images\facebook.png" height="100" width="100"><br>
            <h2>For more details call:+91 7877675421</h2>
            <h2>Address:Blockyard Metro Station,NYC</h2>
        </div>
    </body>
</html