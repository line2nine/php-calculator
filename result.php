<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'cal.php';
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $cal = $_POST["cal"];
    $result = new Calculator();
    switch ($cal) {
        case "+":
            echo "<h1>Result:</h1> $num1 + $num2 = " . ($num1 + $num2);
            break;
        case "-":
            echo "<h1>Result:</h1> $num1 - $num2 = " . ($num1 - $num2);
            break;
        case "x":
            echo "<h1>Result:</h1> $num1 x $num2 = " . ($num1 * $num2);
            break;
        case "/":
            try {
                echo $result->division($num1, $num2);
            }
            catch (Exception $exception){
                echo $exception->getMessage();
            }
//            if ($num2 != 0) {
//                echo "<h1>Result:</h1> $num1 : $num2 = " . ($num1 / $num2);
//            } else {
//                echo "<h1>No Result</h1>";
//            }
    }
}
?>
</body>
</html>