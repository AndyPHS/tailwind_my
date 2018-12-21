<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "https://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<html lang="zh-cn" xmlns="https://www.w3.org/1999/xhtml">
<head>
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')"/>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>

</head>
<body>
<div id="app">
    {{-- Part: header of body --}}
    @section('body-header')
        {{-- Part: navigation bar --}}
        @include('home.partials.header')
    @show
    @yield('content')

    @section('footer') @include('home.partials.footer') @show
</div>


</body>
</html>
