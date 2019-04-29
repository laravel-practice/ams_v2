@include('admin.includes.head')
<div id="wrapper">
@include('admin.includes.sidenavbar')
   

    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        @include('admin.includes.header')
        </div>

        @yield('content')
        
        @include('admin.includes.footer') 
    </div><!-- /.page-wrapper -->     

       
</div><!-- /.wrapper -->

@include('admin.includes.script') 
