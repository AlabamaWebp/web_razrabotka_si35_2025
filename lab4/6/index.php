<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $products = [
        ['name' => 'Ручка', 'price' => 5, 'stock' => 100],
        ['name' => 'Ноутбук', 'price' => 1200, 'stock' => 10],
        ['name' => 'Блокнот', 'price' => 15, 'stock' => 50],
        ['name' => 'Мышь', 'price' => 45, 'stock' => 0],
        ['name' => 'Клавиатура', 'price' => 70, 'stock' => 20],
        ['name' => 'Карандаш', 'price' => 2, 'stock' => 200],
    ];

    $filtered = array_filter($products, fn($var) => $var['price'] < 50 && $var['stock'] > 0);
    foreach ($filtered as $key => $value) {
        echo '<p>';
        print ($value['name'] . " цена: " . $value['price'] . " stock: " . $value['stock']);
        echo '</p>';
    }
    ?>

</body>

</html>