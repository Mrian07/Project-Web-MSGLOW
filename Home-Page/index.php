<?php
require '../functions.php';

$msglow_paket = query("SELECT * FROM `msglow-paket`");
$msglow_serum = query("SELECT * FROM `msglow-serum`");
$msglow_kosmetik = query("SELECT * FROM `msglow-kosmetik`");

?>


<!DOCTYPE html>
<html lang="id">

<head>
    <title>MS GLOW Pearlindah</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="box">
        <!--HEADER-->
        <!--HEADER ini dibuat dengan tumpukan-tumpukan dari css-->
        <div class="header">
            <div class="headerstack">
                <img src="./images/logo.png" alt="Logo">
                <a href="../Admin-Page/index.php">(Login As Admin)</a>
                <div class="headerstackkuadrat">
                    <h1>PEARLINDAH</h1>
                </div>
            </div>
        </div>
        <!--MENU-->
        <nav>
            <div class="menu">
                <!-- Home -->
                <a href="#Home">
                    <div class="icon-menu">
                        <img src="./images/Home.png" alt="Home">
                        <br><i>Home</i>

                    </div>
                </a>
                <!-- Products -->
                <a href="#Products">
                    <div class="icon-menu">
                        <img src="./images/product.png" alt="Products">
                        <br><i>Products</i>
                    </div>
                </a>
                <!-- Order -->
                <a href="#Halaman_Pemesanan">
                    <div class="icon-menu">
                        <img src="./images/shopping-bag.png" alt="Order">
                        <br><i>Order</i>

                    </div>
                </a>
                <!-- Testimoni -->
                <a href="#Testimoni">
                    <div class="icon-menu">
                        <img src="./images/rating.png" alt="Testimoni">
                        <br><i>Testimoni</i>

                    </div>
                </a>
                <!-- Article -->
                <a href="https://www116.zippyshare.com/v/Wp3ctUvz/file.html">
                    <div class="icon-menu">
                        <img src="./images/article.png" alt="Catalog">
                        <br><i>Catalog</i>

                    </div>
                </a>
                <!-- About Us -->
                <a href="#About-Us">
                    <div class="icon-menu">
                        <img src="./images/about-us.png" alt="About Us">
                        <br><i>About Us</i>
                    </div>
                </a>
            </div>
        </nav>
        <!--Content-->
        <div class="content">
            <!-- MSGLOW HOME -->
            <div class="home" id="Home">
                <img src="./images/logo-underline.png" alt="MSGLOW">
                <h1>MS GLOW Beauty</h1>
                <p>MS Glow adalah perusahaan yang berkedudukan di Indonesia. Perusahaan yang bergerak dalam produksi
                    kosmetik dan klinik kecantikan ini berdiri pada tahun 2013. MS Glow didirikan oleh dua orang
                    pengusaha yaitu Shandy Purnamasari dan Kadek Maharani Kemala Dewi. Dengan menunjuk Raffi Ahmad
                    sebagai duta merek (brand ambasador) MS Glow for Men (dirikan oleh Gilang Widya Pramana dan Dewa
                    Gede Adiputra) dan Nagita Slavina sebagai MS Glow for Beauty, perusahaan ini berada dibalik
                    kesuksesan kedua artis tersebut memecahkan rekor dari Museum Rekor Indonesia atas siaran langsung
                    live streaming di kanal berbagi video Youtube selama 30 jam yang pernah dilakukan oleh keduanya, 20
                    Juni 2020. Selain Raffi dan Nagita, beberapa artis lain juga pernah menjadi brand ambassador
                    MS Glow yaitu Olla Ramlan, Jessica Iskandar, Luna Maya, Oki Setiana Dewi, Shandy Aulia, Sarwendah,
                    Sarita Abdul Mukti, Sandra Dewi, Ivan Gunawan, Fitri Salhuteru, Jovi Adiguna, dan Verrel Bramasta.
                </p>

                <p>Penamaan MS Glow diambil dari moto perusahaan yakni Magic for Skin. Awalnya MS Glow menjual produk
                    perawata kulit (skin care) dan perawatan tubuh (body care) secara daring. Namun, kemudian hampir
                    semua produknya memperoleh kepercayaan dari jutaan pelangga sehingga perusahaan ini terus melakukan
                    pengembangan produk, yang kini berkembang menjadi skincare, bodycare, dan cosmetic serta memiliki
                    agen dan member resmi di seluruh Indonesia bahkan merambah mancanegara. Berbekal sertifikasi halal
                    dari Majelis Ulama Indonesia dan uji klinis dari Badan Pengawas Obat dan Makanan, MS Glow telah
                    membuka klinik kecantikan di berbagai kota di Indonesia. Tahun 2017 berdiri dua klinik di Malang dan
                    Bali, tahun 2018 dibuka tiga klinik di Surabaya, Jakarta, dan Bandung. Sedangkan tahun 2019 menyusul
                    dibukanya dua klinik di Bintaro dan Sidoarjo. Tahun 2020, MS Glow mendukung pemecahan rekor Museum
                    Rekor Indonesia yang dilakukan oleh Raffi Ahmad dan Nagita Slavina berupa live streaming selama 30
                    jam di kanal berbagi video Youtube.</p>

                <p>Kini MSGLOW telah berkembang menjadi skincare, bodycare dan cosmetic dan memiliki agen dan member
                    resmi di seluruh Indonesia bahkan sudah merambah mancanegara. Produk MSGLOW memiliki sertifikasi
                    BPOM , Halal dan sudah teruji secara klinis.</p>
                <p>Tidak hanya sampai disitu, Demi Kepuasan dan kepercayaan custumer kami pun mendirikan Klinik
                    Kecantikan yang saat ini sudah ada 4 cabang di kota kota besar di Indonesia.</p>

                <h4>MS Glow</h4>
            </div>
            <!-- MSGLOW PRODUCTS -->
            <div class="products" id="Products">
                <img src="./images/logo-underline.png" alt="MSGLOW">
                <h1>MS GLOW Products</h1>
                <div class="product-content">


                    <!-- PAKET MSGLOW -->
                    <h2>Paket MS Glow Beauty</h2>
                    <?php $stop = 0; ?>
                    <?php foreach ($msglow_paket as $row) : ?>
                        <?php $stop++; ?>
                        <a href="#Pemesanan">
                            <div class="product-table">
                                <img src="./images/<?= $row['gambar']; ?>" alt="<?= $row['nama']; ?>">
                                <div>
                                    <i><?= $row['nama']; ?></i><br>
                                    <p class="harga-text">Rp. <?= $row['harga']; ?></p>
                                </div>
                            </div>
                        </a>
                        <?php if ($stop == 4) {
                            break;
                        } ?>

                    <?php endforeach; ?>
                    <a href="produk_lengkap.php?nama=`msglow-paket`&jenis=Paket%20MS%20Glow" class="selengkapnya">Lihat Selengkapnya>>></a>


                    <!-- SERUM WAJAH -->
                    <h2>Serum Wajah</h2>
                    <?php $stop = 0; ?>
                    <?php foreach ($msglow_serum as $row) : ?>
                        <?php $stop++; ?>
                        <a href="#Pemesanan">
                            <div class="product-table">
                                <img src="./images/<?= $row['gambar']; ?>" alt="<?= $row['nama']; ?>">
                                <div>
                                    <i><?= $row['nama']; ?></i><br>
                                    <p class="harga-text">Rp. <?= $row['harga']; ?></p>
                                </div>
                            </div>
                        </a>
                        <?php if ($stop == 4) {
                            break;
                        } ?>

                    <?php endforeach; ?>
                    <a href="produk_lengkap.php?nama=`msglow-serum`&jenis=Serum%20Wajah" class="selengkapnya">Lihat Selengkapnya>>></a>


                    <!--Kosmetik-->
                    <h2>Kosmetik</h2>
                    <?php $stop = 0; ?>
                    <?php foreach ($msglow_kosmetik as $row) : ?>
                        <?php $stop++; ?>
                        <a href="#Pemesanan">
                            <div class="product-table">
                                <img src="./images/<?= $row['gambar']; ?>" alt="<?= $row['nama']; ?>">
                                <div>
                                    <i><?= $row['nama']; ?></i><br>
                                    <p class="harga-text">Rp. <?= $row['harga']; ?></p>
                                </div>
                            </div>
                        </a>
                        <?php if ($stop == 4) {
                            break;
                        } ?>

                    <?php endforeach; ?>
                    <a href="produk_lengkap.php?nama=`msglow-kosmetik`&jenis=Kosmetik" class="selengkapnya">Lihat Selengkapnya>>></a>

                </div>
            </div>

            <!-- Halaman Testimoni -->
            <div class="testimonies" id="Testimoni">
                <img src="./images/logo-underline.png" alt="MSGLOW">
                <h1>MS Glow Testimoni</h1>
                <div class="testimoni-content">
                    <div class="testimoni-table">
                        <img src="./images/testi-1.jpeg" alt="testi-1">
                    </div>
                    <div class="testimoni-table">
                        <img src="./images/testi-2.jpeg" alt="testi-2">
                    </div>
                    <div class="testimoni-table">
                        <img src="./images/testi-3.jpeg" alt="testi-3">
                    </div>
                    <div class="testimoni-table">
                        <img src="./images/testi-4.jpeg" alt="testi-4">
                    </div>
                </div>
            </div>

        </div>

        <!--SideBar-->
        <div class="sidebar">
            <!-- HALAMAN PEMESANAN -->
            <div class="pemesanan" id="Halaman_Pemesanan">
                <h2>Halaman Pemesanan</h2>
                <!--FORM Pemesanan-->
                <form action="javascript:cek();" method="post" id="Pemesanan" name="Pemesanan" onsubmit="return checkAll();">
                    <!-- NAMA -->
                    <div class="nama">
                        <label for="Nama">Nama : </label>
                        <input onkeypress="hide_required_nama();" type="text" id="Nama" value="Cek">
                        <br>
                        <span class="fill_it" id="Nama_Required">Harap isi bidang ini!</span>
                        <span class="Validasi_Input"></span>

                    </div>
                    <!-- EMAIL -->
                    <div class="email">
                        <label for="Email">E-Mail : </label>
                        <input onkeypress="hide_required_email(); hide_validasi_email();" type="text" id="Email" value="Cek@">
                        <br>
                        <span class="fill_it" id="Email_Required">Harap isi bidang ini!</span>
                        <span class="Validasi_Input" id="Email_Validasi">Masukan Alamat E-Mail dengan Benar</span>

                    </div>
                    <!-- NOMER HP -->
                    <div class="nomer_hp">
                        <label for="No_HP">No. HP : </label>
                        <input onkeypress="hide_required_nomer_hp(); hide_validasi_nomer_hp();" type="text" id="Nomer_HP" value="000">
                        <br>
                        <span class="fill_it" id="Nomer_HP_Required">Harap isi bidang ini!</span>
                        <span class="Validasi_Input" id="Nomer_HP_Validasi">Hanya Masukan Nomer</span>
                    </div>
                    <!-- JENIS PRODUK -->
                    <div class="jenis_produk">
                        <label for="Jenis_Produk">Jenis Produk : </label>
                        <select name="Jenis_Produk" id="Jenis_Produk" onclick="hide_required_jenis_produk();">
                            <option value=""> --Products MSGLOW-- </option>
                            <option value="Paket Whitening Series">Paket Whitening Series</option>
                            <option value="Paket Acne Series">Paket Acne Series</option>
                            <option value="Paket Ultimate Series">Paket Ultimate Series</option>
                            <option value="Paket Luminous Series">Paket Luminous Series</option>
                            <option value="Serum Acne">Serum Acne</option>
                            <option value="Serum Lifting">Serum Lifting</option>
                            <option value="Serum Luminous">Serum Luminous</option>
                            <option value="Serum Peeling">Serum Peeling</option>
                        </select>
                        <br>
                        <span class="fill_it" id="Jenis_Produk_Required">Harap isi bidang ini!</span>
                        <span class="Validasi_Input"></span>
                    </div>
                    <!-- JUMLAH PRODUK -->
                    <div class="jumlah_produk">
                        <label for="Jumlah_Produk">Jumlah Produk : </label>
                        <input onkeypress="hide_required_jumlah_produk(); hide_validasi_jumlah_produk();" type="text" id="Jumlah_Produk" value="000">
                        <br>
                        <span class="fill_it" id="Jumlah_Produk_Required">Harap isi bidang ini!</span>
                        <span class="Validasi_Input" id="Jumlah_Produk_Validasi">Hanya Masukan Nomer</span>
                    </div>

                    <!-- JENIS PENGIRIMAN -->
                    <div class="jenis_pengiriman">
                        <label for="Jenis_Pengiriman">Jenis Pengiriman : </label>
                        <div class="opsi_jenis_pengiriman">
                            <input onclick="hide_required_jenis_pengiriman();" type="radio" name="Jenis_Pengiriman" id="Jenis_Pengiriman1" value="JnT"><i>J&T</i>
                            <input onclick="hide_required_jenis_pengiriman();" type="radio" name="Jenis_Pengiriman" id="Jenis_Pengiriman2" value="JNE"><i>JNE</i>
                            <input onclick="hide_required_jenis_pengiriman();" type="radio" name="Jenis_Pengiriman" id="Jenis_Pengiriman3" value="COD"><i>COD</i>
                        </div>
                        <br>
                        <span class="fill_it" id="Jenis_Pengiriman_Required">Harap isi bidang ini!</span>
                        <span class="Validasi_Input"></span>
                    </div>
                    <!-- ALAMAT -->
                    <div class="alamat">
                        <label for="Alamat">Alamat : </label>
                    </div>

                    <div class="text-alamat">
                        <textarea name="Alamat" id="Alamat" cols="30" rows="3" onkeypress="hide_required_alamat();"></textarea>
                        <br>
                        <span class="fill_it" id="Alamat_Required">Harap isi bidang ini!</span>
                        <span class="Validasi_Input"></span>
                    </div>
                    <!-- APAKAH ANDA YAKIN -->
                    <div class="apakah_yakin">
                        <label for="Apakah_Yakin">Apakah Anda Yakin?</label>
                        <input onclick="hide_required_yakin();" type="checkbox" id="Apakah_Yakin" name="Apakah_Yakin" checked>
                        <br>
                        <span class="fill_it" id="Apakah_Yakin_Required">Harap isi bidang ini!</span>
                        <span class="Validasi_Input"></span>
                    </div>

                    <div class="submit-pemesanan">
                        <input type="submit" value="Pesan" class="submit-pesanan" name="submit" id="submit" onclick="redirect_WA();">
                        <input type="reset" value="Batalkan Pesanan" class="batalkan-pesanan">
                    </div>
                </form>
            </div>
        </div>
        <div class="footer">
            <img src="./images/logo-tanpa-tulisan.png" alt="Logo">
            <p>MS Glow Pearlindah</p>
        </div>
    </div>
    <script src="scripts.js"></script>
</body>

</html>