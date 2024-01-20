<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AkankshAI</title>
    <style>
        /* Optional: Some basic styling for demonstration purposes */
        body {
            margin: 0;
            padding: 0;
        }

        .py {
            text-align: left; /* Adjusted to left align */
            margin-top: 10px; /* Adjusted margin-top */
            padding-left: 5%; /* Adjusted padding-left */
        }

        .outer-div {
            text-align: center;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            height: auto;
            background: #EDF5FF;
            border-radius: 18px;
            box-sizing: border-box;
            width: 80%;
            margin: 3% auto;
            padding: 5%;
        }

        .inner-div {
            width: 45%;
            background-color: #ffffff;
            height: 72%;
            margin: 10px;
            box-sizing: border-box;
            border-radius: 18px;
            border: 20%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            flex: 1;
        }

        .footer-1 {
            background-color: black;
            color: white;
            padding: 1%;
            text-align: center;
            justify-content: center;
            font-size: 20px;
            width: 100%;
            margin-top: 10px;
        }

        .anc-foot {
            text-decoration: underline;
        }

        a.anc-foot {
            color: white;
            padding-left: 0%;
            padding-right: 0%;
        }

        b.signup {
            margin-top: 10px;
            display: block;
        }

        a.navb {
            color: #407bff;
            font-size: 20px;
        }

        a {
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

        .navb, form {
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

        img.logo {
            max-width: 100%;
            margin-right: 5%;
            margin-top: -2%;
        }

        @media only screen and (max-width: 768px) {
            .inner-div {
                width: 80%;
            }
        }
    </style>
</head>
<body>
    <div class="navb">
        @if (Route::has('login'))
            <div class="navb">
                @auth
                    <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="">Log in</a>
                    <a href="{{ url('/') }}" class="">Home</a>
                @endauth
            </div>
        @endif
    </div>
    <div class="py">
        <img src="./assets/logo.svg" class="logo"/>
        <b class="signup"><center>SIGN UP AS</center></b>
        <div class="outer-div">
            <div class="inner-div">
                <!-- Content of the first inner div -->
                <a href="{{ route('student.register') }}"><img src="./assets/student.svg" class="student"/></a><br>
                <b> STUDENT</b>
            </div>
            <div class="inner-div">
                <!-- Content of the second inner div -->
                <a href="{{ route('counselor.register') }}"><img src="./assets/Counselor.svg" class="counselor"/></a><br>
                <b>COUNSELOR</b>
            </div>
        </div>
    </div>
    <div class="footer-1">
        <footer>Made with ❤️ by  <a href="{{ route('meet') }}" class="anc-foot">Team Smart Under Criticism</a></footer>
    </div>
</body>
</html>
