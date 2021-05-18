<style>
    @font-face {
        font-family: "Shaka Pow";
        src: url('/fonts/Shaka Pow.ttf');
        color: black;
    }

    .bg-rojo3{
        background-color: #C72523 !important;
    }

    .bg-azul1{
        background-color: #4D8AB5 !important;
    }

    .bg-rojo1{
        background-color: #4D1518 !important;
    }

    .bg-rojo2{
        background-color: #951E22 !important;
    }



    .bg-gris1{
        background-color: #B9BEBA !important;
    }

    .bg-azul2{
        background-color: #1E2639 !important;
    }
    
   
   
</style>
<div>
    <nav class="navbar navbar-expand-lg navbar-secondary bg-rojo3">
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavId">
            
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a name="" id="" href="{{ route('form.index') }}" class="btn btn-secundary"  role="button">Cuestionario</a>
                    </li>
                    <li class="nav-item">
                    <a name="" id=""  href="{{ route('articles.index') }}" class="btn btn-secundary"  role="button">Tabla</a>
                    </li>
                    <li class="nav-item">
                        <a name="" id="" class="btn btn-secundary"  role="button">Estadisticas</a>
                    </li>
                    
                </ul>

            
        </div>
    </nav>
   
    
</div>