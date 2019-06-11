@extends('admin.includes.layout')

@section('content')
<div class="container"></br>
    <div class="row col-md-11 offset-1 custyle">
    <table class="table table-striped custab" id="myTable">
    <thead>
    <a href="{{ url('admin/employee/create') }}" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new categories</a>
        <tr>
            <th>ID</th>
            <th>employee_id</th>
            <th>name</th>
            <th>address</th>
            <th>email</th>
            <th>contact</th>
            <th>gender</th>
            <th>designation</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    {{-- @dd($data,$vehicles) --}}
    @if ($data['rows']->count() >0)
        @foreach($data['rows'] as $sn => $row)
            <tr>
                <td>{{ ++$sn }}</td>
                <td>{{ $row->employee_id }}</td>
                <td>{{ $row->name }}</td>
                <td>{{ $row->address }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->contact }}</td>
                <td>{{ $row->gender }}</td>
                <td>{{ $row->designation }}</td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="{{ route ('admin.employee.edit',$row->id) }}"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="{{ route ('admin.employee.delete',$row->id) }}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
            </tr>
        @endforeach
    @else
        <tr>
            <td>no data</td>
        </tr>
    @endif

    </table>
    </div>
</div>
@endsection
    
@section('js')
<script type="text/javascript">
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
@endsection