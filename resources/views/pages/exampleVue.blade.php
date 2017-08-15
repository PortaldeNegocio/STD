<!DOCTYPE html>
 
<html lang="es">
 
<head>
<title>Titulo de la web</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="estilos.css" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="alternate" title="Pozolería RSS" type="application/rss+xml" href="/feed.rss" />
<style>
  .breadcrumb { 
  list-style: none; 
  overflow: hidden; 
  font: 18px Helvetica, Arial, Sans-Serif;
  margin: 40px;
  padding: 0;
}
.breadcrumb li { 
  float: left; 
}
.breadcrumb li a {
  color: white;
  text-decoration: none; 
  padding: 10px 0 10px 55px;
  background: brown; /* fallback color */
  background: hsla(34,85%,35%,1); 
  position: relative; 
  display: block;
  float: left;
}
.breadcrumb li a:after { 
  content: " "; 
  display: block; 
  width: 0; 
  height: 0;
  border-top: 50px solid transparent;           /* Go big on the size, and let overflow hide */
  border-bottom: 50px solid transparent;
  border-left: 30px solid hsla(34,85%,35%,1);
  position: absolute;
  top: 50%;
  margin-top: -50px; 
  left: 100%;
  z-index: 2; 
}   
.breadcrumb li a:before { 
  content: " "; 
  display: block; 
  width: 0; 
  height: 0;
  border-top: 50px solid transparent;           /* Go big on the size, and let overflow hide */
  border-bottom: 50px solid transparent;
  border-left: 30px solid white;
  position: absolute;
  top: 50%;
  margin-top: -50px; 
  margin-left: 1px;
  left: 100%;
  z-index: 1; 
}   
.breadcrumb li:first-child a {
  padding-left: 10px;
}
.breadcrumb li:nth-child(2) a       { background:        hsla(34,85%,45%,1); }
.breadcrumb li:nth-child(2) a:after { border-left-color: hsla(34,85%,45%,1); }
.breadcrumb li:nth-child(3) a       { background:        hsla(34,85%,55%,1); }
.breadcrumb li:nth-child(3) a:after { border-left-color: hsla(34,85%,55%,1); }
.breadcrumb li:nth-child(4) a       { background:        hsla(34,85%,65%,1); }
.breadcrumb li:nth-child(4) a:after { border-left-color: hsla(34,85%,65%,1); }
.breadcrumb li:nth-child(5) a       { background:        hsla(34,85%,75%,1); }
.breadcrumb li:nth-child(5) a:after { border-left-color: hsla(34,85%,75%,1); }
.breadcrumb li:last-child a {
  background: transparent !important;
  color: black;
  pointer-events: none;
  cursor: default;
}
.breadcrumb li:last-child a:after { border: 0; }
.breadcrumb li a:hover { background: hsla(34,85%,25%,1); }
.breadcrumb li a:hover:after { border-left-color: hsla(34,85%,25%,1) !important; }


.steps {
  margin: 40px;
  padding: 0;
  overflow: hidden;
}
.steps a {
  color: white;
  text-decoration: none;
}
.steps em {
  display: block;
  font-size: 1.1em;
  font-weight: bold;
}
.steps li {
  float: left;
  margin-left: 0;
  width: 150px; /* 100 / number of steps */
  height: 70px; /* total height */
  list-style-type: none;
  padding: 5px 5px 5px 30px; /* padding around text, last should include arrow width */
  border-right: 3px solid white; /* width: gap between arrows, color: background of document */
  position: relative;
}
/* remove extra padding on the first object since it doesn't have an arrow to the left */
.steps li:first-child {
  padding-left: 5px;
}
/* white arrow to the left to "erase" background (starting from the 2nd object) */
.steps li:nth-child(n+2)::before {
  position: absolute;
  top:0;
  left:0;
  display: block;
  border-left: 25px solid white; /* width: arrow width, color: background of document */
  border-top: 40px solid transparent; /* width: half height */
  border-bottom: 40px solid transparent; /* width: half height */
  width: 0;
  height: 0;
  content: " ";
}
/* colored arrow to the right */
.steps li::after {
  z-index: 1; /* need to bring this above the next item */
  position: absolute;
  top: 0;
  right: -25px; /* arrow width (negated) */
  display: block;
  border-left: 25px solid #7c8437; /* width: arrow width */
  border-top: 40px solid transparent; /* width: half height */
  border-bottom: 40px solid transparent; /* width: half height */
  width:0;
  height:0;
  content: " ";
}

