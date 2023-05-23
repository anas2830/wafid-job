@extends('layouts.website')

@section('content')

<div class="profile-wraper">
    <div class="pageHeading">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="heading-page">
                        <h1>You are welcome to wafid services company</h1>
                        <p>You are requested to fulfill your requirements to complete your process. When your
                            requirement will be 100% successfull submision,we will check your documents and will make
                            sure your process </p>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
<div class="profile-info-wrap">
    <div class="container">
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
 
    </div>
</div>
</div>


@endsection

