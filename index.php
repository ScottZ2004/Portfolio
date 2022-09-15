<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scott Zico</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="Images/logo_scott/logo_scott/logo_scott_1%20klein.png">

</head>
<body>
    <header>
        <img class="logo" src="Images/logo_scott/logo_scott/logo_scott_1.png" alt="logo">
        <nav class="nav-menu">
            <ul class="nav__links">
                <li><a class="nav-link" href="#home">Home</a></li>
                <li><a class="nav-link" href="#projects">Projects</a></li>
                <li><a class="nav-link" href="#about-me">About me</a></li>
                <li><a class="nav-link" href="#experience">Experience</a></li>
            </ul>
        </nav>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <a class="cta" href="#contact"><button class="button-dark">Contact me</button></a>
    </header>


    <div id="home" class="home-container">
        <div class="home-text-img-container">
            <div class="home-text-container">
                <h2>Hi I'm Scott</h2>
                <h1>I'm a Software Developer</h1>
                <h2><a id="learn-more" href="#about-me">Learn more ></a></h2>
            </div>
            <div class="home-image-container">
                <img src="Images/logo_scott/logo_scott/logo_scott_1.png" alt="logo">
            </div>
        </div>
        <div class="arrow">
            <a href="#projects">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="134.958" height="82.412" viewBox="0 0 134.958 82.412">
                    <defs>
                        <filter id="Icon_ionic-ios-arrow-down" x="0" y="0" width="134.958" height="82.412" filterUnits="userSpaceOnUse">
                            <feOffset dy="5" input="SourceAlpha"/>
                            <feGaussianBlur stdDeviation="3" result="blur"/>
                            <feFlood flood-opacity="0.161"/>
                            <feComposite operator="in" in2="blur"/>
                            <feComposite in="SourceGraphic"/>
                        </filter>
                    </defs>
                    <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#Icon_ionic-ios-arrow-down)">
                        <path id="Icon_ionic-ios-arrow-down-2" data-name="Icon ionic-ios-arrow-down" d="M64.688,56.241l44.224-42.63a8.549,8.549,0,0,1,11.8,0,7.907,7.907,0,0,1,0,11.4l-50.109,48.3a8.575,8.575,0,0,1-11.526.235L8.625,25.048a7.888,7.888,0,0,1,0-11.4,8.549,8.549,0,0,1,11.8,0Z" transform="translate(2.81 -7.25)" fill="#02353c"/>
                    </g>
                </svg>
            </a>
        </div>
    </div>
    <div id="projects" class="Project-container">
        <h1>My Projects</h1>
        <div class="Projects">
            <div class="Project"><img id="open_TSO" src="Images/Projecten/the%20story%20of.png" alt="The story of"></div>
            <div class="Project"><img id="open_LAM" src="Images/Projecten/Lam-foto.png" alt="LAM"></div>
            <div class="Project"><img id="open_HFL" src="Images/Projecten/Hunt%20for%20life.png" alt="Hunt for life"></div>
            <div class="Project"><img id="open_ES" src="Images/Projecten/Expanding%20space.png" alt="Expanding space"></div>
            <div class="Project"><img id="open_TC" src="Images/Projecten/Transformers_community.png" alt="Transformers community"></div>
            <div class="Project"><img id="open_SM" src="Images/Projecten/Stedlijk%20logo%20wit.png" alt="Stedelijk musuem"></div>

        </div>
    </div>
    <div class="modal-container" id="modal_container_TSO">
        <div class="modal">
            <p class="X" id="close_TSO">✕</p>
            <div class="modal-row">
                <h1>The Story Of</h1>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="114.6912" height="112.1656" viewBox="0 0 143.364 140.207">
                        <path id="Icon_awesome-python" data-name="Icon awesome-python" d="M140.736,54.983c-2.464-9.67-7.136-16.962-17.088-16.962H110.816V52.855c0,11.517-9.984,21.218-21.376,21.218H55.264A17.243,17.243,0,0,0,38.176,91.066v31.859c0,9.076,8.064,14.4,17.088,16.993a58.741,58.741,0,0,0,34.176,0c8.608-2.441,17.088-7.354,17.088-16.993V110.188H72.384v-4.256h51.264c9.952,0,13.632-6.791,17.088-16.962,3.584-10.484,3.424-20.561,0-33.987ZM91.584,118.668a6.369,6.369,0,1,1-6.432,6.353A6.4,6.4,0,0,1,91.584,118.668ZM53.7,69.879H87.872A17.036,17.036,0,0,0,104.96,52.886V21c0-9.076-7.808-15.867-17.088-17.4A107.824,107.824,0,0,0,53.7,3.627c-14.464,2.5-17.088,7.73-17.088,17.4V33.765H70.816v4.256H23.776c-9.952,0-18.656,5.852-21.376,16.962C-.736,67.72-.864,75.669,2.4,88.969c2.432,9.889,8.224,16.962,18.176,16.962H32.32V90.659C32.32,79.612,42.08,69.879,53.7,69.879ZM51.552,25.252A6.369,6.369,0,1,1,57.984,18.9,6.4,6.4,0,0,1,51.552,25.252Z" transform="translate(0 -2.25)" fill="snow"/>
                    </svg>
                </div>
            </div>
            <div class="modal-row">
                <p>
                    The Story of is my first coding project I have done.
                    The assignment was to make a text-based application
                    in python about a refuge from a war zone.
                    <br>
                    <br>
                    Because I had no experience with coding before this
                    project, i had to learn the basics. Python was a good
                    choice because it is very easy to learn and it is very
                    new-comer friendly.
                    <br>
                    <br>
                    Solo project
                    <br>
                    <br>
                    Start: September 16th 2020
                    <br>
                    End: October 28th 2020
                </p>
                <img src="Images/Verhaal%20van%20Amir.png" alt="Verhaal van Amir">
            </div>
            <div class="modal-row">
                <div class="modal-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="133.9344" height="44.6528" viewBox="0 0 167.418 55.816">
                        <g id="Group_26" data-name="Group 26" transform="translate(0 0)" onclick="window.open('https://github.com/ScottZ2004')">
                            <rect id="Rectangle_64" data-name="Rectangle 64" width="55.815" height="55.815" rx="10" transform="translate(0 0)" fill="#fff"/>
                            <path id="Icon_awesome-github" data-name="Icon awesome-github" d="M16.614,39.559c0,.2-.23.361-.521.361-.33.03-.561-.13-.561-.361,0-.2.23-.361.521-.361C16.354,39.168,16.614,39.329,16.614,39.559ZM13.5,39.108c-.07.2.13.431.431.491a.47.47,0,0,0,.621-.2c.06-.2-.13-.431-.431-.521A.514.514,0,0,0,13.5,39.108Zm4.426-.17c-.29.07-.491.26-.461.491.03.2.29.33.591.26s.491-.26.461-.461S18.216,38.908,17.926,38.938ZM24.516.563A24.014,24.014,0,0,0,0,25,25.107,25.107,0,0,0,16.975,48.953c1.282.23,1.733-.561,1.733-1.212,0-.621-.03-4.046-.03-6.149,0,0-7.01,1.5-8.482-2.984,0,0-1.142-2.914-2.784-3.665,0,0-2.293-1.572.16-1.542a5.286,5.286,0,0,1,3.866,2.584c2.193,3.866,5.869,2.754,7.3,2.093a5.566,5.566,0,0,1,1.6-3.375c-5.6-.621-11.246-1.432-11.246-11.066a7.59,7.59,0,0,1,2.363-5.9,9.462,9.462,0,0,1,.26-6.8c2.093-.651,6.91,2.7,6.91,2.7a23.658,23.658,0,0,1,12.578,0s4.817-3.365,6.91-2.7a9.457,9.457,0,0,1,.26,6.8c1.6,1.773,2.584,3.155,2.584,5.9,0,9.664-5.9,10.435-11.5,11.066a5.922,5.922,0,0,1,1.7,4.647c0,3.375-.03,7.551-.03,8.372,0,.651.461,1.442,1.733,1.212A24.876,24.876,0,0,0,49.672,25C49.672,11.108,38.406.563,24.516.563ZM9.734,35.1c-.13.1-.1.33.07.521.16.16.391.23.521.1.13-.1.1-.33-.07-.521C10.095,35.042,9.864,34.972,9.734,35.1Zm-1.082-.811c-.07.13.03.29.23.391a.3.3,0,0,0,.431-.07c.07-.13-.03-.29-.23-.391C8.883,34.161,8.723,34.191,8.653,34.291ZM11.9,37.857c-.16.13-.1.431.13.621.23.23.521.26.651.1.13-.13.07-.431-.13-.621C12.328,37.726,12.027,37.7,11.9,37.857Zm-1.142-1.472c-.16.1-.16.361,0,.591s.431.33.561.23a.457.457,0,0,0,0-.621C11.176,36.354,10.916,36.254,10.756,36.384Z" transform="translate(3.072 3.13)" fill="#02353c"/>
                        </g>
                        <g id="Group_35" data-name="Group 35" transform="translate(111.603 0)">
                            <rect id="Rectangle_86" data-name="Rectangle 86" width="55.815" height="55.815" rx="8" transform="translate(0 0)" fill="snow"/>
                            <path id="Icon_material-file-download" data-name="Icon material-file-download" d="M39.618,18.265H30.442V4.5H16.677V18.265H7.5L23.559,34.324ZM7.5,38.913V43.5H39.618V38.913Z" transform="translate(4.349 5.236)" fill="#02353c"/>
                        </g>
                    </svg>
                </div>
            </div>

        </div>
    </div>
    <div class="modal-container" id="modal_container_LAM">
        <div class="modal">
            <p class="X" id="close_LAM">✕</p>
            <div class="modal-row">
                <h1>LAM</h1>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="305.949" height="77.321" viewBox="0 0 305.949 77.321">
                        <g id="Group_43" data-name="Group 43" transform="translate(-1134.71 -300.679)">
                            <path id="Icon_awesome-html5" data-name="Icon awesome-html5" d="M0,2.25,6.023,70.562l27.028,9.009,27.2-9.009L66.275,2.25ZM53.193,24.324H21.47l.708,8.526H52.485L50.138,58.463l-16.9,4.66v.052h-.19L16.017,58.463,14.981,45.381h8.233l.6,6.576,9.234,2.5,9.268-2.5,1.036-10.735H14.549L12.34,16.092H53.952Z" transform="translate(1134.709 298.429)" fill="snow"/>
                            <path id="Icon_awesome-css3-alt" data-name="Icon awesome-css3-alt" d="M0,2.25,6.023,70.562l27.114,9.009,27.114-9.009L66.275,2.25ZM54.038,16.057l-.828,8.164L33.31,32.73l-.052.017H52.5l-2.209,25.3L33.345,63l-17.052-5.04-1.1-12.754h8.44l.552,6.61,9.078,2.3L42.7,51.456l.639-10.632-28.7-.086v-.017l-.035.017-.621-7.991,19.347-8.06,1.122-.466H13.238l-1-8.164Z" transform="translate(1250.863 298.429)" fill="snow"/>
                            <path id="Icon_simple-javascript" data-name="Icon simple-javascript" d="M0,0H73.643V73.643H0ZM67.61,56.079c-.537-3.36-2.725-6.183-9.215-8.816-2.258-1.059-4.768-1.8-5.514-3.5a3.623,3.623,0,0,1-.141-2.163c.46-1.982,2.808-2.578,4.649-2.025a4.992,4.992,0,0,1,2.995,2.762c3.173-2.074,3.173-2.074,5.385-3.452a12.665,12.665,0,0,0-1.8-2.393c-1.933-2.163-4.508-3.268-8.7-3.173l-2.163.273a9.891,9.891,0,0,0-5.247,3.084c-3.5,3.961-2.489,10.865,1.746,13.719,4.188,3.13,10.313,3.817,11.1,6.766.736,3.59-2.67,4.741-6.033,4.327-2.489-.552-3.866-1.8-5.385-4.1l-5.615,3.225a12.409,12.409,0,0,0,2.485,3.4c5.339,5.388,18.687,5.112,21.083-3.081a10.385,10.385,0,0,0,.227-5.063l.141.206ZM40.046,33.848h-6.9c0,5.947-.028,11.857-.028,17.812,0,3.78.193,7.251-.423,8.319-1.013,2.114-3.621,1.844-4.805,1.473a5.921,5.921,0,0,1-2.547-2.624,2.633,2.633,0,0,0-.39-.6l-5.6,3.452a10.853,10.853,0,0,0,4.063,4.655,13.5,13.5,0,0,0,9.841,1.243,8.619,8.619,0,0,0,5.557-4.33c1.565-2.854,1.234-6.352,1.218-10.267.037-6.3,0-12.608,0-18.96l.012-.172Z" transform="translate(1367.015 300.679)" fill="snow"/>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="modal-row">
                <p>
                    The landingspage was the first web development
                    assignment I got. The assignment was to make a
                    landingspage for the Lisser art musuem in a group
                    of two.
                    <br>
                    <br>
                    We made this website using HTML, CSS and
                    Javascript. Because this was the first time using these
                    languages, I had a lot to figure out.
                    <br>
                    <br>
                    Duo project
                    <br>
                    <br>
                    Start: November 24th
                    <br>
                    End: Febuary 2nd 2020
                </p>
                <img src="Images/Projecten/Lam-site.png" alt="Verhaal van Amir">
            </div>
            <div class="modal-row">
                <div class="modal-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="223.227" height="55.816" viewBox="0 0 223.227 55.816">
                        <g id="Group_26" data-name="Group 26" onclick="window.open('https://github.com/ScottZ2004/LandingspageLAM/')">
                            <rect id="Rectangle_64" data-name="Rectangle 64" width="55.815" height="55.815" rx="10" transform="translate(0 0)" fill="#fff"/>
                            <path id="Icon_awesome-github" data-name="Icon awesome-github" d="M16.614,39.559c0,.2-.23.361-.521.361-.33.03-.561-.13-.561-.361,0-.2.23-.361.521-.361C16.354,39.168,16.614,39.329,16.614,39.559ZM13.5,39.108c-.07.2.13.431.431.491a.47.47,0,0,0,.621-.2c.06-.2-.13-.431-.431-.521A.514.514,0,0,0,13.5,39.108Zm4.426-.17c-.29.07-.491.26-.461.491.03.2.29.33.591.26s.491-.26.461-.461S18.216,38.908,17.926,38.938ZM24.516.563A24.014,24.014,0,0,0,0,25,25.107,25.107,0,0,0,16.975,48.953c1.282.23,1.733-.561,1.733-1.212,0-.621-.03-4.046-.03-6.149,0,0-7.01,1.5-8.482-2.984,0,0-1.142-2.914-2.784-3.665,0,0-2.293-1.572.16-1.542a5.286,5.286,0,0,1,3.866,2.584c2.193,3.866,5.869,2.754,7.3,2.093a5.566,5.566,0,0,1,1.6-3.375c-5.6-.621-11.246-1.432-11.246-11.066a7.59,7.59,0,0,1,2.363-5.9,9.462,9.462,0,0,1,.26-6.8c2.093-.651,6.91,2.7,6.91,2.7a23.658,23.658,0,0,1,12.578,0s4.817-3.365,6.91-2.7a9.457,9.457,0,0,1,.26,6.8c1.6,1.773,2.584,3.155,2.584,5.9,0,9.664-5.9,10.435-11.5,11.066a5.922,5.922,0,0,1,1.7,4.647c0,3.375-.03,7.551-.03,8.372,0,.651.461,1.442,1.733,1.212A24.876,24.876,0,0,0,49.672,25C49.672,11.108,38.406.563,24.516.563ZM9.734,35.1c-.13.1-.1.33.07.521.16.16.391.23.521.1.13-.1.1-.33-.07-.521C10.095,35.042,9.864,34.972,9.734,35.1Zm-1.082-.811c-.07.13.03.29.23.391a.3.3,0,0,0,.431-.07c.07-.13-.03-.29-.23-.391C8.883,34.161,8.723,34.191,8.653,34.291ZM11.9,37.857c-.16.13-.1.431.13.621.23.23.521.26.651.1.13-.13.07-.431-.13-.621C12.328,37.726,12.027,37.7,11.9,37.857Zm-1.142-1.472c-.16.1-.16.361,0,.591s.431.33.561.23a.457.457,0,0,0,0-.621C11.176,36.354,10.916,36.254,10.756,36.384Z" transform="translate(3.072 3.13)" fill="#02353c"/>
                        </g>

                        <path id="Icon_awesome-trello" data-name="Icon awesome-trello" d="M48.878,2.25H6.992A6.984,6.984,0,0,0,0,9.227c-.012,0,0-.5,0,41.862a6.981,6.981,0,0,0,6.977,6.977H48.866a6.982,6.982,0,0,0,6.94-6.977V9.227A6.963,6.963,0,0,0,48.878,2.25ZM24.546,44.523a3.353,3.353,0,0,1-3.351,3.314h-10.3a3.339,3.339,0,0,1-3.364-3.314V12.852A3.352,3.352,0,0,1,10.879,9.5H21.207a3.352,3.352,0,0,1,3.351,3.351v31.67ZM48.6,30.569a3.352,3.352,0,0,1-3.351,3.351H35.161a3.352,3.352,0,0,1-3.351-3.351v-17.7a3.35,3.35,0,0,1,3.339-3.351h10.1A3.352,3.352,0,0,1,48.6,12.865v17.7Z" transform="translate(167.422 -2.25)" fill="#fff"/>
                        <g onclick="window.open('http://31658.hosts1.ma-cloud.nl/LandingspageLAM/Landingspage/')"  id="Group_28" data-name="Group 28" transform="translate(83.709)">
                            <g id="Group_21" data-name="Group 21" transform="translate(0)">
                                <rect id="Rectangle_64-2" data-name="Rectangle 64" width="55.816" height="55.815" rx="10" transform="translate(0)" fill="#fff"/>
                            </g>
                            <path id="Icon_awesome-globe" data-name="Icon awesome-globe" d="M28.518,13.445C27.29,5.876,24.391.562,21.018.562s-6.272,5.314-7.5,12.882ZM12.882,21.581A53.12,53.12,0,0,0,13.162,27h15.7a53.121,53.121,0,0,0,.28-5.424,53.121,53.121,0,0,0-.28-5.424h-15.7A53.12,53.12,0,0,0,12.882,21.581ZM40.4,13.445a21.062,21.062,0,0,0-13.391-12c2.068,2.865,3.492,7.178,4.238,12Zm-25.383-12a21.048,21.048,0,0,0-13.382,12h9.153c.737-4.822,2.161-9.136,4.229-12Zm26.29,14.713H31.586c.178,1.78.28,3.6.28,5.424s-.1,3.644-.28,5.424H41.3a20.837,20.837,0,0,0,.729-5.424A21.2,21.2,0,0,0,41.307,16.157ZM10.17,21.581c0-1.822.1-3.644.28-5.424H.729A20.547,20.547,0,0,0,.729,27h9.712C10.272,25.225,10.17,23.4,10.17,21.581Zm3.348,8.136c1.229,7.568,4.127,12.882,7.5,12.882s6.272-5.314,7.5-12.882Zm13.5,12a21.083,21.083,0,0,0,13.391-12H31.256c-.746,4.822-2.17,9.136-4.238,12Zm-25.383-12a21.062,21.062,0,0,0,13.391,12c-2.068-2.865-3.492-7.178-4.238-12H1.636Z" transform="translate(6.894 6.327)" fill="#02353c"/>
                        </g>
                    </svg>

                </div>
            </div>

        </div>
    </div>
    <div class="modal-container" id="modal_container_HFL">
        <div class="modal">
            <p class="X" id="close_HFL">✕</p>
            <div class="modal-row">
                <h1>LAM</h1>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="114.6912" height="112.1656" viewBox="0 0 143.364 140.207">
                        <path id="Icon_awesome-python" data-name="Icon awesome-python" d="M140.736,54.983c-2.464-9.67-7.136-16.962-17.088-16.962H110.816V52.855c0,11.517-9.984,21.218-21.376,21.218H55.264A17.243,17.243,0,0,0,38.176,91.066v31.859c0,9.076,8.064,14.4,17.088,16.993a58.741,58.741,0,0,0,34.176,0c8.608-2.441,17.088-7.354,17.088-16.993V110.188H72.384v-4.256h51.264c9.952,0,13.632-6.791,17.088-16.962,3.584-10.484,3.424-20.561,0-33.987ZM91.584,118.668a6.369,6.369,0,1,1-6.432,6.353A6.4,6.4,0,0,1,91.584,118.668ZM53.7,69.879H87.872A17.036,17.036,0,0,0,104.96,52.886V21c0-9.076-7.808-15.867-17.088-17.4A107.824,107.824,0,0,0,53.7,3.627c-14.464,2.5-17.088,7.73-17.088,17.4V33.765H70.816v4.256H23.776c-9.952,0-18.656,5.852-21.376,16.962C-.736,67.72-.864,75.669,2.4,88.969c2.432,9.889,8.224,16.962,18.176,16.962H32.32V90.659C32.32,79.612,42.08,69.879,53.7,69.879ZM51.552,25.252A6.369,6.369,0,1,1,57.984,18.9,6.4,6.4,0,0,1,51.552,25.252Z" transform="translate(0 -2.25)" fill="snow"/>
                    </svg>
                </div>
            </div>
            <div class="modal-row">
                <p>
                    The Story of is my first coding project I have done.
                    The assignment was to make a text-based application
                    in python about a refuge from a war zone.
                    <br>
                    <br>
                    Because I had no experience with coding before this
                    project, i had to learn the basics. Python was a good
                    choice because it is very easy to learn and it is very
                    new-comer friendly.
                </p>
                <img src="Images/Verhaal%20van%20Amir.png" alt="Verhaal van Amir">
            </div>
            <div class="modal-row">
                <div class="modal-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="133.9344" height="44.6528" viewBox="0 0 167.418 55.816">
                        <g id="Group_26" data-name="Group 26" transform="translate(0 0)">
                            <rect id="Rectangle_64" data-name="Rectangle 64" width="55.815" height="55.815" rx="10" transform="translate(0 0)" fill="#fff"/>
                            <path id="Icon_awesome-github" data-name="Icon awesome-github" d="M16.614,39.559c0,.2-.23.361-.521.361-.33.03-.561-.13-.561-.361,0-.2.23-.361.521-.361C16.354,39.168,16.614,39.329,16.614,39.559ZM13.5,39.108c-.07.2.13.431.431.491a.47.47,0,0,0,.621-.2c.06-.2-.13-.431-.431-.521A.514.514,0,0,0,13.5,39.108Zm4.426-.17c-.29.07-.491.26-.461.491.03.2.29.33.591.26s.491-.26.461-.461S18.216,38.908,17.926,38.938ZM24.516.563A24.014,24.014,0,0,0,0,25,25.107,25.107,0,0,0,16.975,48.953c1.282.23,1.733-.561,1.733-1.212,0-.621-.03-4.046-.03-6.149,0,0-7.01,1.5-8.482-2.984,0,0-1.142-2.914-2.784-3.665,0,0-2.293-1.572.16-1.542a5.286,5.286,0,0,1,3.866,2.584c2.193,3.866,5.869,2.754,7.3,2.093a5.566,5.566,0,0,1,1.6-3.375c-5.6-.621-11.246-1.432-11.246-11.066a7.59,7.59,0,0,1,2.363-5.9,9.462,9.462,0,0,1,.26-6.8c2.093-.651,6.91,2.7,6.91,2.7a23.658,23.658,0,0,1,12.578,0s4.817-3.365,6.91-2.7a9.457,9.457,0,0,1,.26,6.8c1.6,1.773,2.584,3.155,2.584,5.9,0,9.664-5.9,10.435-11.5,11.066a5.922,5.922,0,0,1,1.7,4.647c0,3.375-.03,7.551-.03,8.372,0,.651.461,1.442,1.733,1.212A24.876,24.876,0,0,0,49.672,25C49.672,11.108,38.406.563,24.516.563ZM9.734,35.1c-.13.1-.1.33.07.521.16.16.391.23.521.1.13-.1.1-.33-.07-.521C10.095,35.042,9.864,34.972,9.734,35.1Zm-1.082-.811c-.07.13.03.29.23.391a.3.3,0,0,0,.431-.07c.07-.13-.03-.29-.23-.391C8.883,34.161,8.723,34.191,8.653,34.291ZM11.9,37.857c-.16.13-.1.431.13.621.23.23.521.26.651.1.13-.13.07-.431-.13-.621C12.328,37.726,12.027,37.7,11.9,37.857Zm-1.142-1.472c-.16.1-.16.361,0,.591s.431.33.561.23a.457.457,0,0,0,0-.621C11.176,36.354,10.916,36.254,10.756,36.384Z" transform="translate(3.072 3.13)" fill="#02353c"/>
                        </g>
                        <g id="Group_35" data-name="Group 35" transform="translate(111.603 0)">
                            <rect id="Rectangle_86" data-name="Rectangle 86" width="55.815" height="55.815" rx="8" transform="translate(0 0)" fill="snow"/>
                            <path id="Icon_material-file-download" data-name="Icon material-file-download" d="M39.618,18.265H30.442V4.5H16.677V18.265H7.5L23.559,34.324ZM7.5,38.913V43.5H39.618V38.913Z" transform="translate(4.349 5.236)" fill="#02353c"/>
                        </g>
                    </svg>
                </div>
            </div>

        </div>
    </div>
    <div class="modal-container" id="modal_container_ES">
        <div class="modal">
            <p class="X" id="close_ES">✕</p>
            <div class="modal-row">
                <h1>LAM</h1>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="114.6912" height="112.1656" viewBox="0 0 143.364 140.207">
                        <path id="Icon_awesome-python" data-name="Icon awesome-python" d="M140.736,54.983c-2.464-9.67-7.136-16.962-17.088-16.962H110.816V52.855c0,11.517-9.984,21.218-21.376,21.218H55.264A17.243,17.243,0,0,0,38.176,91.066v31.859c0,9.076,8.064,14.4,17.088,16.993a58.741,58.741,0,0,0,34.176,0c8.608-2.441,17.088-7.354,17.088-16.993V110.188H72.384v-4.256h51.264c9.952,0,13.632-6.791,17.088-16.962,3.584-10.484,3.424-20.561,0-33.987ZM91.584,118.668a6.369,6.369,0,1,1-6.432,6.353A6.4,6.4,0,0,1,91.584,118.668ZM53.7,69.879H87.872A17.036,17.036,0,0,0,104.96,52.886V21c0-9.076-7.808-15.867-17.088-17.4A107.824,107.824,0,0,0,53.7,3.627c-14.464,2.5-17.088,7.73-17.088,17.4V33.765H70.816v4.256H23.776c-9.952,0-18.656,5.852-21.376,16.962C-.736,67.72-.864,75.669,2.4,88.969c2.432,9.889,8.224,16.962,18.176,16.962H32.32V90.659C32.32,79.612,42.08,69.879,53.7,69.879ZM51.552,25.252A6.369,6.369,0,1,1,57.984,18.9,6.4,6.4,0,0,1,51.552,25.252Z" transform="translate(0 -2.25)" fill="snow"/>
                    </svg>
                </div>
            </div>
            <div class="modal-row">
                <p>
                    The Story of is my first coding project I have done.
                    The assignment was to make a text-based application
                    in python about a refuge from a war zone.
                    <br>
                    <br>
                    Because I had no experience with coding before this
                    project, i had to learn the basics. Python was a good
                    choice because it is very easy to learn and it is very
                    new-comer friendly.
                </p>
                <img src="Images/Verhaal%20van%20Amir.png" alt="Verhaal van Amir">
            </div>
            <div class="modal-row">
                <div class="modal-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="133.9344" height="44.6528" viewBox="0 0 167.418 55.816">
                        <g id="Group_26" data-name="Group 26" transform="translate(0 0)">
                            <rect id="Rectangle_64" data-name="Rectangle 64" width="55.815" height="55.815" rx="10" transform="translate(0 0)" fill="#fff"/>
                            <path id="Icon_awesome-github" data-name="Icon awesome-github" d="M16.614,39.559c0,.2-.23.361-.521.361-.33.03-.561-.13-.561-.361,0-.2.23-.361.521-.361C16.354,39.168,16.614,39.329,16.614,39.559ZM13.5,39.108c-.07.2.13.431.431.491a.47.47,0,0,0,.621-.2c.06-.2-.13-.431-.431-.521A.514.514,0,0,0,13.5,39.108Zm4.426-.17c-.29.07-.491.26-.461.491.03.2.29.33.591.26s.491-.26.461-.461S18.216,38.908,17.926,38.938ZM24.516.563A24.014,24.014,0,0,0,0,25,25.107,25.107,0,0,0,16.975,48.953c1.282.23,1.733-.561,1.733-1.212,0-.621-.03-4.046-.03-6.149,0,0-7.01,1.5-8.482-2.984,0,0-1.142-2.914-2.784-3.665,0,0-2.293-1.572.16-1.542a5.286,5.286,0,0,1,3.866,2.584c2.193,3.866,5.869,2.754,7.3,2.093a5.566,5.566,0,0,1,1.6-3.375c-5.6-.621-11.246-1.432-11.246-11.066a7.59,7.59,0,0,1,2.363-5.9,9.462,9.462,0,0,1,.26-6.8c2.093-.651,6.91,2.7,6.91,2.7a23.658,23.658,0,0,1,12.578,0s4.817-3.365,6.91-2.7a9.457,9.457,0,0,1,.26,6.8c1.6,1.773,2.584,3.155,2.584,5.9,0,9.664-5.9,10.435-11.5,11.066a5.922,5.922,0,0,1,1.7,4.647c0,3.375-.03,7.551-.03,8.372,0,.651.461,1.442,1.733,1.212A24.876,24.876,0,0,0,49.672,25C49.672,11.108,38.406.563,24.516.563ZM9.734,35.1c-.13.1-.1.33.07.521.16.16.391.23.521.1.13-.1.1-.33-.07-.521C10.095,35.042,9.864,34.972,9.734,35.1Zm-1.082-.811c-.07.13.03.29.23.391a.3.3,0,0,0,.431-.07c.07-.13-.03-.29-.23-.391C8.883,34.161,8.723,34.191,8.653,34.291ZM11.9,37.857c-.16.13-.1.431.13.621.23.23.521.26.651.1.13-.13.07-.431-.13-.621C12.328,37.726,12.027,37.7,11.9,37.857Zm-1.142-1.472c-.16.1-.16.361,0,.591s.431.33.561.23a.457.457,0,0,0,0-.621C11.176,36.354,10.916,36.254,10.756,36.384Z" transform="translate(3.072 3.13)" fill="#02353c"/>
                        </g>
                        <g id="Group_35" data-name="Group 35" transform="translate(111.603 0)">
                            <rect id="Rectangle_86" data-name="Rectangle 86" width="55.815" height="55.815" rx="8" transform="translate(0 0)" fill="snow"/>
                            <path id="Icon_material-file-download" data-name="Icon material-file-download" d="M39.618,18.265H30.442V4.5H16.677V18.265H7.5L23.559,34.324ZM7.5,38.913V43.5H39.618V38.913Z" transform="translate(4.349 5.236)" fill="#02353c"/>
                        </g>
                    </svg>
                </div>
            </div>

        </div>
    </div>
    <div class="modal-container" id="modal_container_TC">
        <div class="modal">
            <p class="X" id="close_TC">✕</p>
            <div class="modal-row">
                <h1>LAM</h1>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="114.6912" height="112.1656" viewBox="0 0 143.364 140.207">
                        <path id="Icon_awesome-python" data-name="Icon awesome-python" d="M140.736,54.983c-2.464-9.67-7.136-16.962-17.088-16.962H110.816V52.855c0,11.517-9.984,21.218-21.376,21.218H55.264A17.243,17.243,0,0,0,38.176,91.066v31.859c0,9.076,8.064,14.4,17.088,16.993a58.741,58.741,0,0,0,34.176,0c8.608-2.441,17.088-7.354,17.088-16.993V110.188H72.384v-4.256h51.264c9.952,0,13.632-6.791,17.088-16.962,3.584-10.484,3.424-20.561,0-33.987ZM91.584,118.668a6.369,6.369,0,1,1-6.432,6.353A6.4,6.4,0,0,1,91.584,118.668ZM53.7,69.879H87.872A17.036,17.036,0,0,0,104.96,52.886V21c0-9.076-7.808-15.867-17.088-17.4A107.824,107.824,0,0,0,53.7,3.627c-14.464,2.5-17.088,7.73-17.088,17.4V33.765H70.816v4.256H23.776c-9.952,0-18.656,5.852-21.376,16.962C-.736,67.72-.864,75.669,2.4,88.969c2.432,9.889,8.224,16.962,18.176,16.962H32.32V90.659C32.32,79.612,42.08,69.879,53.7,69.879ZM51.552,25.252A6.369,6.369,0,1,1,57.984,18.9,6.4,6.4,0,0,1,51.552,25.252Z" transform="translate(0 -2.25)" fill="snow"/>
                    </svg>
                </div>
            </div>
            <div class="modal-row">
                <p>
                    The Story of is my first coding project I have done.
                    The assignment was to make a text-based application
                    in python about a refuge from a war zone.
                    <br>
                    <br>
                    Because I had no experience with coding before this
                    project, i had to learn the basics. Python was a good
                    choice because it is very easy to learn and it is very
                    new-comer friendly.
                </p>
                <img src="Images/Verhaal%20van%20Amir.png" alt="Verhaal van Amir">
            </div>
            <div class="modal-row">
                <div class="modal-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="133.9344" height="44.6528" viewBox="0 0 167.418 55.816">
                        <g id="Group_26" data-name="Group 26" transform="translate(0 0)">
                            <rect id="Rectangle_64" data-name="Rectangle 64" width="55.815" height="55.815" rx="10" transform="translate(0 0)" fill="#fff"/>
                            <path id="Icon_awesome-github" data-name="Icon awesome-github" d="M16.614,39.559c0,.2-.23.361-.521.361-.33.03-.561-.13-.561-.361,0-.2.23-.361.521-.361C16.354,39.168,16.614,39.329,16.614,39.559ZM13.5,39.108c-.07.2.13.431.431.491a.47.47,0,0,0,.621-.2c.06-.2-.13-.431-.431-.521A.514.514,0,0,0,13.5,39.108Zm4.426-.17c-.29.07-.491.26-.461.491.03.2.29.33.591.26s.491-.26.461-.461S18.216,38.908,17.926,38.938ZM24.516.563A24.014,24.014,0,0,0,0,25,25.107,25.107,0,0,0,16.975,48.953c1.282.23,1.733-.561,1.733-1.212,0-.621-.03-4.046-.03-6.149,0,0-7.01,1.5-8.482-2.984,0,0-1.142-2.914-2.784-3.665,0,0-2.293-1.572.16-1.542a5.286,5.286,0,0,1,3.866,2.584c2.193,3.866,5.869,2.754,7.3,2.093a5.566,5.566,0,0,1,1.6-3.375c-5.6-.621-11.246-1.432-11.246-11.066a7.59,7.59,0,0,1,2.363-5.9,9.462,9.462,0,0,1,.26-6.8c2.093-.651,6.91,2.7,6.91,2.7a23.658,23.658,0,0,1,12.578,0s4.817-3.365,6.91-2.7a9.457,9.457,0,0,1,.26,6.8c1.6,1.773,2.584,3.155,2.584,5.9,0,9.664-5.9,10.435-11.5,11.066a5.922,5.922,0,0,1,1.7,4.647c0,3.375-.03,7.551-.03,8.372,0,.651.461,1.442,1.733,1.212A24.876,24.876,0,0,0,49.672,25C49.672,11.108,38.406.563,24.516.563ZM9.734,35.1c-.13.1-.1.33.07.521.16.16.391.23.521.1.13-.1.1-.33-.07-.521C10.095,35.042,9.864,34.972,9.734,35.1Zm-1.082-.811c-.07.13.03.29.23.391a.3.3,0,0,0,.431-.07c.07-.13-.03-.29-.23-.391C8.883,34.161,8.723,34.191,8.653,34.291ZM11.9,37.857c-.16.13-.1.431.13.621.23.23.521.26.651.1.13-.13.07-.431-.13-.621C12.328,37.726,12.027,37.7,11.9,37.857Zm-1.142-1.472c-.16.1-.16.361,0,.591s.431.33.561.23a.457.457,0,0,0,0-.621C11.176,36.354,10.916,36.254,10.756,36.384Z" transform="translate(3.072 3.13)" fill="#02353c"/>
                        </g>
                        <g id="Group_35" data-name="Group 35" transform="translate(111.603 0)">
                            <rect id="Rectangle_86" data-name="Rectangle 86" width="55.815" height="55.815" rx="8" transform="translate(0 0)" fill="snow"/>
                            <path id="Icon_material-file-download" data-name="Icon material-file-download" d="M39.618,18.265H30.442V4.5H16.677V18.265H7.5L23.559,34.324ZM7.5,38.913V43.5H39.618V38.913Z" transform="translate(4.349 5.236)" fill="#02353c"/>
                        </g>
                    </svg>
                </div>
            </div>

        </div>
    </div>
    <div class="modal-container" id="modal_container_SM">
        <div class="modal">
            <p class="X" id="close_SM">✕</p>
            <div class="modal-row">
                <h1>LAM</h1>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="114.6912" height="112.1656" viewBox="0 0 143.364 140.207">
                        <path id="Icon_awesome-python" data-name="Icon awesome-python" d="M140.736,54.983c-2.464-9.67-7.136-16.962-17.088-16.962H110.816V52.855c0,11.517-9.984,21.218-21.376,21.218H55.264A17.243,17.243,0,0,0,38.176,91.066v31.859c0,9.076,8.064,14.4,17.088,16.993a58.741,58.741,0,0,0,34.176,0c8.608-2.441,17.088-7.354,17.088-16.993V110.188H72.384v-4.256h51.264c9.952,0,13.632-6.791,17.088-16.962,3.584-10.484,3.424-20.561,0-33.987ZM91.584,118.668a6.369,6.369,0,1,1-6.432,6.353A6.4,6.4,0,0,1,91.584,118.668ZM53.7,69.879H87.872A17.036,17.036,0,0,0,104.96,52.886V21c0-9.076-7.808-15.867-17.088-17.4A107.824,107.824,0,0,0,53.7,3.627c-14.464,2.5-17.088,7.73-17.088,17.4V33.765H70.816v4.256H23.776c-9.952,0-18.656,5.852-21.376,16.962C-.736,67.72-.864,75.669,2.4,88.969c2.432,9.889,8.224,16.962,18.176,16.962H32.32V90.659C32.32,79.612,42.08,69.879,53.7,69.879ZM51.552,25.252A6.369,6.369,0,1,1,57.984,18.9,6.4,6.4,0,0,1,51.552,25.252Z" transform="translate(0 -2.25)" fill="snow"/>
                    </svg>
                </div>
            </div>
            <div class="modal-row">
                <p>
                    The Story of is my first coding project I have done.
                    The assignment was to make a text-based application
                    in python about a refuge from a war zone.
                    <br>
                    <br>
                    Because I had no experience with coding before this
                    project, i had to learn the basics. Python was a good
                    choice because it is very easy to learn and it is very
                    new-comer friendly.
                </p>
                <img src="Images/Verhaal%20van%20Amir.png" alt="Verhaal van Amir">
            </div>
            <div class="modal-row">
                <div class="modal-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="133.9344" height="44.6528" viewBox="0 0 167.418 55.816">
                        <g id="Group_26" data-name="Group 26" transform="translate(0 0)">
                            <rect id="Rectangle_64" data-name="Rectangle 64" width="55.815" height="55.815" rx="10" transform="translate(0 0)" fill="#fff"/>
                            <path id="Icon_awesome-github" data-name="Icon awesome-github" d="M16.614,39.559c0,.2-.23.361-.521.361-.33.03-.561-.13-.561-.361,0-.2.23-.361.521-.361C16.354,39.168,16.614,39.329,16.614,39.559ZM13.5,39.108c-.07.2.13.431.431.491a.47.47,0,0,0,.621-.2c.06-.2-.13-.431-.431-.521A.514.514,0,0,0,13.5,39.108Zm4.426-.17c-.29.07-.491.26-.461.491.03.2.29.33.591.26s.491-.26.461-.461S18.216,38.908,17.926,38.938ZM24.516.563A24.014,24.014,0,0,0,0,25,25.107,25.107,0,0,0,16.975,48.953c1.282.23,1.733-.561,1.733-1.212,0-.621-.03-4.046-.03-6.149,0,0-7.01,1.5-8.482-2.984,0,0-1.142-2.914-2.784-3.665,0,0-2.293-1.572.16-1.542a5.286,5.286,0,0,1,3.866,2.584c2.193,3.866,5.869,2.754,7.3,2.093a5.566,5.566,0,0,1,1.6-3.375c-5.6-.621-11.246-1.432-11.246-11.066a7.59,7.59,0,0,1,2.363-5.9,9.462,9.462,0,0,1,.26-6.8c2.093-.651,6.91,2.7,6.91,2.7a23.658,23.658,0,0,1,12.578,0s4.817-3.365,6.91-2.7a9.457,9.457,0,0,1,.26,6.8c1.6,1.773,2.584,3.155,2.584,5.9,0,9.664-5.9,10.435-11.5,11.066a5.922,5.922,0,0,1,1.7,4.647c0,3.375-.03,7.551-.03,8.372,0,.651.461,1.442,1.733,1.212A24.876,24.876,0,0,0,49.672,25C49.672,11.108,38.406.563,24.516.563ZM9.734,35.1c-.13.1-.1.33.07.521.16.16.391.23.521.1.13-.1.1-.33-.07-.521C10.095,35.042,9.864,34.972,9.734,35.1Zm-1.082-.811c-.07.13.03.29.23.391a.3.3,0,0,0,.431-.07c.07-.13-.03-.29-.23-.391C8.883,34.161,8.723,34.191,8.653,34.291ZM11.9,37.857c-.16.13-.1.431.13.621.23.23.521.26.651.1.13-.13.07-.431-.13-.621C12.328,37.726,12.027,37.7,11.9,37.857Zm-1.142-1.472c-.16.1-.16.361,0,.591s.431.33.561.23a.457.457,0,0,0,0-.621C11.176,36.354,10.916,36.254,10.756,36.384Z" transform="translate(3.072 3.13)" fill="#02353c"/>
                        </g>
                        <g id="Group_35" data-name="Group 35" transform="translate(111.603 0)">
                            <rect id="Rectangle_86" data-name="Rectangle 86" width="55.815" height="55.815" rx="8" transform="translate(0 0)" fill="snow"/>
                            <path id="Icon_material-file-download" data-name="Icon material-file-download" d="M39.618,18.265H30.442V4.5H16.677V18.265H7.5L23.559,34.324ZM7.5,38.913V43.5H39.618V38.913Z" transform="translate(4.349 5.236)" fill="#02353c"/>
                        </g>
                    </svg>
                </div>
            </div>

        </div>
    </div>
    <div id="about-me" class="about-me-container">
        <div class="about-me-text-container">
            <h1>About me</h1>
            <p>
                Hi I'm Scott Zico van den Broek, I am a Software Development student at
                Mediacollege Amsterdam. I chose this study because I like to work project-based
                and I like to solve problems.
            </p>
            <p>
                I have experience with frontend-, backend- and game-development. My expertise
                lies with the back-end, because I think it is the most interesting side of this industry
                and the most chalenging. I also folowed some game-development lessons, but I
                quickly realised that it is not my cup of tea.
            </p>
            <p>
                In the future I would like to learn even more about the backend of websites and
                databases and I hope to be better at front-end development.
            </p>
            <a href="#"><button class="button-dark">CV</button></a>
        </div>
        <div class="about-me-image-container">
            <img src="Images/Portret.png" alt="Portret">
        </div>
    </div>
    <div id="experience" class="experience-container">
        <h1>Experience</h1>
        <div class="language-container">
            <div class="language"><svg xmlns="http://www.w3.org/2000/svg" width="400" height="135" viewBox="0 0 400 135">
                <g id="Group_45" data-name="Group 45" transform="translate(-502.4 -3485.604)">
                    <text id="HTML" transform="translate(665.254 3537.604)" fill="#02353c" font-size="49" font-family="TradeGothicNextLTPro-Bd, Trade Gothic Next LT Pro"><tspan x="0" y="0">HTML</tspan></text>
                    <rect id="Rectangle_77" data-name="Rectangle 77" width="233.301" height="55.189" rx="4" transform="translate(669.099 3565.414)" fill="#02353c"/>
                    <text id="_2_Years" data-name="2 Years" transform="translate(731.254 3604.431)" fill="snow" font-size="32" font-family="TradeGothicNextLTPro-Rg, Trade Gothic Next LT Pro"><tspan x="0" y="0">2 Years</tspan></text>
                    <path id="Icon_awesome-html5" data-name="Icon awesome-html5" d="M0,2.25,9.089,105.323,49.87,118.916l41.042-13.594L100,2.25ZM80.26,35.557H32.4l1.068,12.865H79.193L75.651,87.067,50.156,94.1v.078H49.87l-25.7-7.109L22.6,67.328H35.026l.911,9.922L49.87,81.026,63.854,77.25l1.562-16.2H21.953L18.62,23.135H81.406Z" transform="translate(502.4 3493.586)" fill="#02353c"/>
                </g>
            </svg>

            </div>
            <div class="language"><svg xmlns="http://www.w3.org/2000/svg" width="400" height="135" viewBox="0 0 400 135">
                <g id="Group_46" data-name="Group 46" transform="translate(-1069.844 -3500.268)">
                    <path id="Icon_simple-javascript" data-name="Icon simple-javascript" d="M0,0H112V117H0ZM102.823,89.094c-.817-5.338-4.144-9.823-14.014-14.006-3.435-1.682-7.252-2.852-8.386-5.557a6,6,0,0,1-.215-3.437c.7-3.149,4.27-4.095,7.07-3.217a7.722,7.722,0,0,1,4.555,4.387c4.825-3.3,4.825-3.3,8.19-5.484a20.055,20.055,0,0,0-2.735-3.8c-2.94-3.437-6.855-5.192-13.225-5.041l-3.29.434a14.929,14.929,0,0,0-7.98,4.9c-5.32,6.294-3.785,17.262,2.655,21.8,6.37,4.972,15.684,6.064,16.874,10.749,1.12,5.7-4.06,7.532-9.174,6.874-3.785-.877-5.88-2.857-8.19-6.513L66.419,96.3c.98,2.34,2.1,3.359,3.78,5.406,8.12,8.56,28.419,8.122,32.064-4.894a17.2,17.2,0,0,0,.345-8.044l.215.327ZM60.9,53.775H50.413c0,9.448-.042,18.837-.042,28.3,0,6.006.294,11.519-.644,13.216-1.54,3.359-5.507,2.93-7.308,2.34a9.231,9.231,0,0,1-3.873-4.168,4.2,4.2,0,0,0-.593-.955l-8.516,5.484a17.036,17.036,0,0,0,6.179,7.4,19.767,19.767,0,0,0,14.966,1.974,13.215,13.215,0,0,0,8.451-6.879c2.38-4.534,1.876-10.091,1.853-16.312.056-10.013,0-20.031,0-30.122l.019-.273Z" transform="translate(1069.844 3508.098)" fill="#02353c"/>
                    <text id="JavaScript" transform="translate(1236.543 3553.268)" fill="#02353c" font-size="50" font-family="TradeGothicNextLTPro-Bd, Trade Gothic Next LT Pro"><tspan x="0" y="0">JavaScript</tspan></text>
                    <rect id="Rectangle_78" data-name="Rectangle 78" width="233.301" height="55.189" rx="4" transform="translate(1236.543 3580.079)" fill="#02353c"/>
                    <text id="_2_Years" data-name="2 Years" transform="translate(1301.904 3619.096)" fill="snow" font-size="32" font-family="TradeGothicNextLTPro-Rg, Trade Gothic Next LT Pro"><tspan x="0" y="0">2 Years</tspan></text>
                </g>
            </svg>

            </div>
            <div class="language"><svg xmlns="http://www.w3.org/2000/svg" width="400" height="135" viewBox="0 0 400 135">
                <g id="Group_52" data-name="Group 52" transform="translate(-502.4 -3685.456)">
                    <path id="Icon_awesome-css3-alt" data-name="Icon awesome-css3-alt" d="M0,2.25,9.089,105.323,50,118.916l40.911-13.594L100,2.25ZM81.536,23.083,80.286,35.4,50.26,48.239l-.078.026H79.219L75.885,86.442,50.313,93.916l-25.729-7.6L22.917,67.067H35.651l.833,9.974,13.7,3.464,14.245-4.01.964-16.042-43.307-.13V60.3l-.052.026-.938-12.057L50.286,36.1l1.693-.7H19.974l-1.51-12.318Z" transform="translate(502.4 3692.442)" fill="#02353c"/>
                    <text id="CSS" transform="translate(669.099 3738.456)" fill="#02353c" font-size="50" font-family="TradeGothicNextLTPro-Bd, Trade Gothic Next LT Pro"><tspan x="0" y="0">CSS</tspan></text>
                    <rect id="Rectangle_79" data-name="Rectangle 79" width="233.301" height="55.189" rx="4" transform="translate(669.099 3765.267)" fill="#02353c"/>
                    <text id="_2_Years" data-name="2 Years" transform="translate(731.254 3804.284)" fill="snow" font-size="32" font-family="TradeGothicNextLTPro-Rg, Trade Gothic Next LT Pro"><tspan x="0" y="0">2 Years</tspan></text>
                </g>
            </svg>

            </div>
            <div class="language"><svg xmlns="http://www.w3.org/2000/svg" width="400" height="135" viewBox="0 0 400 135">
                <g id="Group_47" data-name="Group 47" transform="translate(-1066 -3693.655)">
                    <path id="Icon_awesome-python" data-name="Icon awesome-python" d="M114.215,45.458c-2-7.924-5.791-13.9-13.868-13.9H89.933V43.714A17.7,17.7,0,0,1,72.585,61.1H44.85A14.061,14.061,0,0,0,30.982,75.024v26.1c0,7.436,6.544,11.8,13.868,13.924a47.236,47.236,0,0,0,27.736,0c6.986-2,13.868-6.026,13.868-13.924V90.691H58.743V87.2h41.6c8.077,0,11.063-5.564,13.868-13.9,2.909-8.59,2.779-16.847,0-27.848ZM74.325,97.64a5.218,5.218,0,1,1-5.22,5.205A5.215,5.215,0,0,1,74.325,97.64ZM43.577,57.664H71.313A13.892,13.892,0,0,0,85.181,43.74V17.61c0-7.436-6.337-13-13.868-14.257a86.68,86.68,0,0,0-27.736.026C31.839,5.43,29.709,9.712,29.709,17.636V28.072H57.471V31.56H19.3c-8.077,0-15.14,4.8-17.348,13.9C-.6,55.894-.7,62.408,1.948,73.306c1.974,8.1,6.674,13.9,14.751,13.9h9.531V74.69C26.229,65.639,34.15,57.664,43.577,57.664ZM41.837,21.1a5.218,5.218,0,1,1,5.22-5.205A5.215,5.215,0,0,1,41.837,21.1Z" transform="translate(1066 3701.522)" fill="#02353c"/>
                    <text id="Python" transform="translate(1232.699 3746.655)" fill="#02353c" font-size="50" font-family="TradeGothicNextLTPro-Bd, Trade Gothic Next LT Pro"><tspan x="0" y="0">Python</tspan></text>
                    <rect id="Rectangle_80" data-name="Rectangle 80" width="233.301" height="55.189" rx="4" transform="translate(1232.699 3773.465)" fill="#02353c"/>
                    <text id="_2_Years" data-name="2 Years" transform="translate(1298.961 3812.482)" fill="snow" font-size="32" font-family="TradeGothicNextLTPro-Rg, Trade Gothic Next LT Pro"><tspan x="0" y="0">2 Years</tspan></text>
                </g>
            </svg>

            </div>
            <div class="language"><svg xmlns="http://www.w3.org/2000/svg" width="400" height="135" viewBox="0 0 400 135">
                <g id="Group_51" data-name="Group 51" transform="translate(-481.778 -3885.309)">
                    <path id="Icon_simple-php" data-name="Icon simple-php" d="M43.016,33.129H37.224l-3.16,14.413h5.142q5.118,0,7.621-1.709a8.835,8.835,0,0,0,3.375-5.71q.847-3.837-.761-5.416c-1.074-1.051-3.209-1.578-6.425-1.578Zm30.621-24.6C32.971,8.532,0,23.914,0,42.888S32.971,77.25,73.637,77.25s73.637-15.387,73.637-34.362S114.3,8.532,73.637,8.532Zm-20,40.556a15.362,15.362,0,0,1-5.627,3,29.361,29.361,0,0,1-7.885.893H32.873l-2.007,9.15H22.41L29.958,27.7H46.22q7.336,0,10.7,3.418t2.025,9.536a14.353,14.353,0,0,1-1.872,4.61A16.022,16.022,0,0,1,53.632,49.088ZM78.326,52.98l3.332-15.235c.387-1.731.239-2.917-.417-3.543s-2.062-.947-4.216-.947h-6.7L66,52.985H57.609l7.548-34.438h8.389L71.539,27.7h7.474q7.06,0,9.732,2.183t1.614,7.07L86.849,52.98Zm46.619-12.328a14.08,14.08,0,0,1-1.872,4.61,16.022,16.022,0,0,1-3.443,3.826,15.445,15.445,0,0,1-5.627,3,29.378,29.378,0,0,1-7.891.893H98.87l-2.007,9.155H88.408L95.956,27.7h16.255q7.336,0,10.7,3.418t2.031,9.531ZM109.02,33.129h-5.787l-3.166,14.413h5.142q5.127,0,7.621-1.709a8.865,8.865,0,0,0,3.381-5.71c.565-2.558.3-4.365-.767-5.416s-3.215-1.578-6.425-1.578Z" transform="translate(481.778 3915.657)" fill="#02353c"/>
                    <text id="PHP" transform="translate(645.573 3938.309)" fill="#02353c" font-size="50" font-family="TradeGothicNextLTPro-Bd, Trade Gothic Next LT Pro"><tspan x="0" y="0">PHP</tspan></text>
                    <rect id="Rectangle_81" data-name="Rectangle 81" width="233.301" height="55.189" rx="4" transform="translate(648.477 3965.12)" fill="#02353c"/>
                    <text id="_1_Year" data-name="1 Year" transform="translate(719.676 4006.646)" fill="snow" font-size="32" font-family="TradeGothicNextLTPro-Rg, Trade Gothic Next LT Pro"><tspan x="0" y="0">1 Year</tspan></text>
                </g>
            </svg>

            </div>
            <div class="language"><svg xmlns="http://www.w3.org/2000/svg" width="400" height="135" viewBox="0 0 400 135">
                <g id="Group_48" data-name="Group 48" transform="translate(-1070.5 -3894.508)">
                    <path id="Icon_simple-unity" data-name="Icon simple-unity" d="M92.769,89.133,72.723,55.708,92.769,22.283l9.79,33.425Zm-44.287-3.25-25.173-24.6H63.4L83.445,94.7l-34.963-8.82Zm0-60.815,34.963-8.82L63.4,49.673H22.843c0,.464,25.64-24.6,25.64-24.6ZM99.762,0,54.076,11.606,47.084,23.212H33.565L0,55.708,33.565,88.2H47.084L53.61,99.811,99.3,111.417l12.121-44.1L104.89,55.708,111.882,44.1Z" transform="translate(1070.5 3908.091)" fill="#02353c"/>
                    <text id="Unity_C_" data-name="Unity/C#" transform="translate(1237.199 3947.508)" fill="#02353c" font-size="50" font-family="TradeGothicNextLTPro-Bd, Trade Gothic Next LT Pro"><tspan x="0" y="0">Unity/C#</tspan></text>
                    <rect id="Rectangle_82" data-name="Rectangle 82" width="233.301" height="55.189" rx="4" transform="translate(1237.199 3974.318)" fill="#02353c"/>
                    <text id="_1_Year" data-name="1 Year" transform="translate(1301.867 4013.335)" fill="snow" font-size="32" font-family="TradeGothicNextLTPro-Rg, Trade Gothic Next LT Pro"><tspan x="0" y="0">1 Year</tspan></text>
                </g>
            </svg>

            </div>
            <div class="language"><svg xmlns="http://www.w3.org/2000/svg" width="400" height="135" viewBox="0 0 400 135">
                <g id="Group_50" data-name="Group 50" transform="translate(-484.9 -4077.499)">
                    <text id="Wordpress" transform="translate(651.599 4130.499)" fill="#02353c" font-size="50" font-family="TradeGothicNextLTPro-Bd, Trade Gothic Next LT Pro"><tspan x="0" y="0">Wordpress</tspan></text>
                    <rect id="Rectangle_107" data-name="Rectangle 107" width="233.301" height="55.189" rx="4" transform="translate(651.599 4157.309)" fill="#02353c"/>
                    <text id="_6_Months" data-name="6 Months" transform="translate(705.168 4201.835)" fill="snow" font-size="32" font-family="TradeGothicNextLTPro-Rg, Trade Gothic Next LT Pro"><tspan x="0" y="0">6 Months</tspan></text>
                    <path id="Icon_awesome-wordpress" data-name="Icon awesome-wordpress" d="M13.242,38.52,37.207,103.9A49.932,49.932,0,0,1,13.242,38.52Zm79.782,17.85c0-6.185-2.219-10.465-4.132-13.8-2.55-4.116-4.935-7.62-4.935-11.735,0-4.609,3.494-8.89,8.429-8.89.213,0,.425.024.661.047a50.352,50.352,0,0,0-75.91,9.407c1.181.047,2.29.071,3.235.071,5.242,0,13.388-.635,13.388-.635a2.065,2.065,0,0,1,.331,4.116s-2.715.306-5.738.47L46.651,89.6l11-32.83L49.839,35.415c-2.715-.165-5.265-.47-5.265-.47-2.715-.165-2.385-4.28.307-4.116,0,0,8.288.635,13.222.635,5.242,0,13.388-.635,13.388-.635a2.065,2.065,0,0,1,.331,4.116s-2.715.306-5.738.47L84.24,89.2l5.006-16.674C91.371,65.612,93.024,60.65,93.024,56.369ZM59.992,63.26,44.928,106.885a50.24,50.24,0,0,0,30.86-.8,3.743,3.743,0,0,1-.354-.682L59.992,63.26ZM103.2,34.874a38.827,38.827,0,0,1,.331,5.15,46.841,46.841,0,0,1-3.825,17.92L84.358,102.134A49.959,49.959,0,0,0,103.2,34.874Zm14.474,24.011A58.556,58.556,0,1,1,59.118.563,58.505,58.505,0,0,1,117.674,58.886Zm-2.692,0a55.864,55.864,0,1,0-55.864,55.642A55.82,55.82,0,0,0,114.982,58.886Z" transform="translate(484.337 4086.29)" fill="#02353c"/>
                </g>
            </svg>

            </div>
            <div class="language"><svg xmlns="http://www.w3.org/2000/svg" width="400" height="135" viewBox="0 0 400 135">
                <g id="Group_49" data-name="Group 49" transform="translate(-1049.7 -4078.499)">
                    <text id="Laravel" transform="translate(1216.399 4131.499)" fill="#02353c" font-size="50" font-family="TradeGothicNextLTPro-Bd, Trade Gothic Next LT Pro"><tspan x="0" y="0">Laravel</tspan></text>
                    <rect id="Rectangle_108" data-name="Rectangle 108" width="233.301" height="55.189" rx="4" transform="translate(1216.399 4158.309)" fill="#02353c"/>
                    <text id="_6_Months" data-name="6 Months" transform="translate(1268.05 4199.904)" fill="snow" font-size="32" font-family="TradeGothicNextLTPro-Rg, Trade Gothic Next LT Pro"><tspan x="0" y="0">6 Months</tspan></text>
                    <path id="Icon_awesome-laravel" data-name="Icon awesome-laravel" d="M132.127,45c-.87-.995-13.015-16.185-15.149-18.755s-3.191-2.114-4.5-1.927c-1.326.187-16.683,2.777-18.465,3.067-1.782.311-2.9,1.015-1.8,2.549.974,1.368,11.067,15.688,13.3,18.838L65.375,58.389,33.419,5.025c-1.264-1.886-1.534-2.549-4.435-2.4-2.9.124-25.055,1.969-26.63,2.114C.779,4.859-.962,5.564.613,9.294S27.347,67.238,28.052,68.813s2.528,4.145,6.8,3.109c4.373-1.057,19.543-5.015,27.832-7.191,4.373,7.937,13.3,24.019,14.963,26.319,2.2,3.088,3.73,2.57,7.108,1.534,2.653-.808,41.365-14.735,43.106-15.439,1.741-.725,2.818-1.223,1.637-2.984-.87-1.285-11.087-14.963-16.434-22.133,3.668-.974,16.7-4.435,18.092-4.829,1.637-.414,1.865-1.2.974-2.2ZM59.138,59.923c-.477.1-22.962,5.492-24.164,5.761s-1.2.145-1.347-.269S6.893,10.144,6.52,9.46s-.352-1.223,0-1.223S27.762,6.372,28.487,6.331c.746-.041.663.124.933.58,0,0,29.469,50.856,29.967,51.748C59.925,59.55,59.614,59.819,59.138,59.923Zm63.415,11.9c.352.56.725.933-.414,1.326-1.119.414-38.07,12.87-38.774,13.18-.725.311-1.285.414-2.2-.933S68.235,63.259,68.235,63.259l39.127-10.175c.974-.311,1.285-.518,1.907.456.6.995,12.932,17.719,13.284,18.278Zm2.508-27.791c-.87.187-15.253,3.751-15.253,3.751L98.057,31.655c-.332-.477-.6-.933.228-1.036s14.175-2.528,14.776-2.653c.6-.145,1.119-.311,1.865.7s10.9,13.885,11.295,14.382C126.594,43.53,125.931,43.82,125.06,44.028Z" transform="translate(1049.706 4098.848)" fill="#02353c"/>
                </g>
            </svg>

            </div>
        </div>
    </div>
    <div id="contact" class="contact-container">
        <form class="contact-form" action="contactform.php" method="post">
            <h1>Contact</h1>
            <div class="row-100">
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="first-name" required="required">
                        <span class="contact-text">First Name</span>
                    </div>
                </div>
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="last-name" required="required">
                        <span class="contact-text">Last Name</span>
                    </div>
                </div>
            </div>
            <div class="row-100">
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="mail" required="required">
                        <span class="contact-text">Email</span>
                    </div>
                </div>
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="phone" required="">
                        <span class="contact-text">Phone Number</span>
                    </div>
                </div>
            </div>
            <div class="row-100">
                <div class="col">
                    <div class="inputBox textarea">
                        <textarea name="message" required="required"></textarea>
                        <span class="contact-text">Message</span>
                    </div>
                </div>
            </div>
            <div class="row-100">
                <div class="col">
                    <button type="submit" name="submit" class="button-light">Send</button>
                </div>
            </div>
        </form>
    </div>
    <div class="footer">
        <h2 class="footer-item">Scott Zico van den Broek</h2>
        <div class="footer-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="161.559" height="32.312" viewBox="0 0 161.559 32.312">
                <g id="Group_65" data-name="Group 65" transform="translate(-886.998 -2715.059)">
                    <a class="footer-social" target="_blank" href="https://www.linkedin.com/in/scott-van-den-broek-03a11a224/">
                        <path id="Icon_awesome-linkedin" data-name="Icon awesome-linkedin" d="M30,2.25H2.3A2.318,2.318,0,0,0,0,4.58V32.232a2.318,2.318,0,0,0,2.3,2.33H30a2.324,2.324,0,0,0,2.308-2.33V4.58A2.324,2.324,0,0,0,30,2.25ZM9.766,29.946H4.977V14.526h4.8v15.42ZM7.371,12.42a2.777,2.777,0,1,1,2.777-2.777A2.778,2.778,0,0,1,7.371,12.42ZM27.718,29.946H22.928v-7.5c0-1.789-.036-4.089-2.488-4.089-2.5,0-2.878,1.947-2.878,3.96v7.631H12.773V14.526h4.594v2.106h.065a5.044,5.044,0,0,1,4.537-2.488c4.847,0,5.748,3.2,5.748,7.35Z" transform="translate(951.622 2712.81)" fill="#fff"/>
                    </a>
                    <a class="footer-social" target="_blank" href="mailto:scottzico2004@gmail.com">
                        <g id="Group_25" data-name="Group 25" transform="translate(886.998 2715.06)">
                            <rect id="Rectangle_63" data-name="Rectangle 63" width="32.312" height="32.312" rx="2" transform="translate(0 0)" fill="#fff"/>
                            <path id="Icon_material-email" data-name="Icon material-email" d="M24.008,6H5.334A2.307,2.307,0,0,0,3.012,8.286L3,22a2.317,2.317,0,0,0,2.334,2.286H24.008A2.317,2.317,0,0,0,26.342,22V8.286A2.317,2.317,0,0,0,24.008,6Zm0,4.571-9.337,5.714L5.334,10.571V8.286L14.671,14l9.337-5.714Z" transform="translate(1.485 1.013)" fill="#02353c"/>
                        </g>
                    </a>
                    <a class="footer-social" target="_blank" href="https://github.com/ScottZ2004">
                        <g id="Group_26" data-name="Group 26" transform="translate(1016.245 2715.06)">
                            <rect id="Rectangle_64" data-name="Rectangle 64" width="32.312" height="32.312" rx="2" transform="translate(0 0)" fill="#fff"/>
                            <path id="Icon_awesome-github" data-name="Icon awesome-github" d="M9.618,23.138c0,.116-.133.209-.3.209-.191.017-.325-.075-.325-.209,0-.116.133-.209.3-.209C9.467,22.912,9.618,23,9.618,23.138Zm-1.8-.261c-.041.116.075.249.249.284a.272.272,0,0,0,.359-.116c.035-.116-.075-.249-.249-.3A.3.3,0,0,0,7.815,22.877Zm2.562-.1c-.168.041-.284.151-.267.284.017.116.168.191.342.151s.284-.151.267-.267S10.546,22.761,10.377,22.778ZM14.192.563A13.9,13.9,0,0,0,0,14.708,14.535,14.535,0,0,0,9.827,28.576c.742.133,1-.325,1-.7,0-.359-.017-2.342-.017-3.56,0,0-4.058.87-4.91-1.728,0,0-.661-1.687-1.612-2.122,0,0-1.328-.91.093-.893a3.06,3.06,0,0,1,2.238,1.5,3.065,3.065,0,0,0,4.226,1.212,3.222,3.222,0,0,1,.928-1.954c-3.241-.359-6.511-.829-6.511-6.406a4.394,4.394,0,0,1,1.368-3.415,5.478,5.478,0,0,1,.151-3.936c1.212-.377,4,1.565,4,1.565a13.7,13.7,0,0,1,7.282,0s2.789-1.948,4-1.565a5.475,5.475,0,0,1,.151,3.936,4.507,4.507,0,0,1,1.5,3.415c0,5.595-3.415,6.041-6.655,6.406a3.429,3.429,0,0,1,.986,2.69c0,1.954-.017,4.371-.017,4.847,0,.377.267.835,1,.7a14.4,14.4,0,0,0,9.728-13.856A14.215,14.215,0,0,0,14.192.563Zm-8.557,20c-.075.058-.058.191.041.3.093.093.226.133.3.058.075-.058.058-.191-.041-.3C5.844,20.523,5.71,20.483,5.635,20.558Zm-.626-.47c-.041.075.017.168.133.226a.172.172,0,0,0,.249-.041c.041-.075-.017-.168-.133-.226C5.142,20.013,5.05,20.03,5.009,20.088Zm1.878,2.064c-.093.075-.058.249.075.359.133.133.3.151.377.058.075-.075.041-.249-.075-.359C7.137,22.077,6.963,22.059,6.887,22.152ZM6.226,21.3c-.093.058-.093.209,0,.342s.249.191.325.133a.264.264,0,0,0,0-.359C6.47,21.283,6.319,21.225,6.226,21.3Z" transform="translate(1.778 1.575)" fill="#02353c"/>
                        </g>
                    </a>
                </g>
            </svg>
        </div>
        <div class="footer-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="175.817" height="36.86" viewBox="0 0 175.817 36.86">
                <g id="Group_29" data-name="Group 29" transform="translate(0 0)">
                    <path id="Icon_awesome-phone-square-alt" data-name="Icon awesome-phone-square-alt" d="M32.91,2.25H3.949A3.949,3.949,0,0,0,0,6.2V35.16A3.949,3.949,0,0,0,3.949,39.11H32.91A3.949,3.949,0,0,0,36.86,35.16V6.2A3.949,3.949,0,0,0,32.91,2.25ZM31.562,27.539l-1.234,5.348a1.234,1.234,0,0,1-1.2.957A23.862,23.862,0,0,1,5.266,9.984a1.292,1.292,0,0,1,.957-1.2L11.57,7.548a1.5,1.5,0,0,1,.277-.032,1.339,1.339,0,0,1,1.135.748l2.468,5.759a1.473,1.473,0,0,1,.1.486,1.4,1.4,0,0,1-.453.955L11.98,18.015a19.081,19.081,0,0,0,9.115,9.115l2.551-3.117a1.4,1.4,0,0,1,.955-.453,1.469,1.469,0,0,1,.486.1l5.759,2.468a1.337,1.337,0,0,1,.748,1.135,1.433,1.433,0,0,1-.032.277Z" transform="translate(0 -2.25)" fill="#fff"/>
                    <text id="_06-25082193" data-name="06-25082193" transform="translate(59.817 25.981)" fill="snow" font-size="19" font-family="TradeGothicNextLTPro-Bd, Trade Gothic Next LT Pro"><tspan x="0" y="0">06-25082193</tspan></text>
                </g>
            </svg>
        </div>
        <script src="script.js"></script>
    </div>
</body>
</html>