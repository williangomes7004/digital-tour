@extends('layouts.amizade')
@section('content')
<!--Section: Group of personal cards-->

<div class="container">
  <div class="mt-5">
    <div class="col-lg-12 col-md-12 col-xl-12 mt-5">
    <div class="row">
    <div class="d-flex justify-content-center h-100">
        <form class="searchbar" method="Post" action="/pesquisar-amigos">
          @csrf
          <input class="search_input" type="text" id="pesquisar" name="pesquisa" placeholder="Search...">
          <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
        </form>
      </div>
    </div>
      <div class="row">

@foreach($friends as $friend)
        <div class="col-4 mt-5">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="view overlay flip-card-front">
                        @if($friend->image != null)
                        <img class="card-img-top" src="{{ url('storage/users/'.$friend->image) }}" alt="mdbCard image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                        @else
                        <img src="/img/user.jpg" class="card-img-top">
                        @endif
                        <!-- mdbCard image-->
                        <!-- mdbCard content -->
                        <div class="card-body">
                            <!-- Title-->
                            <a>
                                <h4 class="card-title">{{$friend->name}}</h4>
                            </a>

                            <a class="card-meta">{{$friend->location}}</a>
                            <!-- Text -->
                            <p class="card-text">{{$friend->email}}</p>
                            <hr>
                            <a class="card-meta"><span><i class="fa fa-user"></i>48 Friends</span></a>
                            <p class="card-meta float-right">{{$friend->created_at}}</p>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <h1>{{$friend->name}}</h1>
                        <p>
                        {{$friend->experience}}
                        </p>
                        <a href="">Ver amigo</a>

                    </div>
                </div>
            </div>
        </div>
@endforeach
@endsection
