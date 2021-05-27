<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/auth/style.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>Authentication</title>
  </head>
  <body>

<div class="mid d-flex align-items-center">
<div class="container">
<div class="row">
    <div class="col-6">
        <div class="row">
            <div class="col text-right signup-div">
                <h1 class="auth-label" id="auth-label">SIGNUP</h1>
            </div>
        </div>
        <div class="row">
            <div class="col text-right">
                <img src="{{ asset('images/auth.svg') }}" alt="">
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="row">
            <div class="col">
                <div class="auth-form">
                    <div class="login-nav">
                        <div class="row">
                            <div class="col-6 text-right">
                                <a href="#" id="login-form-link">Login</a>
                            </div>
                            <div class="col-6 text-left" >
                                <a href="#" id="register-form-link" class="active">Register</a>
                            </div>
                        </div>
                    </div>

                    <form action="/register" id="register-form" role="form" style="display: block;">
                        <div class="form-group">
                            <label for="fullname">Fullname</label>
                            <input type="text" name="fullname" id="fullname" class="form-control" placeholder="John Doe" required>

                        <div class="form-group">
                            <label for="fullname">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="someone@mail.com" required>
            
                        </div>
                        <div class="form-group">
                            <label for="fullname">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="********" required>
                        </div>
    
                        <div class="form-group text-center">
                        <button type="submit" class="button button-yellow">Submit</button>
                        </div>
                        </div>
                </form>
       
                    
                    
                    <form action="/login" id="login-form" style="display: none;">
                       
                            <div class="form-group">
                                <label for="fullname">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="someone@mail.com" required>
                
                            </div>
                            <div class="form-group">
                                <label for="fullname">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="********" required>
                            </div>
        
                            <div class="form-group text-center">
                            <button type="submit" class="button button-yellow">Submit</button>
                            </div>
                    </div>
                    </form>
                </div>


        </div>
    </div>
    
</div>
   
</div>
</div>










    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script><script  src="{{ asset('js/auth/script.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    


</body>
</html>