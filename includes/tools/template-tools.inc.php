<main id="pageMain">
  <div id="hero" class="text-white">
    <div class="container col-xxl-8 px-4 pt-5">
      <div class="row flex-lg-row-reverse justify-content-center align-items-center g-5 py-5">
        <div class="col-6 col-sm-4 col-lg-3">
          <?php if (isset($pageLogo)) : ?>
            <img src="<?= $pageLogo; ?>" class="page-logo d-block mx-auto img-fluid" alt="<?= $pageTitle; ?> Logo" loading="lazy">
          <?php endif; ?>
        </div>
        <div class="col-lg-9 text-center text-lg-start">
          <h1 class="display-5 fw-bold lh-1 mb-3">
            <?= $pageTitle; ?>
          </h1>
          <p class="lead"><?= isset($pageSlogan) ? $pageSlogan : ''; ?></p>
        </div>
      </div>
    </div>
  </div>

  <?php include_once 'includes/tools/snippets-manual.inc.php'; ?>
  <?php include_once 'includes/tools/rem2px.inc.php'; ?>
  <?php include_once 'includes/tools/aspect-ratio.inc.php'; ?>
  
  <script src="js/tools-rempx.js"></script>
</main>