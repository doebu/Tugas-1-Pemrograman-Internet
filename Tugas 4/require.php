<?php
    class smartphone {
        protected $merk;
        protected $model;
        protected $kapasitas_baterai;
        protected $sistem_operasi;

        public function __construct($merk, $model, $kapasitas_baterai, $sistem_operasi) {
            $this->merk = $merk;
            $this->model = $model;
            $this->kapasitas_baterai= $kapasitas_baterai;
            $this->sistem_operasi = $sistem_operasi;
        }

        public function panggil($nomor) {
            echo "Memanggil nomor $nomor menggunakan $this->merk $this->model" . PHP_EOL . "<br> <br>";
        }

        public function kirim_pesan($nomor, $pesan) {
            echo "Mengirim pesan ke $nomor: '$pesan' menggunakan $this->merk $this->model" . PHP_EOL . "<br> <br>";
        }

        public function buka_aplikasi($nama_aplikasi) {
            echo "Membuka aplikasi $nama_aplikasi di $this->merk $this->model dengan sistem operasi $this->sistem_operasi" . PHP_EOL . "<br> <br>";
        }
    }
?>