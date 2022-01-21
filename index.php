<!-- Calculator assignment----------------------------------->

<?php
//fetch data from the submitted form
//echo "<pre>";
//var_dump($_SERVER == "POST");
//echo "</pre>";

$number1 = 0;
$number2 = 0;
$operator = "";
$result = 0;


if (isset($_GET['operator'])) {
    $number1 = $_GET['number1'];
    $number2 = $_GET['number2'];
    $operator = $_GET['operator'];
    echo "iets";


    if ($operator == "add") {
        // add
        $result = $number1 + $number2;
    }

    if ($operator == "multiply") {
        // multiply
        $result = $number1 + $number2;
    }

    if ($operator == "subtract") {
        // minus
        $result = $number1 + $number2;
    }

    if ($operator == "divide") {
        if ($number2 == 0) {
            $result = "Not possible";
        } else {
            // divide
            $result = $number1 / $number2;
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator_assignment</title>
    <link rel="stylesheet" href="css/default.css">

</head>

<body>
    <h1 class="calculator"> calculator </h1>
    <?php
    // print awnser
    echo "anwser = ", $result;
    ?>
    <from method="GET" action="">


        <!--number one--------------------------------------------->
        <h2>
            <form>
                <label for="g">number one:</label>
        </h2>
        <h2>
            <input type="number" name="number1" value="">
        </h2>

        <!--dropdown------------------------------------------->
        <h2>
            <select name="operator" id="selectBox">
                <option value="add">+</option>
                <option value="multiply">x</option>
                <option value="subtract">-</option>
                <option value="divide">/</option>
            </select>
        </h2>

        <!--number two------------------------------------------>
        <h2>
            <label for="lname">number two:</label>
        </h2>
        <h2>
            <input type="number" name="number2" value="">
        </h2>

        <!--calculate-------------------------------------------->
        <h2>
            <!-- <input type="Submit" value="calculate" name="submit"> -->
            <button type="Submit" name="Submit" value="Calculate">Calculate</button>
            <button type="reset" name="submit" value="Reset">Reset</button>
            <!-- <input type="reset" value="clear all" name="submit"> -->
        </h2>
        <?php
        // echo "answer = ", $result;
        ?>







</body>

</html>