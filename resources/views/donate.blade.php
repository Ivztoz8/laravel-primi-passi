<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>H3llo L4r4v-3l-W0r1d</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #495c65;
                color: lightseagreen;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            /* My class */
            header {
                background-color: #0F1F23;
                color: darkgray;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 10vh;
                margin: 0;
                border-bottom: 1px solid gold;
            }

            .dd-flexnfurious{
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
            }

            a{
                list-style-type: none;
                text-decoration: none;
            }

            .clfont1{
                color: goldenrod;
            }
            .mrleftwow1{
                margin-left: 5px;
            }

            .mrrightwow1{
                margin-right: 10px;
            }

            .dd-flexnshrek{
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
            }
            .bgclyellowsubmarine{
                background-color: goldenrod;
            }

            .clmrgrayottimodirei{
                color: #495c65;
            }
            
            .clmrgrayottimodirei::before{
                content: '\2756';
                margin-right: 5px;
                
            }

            .clmrgrayottimodirei::after{
                content: '\2756';
                margin-left: 5px;
            }
        </style>
    </head>
    <body>
        <header class="m-b-md dd-flexnfurious">
            <div>
                <a href="{{ route('home') }}" class="clfont1 mrrightwow1 mrleftwow1">Home</a>
                <a href="{{ route('about') }}" class="clfont1 mrrightwow1">About</a>
                <a href="{{ route('contact') }}" class="clfont1 mrrightwow1">Contact</a>
                <a href="{{ route('donate') }}" class="clfont1 mrrightwow1">Donate</a>
            </div>
        </header>

                <div class="content">
                    <div class="title m-b-md">
                        D0n4te
                    </div>
                    <div class="dd-flexnshrek bgclyellowsubmarine">
                        <h2 class="clmrgrayottimodirei">Donate</h2>
                    </div>
                </div>
                </div>
                
        </div>
    </body>
</html>
