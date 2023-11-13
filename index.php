<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>ziiGzaGz</title>


  <?php include_once("components/meta.php"); ?>
  <?php include_once("css.php"); ?>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-1XW6580P7R"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-1XW6580P7R');
  </script>

  
  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
      Tawk_LoadStart = new Date();
    (function() {
      var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
      s1.async = true;
      s1.src = 'https://embed.tawk.to/6551a672cec6a912820f30a3/1hf3f4cmd';
      s1.charset = 'UTF-8';
      s1.setAttribute('crossorigin', '*');
      s0.parentNode.insertBefore(s1, s0);
    })();
  </script>
  <!--End of Tawk.to Script-->
</head>

<body>
  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <?php include_once("components/sidebar.php"); ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>ziigzagz</h1>
      <p>I'm <span class="typed" data-typed-items="Fullstack Developer, Freelancer"></span></p>
    </div>
  </section><!-- End Hero -->
  <main id="main">
    <?php
    include_once("components/about.php");
    // include_once("components/skills.php");
    include_once("components/resume.php");
    // include_once("components/portfolio.php");
    include_once("components/services.php");
    // include_once("components/testimonials.php");
    // include_once("components/contact.php");
    ?>
  </main><!-- End #main -->

  <?php include_once("components/footer.php"); ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php include_once("js.php"); ?>

</body>

</html>