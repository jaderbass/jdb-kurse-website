"use strict";

'use strict';

/**
 * Prüft, ob ein Wert eine positive, sichere Ganzzahl ist.
 *
 * @param {string|number} value - Zu prüfender Wert.
 * @returns {boolean}
 */
function isPositiveNumber(value) {
  if (value === '') return false;

  const number = Number(value);

  return Number.isFinite(number) && number > 0;
}

/**
 * Ermittelt den größten gemeinsamen Teiler.
 *
 * @param {number} a - Erste Zahl.
 * @param {number} b - Zweite Zahl.
 * @returns {number}
 */
function gcd(a, b) {
  while (b !== 0) {
    [a, b] = [b, a % b];
  }

  return a;
}

/**
 * Initialisiert den Seitenverhältnis-Rechner.
 *
 * @returns {void}
 */
function initAspectRatioCalculator() {
  const width = document.getElementById('arWidth');
  const height = document.getElementById('arHeight');
  const ratioWidth = document.getElementById('arRatioWidth');
  const ratioHeight = document.getElementById('arRatioHeight');

  const swap = document.getElementById('arSwap');
  const calculate = document.getElementById('arCalculate');
  const reset = document.getElementById('arReset');
  const presets = document.querySelectorAll('#arPresets button');

  /**
   * Markiert das aktuell ausgewählte Seitenverhältnis.
   *
   * @param {string} ratio - Ausgewähltes Verhältnis.
   * @returns {void}
   */
  function selectPreset(ratio = '') {
    presets.forEach((button) => {
      const active = button.dataset.ratio === ratio;

      button.classList.toggle('btn-primary', active);
      button.classList.toggle('btn-outline-primary', !active);
      button.setAttribute('aria-pressed', String(active));
    });
  }

  // Zuletzt manuell geänderte Dimension.
  let lastDimension = 'width';

  /**
   * Berechnet die jeweils andere Abmessung.
   *
   * @returns {void}
   */
  function calculateDimension() {
    if (
      !isPositiveNumber(ratioWidth.value) ||
      !isPositiveNumber(ratioHeight.value)
    ) {
      return;
    }

    const rw = Number(ratioWidth.value);
    const rh = Number(ratioHeight.value);

    if (lastDimension === 'width') {
      if (!isPositiveNumber(width.value)) return;

      const result = Math.round(Number(width.value) * rh / rw);
      height.value = Number.isSafeInteger(result) && result > 0
        ? result
        : '';
    } else {
      if (!isPositiveNumber(height.value)) return;

      const result = Math.round(Number(height.value) * rw / rh);
      width.value = Number.isSafeInteger(result) && result > 0
        ? result
        : '';
    }
  }

  /**
   * Übernimmt ein Seitenverhältnis und berechnet die Abmessung.
   *
   * @param {number|string} rw - Verhältnisbreite.
   * @param {number|string} rh - Verhältnishöhe.
   * @returns {void}
   */
  function setRatio(rw, rh) {
    ratioWidth.value = rw;
    ratioHeight.value = rh;

    // Falls nur eine Dimension vorhanden ist, diese verwenden.
    if (isPositiveNumber(width.value) && !isPositiveNumber(height.value)) {
      lastDimension = 'width';
    } else if (
      isPositiveNumber(height.value) &&
      !isPositiveNumber(width.value)
    ) {
      lastDimension = 'height';
    }

    calculateDimension();
  }

  // Breite manuell ändern.
  width.addEventListener('input', () => {
    lastDimension = 'width';
    if (width.value === '' && isPositiveNumber(ratioWidth.value) &&
        isPositiveNumber(ratioHeight.value)) {
      height.value = '';
      return;
    }
    calculateDimension();
  });

  // Höhe manuell ändern.
  height.addEventListener('input', () => {
    lastDimension = 'height';
    if (height.value === '' && isPositiveNumber(ratioWidth.value) &&
        isPositiveNumber(ratioHeight.value)) {
      width.value = '';
      return;
    }
    calculateDimension();
  });

  // Manuelle Änderung des Seitenverhältnisses.
  [ratioWidth, ratioHeight].forEach((input) => {
    input.addEventListener('input', () => {
      selectPreset();
      calculateDimension();
    });
  });

  // Vorgegebenes Seitenverhältnis auswählen.
  presets.forEach((button) => {
    button.addEventListener('click', () => {
      const [rw, rh] = button.dataset.ratio.split(':').map(Number);

      setRatio(rw, rh);
      selectPreset(button.dataset.ratio);
    });
  });

  // Seitenverhältnis umkehren.
  swap.addEventListener('click', () => {
    if (
      !isPositiveNumber(ratioWidth.value) ||
      !isPositiveNumber(ratioHeight.value)
    ) {
      return;
    }

    const rw = ratioWidth.value;
    const rh = ratioHeight.value;

    selectPreset();
    setRatio(rh, rw);
  });

  // Verhältnis aus vorhandener Breite und Höhe bestimmen.
  calculate.addEventListener('click', () => {
    if (
      !isPositiveNumber(width.value) ||
      !isPositiveNumber(height.value)
    ) {
      return;
    }

    const w = Number(width.value);
    const h = Number(height.value);
    const actualRatio = w / h;

    const knownRatios = [
      [16, 9],
      [4, 3],
      [3, 2],
      [1, 1],
      [21, 9],
    ];

    // Zulässige Abweichung aufgrund der Pixelrundung.
    const tolerance = 0.001;

    const match = knownRatios.find(([rw, rh]) => {
      return Math.abs(actualRatio - rw / rh) < tolerance;
    });

    if (match) {
      ratioWidth.value = match[0];
      ratioHeight.value = match[1];

      selectPreset(`${match[0]}:${match[1]}`);
      return;
    }

    // Unbekanntes Seitenverhältnis auf x.xxx : 1 normalisieren.
    ratioWidth.value = Number(actualRatio.toFixed(3));
    ratioHeight.value = 1;

    selectPreset();
  });

  // Alle Werte zurücksetzen.
  reset.addEventListener('click', () => {
    width.value = '';
    height.value = '';
    ratioWidth.value = '';
    ratioHeight.value = '';
    selectPreset();

    lastDimension = 'width';
    width.focus();
  });
}

