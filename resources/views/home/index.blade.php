@extends('layouts.main.app')
@section('title', 'Social Media Consultant')
@section('main')
<main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">We Provide Your Marketing Support</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
          <p>
          </p>
        </div>
      </section>
      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{ asset('images/ikura.jpg') }}" style="width: 100%; height: 100%;">
                <div class="card-body">
                <h5 class="card-title">Lila Ikura</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a role="button" class="btn btn-sm btn-outline-secondary" href="/profile">View</a>   
                    </div> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection