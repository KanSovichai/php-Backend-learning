<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            font-weight: bold;
            font-family: sans-serif;
        }
        .container{
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form{
            width: 30%;
            height: 60%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            /* background-color: blue; */
            box-shadow: 10px 10px 10px 10px lightgrey;
        }
        form{
            width: 90%;
            height: 100%;
            display: flex;
            justify-content: space-between;
            border-radius: 10px;
            /* background-color: red; */
            flex-direction: column;
            padding: 0px 10px 10px 10px;
        }
        input{
            padding: 10px;
            border: none;
            border-radius: 10px;
            border-bottom: 2px solid grey;
        }
        button{
            margin: 0% 20% 0% 20%;
            border: none;
            background-color: darkcyan;
            color: white;
            width: 60%;
            border-radius: 20px;
            height: 10%;
        }
        button:hover{
            background-color: lightblue;
        }
        table{
            width: 100vw;
            
        }
        td{
            border-bottom: 2px solid grey;
            width: 30%; 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form">
            <h1>Registration Form</h1>
            <form action="" method="post">
                <label for="">Name</label>
                <input type="text" name="name">
                <label for="">Email</label>
                <input type="text" name="email">
                <label for="">Password</label>
                <input type="password" name="psw">
                <label for="">Confirm Password</label>
                <input type="password" name="cpsw">
                <button type="submit" name="btnRegister">Register</button>
            </form>
        </div>
    </div>
    <table>
        <thead>
            <tr>
                <td>Name</td>
                <td>Email</td>
                <td>Password</td>
            </tr>
        </thead>
        <tbody>
            <?php
            if(isset($_POST['btnRegister'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $psw = $_POST['psw'];
                echo "
                <tr>
                    <td>$name</td>
                    <td>$email</td>
                    <td>$psw</td>
                </tr>
                ";
            }
            ?>
          
        </tbody>
    </table>
</body>
</html>