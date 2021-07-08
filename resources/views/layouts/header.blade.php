<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="http://kuliah.pwning.my.id/web-prak/css/style.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.0/examples/dashboard/dashboard.css" rel="stylesheet">
  </head>


  <body>
  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{route('home')}}">Social Media Consultant</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="{{route('logout')}}">Sign out</a>
        </li>
      </ul>
    </nav>
    <div class="container-fluid">
      <div class="row">
