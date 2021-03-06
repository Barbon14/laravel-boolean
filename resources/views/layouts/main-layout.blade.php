<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <div id="app">
        @include('components.header')
    
        <main>
    
            @if ($errors->any()) 
                <div class="alert alert-danger"> 
                    <ul> 
                        @foreach ($errors->all() as $error) 
                            <li>{{ $error }}</li> 
                        @endforeach 
                    </ul> 
                </div> 
            @endif
    
            @yield('content')
    
        </main>
        
        @include('components.footer')
    </div>
</body>
</html>