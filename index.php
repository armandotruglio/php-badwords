<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container py-5">
        <form action="./badWords.php" method="GET">
            <div class="mb-3">
                <label for="TextArea" class="form-label">Paragrafo: </label>
                <textarea class="form-control" id="TextArea" name="paragraph" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="bad-word" class="form-label">Parola da censurare: </label>
                <input type="text" class="form-control" id="bad-word" name="badWord" placeholder="***">
            </div>
            <button type="submit" class="btn btn-primary btn-xl">SEND</button>
            <button type="reset" class="btn btn-warning btn-xl">RESET</button>
        </form>
    </div>
</body>

</html>