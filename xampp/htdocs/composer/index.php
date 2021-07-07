<?php
// include composer autoload
require 'vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerstatic as Image;



// to finally create image instances
$image = Image::make('img/download (5).jpg')->resize(275, 183);
echo "<img src='img/download (5).jpg' height='1000px' weight='1000px'>";
echo $image;
?>
