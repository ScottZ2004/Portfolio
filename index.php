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
            <div id="open_TSO" class="Project">
                <img src="Images/Projecten/the%20story%20of.png" alt="">
                <div class="Project__text">
                    <h3>My first coding project, a text-based application.</h3>
                    <a>Learn More</a>
                </div>
            </div>
            <div id="open_LAM" class="Project">
                <img src="Images/Projecten/Lam-foto.png" alt="">
                <div class="Project__text">
                    <h3>My first website, a Landingspage with a quiz.</h3>
                    <a>Learn More</a>
                </div>
            </div>
            <div id="open_HFL" class="Project">
                <img src="Images/Projecten/Hunt%20for%20life.png" alt="">
                <div class="Project__text">
                    <h3>My first unity game, a top-down puzzle game.</h3>
                    <a>Learn More</a>
                </div>
            </div>
            <div id="open_ES" class="Project">
                <img src="Images/Projecten/Expanding%20space.png" alt="">
                <div class="Project__text">
                    <h3>My second unity game, a 2d platformer.</h3>
                    <a>Learn More</a>
                </div>
            </div>
            <div id="open_TC" class="Project">
                <img src="Images/Projecten/Transformers_community.png" alt="">
                <div class="Project__text">
                    <h3>My first backend project, a blog.</h3>
                    <a>Learn More</a>
                </div>
            </div>
            <div id="open_SM" class="Project">
                <img src="Images/Projecten/Stedlijk%20logo%20wit.png" alt="">
                <div class="Project__text">
                    <h3>My first Wordpress website, a landingspage with a online shop.</h3>
                    <a>Learn More</a>
                </div>
            </div>
            <div id="open_AP" class="Project">
                <img src="Images/Projecten/Activity-planner.png" alt="">
                <div class="Project__text">
                    <h3>My solo backend project, an activity planner.</h3>
                    <a>Learn More</a>
                </div>
            </div>
            <div id="open_CW" class="Project">
                <img src="Images/Projecten/ChristmasWishList.png    " alt="">
                <div class="Project__text">
                    <h3>My Christmas WishList project, I used a Laravel Api and React</h3>
                    <a>Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-container" id="modal_container_TSO">
        <div class="modal">
            <p class="X" id="close_TSO">✕</p>
            <div class="modal-row">
                <h1>The Story Of</h1>
                <div class="modal-language">
                    <svg xmlns="http://www.w3.org/2000/svg" width="114.6912" height="112.1656" viewBox="0 0 143.364 140.207">
                        <path id="Icon_awesome-python" data-name="Icon awesome-python" d="M140.736,54.983c-2.464-9.67-7.136-16.962-17.088-16.962H110.816V52.855c0,11.517-9.984,21.218-21.376,21.218H55.264A17.243,17.243,0,0,0,38.176,91.066v31.859c0,9.076,8.064,14.4,17.088,16.993a58.741,58.741,0,0,0,34.176,0c8.608-2.441,17.088-7.354,17.088-16.993V110.188H72.384v-4.256h51.264c9.952,0,13.632-6.791,17.088-16.962,3.584-10.484,3.424-20.561,0-33.987ZM91.584,118.668a6.369,6.369,0,1,1-6.432,6.353A6.4,6.4,0,0,1,91.584,118.668ZM53.7,69.879H87.872A17.036,17.036,0,0,0,104.96,52.886V21c0-9.076-7.808-15.867-17.088-17.4A107.824,107.824,0,0,0,53.7,3.627c-14.464,2.5-17.088,7.73-17.088,17.4V33.765H70.816v4.256H23.776c-9.952,0-18.656,5.852-21.376,16.962C-.736,67.72-.864,75.669,2.4,88.969c2.432,9.889,8.224,16.962,18.176,16.962H32.32V90.659C32.32,79.612,42.08,69.879,53.7,69.879ZM51.552,25.252A6.369,6.369,0,1,1,57.984,18.9,6.4,6.4,0,0,1,51.552,25.252Z" transform="translate(0 -2.25)" fill="snow"/>
                    </svg>
                </div>
            </div>
            <div class="modal-row">
                <p>
                    The Story of is my first coding project I have done.
                    The assignment was to make a text-based application
                    in python about a refugee from a war zone.
                    <br>
                    <br>
                    Because I had no experience with coding before this
                    project, I had to learn the basics. Python was a good
                    choice because it's very easy to learn and it's very
                    newcomer friendly.
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
                    <svg id="Group_26" data-name="Group 26" xmlns="http://www.w3.org/2000/svg" width="55.815" height="55.815" viewBox="0 0 55.815 55.815">
                        <g onclick="window.open('https://github.com/ScottZ2004/F1M1BO')">
                            <rect id="Rectangle_64" data-name="Rectangle 64" width="55.815" height="55.815" rx="10" transform="translate(0 0)" fill="#fff"/>
                            <path id="Icon_awesome-github" data-name="Icon awesome-github" d="M16.614,39.559c0,.2-.23.361-.521.361-.33.03-.561-.13-.561-.361,0-.2.23-.361.521-.361C16.354,39.168,16.614,39.329,16.614,39.559ZM13.5,39.108c-.07.2.13.431.431.491a.47.47,0,0,0,.621-.2c.06-.2-.13-.431-.431-.521A.514.514,0,0,0,13.5,39.108Zm4.426-.17c-.29.07-.491.26-.461.491.03.2.29.33.591.26s.491-.26.461-.461S18.216,38.908,17.926,38.938ZM24.516.563A24.014,24.014,0,0,0,0,25,25.107,25.107,0,0,0,16.975,48.953c1.282.23,1.733-.561,1.733-1.212,0-.621-.03-4.046-.03-6.149,0,0-7.01,1.5-8.482-2.984,0,0-1.142-2.914-2.784-3.665,0,0-2.293-1.572.16-1.542a5.286,5.286,0,0,1,3.866,2.584c2.193,3.866,5.868,2.754,7.3,2.093a5.566,5.566,0,0,1,1.6-3.375c-5.6-.621-11.246-1.432-11.246-11.066a7.59,7.59,0,0,1,2.363-5.9,9.462,9.462,0,0,1,.26-6.8c2.093-.651,6.91,2.7,6.91,2.7a23.658,23.658,0,0,1,12.578,0s4.817-3.365,6.91-2.7a9.457,9.457,0,0,1,.26,6.8c1.6,1.773,2.584,3.155,2.584,5.9,0,9.664-5.9,10.435-11.5,11.066a5.922,5.922,0,0,1,1.7,4.647c0,3.375-.03,7.551-.03,8.372,0,.651.461,1.442,1.733,1.212A24.876,24.876,0,0,0,49.672,25C49.672,11.108,38.406.563,24.516.563ZM9.734,35.1c-.13.1-.1.33.07.521.16.16.391.23.521.1.13-.1.1-.33-.07-.521C10.095,35.042,9.864,34.972,9.734,35.1Zm-1.082-.811c-.07.13.03.29.23.391a.3.3,0,0,0,.431-.07c.07-.13-.03-.29-.23-.391C8.883,34.161,8.723,34.191,8.653,34.291ZM11.9,37.857c-.16.13-.1.431.13.621.23.23.521.26.651.1.13-.13.07-.431-.13-.621C12.328,37.726,12.027,37.7,11.9,37.857Zm-1.142-1.472c-.16.1-.16.361,0,.591s.431.33.561.23a.457.457,0,0,0,0-.621C11.176,36.354,10.916,36.254,10.756,36.384Z" transform="translate(3.072 3.13)" fill="#02353c"/>
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
                <h1>Lisser Art Museum</h1>
                <div class="modal-language">
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
                    Start: November 24th 2020
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

                        <path onclick="window.open('https://trello.com/b/YpXCLgoI/landingspage-scott-colin')" id="Icon_awesome-trello" data-name="Icon awesome-trello" d="M48.878,2.25H6.992A6.984,6.984,0,0,0,0,9.227c-.012,0,0-.5,0,41.862a6.981,6.981,0,0,0,6.977,6.977H48.866a6.982,6.982,0,0,0,6.94-6.977V9.227A6.963,6.963,0,0,0,48.878,2.25ZM24.546,44.523a3.353,3.353,0,0,1-3.351,3.314h-10.3a3.339,3.339,0,0,1-3.364-3.314V12.852A3.352,3.352,0,0,1,10.879,9.5H21.207a3.352,3.352,0,0,1,3.351,3.351v31.67ZM48.6,30.569a3.352,3.352,0,0,1-3.351,3.351H35.161a3.352,3.352,0,0,1-3.351-3.351v-17.7a3.35,3.35,0,0,1,3.339-3.351h10.1A3.352,3.352,0,0,1,48.6,12.865v17.7Z" transform="translate(167.422 -2.25)" fill="#fff"/>
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
                <h1>Hunt For Life</h1>
                <div class="modal-language">
                    <svg xmlns="http://www.w3.org/2000/svg" width="128.027" height="128.027" viewBox="0 0 128.027 128.027">
                        <path id="Icon_simple-unity" data-name="Icon simple-unity" d="M106.156,102.422,83.218,64.014l22.938-38.408,11.2,38.408ZM55.479,98.688,26.672,70.415H72.549l22.938,38.408L55.479,98.688Zm0-69.882L95.487,18.671,72.549,57.079H26.139c0,.533,29.34-28.273,29.34-28.273ZM114.158,0,61.88,13.336l-8,13.336H38.408L0,64.014l38.408,37.341h15.47l7.468,13.336,52.278,13.336,13.87-50.677-7.468-13.336,8-13.336Z" fill="snow"/>
                    </svg>
                </div>
            </div>
            <div class="modal-row">
                <p>
                    Hunt for life is the game I made with two classmates for the Arcade Mechanics module. The
                    assignment was to make an arcade game using
                    Unity and C#.
                    <br>
                    <br>
                    We decided to make a top-down movement puzzle
                    game about a ghost in a mansion. We chose to make
                    demo version of the game we had in mind, because
                    we wanted to complete one whole level in the limited
                    time we got instead of a few levels which were incomplete.
                    <br>
                    <br>
                    Group project
                    <br>
                    <br>
                    Start: March 1st 2021
                    <br>
                    End: April 13th 2021
                </p>
                <img src="Images/Projecten/HFL-game.png" alt="Verhaal van Amir">
            </div>
            <div class="modal-row">
                <div class="modal-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="139.014" height="55.816" viewBox="0 0 139.014 55.816">
                        <g id="Group_66" data-name="Group 66" transform="translate(-615.993 -788)">
                            <g id="Group_26" data-name="Group 26" transform="translate(615.993 788)" onclick="window.open('https://github.com/ScottZ2004/Beroepsopdracht-ArcadeMechanics')">
                                <rect id="Rectangle_64" data-name="Rectangle 64" width="55.815" height="55.815" rx="10" transform="translate(0 0)" fill="#fff"/>
                                <path id="Icon_awesome-github" data-name="Icon awesome-github" d="M16.614,39.559c0,.2-.23.361-.521.361-.33.03-.561-.13-.561-.361,0-.2.23-.361.521-.361C16.354,39.168,16.614,39.329,16.614,39.559ZM13.5,39.108c-.07.2.13.431.431.491a.47.47,0,0,0,.621-.2c.06-.2-.13-.431-.431-.521A.514.514,0,0,0,13.5,39.108Zm4.426-.17c-.29.07-.491.26-.461.491.03.2.29.33.591.26s.491-.26.461-.461S18.216,38.908,17.926,38.938ZM24.516.563A24.014,24.014,0,0,0,0,25,25.107,25.107,0,0,0,16.975,48.953c1.282.23,1.733-.561,1.733-1.212,0-.621-.03-4.046-.03-6.149,0,0-7.01,1.5-8.482-2.984,0,0-1.142-2.914-2.784-3.665,0,0-2.293-1.572.16-1.542a5.286,5.286,0,0,1,3.866,2.584c2.193,3.866,5.869,2.754,7.3,2.093a5.566,5.566,0,0,1,1.6-3.375c-5.6-.621-11.246-1.432-11.246-11.066a7.59,7.59,0,0,1,2.363-5.9,9.462,9.462,0,0,1,.26-6.8c2.093-.651,6.91,2.7,6.91,2.7a23.658,23.658,0,0,1,12.578,0s4.817-3.365,6.91-2.7a9.457,9.457,0,0,1,.26,6.8c1.6,1.773,2.584,3.155,2.584,5.9,0,9.664-5.9,10.435-11.5,11.066a5.922,5.922,0,0,1,1.7,4.647c0,3.375-.03,7.551-.03,8.372,0,.651.461,1.442,1.733,1.212A24.876,24.876,0,0,0,49.672,25C49.672,11.108,38.406.563,24.516.563ZM9.734,35.1c-.13.1-.1.33.07.521.16.16.391.23.521.1.13-.1.1-.33-.07-.521C10.095,35.042,9.864,34.972,9.734,35.1Zm-1.082-.811c-.07.13.03.29.23.391a.3.3,0,0,0,.431-.07c.07-.13-.03-.29-.23-.391C8.883,34.161,8.723,34.191,8.653,34.291ZM11.9,37.857c-.16.13-.1.431.13.621.23.23.521.26.651.1.13-.13.07-.431-.13-.621C12.328,37.726,12.027,37.7,11.9,37.857Zm-1.142-1.472c-.16.1-.16.361,0,.591s.431.33.561.23a.457.457,0,0,0,0-.621C11.176,36.354,10.916,36.254,10.756,36.384Z" transform="translate(3.072 3.13)" fill="#02353c"/>
                            </g>
                            <path onclick="window.open('https://trello.com/b/ND0pyn8y/arcade-mechanics')" id="Icon_awesome-trello" data-name="Icon awesome-trello" d="M48.878,2.25H6.992A6.984,6.984,0,0,0,0,9.227c-.012,0,0-.5,0,41.862a6.981,6.981,0,0,0,6.977,6.977H48.866a6.982,6.982,0,0,0,6.94-6.977V9.227A6.963,6.963,0,0,0,48.878,2.25ZM24.546,44.523a3.353,3.353,0,0,1-3.351,3.314h-10.3a3.339,3.339,0,0,1-3.364-3.314V12.852A3.352,3.352,0,0,1,10.879,9.5H21.207a3.352,3.352,0,0,1,3.351,3.351v31.67ZM48.6,30.569a3.352,3.352,0,0,1-3.351,3.351H35.161a3.352,3.352,0,0,1-3.351-3.351v-17.7a3.35,3.35,0,0,1,3.339-3.351h10.1A3.352,3.352,0,0,1,48.6,12.865v17.7Z" transform="translate(699.202 785.75)" fill="#fff"/>
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
                <h1>Expanding Space</h1>
                <div class="modal-language">
                    <svg xmlns="http://www.w3.org/2000/svg" width="128.027" height="128.027" viewBox="0 0 128.027 128.027">
                        <path id="Icon_simple-unity" data-name="Icon simple-unity" d="M106.156,102.422,83.218,64.014l22.938-38.408,11.2,38.408ZM55.479,98.688,26.672,70.415H72.549l22.938,38.408L55.479,98.688Zm0-69.882L95.487,18.671,72.549,57.079H26.139c0,.533,29.34-28.273,29.34-28.273ZM114.158,0,61.88,13.336l-8,13.336H38.408L0,64.014l38.408,37.341h15.47l7.468,13.336,52.278,13.336,13.87-50.677-7.468-13.336,8-13.336Z" fill="snow"/>
                    </svg>
                </div>
            </div>
            <div class="modal-row">
                <p>
                    Expaning space is a game I build with game artists and
                    other developers. The assignment was to make a game
                    in the theme of space. We chose to make a 2D platformer,
                    our main mechanic was the that the player could dig up to
                    other places or dig important items up.
                    <br>
                    <br>
                    In this project I worked on the main menu and on the travel
                    game, the travel game is the mini-game you go through if you
                    go to another planet.
                    <br>
                    <br>
                    Group project
                    <br>
                    <br>
                    Start: April 26th 2021
                    <br>
                    End: July 2nd 2021
                </p>
                <img src="Images/Projecten/Expanding-space-gameplay.png" alt="Verhaal van Amir">
            </div>
            <div class="modal-row">
                <div class="modal-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="139.014" height="55.816" viewBox="0 0 139.014 55.816">
                        <g id="Group_66" data-name="Group 66" transform="translate(-615.993 -788)">
                            <g id="Group_26" data-name="Group 26" transform="translate(615.993 788)" onclick="window.open('https://github.com/lucasvdiepen/ExpandingSpace')">
                                <rect id="Rectangle_64" data-name="Rectangle 64" width="55.815" height="55.815" rx="10" transform="translate(0 0)" fill="#fff"/>
                                <path id="Icon_awesome-github" data-name="Icon awesome-github" d="M16.614,39.559c0,.2-.23.361-.521.361-.33.03-.561-.13-.561-.361,0-.2.23-.361.521-.361C16.354,39.168,16.614,39.329,16.614,39.559ZM13.5,39.108c-.07.2.13.431.431.491a.47.47,0,0,0,.621-.2c.06-.2-.13-.431-.431-.521A.514.514,0,0,0,13.5,39.108Zm4.426-.17c-.29.07-.491.26-.461.491.03.2.29.33.591.26s.491-.26.461-.461S18.216,38.908,17.926,38.938ZM24.516.563A24.014,24.014,0,0,0,0,25,25.107,25.107,0,0,0,16.975,48.953c1.282.23,1.733-.561,1.733-1.212,0-.621-.03-4.046-.03-6.149,0,0-7.01,1.5-8.482-2.984,0,0-1.142-2.914-2.784-3.665,0,0-2.293-1.572.16-1.542a5.286,5.286,0,0,1,3.866,2.584c2.193,3.866,5.869,2.754,7.3,2.093a5.566,5.566,0,0,1,1.6-3.375c-5.6-.621-11.246-1.432-11.246-11.066a7.59,7.59,0,0,1,2.363-5.9,9.462,9.462,0,0,1,.26-6.8c2.093-.651,6.91,2.7,6.91,2.7a23.658,23.658,0,0,1,12.578,0s4.817-3.365,6.91-2.7a9.457,9.457,0,0,1,.26,6.8c1.6,1.773,2.584,3.155,2.584,5.9,0,9.664-5.9,10.435-11.5,11.066a5.922,5.922,0,0,1,1.7,4.647c0,3.375-.03,7.551-.03,8.372,0,.651.461,1.442,1.733,1.212A24.876,24.876,0,0,0,49.672,25C49.672,11.108,38.406.563,24.516.563ZM9.734,35.1c-.13.1-.1.33.07.521.16.16.391.23.521.1.13-.1.1-.33-.07-.521C10.095,35.042,9.864,34.972,9.734,35.1Zm-1.082-.811c-.07.13.03.29.23.391a.3.3,0,0,0,.431-.07c.07-.13-.03-.29-.23-.391C8.883,34.161,8.723,34.191,8.653,34.291ZM11.9,37.857c-.16.13-.1.431.13.621.23.23.521.26.651.1.13-.13.07-.431-.13-.621C12.328,37.726,12.027,37.7,11.9,37.857Zm-1.142-1.472c-.16.1-.16.361,0,.591s.431.33.561.23a.457.457,0,0,0,0-.621C11.176,36.354,10.916,36.254,10.756,36.384Z" transform="translate(3.072 3.13)" fill="#02353c"/>
                            </g>
                            <path onclick="window.open('https://trello.com/b/wdwkflEx/expanding-space')" id="Icon_awesome-trello" data-name="Icon awesome-trello" d="M48.878,2.25H6.992A6.984,6.984,0,0,0,0,9.227c-.012,0,0-.5,0,41.862a6.981,6.981,0,0,0,6.977,6.977H48.866a6.982,6.982,0,0,0,6.94-6.977V9.227A6.963,6.963,0,0,0,48.878,2.25ZM24.546,44.523a3.353,3.353,0,0,1-3.351,3.314h-10.3a3.339,3.339,0,0,1-3.364-3.314V12.852A3.352,3.352,0,0,1,10.879,9.5H21.207a3.352,3.352,0,0,1,3.351,3.351v31.67ZM48.6,30.569a3.352,3.352,0,0,1-3.351,3.351H35.161a3.352,3.352,0,0,1-3.351-3.351v-17.7a3.35,3.35,0,0,1,3.339-3.351h10.1A3.352,3.352,0,0,1,48.6,12.865v17.7Z" transform="translate(699.202 785.75)" fill="#fff"/>
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
                <h1>Transformers Community</h1>
                <div class="modal-language">
                    <svg xmlns="http://www.w3.org/2000/svg" width="202.524" height="94.498" viewBox="0 0 202.524 94.498">
                        <path id="Icon_simple-php" data-name="Icon simple-php" d="M59.154,42.357H51.188l-4.346,19.82h7.071q7.038,0,10.481-2.35t4.641-7.852Q70.2,46.7,67.989,44.527c-1.477-1.445-4.413-2.171-8.835-2.171ZM101.262,8.532C45.34,8.532,0,29.685,0,55.777S45.34,103.03,101.262,103.03,202.524,81.87,202.524,55.777,157.184,8.532,101.262,8.532ZM73.753,64.3a21.126,21.126,0,0,1-7.738,4.124,40.376,40.376,0,0,1-10.843,1.228H45.205L42.446,82.237H30.817L41.2,34.887H63.559q10.088,0,14.717,4.7T81.06,52.7a19.738,19.738,0,0,1-2.574,6.34A22.033,22.033,0,0,1,73.753,64.3Zm33.957,5.352L112.291,48.7c.532-2.38.329-4.012-.574-4.873s-2.835-1.3-5.8-1.3H96.705L90.765,69.662H79.221L89.6,22.3h11.535l-2.759,12.59h10.278q9.709,0,13.383,3t2.219,9.723L119.43,69.655ZM171.817,52.7a19.362,19.362,0,0,1-2.574,6.34,22.033,22.033,0,0,1-4.734,5.262,21.239,21.239,0,0,1-7.738,4.124,40.4,40.4,0,0,1-10.852,1.228h-9.957L133.2,82.244H121.574l10.379-47.35h22.354q10.088,0,14.717,4.7,4.633,4.682,2.793,13.106Zm-21.9-10.344h-7.958l-4.354,19.82h7.071q7.05,0,10.481-2.35t4.65-7.852c.776-3.518.413-6-1.055-7.448s-4.422-2.171-8.835-2.171Z" transform="translate(0 -8.532)" fill="snow"/>
                    </svg>
                </div>
            </div>
            <div class="modal-row">
                <p>
                    This was the first project that I worked with a database
                    and a MVC. The Transformers community is a online
                    platform for teenagers and young adults with mental
                    health issues.
                    <br>
                    <br>
                    The assignment was to make a new website for the
                    Transformers community. This project I worked on
                    the backend of the website while my teammate worked
                    on the frontend. We build it in the framework Simplerouter
                    <br>
                    <br>
                    Duo project
                    <br>
                    <br>
                    Start: September 15th 2021
                    <br>
                    End: November 9th 2021
                </p>
                <img src="Images/Projecten/Transformers_community-site.png" alt="Verhaal van Amir">
            </div>
            <div class="modal-row">
                <div class="modal-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="223.227" height="55.816" viewBox="0 0 223.227 55.816">
                        <g id="Group_26" data-name="Group 26" onclick="window.open('https://github.com/Kipmevrouw/F2M5-BO')">
                            <rect id="Rectangle_64" data-name="Rectangle 64" width="55.815" height="55.815" rx="10" transform="translate(0 0)" fill="#fff"/>
                            <path id="Icon_awesome-github" data-name="Icon awesome-github" d="M16.614,39.559c0,.2-.23.361-.521.361-.33.03-.561-.13-.561-.361,0-.2.23-.361.521-.361C16.354,39.168,16.614,39.329,16.614,39.559ZM13.5,39.108c-.07.2.13.431.431.491a.47.47,0,0,0,.621-.2c.06-.2-.13-.431-.431-.521A.514.514,0,0,0,13.5,39.108Zm4.426-.17c-.29.07-.491.26-.461.491.03.2.29.33.591.26s.491-.26.461-.461S18.216,38.908,17.926,38.938ZM24.516.563A24.014,24.014,0,0,0,0,25,25.107,25.107,0,0,0,16.975,48.953c1.282.23,1.733-.561,1.733-1.212,0-.621-.03-4.046-.03-6.149,0,0-7.01,1.5-8.482-2.984,0,0-1.142-2.914-2.784-3.665,0,0-2.293-1.572.16-1.542a5.286,5.286,0,0,1,3.866,2.584c2.193,3.866,5.869,2.754,7.3,2.093a5.566,5.566,0,0,1,1.6-3.375c-5.6-.621-11.246-1.432-11.246-11.066a7.59,7.59,0,0,1,2.363-5.9,9.462,9.462,0,0,1,.26-6.8c2.093-.651,6.91,2.7,6.91,2.7a23.658,23.658,0,0,1,12.578,0s4.817-3.365,6.91-2.7a9.457,9.457,0,0,1,.26,6.8c1.6,1.773,2.584,3.155,2.584,5.9,0,9.664-5.9,10.435-11.5,11.066a5.922,5.922,0,0,1,1.7,4.647c0,3.375-.03,7.551-.03,8.372,0,.651.461,1.442,1.733,1.212A24.876,24.876,0,0,0,49.672,25C49.672,11.108,38.406.563,24.516.563ZM9.734,35.1c-.13.1-.1.33.07.521.16.16.391.23.521.1.13-.1.1-.33-.07-.521C10.095,35.042,9.864,34.972,9.734,35.1Zm-1.082-.811c-.07.13.03.29.23.391a.3.3,0,0,0,.431-.07c.07-.13-.03-.29-.23-.391C8.883,34.161,8.723,34.191,8.653,34.291ZM11.9,37.857c-.16.13-.1.431.13.621.23.23.521.26.651.1.13-.13.07-.431-.13-.621C12.328,37.726,12.027,37.7,11.9,37.857Zm-1.142-1.472c-.16.1-.16.361,0,.591s.431.33.561.23a.457.457,0,0,0,0-.621C11.176,36.354,10.916,36.254,10.756,36.384Z" transform="translate(3.072 3.13)" fill="#02353c"/>
                        </g>

                        <path onclick="window.open('https://trello.com/b/hWgXwM1y/f2m5-bo')" id="Icon_awesome-trello" data-name="Icon awesome-trello" d="M48.878,2.25H6.992A6.984,6.984,0,0,0,0,9.227c-.012,0,0-.5,0,41.862a6.981,6.981,0,0,0,6.977,6.977H48.866a6.982,6.982,0,0,0,6.94-6.977V9.227A6.963,6.963,0,0,0,48.878,2.25ZM24.546,44.523a3.353,3.353,0,0,1-3.351,3.314h-10.3a3.339,3.339,0,0,1-3.364-3.314V12.852A3.352,3.352,0,0,1,10.879,9.5H21.207a3.352,3.352,0,0,1,3.351,3.351v31.67ZM48.6,30.569a3.352,3.352,0,0,1-3.351,3.351H35.161a3.352,3.352,0,0,1-3.351-3.351v-17.7a3.35,3.35,0,0,1,3.339-3.351h10.1A3.352,3.352,0,0,1,48.6,12.865v17.7Z" transform="translate(167.422 -2.25)" fill="#fff"/>
                        <g onclick="window.open('http://31658.hosts1.ma-cloud.nl/Website-tc/')"id="Group_28" data-name="Group 28" transform="translate(83.709)">
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
    <div class="modal-container" id="modal_container_SM">
        <div class="modal">
            <p class="X" id="close_SM">✕</p>
            <div class="modal-row">
                <h1>Stedelijk Museum</h1>
                <div class="modal-language">
                    <svg xmlns="http://www.w3.org/2000/svg" width="125.713" height="125.713" viewBox="0 0 125.713 125.713">
                        <path id="Icon_awesome-wordpress" data-name="Icon awesome-wordpress" d="M14.173,41.47,39.9,111.93A53.932,53.932,0,0,1,14.173,41.47ZM99.815,60.707c0-6.666-2.382-11.279-4.435-14.878-2.737-4.435-5.3-8.212-5.3-12.647,0-4.968,3.751-9.581,9.048-9.581.228,0,.456.025.71.051A53.915,53.915,0,0,0,18.355,33.79c1.267.051,2.459.076,3.472.076,5.627,0,14.371-.684,14.371-.684a2.225,2.225,0,0,1,.355,4.435s-2.915.329-6.159.507l19.643,58.4L61.848,61.138,53.458,38.124c-2.915-.177-5.652-.507-5.652-.507-2.915-.177-2.56-4.613.329-4.435,0,0,8.9.684,14.193.684,5.627,0,14.371-.684,14.371-.684a2.225,2.225,0,0,1,.355,4.435s-2.915.329-6.159.507L90.387,96.089,95.76,78.12C98.041,70.668,99.815,65.32,99.815,60.707ZM64.357,68.133l-16.17,47.016a53.727,53.727,0,0,0,33.126-.862,4.04,4.04,0,0,1-.38-.735L64.357,68.133Zm46.382-30.592a42.011,42.011,0,0,1,.355,5.551,50.655,50.655,0,0,1-4.106,19.313L90.513,110.029a53.974,53.974,0,0,0,20.226-72.488Zm15.537,25.878A62.857,62.857,0,1,1,63.419.563,62.927,62.927,0,0,1,126.276,63.419Zm-2.889,0a59.967,59.967,0,1,0-59.967,59.967A60.039,60.039,0,0,0,123.387,63.419Z" transform="translate(-0.563 -0.563)" fill="snow"/>
                    </svg>
                </div>
            </div>
            <div class="modal-row">
                <p>
                    The assignment for this project was to make a
                    website for the Stedelijk musuem Amsterdam with
                    a business trip in the museum, using Wordpress.
                    <br>
                    <br>
                    I worked with another web developer and two
                    E-Commerce designers, they delivered the website
                    design and the idea for the business trip.
                    <br>
                    <br>
                    Group project
                    <br>
                    <br>
                    Start: December 1st 2021
                    <br>
                    End: Febuary 3rd 2021
                </p>
                <img src="Images/Projecten/Stedelijk%20museum.png" alt="Verhaal van Amir">
            </div>
            <div class="modal-row">
                <div class="modal-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="223.227" height="55.816" viewBox="0 0 223.227 55.816">
                        <g id="Group_26" data-name="Group 26" onclick="window.open('https://github.com/ScottZ2004/F2M6Wordpress')">
                            <rect id="Rectangle_64" data-name="Rectangle 64" width="55.815" height="55.815" rx="10" transform="translate(0 0)" fill="#fff"/>
                            <path id="Icon_awesome-github" data-name="Icon awesome-github" d="M16.614,39.559c0,.2-.23.361-.521.361-.33.03-.561-.13-.561-.361,0-.2.23-.361.521-.361C16.354,39.168,16.614,39.329,16.614,39.559ZM13.5,39.108c-.07.2.13.431.431.491a.47.47,0,0,0,.621-.2c.06-.2-.13-.431-.431-.521A.514.514,0,0,0,13.5,39.108Zm4.426-.17c-.29.07-.491.26-.461.491.03.2.29.33.591.26s.491-.26.461-.461S18.216,38.908,17.926,38.938ZM24.516.563A24.014,24.014,0,0,0,0,25,25.107,25.107,0,0,0,16.975,48.953c1.282.23,1.733-.561,1.733-1.212,0-.621-.03-4.046-.03-6.149,0,0-7.01,1.5-8.482-2.984,0,0-1.142-2.914-2.784-3.665,0,0-2.293-1.572.16-1.542a5.286,5.286,0,0,1,3.866,2.584c2.193,3.866,5.869,2.754,7.3,2.093a5.566,5.566,0,0,1,1.6-3.375c-5.6-.621-11.246-1.432-11.246-11.066a7.59,7.59,0,0,1,2.363-5.9,9.462,9.462,0,0,1,.26-6.8c2.093-.651,6.91,2.7,6.91,2.7a23.658,23.658,0,0,1,12.578,0s4.817-3.365,6.91-2.7a9.457,9.457,0,0,1,.26,6.8c1.6,1.773,2.584,3.155,2.584,5.9,0,9.664-5.9,10.435-11.5,11.066a5.922,5.922,0,0,1,1.7,4.647c0,3.375-.03,7.551-.03,8.372,0,.651.461,1.442,1.733,1.212A24.876,24.876,0,0,0,49.672,25C49.672,11.108,38.406.563,24.516.563ZM9.734,35.1c-.13.1-.1.33.07.521.16.16.391.23.521.1.13-.1.1-.33-.07-.521C10.095,35.042,9.864,34.972,9.734,35.1Zm-1.082-.811c-.07.13.03.29.23.391a.3.3,0,0,0,.431-.07c.07-.13-.03-.29-.23-.391C8.883,34.161,8.723,34.191,8.653,34.291ZM11.9,37.857c-.16.13-.1.431.13.621.23.23.521.26.651.1.13-.13.07-.431-.13-.621C12.328,37.726,12.027,37.7,11.9,37.857Zm-1.142-1.472c-.16.1-.16.361,0,.591s.431.33.561.23a.457.457,0,0,0,0-.621C11.176,36.354,10.916,36.254,10.756,36.384Z" transform="translate(3.072 3.13)" fill="#02353c"/>
                        </g>

                        <path onclick="window.open('https://trello.com/b/lCToHUnu/f2m6bo-e-commerce')" id="Icon_awesome-trello" data-name="Icon awesome-trello" d="M48.878,2.25H6.992A6.984,6.984,0,0,0,0,9.227c-.012,0,0-.5,0,41.862a6.981,6.981,0,0,0,6.977,6.977H48.866a6.982,6.982,0,0,0,6.94-6.977V9.227A6.963,6.963,0,0,0,48.878,2.25ZM24.546,44.523a3.353,3.353,0,0,1-3.351,3.314h-10.3a3.339,3.339,0,0,1-3.364-3.314V12.852A3.352,3.352,0,0,1,10.879,9.5H21.207a3.352,3.352,0,0,1,3.351,3.351v31.67ZM48.6,30.569a3.352,3.352,0,0,1-3.351,3.351H35.161a3.352,3.352,0,0,1-3.351-3.351v-17.7a3.35,3.35,0,0,1,3.339-3.351h10.1A3.352,3.352,0,0,1,48.6,12.865v17.7Z" transform="translate(167.422 -2.25)" fill="#fff"/>
                        <g onclick="window.open('http://31658.hosts1.ma-cloud.nl/StedelijkMuseum/')"  id="Group_28" data-name="Group 28" transform="translate(83.709)">
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
    <div class="modal-container" id="modal_container_AP">
        <div class="modal">
            <p class="X" id="close_AP">✕</p>
            <div class="modal-row">
                <h1>Activity Planner</h1>
                <div class="modal-language">
                    <svg xmlns="http://www.w3.org/2000/svg" width="187.063" height="128.027" viewBox="0 0 187.063 128.027">
                        <path id="Icon_awesome-laravel" data-name="Icon awesome-laravel" d="M186.33,62.395c-1.227-1.4-18.353-22.825-21.364-26.449s-4.5-2.981-6.342-2.718c-1.87.263-23.526,3.916-26.04,4.325-2.513.438-4.092,1.432-2.543,3.595,1.374,1.929,15.606,22.123,18.763,26.566L92.2,81.274,47.131,6.019c-1.783-2.659-2.163-3.595-6.254-3.39C36.785,2.8,5.543,5.406,3.322,5.61,1.1,5.786-1.354,6.779.867,12.04s37.7,81.714,38.694,83.935,3.565,5.845,9.586,4.384c6.167-1.49,27.559-7.072,39.249-10.141,6.167,11.193,18.763,33.872,21.1,37.116,3.1,4.355,5.261,3.624,10.024,2.163,3.741-1.14,58.333-20.779,60.788-21.773,2.455-1.023,3.975-1.724,2.309-4.208-1.227-1.812-15.635-21.1-23.176-31.212,5.173-1.374,23.555-6.254,25.514-6.809,2.309-.585,2.63-1.7,1.374-3.1ZM83.4,83.437c-.672.146-32.381,7.745-34.077,8.125s-1.7.2-1.9-.38S9.723,13.238,9.2,12.274s-.5-1.724,0-1.724,29.956-2.63,30.979-2.689c1.052-.058.935.175,1.315.818,0,0,41.558,71.719,42.26,72.975C84.51,82.911,84.072,83.291,83.4,83.437Zm89.429,16.775c.5.789,1.023,1.315-.585,1.87-1.578.585-53.687,18.149-54.68,18.587-1.023.438-1.812.584-3.1-1.315S96.229,88.142,96.229,88.142l55.177-14.35c1.374-.438,1.812-.731,2.689.643.848,1.4,18.237,24.988,18.733,25.777Zm3.536-39.191c-1.227.263-21.51,5.29-21.51,5.29L138.284,43.574c-.468-.672-.848-1.315.322-1.461s19.99-3.565,20.838-3.741c.848-.2,1.578-.438,2.63.994S177.446,58.946,178,59.648C178.527,60.32,177.592,60.729,176.365,61.021Z" transform="translate(0.006 -2.602)" fill="snow"/>
                    </svg>

                </div>
            </div>
            <div class="modal-row">
                <p>
                    I always wanted to make my own laravel backend project. I thought of an activity planner because my friends and I had a hard time planning
                    our meetups. So I thought I create a web app to make it easier.
                    <br>
                    <br>
                    I worked with laravel, because I always wanted to do a project with this framework.
                    I also decided to work with ChartJS for the first time, because I wanted to challenge myself.
                    <br>
                    <br>
                    Solo project
                    <br>
                    <br>
                    Start: September 8th 2022
                    <br>
                    End: Work in progress
                </p>
                <img src="Images/Projecten/Activity-planner-screenshot.png" alt="Verhaal van Amir">
            </div>
            <div class="modal-row">
                <div class="modal-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="223.227" height="55.816" viewBox="0 0 223.227 55.816">
                        <g id="Group_26" data-name="Group 26" onclick="window.open('https://github.com/ScottZ2004/Activity-Planner')">
                            <rect id="Rectangle_64" data-name="Rectangle 64" width="55.815" height="55.815" rx="10" transform="translate(0 0)" fill="#fff"/>
                            <path id="Icon_awesome-github" data-name="Icon awesome-github" d="M16.614,39.559c0,.2-.23.361-.521.361-.33.03-.561-.13-.561-.361,0-.2.23-.361.521-.361C16.354,39.168,16.614,39.329,16.614,39.559ZM13.5,39.108c-.07.2.13.431.431.491a.47.47,0,0,0,.621-.2c.06-.2-.13-.431-.431-.521A.514.514,0,0,0,13.5,39.108Zm4.426-.17c-.29.07-.491.26-.461.491.03.2.29.33.591.26s.491-.26.461-.461S18.216,38.908,17.926,38.938ZM24.516.563A24.014,24.014,0,0,0,0,25,25.107,25.107,0,0,0,16.975,48.953c1.282.23,1.733-.561,1.733-1.212,0-.621-.03-4.046-.03-6.149,0,0-7.01,1.5-8.482-2.984,0,0-1.142-2.914-2.784-3.665,0,0-2.293-1.572.16-1.542a5.286,5.286,0,0,1,3.866,2.584c2.193,3.866,5.869,2.754,7.3,2.093a5.566,5.566,0,0,1,1.6-3.375c-5.6-.621-11.246-1.432-11.246-11.066a7.59,7.59,0,0,1,2.363-5.9,9.462,9.462,0,0,1,.26-6.8c2.093-.651,6.91,2.7,6.91,2.7a23.658,23.658,0,0,1,12.578,0s4.817-3.365,6.91-2.7a9.457,9.457,0,0,1,.26,6.8c1.6,1.773,2.584,3.155,2.584,5.9,0,9.664-5.9,10.435-11.5,11.066a5.922,5.922,0,0,1,1.7,4.647c0,3.375-.03,7.551-.03,8.372,0,.651.461,1.442,1.733,1.212A24.876,24.876,0,0,0,49.672,25C49.672,11.108,38.406.563,24.516.563ZM9.734,35.1c-.13.1-.1.33.07.521.16.16.391.23.521.1.13-.1.1-.33-.07-.521C10.095,35.042,9.864,34.972,9.734,35.1Zm-1.082-.811c-.07.13.03.29.23.391a.3.3,0,0,0,.431-.07c.07-.13-.03-.29-.23-.391C8.883,34.161,8.723,34.191,8.653,34.291ZM11.9,37.857c-.16.13-.1.431.13.621.23.23.521.26.651.1.13-.13.07-.431-.13-.621C12.328,37.726,12.027,37.7,11.9,37.857Zm-1.142-1.472c-.16.1-.16.361,0,.591s.431.33.561.23a.457.457,0,0,0,0-.621C11.176,36.354,10.916,36.254,10.756,36.384Z" transform="translate(3.072 3.13)" fill="#02353c"/>
                        </g>
                        <path onclick="window.open('https://trello.com/b/veKIhMXl/activity-planner')" id="Icon_awesome-trello" data-name="Icon awesome-trello" d="M48.878,2.25H6.992A6.984,6.984,0,0,0,0,9.227c-.012,0,0-.5,0,41.862a6.981,6.981,0,0,0,6.977,6.977H48.866a6.982,6.982,0,0,0,6.94-6.977V9.227A6.963,6.963,0,0,0,48.878,2.25ZM24.546,44.523a3.353,3.353,0,0,1-3.351,3.314h-10.3a3.339,3.339,0,0,1-3.364-3.314V12.852A3.352,3.352,0,0,1,10.879,9.5H21.207a3.352,3.352,0,0,1,3.351,3.351v31.67ZM48.6,30.569a3.352,3.352,0,0,1-3.351,3.351H35.161a3.352,3.352,0,0,1-3.351-3.351v-17.7a3.35,3.35,0,0,1,3.339-3.351h10.1A3.352,3.352,0,0,1,48.6,12.865v17.7Z" transform="translate(167.422 -2.25)" fill="#fff"/>
                        <g onclick="window.open('http://scottzico.com/activity-planner')"  id="Group_28" data-name="Group 28" transform="translate(83.709)">
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
    <div class="modal-container" id="modal_container_CW">
        <div class="modal">
            <p class="X" id="close_CW">✕</p>
            <div class="modal-row">
                <h1>Christmas Wishlist</h1>
                <div class="modal-language">
                    <svg xmlns="http://www.w3.org/2000/svg" width="425.063" height="140.007" viewBox="0 0 425.063 140.007">
                    <path id="Icon_awesome-laravel" data-name="Icon awesome-laravel" d="M186.33,62.395c-1.227-1.4-18.353-22.825-21.364-26.449s-4.5-2.981-6.342-2.718c-1.87.263-23.526,3.916-26.04,4.325-2.513.438-4.092,1.432-2.543,3.595,1.374,1.929,15.606,22.123,18.763,26.566L92.2,81.274,47.131,6.019c-1.783-2.659-2.163-3.595-6.254-3.39C36.785,2.8,5.543,5.406,3.322,5.61,1.1,5.786-1.354,6.779.867,12.04s37.7,81.714,38.694,83.935,3.565,5.845,9.586,4.384c6.167-1.49,27.559-7.072,39.249-10.141,6.167,11.193,18.763,33.872,21.1,37.116,3.1,4.355,5.261,3.624,10.024,2.163,3.741-1.14,58.333-20.779,60.788-21.773,2.455-1.023,3.975-1.724,2.309-4.208-1.227-1.812-15.635-21.1-23.176-31.212,5.173-1.374,23.555-6.254,25.514-6.809,2.309-.585,2.63-1.7,1.374-3.1ZM83.4,83.437c-.672.146-32.381,7.745-34.077,8.125s-1.7.2-1.9-.38S9.723,13.238,9.2,12.274s-.5-1.724,0-1.724,29.956-2.63,30.979-2.689c1.052-.058.935.175,1.315.818,0,0,41.558,71.719,42.26,72.975C84.51,82.911,84.072,83.291,83.4,83.437Zm89.429,16.775c.5.789,1.023,1.315-.585,1.87-1.578.585-53.687,18.149-54.68,18.587-1.023.438-1.812.584-3.1-1.315S96.229,88.142,96.229,88.142l55.177-14.35c1.374-.438,1.812-.731,2.689.643.848,1.4,18.237,24.988,18.733,25.777Zm3.536-39.191c-1.227.263-21.51,5.29-21.51,5.29L138.284,43.574c-.468-.672-.848-1.315.322-1.461s19.99-3.565,20.838-3.741c.848-.2,1.578-.438,2.63.994S177.446,58.946,178,59.648C178.527,60.32,177.592,60.729,176.365,61.021Z" transform="translate(238.006 3.388)" fill="snow"/>
                    <path id="Icon_awesome-react" data-name="Icon awesome-react" d="M130.688,47.622q-2.531-.844-5.062-1.594c.281-1.156.531-2.313.781-3.469,3.844-18.625,1.313-33.594-7.219-38.531-8.219-4.719-21.625.187-35.188,12-1.344,1.156-2.656,2.375-3.906,3.594C79.25,18.809,78.375,18,77.5,17.216,63.281,4.591,49.031-.722,40.5,4.247,32.313,9,29.875,23.091,33.313,40.716c.344,1.75.719,3.469,1.156,5.219-2,.562-3.969,1.188-5.812,1.844C11.969,53.559,0,62.684,0,72.122c0,9.75,12.75,19.531,30.094,25.469,1.406.469,2.812.938,4.25,1.344-.469,1.875-.875,3.719-1.25,5.625-3.281,17.344-.719,31.094,7.469,35.812C49,145.247,63.188,140.247,77,128.153c1.094-.969,2.188-1.969,3.281-3.031,1.375,1.344,2.812,2.625,4.25,3.875,13.375,11.5,26.594,16.156,34.75,11.438,8.438-4.875,11.188-19.656,7.625-37.656q-.422-2.062-.937-4.219c1-.281,1.969-.594,2.938-.906C146.938,91.684,160,82.028,160,72.122c0-9.469-12.312-18.656-29.312-24.5ZM88.406,21.091C100.031,10.966,110.875,7,115.813,9.841c5.281,3.031,7.313,15.281,4,31.375-.219,1.063-.438,2.094-.719,3.125a159.976,159.976,0,0,0-21.031-3.313A157.889,157.889,0,0,0,84.75,24.434c1.219-1.156,2.406-2.25,3.656-3.344ZM52.25,88.341c1.594,2.719,3.219,5.438,4.937,8.094a141.509,141.509,0,0,1-14.5-2.344,145.98,145.98,0,0,1,5.094-13.906c1.438,2.75,2.906,5.469,4.469,8.156ZM42.781,50.747c4.5-1,9.281-1.812,14.25-2.437-1.656,2.594-3.281,5.25-4.812,7.938-1.531,2.656-3.031,5.375-4.438,8.125-1.969-4.656-3.625-9.219-5-13.625Zm8.562,21.531c2.063-4.312,4.313-8.531,6.688-12.687s4.938-8.188,7.625-12.156C70.344,47.091,75.125,46.9,80,46.9s9.688.188,14.344.531q3.984,5.906,7.594,12.094t6.781,12.625q-3.141,6.469-6.75,12.75c-2.375,4.156-4.906,8.188-7.563,12.188-4.656.344-9.5.5-14.406.5s-9.656-.156-14.25-.437Q61.672,91.2,58.063,84.966c-2.406-4.156-4.625-8.375-6.719-12.688Zm56.437,16c1.594-2.75,3.094-5.531,4.563-8.344a145.068,145.068,0,0,1,5.281,13.844,137.262,137.262,0,0,1-14.687,2.5C104.625,93.653,106.219,90.966,107.781,88.278Zm4.5-23.906c-1.469-2.75-2.969-5.5-4.531-8.188q-2.3-3.984-4.781-7.875a143.806,143.806,0,0,1,14.344,2.5,138.3,138.3,0,0,1-5.031,13.563ZM80.063,29.216A137.219,137.219,0,0,1,89.313,40.4c-6.187-.281-12.406-.281-18.594,0C73.781,36.372,76.938,32.622,80.063,29.216ZM43.813,10.059C49.063,7,60.719,11.372,73,22.247c.781.687,1.563,1.438,2.375,2.188A158.768,158.768,0,0,0,61.969,41.028a164.728,164.728,0,0,0-21,3.25c-.406-1.594-.75-3.219-1.094-4.844-2.937-15.125-1-26.531,3.938-29.375ZM36.156,92.434c-1.312-.375-2.594-.781-3.875-1.219-6.656-2.094-14.219-5.406-19.688-9.75a14.022,14.022,0,0,1-5.875-9.344c0-5.719,9.875-13.031,24.125-18,1.781-.625,3.594-1.188,5.406-1.719a166.169,166.169,0,0,0,7.656,19.875,170.821,170.821,0,0,0-7.75,20.156Zm36.438,30.625a57.2,57.2,0,0,1-17.625,11.031,13.831,13.831,0,0,1-11.031.406c-4.969-2.875-7.031-13.906-4.219-28.75.344-1.75.719-3.5,1.156-5.219a156.332,156.332,0,0,0,21.219,3.062,164.911,164.911,0,0,0,13.5,16.688C74.594,121.247,73.594,122.184,72.594,123.059Zm7.656-7.594c-3.187-3.437-6.375-7.25-9.469-11.344,3,.125,6.094.188,9.219.188,3.219,0,6.375-.062,9.5-.219a134.764,134.764,0,0,1-9.25,11.375Zm40.844,9.375a13.888,13.888,0,0,1-5.156,9.781c-4.969,2.875-15.562-.875-27-10.688-1.313-1.125-2.625-2.344-3.969-3.594a154.587,154.587,0,0,0,13.187-16.75,154.049,154.049,0,0,0,21.313-3.281c.313,1.281.594,2.563.844,3.813a56.966,56.966,0,0,1,.781,20.719Zm5.688-33.594c-.875.281-1.75.562-2.656.812a158.749,158.749,0,0,0-7.969-19.937,157.961,157.961,0,0,0,7.656-19.656c1.625.469,3.188.969,4.688,1.469,14.563,5,24.781,12.438,24.781,18.125,0,6.125-10.906,14.031-26.5,19.188ZM80,86.559A14.312,14.312,0,1,0,65.688,72.247,14.31,14.31,0,0,0,80,86.559Z" transform="translate(0 -2.251)" fill="snow"/>
                </svg>


                </div>
            </div>
            <div class="modal-row">
                <p>
                    Since I began using the React framework, I wanted to make a simple backend project, with Laravel and React.
                    <br>
                    <br>
                    I chose to make a christmas wishlist app, because I like the christmas season and so I thought I could make a simple wishlist app with a login.
                    <br>
                    <br>
                    Solo project
                    <br>
                    <br>
                    Start: November 30th 2022
                    <br>
                    End: December 10th 2022
                </p>
                <img src="Images/Projecten/ChristmasWishList site.png" alt="Verhaal van Amir">
            </div>
            <div class="modal-row">
                <div class="modal-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="139.525" height="55.816" viewBox="0 0 139.525 55.816">
                    <g onclick="window.open('https://github.com/ScottZ2004/Christmas-Wishlist')" id="Group_26" data-name="Group 26">
                        <rect id="Rectangle_64" data-name="Rectangle 64" width="55.815" height="55.815" rx="10" transform="translate(0 0)" fill="#fff"/>
                        <path id="Icon_awesome-github" data-name="Icon awesome-github" d="M16.614,39.559c0,.2-.23.361-.521.361-.33.03-.561-.13-.561-.361,0-.2.23-.361.521-.361C16.354,39.168,16.614,39.329,16.614,39.559ZM13.5,39.108c-.07.2.13.431.431.491a.47.47,0,0,0,.621-.2c.06-.2-.13-.431-.431-.521A.514.514,0,0,0,13.5,39.108Zm4.426-.17c-.29.07-.491.26-.461.491.03.2.29.33.591.26s.491-.26.461-.461S18.216,38.908,17.926,38.938ZM24.516.563A24.014,24.014,0,0,0,0,25,25.107,25.107,0,0,0,16.975,48.953c1.282.23,1.733-.561,1.733-1.212,0-.621-.03-4.046-.03-6.149,0,0-7.01,1.5-8.482-2.984,0,0-1.142-2.914-2.784-3.665,0,0-2.293-1.572.16-1.542a5.286,5.286,0,0,1,3.866,2.584c2.193,3.866,5.869,2.754,7.3,2.093a5.566,5.566,0,0,1,1.6-3.375c-5.6-.621-11.246-1.432-11.246-11.066a7.59,7.59,0,0,1,2.363-5.9,9.462,9.462,0,0,1,.26-6.8c2.093-.651,6.91,2.7,6.91,2.7a23.658,23.658,0,0,1,12.578,0s4.817-3.365,6.91-2.7a9.457,9.457,0,0,1,.26,6.8c1.6,1.773,2.584,3.155,2.584,5.9,0,9.664-5.9,10.435-11.5,11.066a5.922,5.922,0,0,1,1.7,4.647c0,3.375-.03,7.551-.03,8.372,0,.651.461,1.442,1.733,1.212A24.876,24.876,0,0,0,49.672,25C49.672,11.108,38.406.563,24.516.563ZM9.734,35.1c-.13.1-.1.33.07.521.16.16.391.23.521.1.13-.1.1-.33-.07-.521C10.095,35.042,9.864,34.972,9.734,35.1Zm-1.082-.811c-.07.13.03.29.23.391a.3.3,0,0,0,.431-.07c.07-.13-.03-.29-.23-.391C8.883,34.161,8.723,34.191,8.653,34.291ZM11.9,37.857c-.16.13-.1.431.13.621.23.23.521.26.651.1.13-.13.07-.431-.13-.621C12.328,37.726,12.027,37.7,11.9,37.857Zm-1.142-1.472c-.16.1-.16.361,0,.591s.431.33.561.23a.457.457,0,0,0,0-.621C11.176,36.354,10.916,36.254,10.756,36.384Z" transform="translate(3.072 3.13)" fill="#02353c"/>
                    </g>
                    <g onclick="window.open('https://christmas-wishlist.scottzico.com/')" id="Group_28" data-name="Group 28" transform="translate(83.709)">
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
    <div id="about-me" class="about-me-container">
        <div class="about-me-text-container">
            <h1>About me</h1>
            <p>
                Hi I'm Scott Zico van den Broek, I am a Software Development student at
                Mediacollege Amsterdam. I chose this study because I like to work project-based
                and I like to solve problems.
            </p>
            <p>
                I am a backend developer
                because I like to work with databases and because I think it is very challenging and interesting. I also 
                like front-end because I like to design websites and because you make something visual and interactive.
            </p>
            <p>
                In the future I would like to learn more about backend-development and I hope to
                be better at front-end development.
            </p>
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
                        <text id="_6_Months" data-name="6 Months" transform="translate(1288.85 4015.913)" fill="snow" font-size="32" font-family="TradeGothicNextLTPro-Rg, Trade Gothic Next LT Pro"><tspan x="0" y="0">6 Months</tspan></text>
                    </g>
                </svg>


            </div>
            <div class="language"><svg xmlns="http://www.w3.org/2000/svg" width="400" height="135" viewBox="0 0 400 135">
                    <g id="Group_50" data-name="Group 50" transform="translate(-484.9 -4077.499)">
                        <text id="Wordpress" transform="translate(651.599 4130.499)" fill="#02353c" font-size="50" font-family="TradeGothicNextLTPro-Bd, Trade Gothic Next LT Pro"><tspan x="0" y="0">Wordpress</tspan></text>
                        <rect id="Rectangle_107" data-name="Rectangle 107" width="233.301" height="55.189" rx="4" transform="translate(651.599 4157.309)" fill="#02353c"/>
                        <text id="_6_Months" data-name="6 Months" transform="translate(703.25 4197.499)" fill="snow" font-size="32" font-family="TradeGothicNextLTPro-Rg, Trade Gothic Next LT Pro"><tspan x="0" y="0">6 Months</tspan></text>
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
            <div class="language"><svg xmlns="http://www.w3.org/2000/svg" width="400" height="135" viewBox="0 0 400 135">
                    <g id="Group_75" data-name="Group 75" transform="translate(-1049.7 -4078.498)">
                        <text id="React" transform="translate(1216.399 4131.499)" fill="#02353c" font-size="50" font-family="TradeGothicNextLTPro-Bd, Trade Gothic Next LT Pro"><tspan x="0" y="0">React</tspan></text>
                        <rect id="Rectangle_108" data-name="Rectangle 108" width="233.301" height="55.189" rx="4" transform="translate(1216.399 4158.309)" fill="#02353c"/>
                        <text id="_2_Months" data-name="2 Months" transform="translate(1268.049 4199.904)" fill="snow" font-size="32" font-family="TradeGothicNextLTPro-Rg, Trade Gothic Next LT Pro"><tspan x="0" y="0">2 Months</tspan></text>
                        <path id="Icon_awesome-react" data-name="Icon awesome-react" d="M108.348,39.866q-2.1-.7-4.2-1.321c.233-.959.44-1.917.648-2.876,3.187-15.441,1.088-27.851-5.985-31.945C92-.188,80.885,3.88,69.641,13.673c-1.114.959-2.2,1.969-3.239,2.979-.7-.674-1.425-1.347-2.15-1.995C52.464,4.191,40.65-.214,33.577,3.906c-6.788,3.938-8.809,15.623-5.959,30.235.285,1.451.6,2.876.959,4.327-1.658.466-3.29.985-4.819,1.529C9.923,44.789,0,52.354,0,60.178c0,8.083,10.571,16.193,24.95,21.115,1.166.389,2.332.777,3.524,1.114-.389,1.555-.725,3.083-1.036,4.663-2.72,14.379-.6,25.779,6.192,29.691,7,4.042,18.758-.1,30.209-10.13.907-.8,1.814-1.632,2.72-2.513,1.14,1.114,2.332,2.176,3.524,3.213,11.089,9.534,22.048,13.395,28.81,9.482,7-4.042,9.275-16.3,6.322-31.219q-.35-1.71-.777-3.5c.829-.233,1.632-.492,2.435-.751C121.82,76.4,132.65,68.391,132.65,60.178c0-7.85-10.208-15.467-24.3-20.312Zm-35.054-22C82.932,9.476,91.922,6.186,96.016,8.543c4.378,2.513,6.063,12.669,3.316,26.012-.181.881-.363,1.736-.6,2.591A132.63,132.63,0,0,0,81.3,34.4,130.9,130.9,0,0,0,70.263,20.642c1.01-.959,1.995-1.865,3.031-2.772ZM43.319,73.625c1.321,2.254,2.669,4.508,4.093,6.71a117.317,117.317,0,0,1-12.021-1.943,121.026,121.026,0,0,1,4.223-11.529c1.192,2.28,2.409,4.534,3.7,6.762Zm-7.85-31.168c3.731-.829,7.695-1.5,11.814-2.021-1.373,2.15-2.72,4.353-3.99,6.581-1.27,2.2-2.513,4.456-3.679,6.736-1.632-3.86-3.005-7.643-4.145-11.3Zm7.1,17.851c1.71-3.575,3.575-7.073,5.544-10.519S52.205,43,54.433,39.711c3.886-.285,7.85-.44,11.892-.44s8.032.155,11.892.44q3.3,4.9,6.3,10.026T90.135,60.2q-2.6,5.363-5.6,10.571c-1.969,3.446-4.068,6.788-6.27,10.1-3.86.285-7.876.415-11.944.415s-8.006-.13-11.814-.363Q51.13,76,48.137,70.827c-1.995-3.446-3.834-6.943-5.57-10.519Zm46.79,13.265c1.321-2.28,2.565-4.586,3.783-6.917a120.269,120.269,0,0,1,4.378,11.477,113.8,113.8,0,0,1-12.177,2.073C86.741,78.029,88.062,75.8,89.357,73.573Zm3.731-19.82c-1.218-2.28-2.461-4.56-3.757-6.788q-1.9-3.3-3.964-6.529a119.224,119.224,0,0,1,11.892,2.073,114.659,114.659,0,0,1-4.171,11.244ZM66.377,24.606a113.767,113.767,0,0,1,7.669,9.275c-5.13-.233-10.286-.233-15.415,0C61.169,30.539,63.786,27.43,66.377,24.606ZM36.323,8.725c4.353-2.539,14.016,1.088,24.2,10.1.648.57,1.3,1.192,1.969,1.814A131.627,131.627,0,0,0,51.376,34.4a136.57,136.57,0,0,0-17.41,2.694c-.337-1.321-.622-2.669-.907-4.016-2.435-12.54-.829-22,3.264-24.354ZM29.976,77.019c-1.088-.311-2.15-.648-3.213-1.01-5.518-1.736-11.788-4.482-16.322-8.083A11.625,11.625,0,0,1,5.57,60.178c0-4.741,8.187-10.8,20-14.923,1.477-.518,2.979-.985,4.482-1.425A137.764,137.764,0,0,0,36.4,60.308a141.621,141.621,0,0,0-6.425,16.711Zm30.209,25.39a47.42,47.42,0,0,1-14.612,9.146,11.467,11.467,0,0,1-9.146.337c-4.119-2.384-5.829-11.529-3.5-23.836.285-1.451.6-2.9.959-4.327A129.609,129.609,0,0,0,51.48,86.268,136.722,136.722,0,0,0,62.672,100.1C61.843,100.906,61.014,101.683,60.185,102.409Zm6.348-6.3c-2.643-2.85-5.285-6.011-7.85-9.4,2.487.1,5.052.155,7.643.155,2.669,0,5.285-.052,7.876-.181a111.729,111.729,0,0,1-7.669,9.431Zm33.862,7.772a11.514,11.514,0,0,1-4.275,8.109c-4.119,2.384-12.9-.725-22.385-8.861-1.088-.933-2.176-1.943-3.29-2.979A128.163,128.163,0,0,0,81.378,86.268a127.716,127.716,0,0,0,17.669-2.72c.259,1.062.492,2.124.7,3.161a47.228,47.228,0,0,1,.648,17.177Zm4.715-27.851c-.725.233-1.451.466-2.2.674A131.612,131.612,0,0,0,96.3,60.178a130.958,130.958,0,0,0,6.348-16.3c1.347.389,2.643.8,3.886,1.218,12.073,4.145,20.545,10.311,20.545,15.027,0,5.078-9.042,11.633-21.97,15.908ZM66.325,72.148A11.866,11.866,0,1,0,54.459,60.282,11.864,11.864,0,0,0,66.325,72.148Z" transform="translate(1049.7 4091.571)" fill="#02353c"/>
                    </g>
                </svg>
            </div>
            <div class="language">
                <svg xmlns="http://www.w3.org/2000/svg" width="400" height="135" viewBox="0 0 400 135">
                    <g id="Group_76" data-name="Group 76" transform="translate(-1049.7 -4078.498)">
                        <text id="Git" transform="translate(1216.399 4131.499)" fill="#02353c" font-size="50" font-family="TradeGothicNextLTPro-Bd, Trade Gothic Next LT Pro"><tspan x="0" y="0">Git</tspan></text>
                        <rect id="Rectangle_108" data-name="Rectangle 108" width="233.301" height="55.189" rx="4" transform="translate(1216.399 4158.309)" fill="#02353c"/>
                        <text id="_2_Years" data-name="2 Years" transform="translate(1283.049 4199.904)" fill="snow" font-size="32" font-family="TradeGothicNextLTPro-Rg, Trade Gothic Next LT Pro"><tspan x="0" y="0">2 Years</tspan></text>
                        <path id="Icon_awesome-git-alt" data-name="Icon awesome-git-alt" d="M131.616,63.348,73.062,4.779a8.645,8.645,0,0,0-12.22,0L48.667,16.945,64.094,32.372A10.265,10.265,0,0,1,77.086,45.451l14.87,14.87c10.25-3.533,18.319,9.282,10.621,16.975-7.932,7.932-21.023-.859-16.768-11.181L71.93,52.254V88.74c7.576,3.755,6.665,12.531,2.719,16.469A10.275,10.275,0,1,1,63.48,88.441V51.611A10.271,10.271,0,0,1,57.9,38.136L42.69,22.91,2.53,63.076a8.642,8.642,0,0,0,0,12.22L61.1,133.865a8.642,8.642,0,0,0,12.217,0l58.3-58.3a8.642,8.642,0,0,0,0-12.22Z" transform="translate(1049.7 4077.105)" fill="#02353c"/>
                    </g>
                </svg>

            </div>
        </div>
        <h1>Skills</h1>
        <div class="language-container">

            <div class="language">
                <svg xmlns="http://www.w3.org/2000/svg" width="400" height="135" viewBox="0 0 400 135">
                    <g id="Group_68" data-name="Group 68" transform="translate(-1049.7 -4078.499)">
                        <text id="English" transform="translate(1216.399 4131.499)" fill="#02353c" font-size="50" font-family="TradeGothicNextLTPro-Bd, Trade Gothic Next LT Pro"><tspan x="0" y="0">English</tspan></text>
                        <rect id="Rectangle_108" data-name="Rectangle 108" width="233.301" height="55.189" rx="4" transform="translate(1216.399 4158.309)" fill="#02353c"/>
                        <text id="Language" transform="translate(1266.049 4199.904)" fill="snow" font-size="32" font-family="TradeGothicNextLTPro-Rg, Trade Gothic Next LT Pro"><tspan x="0" y="0">Language</tspan></text>
                        <g id="Group_70" data-name="Group 70" transform="translate(18 3.371)">
                            <rect id="Rectangle_122" data-name="Rectangle 122" width="16" height="74" transform="translate(1099.7 4112.794)" fill="rgba(2,53,60,0.9)"/>
                            <rect id="Rectangle_123" data-name="Rectangle 123" width="15" height="146.135" transform="translate(1034.696 4156.794) rotate(-90)" fill="#1a474e"/>
                            <path id="Path_8" data-name="Path 8" d="M0,0,47.023-.571l7.934-.152L44.691,4.736l-43.968,1Z" transform="matrix(0.883, 0.469, -0.469, 0.883, 1035.047, 4111.957)" fill="rgba(2,53,60,0.9)"/>
                            <path id="Path_9" data-name="Path 9" d="M6.889,5.449,55.057,6.655l9.815.123L54.8,1.422-.079-.029Z" transform="matrix(-0.883, 0.469, -0.469, -0.883, 1181.137, 4112.649)" fill="rgba(2,53,60,0.9)"/>
                            <path id="Path_10" data-name="Path 10" d="M0,0,47.023-.571l7.934-.152L44.691,4.736l-43.968,1Z" transform="matrix(-0.883, -0.469, 0.469, -0.883, 1181.007, 4186.617)" fill="rgba(2,53,60,0.9)"/>
                            <path id="Path_11" data-name="Path 11" d="M6.889,5.449,55.057,6.655l9.815.123L54.8,1.422-.079-.029Z" transform="translate(1035.977 4185.8) rotate(-29)" fill="rgba(2,53,60,0.9)"/>
                            <path id="Path_12" data-name="Path 12" d="M1.013-4.775,33.419,11.342H-.019Z" transform="translate(1033.7 4125.794)" fill="rgba(2,53,60,0.84)"/>
                            <path id="Path_13" data-name="Path 13" d="M1.032,16.117,33.438,0H0Z" transform="translate(1033.838 4161.452)" fill="rgba(2,53,60,0.84)"/>
                            <path id="Path_14" data-name="Path 14" d="M32.386-4.775-.019,11.342H33.419Z" transform="translate(1148.281 4125.794)" fill="rgba(2,53,60,0.84)"/>
                            <path id="Path_15" data-name="Path 15" d="M1.032,0,33.438,16.117H0Z" transform="translate(1181.542 4177.569) rotate(180)" fill="rgba(2,53,60,0.84)"/>
                            <path id="Path_16" data-name="Path 16" d="M1.416-4.775,46.455,19.266,1.01,18.473Z" transform="translate(1096.921 4130.583) rotate(179)" fill="rgba(2,53,60,0.84)"/>
                            <path id="Path_17" data-name="Path 17" d="M1.435,24.042,46.474,0,1.018.164Z" transform="matrix(1, 0.017, -0.017, 1, 1118.796, 4111.319)" fill="rgba(2,53,60,0.84)"/>
                            <path id="Path_18" data-name="Path 18" d="M1.435,24.042,46.474,0,1.029.793Z" transform="matrix(-1, -0.017, 0.017, -1, 1096.611, 4187.273)" fill="rgba(2,53,60,0.84)"/>
                            <path id="Path_19" data-name="Path 19" d="M1.435,0,46.474,24.042,1.029,23.249Z" transform="matrix(1, -0.017, 0.017, 1, 1117.937, 4163.218)" fill="rgba(2,53,60,0.84)"/>
                            <g id="Rectangle_119" data-name="Rectangle 119" transform="translate(1031.7 4109.794)" fill="none" stroke="#02353c" stroke-width="3">
                                <rect width="152" height="79" rx="3" stroke="none"/>
                                <rect x="1.5" y="1.5" width="149" height="76" rx="1.5" fill="none"/>
                            </g>
                        </g>
                    </g>
                </svg>

            </div>
            <div class="language">
                <svg xmlns="http://www.w3.org/2000/svg" width="400" height="135.001" viewBox="0 0 400 135.001">
                    <g id="Group_69" data-name="Group 69" transform="translate(-1043.7 -4078.293)">
                        <rect id="Rectangle_124" data-name="Rectangle 124" width="233.301" height="55.189" rx="4" transform="translate(1210.399 4158.104)" fill="#02353c"/>
                        <text id="Dutch" transform="translate(1216.399 4131.293)" fill="#02353c" font-size="50" font-family="TradeGothicNextLTPro-Bd, Trade Gothic Next LT Pro"><tspan x="0" y="0">Dutch</tspan></text>
                        <text id="Language" transform="translate(1260.049 4199.7)" fill="snow" font-size="32" font-family="TradeGothicNextLTPro-Rg, Trade Gothic Next LT Pro"><tspan x="0" y="0">Language</tspan></text>
                        <g id="Group_71" data-name="Group 71" transform="translate(1043.7 4107.896)">
                            <g id="Rectangle_119" data-name="Rectangle 119" fill="none" stroke="#02353c" stroke-width="3">
                                <rect width="152" height="79" rx="3" stroke="none"/>
                                <rect x="1.5" y="1.5" width="149" height="76" rx="1.5" fill="none"/>
                            </g>
                            <rect id="Rectangle_120" data-name="Rectangle 120" width="149" height="25" transform="translate(2 3)" fill="rgba(2,53,60,0.65)"/>
                            <rect id="Rectangle_121" data-name="Rectangle 121" width="149" height="25" transform="translate(2 52)" fill="rgba(2,53,60,0.85)"/>
                        </g>
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
        <div class="footer_container">
            <div class="footer_item_image">
                <img class="footer_item_image" src="Images/logo_scott/logo_scott/logo_scott_diapositief.png" alt="">
            </div>
            <div class="footer_item">
                <h3 class="footer_item_title">Navigate</h3>
                <ul class="footer_item_list">
                    <a href="#home"><li class="footer_item_list_item">Home</li></a>
                    <a href="#projects"><li class="footer_item_list_item">Projects</li></a>
                    <a href="#about-me"><li class="footer_item_list_item">About Me</li></a
                    <a href="#experience"><li class="footer_item_list_item">Experience</li></a>
                    <a href="#contact"><li class="footer_item_list_item">Contact</li></a>
                </ul>
            </div>
            <div class="footer_item">
                <h3 class="footer_item_title">Relevant</h3>
                <ul class="footer_item_list">
                    <a class="footer_item_list_item_container" href="https://www.linkedin.com/in/scott-van-den-broek-03a11a224/" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="31.815" height="31.814" viewBox="0 0 31.815 31.814">
                            <path id="Icon_awesome-linkedin" data-name="Icon awesome-linkedin" d="M29.542,2.25H2.265A2.282,2.282,0,0,0,0,4.544V31.771a2.282,2.282,0,0,0,2.265,2.294H29.542a2.288,2.288,0,0,0,2.272-2.294V4.544A2.288,2.288,0,0,0,29.542,2.25ZM9.615,29.52H4.9V14.337H9.622V29.52ZM7.258,12.263A2.734,2.734,0,1,1,9.992,9.529a2.735,2.735,0,0,1-2.734,2.734ZM27.291,29.52H22.576V22.134c0-1.761-.036-4.027-2.45-4.027-2.457,0-2.833,1.917-2.833,3.9V29.52H12.577V14.337H17.1V16.41h.064a4.967,4.967,0,0,1,4.467-2.45c4.772,0,5.66,3.146,5.66,7.236Z" transform="translate(0 -2.25)" fill="#fff"/>
                        </svg>
                        <li class="footer_item_list_item">Linkedin</li>
                    </a>
                    <a class="footer_item_list_item_container" href="https://github.com/ScottZ2004/" target="_blank">
                        <svg id="Group_26" data-name="Group 26" xmlns="http://www.w3.org/2000/svg" width="31.815" height="31.814" viewBox="0 0 31.815 31.814">
                            <rect id="Rectangle_64" data-name="Rectangle 64" width="31.815" height="31.815" rx="2" transform="translate(0 0)" fill="#fff"/>
                            <path id="Icon_awesome-github" data-name="Icon awesome-github" d="M9.47,22.79c0,.114-.131.205-.3.205-.188.017-.32-.074-.32-.205,0-.114.131-.205.3-.205C9.322,22.568,9.47,22.659,9.47,22.79Zm-1.775-.257c-.04.114.074.245.245.28a.268.268,0,0,0,.354-.114c.034-.114-.074-.245-.245-.3A.293.293,0,0,0,7.695,22.534Zm2.523-.1c-.166.04-.28.148-.263.28.017.114.166.188.337.148s.28-.148.263-.263S10.383,22.419,10.218,22.436ZM13.974.563A13.688,13.688,0,0,0,0,14.491,14.311,14.311,0,0,0,9.675,28.145c.731.131.988-.32.988-.691,0-.354-.017-2.306-.017-3.5,0,0-4,.856-4.835-1.7,0,0-.651-1.661-1.587-2.089,0,0-1.307-.9.091-.879a3.013,3.013,0,0,1,2.2,1.473,3.017,3.017,0,0,0,4.161,1.193,3.173,3.173,0,0,1,.913-1.924c-3.191-.354-6.41-.816-6.41-6.308A4.326,4.326,0,0,1,6.53,10.352a5.393,5.393,0,0,1,.148-3.876c1.193-.371,3.939,1.541,3.939,1.541a13.485,13.485,0,0,1,7.17,0S20.532,6.1,21.726,6.476a5.391,5.391,0,0,1,.148,3.876,4.437,4.437,0,0,1,1.473,3.362c0,5.508-3.362,5.948-6.553,6.308a3.376,3.376,0,0,1,.97,2.649c0,1.924-.017,4.3-.017,4.772,0,.371.263.822.988.691a14.179,14.179,0,0,0,9.578-13.643A14,14,0,0,0,13.974.563ZM5.548,20.25c-.074.057-.057.188.04.3.091.091.223.131.3.057.074-.057.057-.188-.04-.3C5.754,20.216,5.623,20.176,5.548,20.25Zm-.616-.462c-.04.074.017.166.131.223a.17.17,0,0,0,.245-.04c.04-.074-.017-.166-.131-.223C5.063,19.714,4.972,19.731,4.932,19.788ZM6.781,21.82c-.091.074-.057.245.074.354.131.131.3.148.371.057.074-.074.04-.245-.074-.354C7.027,21.746,6.856,21.729,6.781,21.82Zm-.651-.839c-.091.057-.091.205,0,.337s.245.188.32.131a.26.26,0,0,0,0-.354C6.37,20.964,6.222,20.907,6.131,20.981Z" transform="translate(1.751 1.542)" fill="#02353c"/>
                        </svg>
                        <li class="footer_item_list_item">Github</li>
                    </a>
                </ul>
            </div>
            <div class="footer_item">
                <h3 class="footer_item_title">Contact</h3>
                <ul class="footer_item_list">
                    <a class="footer_item_list_item_container" href="tel:06-25082193">
                        <svg xmlns="http://www.w3.org/2000/svg" width="31.81" height="31.81" viewBox="0 0 31.81 31.81">
                            <path id="Icon_awesome-phone-square-alt" data-name="Icon awesome-phone-square-alt" d="M28.4,2.25H3.408A3.408,3.408,0,0,0,0,5.658V30.652A3.408,3.408,0,0,0,3.408,34.06H28.4a3.408,3.408,0,0,0,3.408-3.408V5.658A3.408,3.408,0,0,0,28.4,2.25ZM27.238,24.075,26.173,28.69a1.065,1.065,0,0,1-1.037.826A20.593,20.593,0,0,1,4.544,8.924,1.115,1.115,0,0,1,5.37,7.887L9.985,6.822a1.3,1.3,0,0,1,.239-.028,1.155,1.155,0,0,1,.979.645l2.13,4.97a1.271,1.271,0,0,1,.086.42,1.207,1.207,0,0,1-.391.824l-2.69,2.2A16.467,16.467,0,0,0,18.2,23.721l2.2-2.69a1.207,1.207,0,0,1,.824-.391,1.267,1.267,0,0,1,.42.086l4.97,2.13a1.154,1.154,0,0,1,.645.979A1.237,1.237,0,0,1,27.238,24.075Z" transform="translate(0 -2.25)" fill="#fff"/>
                        </svg>
                        <li class="footer_item_list_item">06-25082193</li>
                    </a>
                    <a class="footer_item_list_item_container" href="mailto:business@scottzico.com">
                        <svg xmlns="http://www.w3.org/2000/svg" width="31.81" height="31.81" viewBox="0 0 31.81 31.81">
                            <g id="Group_25" data-name="Group 25" transform="translate(-0.66 10)">
                                <rect id="Rectangle_63" data-name="Rectangle 63" width="31.81" height="31.81" rx="2" transform="translate(0.66 -10)" fill="#fff"/>
                                <path id="Icon_material-email" data-name="Icon material-email" d="M23.4,6H5.266A2.225,2.225,0,0,0,3.011,8.188L3,21.315A2.235,2.235,0,0,0,5.266,23.5H23.4a2.235,2.235,0,0,0,2.266-2.188V8.188A2.235,2.235,0,0,0,23.4,6Zm0,4.376-9.064,5.47-9.064-5.47V8.188l9.064,5.47L23.4,8.188Z" transform="translate(2.235 -8.846)" fill="#02353c"/>
                            </g>
                        </svg>
                        <li class="footer_item_list_item">business@scottzico.com</li>
                    </a>
                </ul>
            </div>
        </div>
        <p class="footer_bottom">ⓒ 2022 scottzico.com|Scott Zico van den Broek</p>
    </div>
    <script src="script.js"></script>
</body>
</html>