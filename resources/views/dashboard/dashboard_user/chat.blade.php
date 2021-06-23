@extends('dashboard.dashboard_user.dashboard')
@section('title','Chat')
@section('main')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Chat</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
               
            </div>
          </div>

          <h2>Active Session</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Tanggal</th>
                  <th>Consultant</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              
                @foreach($session as $chat)
                @if (Carbon\Carbon::now()->between(Carbon\Carbon::parse($chat->consultation_date), Carbon\Carbon::parse($chat->consultation_end)))
                <tr>
                  <td>{{$chat->consultation_date}}</td>
                  <td>{{$chat->consultant->name}}</td>       
                  <td>Running</td>
                  <td><a href="">Chat Now</a></td>
                </tr>
                @endif
                @endforeach
              
              </tbody>
            </table>
          </div>


          <h2>Ongoing Session</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Tanggal</th>
                  <th>Consultant</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              
                @foreach($session as $chat)
                @if(!Carbon\Carbon::parse($chat->consultation_date)->isPast())
                <tr>
                  <td>{{$chat->consultation_date}}</td>
                  <td>{{$chat->consultant->name}}</td>
                  <td>Ongoing</td>
                  <td><a href="">Wait for the date</a></td>
                </tr>
                @endif
                @endforeach
              
              </tbody>
            </table>
          </div>

        </main>
@endsection