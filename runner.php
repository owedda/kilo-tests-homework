<?php

use App\Color\RedColor;
use App\Color\WhiteColor;
use App\PlasticWindowFactory;

require_once "vendor/autoload.php";

//1.
$windowFactory = new PlasticWindowFactory();
echo $windowFactory->makeWindow();
echo $windowFactory->makeExpert();

//2.
$windowFactory = new PlasticWindowFactory(new WhiteColor());
echo $windowFactory->makeWindow();

$windowFactory = new PlasticWindowFactory(new \App\Color\BrownColor());
echo $windowFactory->makeWindow();