/**
 * Initialisiert den Rechner für proportionales Skalieren.
 *
 * @returns {void}
 */
function initScaleCalculator() {
  const originalWidth = document.getElementById('scaleOriginalWidth');
  const originalHeight = document.getElementById('scaleOriginalHeight');
  const targetWidth = document.getElementById('scaleTargetWidth');
  const targetHeight = document.getElementById('scaleTargetHeight');
  const reset = document.getElementById('scaleReset');

  // Zuletzt manuell geänderte Zielabmessung.
  let lastTarget = null;

  /**
   * Berechnet die fehlende Zielabmessung.
   *
   * @returns {void}
   */
  function calculateScale() {
    if (
      !isPositiveNumber(originalWidth.value) ||
      !isPositiveNumber(originalHeight.value) ||
      !lastTarget
    ) {
      return;
    }

    const ow = Number(originalWidth.value);
    const oh = Number(originalHeight.value);

    if (lastTarget === 'width') {
      if (!isPositiveNumber(targetWidth.value)) {
        targetHeight.value = '';
        return;
      }

      const result = Math.round(Number(targetWidth.value) * oh / ow);
      targetHeight.value = Number.isSafeInteger(result) && result > 0
        ? result
        : '';
    } else {
      if (!isPositiveNumber(targetHeight.value)) {
        targetWidth.value = '';
        return;
      }

      const result = Math.round(Number(targetHeight.value) * ow / oh);
      targetWidth.value = Number.isSafeInteger(result) && result > 0
        ? result
        : '';
    }
  }

  // Änderungen an den Originalabmessungen.
  [originalWidth, originalHeight].forEach((input) => {
    input.addEventListener('input', calculateScale);
  });

  // Zielbreite manuell ändern.
  targetWidth.addEventListener('input', () => {
    lastTarget = 'width';
    calculateScale();
  });

  // Zielhöhe manuell ändern.
  targetHeight.addEventListener('input', () => {
    lastTarget = 'height';
    calculateScale();
  });

  // Alle Werte zurücksetzen.
  reset.addEventListener('click', () => {
    originalWidth.value = '';
    originalHeight.value = '';
    targetWidth.value = '';
    targetHeight.value = '';

    lastTarget = null;
    originalWidth.focus();
  });
}

// Beide Rechner initialisieren.
document.addEventListener('DOMContentLoaded', () => {
  initAspectRatioCalculator();
  initScaleCalculator();
});
