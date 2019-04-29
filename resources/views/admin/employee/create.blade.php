@extends('admin.includes.layout')

@section('content')
<div class="row">
<div class="col-lg-12">
    <div class="ibox ">
        <div class="ibox-title">
            <h5>Add Employee</h5>
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
        <form method="POST" action="{{ url('admin/employee/store') }}" accept-charset="UTF-8" class="form" enctype="multipart/form-data" id="employee-post">
			@csrf
            <div class="form-group  row">
                <label for="employee_id" class="col-sm-1">Emp ID:</label>
                <div class="col-sm-6">
                   <input class="form-control " id="employee_id" name="employee_id" type="number">
                                                </div>
            </div>
            <div class="form-group  row">
                <label for="name" class="col-sm-1">Name:</label>
                <div class="col-sm-6">
                    <input class="form-control " id="name" name="name" type="text">
                                                </div>
            </div>
            <div class="form-group  row">
                <label for="address" class="col-sm-1">Address:</label>
                <div class="col-sm-6">
                    <input class="form-control " id="address" name="address" type="text">
                                                </div>
            </div>
            <div class="form-group  row">
                <label for="email" class="col-sm-1">Email:</label>
                <div class="col-sm-6">
                    <input class="form-control " id="email" name="email" type="email">
                                                </div>
            </div>
            <div class="form-group  row">
                <label for="contact" class="col-sm-1">Contact:</label>
                <div class="col-sm-6">
                    <input class="form-control " id="contact" name="contact" type="number">
                                                </div>
            </div>
            <div class="form-group  row"><label class="col-sm-1 col-form-label">Gender</label>
                <div class="col-sm-6">
                    <label><input checked="checked" name="gender" type="radio" value="male">
                        <i></i>Male</label>
                    <label><input name="gender" type="radio" value="female">
                        <i></i>Female</label>
                </div>
            </div>

            <div class="form-group  row">
                <label for="designation" class="col-sm-1">Designation:</label>
                <div class="col-sm-6">
                    <input class="form-control " id="designation" name="designation" type="text">
                                                </div>
            </div>

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