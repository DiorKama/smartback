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
    <h2 class="mt-5 ms-5 text-success souligne">Contact</h2>
</div>
<div class="container formulaire">

    <div class="row">

      <div class="col-lg-8 col-lg-offset-2 col-sm-12 response">
        <form id="contact-form" method="post" action="contact.php" role="form">

        <div class="messages"></div>

        <div class="controls">

          <div class="row" >
            <div class="col-md-6">
              <div class="form-group">
                <label for="form_name">Prenom *</label>
                <input id="form_name" type="text" name="name" class="form-control" placeholder="Entrez votre prenom" required="required" data-error="Firstname is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="form_lastname">Nom *</label>
                <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Entrez votre nom" required="required" data-error="Lastname is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-md-6">
              <div class="form-group">
                <label for="form_email">Email *</label>
                <input id="form_email" type="email" name="email" class="form-control" placeholder="Entrez votre email" required="required" data-error="Valid email is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="form_phone">Telephone</label>
                <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Entrez votre numero de telephone">
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-md-12">
              <div class="form-group">
                <label for="form_message">Message *</label>
                <textarea id="form_message" name="message" class="form-control" placeholder="votre commentaire" rows="4" required="required" data-error="S'il vous plaît, laissez-nous un message."></textarea>
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-12 mt-3 text-center">
              <input type="submit" class="btn btn-success btn-send" value="Envoyer message">
            </div>
          </div>
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