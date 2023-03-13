<?php

require __DIR__ . '/vendor/autoload.php';
use Carbon\Carbon;

printf("This is a very basic output.<br><br>");

printf("Right now in New York is %s.<br>", Carbon::now('US/Eastern')->format('Y-m-d g:i:s A'));

printf("Tomorrow in New York will be %s.<br>", Carbon::tomorrow('US/Eastern')->format('Y-m-d'));

printf("Right now in Paris is %s.<br>", Carbon::now('Europe/Paris'));
