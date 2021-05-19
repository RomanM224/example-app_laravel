<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- <link rel="stylesheet" href="/css/app.css"> -->
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
    <link rel="stylesheet" type="text/css" href="/css/header.css" />    
</head>

<body>
    @include('components.header')

    @if($errors->any())
    <div class="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif 
    @if(session('success'))
        <div class="">
            {{ session('success')}}
        </div>

    @endif
    <div class="page">
    <div class="containter">
        <div class="sideContent">
            <h4>Aside block</h4>
            <p>Just aside block</p>
        </div>
        <div class="mainContent">
        Home
        </div>
    </div>
</div>
    @include('components.footer')

</body>

</html>