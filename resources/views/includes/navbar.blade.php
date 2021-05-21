<style>
    @font-face {
        font-family: "Shaka Pow";
        src: url('/fonts/Shaka Pow.ttf');
        color: black;
    }

    .bg-color{
        background-color: #3498DB;
    }

    .elements-color{
        color: white !important;
    }
    
   
   
</style>
<div>
    <nav class="navbar navbar-expand-lg navbar-secondary bg-color">
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavId">
            
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a name="" id="" href="{{ route('form.index') }}" class="btn btn-secundary elements-color"  role="button">Cuestionario</a>
                    </li>
                    <li class="nav-item">
                    <a name="" id=""  href="{{ route('articles.index') }}" class="btn btn-secundary elements-color"  role="button">Tabla</a>
                    </li>
                    <li class="nav-item">
                        <a name="" id="" href="{{ route('get-char') }}" class="btn btn-secundary elements-color"  role="button">Estadisticas</a>
                    </li>
                    
                </ul>

            
        </div>
    </nav>
   
    
</div>