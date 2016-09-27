<?php
	/*
		Judul : Pattern Koneksi pada php
		Tanggal Awal Dibuat : 27-Sept-2016 || 23:25
		Sumber : gedelumbung.com/tutorial-design-pattern-penerapan-design-pattern-singleton-di-php/
		Modifikasi By : Rori Green
	*/
	require_once "Proses.php";
	
	$query1 = new Proses();

	//jalankan koneksi
	$query1->setKoneksi();
	//jalankan pesan query
	$query1->setMessage("SELECT * FROM tabel_fiktif_1");
	//tampilkan pesan query
	$query1->pesanQuery();

	echo "<hr/>";

	$query2 = new Proses();
	//jalankan koneksi
	$query2->setKoneksi();
	//jalankan pesan query
	$query2->setMessage("SELECT * FROM tabel_fiktif_2");
	//tampilkan pesan query
	$query2->pesanQuery();
?>