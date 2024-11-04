<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <nav>
        <label class="logo">PMS</label>
        <ul>
            <li>
                <a href="">Home</a>
            </li>
            <li>
                <a href="">Contact</a>
            </li>
            <li>
                <a href="">About</a>
            </li>

            @if (Route::has('register'))

            @auth
            <li>
                <a href="{{ route('register') }}">{{ Auth::user()->name }}</a>
            </li>

            @else

            <li>
                <a href="{{ route('register') }}">Registration</a>
            </li>
            <li>
                <a href="{{ route('login') }}">Login</a>
            </li>
            @endauth
            @endif
        </ul>
    </nav>

    @foreach ($post as $post)

    <div class="div_bag">
        <label for="">{{ $post->username }}</label>
        <p>{{ $post->description }}</p>
        <img src="post/{{ $post->image }}" alt="" height="600px" width="100%">
    </div>
    @endforeach

</body>

</html>
