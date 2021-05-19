<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Update</title>
    <!-- <link rel="stylesheet" href="/css/app.css"> -->
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
    <link rel="stylesheet" type="text/css" href="/css/header.css" />
</head>

<body>
    @include('components.header')
    <div class="container2">
    <form class="form" action="{{ route('contact-form-update', $message->id) }}" method="post">
        @csrf

        <div class="inputBlock">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="name" class="inputs" value="{{$message->name}}">
        </div>
        <div class="inputBlock">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="email" class="inputs" value="{{$message->email}}">
        </div>
        <div class="inputBlock">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="password" class="inputs" value="{{$message->password}}">
        </div>
        <div class="inputBlock">
            <label for="message">Message</label>
            <textarea name="message" id="message" class="message" placeholder="Message">{{$message->message }}</textarea>
        </div>
        <input class="submitButton" type="submit" value="Update">

    </form>
    </div>

    @include('components.footer')

</body>

</html>