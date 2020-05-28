<?php
    echo"<!DOCTYPE html>";
    echo"<html lang='pt-br'>";
        echo"<head>";
            echo"<title>Smart Deaf - Contato</title>";
            echo"<meta charset='utf-8'>";
            echo"<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>";
            echo"<link rel='stylesheet' href='../css/bootstrap.min.css'>";
            echo"<link rel='stylesheet' href='../css/font-awesome.min.css'>";
            echo"<link rel='stylesheet' href='../css/elegant-fonts.css'>";
            echo"<link rel='stylesheet' href='../css/themify-icons.css'>";
            echo"<link rel='stylesheet' href='../css/swiper.min.css'>";
            echo"<link rel='stylesheet' href='../css/style.css'>";
       echo" </head>";

        echo"<body class='contato'>";
            echo"<div class='page-header'>";
                echo"<header class='site-header'>";
                    echo"<div class='nav-bar'>";
                        echo"<div class='container'>";
                            echo"<div class='row'>";
                                echo"<div class='col-9 col-lg-3'>";
                                    echo"<div class='site-branding'>";
                                        echo "<a href='index.html'>";
                                            echo"<figure class='logo'>";
                                                echo"Smart Deaf";
                                            echo"</figure>";
                                        echo "</a>";
                                    echo"</div><!-- .site-branding -->";
                                echo"</div><!-- .col -->";

                                echo"<div class='col-3 col-lg-9 flex justify-content-end align-content-center'>";
                                    echo"<nav class='site-navigation flex justify-content-end align-items-center'>";
                                        echo"<ul class='flex flex-column flex-lg-row justify-content-lg-end align-content-center'>";
                                            echo"<li><a href='../index.html'>Home</a></li>";
                                            echo"<li><a href='../sobre.html'>Sobre</a></li>";
                                            echo"<li><a href='../tradutor.html'>Tradutor</a></li>";
                                            echo"<li><a href='../dicionario.html'>Dicionário</a></li>";
                                            echo"<li  class='current-menu-item'><a href='../contato.html'>Contato</a></li>";
                                        echo"</ul>";
                                        echo"<div class='hamburger-menu d-lg-none'>";
                                            echo'<span></span>';
                                            echo'<span></span>';
                                            echo'<span></span>';
                                            echo'<span></span>';
                                        echo'</div><!-- .hamburger-menu -->';
                                    echo'</nav><!-- .site-navigation -->';
                                echo"</div><!-- .col -->";
                            echo"</div><!-- .row -->";
                        echo"</div><!-- .container -->";
                    echo"</div><!-- .nav-bar -->";
                echo"</header><!-- .site-header -->";

                echo"<div class='page-header-overlay'>";
                    echo"<div class='container'>";
                        echo"<div class='row'>";
                            echo"<div class='col-12'>";
                                echo"<header class='entry-header'>";
                                    echo"<h1>CONTATO</h1>";
                                echo"</header><!-- .entry-header -->";
                            echo"</div><!-- .col -->";
                        echo"</div><!-- .row -->";
                    echo"</div><!-- .container -->";
                echo"</div><!-- .page-header-overlay -->";
            echo"</div><!-- .page-header -->";

        echo"<div class='container'>";
            echo"<div class='row'>";
                echo"<div class='col-12'>";
                    echo"<div class='breadcrumbs'>";
                        echo"<ul class='flex flex-wrap align-items-center p-0 m-0'>";
                            echo"<li><a href='../index.html'><i class='fa f-home'></i> Home</a></li>";
                            echo"<li>Contato</li>";
                        echo"</ul>";
                    echo"</div><!-- .breadcrumbs -->";
                echo"</div><!-- .col -->";
            echo"</div><!-- .row -->";

                /*----------------------------------------
                #Envia os dados do formulário para o email
                ------------------------------------------*/

        @$nome = $_POST[nome];
        @$email = $_POST[email];
        @$msg = $_POST[mensagem];


            $destinatario = "tradutor.smartdeaf@gmail.com";
            $assunto = "Contato pelo site";
            $corpo = "Mensagem<br>";
            $corpo .= "Nome: $nome\n";
            $corpo .= "E-mail: $email\n";
            $corpo .= "Mensagem: $msg\n";

            $header = "Content-Type: text/html; charset= utf-8\n";
            $header = "From: $email Reply-to: $email\n";


        mail($destinatario, $assunto, $corpo, $header);

            echo"<h2 class='entry-title'>Obrigado!</h2>";

            echo"<p>Contato realizado com sucesso. Em breve a equipe de desenvolvimento entrará em contato se necessário.</p>";

            
           echo"<div class='hero-content-button flex  justify-content-center align-items-start'>";
                echo"<footer class='voltar'>";
                    echo"<center><a href='../contato.html'>VOLTAR</a></center>";
                echo"</footer><!-- .entry-footer -->";
            echo"</div><!--hero-content button-->";
    


             echo"<footer class='site-footer'>";
             echo"<div class='footer-widgets'>";
                 echo"<div class='container'>";
                     echo"<div class='row'>";
                         echo"<div class='col-12 col-md-6 col-lg-3'>";
                             echo"<div class='foot-about'>";
                                echo"<a class='foot-logo' href='../index.html'><img src='../images/logo-mobile.png' alt=''></a>";
                                echo"<p>Smart Deaf, sempre buscando o melhor para o usuário! </p>";
                             echo"</div><!-- .foot-about -->";
                         echo"</div><!-- .col -->";

                         echo"<div class='col-12 col-md-6 col-lg-3 mt-5 mt-md-0'>";
                             echo"<div class='foot-contact'>";
                                 echo"<h2>Informações para contato:</h2>";

                                 echo"<ul>";
                                     echo"<li>Email: tradutor.smartdeaf@gmail.com</li>";
                                 echo"</ul>";
                             echo"</div><!-- .foot-contact -->";
                         echo"</div><!-- .col -->";

                         echo"<div class='col-12 col-md-6 col-lg-3 mt-5 mt-lg-0'>";
                             echo"<div class='quick-links flex flex-wrap'>";
                                 echo"<h2 class='w-100'>Páginas úteis</h2>";

                                 echo"<ul class='w-50'>";
                                     echo"<li><a href='../sobre.html'>Sobre </a></li>";
                                     echo"<li><a href='../termos-uso.html'>Termos de uso </a></li>";
                                     echo"<li><a href='../contato.html'>Contato</a></li>";
                                 echo"</ul>";
                             echo"</div><!-- .quick-links -->";
                         echo"</div><!-- .col -->";

                         echo"<div class='col-12 col-md-6 col-lg-3 mt-5 mt-lg-0'>";
                             echo"<div class='follow-us'>";
                                 echo"<h2>Redes sociais</h2>";

                                 echo"<ul class='follow-us flex flex-wrap align-items-center'>";
                                     echo"<li><a href='      '><i class='fa fa-facebook'></i></a></li>";
                                     echo"<li><a href='       '><i class='fa fa-twitter'></i></a></li>";
                                 echo"</ul>";
                             echo"</div><!-- .quick-links -->";
                         echo"</div><!-- .col -->";
                     echo"</div><!-- .row -->";
                 echo"</div><!-- .container -->";
             echo"</div><!-- .footer-widgets -->";

            
         echo"</footer><!-- .site-footer -->";

         echo"<script type='text/javascript' src='../js/jquery.js'></script>";
         echo"<script type='text/javascript' src='../js/swiper.min.js'></script>";
         echo"<script type='text/javascript' src='../js/masonry.pkgd.min.js'></script>";
         echo"<script type='text/javascript' src='../js/jquery.collapsible.min.js'></script>";
         echo"<script type='text/javascript' src='../js/custom.js'></script>";

     echo"</body>";
 echo"</html>";

    ?>﻿