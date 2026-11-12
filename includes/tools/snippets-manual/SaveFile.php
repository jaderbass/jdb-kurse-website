<?php
declare(strict_types=1);

class SaveFile {
  public function __construct(
    private string $content, 
    private string $header,
    private string $fileName = '',
    private string $filePath = ''
  ) {
    $this->save();
  }

  private function save() {
    $this->fileName = strtolower($this->header) . '-snippet-manual.md';
    $this->filePath = 'manuals/' . $this->fileName; 

    if($mdFile = file_put_contents($this->filePath, $this->content)) {
      return $this->getFile();
    } else {
      return false;
    }   
  }

  public function getFile() {
    return $this->filePath;
  }

  public function getFileName() {
    return $this->fileName;
  }
}