<!DOCTYPE html>
<html>
<head>
    <title>Text-to-Speech</title>
</head>
<body>
    <form action="{{ route('speak') }}" method="POST">
        @csrf
        <textarea name="text" rows="5" cols="40" placeholder="Digite o texto aqui"></textarea>
        <br>
        <button type="submit">Converter em voz</button>
    </form>

    @if(session('audio'))
        <audio controls>
            <source src="{{ session('audio') }}" type="audio/mp3">
        </audio>
    @endif
</body>
</html>