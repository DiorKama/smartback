
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
         <!-- @if (Route::has('login'))
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
       
           @endif -->
           <a href='' class='btn btn-outline-success rounded-pill ms-2'>
            <i class='fa fa-shopping-cart me-1'></i>cart (0)
           </a>
         </div>
     
            <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
    </div>
  </div>
</nav>
<div class="mt-5 py-5">
    <h2 class="text-center text-success">Ajout des Eleveurs</<h2>
</div>

<div class="container bg-white">
   <div class="row">
         <div class="col-md-6">
         <img src="images/undraw_Online_re_x00h.png" width="505" height="450"></img>
         </div>
         <div class="col-md-6">
           <form enctype="multipart/form-data"  method="POST" class="bg-white shadow rounded" action="{{route('ajoutEleveur')}}">
            @csrf
            <div class="form-group" style="width: 75%; margin-left: 12%;">
                <label for="username">Localisation</label>
                <input type="text" class="form-control" id="localisation" aria-describedby="localisation" name="localisation" required>
             </div>
             
            <div class="form-group" style="width: 75%; margin-left: 12%;">
                <label for="username">Cni</label>
                <input type="text" class="form-control" id="cni" aria-describedby="cni" name="cni" required>
             </div>
    
            <div class="form-group" style="width: 75%; margin-left: 12%;">
                <label for="user">User</label>
                <select class="form-select" aria-label="Default select example" name="user" required>
                    @foreach($user as $use)
                    <option value="{{ $use->id }}"> {{$use->name}} </option>
                    @endforeach
                </select>
            </div>
            <div class="text-center mt-2">
            <button type="submit" class="btn btn-success">Enregistrer</button>
        </div>
    </form>
    </div>
    </div>
</div>

<x-monbody>

</x-monbody>
</body>
</html>