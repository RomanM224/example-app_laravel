<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
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

    <div class="page">
        <div class="container">
            <div class="sideContent">
                <h4>Aside block</h4>
                <p>Just aside block</p>
            </div>
            <div class="mainContent">
                Contacts
            </div>
        </div>
        <div class="container2">
            <form class="form" action="{{ route('contact-form') }}" method="post">
                @csrf
                
                <div class="inputBlock">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="name" class="inputs">
                </div>
                <div class="inputBlock">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="email" class="inputs">
                </div>
                <div class="inputBlock">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="password" class="inputs">
                </div>
                <div class="inputBlock">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" class="message" placeholder="Message"></textarea>
                </div>
                <input class="submitButton" type="submit" value="Submit">
            </form>
        </div>
    </div>
    @include('components.footer')

</body>

</html>