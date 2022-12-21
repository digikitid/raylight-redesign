<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package raylight
 */
?>

<footer class="ray-footer-main-wrapper">
    <div class="container">
        <div class="ray-footer-main">
            
            <div class="ray-footer-widget">
                <p>Footer widget 1</p>
            </div>
            <div class="ray-footer-widget">
                <p>Footer widget 2</p>
            </div>
            <div class="ray-footer-widget">
                <p>Footer widget 3</p>
            </div>
            <div class="ray-footer-widget">
                <p>Footer widget 4</p>
            </div>

        </div>
    </div>
</footer>

<footer class="ray-footer-copy-wrapper">
    <div class="container">
        <div class="ray-footer-copy">
            
            <div class="ray-footer-copy-text">
                <p>Copyright © <a href="#">Raylight</a> - 2022</p>
            </div>

            <div class="ray-footer-copy-social">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>

        </div>
    </div>
</footer>

<script src="https://kit.fontawesome.com/29434962b1.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="assets/js/js.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="assets/js/jquery.nicescroll.min.js"></script>
<script>
    var swiper = new Swiper(".swiper", { speed: 1200, slidesPerView: "auto", grabCursor: !0, spaceBetween: 0, loop: !0, parallax: !0, centeredSlides: !0, autoplay: { delay: 3500, disableOnInteraction: !1 } });
</script>

</body>
</html>