<?php

require __DIR__ . '/vendor/autoload.php';

use Tracy\Debugger as Debugger;
use Faker\Factory as Faker;

Debugger::enable(Debugger::DEVELOPMENT);
$faker = Faker::create();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP APP DEV</title>
        <meta name="Description" content=""/>
        <meta name="Keywords" content=""/>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="fadilxcoder" />
        <meta name="copyright" content="" />
        <meta name="robots" content="index,follow"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
        <link rel="stylesheet" href="./assets/style.css">
    </head>
    <body>
        <div class="wrapper">
			<p><?= $faker->text ?></p>
        </div>
		<script src="./dist/script.js?v=<?php echo $faker->numberBetween(10, 9999);?>"></script>
    </body>
</html>