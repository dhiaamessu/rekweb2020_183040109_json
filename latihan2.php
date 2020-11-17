<?php
$mahasiswa = [
    "nama" => "Ardhia Pramesti",
    "nrp" => "183040109",
    "email" => "pramesti.183040109@mail.unpas.ac.id"
];
[
    "nama" => "Ames",
    "nrp" => "203040109",
    "email" => "amesdhia@gmail.com"
];

$data = json_encode($mahasiswa);
echo $data;
