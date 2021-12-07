<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TSTM</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="Admin, Dashboard, Bootstrap" />
	<link rel="shortcut icon" sizes="196x196" href="assets/images/logo.png">

	<link rel="stylesheet" href="css/bower/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="ccs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="ccs/bower/animate.css/animate.min.css">

	<link rel="stylesheet" href="css/core.css">
	<link rel="stylesheet" href="css/misc-pages.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script language="javascript" type="text/javascript" src="js/funciones.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
      <script src="sweetalert2.all.min.js"></script>
</head>
<body class="simple-page" style="background-color: #9DB6A9;">
  <form method="POST" action="{{ route('login') }}">
                        @csrf
	<div class="simple-page-wrap">
		<div class="simple-page-logo animated swing">
			<img src="images/logo.png" style="width: 120px;">
	</div><!-- logo -->
	<div class="simple-page-form animated flipInY" id="login-form">
	<h4 class="form-title m-b-xl text-center">Iniciar Sesión</h4>

		<div class="form-group">
			<input id="email" name="email" type="text" class="form-control" placeholder="Email">
                                 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
		</div>

		<div class="form-group">
			<input id="password" name="password" type="password" class="form-control" placeholder="Contraseña">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>


		<button class="btn btn-primary" type="submit" value="" style="background-color: #447769;">ENTRAR</button>

</div><!-- #login-form -->
 </form>
<!-- .simple-page-footer -->


	</div><!-- .simple-page-wrap -->
	<div class="modal fade" id="modal_campos">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content" >

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Mensaje</h4>
              <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              Favor de llenar todos los campos requeridos.
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Aceptar</button>
            </div>

          </div>
        </div>
	</div>
	<div class="modal fade" id="modal_login_error">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content" >

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Mensaje</h4>
              <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              Datos incorrectos, intente de nuevo.
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Aceptar</button>
            </div>

          </div>
        </div>
    </div>
</body>
</html>
