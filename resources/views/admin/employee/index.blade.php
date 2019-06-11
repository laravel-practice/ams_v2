@extends('admin.includes.layout')

@section('content')
<div class="container"></br>
    <div class="row col-md-11 offset-1 custyle">
    <table class="table table-striped custab" id="myTable">
    <thead>
    <a href="{{ url('admin/employee/create') }}" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new categories</a>
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>email</th>
            <th>created_at</th>
            <th>updated_at</th>
            <!-- <th class="text-center">Action</th> -->
        </tr>
    </thead>
    

    </table>
    </div>
</div>
@endsection
    
@section('js')
<script type="text/javascript">
$(document).ready( function () {
    $('#myTable').DataTable({

        processing: true,
        serverSide: true,
        ajax: '{!! route('admin.employee') !!}',

        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' }
        ]
    });


});
</script>
@endsection