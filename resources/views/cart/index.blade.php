<!DOCTYPE html>
<html lang="en">
<x-monheader>
</x-monheader>
<meta name="csrf-token" content="{{ csrf_token() }}">
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
           <a href="#" class='btn btn-outline-success rounded-pill ms-2'>
            <i class='fa fa-shopping-cart me-1'></i>{{ Cart::count() }}
           </a>
         </div>
    </div>
  </div>
 </nav>
 @if (Cart::count() > 0)
 <div class="px-4 px-lg-0 mt-5 py-3">
  <div class="pb-5">
    <div class="container">
    @if (session('success'))
       <div class="alert alert-success mt-5 col-md-6 offset-3 text-center">
           {{ session('success')}}
       </div> 
   @endif

   @if (session('danger'))
       <div class="alert alert-danger mt-5 col-md-6 offset-3">
           {{ session('danger')}}
       </div> 
   @endif
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

          <!-- Shopping cart table -->
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase">Produits</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Prix</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Quantité</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Supprimer</div>
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach (Cart::content() as $item)
                <tr>
                  <th scope="row" class="border-0">
                    <div class="p-2">
                      <img src="{{ url('public/Image/'.$item->model->image) }}" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">{{$item->model->libelle}}</a></h5>
                      </div>
                    </div>
                  </th>
                  <td class="border-0 align-middle"><strong>{{$item->subtotal()}} CFA</strong></td>
                  <td class="border-0 align-middle">
                   <select name="qty" id="qty" class="" data-id="{{$item->rowId}}">
                     @for ($i = 1; $i <= 6; $i++)
                     <option value="{{ $i }}" {{ $i == $item->qty ? 'selected' : ''}}>{{ $i }}</option>
                     @endfor
                   </select>
                  </td>
                  <td class="border-0 align-middle">
                    <form action="{{route('cart.destroy', $item->rowId)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- End -->
        </div>
      </div>

      <div class="row py-3 p-4 bg-white rounded shadow-sm">
        <div class="col-lg-6 offset-3">
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold text-center">Details de la commande </div>
          <div class="p-4">
            <p class="font-italic mb-4"></p>
            <ul class="list-unstyled mb-4">
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Sous-total </strong><strong>{{ Cart::subtotal() }} CFA</strong></li>
              <!-- <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong>$10.00</strong></li> -->
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>0.00 CFA</strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                <h5 class="font-weight-bold">{{ Cart::subtotal() }} CFA</h5>
              </li>
            </ul><a href="{{url('/register')}}" class="btn btn-success rounded-pill py-2 btn-block">Passer la Commande</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@else
<div class="col-md-12 mt-5 py-5 px-5">
  <h1 class="mt-5 "> Mon Panier</h1>
<p class="mt-5 ">Votre panier est vide</p>
</div>
 @endif
 <x-monfooter>
  </x-monfooter>
 <x-monbody>
 
  </x-monbody>
  
  <script>
    var selects = document.querySelectorAll('#qty')
    Array.from(selects).forEach((element) => {
     element.addEventListener('change', function () {
      var rowId = this.getAttribute('data-id');
       var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        fetch(
          `/panier/${rowId}`,
          {
            headers: {
              
              "Content-Type": "application/json",
              "Accept": "application/json, text-plain, */*",
              "X-Requested-With": "XMLHttpRequest",
              "X-CSRF-TOKEN": token
              
            },
            method: 'put',
            body: JSON.stringify({
              qty: this.value
            })
          }).then((data)=>{
          console.log(data);
          location.reload();
         }).catch((error)=>{
          console.log(error);
         })
     });
    });
  </script>
    
</body>
</html>