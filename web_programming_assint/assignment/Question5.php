<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $operator = $_POST["operator"];
        $num2 = $_POST["num2"];
        switch ($operator) {
            case "+":
                $result = $num1 + $num2;
                break;
            case "-":
                $result = $num1 - $num2;
                break;
            case "*":
                $result = $num1 * $num2;
                break;
            case "/":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "Error: Division by zero";
                    exit();
                }
                break;
            case "%":
                if ($num2 != 0) {
                    $result = $num1 % $num2;
                } else {
                    echo "Error: Division by zero";
                    exit();
                }
                break;
            default:
                echo "Invalid operator";
                exit();
        }
        echo "Result: $num1 $operator $num2 = $result";
    } else {
        echo "Invalid request";
    }
?>