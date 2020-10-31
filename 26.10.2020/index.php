<?php



// домашка до вскр скинуть предыдущие домашки до 20-00 хранящиеся на GitHub
//выбрать из функий которые есть в PHP  любые 5 c массивами и сделать вывод на экран этих функций .

$cool = ['red','blue','white','black','green'];
echo 'функия array_shift '.array_shift($cool).'<br>';
$go = [1,2,3,4,5,6,7];
$ten = array_merge($cool,$go);
foreach ($ten as $new){
    echo $new.'<br>';
}


$none = ['apple','orange','cherry','banana'];
$none2 = ['mobile','car'];
foreach (array_replace($none, $none2) as $item) {
    echo $item.'<br>';
}
echo '<br>'.'<br>';
$family = ['i','mom','father','granny'];
$work = ['home','1','3','7'];
array_multisort($family,$work);
for($i=0;count($family)>=$i;$i++) {
    echo $family[$i].$work[$i].'<br>';
}
$hex = [1,2,3,4,5,6,7,8,9,10];
echo (in_array(10,$hex))?'найден':'не найден';
