<!DOCTYPE html>
<html lang="en">
<x-monheader>
<link rel="stylesheet" media="screen and (max-width: 1280px)" href="card-produit.css"/>
</x-monheader>

<body>
<nav class="navbar navbar-expand-lg bg-white py-3 shadow-sm fixed-top">
  <div class="container-fluid">
    <div>
     <a href='#'><img src="/images/logos.png" alt="logo" width="255" height="70"></img></a>
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
          <a class="nav-link ms-4" href="#">Ferme</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ms-4" href="#">Contact</a>
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
           Register
           </a>
           @endif
           @endauth
       
           @endif
           <a href="#" class='btn btn-outline-success rounded-pill ms-2'>
            <i class='fa fa-shopping-cart me-1'></i>{{ Cart::count() }}</a>
           
         </div>
    </div>
  </div>
 </nav>

 <div class="card card-produit  shadow">
  <div class="row">
    <div class="col-md-5">
      <img src="{{ url('public/Image/'.$produits->image) }}" alt=""  class="img-fluid rounded-start">  
    </div>
    <div class="col-md-7">
      <div class="card-body">
      <h6 class="card-title"><span class="text-body">Titre:</span>  {{$produits->libelle}}</h6><br>
        <h5 class="card-title text-success"><span class="text-body">Prix:</span>  {{$produits->prix}}CFA</h5><br>
        <h6 class="card-text"><span class="text-body">Description:</span>  {{$produits->description}}</h6><br>
        <h6 class=""><span class="text-body">Date Ajout:</span>  {{$produits->date_ajout}}</h6><br>
        <form action="{{route('cart.store')}}" method="POST">
          @csrf
          <input type="hidden" name="produit_id" value="{{$produits->id}}">
          <button type="submit" class="btn btn-success"><i class='fa fa-plus me-1'></i>Ajouter au panier</button>
        </form>
      </div>
    </div>
  </div>
</div>
<x-monbody> 
</x-monbody>
</body>
</html>