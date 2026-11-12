<?php
declare(strict_types=1);

class MakeFileContent {
  public function __construct(
    private array $processedArray,
    private string $fileName,
    private array $fileContentArray = array(),
    private string $rowDelimiter = "\n",
    private string $fileContent = ''
    ) {
      //
  }

  public function getFileHeader() {
    $givenString = $this->fileName;
    $firstSection = strstr($givenString, '.', true);
    $header = strstr($firstSection, '-');
    return strtoupper(substr($header, 1));
  }

  public function getMdFileContent() {
    $this->fileContent .= "# Snippet für {$this->getFileHeader()}{$this->rowDelimiter}{$this->rowDelimiter}";
    $this->fileContent .= "|Abkürzung|unterstützte Dateitypen|Kurzbeschreibung|Beschreibung|{$this->rowDelimiter}";
    $this->fileContent .= "|---------|-----------------------|----------------|------------|{$this->rowDelimiter}";
    foreach ($this->processedArray as $shortDesc => $contentArray) {
      $this->fileContent .= "|`{$contentArray['prefix']}`|`{$contentArray['scope']}`|{$shortDesc}|{$contentArray['desc']}|{$this->rowDelimiter}";
    }
    
    return $this->fileContent;
  }
}