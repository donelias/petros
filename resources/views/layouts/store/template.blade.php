<!DOCTYPE html>
<html lang="es">
<head>
    <title>Petro's</title>
    <meta charset="utf-8">
        @include('layouts.store.js')
        @include('layouts.store.css')

</head>
<style>
    body{
        margin-top: 0px;
    }
</style>
<body >
    
    @if(\Session::has('message'))
        @include('layouts.store.message')
    @endif

    @include('layouts.store.nav')
    

       
    @yield('content')


       
    @include('layouts.store.footer')

</body>
</html>
