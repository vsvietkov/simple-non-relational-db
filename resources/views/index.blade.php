<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SimpleNonRelationalDB</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            height: 50%;
            width: 100%;
        }
        .buttons {
            margin: auto;
            display: flex;
            gap: 30px;
        }
        img {
            margin: auto;
            width: 600px;
        }
    </style>
</head>
<body>
    <form class="container">
        <img src="{{ $problem['image'] }}" alt="problem"/>
        <div class="buttons">
            <button type="submit" name="answer" value="{{ $answers[0]['_id'] }}">{{ $answers[0]['description'] }}</button>
            <button type="submit" name="answer" value="{{ $answers[1]['_id'] }}">{{ $answers[1]['description'] }}</button>
        </div>
    </form>
</body>
</html>
