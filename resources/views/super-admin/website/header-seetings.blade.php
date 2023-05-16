@extends('layouts.admin')

@section('content')
    
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Update Header/Footer Content</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Website</a></li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
          <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="card">

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <p><strong>Opps Something went wrong</strong></p>
                                <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                </ul>
                            </div>
                        @endif

                        @if(session('message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ Session::get('message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ Session::get('error') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <div class="card-body">
                            <form action="{{ route('header-seetings') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <h3>Site Seetings:</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="name" class="col-md-2 col-form-label text-md-right">site logo:</label>
                                            <div class="col-md-10">
                                                <input type="file" class="form-control" name="site_logo">
                                                <img src="{{ asset('uploads/bg/'.$header_footer_seetings->site_logo) }}" style="max-height:150px; max-width:150px" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="name" class="col-md-2 col-form-label text-md-right">fav icon:</label>
                                            <div class="col-md-10">
                                                <input type="file" class="form-control" name="fav_icon">
                                                <img src="{{ asset('uploads/bg/'.$header_footer_seetings->fav_icon) }}" style="max-height:50px; max-width:50px" />
                                            </div>
                                        </div>
                                    </div>
                                 
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="name" class="col-md-2 col-form-label text-md-right">site title:</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="site_title" value="{{ $header_footer_seetings->site_title }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h3>Header Seetings:</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="name" class="col-md-2 col-form-label text-md-right">email:</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="email" value="{{ $header_footer_seetings->email }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="name" class="col-md-2 col-form-label text-md-right">Phone:</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="phone" value="{{ $header_footer_seetings->phone }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- social links --}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="name" class="col-md-2 col-form-label text-md-right">facebook:</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="facebook" value="{{ $header_footer_seetings->facebook }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="name" class="col-md-2 col-form-label text-md-right">twitter:</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="twitter" value="{{ $header_footer_seetings->facebook }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="name" class="col-md-2 col-form-label text-md-right">instagram:</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="instagram" value="{{ $header_footer_seetings->instagram }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="name" class="col-md-2 col-form-label text-md-right">linkedin:</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="linkedin" value="{{ $header_footer_seetings->linkedin }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- end social links --}}
                                <h3 class="mt-3">Banner Seetings:</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="name" class="col-md-2 col-form-label text-md-right">Top Text:</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="banner_top_text" value="{{ $header_footer_seetings->banner_top_text }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="name" class="col-md-2 col-form-label text-md-right">Middle Text:</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="banner_middle_text" value="{{ $header_footer_seetings->banner_middle_text }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label for="name" class="col-md-1 col-form-label text-md-right">Bottom Text:</label>
                                            <div class="col-md-11">
                                                <input type="text" class="form-control" name="banner_bottom_text" value="{{ $header_footer_seetings->banner_bottom_text }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="mt-3">Footer Seetings:</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="name" class="col-md-2 col-form-label text-md-right">Left Short Text:</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" name="footer_left_short_text">{!! $header_footer_seetings->footer_left_short_text !!}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="name" class="col-md-2 col-form-label text-md-right">Address:</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" name="address">{!! $header_footer_seetings->address !!}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row mb-0 col-md-12">
                                    <button type="submit" class="btn btn-primary">
                                        Update
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
              </div>
          </div>
        </section>

    </div>
    
    
@endsection

@push('javascript')

<script type="text/javascript">

    
</script>

@endpush