@extends('dashboard.dashboard_consultant.dashboard')
@section('title','Edit Account')
@section('main')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Account Setting</h1>

          </div>

          <h2>Edit Account</h2>


            <form action="{{route('consultant_update')}}" role="form" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group" style="display: none;">
                <input type="hidden" name="id" id="id" class="form-control" value="{{$user->id}}">
            </div>
           
           
            <div class="form-group">


                <div class="panel text-center">

                @if($user ->profile_pic)
                <img id="profile" src="{{ $user ->profile_pic }}">
                @else
                <img id="profile" src="https://res.cloudinary.com/pwnt3ster/image/upload/v1620997772/default_qarwaq.png" >
                @endif
                </div>


                <input style="margin-left: 20px;" type="file" name="image">
            </div>



          
            
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" maxlength="20" required="" value="{{$user->name}}">
            </div>


            <div class="form-group">
                <label for="input-type">Gender</label>
                <div class="col text-center">
                    <div id="input-type" class="row">
                        <div class="col-sm-2">
                            <input class="form-check-input" type="radio" name="gender" value="M" id="inlineRadio1" class="sr-only"  {{ $user ->gender == 'M' ? 'checked' : ''}} required>
                            <label class="form-check-label" for="inlineRadio1">Laki - laki</label>
                        </div>
                        <div class="col-sm-2">
                            <input class="form-check-input" type="radio" name="gender" value="F" class="sr-only" id="inlineRadio2" {{ $user ->gender == 'F' ? 'checked' : ''}} required>
                            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="form-group">
                <label>Education</label>
                <input type="text" name="education" class="form-control" maxlength="20" value="{{$user ->education}}">
            </div>
            <div class="form-group">
                <label>Skill</label>
                <input type="text" name="skill" class="form-control" maxlength="20"  value="{{$user ->skill}}">
            </div>
            <div class="form-group">
                <label for="fullname">Bio</label>
                <textarea type="text" name="bio" id="bio" class="form-control">{{ $user ->bio }}</textarea>
            </div>
            <div class="form-group text-right">
            <button type="submit" class="btn btn-info" style="margin-top: 30px">Update</button>
            </div>
            </form>

        </div>
        </main>
@endsection