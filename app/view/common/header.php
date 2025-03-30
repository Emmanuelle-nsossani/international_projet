<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?></title>
    <link rel="stylesheet" href="app/public/css/<?= $css ?>">
    <link rel="icon" href="favicon.ico" />
</head>

<body>
    <header>
        <div id="first-header">
            <div class="first-header-sous">
                <!-- From Uiverse.io by Madflows -->
                <div class="toggle-switch">
                    <label class="switch-label">
                        <input type="checkbox" class="checkbox">
                        <span class="slider"></span>
                    </label>
                </div>
                <div id="language-menu">
                    <p>
                        <a href="">EN</a> | <a href="">FR</a> | <a href="">BUL</a> | <a href="">VIET</a>
                    </p>
                </div>
            </div>
            <a href="index.php">
                <img id="logo-header" src="app/public/images/header-footer/logo-ice-crimes-white.svg" alt="logo Ice Cream">
            </a>
            <div class="first-header-sous">
                <a class="link-button" href="">S'abonner</a>
                <a id="icon-person" href="">
                    <img src="app/public/images/header-footer/person.svg" alt="S'identifier">
                </a>
            </div>
        </div>
        <div id="second-header">
            <nav>
                <ul>
                    <li><a href="">Préventions</a></li>
                    <ul>
                        <li>Rubriques &#10095</li>
                        <div id="rub-menu">
                            <li><a href="">True Crime</a></li>
                            <li><a href="">Psychology oOf Murderers</a></li>
                            <li><a href="">Dark Web</a></li>
                            <li><a href="">Serial Killer</a></li>
                            <li><a href="">Unsolved Cases</a></li>
                            <li><a href="">Politics and Criminality</a></li>
                            <li><a href="">Art</a></li>
                            <li><a href="">Gangs</a></li>
                            <li><a href="">Sociology of Religious Cult and Crime</a></li>
                        </div>
                    </ul>
                    <li><a href="">Contact</a></li>
                    <li>
                        <form action="">
                            <button>
                                <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="search">
                                    <path d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9" stroke="currentColor" stroke-width="1.333" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                            <input type="text" placeholder="Search.." name="search">
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    </header>