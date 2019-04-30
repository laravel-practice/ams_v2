<!-- Mainly scripts -->
    <script src=" {{ asset ('assets/admin/js/jquery-3.1.1.min.js') }}"></script>
    <script src=" {{ asset ('assets/admin/js/popper.min.js') }}"></script>
    <script src=" {{ asset ('assets/admin/js/bootstrap.js') }}"></script>
    <script src=" {{ asset ('assets/admin/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src=" {{ asset ('assets/admin/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <!-- laravel CKedit package js file -->
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
        // $('textarea').ckeditor();
        $('.textarea').ckeditor(); // if class is prefered.
    </script>

	@yield('js')
</body>
</html>
