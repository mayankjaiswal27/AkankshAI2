<!DOCTYPE html>
<html>
<head>
    <title>Counselor Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .navbar {
            padding-top: 1%;
            margin-left: 2.5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            margin-left: 0.5%;
        }

        .nav-links {
            display: flex;
            margin-right: 3.5%;
        }

        .navbar a {
            margin-left: 20px;
            color: #407bff;
            font-size: 95%;
            text-decoration: none;
        }

        .register {
            margin-top: 5%;
            background-color: #EDF5FF;
            margin-left: 4%;
            margin-right: 4%;
            overflow: hidden;
        }

        .details {
            display: flex;
            padding: 2%;
        }

        .first,
        .second {
            background-color: #FFFFFF;
            margin-left: 3%;
            margin-top: 1%;
            width: 30%;
            padding-left: 9%;
            padding-right: 5%;
            padding-top: 3%;
        }

        label {
            padding-top: 4%;
            display: block;
        }

        input {
            margin-top: 5%;
            margin-left: -25%;
            margin-right: 4%;
            width: 135%;
            border-spacing: 3%;
            padding: 5%;
            margin-bottom: 7%;
            box-sizing: border-box;
            border: 1px solid #ccc;
        }

        input::placeholder {
            color: #888;
        }

        .btn {
            text-align: center;
        }

        .btn button {
            background-color: #407BFF;
            color: #FFFFFF;
            padding: 1%;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn button:hover {
            background-color: #305AA8;
        }

        .elements {
            padding-bottom: 2%;
            overflow: hidden;
        }

        .google {
            text-align: center;
            padding-left: 3%;
            margin-left: 1%;
            padding-right: 2%;
            margin: 1% auto;
        }

        .google button {
            margin-bottom: 2%;
            background-color: #407BFF;
            color: #FFFFFF;
            padding: 1.5%;
            border-radius: 20px;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        h6 {
            text-align: center;
            color: #666666;
        }

        p {
            text-align: center;
            font-size: 25%;
        }

        .google a {
            text-align: center;
            color: black;
            display: block;
        }

        .google a:hover {
            text-decoration: none;
        }

        .robot {
            text-align: center;
            padding: 3%;
        }

        .footer-1 {
            background-color: black;
            color: white;
            padding: 1%;
            text-align: center;
            justify-content: center;
            font-size: 20px;
            margin-top: 10px;
            margin-left: 4%;
            margin-right: 4%;
        }

        .anc-foot {
            text-decoration: underline;
        }

        a.anc-foot {
            color: white;
            padding-left: 0%;
            padding-right: 0%;
        }

        .already {
            font-size: 445px;
        }

        /* Additional styles for new fields */
        input[type="text"] {
            width: 100%; /* Adjust as needed */
        }

        input[type="password"] {
            width: 100%; /* Adjust as needed */
        }

        /* Add any additional styles if needed for the new fields */
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <img src="../assets/logo.svg"/>
        </div>
        <div class="nav-links">
            <a href="{{ url('/dashboard') }}" class="">Home</a>{{--student dashboard page--}}
            <a href="{{ url('/') }}" class="">About Us</a> {{--meet page--}}
        </div>
    </div>
    @if(session('success'))
        <p style="color: green; font-size: 25px">{{ session('success') }}</p>
    @endif
    <div class="register">
        <form action="{{ url('/counselor/register') }}" method="post">
            @csrf
            <div class="details">
            <div class="first">
    <label for="name">Full Name:</label>
    <input type="text" name="name" placeholder="Full Name" value="{{ old('name') }}" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required><br>

    <label for="college">College Name:</label>
    <input type="text" name="college" placeholder="College Name" value="{{ old('college') }}" required><br>

    <label for="graduated">Graduated in Year:</label>
    <input type="text" name="graduated" placeholder="Graduated in Year" value="{{ old('graduated') }}" required><br>

    <label for="industry_experience">Experience in Industry:</label>
    <input type="text" name="industry_experience" placeholder="Years of Experience" value="{{ old('industry_experience') }}" required><br>
</div>
                <div class="second">
                    <label for="password">Password:</label>
                    <input type="password" name="password" placeholder="Password" required><br>

                    <label for="password_confirmation">Confirm Password:</label>
                    <input type="password" name="password_confirmation" placeholder="Confirm Password" required><br>

                    <label for="career_experience">Experience in Career Counselling:</label>
                    <input type="text" name="career_experience" placeholder="Years of Experience" value="{{ old('career_experience') }}" required><br>

                    <label for="degree_obtained">Degree Obtained:</label>
                    <input type="text" name="degree_obtained" placeholder="Degree Obtained" value="{{ old('degree_obtained') }}" required><br>
                </div>
            </div>
            <div class="elements">
                <div class="btn">
                    <button type="submit">Create Account</button>
                </div>
                <div class="google">
                    <p class="already" style="font-size: 25px">Already have an account?</p>
                    <a href="{{ url('/') }}" class="">Login</a>
                </div>
                <div class="image">
                    <img src="../assets/Sign-Up.svg">
                </div>
            </div>
        </form>
    </div>
    <div class="footer-1">
        <footer>Made with ❤️ by  <a href="{{ route('meet') }}" class="anc-foot">Team Smart Under Criticism</a></footer>
    </div>
</body>
</html>
