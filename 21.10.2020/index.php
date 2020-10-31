<?php
$products = [
    ['name'=>'Гольф(белый)','active' => true, 'price' => '40.p'],
    ['name'=>'Гольф(черный)','active' => false, 'price' => '40.p'],
    ['name'=>'Гольф(серый)','active' => true, 'price' => '40.p'],
    ['name'=>'Свитер(Wolf)','active' => true, 'price' => '39,90.p'],
    ['name'=>'Свитер(Bear)','active' => true, 'price' => '45.p'],
    ['name'=>'Свитер(Новогодний)','active' => true, 'price' => '49,99.p'],
    ['name'=>'Рубашка(белая)','active' => true, 'price' => '75.p'],
    ['name'=>'Рубашка(черная)','active' => false, 'price' => '75.p'],
    ['name'=>'Брюки-классические(черные)','active' => false, 'price' => '70.p'],
    ['name'=>'Брюки-классические(синие)','active' => true, 'price' => '70.p'],
    ['name'=>'Джинсы(classic)','active' => false, 'price' => '145.p'],
    ['name'=>'Джинсы(slim)','active' => true, 'price' => '155,50.p'],
];


foreach ($products as $my_products){

    if ($my_products['active']){
        $active = 'в наличии'.' '.$my_products['price'];
    }else{
        $active = 'нет на складе';
    }
    echo $my_products['name'].' '.$active.' '.'<br>';

}
?>

<?php

echo '<br>';

$rows = 10;
$cols = 10;

echo '<table border="1"';
echo 'style="background-color:black"';

for($i = 1;$i <= 10;$i++){
    echo '<tr>';
    for($y = 1;$y <= 10;$y++){
        echo '<td style="color: gold">'.$i * $y.'</td>';
    }
    echo '</tr>';
}
echo '</table>';

?>
