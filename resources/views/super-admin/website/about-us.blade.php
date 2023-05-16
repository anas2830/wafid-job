@extends('layouts.admin')

@section('content')
    
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Update About Us Content</h1>
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
                            <form action="{{ route('about-us') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="name" class="col-md-2 col-form-label text-md-right">What We do?</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" name="we_do_content" rows="5">{!! $about_us_seetings->we_do_content !!}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="name" class="col-md-2 col-form-label text-md-right">For Candidates</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" name="candidates_content" rows="5">{!! $about_us_seetings->candidates_content !!}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="name" class="col-md-2 col-form-label text-md-right">For Employers</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" name="employers_content" rows="5">{!! $about_us_seetings->employers_content !!}</textarea>
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