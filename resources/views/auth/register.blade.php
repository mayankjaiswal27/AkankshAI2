<html>
<head>
    <title>AkankshAI</title>
    <style>
        /* Optional: Some basic styling for demonstration purposes */
        .py {
            text-align: center;
            margin-top: 0px;
        }

        .outer-div {
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 73vh;
            background: #EDF5FF;
            border-radius: 18px;
            box-sizing: border-box;
            width: 62%;
            margin: 3% auto;
            padding-left: 10%;
            padding-right: 10%;
        }

        .inner-div {
            width: 35%;
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
            text-align: left;
            margin-right: 90%;
            margin-top: -2%;
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
        <b class="signup">SIGN UP AS</b>
        <div class="outer-div">
            <div class="inner-div">
                <!-- Content of the first inner div -->
                <a href="{{ route('student') }}"><img src="./assets/student.svg" class="student"/></a><br>
               <b> STUDENT</b>
            </div>
            <div class="inner-div">
                <!-- Content of the second inner div -->
                <a href="{{ route('counselor') }}"><img src="./assets/Counselor.svg" class="counselor"/></a><br>
                <b>COUNSELOR</b>
            </div>
        </div>
    </div>
    <div class="footer-1">
        <footer>Made with ❤️ by  <a href="{{ route('meet') }}" class="anc-foot">Team Smart Under Criticism</a></footer>
    </div>
</body>
</html>
