<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container my-4">
        <h1 class="display-4">Investigacion</h1>
        <hr>
        <form method="POST" action="{{ route('investigacion.crear') }}">
          @csrf
          <input
            type="text"
            name="enunciado_inv"
            placeholder="Enunciado"
            class="form-control mb-2"
          />
          <input type="text" name="pregunta_pdi" placeholder="Pregunta de investigacion" class="form-control mb-2">
          <input type="text" name="relacion_tema_expectativa" placeholder="Expectativas" class="form-control mb-2">
          <input type="text" name="interes_del_investigador_cp" placeholder="Interes" class="form-control mb-2">
          <input type="text" name="estudios_previos_cp" placeholder="Estudios previos" class="form-control mb-2">
          <input type="text" name="acceso_informacion_cp" placeholder="Acceso a informacion" class="form-control mb-2">
          <input type="text" name="tiempo_recursos_cp" placeholder="Tiempo y recursos" class="form-control mb-2">
          <input type="text" name="asesoria_orientacion_cp" placeholder="Asesoria" class="form-control mb-2">
          <hr>
          <button class="btn btn-primary btn-block" type="submit">Agregar</button>
        </form>        
            <table class="table">
            <thead>
                <tr>
                <th scope="col">#Cod_inv</th>
                <th scope="col">Enunciado_inv</th>
                </tr>
            </thead>
            <tbody>
              @foreach($investigaciones as $investigacion)
                <tr>
                <th scope="row">
                <a href="{{route('investigacion.detail', $investigacion)}}">
                  {{$investigacion->cod_inv}}
                </a>
                </th>
                <td>{{$investigacion->enunciado_inv}}</td>
                </tr>
              @endforeach()
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>