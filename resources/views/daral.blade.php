<!DOCTYPE html>
<html lang="en">
<x-monheader>

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
           <a href='' class='btn btn-outline-success rounded-pill ms-2'>
            <i class='fa fa-shopping-cart me-1'></i>cart (0)
           </a>
         </div>
    </div>
  </div>
 </nav> 
    <!-- <div class="mt-5 py-5">
        <div class="table-responsive d-flex py-4 ms-5">
        <table class="table">
        <button type="button" class="btn btn-success rounded-pill">Tous les Produits</button>   
        </table>
        <table class="table">
        <button type="button" class="btn btn-outline-success rounded-pill">Moutons</button>   
        </table>
        <table class="table">
        <button type="button" class="btn btn-outline-success rounded-pill">Vaches</button>
        </table>
        <table class="table">
        <button type="button" class="btn btn-outline-success rounded-pill">Chèvres</button>
         </table>
         <table class="table">
         <button type="button" class="btn btn-outline-success rounded-pill">Volailles</button>
         </table>
         <table class="table">
         <button type="button" class="btn btn-outline-success rounded-pill ">Produits</button>
         </table>
        </div>
   </div> -->

   <div class="mt-5 py-5">
        <div class="table-responsive d-flex justify-content-between py-4 ms-5">
        
        <button type="button" class="btn btn-success rounded-pill">Tous les Produits</button>   
        
        
        <button type="button" class="btn btn-outline-success rounded-pill">Moutons</button>   
        
       
        <button type="button" class="btn btn-outline-success rounded-pill">Vaches</button>
       
       
        <button type="button" class="btn btn-outline-success rounded-pill">Chèvres</button>
        
         <button type="button" class="btn btn-outline-success rounded-pill">Volailles</button>
        
         
         <button type="button" class="btn btn-outline-success rounded-pill me-5">Produits</button>
        
        </div>
   </div>
   <div class="">
   <div class="row row-cols-1 row-cols-md-4 g-3 ms-5">
  <div class="col md-3">
    <div class="card" style="width: 18rem;">
      <img src="/images/202208101447sddefault-20-removebg-preview.png" class="card-img-top" alt="..." height="130">
      <div class="card-body">
        <h5 class="card-title">Moutons</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-success">Commander</a>
      </div>
    </div>
  </div>
  <div class="col md-3">
    <div class="card" style="width: 18rem;">
      <img src="/images/202208101447sddefault-20-removebg-preview.png" class="card-img-top" alt="" height="130">
      <div class="card-body">
        <h5 class="card-title">Moutons</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-success">Commander</a>
      </div>
    </div>
  </div>
  <div class="col md-3">
    <div class="card" style="width: 18rem;">
      <img src="/images/202208101447sddefault-20-removebg-preview.png" class="card-img-top" alt="..." height="130">
      <div class="card-body">
        <h5 class="card-title">Moutons</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-success">Commander</a>
      </div>
    </div>
  </div>
  <div class="col md-3">
    <div class="card" style="width: 18rem;">
      <img src="/images/202208101447sddefault-20-removebg-preview.png" class="card-img-top" alt="..." height="130">
      <div class="card-body">
        <h5 class="card-title">Moutons</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-success">Commander</a>
      </div>
    </div>
  </div>
</div>
</div>
<x-monbody>

</x-monbody>
</body>
</html>