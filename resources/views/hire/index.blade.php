<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/hire/style.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>Hire</title>
  </head>
    
    @include('layouts.main.navbar')

<div class="mid d-flex align-items-center">

<div class="container">

    <div class="row first-row">
        <div class="col-3">
            <img src="{{$consultant ->profile_pic}}" alt="">
        </div>
        
        <div class="col-1"></div>
        
        <div class="col-8">
            <h1 class="name">{{$consultant->name}}</h1>
            <p class="about">{{$consultant ->bio}}</p>
        </div>
    </div>


    <div class="row">
        <div class="col spasi">
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="form-group">
              <div class="label-profile">Education</div>
              <div class="data-profile">{{$consultant ->education}}</div>
            </div>
            
              <div class="form-group">
                <div class="label-profile">Focus Skill</div>
                <div class="data-profile">{{$consultant ->skill}}</div>
              </div>
        </div>
        
        <div class="col align-self-center">
            <div class="hire-form" id="hire-form">
                <!-- <form action="" id="hire" role="form"> -->
                    <div class="form-group">
                        <h1 class="contract">CONTRACT</h1>
                    </div>

                    
                    <div class="form-group text-right justify-content-end">
                    
                    

                    @auth
                         <button type="submit" class="button button-yellow" data-toggle="modal" data-target=".bd-example-modal-xl">Hire</button>
                    @endauth
                    @guest
                        <a href="/login"><button type="submit" class="button button-yellow">Login</button></a>
                    @endguest


                    </div>
                    </div>
            <!-- </form> -->
            </div>
        </div>    
    </div>

<!-- Large modal -->
<div class="modal fade bd-example-modal-xl mid" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      
        <div class="row">
            <div class="col left-modal">
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col-md-5">  
                                <div class="images" style="display: inline-block">
                                    <img src="{{$consultant ->profile_pic}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-1 align-self-end">
                                <div class="name">
                                    <h1>{{$consultant->name}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <div class="label-profile" style="margin-top: 20px;">Education</div>
                            <div class="data-profile">{{$consultant ->education}}</div>
                          </div>
                          <div class="form-group">
                              <div class="label-profile">Focus Skill</div>
                              <div class="data-profile">{{$consultant ->skill}}</div>
                            </div>
                    </div>
                </div>
            </div>

            <div class="col right-modal">
                <div class="price">
                    <div class="row">
                        <div class="col">
                            <div class="price-label">
                                PAYMENT
                            </div>
                        </div>
                        <div class="col text-right text-end">
                            <h1 class="price-amount align-middle">
                                USD {{$consultant ->price}}
                            </h1>
                        </div>
                    </div>
                </div>

                <div class="payment-form" id="payment-form">
                    <form action="/purchase" id="payment" role="form" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="fullname">Select Date</label>
                        <input type="datetime-local" name="consultation_date" id="consultation_date" class="form-control" min="{{date('Y-m-d\TH:i')}}" required>
                    </div>

                        <div class="form-group">
                            <label for="fullname">Cardholder Name</label>
                            <input type="text" name="card_name" id="card_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="fullname">Card Number</label>
                            <input type="text" pattern="\d*" name="cc_num" id="cc_num" class="form-control" maxlength="12" required>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="fullname">Expiry Date</label>
                                    <input type="month" name="month" id="month" class="form-control" required>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label for="fullname">CVV</label>
                                    <input type="text" pattern="\d*" name="cvv" id="cvv" class="form-control" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==3) return false;" required>
                                </div>
                            </div>
                        </div>

         
                        <input type="hidden" name="price" value="{{$consultant->price}}">
                        <input type="hidden" name="consultant_id" value="{{$consultant->id}}">
                        <div class="form-group text-right">
                        <button type="submit" class="button button-yellow" data-toggle="modal" data-target=".bd-example-modal-xl" style="margin-top: 30px">PAY</button>
                        </div>
                        </div>
                </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
</div>
</div>


    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script  src="{{asset('js/hire/script.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
