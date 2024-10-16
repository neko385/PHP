<?php
// ファイルの読み込み
$self_file_string = file_get_contents( __FILE__ );

// ファウルの書き込み
file_put_contents("./file_copy.php", $self_file_string);