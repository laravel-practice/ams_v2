@extends('admin.includes.layout')

@section('content')
<div class="row">
<div class="col-lg-12">
    <div class="ibox ">
        <div class="ibox-title">
            <h5>All form elements <small>With custom checbox and radion elements.</small></h5>
            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                </a>
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-wrench"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#" class="dropdown-item">Config option 1</a>
                    </li>
                    <li><a href="#" class="dropdown-item">Config option 2</a>
                    </li>
                </ul>
                <a class="close-link">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>

        <div class="ibox-content">
            <form action=" {{ url('admin/store/store') }} " method="post">
                @csrf
                <div class="form-group row">
                    <label class="col-sm-1 col-form-label">Title</label>
                    <div class="col-sm-6">
                        <input type="text" name="title" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-1 col-form-label">Description</label>
                    <div class="col-sm-6">
                        <textarea class="form-control textarea" rows="5"  name="description"></textarea>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group row">
                    <div class="col-sm-4 col-sm-offset-2">
                        <button class="btn btn-white btn-sm" type="reset">Cancel</button>
                        <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
                    </div>
                </div>
                

                
            </form>
        </div>
    </div>
</div>
</div>
@endsection


@section('js')

@endsection