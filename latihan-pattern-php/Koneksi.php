<?php
	/*
		Judul : Pattern Koneksi pada php
		Tanggal Awal Dibuat : 27-Sept-2016 || 23:25
		Sumber : gedelumbung.com/tutorial-design-pattern-penerapan-design-pattern-singleton-di-php/
		Modifikasi By : Rori Green
	*/
	class Koneksi 
	{
		private static $_instance;

		//membuat constructor bersifat private agar tidak dapat di instantiated oleh class lain
		private function __construct(){}

		//membuat $_instace
		public static function setInstance()
		{
			self::$_instance = new self();
		}

		//mengambil $_instace
		public static function getInstance()
		{
			return self::$_instance;
		}

		public function showMessage($pesan)
		{
			echo $pesan."<br/>";
		}
	}
?>