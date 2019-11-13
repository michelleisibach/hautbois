<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>hautbois Ltd.</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <br>
    <br>
    <div class="container.fluid">
        <div class="row">
            <div class="col-4"> test </div>
            <div class="col-8">
                <?php foreach ($result as $movie) { ?>
                <div class="movie">
                    <?php echo $movie->Name; ?>
                    <br>
                    <?php echo $movie->Description ?>
                    <br>
                    <br>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>