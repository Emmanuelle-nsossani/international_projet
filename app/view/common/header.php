<!DOCTYPE html>
<html lang="<?= $lang ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?></title>
    <link rel="stylesheet" href="app/public/css/<?= $css ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
    <link rel="icon" href="favicon.ico" />
</head>

<body>
    <header>
        <div id="first-header">
            <div class="first-header-sous">
                <!-- From Uiverse.io by Madflows -->
                <div class="toggle-switch">
                    <label class="switch-label">
                        <input id="theme-toggle" type="checkbox" class="checkbox">
                        <span class="slider"></span>
                    </label>
                </div>
                <div id="language-menu">
                    <p>
                        <a href="?lang=en">EN</a> | <a href="?lang=fr">FR</a> | <a href="?lang=bg">BG</a> <!-- | <a href="?lang=vi">VN</a> -->
                    </p>
                </div>
            </div>
            <a href="index.php">
                <svg id="logo-header" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 288 280">
                    <!-- Generator: Adobe Illustrator 28.7.0, SVG Export Plug-In . SVG Version: 1.2.0 Build 136)  -->
                    <g>
                        <g id="Calque_1">
                            <g>
                                <path d="M144.6,217.1c-.9-.6-1-1.5-1.2-2.3-7.3-22-14.5-44-21.8-66-.1-.3-.3-.6-.3-1-.3-1.3-.6-1.9-2.1-.7-2.6,2.1-6.7,1.1-9-2-2.5-3.5-3.1-7.6-3.3-11.7-.4-7.1.3-14.2,1.4-21.2.3-2,0-3.7-1.2-5.4-19.7-28.4-3.2-67.3,30.9-72.8,12.3-2,23.6.7,33.9,7.8,1.4,1,2.1.8,3.2-.3,6.1-6.2,12.2-12.3,18.4-18.4,1.2-1.2,1.2-1.7-.4-2.5-11.6-5.9-23.9-9.7-36.9-11.1-29.4-3-55.8,4.7-78.7,23.4-20,16.3-32.5,37.4-36.8,62.8-5.9,34.1,3,64.2,26,90.2.9,1,1.7,1.9,2.6,2.9,1,1,1.7,2.1.5,3.4-1.3,1.3-2.5.6-3.5-.5-3.5-3.7-6.8-7.5-9.8-11.5-11.6-15.6-18.7-33-20.9-52.3-3.4-30.1,4-57.4,22.8-81.2C76.1,24.3,99.1,10.8,127,6.2c24.1-4,47.2-.1,68.9,11.2,1.6.8,2.6.8,4-.4,3.5-2.9,8-2.6,11.3.6,1.5,1.5,3.2,2.8,4,4.9.8,2,.9,4,0,6-.4,1-.2,1.6.6,2.3,11,9.2,19.8,20.3,26.5,33.1,5.8,11.1,9.5,22.8,11.2,35.2,2.4,16.6,1,32.8-4,48.8-5.3,16.7-14.1,31.2-26.3,43.6-.8.8-1.5,1.7-2.8,1.2-1.6-.7-1.7-2.3-.2-3.8,4.2-4.3,8-8.8,11.4-13.7,9.9-14.4,16.1-30.2,18.2-47.6,2.6-21.9-1.1-42.6-11.3-62.1-6.3-12.1-14.7-22.5-25-31.4-1-.9-1.7-1-2.7,0-7.6,7.7-15.2,15.3-22.9,22.9-.9.9-1,1.5-.5,2.7,7.6,16.7,6.2,32.6-4.1,47.8-1.3,2-2.1,4-1.6,6.5,1.2,5.9,1.9,11.9,1.7,17.9-.2,7.2-1.8,14.1-5.6,20.3-1.2,2-2.6,3.7-4.9,4.5-1.8.6-3.5.3-5.1-.8-1-.7-1.6-.6-2,.6-2.9,8.6-5.9,17.2-8.9,25.8-4,11.4-7.9,22.9-11.9,34.3,0,.2-.3.4-.5.6ZM179.5,80.2c0-1.7-.1-3.4-.3-5.1-2.3-17.1-16.6-28.4-32.8-28.9-12-.4-21.4,5.5-28.3,15-5.6,7.8-6.9,16.6-5.5,26,.1.8.2,1.6,1.5,1.1,4.4-1.7,8.8-1.4,13.2,0,2.6.9,5.2,1.8,7.7,2.8,4.7,1.9,9.4,2.3,14.4,1.4,6.2-1.1,12.4-1.8,18.7-1.5,2.8.1,5.5.4,7.8,2,1.1.7,1.2,0,1.5-.7,1.3-3.9,2-7.9,2-12.1ZM138.5,166.3c.3-.1.7-.3,1-.5,4.1-2.8,8.1-5.6,12.2-8.3,1-.7.9-1.1,0-1.7-3.8-2.4-7.5-4.8-11.2-7.2-.8-.5-1.4-.6-2.2,0-3.1,2.1-6.2,4.2-9.3,6.3-1.1.7-1.4,1.5-.8,2.7.5,1.2.4,2.7,1.7,3.4,2.8,1.8,5.5,3.8,8.5,5.3,0,0,.1,0,.3,0ZM155.9,154.4c1.7-.7,3-2,4.5-2.9,2.4-1.4,4.5-2.8,4.2-6.1,0-.6.2-1.2.5-1.8.6-1.2,0-1.9-.9-2.5-2-1.3-4-2.6-5.9-4-1.1-.8-2-.7-3.1,0-3.8,2.6-7.5,5.2-11.4,7.7-1.2.8-1.1,1.2,0,2,3.7,2.3,7.3,4.6,10.9,6.9.4.3.8.4,1.2.7ZM171,119.9c0-1.4,0-2.2-.2-3-.6-3.5-2.7-6-5.5-6.4-3.2-.5-4.6,1.8-5.9,4.1-2.3,4.1-3.8,8.5-5.7,12.7-.4.9-1.2,1.9.1,2.7,1.3.7,2.2,2.5,4.2,1.1,3.4-2.5,6.9-4.9,10.5-7.1,1.9-1.2,2.8-2.5,2.4-4.1ZM153.8,180.7c0-.5-.6-.7-1.1-1-4.4-2.8-8.8-5.6-13.2-8.3-.7-.4-1.3-.6-2.1-.1-1,.8-2.1,1.5-3.2,2.2-.7.5-.8,1-.5,1.8,1.6,4.7,3.1,9.3,4.6,14,.4,1.2,1.1,1.4,2.2.8,3.9-2.3,7.9-4.7,11.8-7,.8-.5,1.2-1.1,1.4-2.3ZM154.7,176.8c.8-.1.9-.8,1.1-1.5,1.4-4,2.8-8,4.1-12,.3-.9.9-1.9-.3-2.5-1.5-.7-2.6-3-4.8-1.5-4,2.7-7.9,5.5-12,8.2-1.3.9-.9,1.3.2,1.9,3.5,2.2,7,4.4,10.5,6.7.3.2.7.4,1.1.6ZM153.4,134.1c-.2-.3-.4-.5-.6-.7-1.1-1-1.7-.7-2.6.4-3.4,4.6-7,4.7-10.8.4-1.5-1.7-2.1-3.6-2.5-5.7-.3-1.5-.8-1.7-2-.8-2.9,2-5.8,4-8.8,6-.9.6-1.2.9,0,1.7,4.1,2.5,8.1,5.1,12.1,7.7.8.5,1.5.5,2.2,0,4-2.7,8-5.4,12-8.2.3-.2.6-.5,1-.8ZM123.5,137.8c-.6,0-.7.3-.7.6-.1,1-.5,1.9-.1,3,1.1,3.1,2.1,6.3,3.2,9.5.4,1.2.8,1.6,2,.7,2.3-1.7,4.7-3.3,7.1-4.8,1.2-.8.9-1.3-.1-1.9-3.5-2.2-7-4.5-10.5-6.7-.3-.2-.6-.3-.8-.4ZM130.3,120.2c-.8,0-1.7.4-2.5,1.2-2.4,2.3-3.2,5.3-3.8,8.4-.3,1.3.6.9,1.2.5,3-2,6-4.1,9-6.1.8-.6.8-1.1.3-1.8-.9-1.3-2.1-2.2-4.1-2.2ZM170.1,128.5c0-1.5-.8-.9-1.3-.5-2.6,1.7-5.2,3.5-7.8,5.3-.8.6-1,1.1,0,1.7,1.6,1.1,3.3,2.2,4.9,3.3.5.4,1.1.7,1.4-.2,1.2-3.1,2.1-6.3,2.8-9.5ZM141.1,195.6c-.1.1-.3.2-.4.4,1.3,3.8,2.5,7.5,3.9,11.8,1-2.8,1.7-5,2.5-7.2.2-.7.1-1.2-.5-1.6-1.8-1.1-3.7-2.3-5.5-3.4ZM151.6,187.4c-3,1.7-5.4,3.2-7.9,4.6-.9.5-.5.9.1,1.3,1.2.7,2.4,1.5,3.6,2.3.7.4,1.1.4,1.4-.4.8-2.4,1.7-4.8,2.7-7.8Z" />
                                <path d="M207.9,242.3c.5,3.8,1.1,7.7,1.5,11.5.2,1.5,1.1,3.2-.6,4.3-1.9,1.3-3-.5-4.3-1.4-3.1-2.2-6-4.5-9.1-6.8-.3.7.1,1.1.4,1.5,1.6,2.7,3.2,5.4,4.9,8.1.9,1.5.9,2.4-.8,3.2-1.5.8-3,1.6-4.4,2.6-1.3.9-2.2.7-2.9-.8-1.1-2.3-2.3-4.5-3.5-6.7-3.2-6.2-6.8-12.1-10.6-18-.9-1.3-.7-2.1.6-3,6-3.8,6-3.8,11.7.4,2.7,2,5.4,3.9,8.1,5.9.4.3.8.9,1.4.6.6-.3.3-1,.3-1.5-.4-5-.7-10.1-1.1-15.1-.1-1.4.3-2.3,1.6-2.9,1.5-.7,3-1.6,4.4-2.6,1.2-.8,2-.7,2.6.6,4.5,8.7,9.2,17.2,14.6,25.4.8,1.2.4,2-.8,2.6-1.7.9-3.5,1.9-5.1,3-1.4.9-2.2.5-2.9-.9-1.8-3.4-3.6-6.7-5.4-10.1-.2,0-.4,0-.5.1Z" />
                                <path d="M144.4,275.3c-3.5,0-3.8-.2-3.8-3.7,0-8.8-.5-17.5-1.7-26.1-.3-2,.4-2.7,2.3-2.9,4.3-.3,8.6-.8,12.8-1.1,1.6-.1,3.3.1,4.9.5,7.8,2,10.6,11.6,5,17.4-1.2,1.3-1.4,2.2-.5,3.7,1.6,2.5,3.1,5.2,4.5,7.8,1,1.9.8,2.4-1.4,2.6-2,.2-4,.3-5.9.4-1.4.1-2.3-.4-2.9-1.8-1-2.3-2.3-4.5-3.3-6.8-.6-1.4-1.6-1.9-3.1-1.8-1.3,0-1.7.6-1.5,1.8.4,2.2.7,4.3,1,6.5.3,2.3,0,2.6-2.2,2.9-1.4.1-2.8.3-4.3.5ZM148.9,253q.1,4.1,3,4c3.7-.1,5.2-1.2,5.1-4,0-2.8-1.8-4.1-5.4-4-2.6,0-2.7.3-2.6,4Z" />
                                <path d="M246.4,225.3c0,.7-.3,1.1-.6,1.4-4.4,4.6-8.8,9.2-13.1,13.8-1.3,1.4-2.2,1.3-3.5,0-6.5-6.9-13.4-13.5-20.8-19.4-1-.8-.9-1.5,0-2.4,4.4-4.4,8.6-9,12.7-13.7,1.1-1.2,2.1-1.3,3.4-.3,1.1.9,2.2,1.7,3.3,2.5,1.3.9,1.2,1.7,0,2.8-2.3,2.1-4.4,4.3-6.6,6.4-1.1,1.1-1.2,1.9,0,3,1.2,1,2.1,1,3.1-.2,1.9-2.3,3.9-4.4,5.7-6.7.9-1,1.5-1.2,2.4,0,1.1,1.3,2.2,2.6,3.4,3.8,1,1,1,1.7,0,2.7-1.9,1.8-3.8,3.8-5.7,5.6-.8.8-1.5,1.6-.3,2.7,1.1,1,2.1,1.7,3.5.4,2.3-2.1,4.2-4.6,6.2-7.1,1.7-2.1,2-2.1,3.7-.1.9,1.1,1.8,2.2,2.7,3.4.3.4.5.9.7,1.3Z" />
                                <path d="M101.9,233.3c-.8,1.9-1.7,4-3.2,5.9-.6.8-1.4,0-2-.4-2.5-1.8-5-3.6-7.5-5.4-1-.7-2-1.2-2.9.2-.9,1.4-1,2.4.7,3.4,2.4,1.3,4.6,2.9,7,4.2,1.4.8,1.8,1.5.6,2.8-1.1,1.2-2.1,2.5-3,3.9-.8,1.1-1.5,1.1-2.5.3-2.2-1.6-4.5-3.2-6.7-4.7-.8-.5-1.7-1.5-2.5,0-.7,1.2-1.6,2.4,0,3.6,1.7,1.2,3.4,2.3,5.1,3.4,1.2.7,2.5,1.4,3.8,2,1.5.8,1.5,1.8.5,2.9,0,0,0,.1-.1.2-4,5.1-4,5-9.3,1.4-4-2.7-8-5.4-12.2-8-1.6-1-1.8-1.9-.7-3.4,5.7-7.6,10.9-15.5,15.6-23.8.7-1.2,1.4-1.3,2.5-.6,5.2,3.6,10.4,7,15.8,10.2.6.4,1.1.8,1.1,1.9Z" />
                                <path d="M47,224.3c0-12.8,14.4-21.9,25.3-15.8,5.3,2.9,8.3,7.6,8.5,13.8,0,1.6-.6,2.6-2.2,2.9-1.5.3-3.1.6-4.6,1-1.3.3-1.9-.4-2-1.6,0-1.4-.1-2.9-.7-4.2-1.7-3.9-5.7-5.4-9.5-3.5-3.9,1.9-6.3,6.2-5.1,9.7,1,3,3.3,4.5,6.3,5.2,2.8.6,2.8.7,2.2,3.5-1.1,5-2.3,5.6-7.2,4.2-4.9-1.4-11.5-8.1-10.9-15Z" />
                                <path d="M108.5,257.5c0-9.1,5.4-16.6,13.5-17.8,6.3-1,11.7,1,15.8,6.1,1,1.2,1.1,2.4,0,3.6-1,1.1-2,2.2-3,3.3-1,1.1-1.7,1-2.6-.1-1.4-1.9-3.2-3.4-5.6-3.8-1.2-.2-2.4-.2-3.6.3-4,1.6-6.1,7.4-4.2,11.7,1.6,3.6,5.7,4.9,10,3.1q2.9-1.2,4.1,1.6c0,.2.2.4.2.6,1.7,4,1.3,4.9-3,6.6-8.3,3.2-21.4-1.7-21.4-15.2Z" />
                                <path d="M255.3,209.5c0,6.5-2.3,8.3-8.8,7-1.1-.2-1.5-.8-1.2-1.9.3-1,.6-2.1.8-3.2.4-2.6-1.1-4.4-3.7-4.3-1.3,0-2.7.4-4,.6-7.1,1.3-12.2-3.5-11.4-10.7.2-1.8.5-3.5,1.2-5.2.4-.8.9-1.3,1.9-1.2,1.8.2,3.6.4,5.5.6,1.1.1,1.4.6.8,1.6-.3.5-.6.9-.7,1.4-.9,2.5.2,4.3,2.9,4.3,1.4,0,2.9,0,4.3-.5,6.7-1.9,12.8,2.7,12.7,11.3Z" />
                                <path d="M184.2,266.9c.2,1.4-.3,1.7-.9,2-2.3.9-4.7,1.5-7.1,2.1-1.6.4-1.8-.8-2.1-1.9-1.4-6-2.7-12-4.5-17.8-1-3.1-1.9-6.3-2.9-9.4-.6-1.7,0-2.4,1.6-2.7,1.9-.4,3.8-1,5.7-1.7,1.3-.4,2.1-.1,2.4,1.3.5,2.1,1,4.2,1.5,6.4,1.6,7,3.9,13.8,5.9,20.6.2.6.3,1.2.3,1.2Z" />
                                <path d="M65.1,198.9c0,.9-.6,1.2-1.1,1.5-8.6,4.5-16.9,9.4-25.1,14.6-1.1.7-1.9.5-2.6-.6-1.1-1.9-2.3-3.7-3.3-5.6-.6-1.1-.4-2,.9-2.7,8.5-4.3,16.8-9.1,24.8-14.3,1.2-.8,2-.7,2.7.7,1,1.9,2.1,3.7,3.2,5.5.2.4.4.7.5,1Z" />
                            </g>
                        </g>
                    </g>
                </svg>
            </a>
            <div class="first-header-sous">
                <a class="link-button" href=""><?= translateText("S'abonner", $lang); ?></a>
                <a id="icon-person" href="">
                    <svg width="800px" height="800px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 15.503A5.041 5.041 0 1 0 16 5.42a5.041 5.041 0 0 0 0 10.083zm0 2.215c-6.703 0-11 3.699-11 5.5v3.363h22v-3.363c0-2.178-4.068-5.5-11-5.5z" />
                    </svg>
                </a>
            </div>
        </div>
        <div id="second-header">
            <nav>
                <ul>
                    <li><a href=""><?= translateText("Preventions", $lang); ?></a></li>
                    <ul>
                        <li><?= translateText("Rubriques", $lang); ?> &#10095</li>
                        <div id="rub-menu">
                            <li><a href=""><?= translateText("True Crime", $lang); ?></a></li>
                            <li><a href=""><?= translateText("Psychology oOf Murderers", $lang); ?></a></li>
                            <li><a href=""><?= translateText("Dark Web", $lang); ?></a></li>
                            <li><a href=""><?= translateText("Serial Killer", $lang); ?></a></li>
                            <li><a href=""><?= translateText("Unsolved Cases", $lang); ?></a></li>
                            <li><a href=""><?= translateText("Politics and Criminality", $lang); ?></a></li>
                            <li><a href=""><?= translateText("Art", $lang); ?></a></li>
                            <li><a href=""><?= translateText("Gangs", $lang); ?></a></li>
                            <li><a href=""><?= translateText("Sociology of Religious Cult and Crime", $lang); ?></a></li>
                        </div>
                    </ul>
                    <li><a href=""><?= translateText("Contact", $lang); ?></a></li>
                    <li>
                        <form action="">
                            <button>
                                <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="search">
                                    <path d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9" stroke="currentColor" stroke-width="1.333" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                            <input type="text" placeholder="<?= translateText("Search...", $lang); ?>" name="search">
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    </header>