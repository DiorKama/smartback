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
<div class="container-xl mt-5 py-5">
	<div class="table-responsive py-5">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="">
						<h2 class="text-center">Liste <b>Utilisateurs</b></h2>
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
                      <th>Nom</th>
                      <th>Prenom</th>
                      <th>Email</th>
                      <th>Telephone</th>
                        <th>Adresse</th>
                        <th>Cni</th>
                        <th>Role</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
                @foreach($user as $user)
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
	
                        <td>{{$user->name}}</td>
                        <td>{{$user->prenom}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->telephone}}</td>
                        <td>{{$user->adresse}}</td>
                        <td>{{$user->cni}}</td>
                        <td>{{$user->role_id}}</td>
						<td>
							<button type="button" class="btn btn-danger"><a href="{{url('supprimerUser/'.$user->id)}}" class="text-white" style="text-decoration: none;"><i class="fa fa-trash" aria-hidden="true"></i></a></button>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
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