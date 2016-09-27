<?php
	/*
		Judul : Pattern Koneksi pada php
		Tanggal Awal Dibuat : 27-Sept-2016 || 23:25
		Sumber : gedelumbung.com/tutorial-design-pattern-penerapan-design-pattern-singleton-di-php/
		Modifikasi By : Rori Green
	*/
	require_once "Koneksi.php";

	class Proses
	{
		private $_pesan;
		private $_koneksi;

		public function __construct(){}

		//setter pesan dan koneksi
		public function setMessage($pesan)
		{
			$this->_pesan = $pesan;
		}

		public function setKoneksi()
		{
			Koneksi::setInstance();
			$this->_koneksi = Koneksi::getInstance();
		}

		//getter pesan dan koneksi
		public function getMessage()
		{
			return $this->_pesan;
		}

		public function getKoneksi()
		{
			return $this->_koneksi;
		}

		//cetak pesan bro
		public function pesanQuery()
		{
			$this->getKoneksi()->showMessage($this->getMessage());
		}
	}
?>