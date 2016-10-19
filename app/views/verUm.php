<?php
include_once "header.php"
?>

<div class="container">
  <h4>Heading</h4>
  <p>Apenas para teste dsdsdsds</p>
  <br></br>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-comment"></span>
                        Comentários Recentes
                    </h3>
                </div>
                <div class="panel-body">
                    <ul class="media-list">
                        <li class="media">
                            <div class="media-left">
                                <img src="http://placehold.it/60x60" class="img-circle">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    Leonardo
                                    <br>
                                    <small>
                                        Comentou em <a href="#">Cartola</a>
                                    </small>
                                </h4>
                                <p>
                                    Vou marcar 100 pts
                                </p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left">
                                <img src="http://placehold.it/60x60" class="img-circle">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    Ramon
                                    <br>
                                    <small>
                                        Comentou em <a href="#">Engenharia e</a>
                                    </small>
                                </h4>
                                <p>
                                    Professor Ivan....
                                </p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left">
                               <img src="http://placehold.it/60x60" class="img-circle">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    Joevan
                                    <br>
                                    <small>
                                        Comentou em <a href="#">UFBA</a>
                                    </small>
                                </h4>
                                <p>
                                    Vai ter greve...
                                </p>
                            </div>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-default btn-block">Mais Eventos »</a>
                </div>
            </div>
  </div>
  <div class="col-md-6">
    <div class="widget-area no-padding blank">
								<div class="status-upload">
									<form>
										<textarea placeholder="What are you doing right now?" ></textarea>
										<ul>
											<li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Audio"><i class="fa fa-music"></i></a></li>
											<li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Video"><i class="fa fa-video-camera"></i></a></li>
											<li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Sound Record"><i class="fa fa-microphone"></i></a></li>
											<li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Picture"><i class="fa fa-picture-o"></i></a></li>
										</ul>
										<button type="submit" class="btn btn-success green"><i class="fa fa-share"></i> Share</button>
									</form>
								</div><!-- Status Upload  -->
		</div><!-- Widget Area -->
	</div>
  </div>
</div>


<?php
include_once "footer.php"
?>
