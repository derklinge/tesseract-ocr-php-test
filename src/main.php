<?php

require __DIR__ . '/../vendor/autoload.php';

use App\TestRunner;

(new TestRunner([
  'test-001.jpg',
]))->run();
