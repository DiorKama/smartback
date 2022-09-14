<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-monheader>

   </x-monheader>
    <!-- CSS only -->
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-white py-3 shadow-sm fixed-top">
  <div class="container-fluid">
    <div>
     <a href='#'><img src="/images/logos.png" alt="logo" width="100" height="70"></img></a>
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
           <a href="{{ route('register') }}" class='btn btn-outline-success rounded-pill ms-2 '>
           <i class='fa fa-user-plus me-1'></i>
           Inscription
           </a>
           @endif
           @endauth
           @endif
         </div>
    </div>
  </div>
</nav>
<div class="mt-5 py-3"> 
<x-guest-layout>
    <x-auth-card>
        
                <x-slot name="logo">
                    <a href="/">
                        <!--<x-application-logo class="w-20 h-20 fill-current text-gray-500" />-->   
                    </a>
                </x-slot>
     
                 <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
           
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div>
                        <x-label for="name" :value="__('Name')" />

                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                    </div>
                    <!-- prenom -->
                    <div>
                        <x-label for="prenom" :value="__('Prenom')" />

                        <x-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom')" required autofocus />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-label for="email" :value="__('Email')" />

                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')" />

                        <x-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-input id="password_confirmation" class="block mt-1 w-full"
                                        type="password"
                                        name="password_confirmation" required />
                    </div>

                    <!-- Champ Test -->
                    <div class="mt-4">
                        <x-label for="telephone" :value="__('Telephone')" />

                        <x-input id="telephone" class="block mt-1 w-full" type="text" name="telephone" :value="old('telephone')" required />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Vous avez déjà un compte?') }}
                        </a>

                        <x-button class="ml-4">
                            {{ __('Inscription') }}
                        </x-button>
                    </div>
                </form> 
            </x-auth-card>
            </x-guest-layout>
            </div>
          
<!-- JavaScript Bundle with Popper -->
<x-monbody>

</x-monbody>
</body>
</html>
