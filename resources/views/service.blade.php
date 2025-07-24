 <!doctype html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Bootstrap demo</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
 </head>

 <body>
     <nav class="navbar navbar-expand-lg bg-body-tertiary">
         <div class="container-fluid">
             <a class="navbar-brand" href="#">Tizio Caio</a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                 aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarNav">
                 <ul class="navbar-nav">
                     <li class="nav-item">
                         <a class="nav-link" href="/">Homepage</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="/chi-sono">Chi Sono</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="/servizi">Servizi</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="/contattami">Contatti</a>
                     </li>

                 </ul>
             </div>
         </div>
     </nav>

     <div class="px-4 py-5 my-5 text-center">
         <h1 class="display-5 fw-bold text-body-emphasis">{{ $service }}</h1>
         <div class="row row-cols-1 row-cols-md-3 g-4">

             <div class="col">
                 <div class="card">
                     <div class="card-body">
                         <h5 class="card-title">{{ $service }}</h5>
                         <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                             to
                             additional content. This content is a little bit longer.</p>
                     </div>
                 </div>
             </div>


         </div>
     </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
     </script>
 </body>

 </html>
