@extends('layout.main')
@section('content')

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Laravel</title>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <script src="{{ mix('/js/app.js') }}" defer></script>
</head>

<body>
    <div id="app">
        <div class="container">

            <router-link to='/'>Home</router-link>
            <router-link to='/login'>Login</router-link>
            <router-link to='/porfile'>Login</router-link>

            <router-view></router-view>
        </div>
    </div>
</body>

</html>


@endsection
