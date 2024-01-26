<?php

$data = [
	[
	'nama'=>'Andi', 
	'rombel'=>'PPLG XI-1', 
	'rayon'=>'Ciawi 4',
	'jk'=>'L',
	],
	[
    'nama'=>'Sasa', 
	'rombel'=>'PPLG XI-6', 
	'rayon'=>'Sukasari 1',
	'jk'=>'P',
	],
	[
    'nama'=>'Lala', 
	'rombel'=>'PPLG XI-3', 
	'rayon'=>'Cisarua 3',
	'jk'=>'P',
	],
	[
    'nama'=>'Beni', 
	'rombel'=>'PPLG XI-2', 
	'rayon'=>'Cicurug 2',
	'jk'=>'L',
    ],						
];

foreach ($data as $key ) {
	echo  "Nama :".$key['nama']."<br>";
	echo  "Usia :".$key['rombel']."<br>";
	echo  "Alamat :".$key['rayon']."<br>";
	echo  "Jenis Kelamin :".$key['jk']."<br><br>";
}