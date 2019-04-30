@extends('admin.includes.layout')

@section('content')
<div class="container"></br>
    <div class="row col-md-11 offset-1 custyle">
    <table class="table table-striped custab">
    <thead>
    <a href="{{ url('admin/post/create') }}" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new categories</a>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    {{-- @dd($data,$vehicles) --}}
    @if ($data['rows']->count() >0)
        @foreach($data['rows'] as $sn => $row)
            <tr>
                <td>{{ ++$sn }}</td>
                <td>{{ $row->title }}</td>
                <td>{{ $row->description }}</td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="{{ url ('admin/post/edit',$row->id) }}"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="{{ url ('admin/post/delete/'.$row->id) }}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
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

<!------ Include the above in your HEAD tag ---------->
@endsection