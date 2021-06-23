@extends('dashboard.dashboard_admin.dashboard')
@section('title','Dashboard')
@section('main')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
               
            </div>
          </div>

          <h2>Activity</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Activity</th>
                  <th>Status</th>

                </tr>
              </thead>
              <tbody>
               @foreach($activity as $act)
                <tr>
                  <td>{{$act->created_at}}</td>
                  <td>{{$act->user->name}} hire {{$act->consultant->name}} as Consultant</td>
                  <td>Success</td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </main>
    @endsection