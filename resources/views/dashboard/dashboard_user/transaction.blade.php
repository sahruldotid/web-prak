@extends('dashboard.dashboard_user.dashboard')
@section('title','Transaction')
@section('main')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Transaction</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
               
            </div>
          </div>

          <h2>Payment History</h2>
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
                @foreach($user as $transaction)

                <tr>
                  <td>{{ $transaction->created_at}}</td>
                  <td>{{ $transaction->consultant->name}}</td>
                  <td>Verified</td>
                  <td><a href="transaction/invoice/{{ $transaction->id}}" target="_blank">Download Invoice</a></td>
                </tr>
                @endforeach
              
              </tbody>
            </table>
          </div>
        </main>

@endsection



