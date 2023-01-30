<?php

// DB接続 PDO
require 'db_connection.php';

// 入力 DB保存 prepare, execute(全て文字列の配列)
$params = [
  'id' => null,
  'your_name' => 'ほげ',
  'email' => 'hoge@hoge.com',
  'url' => 'https://hoge.org',
  'gender' => '1',
  'age' => '2',
  'contact' => 'コンタクトです'
];

$count = 0;
$columns = '';
$values = '';

foreach (array_keys($params) as $key) {
  if ($count++ > 0) {
    $columns .= ',';
    $values .= ',';
  }
  $columns .= $key;
  $values .= ':' . $key;
}

$sql = 'insert into contacts (' . $columns . ') values (' .$values . ')';

var_dump($sql);

$stmt = $pdo->prepare($sql);
$stmt->execute($params);

