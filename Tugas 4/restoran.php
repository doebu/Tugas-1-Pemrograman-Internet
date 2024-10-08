<?php
    class restoran {
        protected $nama;
        protected $alamat;
        protected $jenis_masakan;
        protected $rating;

        public function __construct($nama, $alamat, $jenis_masakan, $rating) {
            $this->nama = $nama;
            $this->alamat = $alamat;
            $this->jenis_masakan = $jenis_masakan;
            $this->rating = $rating;
        }

        public function tampilkan_menu($menu) {
            echo "Menu di $this->nama: $menu" . PHP_EOL . "<br> <br>";
        }

        public function pesan_makanan($makanan) {
            echo "Anda memesan $makanan di restoran $this->nama." . PHP_EOL . "<br> <br>";
        }

        public function hitung_total($jumlah, $harga_per_item) {
            $total = $jumlah * $harga_per_item;
            echo "Total harga untuk jumlah item adalah: Rp$total" . PHP_EOL . "<br> <br>";
        }
    }
?>