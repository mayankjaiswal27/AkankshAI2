<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>AkankshAI</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Roboto&family=Tenali+Ramakrishna&display=swap');
        body{
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
            margin-left: 20px; /* Adjust spacing between links if necessary */
            color: #407bff;
            font-size: 95%;
            text-decoration: none; /* Optional: remove underline from links */
        }
        .question{
            text-align: center;
            padding: 2%;
            font-family: 'Poppins', sans-serif;
            font-family: 'Roboto', sans-serif;
        }
        .question p{
            font-size: 30px;
            font-style: initial;
            font-family: 'Poppins', sans-serif;
            font-family: 'Roboto', sans-serif;
        }
        .options{
            font-family: 'Poppins', sans-serif;
            font-family: 'Roboto', sans-serif;
        }
        .options button{
            padding:0.75%;
            margin-bottom: 0.8%;
            width:15%;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            background-color: #EDE8E3;
            color: black;
        }
        .options button:hover{
            background-color: #6293fc;
        }
        .submit button{
            margin-top: 3%;
            background-color: #407BFF;
            width:15%;
            color: #FFFFFF;
            padding: 1%;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            font-family: 'Poppins', sans-serif;
            font-family: 'Roboto', sans-serif;
        }
        .submit button:hover{
            background-color: #305AA8;
        }
        .image{
            text-align: end;
            margin-top: -15%;
        }
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
            <a href="{{ url('/') }}" class="">Take Test</a> {{--quiz page--}}
        </div>
    </div>
    <div class="quiz-container">
       <div class="question">
            <p>What is your favourite school subject?</p>
            <form action="{{ route('quiz.submit') }}" method="post">
                @csrf
                <div class=options>
                    <button type="button" name="option1">Science</button><br>
                    <button type="button" name="option2">Humanities</button><br>
                    <button type="button" name="option3">Mathematics</button><br>
                    <button type="button" name="option4">Technology</button><br>
                    <button type="button" name="option5">Physical Education</button><br>
                </div>
                @foreach($questions as $question)
                    <div class="question">
                        <p>{{ $question->question }}</p>
                        @foreach(json_decode($question->options) as $key => $option)
                            <label>
                                <button type="submit" name="q{{ $question->id }}" value="{{ $key }}">
                                {{ $option }}
                            </label>
                        @endforeach
                    </div>
                @endforeach
                <div class="submit">
                    <button type="submit">Continue</button>
                </div>
            </form>
       </div>
       <div class="image">
        <img src="../assets/Character_1.svg">
    </div>
    </div>
</body>
</html>
