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
                    <h1 class="heading-title pull-left">Equipo Solidario</h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">Esta En:</li>
                            <li><a href="home.php">Inicio</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">Equipo Solidario</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header> 
                <div class="page-content">
                    <div class="row page-row">
                        <article class="welcome col-md-8 col-sm-7">                         
                            <h3 class="title">Pastoral</h3>
                            <p><img class="img-responsive" src="assets/images/solidario.jpg" alt="" /></p>
                            <p>Unete a nuestro equipo de Pastoral, nos dedicamos a inculcar el sentimiento de la solidaridad y la ayuda, junto a un ambiente grato de amigos unidos por un mismo sentimiento, AYUDAR. <br>

                            <h3 class="tittle">Estas son algunas actividades a realizar: </h3>
                            <ul class="custom-list-style">
                                <li><i class="fa fa-check"></i>• Salidas a Terreno por todo chile Ayudando.</li>
                                <li><i class="fa fa-check"></i>• Ayudantias y Guias durante Actividades Religiosas </li>
                                <li><i class="fa fa-check"></i>• Convivencias </li>
                                <li><i class="fa fa-check"></i>• Dar desayuno a los desamparados. </li>
                                <li><i class="fa fa-check"></i>• Salidas a Hogares de Ancianos</li>
                            </ul>
                            
                            <blockquote class="custom-quote">
                                <p><i class="fa fa-quote-left"></i>Si queremos ver lo que nos ama, miremos el camino que recorre por salvarnos.
</p>
                                <p class="people"><span class="name">Alberto Hurtado</span><br><span class="title">Jesuita y Santo de Chile</span></p>
                            </blockquote>
                            <p>
                            La responsabilidad con el medio ambiente, desarrollando políticas encaminadas a preservar el entorno natural y el fomento de actitudes que favorezcan el logro de estos fines entre todos los miembros de la comunidad educativa.
    
    Vehicula praesent dolor quam montes fames risus interdum. Tortor lacinia sem aenean sit tellus montes velit ultricies leo eget felis mollis quam. Non odio leo tempus condimentum. Neque. Potenti ornare sapien diam hymenaeos conubia ac. Euismod, venenatis Vulputate sodales morbi aliquet sollicitudin.    
                            </p>
                        </article><!--//page-content-->
                        <!-- *****************SECCION ASIDE******************** -->
                        <?php
                            include ("php/secciones/pagComun/aside.php");
                        ?>
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