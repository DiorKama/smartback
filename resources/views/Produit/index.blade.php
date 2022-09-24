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
          <a class="nav-link ms-4" href="contact">Contact</a>
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
<div class="container-xl mt-5 py-5">
	<div class="table-responsive py-5">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="">
						<h2 class="text-center">Liste <b>Produits</b></h2>
					</div>
					<div class="">
					<button type="button" class="btn btn-success ms-auto"><a href="/ajoutProduit" class="text-white" style="text-decoration: none;">Ajout Produit</a></button>
					</div>
				</div>
			</div>
            <table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>Titre</th>
						<th>Image</th>
						<th>Prix</th>
						<th>Description</th>
            <th>Date d'ajout</th>
            <th>Categorie</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
        @foreach($produit as $produit)
          @if($produit->user_id == Auth::id() )             
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
						<td>{{$produit->libelle}}</td>
						<td>
							<img src="{{ url('public/Image/'.$produit->image) }}" alt="" height="50px">
						</td>
						<td>{{$produit->prix}}</td>
						<td>{{$produit->description}}</td>
            <td>{{$produit->date_ajout}}</td>
            <td>{{$produit->categorie->libelle}}</td>
						<td>
							<button type="button" class="btn btn-primary"><a href="{{url('modifierProduit/'.$produit->id)}}" class="text-white" style="text-decoration: none;"><i class="fa fa-pencil" aria-hidden="true"></i></a></button>
							<button type="button" class="btn btn-danger"><a href="{{url('deleteProduit/'.$produit->id)}}" class="text-white" style="text-decoration: none;"><i class="fa fa-trash" aria-hidden="true"></i></a></button>
						</td>
					</tr>
          @endif
					@endforeach 
				</tbody>
			</table>
     </div>
    </div>
    </div>
  <x-monfooter>
  </x-monfooter>
<x-monbody>

</x-monbody>
</body>
</html>