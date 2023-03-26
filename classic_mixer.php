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
            const app = new Vue({
                el: '#app',
                data : function(){
                    return {
                        is_loaded:false,
                        newconfig:{},
                        config:
                            {
                                "tracks": [
                                    {
                                        "title": "Klasyk",
                                        "url": "http://jacekdalmer.great-site.net/z13/media/Andante.mp3",
                                        "pan": -30,
                                        "gain": 0.5,
                                        "muted": false,
                                        "hidden": false
                                    },
                                    {
                                        "title": "Rock",
                                        "url": "http://jacekdalmer.great-site.net/z13/media/come_as_you_are.mp3",
                                        "pan": 81,
                                        "gain": 0.8,
                                        "muted": false,
                                        "hidden": false
                                    },
                                    {
                                        "title": "Moje dźwięki",
                                        "url": "http://jacekdalmer.great-site.net/z13/media/audacity.mp3",
                                        "pan": -49,
                                        "gain": 0.85,
                                        "muted": false,
                                        "hidden": false
                                    },
                                ],
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