<?php

require __DIR__ . '/../vendor/autoload.php';

use App\TestRunner;

(new TestRunner([
  'quick-fox.jpg',
]))->run();
