<?php

$paragraph = $_GET["paragraph"];

$badWord = $_GET["badWord"];

$censuredParagraph = str_ireplace($badWord,"***",$paragraph);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Word</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="mb-5">PARAGRAFO</h1>
                <p class="mb-5"><?php echo $paragraph ?></p>
            </div>
            <div class="col-12">
                <span>Il paragfrago è lungo <?php echo strlen($paragraph)?> caratteri</span>
            </div>
        </div>

        <div class="row">
            <div class="col-12 text-center">
                <h1>PARAGRAFO CENSURATO</h1>
                <p class="mb-5"><?php echo $censuredParagraph ?></p>
            </div>
            <div class="col-12">
                <span>Il paragfrago è lungo <?php echo strlen($censuredParagraph)?> caratteri</span>
            </div>
        </div>
    </div>
</body>

</html>