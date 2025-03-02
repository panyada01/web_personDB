<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai+Looped:wght@700&family=Prompt:wght@100;400;500&display=swap');

        * {
            font-family: 'IBM Plex Sans Thai Looped', sans-serif;
            font-family: 'Prompt', sans-serif;
        }
    </style>
    <?php
    include("headboot.php");
    ?>

</head>

<body>

    <!-- import { NewtonsCradle } from '@uiball/loaders' -->

    <NewtonsCradle size={40} speed={1.4} color="white" />
   
    <center>
        <div class="newtons-cradle">
            <div class="newtons-cradle__dot"></div>
            <div class="newtons-cradle__dot"></div>
            <div class="newtons-cradle__dot"></div>
            <div class="newtons-cradle__dot"></div>
        </div>
    </center>
   
    <style type="text/css">
        body {
            text-align: center;
            /* background: url(#); */
            background-color: #000000;
        }


        .newtons-cradle {
            --uib-size: 40px;
            --uib-speed: 1.4s;
            --uib-color: white;

            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            width: var(--uib-size);
            height: var(--uib-size);
        }

        .newtons-cradle__dot {
            position: relative;
            display: flex;
            align-items: center;
            height: 100%;
            width: 25%;
            transform-origin: center top;
        }

        .newtons-cradle__dot::after {
            content: '';
            display: block;
            width: 100%;
            height: 25%;
            border-radius: 50%;
            background-color: var(--uib-color);
        }

        .newtons-cradle__dot:first-child {
            animation: swing var(--uib-speed) linear infinite;
        }

        .newtons-cradle__dot:last-child {
            animation: swing2 var(--uib-speed) linear infinite;
        }

        @keyframes swing {
            0% {
                transform: rotate(0deg);
                animation-timing-function: ease-out;
            }

            25% {
                transform: rotate(70deg);
                animation-timing-function: ease-in;
            }

            50% {
                transform: rotate(0deg);
                animation-timing-function: linear;
            }
        }

        @keyframes swing2 {
            0% {
                transform: rotate(0deg);
                animation-timing-function: linear;
            }

            50% {
                transform: rotate(0deg);
                animation-timing-function: ease-out;
            }

            75% {
                transform: rotate(-70deg);
                animation-timing-function: ease-in;
            }
        }
    </style>
    <?php include("footboot.php") ?>
</body>


</html>


