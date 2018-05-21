<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>JURL Shorten</title>
    <link rel="stylesheet" href="{{URL::to('css/global.css')}}">
</head>
    <body>
        <div class="container">
            <h1 class="title">Shorten a URL.</h1>
            @if($errors->has('url'))
                <p>{{ $errors->first('url') }}</p>
            @endif

            @if(Session::has('global'))
                <p>{{Session::get('global')}}</p>
            @endif
            <form action="{{ URL::action('make') }}" method="post">
                <input type="url" name="url" placeholder="Enter a URL."
                       autocomplete="off"{{ (Input::old('url')) ? ' value="' . e(Input::old('url')) . '"' : ''}}>
                <input type="submit" value="Shorten">
            </form>
        </div>
    </body>
</html>