<!DOCTYPE html>
<html lang="<?php echo Yii::app()->language; ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/portfolio-item.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/fotorama.css" rel="stylesheet">
</head>

<body>

<div id="wrap">
    <div class="barra_superior">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a  href="http://www.odalys.com" target="_blank">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logoodalys.png" width="80px;">
                </a>           

                <?php /*echo CHtml::link('Español',array('Site/Trans','_lang'=>'es'))

                 echo "----";

                 echo CHtml::link('English',array('Site/Trans','_lang'=>'en'))*/?>

                <?php /*$seleccionado = Yii::app()->language;

                    echo CHtml::dropDownList('idioma', $seleccionado,

                    CHtml::listData(Idiomas::model()->findAll(), 'idioma', 'nombre'),

                    array('onhaschange'=>'location.assign('.Yii::app()->createUrl('site/trans',array('_lang' => $seleccionado)).')'));*/

                ?>

                <div class="pull-right">
                    <div id="language-selector">
                        <?php 
                            $this->widget('application.components.widgets.LanguageSelector');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>

    <div class="container">

        <div class="row">

            <div class="col-md-2">
                <div class="bs-docs-sidebar hidden-xs hidden-sm affix" role="complementary">
                    <a href="<?php echo Yii::app()->request->baseUrl; ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logonuevo.png" width="150px;"/></a><br><br>

                </div>
            </div>

            <div class= "col-md-10">                    
      
                <nav class="navbar" role="navigation">

                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                        <a href="<?php echo Yii::app()->request->baseUrl; ?>" type="button" class="visible-xs-block visible-sm-block btn btn-link pull-left" style="padding-bottom:15px;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logonuevo.png" width="130px;">    </a>
                      
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                              
                            <div>&nbsp;&nbsp;&nbsp;
                            <span class="glyphicon glyphicon-align-justify"></span></div>
                            </button>

                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                     
                        <div class="col-md-4 collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                            <?php
                            // @TODO: normalize items & apply friendly urls
                            $this->widget( 'zii.widgets.CMenu', [
                                'items'          => [
                                    [ 'label' => Yii::t('site','Exposiciones | Ferias'), 'url' => [ 'site/exposicionesferias' ] ],
                                    [ 'label' => Yii::t('site','Artistas'), 'url' => [ 'site/artistas' ] ],
                                    [ 'label' => Yii::t('site','Alianzas'), 'url' => [ 'site/alianzas' ] ],
                                    [ 'label' => Yii::t('site', 'Residencia para artistas'), 'url' => [ 'site/becas' ] ],
                                    [ 'label' => Yii::t('site','Quiénes somos'), 'url' => [ 'site/quienessomos' ] ],
                                    [ 'label' => Yii::t('site','Contacto'), 'url' => [ 'site/contacto' ] ],
                                ],
                                'activeCssClass' => 'active',
                                'htmlOptions'    => [ 'class' => 'nav navbar-nav menuppal' ],
                            ] );
                            ?>

                        </div>

                        <!-- /.navbar-collapse -->
                    <!-- /.container -->
                </nav>
                <div class="visible-xs-block visible-sm-block">
                    <br>
                </div>
                <!-- Portfolio Item Row -->

                    <div class="col-md-12">

					   <?php echo $content; ?>		   
                    </div>
            </div>
        </div>

        <div class="pull-right go_on_top">
        <?php
            $this->widget('ext.ScrollTop', array(
                //Default values
                'fadeTransitionStart'=>10,
                'fadeTransitionEnd'=>200,
                'speed' => 'slow'
            ));
        ?>
        </div>

    </div>
