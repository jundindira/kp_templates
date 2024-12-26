<!DOCTYPE <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <header>
            <nav>
                <a href="{{ route('login') }}">Login</a>
            </nav>
        </header>
        <main>
            <h1>Daftar Template</h1>
            <ul>
                {{-- @foreach ($templates as $template)
                    <li>{{ $template->name }}</li>
                @endforeach --}}
            </ul>
        </main>
    </div>

</body>
</html>
