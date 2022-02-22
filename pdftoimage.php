<?php 

require_once __DIR__ . '/vendor/autoload.php';

use Org_Heigl\Ghostscript\Ghostscript;


// Create the Ghostscript-Wrapper
$gs = new Ghostscript ();

// Set the output-device
$gs->setDevice('png')
// Set the input file
   ->setInputFile('sticker.pdf')
// Set the output file that will be created in the same directory as the input
   ->setOutputFile('bismillah')
// Set the resolution to 96 pixel per inch
   ->setResolution(96)
// Set Text-antialiasing to the highest level
   ->setTextAntiAliasing(Ghostscript::ANTIALIASING_HIGH);

if (true === $gs->render()) {
    echo 'success';
} else {
    echo 'some error occured';
}