</div>
<br><br>
<div id="footer">
<footer>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5><?php  echo Yii::t('site','Sobre Elemental');?></h5>
                <p style="font-size:12px;"><?php  echo Yii::t('site','ELEMENTAL Proyecto nace como iniciativa de la Fundación Odalys con el fin de generar un mecanismo de inserción de artistas emergentes en el mundo del arte');?>
                <a href="sobreElemental.php"><w style="font-size: 11px;"> (<?php  echo Yii::t('site','Ver más');?>) </w></a></p>
                <br>
                <a  href="http://www.odalys.com" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logoodalys.png" width="120px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/fundacion.png" width="120px;">

            </div>

            <div class="col-md-2">
                <h5><?php  echo Yii::t('site','Navega');?></h5>
                <p class="footernavega" style="font-size:12px;">
                    <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/exposicionesferias"><?php  echo Yii::t('site','Exposiciones | Ferias');?></a><br/>
                    <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/artistas"><?php  echo Yii::t('site','Artistas');?></a><br/>
                    <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/alianzas"><?php  echo Yii::t('site','Alianzas');?></a><br/>
                    <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/becas"><?php  echo Yii::t('site','Residencia para artistas');?></a><br/>
                    <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/quienessomos"><?php  echo Yii::t('site','Quiénes somos');?></a><br/>
                    <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/contacto"><?php  echo Yii::t('site','Contacto');?></a><br/>

                </p>

            </div>

            <div class="col-md-2">
                <h5><?php  echo Yii::t('site','Redes Sociales');?></h5>
            <p class="footernavega" style="font-size:12px;line-height:30px;">

                    <a  href="https://www.facebook.com/Elemental.Proyecto"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/social/Facebook-icon.png" width="25px"> Facebook</a><br>
                    <a  href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/social/Youtube-icon.png" width="25px"> Youtube</a><br>
                </p>
            </div>

            <div class="col-md-4">
                <h5><?php  echo Yii::t('site','Alianzas');?></h5>
                            <p style="font-size:12px;line-height:40px;">

                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logos_alianzas/GI.png" width="80px"><br>
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logos_alianzas/logo_berlin.png" height="36px;">


<!--
borrar div y descomentar el logo
-->
<div style="height:30px"></div>
<!--

                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logos_alianzas/mome.png" height="22px;">

-->


                </p>

            </div>

        </div>

        <hr class="clara">

        <div class="row">

            <div class="col-md-12">   

                <p class="copyright">Copyright &copy; Elemental 2014</p>

            </div>

        </div>

    </div>

</footer>

</div>



              



<!-- Bootstrap Core JavaScript -->

	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>



    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/stickySidebar.js"></script> 

  <!-- Fotorama -->

  <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/fotorama.js"></script>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>

<script>

  $(document).ready(function() {

        var showChar = 300;

        var ellipsestext = "...";

        var moretext = "<?php  echo Yii::t('site','leer más');?>";

        var lesstext = "<?php  echo Yii::t('site','ocultar');?>";

        $('.more').each(function() {

            var content = $(this).html();

     

            if(content.length > showChar) {

     

                var c = content.substr(0, showChar);

                var h = content.substr(showChar-1, content.length - showChar);

     

                var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span><a href="" class="morelink">' + moretext + '</a></span>';

     

                $(this).html(html);

            }

     

        });

     

        $(".morelink").click(function(){

            if($(this).hasClass("less")) {

                $(this).removeClass("less");

                $(this).html(moretext);

            } else {

                $(this).addClass("less");

                $(this).html(lesstext);

            }

            $(this).parent().prev().toggle();

            $(this).prev().toggle();

            return false;

        });

    







    });



$('.collapse').on('shown.bs.collapse', function(){

$(this).parent().find(".glyphicon.x").addClass("glyphicon-chevron-down");

}).on('hidden.bs.collapse', function(){

$(this).parent().find(".glyphicon.x.glyphicon-chevron-down").removeClass("glyphicon-chevron-down");



});







/*$('.fotorama')

    .on('fotorama:show', function (e, fotorama) {    

        fotorama.$caption = fotorama.$caption || $(this).next('.fotorama-caption');

        fotorama.$caption.text(fotorama.activeFrame.caption);

    })

    .fotorama();*/



function aud_play_pause() {

  var myAudio = document.getElementById("myAudio");

  if (myAudio.paused) {

    myAudio.play();

    document.getElementById("audio").className = "glyphicon glyphicon-volume-off";



  } else {

    myAudio.pause();

    document.getElementById("audio").className = "glyphicon glyphicon-volume-up";



  }

}





$('.vf').on('shown.bs.collapse', function(){

    myAudio.play();

    document.getElementById("audio").className = "glyphicon glyphicon-volume-off";

}).on('hidden.bs.collapse', function(){

    myAudio.pause();

    document.getElementById("audio").className = "glyphicon glyphicon-volume-up";  



});





</script>



</body>



</html>

