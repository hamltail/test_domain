<?php

const DB_HOST = 'mysql:dbname=learn_php;host=localhost;charset=utf8';
// const DB_USER = 'phpuser';
// const DB_PASSWORD = 'P@ssword';
const DB_USER = 'phpmyadmin';
const DB_PASSWORD = 'phpmyadmin';

// 例外処理 Exception
try {
  $pdo = new PDO(DB_HOST, DB_USER, DB_PASSWORD, [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // 連想配列
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // 例外
    PDO::ATTR_EMULATE_PREPARES => false, // SQLインジェクション対策
  ]);
  echo '接続成功'. "\n";
} catch (PDOException $ex) {
  echo '接続失敗' . $ex->getMessage() . "\n";
  exit;
}
