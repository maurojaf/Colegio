<header id="topNav">
<head>
    <?php
    header('Content-Type: text/html; charset=UTF-8'); 
    ?>

     <meta charset="utf-8">
<!-- mobile settings -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
    <!-- WEB FONTS -->
    <link href="fonts.googleapis.com/css9292.css?family=Open+Sans:300,400,700,800" rel="stylesheet" type="text/css" />
   <!-- CORE CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<!-- THEME CSS -->
    <link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/layout.css" rel="stylesheet" type="text/css" />
    <!--<link href="assets/css/color_scheme/orange.css" rel="stylesheet" type="text/css" />-->
    <link href="assets/css/color_scheme/blue.css" rel="stylesheet" type="text/css" title="blue" />
    <!--<link href="assets/css/color_scheme/darkblue.css" rel="stylesheet" type="text/css" title="darkblue" />-->
    <div class="container">    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'> 
     <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">  
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/pretty-photo/css/prettyPhoto.css"> 
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">

    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
    document,'script','../../../connect.facebook.net/en_US/fbevents.js');
    
    fbq('init', '1506230579705064');
    fbq('track', "PageView");</script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1506230579705064&amp;ev=PageView&amp;noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
    </div>
    </head>

        <!-- Mobile Menu Button -->
        <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
        <i class="fa fa-bars"></i>
        </button>
        <!-- Logo text or image -->
        <a class="logo" href="home.php">

            <img src="assets/images/logo.png" alt="guante" />
            <!--<img src="assets/images/logo_gacel.png" alt="gacel" />-->
        </a>

<body class="home-page">
    
        <!-- Top Nav -->
        <div class="navbar-collapse nav-main-collapse collapse pull-right">
            <nav class="nav-main mega-menu">
                <ul class="nav nav-pills nav-main scroll-menu" id="topMain">
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="home.php">
                            Inicio 
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Quienes Somos <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">                               
                                <li><a href="mision.php">Misi&oacute;n</a></li>
                                <li><a href="vision.php">Visi&oacute;n</a></li>
                                <li><a href="cuenta_publica.php">Cuenta P&uacute;blica</a></li>  
                                <li class="dropdown-submenu">
                                    <a class="trigger" tabindex="-1" href="#">Nuestros Trabajadores <i class="fa fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a tabindex="-1" href="profesores.php">Profesores</a></li>
                                        <li><a href="administradores.php">Administradores</a></li>
                                        <li><a href="auxiliares.php">Auxiliares </a></li>
                                    </ul>
                                </li>           
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Perfil del Estudiante <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="valores.php">Valores</a></li>
                                <li><a href="metodos_ensenanza.php">M&eacute;todos de Enseñanza</a></li>   
                                <li><a href="reglamento.php">Reglamento y Normas</a></li>          
                            </ul>
                        </li>                                                               
                <li class="nav-item dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Plan de Proyecto <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="grupo_ela.php">Grupo ELA (Equipo de Liderazgo Ampliado)</a></li>
                                <li><a href="comunidades.php">Comunidades de Aprendizajes</a></li>  
                                <li class="dropdown-submenu">
                                    <a class="trigger" tabindex="-1" href="#">Areas de Desarrollo<i class="fa fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a tabindex="-1" href="equipos_integracion.php">Equipo de Integracion</a></li>
                                        <li><a href="innovacion.php">Equipo de Innovación y Proyectos</a></li>
                                        <li><a href="aliados_estrategicos.php">Aliados Estratégicos</a></li>
                                    </ul>
                                </li>           
                            </ul>
                        </li><!--//dropdown-->
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Talleres <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="taller_arte.php"><i class="fa fa-file-text"></i> Areas Art&iacute;sticas</a></li>
                                <li><a href="taller_ciencia.php"><i class="fa fa-table"></i> Areas Cient&iacute;ficas</a></li>
                                <li><a href="taller_deporte.php"><i class="fa fa-star"></i> Areas Deportivas</a></li>
                                <li><a href="taller_agronomo.php"><i class="fa fa-rocket"></i> Areas Agr&oacute;nomas</a></li> 
                                <li><a href="taller_baile.php"><i class="fa fa-heart"></i> Talleres de Baile</a></li>                                                 
                            </ul>
                        </li><!--//dropdown-->
                   <li class="nav-item dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Padres y Apoderados<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="padres_apoderados.php">CEPA (Centro Padres y Apoderados)</a></li>
                                <li><a href="matriculas.php">Matr&iacute;culas</a></li>            
                            </ul>
                        </li><!--//dropdown-->
                   <li class="nav-item"><a href="equipo_solidario.php">Equipo Solidario</a></li>

            
            </ul>
        </nav>
    </div>
    <!-- /Top Nav -->
</div>
</header>
<span id="header_shadow"></span>
</body>

  


<script type="text/javascript" src="assets/plugins/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="assets/js/scripts.js"></script>
<span id="header_shadow"></span>
<!-- /TOP NAV -->