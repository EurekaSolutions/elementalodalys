<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

//
//		print_r($artistas);
/*		foreach ($artistas as $artista) {
			echo $artista->artista->nombre;
			echo "<br>";
		}
*/
//echo '<h1>'.$catalogo->portada.'</h1>';

?>

                <div class="panel-group" id="accordion">
                  <div class="panel">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                          
                          Obras
                          <span style="font-size:11px;" class="glyphicon x"></span>
                        </a>
                      </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                      <div class="panel-body">
                        <div class="row">            
                          <div class="col-md-2">
                          	<?php
                          		foreach ($artistas as $artista) {
                          			echo $artista->nombre." ".$artista->apellido."<br>";
                          		}
                          	?>
                          </div>
                          <div class="col-md-10">
<?php                            
	echo CHtml::ajaxLink(
	    '<div id="req_res">
	    Test request',          // the link body (it will NOT be HTML-encoded.)
	    array('site/reqTest01'),  // the URL for the AJAX request. If empty, it is assumed to be the current URL.
	    array(
	        'update'=>'#req_res'
	    ), array('update'=>'#forAjaxRefresh')
	);
	 
	echo '...</div>';
?>

                            <!-- Fotorama -->
                            <div class="fotorama" data-width="700" data-max-width="100%" data-ratio="500/333" data-fit="cover" data-captions="false" data-auto="false" data-nav="thumbs">
                              <img src="http://s.fotorama.io/okonechnikov/1-lo.jpg" data-caption="fffffdfnsadfjknsafnalskmflaksmdf asfdnjoasjfoaksfd dasfnoasjfdñasjfoasfi sdfjoasñjdfasjdfñoajsdfiajsfd dsafjasodfijasofiñjafd">
                              <img src="http://s.fotorama.io/okonechnikov/2-lo.jpg" data-caption="">
                              <img src="http://s.fotorama.io/okonechnikov/9-lo.jpg" data-caption="MKMKMKMKkdmf fsdkjsldfm dfkmskdflmsdf sdfmksmfdk dskfmskdmfksdf ksdmfks dfmd fkmdf f sdfmsdfmf skfmdksmf sfmskmfksfm skfmskfmksdfm skfmksmfksdmfsd sdmksmfksfmdksdfmfd sdmfksdmkdfms dsmfskmfksmfksmfksmfsd fmskfmskmfksmf sdfkmskfmsdkfmskmsfdmf sdmfskmksfmdsfmsdfkmsfdkm kmfsdkmsfkmfdskmfkmfkmdfs.">
                              <img src="http://s.fotorama.io/okonechnikov/6-lo.jpg" data-caption="">
                              <img src="http://s.fotorama.io/okonechnikov/5-lo.jpg"data-caption="One">
                              <img src="http://s.fotorama.io/okonechnikov/1-lo.jpg" data-caption="fffffdfnsadfjknsafnalskmflaksmdf asfdnjoasjfoaksfd dasfnoasjfdñasjfoasfi sdfjoasñjdfasjdfñoajsdfiajsfd dsafjasodfijasofiñjafd">
                              <img src="http://s.fotorama.io/okonechnikov/2-lo.jpg" data-caption="">
                              <img src="http://s.fotorama.io/okonechnikov/9-lo.jpg" data-caption="MKMKMKMKkdmf fsdkjsldfm dfkmskdflmsdf sdfmksmfdk dskfmskdmfksdf ksdmfks dfmd fkmdf f sdfmsdfmf skfmdksmf sfmskmfksfm skfmskfmksdfm skfmksmfksdmfsd sdmksmfksfmdksdfmfd sdmfksdmkdfms dsmfskmfksmfksmfksmfsd fmskfmskmfksmf sdfkmskfmsdkfmskmsfdmf sdmfskmksfmdsfmsdfkmsfdkm kmfsdkmsfkmfdskmfkmfkmdfs.">
                              <img src="http://s.fotorama.io/okonechnikov/6-lo.jpg" data-caption="">
                              <img src="http://s.fotorama.io/okonechnikov/5-lo.jpg"data-caption="One">
                            </div>
                      
                            <p style="line-height: 20px; padding-top:10px" class="fotorama-caption"></p>


                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
<?php
if ($catalogo){
echo '
                  <div class="panel">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                          Catálogo
                          <span style="font-size:11px;" class="glyphicon x"></span>
                        </a>
                      </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                      <div class="panel-body">
                        
                        <div class="row">
                          <div class="col-md-4 pull-bottom">
';

										$this->widget('ext.SAImageDisplayer', array(
										    'image' => $catalogo[0]->portada,
										    'size' => 'pequena',
										    'class'=>'img-responsive',
										    'defaultImage' => 'default.png',
										    'group' => 'catalogo',
										));

echo '
                          </div>
                          <div class="col-md-4 pull-bottom">';
							foreach ($catalogo as $cat) {
							                            	# code...
							                                                        
                            echo'<p id="catalogo_download"><a href="'.Yii::app()->request->baseUrl.'/'.$cat->pdf.'" target="_blank">'.Yii::t('site','Ver o descargar catálogo - ').Yii::t('site',$cat->datos).'</a></p>';
                            }

							echo '	                            
                          </div>

                        </div>

                      </div>
                    </div>
                  </div>
';
}
?>

