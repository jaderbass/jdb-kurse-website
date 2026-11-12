<?php
$navItems = getMainNavItems();
?>
<div class="text-bg-dark py-5 mt-auto">
  <footer id="pageFooter" class="container">
    <ul class="nav justify-content-center" data-bs-theme="dark">


      <?php foreach ($navItems as $item => $url) : ?>
        <?php
        $subnav = false;
        if ($url != '/') {
          if (is_array($url)) {
            $subnav = $url;
          } else {
            $url = "?page=$url";
          }
        }
        ?>

        <li class="nav-item <?php if ($subnav) echo 'dropdown' ?>">
          <?php if ($subnav): ?>
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?= $item; ?>
            </a>
            <ul class="dropdown-menu">
              <?php foreach ($subnav as $subitem => $suburl): ?>
                <?php $url = "?page=$suburl"; ?>
                <li><a href="<?= "$url"; ?>" class="dropdown-item"><?= $subitem; ?></a></li>
              <?php endforeach; ?>
            </ul>
          <?php else: ?>
            <a href="<?= "$url"; ?>" class="nav-link link-body-emphasis">
              <?= $item; ?>
            </a>
          <?php endif; ?>
        </li>

      <?php endforeach; ?>

    </ul>
    <ul class="nav justify-content-center pb-3 mb-3" data-bs-theme="dark">
      <li class="nav-item"><a href="https://kurse.jaderbass.de/?page=impressum" class="nav-link link-body-emphasis">Impressum</a></li>
      <li class="nav-item"><a href="https://kurse.jaderbass.de/?page=datenschutz" class="nav-link link-body-emphasis">Datenschutzerklärung</a></li>
    </ul>
    <div class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
          <img src="../images/jdb-logo-square-without-text.png" alt="JAderBass web'n'more Logo">
        </a>
        <span class="mb-3 mb-md-0">&copy; <?= date('Y') ?> JAderBass web'n'more</span>
      </div>
      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3">
          <a href="https://www.linkedin.com/in/j%C3%B6rg-aderhold-523479151/">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <circle cx="4.983" cy="5.009" r="2.188"></circle>
              <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
            </svg>
          </a>
        </li>
        <li class="ms-3">
          <a href="https://www.facebook.com/jorg.aderhold">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <path d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z"></path>
            </svg>
          </a>
        </li>
        <li class="ms-3">
          <a href="https://www.instagram.com/joerg.aderhold/">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <path d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z"></path>
              <circle cx="16.806" cy="7.207" r="1.078"></circle>
              <path d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z"></path>
            </svg>
          </a>
        </li>
      </ul>
    </div>
  </footer>
</div>

<div id="word_clock" class="d-none d-lg-block"
  data-bs-toggle="tooltip" data-bs-placement="left"
  data-bs-custom-class="custom-tooltip"
  data-bs-title='Zum Ändern der "Uhrzeit-Sprache" bitte klicken!'>
  <div class="container">
    <div id="settings" class="d-none">
      <p>Anzeige der Uhrzeit in <span id="infoMsg"></span> Sprache.</p>
      <button class="btn btn-warning btn-sm mb-3" id="changeArea"></button>
    </div>
    <div id="clock"></div>
  </div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/highlight.min.js"></script>
<script src="js/word-clock.js"></script>
<script src="js/custom.js"></script>

</body>

</html>