<?php
// İçerik tipini JSON olarak ayarlıyoruz
header('Content-Type: application/json');

// Basit bir örnek veri
$data = [
    "status" => "success",
    "message" => "Merhaba, bu basit bir PHP API örneğidir!",
    "date" => date("Y-m-d H:i:s")
];

// JSON formatında veri döndürüyoruz
echo json_encode($data);
?>
