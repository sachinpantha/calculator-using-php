<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Cientifica</title>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Charm&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Boogaloo&display=swap" rel="stylesheet">
    <style>
        .first,.second{
            font-family: 'Caveat', cursive;
            color: white;
        }
        .heading{
            font-family: 'Charm', cursive;
            font-weight: 500px;
            color: white;
        }
        .box1,.box2{
            border: 1px solid black;
            border-radius: 50px;
        }
        .sum,.diff,.mul,.div{
            border: 1px solid black;
            border-radius: 50px;
        }
        .textual{
            font-family: 'Boogaloo', cursive;
            color: white;
        }
        .ast{
            padding-top: 0px;
            border:1px solid black;
            border-radius: 5px;
            float: left;
            background-color: blueviolet;
        }
        .sum,.diff,.mul,.div{
            border: 1px solid black;
            border-radius: 5px;
            font-style: italic;
            font-size: 14px;
            padding-top: 1px;
            padding-right:6px;
            padding-bottom: 1px;
            padding-left:6px;
        }

    </style>
</head>
<body>
<fieldset class="ast">
    <h1 class="heading">My Calculator</h1>
    <form action="site.php" method="get">
        <p class="first">ENTER FIRST NUMBER <br><input type="text" name="Num1" class="box1"></p>
        <p class="second">ENTER SECOND NUMBER <br><input type="text" name="Num2" class="box2"></p>
        <input type="submit" value="Sum" name="Sum" class="sum">
        <input type="submit" value="Difference" name="Difference" class="diff">
        <input type="submit" value="Product" name="Product" class="mul">
        <input type="submit" value="Division" name="Division" class="div">
        <br>
        <p class="textual">YOUR RESULT IS::</p> 
        <?php
        error_reporting(0);
        if ($_GET["Sum"]=="Sum") {
            $D=$_GET["Num1"]+$_GET["Num2"];
        echo $D;
        }
        elseif ($_GET["Difference"]=="Difference") {
            $D=$_GET["Num1"]-$_GET["Num2"];
            echo $D;
        }  
        elseif ($_GET["Product"]=="Product") {
            $D=$_GET["Num1"]*$_GET["Num2"];
            echo $D;
        }  
        else {
            $D=$_GET["Num1"]/$_GET["Num2"];
            echo $D;
        }  
        ?>
        </fieldset>
    </form>
</body>
</html>