<?php
define("_SYSTEM_TTFONTS", "C:/Windows/Fonts/");
define("FPDF_FONTPATH", dirname(__FILE__) . "/font/");
// define("FPDF_FONTPATH", $_SERVER['DOCUMENT_ROOT'] . "/font/");
#error_log('FPDF_FONTPATH: ' . FPDF_FONTPATH . "\n", 3, "logs/php-errors.log");
#error_log('DOCUMENT_ROOT: ' . $_SERVER['DOCUMENT_ROOT'] . "\n", 3, "logs/php-errors.log");
require_once 'tfpdf.php';

class PDF extends tFPDF
{
  // Load data
  function LoadData($file)
  {
    // Read file lines
    $lines = file($file);
    $data = array();
    foreach ($lines as $line)
      $data[] = explode(';', trim($line));
    return $data;
  }

  // Simple table
  function BasicTable($header, $data)
  {
    // Header
    foreach ($header as $col)
      $this->Cell(40, 7, $col, 1);
    $this->Ln();
    // Data
    foreach ($data as $row) {
      foreach ($row as $col)
        $this->Cell(40, 6, $col, 1);
      $this->Ln();
    }
  }

  // Better table
  function ImprovedTable($header, $data)
  {
    // Column widths
    $w = array(40, 35, 40, 45);
    // Header
    for ($i = 0; $i < count($header); $i++)
      $this->Cell($w[$i], 7, $header[$i], 1, 0, 'C');
    $this->Ln();
    // Data
    foreach ($data as $row) {
      $this->Cell($w[0], 6, $row[0], 'LR');
      $this->Cell($w[1], 6, $row[1], 'LR');
      $this->Cell($w[2], 6, number_format($row[2]), 'LR', 0, 'R');
      $this->Cell($w[3], 6, number_format($row[3]), 'LR', 0, 'R');
      $this->Ln();
    }
    // Closing line
    $this->Cell(array_sum($w), 0, '', 'T');
  }

  // Colored table
  function FancyTable($header, $data)
  {
    // Colors, line width and bold font
    $this->SetFillColor(255, 0, 0);
    $this->SetTextColor(255);
    $this->SetDrawColor(128, 0, 0);
    $this->SetLineWidth(.3);
    $this->SetFont('', '');
    // Header
    $w = array(30, 40, 75, 130);
    for ($i = 0; $i < count($header); $i++)
      $this->Cell($w[$i], 7, $header[$i], 1, 0, 'C', true);
    $this->Ln();
    // Color and font restoration
    $this->SetFillColor(224, 235, 255);
    $this->SetTextColor(0);
    $this->SetFont('');
    // Data
    $fill = 0;
    foreach ($data as $shortDesc => $row) {
      $this->Multicell($w[0], 10, $row['prefix'], 'LRB', 0, 'L', $fill);
      $this->SetXY($this->GetX() + 30, $this->GetY() - 10); // Zurücksetzen auf den Start der Zeile, um daneben zu schreiben
      if (str_ends_with($row['scope'], 'typescriptreact'))
        $this->Multicell($w[1], 10, 'js, jsx, ts, tsx', 'LRB', 0, 'L', $fill);
      else
        $this->Multicell($w[1], 10, $row['scope'], 'LRB', 0, 'L', $fill);
      $this->SetXY($this->GetX() + 30 + 40, $this->GetY() - 10);
      $this->Multicell($w[2], 10, $shortDesc, 'LRB', 0, 'L', $fill);
      $this->SetXY($this->GetX() + 30 + 40 + 75, $this->GetY() - 10);
      $this->Multicell($w[3], 10, $row['desc'], 'LRB', 0, 'L', $fill);

      $fill = !$fill;
    }
    // Closing line
    $this->Cell(array_sum($w), 0, '', 'T');
  }
}
