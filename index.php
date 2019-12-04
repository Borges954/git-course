<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	 <link href="https://framework-gb.cdn.gob.mx/assets/styles/main.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-inverse sub-navbar navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#subenlaces">
        <span class="sr-only">Interruptor de Navegación</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Semarnat</a>
    </div>
    <div class="collapse navbar-collapse" id="subenlaces">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Enlace</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Desplegable <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Acción</a></li>
            <li><a href="#">Otra acción</a></li>
            <li><a href="#">Algo más aquí</a></li>
            <li class="divider"></li>
            <li><a href="#">Enlace separado</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


<form role="form">
  <div class="form-group">
    <label class="control-label" for="email-01">Correo electrónico:</label>
    <input class="form-control" id="email-01" placeholder="Correo electrónico" type="text">
  </div>
  <div class="form-group">
    <label class="control-label" for="password-01">Contraseña</label>
    <input class="form-control" id="password-01" placeholder="Contraseña" type="password">
  </div>
  <div class="form-group">
    <label class="control-label" for="file-01">Cargar archivo:</label>
    <input id="file-01" type="file">
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox">
      Acepto los términos
    </label>
  </div>
  <div class="form-group">
    <textarea class="form-control" rows="3"></textarea>
  </div>
  <button class="btn btn-primary pull-right" type="submit">Enviar</button>
</form>


<form class="form-inline" role="form">
  <div class="form-group">
    <label class="sr-only" for="email-02">Correo electrónico:</label>
    <input class="form-control" id="email-02" placeholder="Ingrese su email" type="text">
  </div>
  <div class="form-group">
    <label class="sr-only" for="password-02">Contraseña</label>
    <input class="form-control" id="password-02" placeholder="Ingrese su contraseña" type="password">
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox">
      Recordarme
    </label>
  </div>
  <button class="btn btn-primary" type="submit">Ingresar</button>
</form>


<form class="form-horizontal" role="form">
  <div class="form-group">
    <label class="col-sm-3 control-label" for="email-03">Correo electrónico:</label>
    <div class="col-sm-9">
      <input class="form-control" id="email-03" placeholder="Correo electrónico" type="text">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-3 control-label" for="password-03">Contraseña:</label>
    <div class="col-sm-9">
      <input class="form-control" id="password-03" placeholder="Contraseña" type="password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <div class="checkbox">
        <label>
          <input type="checkbox">
          Recordarme
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button class="btn btn-primary pull-right" type="submit">Enviar</button>
    </div>
  </div>
</form>



<select class="form-control">
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
</select>
...
<select multiple class="form-control">
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
</select>


	<script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>
</body>
</html>