<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <!-- <link rel="stylesheet" href="/css/app.css"> -->
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
    <link rel="stylesheet" type="text/css" href="/css/header.css" />
</head>

<body>
    @include('components.header')
    @if(session('success'))
    <div class="">
        {{ session('success')}}
    </div>

    @endif

    <div class="messageBlock">
        <h3>{{ $data->name }}</h3>
        <p>{{ $data->email }}</p>
        <p>{{ $data->password }}</p>
        <p>{{ $data->message }}</p>
        <small>{{ $data->created_at }}</small>
    </div>

    @include('components.footer')

</body>

</html>