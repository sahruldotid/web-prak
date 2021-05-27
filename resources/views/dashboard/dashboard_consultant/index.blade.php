@extends('dashboard.dashboard_consultant.dashboard')
@section('title','Consultant Dashboard')
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

          <h2>Jadwal Konsultasi</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Tanggal</th>
                  <th>Consultant</th>
                  <th>Title</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1/2/2021</td>
                  <td>User 1</td>
                  <td>Consultation Part 2</td>
                  <td>Ongoing</td>
                  <td><a href="">Download</a></td>
                  
                </tr>
                <tr>
                  <td>1/1/2021</td>
                  <td>User 1</td>
                  <td>Consultation Part 1</td>
                  <td>Finished</td>
                  <td><a href="">Download</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </main>
      @endsection