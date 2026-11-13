<main id="pageMain">
  <div id="hero" class="text-white">
    <div class="container col-xxl-8 px-4 py-5">
      <div class="row flex-lg-row-reverse justify-content-center align-items-center g-5 py-5">
        <div class="col-6 col-sm-4 col-lg-3">
          <?php if (isset($pageLogo)) : ?>
            <img src="<?= $pageLogo; ?>" class="page-logo d-block mx-lg-auto img-fluid" alt="">
          <?php endif; ?>
        </div>
        <div class="col-lg-9">
          <h1 class="display-5 fw-bold lh-1 mb-3">
            <?= $pageTitle; ?>
          </h1>
          <p class="lead"><?= isset($pageSlogan) ? $pageSlogan : ''; ?></p>
        </div>
      </div>
    </div>
  </div>

  <div class="container pt-5">
    <h2>Umrechner <span id="units">px / rem</span></h2>

    <div class="row mb-5">
      <div class="col-lg-12 col-xl-3 me-lg-4 mb-3 mb-lg-4">
        <label for="jdbStandard">Standard-Schriftgröße:</label>
        <div class="input-group">
          <input class="form-control" type="number" name="standard" id="jdbStandard" value="16">
          <span class="input-group-text">px</span>
        </div>
      </div>
      <div class="col-lg-4 col-xl-3 me-lg-4">
        <label for="val">gewünschte Größe:</label>
        <div class="input-group">
          <input class="form-control" type="number" name="val" id="val">
          <span class="input-group-text">px</span>
        </div>
      </div>
      <div class="col-lg-1 me-lg-4 my-3 my-lg-4 text-center">
        <button id="btnChangeUnit" class="btn btn-primary">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5m14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5" />
          </svg>
        </button>
      </div>
      <div class="col-lg-4 col-xl-3 fw-bold me-lg-4">
        <p class="m-0">
          Ergebnis:<br>
        <div class="input-group">
          <span id="res" class="form-control">&nbsp;</span>
          <span class="input-group-text">rem</span>
        </div>
        </p>
      </div>
    </div>
  </div>
  <script src="js/rempx.js"></script>
</main>