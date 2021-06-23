@extends('dashboard.dashboard_user.dashboard')
@section('title','Dashboard')
@section('main')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              
            </div>
          </div>

          <h2>Riwayat Konsultasi</h2>
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
              @foreach ($past as $history)
              @if(Carbon\Carbon::parse($history->consultation_end)->isPast())
                <tr>
                  <td>{{$history->consultation_date}}</td>
                  <td>{{$history->consultant->name}}</td>
                  <td>Finished</td>
                  <td><a href="">Check History</a></td>
                </tr>
                @endif
              @endforeach
              </tbody>
            </table>
          </div>
        </main>

  
@endsection