@extends('layouts.landing')
@section('content')
<style type="text/css">
     .last.container {
    margin-bottom: 100px !important;
  }
  h1.ui.center.header {
    margin-top: 0em;
  }
  h2.ui.center.header {
    margin: 4em 0em 2em;
  }
  h3.ui.center.header {
    margin-top: 2em;
    padding: 0em 0em;
  }
  </style>
<div ui class="container">
    {{-- <div class="ui equal width grid">
  <div class="two column row">
    <div class="column">
      <img class="ui massive rounded image" src="/storage/images/alesia-kazantceva-283291-unsplash.jpg">
    </div>
    <div class="column">
      <p>vans</p>
    </div>
  </div> --}}
<h3 class="ui center aligned header">FennTech Landing Page</h3>
<div class="ui two column stackable grid container">
  <div class="column">
    <div class="ui segment"> <img class="ui massive rounded image" src="/storage/images/home1.jpg"></div>
  </div>
  <div class="column">
    <div class="ui segment"> <img class="ui massive rounded image" src="/storage/images/corporate.jpg"></div>
  </div>
  <div class="column">
    <div class="ui segment"><img class="ui massive rounded image" src="/storage/images/software.jpg"></div>
  </div>
  <div class="column">
    <div class="ui segment"><img class="ui massive rounded image" src="/storage/images/networking.jpg"></div>
  </div>

</div>
</div>
@endsection
