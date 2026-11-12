<?php

declare(strict_types=1);

class ReadSnippetFile {
  public function __construct() {
    //
  }

  public function getFile($file) {
    $fileContent = '';
    if (isset($file) && $file['error'] == UPLOAD_ERR_OK) {
      $tempName = $file['tmp_name']; // Temporärer Dateiname
      
      $fp = @fopen($tempName, 'r');

      if($fp) {
        while( ( $buffer = fgets( $fp ) ) !== false ) {
          if( str_starts_with( trim($buffer), '//' ) ) continue;
          else $fileContent .= $buffer;
        }
      }
  
    } else {
      $fileContent = '{"error":"Fehler beim Hochladen der Datei."}';
    }
    return json_decode($fileContent);
  }
}