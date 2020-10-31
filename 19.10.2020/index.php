<?php

// 1 задание
$x1 = 1;
if($x1 >= -2 && $x1 <= 1){
    echo "x1 = true";
} else {
    echo "x1 = false";
}
echo "<br>";

// Задание 2
$x2 = 10;
if ($x2 <= -2 || $x2 >= 1) {
    echo "x2 = true";
} else {
    echo "x2 = false";
}
echo "<br>";

// Задание 3
$x3 = 3;
if ($x3 <= -2 || ($x3 >= 1 && $x3 <= 3)) {
    echo "x3 = true";
} else {
    echo "x3 = false";
}
echo '<br>';

// Задание 4а
$x = -2;
$y = 0;
if(($y - 0.5 * $x - 1)==0){
    echo 'true';
}else{
    echo 'false';
}
echo '<br>';
// Задание 4б
$X = 3;
$Y = 4;
if(($Y - 0.5 * $X - 1) >=0){
    echo 'true';
}else{
    echo 'false';
}

echo '<br>'.'<br>';


//2 задание

$array = [
    "products" => [
        "children" => [
            'name' => 'Для детей',
            "toy_cars" => [
                'name' => 'Детские машинки',
                "Dickie" => [
                    "id" => "Dickie",
                    "name" => "Автомобиль игрушечный Dickie Строительная техника / 203415181",
                    "price" => 17.05,
                    "in_stock" => true,
                ],
                "Maisto" => [
                    "id" => "Maisto",
                    "name" => "Автомобиль игрушечный Maisto Карьерная техника / 21191",
                    "price" => 29.46,
                    "in_stock" => true,
                ],
                "Majorette" => [
                    "id" => "Majorette",
                    "name" => "Автомобиль игрушечный Majorette Фермерская техника / 212057400",
                    "price" => 14.69,
                    "in_stock" => true,
                ],
                "Majorette_Строительная" => [
                    "id" => "Majorette_Строительная",
                    "name" => "Автомобиль игрушечный Majorette Строительная техника / 212057281",
                    'price' => 50.05,
                    "in_stock" => false,
                ],
                "ВВ4572" => [
                    "id" => "ВВ4572",
                    "name" => "Автомобиль игрушечный Bondibon Парк техники / ВВ4572 (инерционный)",
                    "price" => 18.51,
                    "in_stock" => true,
                ],
                "ВВ4071" => [
                    "id" => "ВВ4071",
                    "name" => "Автомобиль игрушечный Bondibon Парк техники / ВВ4071 (инерционная)",
                    'price' => 39.90,
                    "in_stock" => false,
                ],
            ],
            "Конструкторы" => [
                'name' => 'Конструкторы',
                "Щенячий_патруль" => [
                    "id" => "Щенячий_патруль",
                    "name" => "Конструктор магнитный Play Smart Щенячий патруль LQ616",
                    "price" => 16,00,
                    "in_stock" => true,
                ],
                "Полесье_Малютка" => [
                    "id" => "Полесье_Малютка",
                    "name" => "Конструктор Полесье Малютка / 1458 (185эл)",
                    "price" => 18,51,
                    "in_stock" => true,
                ],
                "Шурилёт" => [
                    "id" => "Шурилёт",
                    "name" => "Конструктор Lego Ninjago Шурилёт 70673",
                    "price" => 59,04,
                    "in_stock" => true,
                ],
                "Lego_Friends" => [
                    "id" => "Lego_Friends",
                    "name" => "Конструктор Lego Friends Кондитерская Оливии 41366",
                    'price' => 67.40,
                    "in_stock" => false,
                ],
                "Машина_Chevrolet" => [
                    "id" => "Машина_Chevrolet",
                    "name" => "Конструктор Lego Technic Машина Chevrolet Corvette ZR1 42093",
                    "price" => 98.59,
                    "in_stock" => true,
                ],
            ],
            "Children's_weapons" => [
                'name' => 'Детские автоматы',
                "7148" => [
                    "id" => "7148",
                    "name" => "Автомат игрушечный Play Smart Автомат снайпера 7148",
                    "price" => 18.27,
                    "in_stock" => true,
                ],
                "B9837" => [
                    "id" => "B9837",
                    "name" => "Бластер игрушечный Hasbro Nerf Элит Диструптор / B9837",
                    "price" => 49.11,
                    "in_stock" => true,
                ],
                "HSY-054" => [
                    "id" => "HSY-054",
                    "name" => "Игровой набор полицейского Maya Toys Полицейский патруль / HSY-054",
                    "price" => 41.05,
                    "in_stock" => true,
                ],
                "7147" => [
                    'id' => '7147',
                    'name' => 'Автомат игрушечный Play Smart Автомат снайпера 7147',
                    'price' => 14.75,
                    'in_stock' => true,
                ],
            ],
        ],
        'Photo_video' => [
            'name' => 'Фото,видеосьемка',
            'Cameras' => [
                'name' => 'Фотоаппараты',
                'Fujifilm_Instax_Mini_9(black)' => [
                    'name' => 'Фотоаппарат с мгновенной печатью Fujifilm Instax Mini 9 (голубой)',
                    'price' => 194.90,
                    'in_stock' => true,
                ],
                'Canon_EOS_2000D' => [
                    'name' => 'Зеркальный фотоаппарат Canon EOS 2000D Kit EF-S 18-55mm III / 2728C002AA',
                    'price' => 1169.00,
                    "product_promotion" => 999.00,
                    'in_stock' => true,
                ],
                'Fujifilm_Instax_Mini_9(white)' => [
                    'name' => 'Фотоаппарат с мгновенной печатью Fujifilm Instax Mini 9 (белый)',
                    'price' => 194.90,
                    'in_stock' => true,
                ],
            ],
            'Outbreaks' => [
                'name' => 'Вспышки',
                'Nikon_SB-500' => [
                    'name' => 'Вспышка молотковая Nikon SB-500',
                    'price' => 678.00,
                    'in_stock' => true,
                ],
                'Nikon_SB-700' => [
                    'name' => 'Вспышка молотковая Nikon SB-700',
                    'price' => 678.50,
                    'in_stock' => true,
                ],
                'Sony_HVLF60RM' => [
                    'name' => 'Вспышка Sony HVLF60RM',
                    'price' => 599.00,
                    'in_stock' => false,
                ],
            ],
        ],
    ],
];

foreach ($array['products'] as $typeProduct) {
    echo $typeProduct['name'].'<br>'.'<br>';
    foreach ($typeProduct as $category) {
        if (is_array($category)) {
            echo $category['name'].'<br>';
            foreach ($category as $item) {
                if (is_array($item)) {
                    echo $item['name'].'<br>'.$item['price'].'<br>'.($item['in_stock'] ? 'на складе<br><br>' : 'нет на складе<br><br>');
                }
            }
        }
    }
}



//3 задание

$class1 = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16];
echo end($class1);
echo '<br>';
echo prev($class1);
