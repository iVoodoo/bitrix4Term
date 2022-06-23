<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
IncludeTemplateLangFile(__FILE__);
?>

</section>
</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="mt-auto">
  <div class="container">
    <h3 class="title"><? $APPLICATION->IncludeFile(
          $APPLICATION->GetTemplatePath("include_areas/company_name.php"),
          array(0),
          array("MODE" => "html")
        ); ?></h3>
    <div class="copyright">
      &copy; 2022
    </div>

  </div>
  
</footer>
<!-- <script src="<?= SITE_TEMPLATE_PATH ?>/assets/js/chart.js"></script> -->

<!-- =======  End Footer =======  -->

<!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

<!-- Vendor JS Files -->
<script src="<?= SITE_TEMPLATE_PATH ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?= SITE_TEMPLATE_PATH ?>/assets/js/main.js"></script>
<!-- <script src="<?= SITE_TEMPLATE_PATH ?>/assets/js/chart.js"></script> -->
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Dark.js"></script>

</body>

</html>