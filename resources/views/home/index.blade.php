@extends('layouts.main.app')
@section('title', 'Social Media Consultant')
@section('main')
<main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">We Provide Your Marketing Support</h1>
          <p class="lead text-muted">Let our digital marketing team help you develop an online marketing strategy to drive more qualified visitors to your site and convert those visitors into leads and sales. What are you waiting for? Contact us today and start dominating the web.</p>
          <p>
          </p>
        </div>
      </section>
      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            
            @foreach($consultants as $consultant)

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{$consultant->profile_pic}}" style="width: 100%; height: 100%;">
                <div class="card-body">
                <h5 class="card-title">{{$consultant->name}}</h5>
                  <p class="card-text">{{$consultant->bio}}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a role="button" class="btn btn-sm btn-outline-secondary" href="hire/{{$consultant->id}}">View</a>   
                    </div> 
                  </div>
                </div>
              </div>
            </div>

            @endforeach
            
            
            
          </div>
        </div>
      </div>
    </main>
@endsection