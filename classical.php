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
</head>

<body onload="myLoadHeader()">
<div id='myHeader'></div>
<main>
    <section class="sekcja1">
        <br>
        Muzyka klasyczna:
        <br>
        <br>
        <br>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Kompozytor</th>
                <th scope="col">Nazwa utworu</th>
                <th scope="col">Wykonawca</th>
                <th scope="col">Plik</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Chopin</td>
                <td>Ballad Op.32</td>
                <td>Chopin</td>
                <td>
                    <midi-player
                            src="http://jacekdalmer.great-site.net/z13/media/Ballad.mid"
                            sound-font visualizer="#myVisualizer1">
                    </midi-player>
                    <midi-visualizer type="piano-roll" id="myVisualizer1"></midi-visualizer>
                </td>
            </tr>
            <tr>
                <td>Chopin</td>
                <td>Ballad Op.32</td>
                <td>Chopin</td>
                <td><audio
                            controls
                            src="http://jacekdalmer.great-site.net/z13/media/Ballad.mp3">
                    </audio></td>
            </tr>
            <tr>
                <td>Chopin</td>
                <td>Ballad Op.32</td>
                <td>My version</td>
                <td>
                    <midi-player
                            src="http://jacekdalmer.great-site.net/z13/media/MyBallad_Violin.mid"
                            sound-font visualizer="#myVisualizer4">
                    </midi-player>
                    <midi-visualizer type="piano-roll" id="myVisualizer4"></midi-visualizer>
                </td>
            </tr>
            <tr>
                <td>Chopin</td>
                <td>Ballad Op.32</td>
                <td>My version</td>
                <td><audio
                            controls
                            src="http://jacekdalmer.great-site.net/z13/media/MyBallad_Violin.mp3">
                    </audio></td>
            </tr>
            <tr>
                <td>Beethoven</td>
                <td>Andante</td>
                <td>Beethoven</td>
                <td>
                    <midi-player
                            src="http://jacekdalmer.great-site.net/z13/media/Andante.mid"
                            sound-font visualizer="#myVisualizer2">
                    </midi-player>
                    <midi-visualizer type="piano-roll" id="myVisualizer2"></midi-visualizer>
                </td>
            </tr>
            <tr>
                <td>Beethoven</td>
                <td>Andante</td>
                <td>Beethoven</td>
                <td><audio
                            controls
                            src="http://jacekdalmer.great-site.net/z13/media/Andante.mp3">
                    </audio></td>
            </tr>
            <tr>
                <td>Beethoven</td>
                <td>Andante</td>
                <td>My version</td>
                <td>
                    <midi-player
                            src="http://jacekdalmer.great-site.net/z13/media/Andante_Guitar.mid"
                            sound-font visualizer="#myVisualizer3">
                    </midi-player>
                    <midi-visualizer type="piano-roll" id="myVisualizer3"></midi-visualizer>
                </td>
            </tr>
            <tr>
                <td>Beethoven</td>
                <td>Andante</td>
                <td>My version</td>
                <td><audio
                            controls
                            src="http://jacekdalmer.great-site.net/z13/media/Andante_Guitar.mp3">
                    </audio></td>
            </tr>
            </tbody>
        </table>
    </section>
</main>
</body>
</html>