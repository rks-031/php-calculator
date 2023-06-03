<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
        <meta charset="utf-8">
        <title>Calculator</title>
</head>

<body>
        <form action="site2.php" method="post">
                First Num:<input type="number" step="0.1" name="num1"><br>
                Operator:<input type="text" name="op"><br>
                Second Num:<input type="number" step="0.1" name="num2"><br>
                <input type="submit">
        </form>

        <?php
    $num1=$_POST["num1"] ;
    $num2=$_POST["num2"];
    $op= $_POST["op"];

    if($op == "+"){
      echo $num1 +$num2;
    }
    else if($op =="-"){
      echo $num1-$num2;
    }
    else if($op == "*"){
      echo $num1*$num2;
    }
    else if($op=="/"){
      echo $num1/$num2;
    }
    else if($op=="%"){
      echo $num1%$num2;
    }
    else{
      echo "Enter valid operator";
    }
    ?>

</body>

</html>