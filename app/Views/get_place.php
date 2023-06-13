<?php
// Ambil ID tempat wisata dari parameter GET
$id = $_GET['id'];

// Lakukan pengambilan data tempat wisata dari sumber data Anda (misalnya basis data)
// Di sini, saya menggunakan contoh array sebagai sumber data
$places = [
  ['id' => 1, 'name' => 'Tempat Wisata 1', 'description' => 'Deskripsi Tempat Wisata 1', 'image' => 'image1.jpg', 'created_at' => '2023-05-26'],
  ['id' => 2, 'name' => 'Tempat Wisata 2', 'description' => 'Deskripsi Tempat Wisata 2', 'image' => 'image2.jpg', 'created_at' => '2023-05-27'],
  ['id' => 3, 'name' => 'Tempat Wisata 3', 'description' => 'Deskripsi Tempat Wisata 3', 'image' => 'image3.jpg', 'created_at' => '2023-05-28'],
];

// Cari tempat wisata berdasarkan ID
$selectedPlace = null;
foreach ($places as $place) {
  if ($place['id'] == $id) {
    $selectedPlace = $place;
    break;
  }
}

// Buat respons dalam format JSON
header('Content-Type: application/json');
if ($selectedPlace) {
  echo json_encode($selectedPlace);
} else {
  echo json_encode(['error' => 'Tempat wisata tidak ditemukan']);
}
