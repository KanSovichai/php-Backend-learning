<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            width: 60vw;
            height: 60vh;
            margin: auto;
            display: flex;
            flex-direction: column;
            background-color: yellow;
            justify-content: center;
            align-items: center;
            border-radius: 50px;
        }
        form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 20px;
            width: 100%;
            height: 100%;

        }
        input{
            border: none;
            padding: 10px;
            border-radius: 10px;
        }
        button{
            border: none;
            border-radius: 10px;
            padding: 20px;
        }
        .button{
            display: flex;
            gap: 20px;

        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <h1>Calculator</h1>
            <label for="">Please enter in the first number</label>
            <input type="text" name="firstNum">
            <label for="">Please enter in the second number</label>
            <input type="text" name="secondNum">
            <div class="button">
                <button type="submit" name="plus">+</button>
                <button type="submit" name="substract">-</button>
                <button type="submit" name="multiply">*</button>
                <button type="submit" name="divide">/</button>
            </div>
            <?php
        $firstNum = 0;
        $secondNum = 0;
        function Sum($a, $b){
            return $a + $b;
        }
        function substract($a, $b){
            return $a - $b;
        }
        function multiply($a, $b){
            return $a * $b;
        }
        function divide($a, $b){
            if($b == 0){
                return "Can not divide by zero";
            }
            return $a / $b;
        }
    

        if(isset($_POST['plus'])){
            $firstNum = $_POST['firstNum'];
            $secondNum = $_POST['secondNum'];
            echo "The result is ",Sum($firstNum, $secondNum);
        }else if(isset($_POST['substract'])){
            $firstNum = $_POST['firstNum'];
            $secondNum = $_POST['secondNum'];
            echo "The result is ",substract($firstNum, $secondNum);
        }else if(isset($_POST['multiply'])){
            $firstNum = $_POST['firstNum'];
            $secondNum = $_POST['secondNum'];
            echo "The result is ",multiply($firstNum, $secondNum);
        }else if(isset($_POST['divide'])){
            $firstNum = $_POST['firstNum'];
            $secondNum = $_POST['secondNum'];
            echo "The result is ",divide($firstNum, $secondNum);
        }


    ?>
        </form>
        
    </div> 
</body>
</html>