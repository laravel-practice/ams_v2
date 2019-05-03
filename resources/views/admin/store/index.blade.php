@extends('admin.includes.layout')

@section('content')
<div class="container"><br>
    <div class="row col-md-11 offset-1 custyle">
    <a href="{{ url('admin/store/create') }}" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new categories</a>
    <table class="table table-striped custab">
    <thead>
    
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>

    @if ($store_data['rows']->isNotEmpty())
    @foreach($store_data['rows'] as $sn => $row)
        <tr>
            <td>{{ ++$sn }}</td>
            <td>{{ $row->title }}</td>
            <td>{!! ($row->description) !!}</td>
            <td class="text-center"><a class="btn btn-info btn-xs" href="{{ url ('admin/store/edit',$row->id) }}"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="{{ url ('admin/store/delete',$row->id) }}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
        </tr>
    @endforeach
    @else
        <tr>
            <td>no data</td>
        </tr>
    @endif
                   
    </tbody>
</table>
    </div>
</div>
@endsection


@section('js')

    
@endsection