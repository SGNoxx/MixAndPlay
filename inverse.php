<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/facebook.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="div_nav">
            <div class="button-nav">
                <input type="checkbox" id="menu-toggle"/>
                <label  abel id="trigger" for="menu-toggle"></label>
                <label id="burger" for="menu-toggle"></label>
                <ul id="menu">
                    <li><a href="user.html">Profile</a></li>
                    <li><a href="genre.html">Liste des musiques</a></li>
                    <li><a href="inverse.html">Recherche inversé</a></li>
                </ul>
            </div>
            <div class="logo-nav">
                <a href="index.html">
                <img class="img1" src="logo-removebg-preview.png" alt="Logo">
                </a>
            </div>
            <div class="button-con">
                <a href="connexion.html" target="_self" class="design">Connexion / S'inscrire</a>
            </div>
        </div>
    </header>
    <main>
        <section class="blk_1">
            <div class="abc">
                
                <a href="<?php("include_once("gta.php")")?>"><button class="left az">GTA V</button></a>
                <button class="left ae">Elden Ring</button>
                <button class="left ar">Read Dead Redemption</button>
                <button class="left at">Call Of Duty</button>
                <button class="left ay">League Of Legend</button>
            </div>
            <div class="abcd">
                <div class="foto">
                    <i class="fa fa-desktop"></i>
                </div>
                <button class="mid"><nav>CHERCHER</nav></button>
            </div>
            <div class="abcde">
                <button class="right bz"><nav>Final Fantasy</nav></button>
                <button class="right be"><nav>Fallout 3</nav></button>
                <button class="right br"><nav>Dishonored 2 </nav></button>
                <button class="right bt"><nav>The Witcher</nav></button>
                <button class="right by"><nav>Valorant</nav></button>
            </div>
        </section>

        <section class="blk_2">
            <p class="para1">Autres Jeux</p>
            <div>
                <ul class="org">
                    <div class="quatre">
                        <li>Jeu 1</li>
                        <li>Jeu 2</li>
                        <li>Jeu 3</li>
                        <li>Jeu 4</li>
                    </div>
                    <div class="huit">
                        <li>Jeu 5</li>
                        <li>Jeu 6</li>
                        <li>Jeu 7</li>
                        <li>Jeu 8</li>
                    </div>
                    <div class="douze">
                        <li>Jeu 9</li>
                        <li>Jeu 10</li>
                        <li>Jeu 11</li>
                        <li>Jeu 12</li>
                    </div>
                    <div class="seize">
                        <li>Jeu 13</li>
                        <li>Jeu 14</li>
                        <li>Jeu 15</li>
                        <li>Jeu 16</li>
                    </div>
                </ul>
            </div>
            <div class="bas">
                <button class="para2 ">Suivant</button> - <button>Précedent</button>
            </div>
        </section>
        <section class="blk_3">
            
             <p class="jeu">Genre musical du Jeu Sélectionné</p>
            
            <div class="music">
                <div class="display-1">
                    <div class="border do">
                        <img src="#" alt="#">
                    </div>
                    <div class="border re">
                        <p>Descriptif du jeu</p>
                    </div>
                </div>
                <div class="display-2">
                    <p class="border mi">genre musical</p>
                </div>
                <div class="display-3 ">
                    <div class="border si">
                        <p>Descriptif du genre musical</p>
                    </div>
                    <div class="display-4">
                        <nav>
                            <ul class="sol">
                                <li><a href="https://www.google.fr/" target="_blank" rel="noopener noreferrer"><i class="gg-browser"></i></a></li>
                                <li><a href="https://www.youtube.com/" target="_blank" rel="noopener noreferrer"><i class="gg-youtube"></i></a></li>
                                <li><a href="https://twitter.com/" target="_blank" rel="noopener noreferrer"><i class="gg-twitter"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <?php
        include_once("gta.php")
        ?>
