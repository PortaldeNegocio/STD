<!DOCTYPE html>
 
<html lang="es">
 
<head>
<title>Titulo de la web</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="estilos.css" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="alternate" title="Pozolería RSS" type="application/rss+xml" href="/feed.rss" />
</head>
 
<body>
    <header>
       <h1>Mi sitio web</h1>
       <p>Mi sitio web creado en html5</p>
    </header>

    <section>
       <article>
           <h2>Titilo de contenido<h2>
           <p> Contenido (ademas de imagenes, citas, videos etc.) </p>
       </article>
      <div id="crud" class="col-sm-5">
          <pre>
           @{{ $data }}                
          </pre>
        </div>

    </section>
    <aside>
       <h3>Titulo de contenido</h3>
           <p>contenido</p>
    </aside>
    <footer>
        Creado por mi el 2011
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.0/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.2/axios.min.js"></script>
    <script src ="{{ asset('/js/Solicitud/features.js') }}"></script>
    

</body>
</html>