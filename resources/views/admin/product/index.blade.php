@extends('admin.includes.layout')

@section('content')
<div class="container"><br>
    <div class="row col-md-11 offset-1 custyle">
    <a href="{{ url('admin/product/create') }}" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new categories</a>
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

    @if ($data['rows']->isNotEmpty())
    @foreach($data['rows'] as $sn => $row)
        <tr>
            <td>{{ ++$sn }}</td>
            <td>{{ $row->title }}</td>
            <!-- <td>{!! substr(strip_tags($row->description),0 ,30) !!}</td> -->

            <td>{!! ($row->description) !!}</td>
            <td class="text-center"><a class="btn btn-info btn-xs" href="{{ url ('admin/product/edit',$row->id) }}"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="{{ url ('admin/product/delete/'.$row->id) }}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
        </tr>
    @endforeach
    @else
        <tr>
            <td>no data</td>
        </tr>
    @endif

    </tbody>
</table>


<table class="table table-striped custab" style="margin-top: 40px;">
    <thead>
    
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
    @forelse ($data['rows'] as $sn => $row)
        <tr>
            <td>{{ ++$sn }}</td>
            <td>{{ $row->title }}</td>
            <!-- <td>{!! substr(strip_tags($row->description),0 ,30) !!}</td> -->

            <td>{!! ($row->description) !!}</td>
            <td class="text-center"><a class="btn btn-info btn-xs" href="{{ url ('admin/product/edit',$row->id) }}"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="{{ url ('admin/product/delete/'.$row->id) }}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
        </tr>
    @empty
        <tr>
            <td>no data</td>
        </tr>

    @endforelse

    </tbody>
</table>
    </div>
</div>
@endsection


@section('js')

    <!-- Flot -->
    <script src=" {{ asset ('assets/admin/js/plugins/flot/jquery.flot.js') }}"></script>
    <script src=" {{ asset ('assets/admin/js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
    <script src=" {{ asset ('assets/admin/js/plugins/flot/jquery.flot.spline.js') }}"></script>
    <script src=" {{ asset ('assets/admin/js/plugins/flot/jquery.flot.resize.js') }}"></script>
    <script src=" {{ asset ('assets/admin/js/plugins/flot/jquery.flot.pie.js') }}"></script>

    <!-- Peity -->
    <script src=" {{ asset ('assets/admin/js/plugins/peity/jquery.peity.min.js') }}"></script>
    <script src=" {{ asset ('assets/admin/js/demo/peity-demo.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script src=" {{ asset ('assets/admin/js/inspinia.js') }}"></script>
    <script src=" {{ asset ('assets/admin/js/plugins/pace/pace.min.js') }}"></script>

    <!-- jQuery UI -->
    <script src=" {{ asset ('assets/admin/js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

    <!-- GITTER -->
    <script src=" {{ asset ('assets/admin/js/plugins/gritter/jquery.gritter.min.js') }}"></script>

    <!-- Sparkline -->
    <script src=" {{ asset ('assets/admin/js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Sparkline demo data  -->
    <script src=" {{ asset ('assets/admin/js/demo/sparkline-demo.js') }}"></script>

    <!-- ChartJS-->
    <script src=" {{ asset ('assets/admin/js/plugins/chartJs/Chart.min.js') }}"></script>

    <!-- Toastr -->
    <script src=" {{ asset ('assets/admin/js/plugins/toastr/toastr.min.js') }}"></script>
@endsection