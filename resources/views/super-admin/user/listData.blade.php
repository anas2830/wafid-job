  @extends('layouts.admin')
  

  @section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Users List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="" style="padding:2%">

                @if (session('msgType'))
                    @if(session('msgType') == 'danger')
                      <div id="msgDiv" class="alert alert-danger alert-styled-left alert-arrow-left alert-bordered">
                          <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                          <span class="text-semibold">{{ session('msgType') }}!</span> {{ session('messege') }}
                      </div>
                    @else
                      <div id="msgDiv" class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">
                          <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                          <span class="text-semibold">{{ session('msgType') }}!</span> {{ session('messege') }}
                      </div>
                    @endif
                @endif

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                      <div class="alert alert-danger alert-styled-left alert-bordered">
                          <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                          <span class="text-semibold">Opps!</span> {{ $error }}.
                      </div>
                    @endforeach
                @endif

                {{-- <div class="data-list text-right">
                  <button type="button" class="btn btn-info btn-xs open-modal" modal-title="Create Offer" modal-type="create" modal-size="medium" modal-class="" selector="Offer" modal-link="{{url('offers/create')}}" style="margin-bottom:2%; padding:5px"> Add New Offer </button>
                </div> --}}

                <table class="table table-bordered table-hover datatable-highlight data-list" id="offersTable">
                    <thead>
                        <tr>
                            <th width="5%">SL.</th>
                            <th width="10%">ID Number</th>
                            <th width="10%">Name</th>
                            <th width="10%">Email</th>
                            <th width="10%">Job Title</th>
                            <th width="20%">Offer</th>
                            <th width="10%">Country</th>
                            <th width="10%">Destination</th>
                            <th width="5%">Status</th>
                            <th width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @if (count($users) > 0)
                            @foreach ($users as $key => $user)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{ $user->id_number }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->job_title }}</td>
                                <td>{{ Helper::offerName($user->offer_id) }}</td>
                                <td>{{ $user->from_country }}</td>
                                <td>{{ $user->to_country }}</td>
                                <td>
                                    @if($user->complete_step == 4)
                                      <span class="right badge badge-success"> Complete </span>
                                    @else 
                                      <span class="right badge badge-warning"> Processing </span>
                                    @endif 
                                </td>
                                <td>
                                  <a href="#" class="open-modal action-icon" modal-title="Show Document" modal-type="show" modal-size="large" modal-class="" selector="userDocument" modal-link="{{url('user-document/'.$user->id)}} ">
                                    Documents | 
                                  </a>
                                  <a href="#" class="action-icon"><i class="icon-trash" id="delete" delete-link="{{url('delete-user', [$user->id])}}">@csrf </i></a>
                                </td>
                            </tr> 
                            @endforeach
                        @else
                            <tr>
                                <td colspan="9">No Data Found!</td>
                            </tr>
                        @endif
                    </tbody>
                </table>

            </div>
          </div>
        </div>


    </div>
    <!-- /.content-wrapper -->


  @endsection


  @push('javascript')

    <script type="text/javascript">
      $(document).ready( function () {
        $('#offersTable').DataTable();
      });
    </script>
  @endpush

  
