<div class="container">
  <h2 id="rempx">Umrechner <span id="units">px / rem</span></h2>

  <div class="row align-items-end mb-5">
    <div class="col-md-3">
      <label for="jdbStandard">Standard-Schriftgröße:</label>
      <div class="input-group">
        <input class="form-control" type="number" name="standard" id="jdbStandard" value="16">
        <span class="input-group-text">px</span>
      </div>
    </div>
    <div class="col-md-3">
      <label for="val">gewünschte Größe:</label>
      <div class="input-group">
        <input class="form-control" type="number" name="val" id="val">
        <span class="input-group-text">px</span>
      </div>
    </div>
    <div class="col-md-2 text-center">
      <button id="btnChangeUnit" class="btn btn-primary mt-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5m14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5" />
        </svg>
      </button>
    </div>
    <div class="col-md-3 fw-bold">
      <div class="m-0">
        Ergebnis:<br>
        <div class="input-group">
          <span id="res" class="form-control">&nbsp;</span>
          <span class="input-group-text">rem</span>
        </div>
      </div>
    </div>
  </div>
</div>