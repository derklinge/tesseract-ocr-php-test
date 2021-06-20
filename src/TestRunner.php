<?php

namespace App;

use thiagoalessio\TesseractOCR\TesseractOCR;

final class TestRunner
{
    private $files;

    public function __construct(array $files = [])
    {
      $this->files = $files ?? [];
    }

    public function run(): void
    {
        foreach ($this->files as $file) {
            echo
                "File `${file}`:" .
                PHP_EOL .
                (new TesseractOCR("test-data/${file}"))->run() .
                PHP_EOL . PHP_EOL;
        }
    }
}