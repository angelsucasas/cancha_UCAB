<!doctype html>
<html lang="en">
  
    <meta charset="utf-8" />
        <title>cancha UCAB</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link href="{{ asset('css/carrucel.css') }}" rel="stylesheet">
       
		<div class="container">
			<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
				<div class="modal-dialog modal-default">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h3>Login to Hosting Portal - Control Panel</h3>
						</div>
						<div class="modal-body">
							<article class="container-form center-block">
								<!-- Form Content HERE! -->
								<form method="post" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal" action="https://secure.yourwebhosting.com/secureLogin" enctype="application/x-www-form-urlencoded">
									<fieldset>
										<input type='hidden' name='__token_timestamp__' value='1426572610'>
										<input type='hidden' name='__token_val__' value='4d96cad055fac46518825357fcb49390'>
										<input type="hidden" name="destination" value="http://www.yourwebhosting.com/controlpanel/index.bml">
										<!-- Name input-->
										<div class="form-group">
											<label class="sr-only" for="credential_0">Username: </label>
											<div class="col-xs-12">
												<input id="credential_0" name="credential_0" type="text" placeholder="Your Username" class="form-control">
											</div>
										</div>
										<!-- Email input-->
										<div class="form-group">
											<label class="sr-only" for="credential_1">Password: </label>
											<div class="col-xs-12">
												<input id="email" type="password" name="credential_1" value="" placeholder="Your Password" class="form-control">
											</div>
										</div>
										<!-- Form actions -->
										<div class="form-group pull-right">
											<div class="col-md-12 text-right">
												<button type="submit" name="submit" value="Sign In" class="btn btn-lg">Submit</button>
											</div>
										</div>
									</fieldset>
								</form>
							</article>
						</div>
						
					</div>
				</div>
			</div>
        </div>
        
		<div class="masthead">
            <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">


                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#bs-carousel" data-slide-to="1"></li>
                    <li data-target="#bs-carousel" data-slide-to="2"></li>
                </ol>
      
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item slides active">
                        <div class="slide-1"></div>
                            <div class="hero">
                                <hgroup>
                                    <h1>Registrarse</h1>        
                                    <h3>forma parte del deporte en la UCAB</h3>
                                </hgroup>
                                <a href="/registrarse"><button  class="btn btn-hero btn-lg" role="button">comenzar</button></a>
                        </div>
                    </div>
                    <div class="item slides">
                        <div class="slide-2"></div>
                            <div class="hero">        
                                <hgroup>
                                    <h1>inicia sesion</h1>        
                                    <h3>ya estas registrado? ven a ver lo nuevo en el deporte ucab</h3>
                                </hgroup>       
                                <a href="/login"><button  class="btn btn-hero btn-lg" role="button">iniciar sesion</button></a>
                            </div>
                        </div>
                        <div class="item slides">
                            <div class="slide-3"></div>
                                <div class="hero">        
                                    <hgroup>
                                        <h1>Nuestras redes sociales</h1>        
                                        <h3>la pagina deporte UCAB, tiene algunos articulos de interes</h3>
                                    </hgroup>
                                    <button class="btn btn-hero btn-lg" role="button">ir a deporte UCAB</button>
                                </div>
                            </div>
                        </div> 
                    </div>
		        </div>
            </div>
        </div>
        

        </body>
    
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      </body>

        
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        
   

</html>
