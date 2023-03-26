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

    <link rel="stylesheet" href="piano.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--    <script src="piano.js" defer></script>-->
</head>

<body onload="myLoadHeader()">
<div id='myHeader'></div>
<main>
    <section class="sekcja1">
        <br>
        <br>
        <ul id="keyboard">
            <li note="C" class="white">A</li>
            <li note="C#" class="black">W</li>
            <li note="D" class="white offset">S</li>
            <li note="D#" class="black">E</li>
            <li note="E" class="white offset">D</li>
            <li note="F" class="white">F</li>
            <li note="F#" class="black">T</li>
            <li note="G" class="white offset">G</li>
            <li note="G#" class="black">Y</li>
            <li note="A" class="white offset">H</li>
            <li note="A#" class="black">U</li>
            <li note="B" class="white offset">J</li>
            <li note="C2" class="white">K</li>
            <li note="C#2" class="black">O</li>
            <li note="D2" class="white offset">L</li>
            <li note="D#2" class="black">P</li>
            <li note="E2" class="white offset">;</li>
        </ul>
        <br>
        <button class="btn btn-primary btn-lg" type="submit" onclick="s1Function()">Sekwencja 1</button>
        <br>
        <br>
        <button class="btn btn-primary btn-lg" type="submit" onclick="s1loop()">Sekwencja 1 START/STOP PĘTLA</button>
        <br>
        <br>
        <button class="btn btn-primary btn-lg" type="submit" onclick="s2Function()">Sekwencja 2</button>
        <br>
        <br>
        <button class="btn btn-primary btn-lg" type="submit" onclick="s2loop()">Sekwencja 2 START/STOP PĘTLA</button>
        <br>
        <br>
        <button class="btn btn-primary btn-lg" type="submit" onclick="s3Function()">Sekwencja 3</button>
        <br>
        <br>
        <button class="btn btn-primary btn-lg" type="submit" onclick="s3loop()">Sekwencja 3 START/STOP PĘTLA</button>
    </section>
    <script>
        const audioContext = new (window.AudioContext || window.webkitAudioContext)();

        const getElementByNote = (note) =>
            note && document.querySelector(`[note="${note}"]`);

        const keys = {
            A: { element: getElementByNote("C"), note: "C", octaveOffset: 0 },
            W: { element: getElementByNote("C#"), note: "C#", octaveOffset: 0 },
            S: { element: getElementByNote("D"), note: "D", octaveOffset: 0 },
            E: { element: getElementByNote("D#"), note: "D#", octaveOffset: 0 },
            D: { element: getElementByNote("E"), note: "E", octaveOffset: 0 },
            F: { element: getElementByNote("F"), note: "F", octaveOffset: 0 },
            T: { element: getElementByNote("F#"), note: "F#", octaveOffset: 0 },
            G: { element: getElementByNote("G"), note: "G", octaveOffset: 0 },
            Y: { element: getElementByNote("G#"), note: "G#", octaveOffset: 0 },
            H: { element: getElementByNote("A"), note: "A", octaveOffset: 1 },
            U: { element: getElementByNote("A#"), note: "A#", octaveOffset: 1 },
            J: { element: getElementByNote("B"), note: "B", octaveOffset: 1 },
            K: { element: getElementByNote("C2"), note: "C", octaveOffset: 1 },
            O: { element: getElementByNote("C#2"), note: "C#", octaveOffset: 1 },
            L: { element: getElementByNote("D2"), note: "D", octaveOffset: 1 },
            P: { element: getElementByNote("D#2"), note: "D#", octaveOffset: 1 },
            semicolon: { element: getElementByNote("E2"), note: "E", octaveOffset: 1 }
        };

        const getHz = (note = "A", octave = 4) => {
            const A4 = 440;
            let N = 0;
            switch (note) {
                default:
                case "A":
                    N = 0;
                    break;
                case "A#":
                case "Bb":
                    N = 1;
                    break;
                case "B":
                    N = 2;
                    break;
                case "C":
                    N = 3;
                    break;
                case "C#":
                case "Db":
                    N = 4;
                    break;
                case "D":
                    N = 5;
                    break;
                case "D#":
                case "Eb":
                    N = 6;
                    break;
                case "E":
                    N = 7;
                    break;
                case "F":
                    N = 8;
                    break;
                case "F#":
                case "Gb":
                    N = 9;
                    break;
                case "G":
                    N = 10;
                    break;
                case "G#":
                case "Ab":
                    N = 11;
                    break;
            }
            N += 12 * (octave - 4);
            return A4 * Math.pow(2, N / 12);
        };

        const pressedNotes = new Map();
        let clickedKey = "";

        const playKey = (key) => {
            if (!keys[key]) {
                return;
            }

            const osc = audioContext.createOscillator();
            const noteGainNode = audioContext.createGain();
            noteGainNode.connect(audioContext.destination);

            const zeroGain = 0.00001;
            const maxGain = 0.5;
            const sustainedGain = 0.001;

            noteGainNode.gain.value = zeroGain;

            const setAttack = () =>
                noteGainNode.gain.exponentialRampToValueAtTime(
                    maxGain,
                    audioContext.currentTime + 0.01
                );
            const setDecay = () =>
                noteGainNode.gain.exponentialRampToValueAtTime(
                    sustainedGain,
                    audioContext.currentTime + 1
                );
            const setRelease = () =>
                noteGainNode.gain.exponentialRampToValueAtTime(
                    zeroGain,
                    audioContext.currentTime + 2
                );

            setAttack();
            setDecay();
            setRelease();

            osc.connect(noteGainNode);
            osc.type = "triangle";

            const freq = getHz(keys[key].note, (keys[key].octaveOffset || 0) + 3);

            if (Number.isFinite(freq)) {
                osc.frequency.value = freq;
            }

            keys[key].element.classList.add("pressed");
            pressedNotes.set(key, osc);
            pressedNotes.get(key).start();
        };

        const stopKey = (key) => {
            if (!keys[key]) {
                return;
            }

            keys[key].element.classList.remove("pressed");
            const osc = pressedNotes.get(key);

            if (osc) {
                setTimeout(() => {
                    osc.stop();
                }, 2000);

                pressedNotes.delete(key);
            }
        };

        document.addEventListener("keydown", (e) => {
            const eventKey = e.key.toUpperCase();
            const key = eventKey === ";" ? "semicolon" : eventKey;

            if (!key || pressedNotes.get(key)) {
                return;
            }
            playKey(key);
        });

        document.addEventListener("keyup", (e) => {
            const eventKey = e.key.toUpperCase();
            const key = eventKey === ";" ? "semicolon" : eventKey;

            if (!key) {
                return;
            }
            stopKey(key);
        });

        for (const [key, { element }] of Object.entries(keys)) {
            element.addEventListener("mousedown", () => {
                playKey(key);
                clickedKey = key;
            });
        }

        document.addEventListener("mouseup", () => {
            stopKey(clickedKey);
        });
        const delay = ms => new Promise(res => setTimeout(res, ms));

        let loop1 = false;
        let loop2 = false;
        let loop3 = false;



        async function s1Function() {
            playKey("A");
            stopKey("A");
            await delay(300);
            playKey("C");
            stopKey("C");
            await delay(300);
            playKey("D");
            stopKey("D");
            await delay(300);
            playKey("E");
            stopKey("E");
            await delay(300);
        }

        async function s2Function() {
            playKey("E");
            stopKey("E");
            await delay(300);
            playKey("D");
            stopKey("D");
            await delay(300);
            playKey("A");
            stopKey("A");
            await delay(300);
            playKey("C");
            stopKey("C");
            await delay(300);
        }

        async function s3Function() {
            playKey("D");
            stopKey("D");
            await delay(300);
            playKey("E");
            stopKey("E");
            await delay(300);
            playKey("F");
            stopKey("F");
            await delay(300);
            playKey("A");
            stopKey("A");
            await delay(300);
        }

        async function s1loop() {
            loop1 = !loop1;
            while (loop1) {
                await s1Function()
            }
        }
        async function s2loop() {
            loop2 = !loop2;
            while (loop2) {
                await s2Function()
            }
        }
        async function s3loop() {
            loop3 = !loop3;
            while (loop3) {
                await s3Function()
            }
        }
    </script>
</main>
</body>
</html>