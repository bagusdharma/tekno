@extends('master')

@section('content')
<h1>Organigram</h1>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
         <center>   <a href=" {{ route('home') }} "><img src="/img/ornigram.png" alt="ornigram"></a></center>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

@endsection
