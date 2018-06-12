<!DOCTYPE html>
<html lang="es"> <!--<![endif]-->
<!-- *******************SECCION ENCABEZADO****************** -->
<?php
    header('Content-Type: text/html; charset=ISO-8859-1');
    include ("php/secciones/pagComun/header.php");
?>
<!-- ******************************************************* -->
<body><!-- Available classes for body: boxed , pattern1...pattern10 . Background Image - example add: data-background="assets/images/boxed_background/1.jpg"  -->
<!-- TOP NAV -->
<!-- ***********SECCION DE MENU*************** -->
<?php
    header('Content-Type: text/html; charset=ISO-8859-1');
    include ("php/secciones/pagComun/menu.php");
    
?>

<!-- ******CONTENT****** --> 
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Grupo ELA</h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">Estas En:</li>
                            <li><a href="home.php">Inicio</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">Grupo ELA</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header> 
                <div class="page-content">
                    <div class="row page-row">
                        <article class="welcome col-md-8 col-sm-7">                         
                            <h3 class="title">EQUIPO DE LIDERAZGO AMPLIADO</h3>
                            <p><img class="img-responsive" src="assets/images/team/equipo_ela.jpg" alt="" /></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras venenatis urna lectus, a euismod metus facilisis sed. Aliquam tristique sapien et tincidunt semper. Mauris ornare, turpis ac molestie molestie, erat nisi placerat ipsum, sit amet imperdiet ipsum lacus eu orci. Suspendisse euismod mollis nibh eu rhoncus. </p>
                            <ul class="custom-list-style">
                                <li><i class="fa fa-check"></i>Lorem ipsum dolor sit ame</li>
                                <li><i class="fa fa-check"></i>Curabitur elit elit</li>
                                <li><i class="fa fa-check"></i>Nunc tincidunt ipsum a risus</li>
                                <li><i class="fa fa-check"></i>Integer vitae nisi a odio</li>
                                <li><i class="fa fa-check"></i>Suspendisse bibendum tempor</li>
                            </ul>
                            
                            <blockquote class="custom-quote">
                                <p><i class="fa fa-quote-left"></i>Viverra magna pellentesque in magnis gravida sit augue felis vehicula vestibulum semper penatibus justo ornare semper Gravida felis platea arcu mus non. Montes at posuere. Natoque.</p>
                                <p class="people"><span class="name">Adam Windsor</span><br><span class="title">Principle, College Green Online</span></p>
                            </blockquote>
                            <p>
                            Morbi semper. Hac euismod bibendum odio sed sociosqu primis magna suscipit facilisi litora viverra eget nibh praesent vehicula luctus Integer nostra ac duis metus orci.
    
    Vehicula praesent dolor quam montes fames risus interdum. Tortor lacinia sem aenean sit tellus montes velit ultricies leo eget felis mollis quam. Non odio leo tempus condimentum. Neque. Potenti ornare sapien diam hymenaeos conubia ac. Euismod, venenatis Vulputate sodales morbi aliquet sollicitudin.    
                            </p>
                        </article><!--//page-content-->
                        <!--*****************************************ASIDE*******************************-->
                        <?php
                            include ("php/secciones/pagComun/aside.php");
                        ?>
                        <!--*****************************************************************************-->
                    </div><!--//page-row-->
                </div><!--//page-content-->
            </div><!--//page--> 
        </div><!--//content-->
    </div><!--//wrapper-->





<!-- *****************SECCION FOOTER *********************** -->
        <?php
            include ("php/secciones/pagComun/footer.php");
        ?>
        <!-- *************************************************** -->



        <!-- *****************SECCION JS_FOOTER ******************** -->
        <?php
            include ("php/secciones/pagComun/js_footer.php");
        ?>
        <!-- ******************************************************* -->
        <!-- <script type="text/javascript" src="assets/js/video.js"></script> -->
</body>

<!-- Mirrored from themes.3rdwavemedia.com/college-green/1.5.2/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Apr 2016 15:42:19 GMT -->
</html>	