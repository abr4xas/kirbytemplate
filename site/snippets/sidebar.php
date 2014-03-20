            <div class="col-lg-4">
                <div class="well">
                    <legend>Blog Search</legend>
                 <form class="search cf" role="search" action="<?php echo url('search') ?>">
                                    <div class="input-group">
                                        <input type="search" name="q" id="q" placeholder="Search..." class="form-control">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button">
                                                <span class="glyphicon glyphicon-search"></span>
                                            </button>
                                        </span>
                                    </div>
                </form>                    
                    <!-- /input-group -->
                </div>
                <div class="list-group well">
                    <legend>Blogroll</legend>
                  <a href="http://xombra.com" target="_blank" class="list-group-item">xombra.com</a>
                  <a href="http://www.vaslibre.org.ve/" target="_blank" class="list-group-item">vaslibre.org.ve</a>
                  <a href="http://tatica.org" target="_blank" class="list-group-item">tatica.org</a>
                  <a href="http://www.skatox.com/" target="_blank" class="list-group-item">Skatox.com</a>                    
                  <a href="http://blogdefzeta.blogspot.com.es/" target="_blank" class="list-group-item">blogdefzeta</a>                             <a href="http://genesis3g.com" target="_blank" class="list-group-item">Genesis3G</a>           
                </div>
                <!-- /well -->            
                <div class="well">
                    <legend>Publicidad</legend>
                    <?php 
						$banners = array(
 array('//affiliates.mozilla.org/link/banner/53165','//affiliates.mozilla.org/media/uploads/banners/13a610e3d140ae0b9ea7ad2a7c0f77ddba007c4b.png'),
                            array('http://turpial.org.ve/','http://www.ubuntu.org.ve/sites/all/themes/udtheme/images/turpial.png'),
						    array('http://valenciadelrey.com/web/index.php', 'http://valenciadelrey.com/banner/loveval2.jpg'),
                            array('http://www.avisosdigitales.net', 'https://scontent-a-dfw.xx.fbcdn.net/hphotos-ash3/t1/1521251_643718079017570_1236918432_n.png'),
array('//affiliates.mozilla.org/link/banner/42597','//affiliates.mozilla.org/media/uploads/banners/75e624f195107db70dc78c7c496cd76fde65af73.png'),
						    array('http://elvenezolano.tv', 'https://scontent-b-atl.xx.fbcdn.net/hphotos-prn2/t1/1472011_579292972137534_1738496381_n.jpg')
						);
						$rand = mt_rand(0, count($banners)-1);
						echo '<a href="'.$banners[$rand][0].'" target="_blank"><img src="'.$banners[$rand][1].'" class="img-responsive ad"></a>';  
                    ?>                                              
                </div>                
                <!-- /well -->
                <div class="well">
                    <legend>Email Subscriptions</legend>
                    <form class="form-horizontal" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=ElBlogDeAbr4xasVol2', 'popupwindow', 'scrollbars=yes,width=650,height=650');return true">
                       <div class="input-group">
                        <span class="input-group-addon glyphicon glyphicon-envelope"></span>
                        <input class="form-control" type="text" name="email">
                        <input type="hidden" value="ElBlogDeAbr4xasVol2" name="uri"/>
                        <input type="hidden" name="loc" value="en_US"/>
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-ok"></span></button>
                            </span>
                    </div>  
                       <span class="help-block">Delivered by <a href="http://feedburner.google.com" target="_blank">FeedBurner</a></span>  
                    </form>
                </div>  
                <div class="well">
                    <legend>Follow me:</legend>
                    <a href="http://twitter.com/abr4xas" target="_blank" class="btn btn-info btn-lg btn-block" role="button">@abr4xas</a>
                    <!-- button class="btn btn-primary btn-lg btn-block" type="button">Follow @ Facebook</button>
                    <button class="btn btn-danger btn-lg btn-block" type="button">Follow @ G+</button -->
                </div>   
                <div class="well">            
                     <legend>Advertencia:</legend>
                    <div class="alert alert-danger">
                      <p>Este sitio web utiliza cookies propias y de terceros para optimizar tu navegaci&oacute;n, adaptarse a tus preferencias y realizar labores anal&iacute;ticas. Al continuar navegando aceptas nuestra Pol&iacute;tica de Cookies.
                      </p>
                  </div>   
                </div>
                <div class="well">            
                     <legend>Me compras un caf&eacute;?</legend>
                   <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                      <input type="hidden" name="cmd" value="_s-xclick">
                      <input type="hidden" name="hosted_button_id" value="RKG8G3ABP4XSW">
                      <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                      <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                  </form> 
                </div>
            </div> <!-- /col-lg-4 -->
        </div>   