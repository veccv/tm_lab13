<?php declare(strict_types=1);
session_start();
session_unset();
session_start();

$target_dir = "user_music";
$target_file = $target_dir . "/" . basename($_FILES["fileToUpload1"]["name"]);
$file_name = basename($_FILES["fileToUpload1"]["name"]);
setcookie("file1", $file_name);

if (move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file)) {
    echo htmlspecialchars(basename($_FILES["fileToUpload1"]["name"])) . " uploaded.";
} else {
}

$target_file = $target_dir . "/" . basename($_FILES["fileToUpload2"]["name"]);
$file_name = basename($_FILES["fileToUpload2"]["name"]);
setcookie("file2", $file_name);

if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file)) {
    echo htmlspecialchars(basename($_FILES["fileToUpload2"]["name"])) . " uploaded.";
} else {
}

$target_file = $target_dir . "/" . basename($_FILES["fileToUpload3"]["name"]);
$file_name = basename($_FILES["fileToUpload3"]["name"]);
setcookie("file3", $file_name);

if (move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"], $target_file)) {
    echo htmlspecialchars(basename($_FILES["fileToUpload3"]["name"])) . " uploaded.";
} else {
}

$target_file = $target_dir . "/" . basename($_FILES["fileToUpload4"]["name"]);
$file_name = basename($_FILES["fileToUpload4"]["name"]);
setcookie("file4", $file_name);

if (move_uploaded_file($_FILES["fileToUpload4"]["tmp_name"], $target_file)) {
    echo htmlspecialchars(basename($_FILES["fileToUpload4"]["name"])) . " uploaded.";
} else {
}


?>
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
        <?php
        print $_SESSION["file1"];
        ?>
        <br>
        <br>
        <br>
        <div id="app">
            <div>
                <div style="text-align: center;">
                    <div style="position:relative; display: inline-block; ">
                        <vue-audio-mixer
                                :config="config"
                                size="medium"
                                theme="dark"
                                :show-pan="true"
                                :show-total-time="true"
                        />
                    </div>
                </div>
            </div>
        </div>
        <script src="https://unpkg.com/vue@2.6.14/dist/vue.js"></script>
        <script src="https://unpkg.com/vue-audio-mixer/dist/vue-audio-mixer.min.js"></script>

        <script>
            let tracks = [];

            const cookies = document.cookie.split(";");
            for (let i = 0; i < cookies.length; i++) {
                const cookie = cookies[i].trim();
                if (cookie.startsWith("file1=")) {
                    const fileName = cookie.substring("file1=".length);
                    if (fileName.length > 0) {
                        tracks.push({
                            "title": "Plik 1",
                            "url": `http://jacekdalmer.great-site.net/z13/user_music/${fileName}`,
                            "pan": -30,
                            "gain": 0.5,
                            "muted": false,
                            "hidden": false
                        })
                    }
                }
                if (cookie.startsWith("file2=")) {
                    const fileName = cookie.substring("file2=".length);
                    if (fileName.length > 0) {
                        tracks.push({
                            "title": "Plik 2",
                            "url": `http://jacekdalmer.great-site.net/z13/user_music/${fileName}`,
                            "pan": -30,
                            "gain": 0.5,
                            "muted": false,
                            "hidden": false
                        })
                    }
                }
                if (cookie.startsWith("file3=")) {
                    const fileName = cookie.substring("file3=".length);
                    if (fileName.length > 0) {
                        tracks.push({
                            "title": "Plik 3",
                            "url": `http://jacekdalmer.great-site.net/z13/user_music/${fileName}`,
                            "pan": -30,
                            "gain": 0.5,
                            "muted": false,
                            "hidden": false
                        })
                    }
                }
                if (cookie.startsWith("file4=")) {
                    const fileName = cookie.substring("file4=".length);
                    if (fileName.length > 0) {
                        tracks.push({
                            "title": "Plik 4",
                            "url": `http://jacekdalmer.great-site.net/z13/user_music/${fileName}`,
                            "pan": -30,
                            "gain": 0.5,
                            "muted": false,
                            "hidden": false
                        })
                    }
                }
            }
            console.log(cookies);
            console.log(tracks);

            const app = new Vue({
                el: '#app',
                data : function(){
                    return {
                        is_loaded:false,
                        newconfig:{},
                        config:
                            {
                                "tracks": tracks,
                                "master": {
                                    "pan": 0,
                                    "gain": 0.9,
                                    "muted": false
                                }
                            }


                    }
                }
            })
        </script>

    </section>
</main>
</body>
</html>