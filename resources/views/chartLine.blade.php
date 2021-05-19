<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Laravel Ajax ConsoleTvs Charts Tutorial - ItSolutionStuff.com</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    </head>
    <body>
        @include('includes.navbar')
        <div class="container">
        <h1 class="mt-5 text-center">Estadísticas Cuestionario de Salud Mental</h1>
  
        <select class="sel" name="year">
            <option value="2021">Year 2021</option>
            <option value="2020">Year 2020</option>
            <option value="2019">Year 2019</option>
            <option value="2018">Year 2018</option>
            <option value="2017">Year 2017</option>
        </select>
        <h4 class="mt-5 text-center">Percepcion de ambiente laboral</h4>
        
        <div style="width: 80%;margin: 0 auto; mt-5">
            {!! $chart->container() !!}
        </div>

        

        

        <h4 class="mt-5 text-center">Percepcion de ambiente laboral</h4>

        
    </div>
          
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
  
        {!! $chart->script() !!}

    
  
        <script type="text/javascript">
            var original_api_url = {{ $chart->id }}_api_url;
            $(".sel").change(function(){
                var year = $(this).val();
                {{ $chart->id }}_refresh(original_api_url + "?year="+year);
            });
        </script>
    </body>
</html>