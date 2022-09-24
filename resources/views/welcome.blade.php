<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <x-monheader>

        </x-monheader>

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body >
    <nav class="navbar navbar-expand-lg bg-white py-3 shadow-sm fixed-top">
  <div class="container-fluid">
    <div>
     <a href='/'><img src="/images/logos.png" alt="logo" width="255" height="70"></img></a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ms-4" href="/e-daral">E-daral</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ms-4" href="/ferme">Ferme</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ms-4" href="/contact">Contact</a>
        </li>
      </ul>
      <div class='buttons'>
         @if (Route::has('login'))
         @auth
         <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
         @else
           <a href="{{ route('login') }}" class='btn btn-outline-success rounded-pill'>
           <i class='fa fa-user me-1'></i>
           Login
           </a>
           @if (Route::has('register'))
           <a href="{{ route('register') }}" class='btn btn-outline-success rounded-pill ms-2'>
           <i class='fa fa-user-plus me-1'></i>
           Inscription
           </a>
           @endif
           @endauth
       
           @endif
           <a href='' class='btn btn-outline-success rounded-pill ms-2'>
            <i class='fa fa-shopping-cart me-1'></i>{{ Cart::count() }}
           </a>
         </div>
    </div>
  </div>
</nav> 
    
          <div class='row mt-5 py-5 baniere'>
            <div class='col-md-7 py-4'>
                <img src="/images/hero.png" alt="logo" width="406" height="246"></img>
            </div>
            <div class='col-md-5 py-4'>
             <h3 class='text-success'>VENTE BETAIL ET PRODUITS</h3>
             <p>SMARTBERGERIE, plateforme pour les éleveurs <br></br>afin de faciliter l’accés aux bétails à la 
                population <br></br>et participer à la lutte contre le manque<br></br>
                de betail durant les fêtes  
            </p>
            <button class='btn btn-success rounded-pill'><a href="{{url('/register')}}" class="text-white">Postez vos Produits</a></button>
            </div>
          </div>
          <div class="row annonce">
            <h2 class="text-success ms-5 souligne">Annonces</h2>
            <div class="">
              <div class="row row-cols-1 row-cols-md-4 g-3 ms-5">
              <div class="col md-3">
                <div class="card" style="width: 16rem;">
                  <img src="/images/202208101447sddefault-20-removebg-preview.png" class="card-img-top" alt="..." height="120">
                  <div class="card-body">
                    <h5 class="card-title fw-bold">Moutons</h5>
                     <p>Description moutons</p>
                     <h4 class="card-prix text-success">800.000 CFA</h4>
                    <p class="card-text">
                    <i class="fa fa-whatsapp me-3 text-success fw-bold" aria-hidden="true"></i>77 234 23 43
                    </p>
                    <p class="card-text">
                    <i class="fa fa-clock-o me-3 text-success" aria-hidden="true"></i>27-08-2022
                    </p>
                  </div>
                </div>
              </div>
            <div class="col md-3">
              <div class="card" style="width: 16rem;">
                <img src="/images/chevre.png" class="card-img-top" alt="" height="120">
                <div class="card-body">
                <h5 class="card-title fw-bold">Chevre</h5>
                     <p>Description chevre</p>
                     <h4 class="card-prix text-success">20.000 CFA</h4>
                    <p class="card-text">
                    <i class="fa fa-whatsapp me-3 text-success fw-bold" aria-hidden="true"></i>77 453 65 76
                    </p>
                    <p class="card-text">
                    <i class="fa fa-clock-o me-3 text-success" aria-hidden="true"></i>30-08-2022
                    </p>
                </div>
              </div>
            </div>
            <div class="col md-3">
              <div class="card" style="width: 16rem;">
                <img src="/images/202208101505OIP-removebg-preview.png" class="card-img-top" alt="..." height="120">
                <div class="card-body">
                <h5 class="card-title fw-bold">Vache</h5>
                     <p>Description vache</p>
                     <h4 class="card-prix text-success">900.000 CFA</h4>
                    <p class="card-text">
                    <i class="fa fa-whatsapp me-3 text-success fw-bold" aria-hidden="true"></i>76 553 77 46
                    </p>
                    <p class="card-text">
                    <i class="fa fa-clock-o me-3 text-success" aria-hidden="true"></i>18-08-2022
                    </p>
                </div>
              </div>
            </div>
            <div class="col md-3">
              <div class="card" style="width: 16rem;">
                <img src="/images/poule.jpg" class="card-img-top" alt="..." height="120">
                <div class="card-body">
                <h5 class="card-title fw-bold">Volaille</h5>
                     <p>Description volaille</p>
                     <h4 class="card-prix text-success">6000 CFA</h4>
                    <p class="card-text">
                    <i class="fa fa-whatsapp me-3 text-success fw-bold" aria-hidden="true"></i>77 063 35 75
                    </p>
                    <p class="card-text">
                    <i class="fa fa-clock-o me-3 text-success" aria-hidden="true"></i>16-08-2022
                    </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-3"></div>
            <div class="">
              <div class="row row-cols-1 row-cols-md-4 g-3 ms-5">
              <div class="col md-3">
                <div class="card" style="width: 16rem;">
                  <img src="/images/moutons2.png" class="card-img-top" alt="..." height="120">
                  <div class="card-body">
                    <h5 class="card-title fw-bold">Moutons</h5>
                     <p>Description moutons</p>
                     <h4 class="card-prix text-success">800.000 CFA</h4>
                    <p class="card-text">
                    <i class="fa fa-whatsapp me-3 text-success fw-bold" aria-hidden="true"></i>77 453 76 89
                    </p>
                    <p class="card-text">
                    <i class="fa fa-clock-o me-3 text-success" aria-hidden="true"></i>27-08-2022
                    </p>
                  </div>
                </div>
              </div>
            <div class="col md-3">
              <div class="card" style="width: 16rem;">
                <img src="/images/oeufs.png" class="card-img-top" alt="" height="120">
                <div class="card-body">
                <h5 class="card-title fw-bold">Tablettes oeufs</h5>
                     <p>Description</p>
                     <h4 class="card-prix text-success">2000 CFA</h4>
                    <p class="card-text">
                    <i class="fa fa-whatsapp me-3 text-success fw-bold" aria-hidden="true"></i>77 533 76 89
                    </p>
                    <p class="card-text">
                    <i class="fa fa-clock-o me-3 text-success" aria-hidden="true"></i>15-08-2022
                    </p>
                </div>
              </div>
            </div>
            <div class="col md-3">
              <div class="card" style="width: 16rem;">
                <img src="/images/poulet.png" class="card-img-top" alt="..." height="120">
                <div class="card-body">
                <h5 class="card-title fw-bold">Ploulet</h5>
                     <p>Description poulet</p>
                     <h4 class="card-prix text-success">6000 CFA</h4>
                    <p class="card-text">
                    <i class="fa fa-whatsapp me-3 text-success fw-bold" aria-hidden="true"></i>76 453 76 89
                    </p>
                    <p class="card-text">
                    <i class="fa fa-clock-o me-3 text-success" aria-hidden="true"></i>10-08-2022
                    </p>
                </div>
              </div>
            </div>
            <div class="col md-3">
              <div class="card" style="width: 16rem;">
                <img src="/images/viandes.png" class="card-img-top" alt="..." height="120">
                <div class="card-body">
                <h5 class="card-title fw-bold">Viandes</h5>
                     <p>Description viande par kg</p>
                     <h4 class="card-prix text-success">3000 CFA</h4>
                    <p class="card-text">
                    <i class="fa fa-whatsapp me-3 text-success fw-bold" aria-hidden="true"></i>77 654 76 89
                    </p>
                    <p class="card-text">
                    <i class="fa fa-clock-o me-3 text-success" aria-hidden="true"></i>3-08-2022
                    </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<x-monfooter>
</x-monfooter>
<x-monbody>
</x-monbody>
    </body>
</html>
