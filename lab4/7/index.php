<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function generatePassword($length)
    {
        if ($length < 1) {
            return "Меньше 1 символа не генерируем";
        }
        $chars = array_merge(range('a', 'z'), range('A', 'Z'), range('0', '9'));
        $password = [];
        for ($i = 0; $i < $length; $i++) {
            $password[$i] = $chars[random_int(0, count($chars) - 1)];
        }
        return str_shuffle(implode($password));
    }
    echo generatePassword(10);
    ?>
</body>

</html>