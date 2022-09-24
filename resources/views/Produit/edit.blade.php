
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
      @guest
          @if (Route::has('login'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
          @endif

          @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
          @endif
      @else
          <div class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }}
              </a>

              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
              </div>
          </div>
      @endguest
     </div>
    </div>
  </div>
</nav>
<div class="mt-5 py-5">
    <h2 class="text-center text-success">Modifications</<h2>
</div>

<div class="container bg-white">
   <div class="row">
   <div class="col-md-6">
         <img src="/images/undraw_Online_re_x00h.png" width="505" height="450"></img>
         </div>
         <div class="col-md-6">
           <form  method="POST" class="bg-white shadow rounded" action="{{url('updateProduit/'.$produit->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
           
            <input type="hidden" name="id" value="{{$produit->id}}">
            <div class="form-group" style="width: 75%; margin-left: 12%;">
                <label for="username">Titre</label>
                <input type="text" class="form-control" aria-describedby="libelle" name="libelle" value="{{ $produit->libelle }}">
             </div>
             <div class="form-group" style="width: 75%; margin-left: 12%;">
                <label for="fileupload">Image</label>
                <input class="form-control" input type="file" class="form-control-file ms-auto" aria-describedby="fileupload" name="image" value="{{$produit->image }}">
                <img src="{{ url('public/Image/'.$produit->image) }}" alt="" height="50px">   
            </div> 
            <div class="form-group" style="width: 75%; margin-left: 12%;">
                <label for="username">Prix</label>
                <input type="number" class="form-control" aria-describedby="prix" name="prix" value="{{ $produit->prix }}">
             </div>
             <div class="form-group" style="width: 75%; margin-left: 12%;">
                <label for="textarea">Description</label>
                <textarea class="form-control" rows="5" name="description">{{ $produit->description}}</textarea>
             </div>
             <div class="form-group" style="width: 75%; margin-left: 12%;">
                <label for="username">Date Ajout</label>
                <input type="date" class="form-control" aria-describedby="date_ajout" name="date_ajout" value="{{$produit->date_ajout}}">
            </div>
            <div class="form-group" style="width: 75%; margin-left: 12%;">
                <label for="eleveur">Categorie</label>
                <select class="form-select" aria-label="Default select example" name="categorie">
                    @foreach($categorie as $cat)
                    <option value="{{$cat->id}}"> {{$cat->libelle}} </option>
                    @endforeach
                </select>
            </div>
            
            <div class="text-center mt-2">
            <button type="submit" class="btn btn-primary" value="Update">Modifier</button>
        </div>
    </form>
    </div>
    </div>
</div>
<x-monfooter>
</x-monfooter>
<x-monbody>

</x-monbody>
</body>
</html>