<?php

// パスワードを記録したファイルの場所
echo __FILE__;
// /var/www/test_domain/mainte/test.php

// パスワード暗号化
echo password_hash('password1234', PASSWORD_BCRYPT);
// $2y$10$2.JuZGZmIb28xIDQtJkX8u/T5ppnD71sfu7BHOEmnd6/xT87J9ivS

