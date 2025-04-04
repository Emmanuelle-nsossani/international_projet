<main id="home-page">
    <section id="welcome">
        <h1>Bienvenue <span><?=$_SESSION['username']?></span> !</h1>
    </section>
    <section id="article">
        <h2>Article Populaire <svg id="fire" version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 910.000000 1280.000000"
                preserveAspectRatio="xMidYMid meet">
                <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)">
                    <path d="M3360 12790 c0 -5 -21 -145 -46 -312 -263 -1749 -693 -2985 -1437
-4138 -132 -204 -293 -431 -601 -850 -531 -718 -654 -907 -840 -1280 -226
-454 -346 -864 -412 -1410 -22 -180 -25 -646 -5 -820 110 -972 534 -1831 1312
-2660 512 -546 1321 -1127 1795 -1289 l91 -31 392 0 c215 0 391 3 391 6 0 3
-118 146 -263 317 -318 377 -424 512 -566 722 -361 532 -582 1003 -676 1440
-47 219 -56 398 -29 600 56 433 171 683 560 1210 77 105 223 303 325 440 309
418 464 648 666 990 300 507 562 1065 773 1645 29 80 57 149 61 154 9 10 190
-155 462 -424 752 -740 1092 -1299 1307 -2144 94 -371 114 -517 114 -826 -1
-471 -76 -951 -255 -1624 -177 -668 -401 -1300 -759 -2139 -82 -194 -150 -356
-150 -360 0 -4 116 -7 257 -7 l257 0 201 152 c858 651 1419 1222 1882 1918
531 798 828 1631 915 2565 19 203 16 736 -6 945 -117 1154 -533 2233 -1297
3371 -873 1300 -2145 2535 -3834 3722 l-180 127 -202 0 c-124 0 -203 -4 -203
-10z" />
                </g>
            </svg>
        </h2>
        <div id="article-carousel">
            <div id="info-article">
                <div class="categorie-button">
                    <p>True Crime</p>
                </div>
                <div id="article-content">
                    <h3>Titre de l'article</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio dolorem accusantium eaque omnis molestias natus mollitia quisquam expedita dignissimos dolore ab quas sint maxime nulla, pariatur facilis aut. Odio, sit.</p>
                    <div class="button-more">
                        <p>Lire la suite &#129042;</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="portrait">
        <div id="portrait-conteneur">
            <img id="background-portrait" src="app/public/images/papier.png" alt="paper-background">
            <img id="image-portrait" src="app/public/images/portrait-example-2.jpg" alt="portrait">
            <h2 id="h2-portrait">Jean Paul <br>Le Psychopathe</h2>
            <p id="p-portrait">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur."</p>
            <div class="button-more">
                <p>Lire la suite &#129042;</p>
            </div>
        </div>
    </section>

</main>