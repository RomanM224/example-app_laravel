<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <!-- <link rel="stylesheet" href="/css/app.css"> -->
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
    <link rel="stylesheet" type="text/css" href="/css/header.css" />    
</head>

<body>
    @include('components.header')

    @foreach($data as $el)
         <div class="messageBlock">
            <h3>{{ $el->name }}</h3>
            <p>{{ $el->email }}</p>
            <small>{{ $el->created_at }}</small>
            <a href="{{ route('contact-data-one', $el->id) }}" class="messageDetailsButton">Details</a>
            <a href="{{ route('contact-update', $el->id) }}" class="messageEditButton">Edit</a>
            <a href="{{ route('contact-delete', $el->id) }}" class="messageDeleteButton">Delete</a>
        </div> 
    @endforeach

    @include('components.footer')

</body>

</html>