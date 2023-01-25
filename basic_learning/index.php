<?php
// require 'common.php';
// echo $commonText;

// echo __DIR__;
// // => /var/www/test_domain

// echo __FILE__;
// // => /var/www/test_domain/var/www/test_domain/index.php

// ----- ユーザー定義関数 -----
// $postalCode = '123-4567';

// function checkPostalCode($str){
//   $replaced = str_replace('-', '', $str);
//   $length = strlen($replaced);

//   if($length === 7){
//     return true;
//   } else {
//     return false;
//   }
// }

// var_dump(checkPostalCode($postalCode));

// ----- 配列の関数 -----
// $array = ['りんご', 'みかん'];
// array_push($array, 'もも', 'メロン');
// var_dump($array);


// ----- 指定文字列で分割 -----
// $text = '指定文字列で、分割します';

// // var_dump(explode('、', $text));
// echo explode('、', $text)[1];

// 正規表現
// $str = '特定の文字列が含まれているか確認する';
// echo preg_match('/文字列/', $str);

// 一部の文字列を返す
// echo substr('abcde', 1);

// echo mb_substr('あいうえお', 1);

// ----- 文字列の長さ -----
// $text = 'Hello World!';
// echo strlen($text);

// $text = 'あいうえお';
// echo mb_strlen($text);

// print_r(mb_get_info());

// $text = '文字列を置換します';
// echo str_replace('置換', 'ちかん', $text);


// ----- 関数 -----
// function test(){
//   echo 'test';
// }

// test();

// function getComment($string){
//   echo $string;
// }

// getComment('Hello World!');

// function sumPrice($int1, $int2){
//   $int3 = $int1 + $int2;
//   return $int3;
// }

// $total = sumPrice(3, 5);
// echo $total;


// ----- switch -----
// $signal = 'yellow';

// switch ($signal) {
//   case 'red':
//     echo 'Stop!';
//     break;

//   case 'yellow':
//     echo 'Caution';
//     break;

//   case 'blue':
//     echo 'Go go';
//     break;

//   default:
//     echo "Error: {$signal}";
//     break;
// }


// ----- for, while -----
// for ($i = 0; $i < 10; $i++) {
//   if ($i === 5) {
//     // continue;
//     break;
//   }
//   echo $i;
// }

// $i = 0;
// while ($i < 5) {
//   echo $i;
//   $i++;
// }

// $i = 1;
// do {
//   echo "The number is: $i <br>";
//   $i++;
// } while ($i < 5);


// ----- foreach -----
// $members = [
//   'name' => '本田',
//   'height' => 180,
//   'hobby' => 'サッカー'
// ];

// foreach ($members as $member) {
//   echo $member . '<br>';
// }

// foreach ($members as $key => $value) {
//   echo "key: {$key}, value: {$value}" . '<br>';
// }

// $members = [
//   '本田' => [
//     'height' => 180,
//     'hobby' => 'サッカー'
//   ],
//   '香川' => [
//     'height' => 170,
//     'hobby' => 'サッカー'
//   ]
// ];

// foreach ($members as $member) {
//   foreach ($member as $item) {
//     echo $item . '<br>';
//   }
// }


// ----- 条件分岐 -----
// $height = 90;

// echo '<pre>';
// var_dump($height);
// echo '</pre>';

// if ($height === 90) {
//   echo '身長は' . $height . 'cmです。';
// }


// $signal = 'red';

// if ($signal === 'red') {
//   echo 'Stop!';
// } else if ($signal === 'yellow') {
//   echo 'Caution';
// } else if ($signal === 'blue') {
//   echo 'Go Go';
// } else {
//   echo 'Error: ' . $signal;
// }

// echo '<br>';
// echo '<pre>';
// var_dump($signal);
// echo '</pre>';


// データが入っているかどうか
// isset, empty, is_null

// $test = '';
// if (empty($test)) {
//   echo '変数は空です', PHP_EOL;
// }

// if (!empty($test)) {
//   echo "変数は{$test}です", PHP_EOL;
// }


// 三項演算子
// $math = 79;
// $comment = $math >= 80 ? 'good' : 'no good';
// echo $comment;

// ----- 連想配列 -----
// $arrray_member = [
//   'name' => '本田',
//   'height' => 180,
//   'hobby' => 'サッカー'
// ];

// echo $arrray_member['hobby'];

// echo '<pre>';
// var_dump($arrray_member);
// echo '</pre>';

// $arrray_member2 = [
//   '本田' => [
//     'height' => 180,
//     'hobby' => 'サッカー'
//   ],
//   '香川' => [
//     'height' => 170,
//     'hobby' => 'サッカー'
//   ]
// ];

// echo $arrray_member2['香川']['height'];

// echo '<pre>';
// var_dump($arrray_member2);
// echo '</pre>';


// ----- 配列 -----
// $array = [1, 2, 3];

// echo $array[0] . '<br>';

// echo '<pre>';
// var_dump($array);
// echo '</pre>';

// $array2 = [
//   ['hoge1', 'hoge2', 'hoge3'], 
//   ['ほげ１', 'ほげ２', 'ほげ３']
// ];

// echo '<pre>';
// var_dump($array2);
// echo '</pre>';

// echo $array2[1][1];


// ----- 変数 -----
// $test = 123;
// const MAX = 'テスト';

// echo $test . '<br>' . MAX;

// var_dump(MAX);
