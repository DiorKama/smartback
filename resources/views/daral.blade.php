<!DOCTYPE html>
<html lang="en">
<x-monheader>

</x-monheader>
<body>
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
           <a href="{{route('cart.index')}}" class='btn btn-outline-success rounded-pill ms-2'>
            <i class='fa fa-shopping-cart me-1'></i>{{ Cart::count() }}
           </a>
         </div>
    </div>
  </div>
 </nav> 
   <div class="mt-5 py-5">
         <h2 class="mt-5 ms-5 text-success souligne">E-daral</h2>
        <div class="table-responsive d-flex justify-content-between py-4 ms-5">
        
        <button type="button" class="btn btn-outline-success rounded-pill button-cat shadow-sm"><a href="{{route('tout-produit')}}" class="text-success button-cat" style="text-decoration: none;">Tous les Produits</a></button>   
         
        @foreach($categorie as $cate)
        <button type="button" class="btn btn-outline-success rounded-pill button-cat shadow-sm"><a href="{{route('voir-categorie',['id'=>$cate->id])}}" class="text-success button-cat" style="text-decoration: none;">{{$cate->libelle}}</a></button>   
         @endforeach
        </div>
   </div>
   @if (session('success'))
       <div class="alert alert-success col-md-6 offset-3 text-center">
           {{ session('success')}}
       </div> 
   @endif   
<div class="row ms-5 me-2 justify-content-between">
@foreach($produit as $produit) 
    <div class="card mt-3 shadow-sm" style="width: 18rem;" class="card-d-flex justify-content-between shadow">
      <img src="{{ url('public/Image/'.$produit->image) }}" alt=""  class="card-img-top" height="130">
      <div class="card-body">
        <h5 class="card-title">{{$produit->libelle}}</h5>
        <h3 class="card-prix text-success">{{$produit->prix}} CFA</h3>
        <p class="card-text">{{$produit->description}}</p>
        <a href="{{route('voir-produit',['id'=>$produit->id])}}" class="btn btn-success">Voir Plus</a>
      </div>
    </div> 
    @endforeach
  </div>
  <x-monfooter>
  </x-monfooter>
<x-monbody>

</x-monbody>
</body>
</html>