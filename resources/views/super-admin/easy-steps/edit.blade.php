<style>
.modal-dialog {
    max-width: 700px;
}
</style>
<form class="form-horizontal form-validate-jquery" action="{{url('easy-steps', [$step->id])}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="panel panel-flat">
        <div class="panel-body" id="modal-container">

            <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label text-md-right required">Name</label>
                <div class="col-md-10">
                    <input id="name" type="text" class="form-control" name="name" required autocomplete="name" autofocus value="{{ @$step->name }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label text-md-right required">Description</label>
                <div class="col-md-10">
                    <textarea class="form-control" rows="6" name="short_desc">{!! @$step->short_desc !!}</textarea>
                </div>
            </div>

        </div>
    </div>
</form>
