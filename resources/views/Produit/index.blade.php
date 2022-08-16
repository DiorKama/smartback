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
            <th>Eleveur</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
                    @foreach($produit as $produit)
                       
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
                        <td>{{$produit->eleveur->user_id}}</td>
						<td>
							<button type="button" class="btn btn-primary"><a href="{{url('modifierProduit/'.$produit->id)}}" class="text-white" style="text-decoration: none;">Editer</a></button>
							<button type="button" class="btn btn-danger"><a href="{{url('deleteProduit/'.$produit->id)}}" class="text-white" style="text-decoration: none;">Supprimer</a></button>
							
						</td>
					</tr>
					@endforeach 
				</tbody>
			</table>
</body>
<x-monbody>

</x-monbody>
</html>