<?php
if ($montajes){
				echo '
                  <div class="panel">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                          Montaje
                          <span style="font-size:11px;" class="glyphicon x"></span>
                        </a>
                      </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                      <div class="panel-body">

                            <!-- Fotorama -->
                            <div class="fotorama" data-width="700" data-max-width="100%" data-ratio="500/333" data-fit="cover" data-captions="false" data-auto="false" data-nav="thumbs">
							';
								
									foreach ($montajes as $montaje) {
										$this->widget('ext.SAImageDisplayer', array(
										    'image' => $montaje->imagen,
										    'size' => 'previa',
										    'defaultImage' => 'default.png',
										    'group' => 'montaje',
											'othersAttributes' =>array ('data-caption' =>$montaje->descripcion),
										));
									}

							echo '
		                    </div>
							<!--Caption-->
							<div style="min-height:40px; line-height: 20px; padding-top:10px"  class="fotorama-caption">
							</div>
							
                      </div>
                    </div>
                  </div>

                  ';
}
?>

<?php
if ($vernifinis){
				echo '
                  <div class="panel">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                          Vernissage / Finissage
                          <span style="font-size:11px;" class="glyphicon x"></span>
                        </a>
                      </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse vf" >
                      <div class="panel-body">

                            <div class="fotorama" data-width="700" data-max-width="100%" data-ratio="500/333" data-fit="cover" data-captions="false" data-auto="false" data-nav="thumbs">
                            ';
								
									foreach ($vernifinis as $vernifini) {
										$this->widget('ext.SAImageDisplayer', array(
										    'image' => $vernifini->imagen,
										    'size' => 'previa',
										    'defaultImage' => 'default.png',
										    'group' => 'montaje',
											'othersAttributes' =>array ('data-caption' =>$vernifini->descripcion),
										));
									}

							echo '
		                    </div>
							<!--Caption-->
							<div style="min-height:40px; line-height: 20px; padding-top:10px"  class="fotorama-caption">
							</div>

                     
                          <br>
                          <div class="row">
                          ';


                          
                              print_r($audio);
                           echo '
                              <div class="col-md-1"> 
                                <audio id="myAudio"
                                 <source src="'.Yii::app()->request->baseUrl.'/images/cancion.mp3"
                                         type="audio/mp3">
                                 Your user agent does not support the HTML5 Audio element.
                                </audio>
                                  <span style="font-size:20px;" id="audio" class="glyphicon glyphicon-volume-up" type="button" onclick="aud_play_pause()"></span>

                              </div>
                              <div class="col-md-6 datos_audio">
                                  Datos del audio, estos son los datos del audio si bla bal bal djsnfjf jfn dndn sjndnd sndj. dsjjsdjnd sjnjdnsnd jdnjdn jsndn djndn sdndnd sodkoop.
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>

                  	';
}                  	
?>

                  <div class="panel">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                          Conversatorio
                          <span style="font-size:11px;" class="glyphicon x"></span>
                        </a>
                      </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse">
                      <div class="panel-body">
                        <div class="embed-responsive embed-responsive-16by9">
                          <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/917gIBxmiG0"></iframe>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="panel">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                          Prensa
                          <span style="font-size:11px;" class="glyphicon x"></span>
                        </a>
                      </h4>
                    </div>
                    <div id="collapseSix" class="panel-collapse collapse">
                      <div class="panel-body">
					    <div class="media">
					      <a class="pull-left" href="#">
					        <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIi8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+" style="width: 120px; height: 120px;">
					      </a>
					      <div class="media-body">
					        <h5 class="media-heading">Media heading</h5>
					        <p class="prensa">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
					      </div>
					    </div>
					    <hr>
					    <div class="media">
					      <div class="media-body">
					        <h5 class="media-heading">Media heading</h5>
					        <p class="prensa">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
					      </div>
					    </div>
					    <hr>
					    <div class="media">
					      <a class="pull-left" href="#">
					        <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIi8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+" style="width: 120px; height: 120px;">
					      </a>
					      <div class="media-body">
					        <h5 class="media-heading">Media heading</h5>
					        <p class="prensa">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
					      </div>
					    </div>
                      </div>
                    </div>
                  </div>
                </div>


                <hr>
              <div id="info_expo">
                <?php

                  echo'<w id="info_expo_nombre"> Nombre de la Expo';
/*                  if ($c['nombre2']){
                    echo ' | '.$c['nombre2'];
                  }*/
                  echo '</w>
                  <br> lugar <br> fecha al fecha</div>
                  ';
                ?>
                </div>

