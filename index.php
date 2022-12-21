<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package raylight
 */
?>

<?php include 'header.php'; ?>

<section class="ray-main-main-wrapper">

    <section class="ray-floating-ads-container">        
        <div class="ray-floating-ads">
            <span class="ray-floating-ads-close">
                <i class="fas fa-times"></i>
            </span>
            <a href="#">
                <img src="assets/image/floating-ads.png" alt="">
            </a>

        </div>
    </section>
    
    <section class="ray-main-section">
        
        <section class="ray-branding-wrapper">
            <div class="container">
                
                <div class="ray-branding-container">
                    <!--<div class="ray-branding">
                        <h1><a href="#">Raylight</a></h1>
                    </div>-->
                    <div class="ray-branding">
                        <img src="assets/image/Raylight.png" alt="site logo">
                    </div>

                    <div class="ray-ads-1-container">
                        <a href="#">
                            <img src="assets/image/ads-1.png" alt="ads">
                        </a>
                    </div>
                </div>

            </div>
        </section>

        <nav class="ray-main-menu-wrapper">
            <div class="container">
                
                <div class="ray-main-menu-container">
                    <ul>
                        <li><a href="#">Beranda</a></li>
                        <li class="menu-item-has-children"><a href="#">Teknologi</a>
                            <ul>
                                <li><a href="#">Sub Menu 1</a></li>
                                <li><a href="#">Sub Menu 2</a></li>
                                <li><a href="#">Sub Menu 3</a></li>
                                <li><a href="#">Sub Menu 4</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Sport</a>
                            <ul>
                                <li><a href="#">Pellentesque auctor neque nec urna.</a></li>
                                <li><a href="#">Sub Menu 2</a></li>
                                <li><a href="#">Sub Menu 3</a></li>
                                <li class="menu-item-has-children"><a href="#">Sub Menu 4</a>
                                    <ul>
                                        <li><a href="#">Pellentesque auctor neque nec urna.</a></li>
                                        <li><a href="#">Sub Menu 2</a></li>
                                        <li><a href="#">Sub Menu 3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Otomotif</a></li>
                        <li><a href="#">Politik</a></li>
                        <li><a href="#">Kesehatan</a></li>
                        <li><a href="#">Wisata</a></li>
                        <li><a href="#">Kriminal</a></li>
                        <li><a href="#">Sejarah</a></li>
                    </ul>
                </div>

            </div>
        </nav>

        <section class="ray-custom-posts-1">
            <div class="container">
                
                <div class="ray-custom-posts-1-container">
                    <article class="ray-custom-post-1">
                        <figure class="ray-custom-post-1-image">
                            <a href="#">
                                <img src="assets/image/1.jpg" alt="image">
                            </a>
                            <a href="#" class="ray-custom-post-1-category">Kriminal</a>
                        </figure>
                        <section class="ray-custom-post-1-entry">
                            <h3 class="ray-custom-post-1-title"><a href="#">Akhir Tragis Hidup Model Dewasa, tewas Terikat di Pohon Tanpa Busana.</a></h3>
                        </section>
                    </article>
                    <article class="ray-custom-post-1">
                        <figure class="ray-custom-post-1-image">
                            <a href="#">
                                <img src="assets/image/2.jpg" alt="image">
                            </a>
                            <a href="#" class="ray-custom-post-1-category">Politik</a>
                        </figure>
                        <section class="ray-custom-post-1-entry">
                            <h3 class="ray-custom-post-1-title"><a href="#">Kopassus dan Denjaka Kawal Jokowi Bertemu Vladimir Putin yang Dijaga Pasukan Khusus Spetsnaz Rusia.</a></h3>
                        </section>
                    </article>
                    <article class="ray-custom-post-1">
                        <figure class="ray-custom-post-1-image">
                            <a href="#">
                                <img src="assets/image/3.jpg" alt="image">
                            </a>
                            <a href="#" class="ray-custom-post-1-category">Bencana</a>
                        </figure>
                        <section class="ray-custom-post-1-entry">
                            <h3 class="ray-custom-post-1-title"><a href="#">Daftar Mobil yang Dilarang Pakai Pertalite, Innova, CR-V hingga Pajero Sport.</a></h3>
                        </section>
                    </article>
                    <article class="ray-custom-post-1">
                        <figure class="ray-custom-post-1-image">
                            <a href="#">
                                <img src="assets/image/1.jpg" alt="image">
                            </a>
                            <a href="#" class="ray-custom-post-1-category">Sejarah</a>
                        </figure>
                        <section class="ray-custom-post-1-entry">
                            <h3 class="ray-custom-post-1-title"><a href="#">Mantan Duta Besar Tantowi Yahya Sebut Kunjungan Jokowi ke Ukraina dan Rusia Gila.</a></h3>
                        </section>
                    </article>
                </div>

            </div>
        </section>

        <div class="container">
            <section class="ray-ads-container">
                <div class="ray-ads-2">
                    
                    <a href="#">
                        <img src="assets/image/ads-2.png" alt="">
                    </a>

                </div>
            </section>
        </div>

        <main class="ray-main-wrapper">
            <div class="container">
                
                <div class="ray-main-container">
                    <section class="ray-main">
                        
                        <section class="ray-custom-posts-2">
                            <div class="swiper ray-swiper">
                                <div class="swiper-wrapper">
                                    <article class="swiper-slide ray-swiper-post">
                                        <figure class="ray-swiper-post-image">
                                            <a href="#">
                                                <img src="assets/image/1.jpg" alt="image">
                                            </a>
                                        </figure>
                                        <section class="ray-swiper-post-entry">
                                            <a href="#" class="ray-swiper-category">Kesehatan</a>
                                            <h2 class="ray-swiper-title">
                                                <a href="#">Putin Ingatkan Jokowi: Jasa Rusia Banyak Bantu RI di Awal Kemerdekaan</a>
                                            </h2>
                                            <div class="ray-swiper-metadata">
                                                <span>24 November 2022</span>
                                            </div>
                                        </section>
                                    </article>
                                    <article class="swiper-slide ray-swiper-post">
                                        <figure class="ray-swiper-post-image">
                                            <a href="#">
                                                <img src="assets/image/2.jpg" alt="image">
                                            </a>
                                        </figure>
                                        <section class="ray-swiper-post-entry">
                                            <a href="#" class="ray-swiper-category">Finansial</a>
                                            <h2 class="ray-swiper-title">
                                                <a href="#">MyPertamina dan Logika Aneh Pertamina: Nggak Peka Kehidupan Rakyat Kecil</a>
                                            </h2>
                                            <div class="ray-swiper-metadata">
                                                <span>24 November 2022</span>
                                            </div>
                                        </section>
                                    </article>
                                    <article class="swiper-slide ray-swiper-post">
                                        <figure class="ray-swiper-post-image">
                                            <a href="#">
                                                <img src="assets/image/3.jpg" alt="image">
                                            </a>
                                        </figure>
                                        <section class="ray-swiper-post-entry">
                                            <a href="#" class="ray-swiper-category">Olahraga</a>
                                            <h2 class="ray-swiper-title">
                                                <a href="#">S-400 Secara Tak Langsung Jaga Penerbangan Pesawat Presiden Jokowi: Letaknya Dekat Bandara Vnukovo II Rusia</a>
                                            </h2>
                                            <div class="ray-swiper-metadata">
                                                <span>24 November 2022</span>
                                            </div>
                                        </section>
                                    </article>
                                </div>
                            </div>
                        </section>

                        <section class="ray-custom-posts-3">
                            <article class="ray-custom-post-3">
                                <figure class="ray-custom-post-3-image">
                                    <a href="#">
                                        <img src="assets/image/1.jpg" alt="image">
                                    </a>
                                    <a href="#" class="ray-custom-post-3-category">Internasional</a>
                                </figure>
                                <section class="ray-custom-post-3-entry">
                                    <h3 class="ray-custom-post-3-title">
                                        <a href="#">MyPertamina dan Logika Aneh Pertamina: Nggak Peka Kehidupan Rakyat Kecil</a>
                                    </h3>
                                </section>
                            </article>
                            <article class="ray-custom-post-3">
                                <figure class="ray-custom-post-3-image">
                                    <a href="#">
                                        <img src="assets/image/2.jpg" alt="image">
                                    </a>
                                    <a href="#" class="ray-custom-post-3-category">Internasional</a>
                                </figure>
                                <section class="ray-custom-post-3-entry">
                                    <h3 class="ray-custom-post-3-title">
                                        <a href="#">S-400 Secara Tak Langsung Jaga Penerbangan Pesawat Presiden Jokowi: Letaknya Dekat Bandara Vnukovo II Rusia</a>
                                    </h3>
                                </section>
                            </article>
                            <article class="ray-custom-post-3">
                                <figure class="ray-custom-post-3-image">
                                    <a href="#">
                                        <img src="assets/image/3.jpg" alt="image">
                                    </a>
                                    <a href="#" class="ray-custom-post-3-category">Internasional</a>
                                </figure>
                                <section class="ray-custom-post-3-entry">
                                    <h3 class="ray-custom-post-3-title">
                                        <a href="#">Sekutu Rusia Girang, Presiden Jokowi Disebut Tamu Terhormat Karena Mau Daimaikan Vladimir Putin dengan Ukraina</a>
                                    </h3>
                                </section>
                            </article>
                        </section>

                        <section class="ray-ads-container">
                            <div class="ray-ads-3">
                                
                                <a href="#">
                                    <img src="assets/image/ads-3.png" alt="">
                                </a>

                            </div>
                        </section>

                        <section class="ray-main-posts">
                            <h2 class="ray-main-posts-heading">Postingan Terbaru</h2>

                            <div class="ray-main-posts-container">
                                <article class="ray-main-post">
                                    <figure class="ray-main-post-image">
                                        <a href="#">
                                            <img src="assets/image/1.jpg" alt="image">
                                        </a>
                                    </figure>
                                    <section class="ray-main-post-entry">
                                        <span class="ray-main-post-category">
                                            <a href="#">politik</a>
                                        </span>
                                        <h2 class="ray-main-post-title">
                                            <a href="#">Jenazah Tjahjo Kumolo Disemanyamkan, RismaMoeldoko Melayat ke Rumah Duka</a>
                                        </h2>
                                        <div class="ray-main-post-metadata">
                                            <span><a href="#">Admin</a></span>
                                            <span class="ray-main-post-separator">/</span>
                                            <span>2 Desember 2022</span>
                                        </div>
                                    </section>
                                </article>
                                <article class="ray-main-post">
                                    <figure class="ray-main-post-image">
                                        <a href="#">
                                            <img src="assets/image/2.jpg" alt="image">
                                        </a>
                                    </figure>
                                    <section class="ray-main-post-entry">
                                        <span class="ray-main-post-category">
                                            <a href="#">politik</a>
                                        </span>
                                        <h2 class="ray-main-post-title">
                                            <a href="#">Didatangi Jokowi di Moskow, ini Kalimat yang Disampaikan Putin Soal Ukraina, Tanpa Basa - Basi</a>
                                        </h2>
                                        <div class="ray-main-post-metadata">
                                            <span><a href="#">Admin</a></span>
                                            <span class="ray-main-post-separator">/</span>
                                            <span>2 Desember 2022</span>
                                        </div>
                                    </section>
                                </article>
                                <article class="ray-main-post">
                                    <figure class="ray-main-post-image">
                                        <a href="#">
                                            <img src="assets/image/3.jpg" alt="image">
                                        </a>
                                    </figure>
                                    <section class="ray-main-post-entry">
                                        <span class="ray-main-post-category">
                                            <a href="#">politik</a>
                                        </span>
                                        <h2 class="ray-main-post-title">
                                            <a href="#">Putin Minat Bangun Industri Nuklir di Indonesia</a>
                                        </h2>
                                        <div class="ray-main-post-metadata">
                                            <span><a href="#">Admin</a></span>
                                            <span class="ray-main-post-separator">/</span>
                                            <span>2 Desember 2022</span>
                                        </div>
                                    </section>
                                </article>
                                <article class="ray-main-post">
                                    <figure class="ray-main-post-image">
                                        <a href="#">
                                            <img src="assets/image/1.jpg" alt="image">
                                        </a>
                                    </figure>
                                    <section class="ray-main-post-entry">
                                        <span class="ray-main-post-category">
                                            <a href="#">politik</a>
                                        </span>
                                        <h2 class="ray-main-post-title">
                                            <a href="#">Jenazah Tjahjo Kumolo Disemanyamkan, RismaMoeldoko Melayat ke Rumah Duka</a>
                                        </h2>
                                        <div class="ray-main-post-metadata">
                                            <span><a href="#">Admin</a></span>
                                            <span class="ray-main-post-separator">/</span>
                                            <span>2 Desember 2022</span>
                                        </div>
                                    </section>
                                </article>
                                <article class="ray-main-post">
                                    <figure class="ray-main-post-image">
                                        <a href="#">
                                            <img src="assets/image/2.jpg" alt="image">
                                        </a>
                                    </figure>
                                    <section class="ray-main-post-entry">
                                        <span class="ray-main-post-category">
                                            <a href="#">politik</a>
                                        </span>
                                        <h2 class="ray-main-post-title">
                                            <a href="#">Didatangi Jokowi di Moskow, ini Kalimat yang Disampaikan Putin Soal Ukraina, Tanpa Basa - Basi</a>
                                        </h2>
                                        <div class="ray-main-post-metadata">
                                            <span><a href="#">Admin</a></span>
                                            <span class="ray-main-post-separator">/</span>
                                            <span>2 Desember 2022</span>
                                        </div>
                                    </section>
                                </article>
                                <article class="ray-main-post">
                                    <figure class="ray-main-post-image">
                                        <a href="#">
                                            <img src="assets/image/3.jpg" alt="image">
                                        </a>
                                    </figure>
                                    <section class="ray-main-post-entry">
                                        <span class="ray-main-post-category">
                                            <a href="#">politik</a>
                                        </span>
                                        <h2 class="ray-main-post-title">
                                            <a href="#">Putin Minat Bangun Industri Nuklir di Indonesia</a>
                                        </h2>
                                        <div class="ray-main-post-metadata">
                                            <span><a href="#">Admin</a></span>
                                            <span class="ray-main-post-separator">/</span>
                                            <span>2 Desember 2022</span>
                                        </div>
                                    </section>
                                </article>
                                <article class="ray-main-post">
                                    <figure class="ray-main-post-image">
                                        <a href="#">
                                            <img src="assets/image/1.jpg" alt="image">
                                        </a>
                                    </figure>
                                    <section class="ray-main-post-entry">
                                        <span class="ray-main-post-category">
                                            <a href="#">politik</a>
                                        </span>
                                        <h2 class="ray-main-post-title">
                                            <a href="#">Jenazah Tjahjo Kumolo Disemanyamkan, RismaMoeldoko Melayat ke Rumah Duka</a>
                                        </h2>
                                        <div class="ray-main-post-metadata">
                                            <span><a href="#">Admin</a></span>
                                            <span class="ray-main-post-separator">/</span>
                                            <span>2 Desember 2022</span>
                                        </div>
                                    </section>
                                </article>
                                <article class="ray-main-post">
                                    <figure class="ray-main-post-image">
                                        <a href="#">
                                            <img src="assets/image/2.jpg" alt="image">
                                        </a>
                                    </figure>
                                    <section class="ray-main-post-entry">
                                        <span class="ray-main-post-category">
                                            <a href="#">politik</a>
                                        </span>
                                        <h2 class="ray-main-post-title">
                                            <a href="#">Didatangi Jokowi di Moskow, ini Kalimat yang Disampaikan Putin Soal Ukraina, Tanpa Basa - Basi</a>
                                        </h2>
                                        <div class="ray-main-post-metadata">
                                            <span><a href="#">Admin</a></span>
                                            <span class="ray-main-post-separator">/</span>
                                            <span>2 Desember 2022</span>
                                        </div>
                                    </section>
                                </article>
                            </div>
                        </section>

                        <!---<section class="ray-posts-pagination ray-pagination-number">
                            <span class="current">1</span>
                            <a href="#">2</a>
                            <a href="#">3</a>
                        </section>-->

                        <section class="ray-posts-pagination ray-pagination-next">
                            <a href="#">Previous</a>
                            <a href="#">Next</a>
                        </section>

                        <section class="ray-ads-container">
                            <div class="ray-ads-4">
                                
                                <a href="#">
                                    <img src="assets/image/ads-3.png" alt="">
                                </a>

                            </div>
                        </section>

                    </section>
                    <aside class="ray-sidebar">
                        
                        <?php include 'inc/widget/widget-style/ray-widget-style-1.php'; ?>

                        <?php include 'inc/widget/widget-style/ray-widget-style-2.php'; ?>

                        <?php include 'inc/widget/widget-style/ray-widget-style-3.php'; ?>

                    </aside>
                    <div style="clear: both;"></div>
                </div>

            </div>
        </main>

    </section>

    <section class="ray-floating-ads-container">
        <span class="ray-floating-ads-close">
            <i class="fas fa-times"></i>
        </span>
        <div class="ray-floating-ads">
            <span class="ray-floating-ads-close">
                <i class="fas fa-times"></i>
            </span>
            <a href="#">
                <img src="assets/image/floating-ads.png" alt="">
            </a>

        </div>
    </section>

    <div style="clear: both;"></div>

</section>

<?php include 'footer.php'; ?>