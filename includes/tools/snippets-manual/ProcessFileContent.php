<?php

class ProcessFileContent {
  public function __construct(private object $fileContent) {
    //
  }

  public function getProcessedFile() {
    $processedContent = array();
    foreach($this->fileContent as $key => $value) {
      $processedContent[$key] = array('prefix' => $value->prefix, 'scope' => $value->scope, 'desc' => $value->description);
    }

    return $processedContent;
  }
}