/* Setup colors (both the background and the arrow) */

/* Completed */
.steps li { background-color: #7C8437; }
.steps li::after { border-left-color: #7c8437; }

/* Current */
.steps li.current { background-color: #C36615; }
.steps li.current::after { border-left-color: #C36615; }

/* Following */
.steps li.current ~ li { background-color: #EBEBEB; }
.steps li.current ~ li::after { border-left-color: #EBEBEB; }

/* Hover for completed and current */
.steps li:hover {background-color: #696}
.steps li:hover::after {border-left-color: #696}



.arrows { white-space: nowrap; }
.arrows li {
    display: inline-block;
    line-height: 26px;
    margin: 0 9px 0 -10px;
    padding: 0 20px;
    position: relative;
}
.arrows li::before,
.arrows li::after {
    border-right: 1px solid #666666;
    content: '';
    display: block;
    height: 50%;
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    z-index: -1;
    transform: skewX(45deg);   
}
.arrows li::after {
    bottom: 0;
    top: auto;
    transform: skewX(-45deg);
}

.arrows li:last-of-type::before, 
.arrows li:last-of-type::after { 
    display: none; 
}

.arrows li a { 
   font: bold 24px Sans-Serif;  
   letter-spacing: -1px; 
   text-decoration: none;
}

.arrows li:nth-of-type(1) a { color: hsl(0, 0%, 70%); } 
.arrows li:nth-of-type(2) a { color: hsl(0, 0%, 65%); } 
.arrows li:nth-of-type(3) a { color: hsl(0, 0%, 50%); } 
.arrows li:nth-of-type(4) a { color: hsl(0, 0%, 45%); } 

</style>
</head>
 
<body>
    <header>
       <h1>Mi sitio web</h1>
       <p>Mi sitio web creado en html5</p>
    </header>

    <section>

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Select2</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Minimal</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                <label>Multiple</label>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Disabled Result</label>

              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
       
      </div>
      <!-- /.box -->


       <article>
           <h2>Titilo de contenido<h2>
           <p> Contenido (ademas de imagenes, citas, videos etc.) </p>
       </article>
      <div id="crud" class="col-sm-5">
      <ul class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#">Vehicles</a></li>
  <li><a href="#">Vans</a></li>
  <li><a href="#">Camper Vans</a></li>
  <li><a href="#">1989 VW Westfalia Vanagon</a></li>
</ul>

<ul class="steps steps-5">
  <li><a href="#" title=""><em>Step 1: XXXXXXXX</em><span>Et nequ a quam turpis duisi</span></a></li>
  <li class="current"><a href="#" title=""><em>Step 2: XXXXXXXX</em><span>Et nequ a quam turpis duisi</span></a></li>
  <li ><a href="#" title=""><em>Step 3: XXXXXXXX</em><span>Et nequ a quam turpis duisi</span></a></li>
  <li><a href="#" title=""><em>Step 4: XXXXXXXX</em><span>Et nequ a quam turpis duisi</span></a></li>
  <li><a href="#" title=""><em>Step 5: XXXXXXXX</em><span>Et nequ a quam turpis duisi</span></a></li>
</ul>


<ol class="arrows">
   <li><a href="#">Home</a></li>
   <li><a href="#">About</a></li>
   <li><a href="#">Clients</a></li>
   <li><a href="#">Contact Us</a></li>
</ol>
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