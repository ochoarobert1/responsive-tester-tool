<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Responsive Tester</title>

    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap');

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            max-width: 100%;
            height: 100%;
            font-family: 'Lato', sans-serif;
        }

        .responsive-tester-container {
            width: 100%;
            max-width: 100%;
            min-height: 100vh;
        }

        .iframe-container {
            display: block;
            margin: .5rem auto;
            transition: all .3s ease-in-out;
        }

        .submenu {
            position: absolute;
            top: 20px;
            left: 0;
            display: none;
            background: white;
            padding: .5rem;
        }

        .submenu:hover {
            display: block;
        }

        .responsive-tester-menu-container {
            width: 100%;
            background: black;
            margin: 0;
            margin-bottom: 2rem;
            display: flex;
            align-items: flex-start;
            justify-content: center;
            list-style: none;
            padding: 0.5rem 0;
        }

        .responsive-tester-menu-container li {
            position: relative;
        }

        .responsive-tester-menu-container li a {
            color: white;
            padding: 2rem;
            text-decoration: none;
        }

        .responsive-tester-menu-container li a:hover~.submenu {
            display: block;
        }

        .submenu ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .submenu ul li a {
            padding: 0.3rem 1rem;
            display: block;
            text-align: left;
            cursor: pointer;
            color: black;
        }

        #selected-viewport {
            margin-top: 1rem;
            text-align: center;
            padding: 1rem;
            font-size: 2rem;
            border: 1px solid #e4e4e4;
            border-left: 0;
            border-right: 0;
            background: whitesmoke;
            font-weight: 100;
        }

        .responsive-url-container {
            text-align: center;
            margin-bottom: 2rem;
        }

    </style>
    <script type="text/javascript">
        function changeSize() {
            document.addEventListener('click', function(e) {
                if (e.target.className == 'responsive') {
                    document.getElementById("iframe-container").width = e.target.dataset.width;
                    document.getElementById("iframe-container").height = e.target.dataset.height;
                    document.getElementById('selected-viewport').innerText = 'Seleccionaste: ' + e.target.text;
                }
            }, false);
        }

        function changeOrientation() {
            var widthTemp = document.getElementById("iframe-container").offsetWidth;
            var heightTemp = document.getElementById("iframe-container").offsetHeight;
            document.getElementById("iframe-container").width = heightTemp;
            document.getElementById("iframe-container").height = widthTemp;
        }

    </script>
</head>

<body>

    <div class="responsive-tester-container">
        <ul class="responsive-tester-menu-container">
            <li>
                <a href="#">Desktop</a>
                <div class="submenu">
                    <ul>
                        <li><a onclick="changeSize()" class="responsive" data-width="2560" data-height="1440">2560x1440</a></li>
                        <li><a onclick="changeSize()" class="responsive" data-width="1920" data-height="1080">1920x1080</a></li>
                        <li><a onclick="changeSize()" class="responsive" data-width="1680" data-height="1050">1680x1050</a></li>
                        <li><a onclick="changeSize()" class="responsive" data-width="1600" data-height="900">1600x900</a></li>
                        <li><a onclick="changeSize()" class="responsive" data-width="1440" data-height="900">1440x900</a></li>
                        <li><a onclick="changeSize()" class="responsive" data-width="1366" data-height="768">1366x768</a></li>
                        <li><a onclick="changeSize()" class="responsive" data-width="1280" data-height="800">1280x800</a></li>
                        <li><a onclick="changeSize()" class="responsive" data-width="1170" data-height="768">1170x768</a></li>
                        <li><a onclick="changeSize()" class="responsive" data-width="1024" data-height="768">1024x768</a></li>
                        <li><a onclick="changeSize()" class="responsive" data-width="1024" data-height="600">1024x600</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="#">Tablet</a>
                <div class="submenu">
                    <ul>
                        <li><a onclick="changeSize()" class="responsive" data-width="1536" data-height="2048">1536x2048</a></li>
                        <li><a onclick="changeSize()" class="responsive" data-width="1024" data-height="1366">1024x1366</a></li>
                        <li><a onclick="changeSize()" class="responsive" data-width="834" data-height="1112">834x1112</a></li>
                        <li><a onclick="changeSize()" class="responsive" data-width="810" data-height="1080">810x1080</a></li>
                        <li><a onclick="changeSize()" class="responsive" data-width="800" data-height="1280">800x1280</a></li>
                        <li><a onclick="changeSize()" class="responsive" data-width="768" data-height="1024">768x1024</a></li>
                        <li><a onclick="changeSize()" class="responsive" data-width="600" data-height="960">600x960</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="#">Mobile</a>
                <div class="submenu">
                    <ul>
                        <li><a onclick="changeSize()" class="responsive" data-width="480" data-height="853">480x853</a></li>
                        <li><a onclick="changeSize()" class="responsive" data-width="450" data-height="600">450x600</a></li>
                        <li><a onclick="changeSize()" class="responsive" data-width="424" data-height="719">424x719 - G6</a></li>
                        <li><a onclick="changeSize()" class="responsive" data-width="414" data-height="896">414x896</a></li>
                        <li><a onclick="changeSize()" class="responsive" data-width="414" data-height="736">414x736</a></li>
                        <li><a onclick="changeSize()" class="responsive" data-width="375" data-height="812">375x812</a></li>
                        <li><a onclick="changeSize()" class="responsive" data-width="375" data-height="667">375x667</a></li>
                        <li><a onclick="changeSize()" class="responsive" data-width="360" data-height="740">360x740</a></li>
                        <li><a onclick="changeSize()" class="responsive" data-width="360" data-height="640">360x640</a></li>
                        <li><a onclick="changeSize()" class="responsive" data-width="280" data-height="653">280x653</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a onclick="changeOrientation()"><img src="phone-orientation.png" alt="" height="20" width="20"></a>
            </li>
        </ul>
        <div class="responsive-url-container">
            <form method="get" action="<?=$_SERVER['PHP_SELF'];?>">
                <input id="url" type="text" name="url" value="<?php if (isset($_GET['url'])) { echo $_GET['url']; } ?>" />
                <button type="submit">Cargar URL</button>
            </form>
        </div>
        <div class="responsive-tester-view">
            <iframe id="iframe-container" class="iframe-container" src="<?php if (isset($_GET['url'])) { echo $_GET['url']; } ?>" frameborder="0" width="1024" height="768"></iframe>
            <div id="selected-viewport"></div>
        </div>
    </div>

</body>

</html>
