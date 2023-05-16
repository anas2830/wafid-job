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

    <div class="container">
        <div class="row justify-content-center m-0">
            <div class="col-md-12">
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
                        <form action="{{ route('profileUpdate') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row col-md-12 p-0">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right required p-0">Full Name</label>
                                        <div class="col-md-8">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="name" autofocus placeholder="Eneter your full name" value="{{ $userInfo->name }}">
                                            <span class="text-danger" id="nameErrorMsg"></span>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right p-0 required">{{ __('Password') }}</label>
                                        <div class="col-md-8">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" required>
                                            <span class="text-danger" id="passwordErrorMsg"></span> 
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right p-0">Present Address</label>
                                        <div class="col-md-8">
                                            <textarea class="form-control" name="present_address">{!! $userInfo->present_address !!}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right p-0 required">Your Country</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="country" required value="{{ $userInfo->from_country }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="job_title" class="col-md-4 col-form-label text-md-right p-0">Job Title</label>
                                        <div class="col-md-8">
                                            <input id="job_title" type="text" class="form-control"  name="job_title" placeholder="Enter your job title" autofocus value="{{ $userInfo->job_title }}"> 
                                            <span class="text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right p-0 required">Confirm Password</label>
                                        <div class="col-md-8">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right p-0">Permanent Address</label>
                                        <div class="col-md-8">
                                            <textarea class="form-control" name="permanent_address">{!! $userInfo->permanent_address !!}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right required p-0">Destination Country</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="destination_country" required placeholder="Where you want to go" value="{{ $userInfo->to_country }}">
                                        </div>
                                    </div>
                         
                                </div>

                            </div>

                            <div class="form-group row mb-0" style="justify-content: center;margin:2% 0;">
                                <button type="submit" class="btn btn-primary" style="background: #16a549;">
                                    Update Profile
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('javascript')

<script type="text/javascript">

    // $("#updateProfile").submit(function(e) {
    //     e.preventDefault();
    //     var form = document.getElementById('updateProfile');
    //     var formdata = new FormData(form);

    //     $.ajax({
    //         type: "POST",
    //         url: "/profileUpdate",
    //         processData: false,
    //         contentType: false,
    //         headers: {
    //             'X-CSRF-TOKEN': $('#token').val()
    //         },
    //         data: formdata,
    //         success: function(data) {
    //             console.log('success');
    //             console.log(data);
    //             console.log(data.msgtype);

    //             if (data.msgtype == "success") {
    //                 $('#Msg').removeClass('alert-danger');
    //                 $('#Msg').addClass('alert-success');
    //                 $('#text').text(data.messege);
    //                 $('#Msg').show();
    //             } else {
    //                 $('#Msg').removeClass('alert-success');
    //                 $('#Msg').addClass('alert-danger');
    //                 $('#text').text(data.messege);
    //                 $('#Msg').show();
    //             }
    //         },
    //         error: function(response) {
    //             console.log('error');
    //             $('#nameErrorMsg').text(response.responseJSON.errors.name);
    //             $('#passwordErrorMsg').text(response.responseJSON.errors.password);
    //         }
    //     });
    // });
</script>

@endpush