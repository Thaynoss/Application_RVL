<?php session_start() ?>

<header>
        <div class="container-fluid HeaderBackground">
            <div class="container">
                    <img class="HeaderImg" alt="Logo" src="static/img/logo-rvl-concept-1.png">                    
                <nav>
                    <ul>
                    <div class="row">
                        <div class="col">
                            <a class="Link" href="index.php">Accueil</a>
                        </div>

                        <div class="col">
                            <li class="Deroulant"><a id="MenuD"href="#">Préstations &ensp;</a>
                                <ul class="sous-menu">
                                    <li><a href="#1">Maçonnerie générale</a></li>
                                    <li><a href="#2">PifPafPouf</a></li>
                                </ul>
                            </li>
                        </div>
                    
                        <div class="col">
                            <li class="Deroulant"><a id="MenuD"href="#">Devis &ensp;</a>
                                <ul class="sous-menu">
                                    <li><a href="index.php?page=Devis">Faire un devis </a></li>
                                    <li><a href="#2">Voir devis</a></li>
                                </ul>
                            </li>
                        </div>
                        <?php if($_SESSION["nom"]==NULL){ ?>
                            <div class="col">
                                <a class="Link" href="index.php?page=Compte">Se connecter</a>
                            </div>
                        <?php }else{ ?>
                            <div class="col">
                                <a class="Link" href="index.php?page=Profile">Profile</a>
                            </div>
                        <?php } ?>
                        </div>
                    </ul>
                </nav>
            </div>
        </div>
</header>