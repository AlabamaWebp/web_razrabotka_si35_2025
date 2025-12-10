<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="5/index.php" method="post">
        <input type="number" name="num1" placeholder="Первое число" required>
        <select name="operation" required>
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="num2" placeholder="Второе число" required>
        <button type="submit">Вычислить</button>
    </form>
    <?php
    if (isset($_POST)) {
        echo "<h1>Ответ: ";
        // Я знаю что лабораторная про условия, от этого ещё слаще использование следующего трюка:
        $op = array(
            "add" => fn($num1, $num2) => $num1 + $num2,
            "subtract" => fn($num1, $num2) => $num1 - $num2,
            "multiply" => fn($num1, $num2) => $num1 * $num2,
            "divide" => fn($num1, $num2) => $num1 / $num2,
        );
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];
        if ($num2 == 0 && $operation == "divide") {
            print ("На ноль делить нельзя!");
        } else {
            print ($op[$operation]($num1, $num2));
        }
    }
    echo "</h1>";
    ?>
</body>

</html>