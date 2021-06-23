@extends('dashboard.dashboard_admin.dashboard')
@section('title','Customer')
@section('main')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Customer</h1>
            
          </div>

          <h2>Customer List</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Registered At</th>
                  <!-- <th>Action</th> -->
                </tr>
              </thead>
              <tbody>
              @foreach($customers as $customer)
                <tr>
                  <td>{{$customer->id}}</td>
                  <td>{{$customer->name}}</td>
                  <td>{{$customer->created_at}}</td>
                  <!-- <td><a href="">Edit</a></td> -->
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </main>
   @endsection