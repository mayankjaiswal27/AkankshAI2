<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>AkankshAI</title>
</head>
<body>
    <div class="quiz-container">
        <h1>Quiz Time!</h1>
        <form action="{{ route('quiz.submit') }}" method="post">
            @csrf
            @foreach($questions as $question)
                <div class="question">
                    <p>{{ $question->question }}</p>
                    @foreach(json_decode($question->options) as $key => $option)
                        <label>
                            <input type="radio" name="q{{ $question->id }}" value="{{ $key }}">
                            {{ $option }}
                        </label>
                    @endforeach
                </div>
            @endforeach
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
