<?php
namespace kelas;

class website {
    protected $domain;
    protected $hosting;
    protected $jumlah_halaman;
    protected $status_online;

    public function __construct($domain, $hosting, $jumlah_halaman, $status_online) {
        $this->domain = $domain;
        $this->hosting = $hosting;
        $this->jumlah_halaman = $jumlah_halaman;
        $this->status_online = $status_online;
    }

    public function tampilkan_halaman($halaman) {
        echo "Menampilkan halaman $halaman di website dengan domain $this->domain" . PHP_EOL . "<br> <br>";
    }

    public function kirim_data($data) {
        echo "Mengirim data '$data' ke server $this->hosting" . PHP_EOL . "<br> <br>";
    }

    public function proses_transaksi($nominal) {
        if ($this->status_online) {
            echo "Memproses transaksi sebesar $nominal di website $this->domain" . PHP_EOL . "<br> <br>";
        } else {
            echo "Website $this->domain sedang offline, tidak dapat memproses transaksi." . PHP_EOL . "<br> <br>";
        }
    }
}
