<!-- Image and text -->
<nav class="navbar navbar-expand-lg justify-content-end navbar static-top sb-navbar">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> 
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/gallery">Gallery</a>
      </li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          News & Events
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Blog</a>
          <a class="dropdown-item" href="#">NRN Events</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Our Vlog</a>
        </div>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="/about">About Us</a>
        </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Feedback</a>
      </li>

    </ul>
    @cannot('isUser')
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        <a class="btn btn-outline-primary" id="inlistService" onclick="$('#sp_register_modal').modal({'backdrop': 'static'});">InList Your Service</a>
        </li>
        </ul>
      @endcannot
    </div>
    
    
    <hr>

</nav>

<!-- Modal -->
<div class="modal" id="sp_register_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">You have to register in our system to inlist your service</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <form method="POST" action="{{ route('service.register')}}" id="sp_register_form" style="display: block">
                    <input type="hidden" value="{{csrf_token()}}" id="token" />
                    {{--@csrf--}}

                    <div class="form-group row">
                        <label for="first_name" class="col-md-2 col-form-label text-md-right">{{ __('First Name') }}</label>

                        <div class="col-md-4">
                            <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" autofocus>

                            @if ($errors->has('first_name'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <label for="last_name" class="col-md-2 col-form-label text-md-right">{{ __('Last Name') }}</label>

                        <div class="col-md-4">
                            <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" autofocus>

                            @if ($errors->has('last_name'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                            @endif
                        </div>

                    </div>
                    <div class="form-group row">

                        <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-4">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}">

                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                        <div class="col-md-4">
                            <input id="phone_number" type="text" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" value="{{ old('phone_number') }}" >

                            @if ($errors->has('phone_number'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                            @endif
                        </div>

                    </div>


                    <div class="form-group row">
                        <label for="password" class="col-md-2 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-4">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">

                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <label for="password-confirm" class="col-md-2 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-4">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >
                        </div>
                        <div class="ml-auto mr-3">

                        <button type="submit" class="btn btn-primary" id="sp_register_button">
                            {{ __('Continue') }}
                        </button>
                        </div>
                    </div>

                </form>
                <hr>
                <div class="row print-error-msg">
                    <div class="container">
                        <ul>
                            <li> You are few more steps away to be our valuable member</li>
                            <li> We are more concerned about your private information, and won't be shared with anyone</li>
                            <li> Password must be at least 6 character long</li>

                        </ul>

                    </div>
                </div>
            </div>
                <div class="sp_feedback_content ml-5 mt-5 mb-5 mr-5" style="display: none">
                    <h3 style="margin-left: 60px;">Please Check Your Email for verification</h3>
                    <h4 style="margin-left: 190px;">Click <a href="{{route('serviceprovider.login')}}">Here</a> for Login</h4>
                </div>
            </div>
        </div>





            </div>






<script type="text/javascript">
    @if (count($errors) > 0)
    $('#sp_register_modal').modal('show');
    @else
    $('#sp_register_modal').modal('hide');
    @endif
</script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function(){

        $('#sp_register_form').submit(function (e) {
            e.preventDefault();
            var data = $(this).serialize();
            var url = $(this).attr('action');
            var post = $(this).attr('method');
            $.ajax({
                type:post,
                url:url,
                data:data,
                dataType:'json',
                success: function(data) {
                    if($.isEmptyObject(data.error)){
                        $('.modal-body').css('display','none');
                        $('.sp_feedback_content').css('display','block');
                        $('.modal-title').html("<div class='ml-auto' style='text-align:center;'>Thank You For Registering With Us</div>");
                    }else{
                        console.log(data.error);
                        printErrorMsg(data.error);
                    }
                }
            });

        });

        function printErrorMsg(msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").addClass("alert alert-danger");
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }
    });
</script>
