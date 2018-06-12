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
                    <h1 class="heading-title pull-left">Auxiliares</h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">Estas en:</li>
                            <li><a href="home.php">Inicio</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">Auxiliares</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header> 
                <div class="page-content">                 
                    <div class="row page-row">                     
                        <div class="team-wrapper col-md-8 col-sm-7">        
                            <div class="row page-row" >
                                <figure class="thumb col-md-3 col-sm-4 col-xs-6">
                                    <img class="img-responsive" src="assets/images/team/team-1.jpg" alt="" />
                                </figure>
                                <div class="details col-md-9 col-sm-8 col-xs-6">
                                    <h3 class="title">Tio Juanito</h3>
                                    <h4>Jefe Turno Diurno</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse aliquam, tellus id pellentesque viverra, metus lacus lobortis augue, sed malesuada urna sapien id orci. Maecenas pharetra mauris quis tincidunt egestas. Sed condimentum felis quis nulla varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam diam diam, porttitor quis mollis non, suscipit id tellus. Nullam a ultrices sem, vel tincidunt felis. Sed eu suscipit erat. Nam malesuada, leo porta rhoncus blandit, ipsum tellus fringilla mi, ac pretium nisl turpis sit amet purus. Mauris pellentesque tincidunt lacus commodo lobortis. Nulla consectetur scelerisque molestie.</p>                                 
                                </div>                               
                            </div>
                            <div class="row page-row" >
                                <figure class="thumb col-md-3 col-sm-4 col-xs-6">
                                    <img class="img-responsive" src="assets/images/team/team-4.jpg" alt="" />
                                </figure>
                                <div class="details col-md-9 col-sm-8 col-xs-6">
                                    <h3 class="title">Tia Millaray</h3>
                                    <h4>Jefe Turno Vespertino</h4>
                                    <p>Pellentesque eu bibendum massa. Morbi et metus adipiscing libero lobortis accumsan ac eget turpis. Duis vehicula, velit sit amet vehicula gravida, nibh dui cursus risus, eget tristique tortor dolor id ligula. Integer id iaculis ante. In massa dolor, consequat quis sodales vel, cursus sed ligula. Sed neque est, pharetra ac enim ut, dignissim molestie tellus. Cras luctus est sit amet dui condimentum, eu varius tellus molestie. Curabitur eleifend faucibus pharetra. Mauris non elit dui.</p>                                    
                                </div>                               
                            </div>
                            <div class="row page-row" >
                                <figure class="thumb col-md-3 col-sm-4 col-xs-6">
                                    <img class="img-responsive" src="assets/images/team/team-3.jpg" alt="" />
                                </figure>
                                <div class="details col-md-9 col-sm-8 col-xs-6">
                                    <h3 class="title">Fat Magul</h3>
                                    <h4>Barrendera En Jefe</h4>
                                    <p>Donec justo magna, mattis a ipsum in, pretium aliquet dolor. Vestibulum rhoncus dolor placerat diam laoreet dictum. Integer auctor augue eget nibh ultrices, vitae fermentum est vehicula. Nullam suscipit metus felis. Ut arcu ante, mollis quis urna in, facilisis placerat leo. Duis auctor diam at quam laoreet, vitae blandit mi fermentum. Fusce mollis pellentesque sem, non eleifend nisl. Suspendisse nisi nulla, consectetur sed pellentesque vitae.</p>                                    
                                </div>                               
                            </div>
                            <div class="row page-row" >
                                <figure class="thumb col-md-3 col-sm-4 col-xs-6">
                                    <img class="img-responsive" src="assets/images/team/team-2.jpg" alt="" />
                                </figure>
                                <div class="details col-md-9 col-sm-8 col-xs-6">
                                    <h3 class="title">Ms Training Woman</h3>
                                    <h4>Capacitador</h4>
                                    <p>Suspendisse tempus, nibh vel facilisis eleifend, ante lorem ultricies erat, id blandit mauris felis ac elit. Mauris et placerat massa. Duis nec tellus dui. Nullam facilisis lectus a nunc feugiat interdum. Fusce et sem a diam accumsan aliquam. Fusce eu hendrerit massa. Integer eget facilisis metus. Quisque vel lectus sed neque cursus auctor vitae sed nisi. Integer augue mauris, scelerisque sit amet suscipit sit amet, scelerisque in felis. Aenean lacus magna, vestibulum eu pulvinar sed, posuere nec neque.</p>                                    
                                </div>                               
                            </div>
                        </div><!--//team-wrapper-->
                        <aside class="page-sidebar  col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1">      
                            <section class="widget has-divider">
                                <h3 class="title">Download Prospectus</h3>
                                <p>Donec pulvinar arcu lacus, vel aliquam libero scelerisque a. Cras mi tellus, vulputate eu eleifend at, consectetur fringilla lacus. Nulla ut purus.</p>
                                <a class="btn btn-theme" href="#"><i class="fa fa-download"></i>Download now</a>
                            </section><!--//widget-->              
                            <section class="widget row-divider">
                                <h3 class="title">Student Testimonials</h3>
                                <div id="testimonials-carousel" class="testimonials-carousel carousel slide">
                                    <div class="carousel-inner">
                                        <div class="item">
                                            <blockquote class="quote">
                                                <i class="fa fa-quote-left"></i>
                                                I’m very happy interdum eget ipsum. Nunc pulvinar ut nulla eget sollicitudin. In hac habitasse platea dictumst. Integer mattis varius ipsum, posuere posuere est porta vel. Integer metus ligula, blandit ut fermentum a, rhoncus in ligula. Duis luctus.
                                            </blockquote>                
                                            <div class="row">
                                                <p class="people col-md-8 col-md-push-1"><span class="name">Marissa Spencer</span><br><span class="title">Curabitur commodo</span></p>
                                                <img class="profile col-md-4" src="assets/images/testimonials/profile-1.png">
                                            </div>                               
                                        </div><!--//item-->
                                        <div class="item">
                                            <blockquote class="quote">
                                                <i class="fa fa-quote-left"></i>
                                                I'm very pleased commodo gravida ultrices. Sed massa leo, aliquet non velit eu, volutpat vulputate odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse porttitor metus eros, ut fringilla nulla auctor a.
                                            </blockquote>
                                            <div class="row">
                                                <p class="people col-md-8 col-md-push-1"><span class="name">Marco Antonio</span><br><span class="title"> Gravida ultrices</span></p>
                                                <img class="profile col-md-4" src="assets/images/testimonials/profile-2.png">
                                            </div>                 
                                        </div><!--//item-->
                                        <div class="item active">
                                            <blockquote class="quote">
                                                <i class="fa fa-quote-left"></i>
                                                I'm delighted commodo gravida ultrices. Sed massa leo, aliquet non velit eu, volutpat vulputate odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse porttitor metus eros, ut fringilla nulla auctor a.
                                            </blockquote>
                                            <div class="row">
                                                <p class="people col-md-8 col-md-push-1"><span class="name">Kate White</span><br><span class="title"> Gravida ultrices</span></p>
                                                <img class="profile col-md-4" src="assets/images/testimonials/profile-3.png">
                                            </div>                 
                                        </div><!--//item-->
                                        
                                    </div><!--//carousel-inner-->
                                    <div class="carousel-controls">
                                        <a class="prev" href="#testimonials-carousel" data-slide="prev"><i class="fa fa-caret-left"></i></a>
                                        <a class="next" href="#testimonials-carousel" data-slide="next"><i class="fa fa-caret-right"></i></a>
                                    </div><!--//carousel-controls-->
                                </div><!--//testimonials-carousel-->                             
                            </section><!--//widget-->
                        </aside>
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