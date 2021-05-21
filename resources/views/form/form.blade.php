<!DOCTYPE html>

<html>
    <head>
        <title>Form mental health</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
        <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    </head>
    <body>
        @include('includes.navbar')
        <div class="container mt-5">
            <h1 class="text-center" >Cuestionario Salud Mental en el Trabajo</h1>
            <form class="mt-5" action="{{route('form.store')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="name">Nombre</label>
                  <input type="name" class="form-control" id="exampleInputName" aria-describedby="Name" placeholder="Nombre" name="name" required>
                  <small id="nameHelp" class="form-text text-muted">Si no se siente cómodo poniendo su nombre, ponga la palabra Anónimo.</small>
                </div>
                <div class="form-group">
                    <label for="age">Edad</label>
                    <input type="age" class="form-control" id="exampleInputAge" aria-describedby="Age" placeholder="Edad" name="age" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">¿En las últimas 4 semanas, ha tenido problemas de trabajo o salud por salud física?</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="fourWeeks" required>
                      <option value="" >Seleccione una opción...</option>
                      <option value="No" >No</option>
                      <option value="Yes" >Si</option>
                      <option value="Nose" >No lo sé</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">¿Cómo calificaría su salud mental?</label>
                    <select class="form-control" id="exampleFormControlSelect2" name="mentalHealth" required>
                      <option value="" >Seleccione una opción...</option>
                      <option value="Excelente" >Excelente</option>
                      <option value="Algo Bueno" >Algo Bueno</option>
                      <option value="Promedio" >Promedio</option>
                      <option value="Algo Pobre" >Algo Pobre</option>
                      <option value="Pobre" >Pobre</option>
                      <option value="No lo sé" >No lo sé</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect3">¿Te has sentido deprimido durante las últimas 2 semanas?</label>
                    <select class="form-control" id="exampleFormControlSelect3" name="depressed" required>
                      <option value="" >Seleccione una opción...</option>
                      <option value="No" >No</option>
                      <option value="Si" >Si</option>
                      <option value="No lo sé" >No lo sé</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect4">¿Tu salud te impide completar tus actividades con éxito?</label>
                    <select class="form-control" id="exampleFormControlSelect4" name="activity" required>
                      <option value="" >Seleccione una opción...</option>
                      <option value="No" >No</option>
                      <option value="Yes" >Si</option>
                      <option value="Nose" >No lo sé</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect5">¿Cómo consideras tu ámbiente laboral?</label>
                    <select class="form-control" id="exampleFormControlSelect5" name="workEnviroment" required>
                        <option value="" >Seleccione una opción...</option>
                        <option value="Excelente" >Excelente</option>
                        <option value="Algo Bueno" >Algo Bueno</option>
                        <option value="Promedio" >Promedio</option>
                        <option value="Algo Pobre" >Algo Pobre</option>
                        <option value="Pobre" >Pobre</option>
                        <option value="No lo sé" >No lo sé</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>¿Qué tan presionado te sientes con los pendientes de trabajo?    </label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tasks" id="inlineRadio1" value="1" >
                        <label class="form-check-label" for="inlineRadio1" value="1">1</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tasks" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">2</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tasks" id="inlineRadio3" value="3" >
                        <label class="form-check-label" for="inlineRadio3">3</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tasks" id="inlineRadio4" value="4" >
                        <label class="form-check-label" for="inlineRadio4">4</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tasks" id="inlineRadio5" value="5" >
                        <label class="form-check-label" for="inlineRadio5">5</label>
                      </div>

                      <small id="nameHelp" class="form-text text-muted">Donde 1 es nada presionado y 5 es demasiado presionado</small>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect6">¿Consideras que necesitas un programa de ayuda psicológica?</label>
                    <select class="form-control" id="exampleFormControlSelect6" name="help" required>
                      <option value="" >Seleccione una opción...</option>
                      <option value="No" >No</option>
                      <option value="Yes" >Si</option>
                      <option value="Nose" >No lo sé</option>
                    </select>
                </div>
                <div class="form-check mb-3">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                  <label class="form-check-label" for="exampleCheck1">Acepto los términos y condiciones de privacidad</label>
                </div>

                <button type="submit" class="mt-4 btn success btn-lg btn-block elements-color alert alert-success">Subir encuesta</button>
              </form>

        </div>
        
    </body>
    @include('includes.footer')
</html>

<style>
  @font-face {
      font-family: "Shaka Pow";
      src: url('/fonts/Shaka Pow.ttf');
      color: black;
  }

  .bg-color{
      background-color: #3498DB !important;
  }

  .elements-color{
      color: white !important;
  }

  .success{
      background-color: #2ECC71 !important;
  }
  
 
 
</style>

