<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/welcome.css'])
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        {{-- <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}"><span class="home-text21"><span>Login</span></span></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif --}}
                    @endauth
                </div>
            @endif

            <div>
                <link href="./home.css" rel="stylesheet" />
                <div class="home-container">
                  <div class="home-desktop2">
                    <div>
                      <div>
                        <img
                          src="./assets/logo.svg"
                          alt="Vector16013"
                          {{-- class="home-vector16" --}}
                        />
                        
                      </div>
                      
                    </div>
                    <span class="home-text07">
                      <span>Welcome back! Please login to your account.</span>
                    </span>
                    <span class="home-text09"><span>Akanshao se safalta tak</span></span>
                    <input type="text" class="home-text1" placeholder="abc@digital.com"/>
                    <input type="password" class="home-text13" placeholder="**********"/>
                    <span class="home-text15"><span>Remember Me</span></span>
                    <span class="home-text17"><span>Or login with</span></span>
                    <span class="home-text19"><span>Google</span></span>
                    <a href="{{ route('login') }}"><span class="home-text21"><span>Login</span></span></a>
                    <a href="{{ route('register') }}"><span class="home-text23"><span>Sign Up</span></span></a>
                    <span class="home-text25"><span>Forgot Password?</span></span>
                    <div class="home-emaisection">
                      
                      
                    </div>
                    
                    <div class="home-objects">
                      <img src="./assets/OBJECTS.svg">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
    </body>
</html>
