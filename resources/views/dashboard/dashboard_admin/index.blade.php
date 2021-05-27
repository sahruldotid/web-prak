@extends('dashboard.dashboard_admin.dashboard')
@section('title','Dashboard')
@section('main')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
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
                <tr>
                  <td>1/1/2021</td>
                  <td>User1 hire Lila Ikura as Consultant</td>
                  <td>Success</td>

                </tr>
                <tr>
                  <td>1/1/2021</td>
                  <td>User2 hire Lila Ikura as Consultant</td>
                  <td>Success</td>

                </tr>
                
              </tbody>
            </table>
          </div>
        </main>
    @endsection