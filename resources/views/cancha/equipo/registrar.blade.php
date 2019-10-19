<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #0F5387;
  width: 100%;
}
.cities {
  background-color: #F7F4F9;
  color: black;
  padding: 16px 20px;
  margin: 8px 16px;
  

  width: 70%;
  opacity: 0.8;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: #A695EE;
  width: 100%;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action="/equipo/guardar" method="POST">
@csrf
  <div align="center" class="container">
  <h1>Registro de equipo</h1>
    <hr>
    <input type="text" placeholder="ingrese el nombre del equipo" name="nom" required>
    <hr>


    <label ><b>seleccione los jugadores a registrar</b></label>
    <br>
    <div class="form-group">
        {!! Form::Label('item', 'Jugador 1') !!}
        {!! Form::select('jugador1', $solucion, null, ['class' => 'cities']) !!}
    </div>
  
    <div class="form-group">
        {!! Form::Label('item', 'Jugador 2') !!}
        {!! Form::select('jugador2', $solucion, null, ['class' => 'cities']) !!}
    </div>
    <div class="form-group">
        {!! Form::Label('item', 'Jugador 3') !!}
        {!! Form::select('jugador3', $solucion, null, ['class' => 'cities']) !!}
    </div>
  
    <div class="form-group">
        {!! Form::Label('item', 'Jugador 4') !!}
        {!! Form::select('jugador4', $solucion, null, ['class' => 'cities']) !!}
    </div>
    <div class="form-group">
        {!! Form::Label('item', 'Jugador 5') !!}
        {!! Form::select('jugador5', $solucion, null, ['class' => 'cities']) !!}
    </div>
    <div class="form-group">
        {!! Form::Label('item', 'Jugador 6') !!}
        {!! Form::select('jugador6', $solucion, null, ['class' => 'cities']) !!}
    </div>

 
    
    

    <hr>
    <p> <a>recuerde que el orden de los jugadores no tiene ninguna relevancia</a>.</p>
    
    <div align="center" class="container">
      <button  type="submit"  class="registerbtn" >Registrar</button>
    </div>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>

</body>
</html>