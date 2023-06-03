<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>ziiGzaGz</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <?php include_once("css.php"); ?>
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
    include_once("components/contact.php");
    ?>
  </main><!-- End #main -->

  <?php include_once("components/footer.php"); ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php include_once("js.php"); ?>

</body>

</html>