<?php

$loader = require 'vendor/autoload.php';

$thread = new \Sample\MyThread();

$thread->start() && $thread->join();
