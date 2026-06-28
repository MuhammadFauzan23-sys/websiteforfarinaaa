<?php
header('Content-Type: text/plain; charset=utf-8');
$input = file_get_contents('php://input');
if (!$input) { echo "Tidak ada data yang dikirim"; exit; }

$data = json_decode($input, true);
if (!$data || !isset($data['date'])) { echo "Format data salah"; exit; }

$store = [
  'date' => $data['date'],
  'note' => $data['note'] ?? '',
  'saved_at' => date('c')
];
$file = __DIR__ . '/anniversary_store.json';
file_put_contents($file, json_encode($store, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
echo "Disimpan: " . $store['date'];
?>