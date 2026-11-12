
<section class="container my-5" aria-labelledby="aspectRatioHeading">
  <h2 id="aspectRatioHeading">Seitenverhältnis-Rechner</h2>
  <p>
    Berechne das Seitenverhältnis aus Breite und Höhe oder
    ermittle eine fehlende Abmessung anhand eines Verhältnisses.
  </p>

  <div class="row g-3 mb-4">
    <div class="col-md-3">
      <label for="arWidth" class="form-label">Breite:</label>
      <div class="input-group">
        <input type="number" class="form-control" id="arWidth" min="1" step="1" placeholder="Breite">
        <span class="input-group-text">px</span>
      </div>
    </div>

    <div class="col-md-3">
      <label for="arHeight" class="form-label">Höhe:</label>
      <div class="input-group">
        <input type="number" class="form-control" id="arHeight" min="1" step="1" placeholder="Höhe">
        <span class="input-group-text">px</span>
      </div>
    </div>

    <div class="col-md-3">
      <label for="arRatioWidth" class="form-label">
        Seitenverhältnis:
      </label>
      <div class="input-group">
        <input type="number" class="form-control" id="arRatioWidth" min="1" step="0.001" placeholder="16" aria-label="Verhältnis Breite">
        <span class="input-group-text">:</span>
        <input type="number" class="form-control" id="arRatioHeight" min="1" step="0.001" placeholder="9" aria-label="Verhältnis Höhe">
      </div>
    </div>

    <div class="col-md-3 d-flex flex-lg-column gap-3 gap-md-2 align-items-end align-items-lg-start">
      <button type="button" class="btn btn-outline-secondary" id="arSwap">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5m14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5" />
        </svg>
      </button>
      <div class="order-lg-first">Verhältnis tauschen</div>
    </div>
  </div>

  <div class="mb-4">
  <label class="form-label">Häufige Seitenverhältnisse:</label>
  <div class="d-flex flex-wrap gap-2" id="arPresets">
    <button type="button" class="btn btn-outline-primary"
            data-ratio="16:9">16:9</button>
    <button type="button" class="btn btn-outline-primary"
            data-ratio="4:3">4:3</button>
    <button type="button" class="btn btn-outline-primary"
            data-ratio="3:2">3:2</button>
    <button type="button" class="btn btn-outline-primary"
            data-ratio="1:1">1:1</button>
    <button type="button" class="btn btn-outline-primary"
            data-ratio="21:9">21:9</button>
  </div>
</div>

  <div class="d-flex flex-wrap gap-2">
    <button type="button" class="btn btn-primary" id="arCalculate">
      Verhältnis berechnen
    </button>
    <button type="button" class="btn btn-outline-secondary" id="arReset">
      Zurücksetzen
    </button>
  </div>
</section>

<hr>

<section class="container my-5" aria-labelledby="scaleHeading">
  <h2 id="scaleHeading">Proportionales Skalieren</h2>
  <p>
    Gib die ursprünglichen Abmessungen und eine gewünschte
    Zielabmessung ein. Der fehlende Wert wird automatisch berechnet.
  </p>

  <div class="row g-3 mb-4">
    <div class="col-md-3">
      <label for="scaleOriginalWidth" class="form-label">
        Originalbreite:
      </label>
      <div class="input-group">
        <input type="number" class="form-control"id="scaleOriginalWidth" min="1" step="1"placeholder="Breite">
        <span class="input-group-text">px</span>
      </div>
    </div>

    <div class="col-md-3">
      <label for="scaleOriginalHeight" class="form-label">
        Originalhöhe:
      </label>
      <div class="input-group">
        <input type="number" class="form-control"id="scaleOriginalHeight" min="1" step="1"placeholder="Höhe">
        <span class="input-group-text">px</span>
      </div>
    </div>

    <div class="col-md-3">
      <label for="scaleTargetWidth" class="form-label">
        Zielbreite:
      </label>
      <div class="input-group">
        <input type="number" class="form-control" id="scaleTargetWidth" min="1" step="1" placeholder="Breite">
        <span class="input-group-text">px</span>
      </div>
    </div>

    <div class="col-md-3">
      <label for="scaleTargetHeight" class="form-label">
        Zielhöhe:
      </label>
      <div class="input-group">
        <input type="number" class="form-control" id="scaleTargetHeight" min="1" step="1" placeholder="Höhe">
        <span class="input-group-text">px</span>
      </div>
    </div>
  </div>

  <button type="button" class="btn btn-outline-secondary" id="scaleReset">
    Zurücksetzen
  </button>
</section>

<script src="js/aspect-ratio.js" defer></script>
