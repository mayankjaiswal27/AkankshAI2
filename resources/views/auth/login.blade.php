
<x-app-layout>
    <style>

        .grid-child-one, .grid-child-two {
  
        }
    
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(+80px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    
        .grid-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 20px;
        }
    
  
    
        .grid-child-one img {
            margin-left: 15%;
            opacity: 0;
            animation: fadeIn 1.5s ease-in-out forwards;
        }
    
        .grid-child-two {
            background-color: #EDF5FF;
            height: 100%;
        }
        .grid-child-two img{
            margin-top: 25%;
            opacity: 0;
            animation: fadeIn 1.5s ease-in-out forwards;
        }
        .about-text {
            margin-top: 3.2%;
            color:#3751FE;
            font-family: Roboto;
            padding-left: 10%;
            padding-right: 10%;
            font-size: 30px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            opacity: 0;
            animation: fadeIn 1.5s ease-in-out forwards;
        }
        .small-text{
            margin-top: 3.2%;
            color: rgba(0, 0, 0, 0.91);
            font-family: Roboto;
            padding-left: 10%;
            padding-right: 10%;
            font-size: 18px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            opacity: 0;
            animation: fadeIn 1.5s ease-in-out forwards;
        }
    
        .btn {
            justify-content: left;
            padding: 2%;
            padding-left: 5%;
            padding-right: 5%;
            background: #407BFF;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25), 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
        }
    
        .btn-text {
            color: #FFF;
            font-family: Roboto;
            font-size: 25px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }
        a.navb {
            color: #407bff;
            font-size: 20px;   
        }
        a{
            color: #407bff;
            font-size: 20px;
            text-align: right;
            padding-top: 1%;
            padding-left: 1.5%;
            padding-right: 4.5%;
        }
    
        a.navb:hover {
            color: #000000;
            font-size: 20px;
        }
    
        .navb-active {
            color: #000000;
            font-size: 20px;
        }
    
        .navb,form{
            text-align: right;
            padding-top: 1%;
            padding-left: 1.5%;
            padding-right: 4.5%;
        }
    
        .navb-active {
            color: #407bff;
            text-align: center;
            padding-top: 2%;
            padding-left: 1.5%;
            padding-right: 4.5%;
        }
        .email{
            margin-left: 10%;
            margin-right: 10%;
        }
        .password{
            margin-left: 10%;
            margin-right: 10%;
        }
        .ms-3{
            margin-top: 10%;
            display: flex;
            background-color:#407BFF;
            margin-left: 40%;

        }
        .or{
            margin-top:5%;
            margin-left:40%;
        }
    </style>
     <div class="py-3">
        <div class="">
            <div class="">
                <div class="grid-container">
  
                    <div class="grid-child-one">
                        <img src="./assets/logo.svg"/>
                        <div class="about-text"><br>
                            <b>Akanshao se safalta tak </b><br>
                        </div>
                        <div class="small-text">
                            <p>
                                Welcome back please login to your account.
                                </p><br><br>
                        </div>
                        <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="email">
            {{-- <x-input-label for="email" :value="__('Email')" /> --}}
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="email"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            {{-- <x-input-label for="password" :value="__('Password')" /> --}}
            <div class="password">
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" placeholder="password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            {{-- <label for="remember_me" > --}}
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            {{-- </label> --}}
        </div>

        <div class="forgot-password">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>   
    <div class="or">
        <p>
            Or
            </p><br><br>
    </div>
</div>
                
                    <div class="grid-child-two">
                         <div class="navb">
                            <a href="{{ url('/dashboard') }}" class="">Home</a>
                         </div>
                        <img src="./assets/OBJECTS.svg"/>
                   
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
