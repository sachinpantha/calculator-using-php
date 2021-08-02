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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <style>
        .first,.second{
            font-family: 'Caveat', cursive;
            color: black;
        }
        .heading{
            font-family: 'Charm', cursive;
            font-weight: 500px;
            color: black;
        }
        .box1,.box2{
            border: 1px solid black;
            border-radius: 50px;
            text-align: center;
            font-family: 'Open Sans', sans-serif;
        }
        .button{
            border: 1px solid black;
            border-radius: 50px;
        }
        .textual{
            font-family: 'Boogaloo', cursive;
            color: black;
        }
        .ast{
            padding-top: 0px;
            border:1px solid black;
            border-radius: 5px;
            float: left;
            background-color: lightgrey;
            margin-top:0px;
            margin-left:25%;
            margin-top:5%;
            text-align:center;
        }
        .button{
            border: 1px solid black;
            border-radius: 5px;
            font-style: italic;
            font-size: 14px;
            padding-top: 1px;
            padding-right:6px;
            padding-bottom: 1px;
            padding-left:6px;
        }
        .image{
            
        margin-top: -2px;
        margin-left: 240px;
        margin-bottom: -92px;
        margin-right: -17px;
        display: block;
        padding: 3px;
        }
        button:link,button:visited{
        background-color: rgb(15, 153, 199);
        text-decoration: none;
        border: 1px solid black;
        border-radius: 5px;
        margin-top: 10%;
        }
        button:hover,button:active{
        color: white;
        background-color: grey;
        }
        .scroll{
            font-style: italic;
        }
        .credit{
            display:block;
            font-style:italic;
        }
        a:link,a:visited{
        color: white;
        background-color: rgb(15, 153, 199);
        text-decoration: none;
        border: 1px solid black;
        border-radius: 5px;
        margin-top: 10%;
}
        a:hover,a:active{
        color: white;
        background-color: grey;
}
body{
    background-color:blueviolet;
}
.marq{
    font-style: italic;
    color:  white;
}
    </style>
</head>
<body>
<fieldset class="ast">
<img src="img2.jpg" height="80px" width="80px" alt="" class="image">
    <h1 class="heading">My Calculator</h1>
    <form action="site.php" method="get">
        <p class="first">ENTER FIRST NUMBER <br><input type="text" name="Num1" class="box1"></p>
        <p class="second">ENTER SECOND NUMBER <br><input type="text" name="Num2" class="box2"></p>
        <button class="button" value="Sum" name="Sum">Sum</button>
        <button class="button" value="Difference" name="Difference">Difference</button>
        <button class="button" value="Product" name="Product">Product</button>
        <button class="button" value="Division" name="Division">Division</button>
        <button type="reset" class="button">Reset</button>
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
    <marquee class="marq">This is created by Sachin Pantha. You are not allowed to copy this project!!!</marquee>
</body>
</html>
