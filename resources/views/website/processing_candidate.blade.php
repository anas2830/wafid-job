@extends('layouts.website')

@section('content')

    
    <div class="profile-wraper">
        <div class="pageHeading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto">
                        <div class="heading-page">
                            <h1>You are welcome to wafid services</h1>
                            <p class="text-center">They are under Visa Processing.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-white" style="margin:4% 0%">
        <div class="container">
          <div class="row">
            @foreach ($processing_candidate as $user)
                <div class="col-lg-3 mb-4">
                    <div class="profile-photo-wrap align-self-stretch">
                        <div class="avatar-upload">
                            <div class="avatar-preview">
                                @if(isset($user->photo_name))
                                    <div id="imagePreview" style="background-image: url(../../uploads/userProfile/{{ $user->photo_name }});"></div>
                                @else 
                                    <div id="imagePreview" style="background-image: url(../../uploads/bg/profileDummy.jpg);"></div>
                                @endif 
                            </div>
                        </div>
                        <div class="profile-persone-info">
                            <p><strong>Id Number:</strong>{{ $user->id_number }}</p>
                            <p><strong>Name:</strong>{{ $user->name }}</p>
                            <p><strong>Job Title:</strong>{{ $user->job_title }}</p>
                            <p><strong>From:</strong>{{ $user->from_country }}</p>
                            <p><strong>To:</strong>{{ $user->to_country }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
          </div>
          {{ $processing_candidate->links() }} 
        </div>
      </div>

@endsection