<?php declare(strict_types=1);  /* Ta linia musi byc pierwsza */ ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dalmer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
    <style type="text/css" class="init"></style>
    <link rel="stylesheet" type="text/css" href="twoj_css.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"></script>
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" language="javascript"
            src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript"
            src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript" src="twoj_js.js"></script>
    <script src="https://cdn.jsdelivr.net/combine/npm/tone@14.7.58,npm/@magenta/music@1.23.1/es6/core.js,npm/focus-visible@5,npm/html-midi-player@1.5.0"></script>
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/vue-audio-mixer/dist/vue-audio-mixer.min.css">
</head>

<body onload="myLoadHeader()">
<div id='myHeader'></div>
<main>
    <section class="sekcja1">
        <br>
        <br>
        <form method="POST" class="needs-validation" novalidate action="test_mixer.php"  enctype="multipart/form-data">
                <div class="col-12">
                    <label for="avatar" class="form-label">Pierwszy plik mp3:  </label>
                    <input type="file" name="fileToUpload1" id="fileToUpload1">
                </div>
            <div class="col-12">
                <label for="avatar" class="form-label">Drugi plik mp3:  </label>
                <input type="file" name="fileToUpload2" id="fileToUpload2">
            </div>
            <div class="col-12">
                <label for="avatar" class="form-label">Trzeci plik mp3:  </label>
                <input type="file" name="fileToUpload3" id="fileToUpload3">
            </div>
            <div class="col-12">
                <label for="avatar" class="form-label">Czwarty plik mp3:  </label>
                <input type="file" name="fileToUpload4" id="fileToUpload4">
            </div>

                <hr class="my-4">
                <button class="btn btn-primary btn-lg" type="submit">Utwórz mixer</button>
        </form>

    </section>
</main>
</body>
</html>