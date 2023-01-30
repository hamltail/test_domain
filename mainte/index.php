<?php

require 'db_connection.php';

// ユーザー入力なし query
$sql = 'select * from contacts where id = 1';
$stmt = $pdo->query($sql); // SQL実行。ステートメント

$result = $stmt->fetchAll();

echo '<pre>';
var_dump($result);
echo '</pre>';

// ユーザー入力あり prepare, bind, execute
// $sql = 'select * from contacts where id = ?'; // プレースホルダー
$sql = 'select * from contacts where id = :id'; // 名前付きプレースホルダー
$stmt = $pdo->prepare($sql);
$stmt->bindValue('id', 1, PDO::PARAM_INT);
$stmt->execute(); // 実行

$result = $stmt->fetchAll();

echo '<pre>';
var_dump($result);
echo '</pre>';
