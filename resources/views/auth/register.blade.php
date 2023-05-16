@extends('layouts.website')

@section('content')

    <div class="profile-wraper">
        <div class="pageHeading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto">
                        <div class="heading-page">
                            <h1>You are welcome to wafid services</h1>
                            <p class="text-center">You are requested to register in our website to get our services.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="register-wrap">
        <div class="container">
            <div class="row justify-content-center m-0">
                <div class="col-md-10 m-auto">
                    <div class="card" style="margin:4% 0%">
                        @if (Session::has('message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ Session::get('message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if (Session::has('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ Session::get('error') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="card-header">Please fill up required fields</div>
                        <div class="card-body">
                            <form action="{{ route('sign-up') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row pr-md-5 pr-0">
                                    <label for="name" class="col-md-3 col-form-label text-md-right required p-0">Select Offer</label>
                                    <div class="col-md-9 pr-0">
                                        <select class="form-control" name="offer" required>
                                            <option value="">Please Select Offer</option>
                                            @foreach($offers as $offer)
                                                <option value="{{ $offer->id }}">{{ $offer->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row p-0">
                                    <div class="col-md-12 pr-md-5 pr-0">
                                        <div class="form-group row">
                                            <label for="name" class="col-md-3 col-form-label text-md-right required p-0">Full Name</label>
                                            <div class="col-md-9">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Eneter your full name">
                                                <span class="text-danger" id="nameErrorMsg"></span>
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row pt-3">
                                            <label for="job_title" class="col-md-3 col-form-label text-md-right p-0">Job Title</label>
                                            <div class="col-md-9">
                                                <input id="job_title" type="text" class="form-control"  name="job_title" placeholder="Enter your job title" autofocus> 
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password" class="col-md-3 col-form-label text-md-right required p-0">{{ __('Password') }}</label>
                                            <div class="col-md-9">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                                <span class="text-danger" id="passwordErrorMsg"></span> 
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-3 col-form-label text-md-right p-0">Present Address</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" name="present_address"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-3 col-form-label text-md-right p-0 required">Your Country</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="country" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 pr-md-5 pr-0">
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3 text-md-right">Profile Image </label>
                                            <div class="col-md-9">
                                                <input type="file" class="file-input" name="photo"> <span class="help-block">extension:<code>jpg/jpeg/png</code>, size: <code>300KB</code> Only</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-md-3 col-form-label text-md-right required p-0">Email</label>
                                            <div class="col-md-9">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                                <span class="text-danger" id="emailErrorMsg"></span>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-3 col-form-label text-md-right required p-0">Confirm Password</label>
                                            <div class="col-md-9">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-3 col-form-label text-md-right p-0">Permanent Address</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" name="permanent_address"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-3 col-form-label text-md-right required p-0">Destination Country</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="destination_country" required placeholder="Where you want to go">
                                            </div>
                                        </div>
                            
                                    </div>

                                </div>

                                <div class="form-group row mb-0" style="justify-content: center;margin:2% 0;">
                                    <button type="submit" class="btn btn-primary" style="background: #16a549;">
                                        Register
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


@endsection


@push('javascript')
    <script type="text/javascript">

        //  $("#register").submit(function(e) {
        //     e.preventDefault();
        //     var form = document.getElementById('register');
        //     var formdata = new FormData(form);
        //     $.ajax({
        //         type: "POST",
        //         url: "/sign-up",
        //         processData: false,
        //         contentType: false,
        //         headers: { 'X-CSRF-TOKEN': $('#token').val() },
        //         data: formdata,
        //         success: function(data) {
        //             if(data.msgtype == "success"){
        //                 $('#Msg').removeClass('alert-danger');
        //                 $('#Msg').addClass('alert-success');
        //                 $('#text').text(data.messege);
        //                 $('#Msg').show();
        //                 setTimeout(function(){ 
        //                     location.href = "/";
        //                 }, 3000);
        //             }else{
        //                 $('#Msg').removeClass('alert-success');
        //                 $('#Msg').addClass('alert-danger');
        //                 $('#text').text(data.messege);
        //                 $('#Msg').show();
        //             }
        //         },
        //         error: function(response) {
        //             console.log('error');
        //             $('#nameErrorMsg').text(response.responseJSON.errors.name);
        //             $('#userNameErrorMsg').text(response.responseJSON.errors.userName);
        //             $('#emailErrorMsg').text(response.responseJSON.errors.email);
        //             $('#passwordErrorMsg').text(response.responseJSON.errors.password);
        //             $('#photoErrorMsg').text(response.responseJSON.errors.photo);
        //         }
        //     });
        // });



    </script>
@endpush
