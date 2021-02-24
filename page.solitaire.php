<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title>Solitaire</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <style>
        html, body {
            margin:           0;
            padding:          0;
            background-color: white;
            color:            #222;
            font-family:      monospace;
        }

        canvas#canvas {
            display:    block;
            margin:     auto;
            margin-top: 5%;
            border:     1px solid black;
        }
        div.error-page {
            max-width:  600px;
            margin:     auto;
            margin-top: 5%;
        }

        div.error-page h1 {
            font-weight: normal;
            font-size:   4em;
        }

        div.error-page h2 {
            font-weight: normal;
        }

        div.buttons {
            max-width:  585px;
            margin:     auto;
            margin-top: 1em;
        }

        div.buttons a {
            color: inherit;
            margin-right: 1em;
        }

        .hidden {
            display: none;
        }
    </style>
</head><body>
    <canvas id="canvas" width="585" height="367">
        <div class="error-page hidden" id="error-page-no-canvas">
            <h1>:(</h1>
            <h2>Your browser doesn't seem to have canvas support.</h2>
            <p>Sorry about that. If you're on a computer, you should probably upgrade to
            <a href="https://google.com/chrome">Chrome</a> or
            <a href="https://mozilla.org/firefox">Firefox</a>. Not allowed to install software?
            Try a <a href="http://portableapps.com/apps/internet/">portable browser</a>.</p>
        </div>
    </canvas>
    <div class="buttons">
        <a href="javascript:Deal()">Deal</a>
        <a href="javascript:NextCardback()">Switch Cardback</a>
    </div>

    
    <div id="images" class="hidden">
        <img id="foundation-blank" src="/admin/assets/solitaire/images//card-top-placeholder.png"/>
        <img id="deck-blank"       src="/admin/assets/solitaire/images//deck-blank.png"/>
        <img id="deck-0"           src="/admin/assets/solitaire/images//decks/deck-0.png"/>
        <img id="deck-1"           src="/admin/assets/solitaire/images//decks/deck-1.png"/>
        <img id="deck-2"           src="/admin/assets/solitaire/images//decks/deck-2.png"/>
        <img id="deck-3"           src="/admin/assets/solitaire/images//decks/deck-3.png"/>
        <img id="deck-4"           src="/admin/assets/solitaire/images//decks/deck-4.png"/>
        <img id="deck-5"           src="/admin/assets/solitaire/images//decks/deck-5.png"/>
        <img id="deck-6"           src="/admin/assets/solitaire/images//decks/deck-6.png"/>
        <img id="deck-7"           src="/admin/assets/solitaire/images//decks/deck-7.png"/>
        <img id="deck-8"           src="/admin/assets/solitaire/images//decks/deck-8.png"/>
        <img id="deck-9"           src="/admin/assets/solitaire/images//decks/deck-9.png"/>
        <img id="deck-10"          src="/admin/assets/solitaire/images//decks/deck-10.png"/>
        <img id="deck-11"          src="/admin/assets/solitaire/images//decks/deck-11.png"/>
        <img id="card-1"           src="/admin/assets/solitaire/images//cards/1.png"/>
        <img id="card-2"           src="/admin/assets/solitaire/images//cards/2.png"/>
        <img id="card-3"           src="/admin/assets/solitaire/images//cards/3.png"/>
        <img id="card-4"           src="/admin/assets/solitaire/images//cards/4.png"/>
        <img id="card-5"           src="/admin/assets/solitaire/images//cards/5.png"/>
        <img id="card-6"           src="/admin/assets/solitaire/images//cards/6.png"/>
        <img id="card-7"           src="/admin/assets/solitaire/images//cards/7.png"/>
        <img id="card-8"           src="/admin/assets/solitaire/images//cards/8.png"/>
        <img id="card-9"           src="/admin/assets/solitaire/images//cards/9.png"/>
        <img id="card-10"          src="/admin/assets/solitaire/images//cards/10.png"/>
        <img id="card-11"          src="/admin/assets/solitaire/images//cards/11.png"/>
        <img id="card-12"          src="/admin/assets/solitaire/images//cards/12.png"/>
        <img id="card-13"          src="/admin/assets/solitaire/images//cards/13.png"/>
        <img id="card-14"          src="/admin/assets/solitaire/images//cards/14.png"/>
        <img id="card-15"          src="/admin/assets/solitaire/images//cards/15.png"/>
        <img id="card-16"          src="/admin/assets/solitaire/images//cards/16.png"/>
        <img id="card-17"          src="/admin/assets/solitaire/images//cards/17.png"/>
        <img id="card-18"          src="/admin/assets/solitaire/images//cards/18.png"/>
        <img id="card-19"          src="/admin/assets/solitaire/images//cards/19.png"/>
        <img id="card-20"          src="/admin/assets/solitaire/images//cards/20.png"/>
        <img id="card-21"          src="/admin/assets/solitaire/images//cards/21.png"/>
        <img id="card-22"          src="/admin/assets/solitaire/images//cards/22.png"/>
        <img id="card-23"          src="/admin/assets/solitaire/images//cards/23.png"/>
        <img id="card-24"          src="/admin/assets/solitaire/images//cards/24.png"/>
        <img id="card-25"          src="/admin/assets/solitaire/images//cards/25.png"/>
        <img id="card-26"          src="/admin/assets/solitaire/images//cards/26.png"/>
        <img id="card-27"          src="/admin/assets/solitaire/images//cards/27.png"/>
        <img id="card-28"          src="/admin/assets/solitaire/images//cards/28.png"/>
        <img id="card-29"          src="/admin/assets/solitaire/images//cards/29.png"/>
        <img id="card-30"          src="/admin/assets/solitaire/images//cards/30.png"/>
        <img id="card-31"          src="/admin/assets/solitaire/images//cards/31.png"/>
        <img id="card-32"          src="/admin/assets/solitaire/images//cards/32.png"/>
        <img id="card-33"          src="/admin/assets/solitaire/images//cards/33.png"/>
        <img id="card-34"          src="/admin/assets/solitaire/images//cards/34.png"/>
        <img id="card-35"          src="/admin/assets/solitaire/images//cards/35.png"/>
        <img id="card-36"          src="/admin/assets/solitaire/images//cards/36.png"/>
        <img id="card-37"          src="/admin/assets/solitaire/images//cards/37.png"/>
        <img id="card-38"          src="/admin/assets/solitaire/images//cards/38.png"/>
        <img id="card-39"          src="/admin/assets/solitaire/images//cards/39.png"/>
        <img id="card-40"          src="/admin/assets/solitaire/images//cards/40.png"/>
        <img id="card-41"          src="/admin/assets/solitaire/images//cards/41.png"/>
        <img id="card-42"          src="/admin/assets/solitaire/images//cards/42.png"/>
        <img id="card-43"          src="/admin/assets/solitaire/images//cards/43.png"/>
        <img id="card-44"          src="/admin/assets/solitaire/images//cards/44.png"/>
        <img id="card-45"          src="/admin/assets/solitaire/images//cards/45.png"/>
        <img id="card-46"          src="/admin/assets/solitaire/images//cards/46.png"/>
        <img id="card-47"          src="/admin/assets/solitaire/images//cards/47.png"/>
        <img id="card-48"          src="/admin/assets/solitaire/images//cards/48.png"/>
        <img id="card-49"          src="/admin/assets/solitaire/images//cards/49.png"/>
        <img id="card-50"          src="/admin/assets/solitaire/images//cards/50.png"/>
        <img id="card-51"          src="/admin/assets/solitaire/images//cards/51.png"/>
        <img id="card-52"          src="/admin/assets/solitaire/images//cards/52.png"/>
    </div>
</body></html>