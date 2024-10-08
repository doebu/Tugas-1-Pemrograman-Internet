<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Informasi Kelas dan Objek</title>
        <style>
            body {
                font-family: 'Arial', sans-serif;
                background-color: #f0f0f0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                color: #333;
            }

            .container {
                background-color: #ffffff;
                padding: 40px;
                border-radius: 10px;
                display: flex;
                justify-content: space-between;
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
                max-width: 1700px;
                width: 100%;
                text-align: left;
                flex-wrap: wrap;
            }

            .column {
                width: 30%;
                padding: 10px;
                margin-left: 20px;
                margin-right: 20px;
                box-sizing: border-box;
            }

            h2 {
                margin-top: 0px;
                margin-bottom: 30px;
                color: #333;
                text-align: center;
            }

            .class-info {
                height: 220px;
                margin-bottom: 30px;
                border: 1px solid #e0e0e0;
                border-radius: 8px;
                padding: 20px;
                background-color: #f9f9f9;
            }

            .class-info h3 {
                margin-top: 0;
                color: #1f46ac;
            }

            .code-block {
                height: 150px;
                background-color: #f0f0f0;
                padding: 10px;
                border-radius: 5px;
                overflow-x: auto;
                border: 1px solid #e0e0e0;
            }

            .status-highlight {
                background-color: #007BFF;
                color: #ffffff;
                padding: 5px 10px;
                border-radius: 5px;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="column">
                <h2>Contoh Kelas dan Objek</h2>

                <div class="class-info">
                    <h3>Kelas: Lagu</h3>
                    <div class="code-block">
                        <?php
                            class lagu {
                                private $judul;
                                private $artis;
                                private $durasi;
                                private $genre; 

                                public function __construct($judul, $artis, $durasi, $genre) {
                                    $this->judul = $judul;
                                    $this->artis = $artis;
                                    $this->durasi = $durasi;
                                    $this->genre = $genre;
                                }
                            
                                public function play() {
                                    return "Lagu diputar";
                                }
                            
                                public function pause() {
                                    return "Lagu dijeda";
                                }
                            
                                public function stop() {
                                    return "Lagu diberhentikan";
                                }

                                public function get_judul() {
                                    return $this->judul;
                                }
                            
                                public function get_artis() {
                                    return $this->artis;
                                }
                            
                                public function get_durasi() {
                                    return $this->durasi;
                                }
                            
                                public function get_genre() {
                                    return $this->genre;
                                }
                            }   



                            $lagu_ku = new lagu("Satu Bulan", "Bernadya", "3:20", "Pop");

                            echo "Judul: " . $lagu_ku->get_judul() . "<br>";
                            echo "Artis: " . $lagu_ku->get_artis() . "<br>";
                            echo "Durasi: " . $lagu_ku->get_durasi() . "<br>";
                            echo "Genre: " . $lagu_ku->get_genre() . "<br>";
                            echo $lagu_ku->play();
                        ?>          
                    </div>
                </div>
            </div>

            <div class="column">
                <h2>Contoh Encapsulation</h2>

                <div class="class-info">
                    <h3>Kelas: Wahana</h3>
                    <div class="code-block">
                        <?php
                            class wahana {
                                private $nama_wahana;

                                public function set_nama_wahana($nama) {
                                    $this->nama_wahana = $nama;    
                                }

                                public function get_nama_wahana() {
                                    return $this->nama_wahana;
                                }
                            }
                            



                            $wahana_ku = new wahana();

                            $wahana_ku->set_nama_wahana("Roller Coaster");

                            echo "Nama Wahana: " . $wahana_ku->get_nama_wahana();
                        ?>          
                    </div>
                </div>
            </div>

            <div class="column">
                <h2>Contoh Inheritance</h2>

                <div class="class-info">
                    <h3>Kelas: Kamera</h3>
                    <div class="code-block">
                        <?php
                            class kamera {
                                public $merk;
                                public $resolusi;

                                public function ambil_foto() {
                                    return "Mengambil foto dengan resolusi " . $this->resolusi . " MP";    
                                }

                                public function rekam_video() {
                                    return "Merekam video";
                                }
                            }
                            
                            class kamera_digital extends kamera {
                                public $zoom_optik;
                            
                                public function ambil_foto() {
                                    return "Mengambil foto digital dengan resolusi " . $this->resolusi . " MP dan zoom optik " . $this->zoom_optik . "x";
                                }
                            }


                            $kamera_ku = new kamera_digital();
                            $kamera_ku->merk = "Fuji";
                            $kamera_ku->resolusi = 26;
                            $kamera_ku->zoom_optik = 10;

                            echo "Merk: " . $kamera_ku->merk . "<br>";
                            echo "Resolusi: " . $kamera_ku->resolusi . "<br>";
                            echo "Zoom Optik: " . $kamera_ku->zoom_optik . "<br> <br>";
                            echo $kamera_ku->ambil_foto() . "<br> <br>";
                            echo $kamera_ku->rekam_video();
                        ?>          
                    </div>
                </div>
            </div>

            <div class="column">
                <h2>Contoh Polimorfisme</h2>

                <div class="class-info">
                    <h3>Kelas: Dokter</h3>
                    <div class="code-block">
                        <?php
                            class dokter {
                                public $nama;

                                public function periksa() {
                                    return "Dokter sedang memeriksa pasien";    
                                }
                            }
                            
                            class dokter_umum extends dokter {
                                public function periksa() {
                                    return "Dokter Umum " . $this->nama . " sedang memeriksa pasien umum";
                                }
                            }

                            class dokter_spesialis extends dokter {
                                public $spesialisasi;

                                public function periksa() {
                                    return "Dokter Spesialis " . $this->nama . " dengan spesialisasi " . $this->spesialisasi . " sedang memeriksa pasien";
                                }
                            }

                            $dokter_1 = new dokter_umum();
                            $dokter_1->nama = "Dr. Budi";
                            echo $dokter_1->periksa() . "<br> <br>";

                            $dokter_2 = new dokter_spesialis();
                            $dokter_2->nama = "Dr. Zee";
                            $dokter_2->spesialisasi = "Kardiologi";
                            echo $dokter_2->periksa();
                        ?>          
                    </div>
                </div>
            </div>


            <div class="column">
                <h2>Contoh Abstraction</h2>

                <div class="class-info">
                    <h3>Kelas: Kartu Kredit</h3>
                    <div class="code-block">
                        <?php
                            abstract class kartu_kredit {
                                protected $nomor_kartu;
                                protected $nama_pemilik;
                                protected $limit_kredit;
                                protected $saldo;

                                public function __construct($nomor_kartu, $nama_pemilik, $limit_kredit, $saldo) {
                                    $this->nomor_kartu = $nomor_kartu;    
                                    $this->nama_pemilik = $nama_pemilik;    
                                    $this->limit_kredit = $limit_kredit;    
                                    $this->saldo = $saldo;    
                                }

                                abstract public function bayar_tagihan($jumlah);
                                abstract public function cek_saldo();
                                abstract public function tambah_limit($jumlah);
                            }
                            
                            class kartu_kredit_nasabah extends kartu_kredit {
                                public function bayar_tagihan($jumlah) {
                                    if ($this->saldo >= $jumlah) {
                                        $this->saldo -= $jumlah;
                                        echo "Tagihan sebesar $jumlah berhasil dibayar. <br> Sisa saldo:" . $this->saldo . PHP_EOL . "<br> <br>";
                                    } else {
                                        echo "Saldo tidak mencukupi untuk membayar tagihan." . PHP_EOL . "<br>";
                                    }
                                }

                                public function cek_saldo() {
                                    return "Saldo saat ini adalah: " . $this->saldo . PHP_EOL;
                                }

                                public function tambah_limit($jumlah) {
                                    $this->limit_kredit += $jumlah;
                                    echo "Limit kredit berhasil ditambah sebesar $jumlah. <br> Limit kredit saat ini: " . $this->limit_kredit . PHP_EOL . "<br>";
                                }
                            }

                            $kartu = new kartu_kredit_nasabah("1234-5678-9876-5432", "Power Ranger Biru", 10000000, 5000000);
                            echo $kartu->cek_saldo() . "<br> <br>";
                            $kartu->bayar_tagihan(2000000);
                            $kartu->tambah_limit(5000000);
                        ?>          
                    </div>
                </div>
            </div>

            <div class="column">
                <h2>Contoh Require atau Include</h2>

                <div class="class-info">
                    <h3>Kelas: Smartphone</h3>
                    <div class="code-block">
                        <?php
                            require 'require.php';

                            $smartphone = new smartphone("Iphone", "SE 2", "2800mAh", "iOS");

                            $smartphone->panggil("08123456789");
                            $smartphone->kirim_pesan("08123456789", "Yoboseo");
                            $smartphone->buka_aplikasi("Duolingo");
                        ?>          
                    </div>
                </div>
            </div>

            <div class="column">
                <h2>Contoh SPL Autoload Register</h2>

                <div class="class-info">
                    <h3>Kelas: Restoran</h3>
                    <div class="code-block">
                        <?php
                            spl_autoload_register(function($class_name) {
                                $file = str_replace('\\', DIRECTORY_SEPARATOR, $class_name) . '.php';

                                if (file_exists(__DIR__ . '/' . $file)) {
                                    include __DIR__ . '/' . $file;
                                }
                            });

                            $restoran_ku = new restoran("KFC", "Jl. Raya Kampus Unud", "Masakan Cepat Saji", 4.5);

                            $restoran_ku->tampilkan_menu("Ayam Goreng, Kentang Goreng, Burger");
                            $restoran_ku->pesan_makanan("Kentang Goreng dan Burger");
                            $restoran_ku->hitung_total(2, 40000);
                        ?>          
                    </div>
                </div>
            </div>

            <div class="column">
                <h2>Contoh Composer Autoload</h2>

                <div class="class-info">
                    <h3>Kelas: Website</h3>
                    <div class="code-block">
                        <?php
                            require __DIR__ . '/vendor/autoload.php';

                            use kelas\website;

                            $Website = new website("Microsoft.com", "Hostinger", 10, true);

                            $Website->tampilkan_halaman("Beranda");
                            $Website->kirim_data("Formulir Kontak");
                            $Website->proses_transaksi(500000);
                        ?>          
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>