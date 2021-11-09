
<!DOCTYPE html>
<html lang="en">

<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Tungalag</title>
    <!-- Favicon icon -->
    <link rel="icon" type="{{asset('admin')}}/image/png" sizes="16x16" href="{{asset('admin')}}/images/favicon.png">
	<link rel="stylesheet" href="{{asset('admin')}}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="{{asset('admin')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('admin')}}/vendor/datatables/css/jquery.dataTables.min.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/<version>/classic/ckeditor.js"></script>
    <style>
      .tox-notifications-container {display: none !important;}
  </style>
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
       
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
        @include('admin.inc.header')
        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('admin.inc.leftMenu')
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
       @yield('mainContent')
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Coder</a> 2020</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('admin')}}/vendor/global/global.min.js"></script>
	<script src="{{asset('admin')}}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="{{asset('admin')}}/js/custom.min.js"></script>
		
    <!-- Chart Morris plugin files -->
    <script src="{{asset('admin')}}/vendor/raphael/raphael.min.js"></script>
    <script src="{{asset('admin')}}/vendor/morris/morris.min.js"></script>
		
    <script src="{{asset('admin')}}/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('admin')}}/js/plugins-init/datatables.init.js"></script>
	<!-- Chart piety plugin files -->
    <script src="{{asset('admin')}}/vendor/peity/jquery.peity.min.js"></script>
	
		<!-- Demo scripts -->
    <script src="{{asset('admin')}}/js/dashboard/dashboard-2.js"></script>
	
	<!-- Svganimation scripts -->
    <script src="{{asset('admin')}}/vendor/svganimation/vivus.min.js"></script>
    <script src="{{asset('admin')}}/vendor/svganimation/svg.animation.js"></script>
    <script src="{{asset('admin')}}/js/styleSwitcher.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script>
                $(document).ready(function () {
                $('#sub_category_name').on('change', function () {
                let id = $(this).val();
                $('#sub_category').empty();
                $('#sub_category').append(`<option value="0" disabled selected>Processing...</option>`);
                $.ajax({
                type: 'GET',
                url: 'subcat/' + id,
                success: function (response) {
                var response = JSON.parse(response);
                console.log(response);   
                $('#sub_category').empty();
                $('#sub_category').append(`<option value="0" disabled selected>Select Sub Category*</option>`);
                response.forEach(element => {
                    $('#sub_category').append(`<option value="${element['id']}">${element['subcatname']}</option>`);
                    });
                }
            });
        });
    });
    </script>

<script>
                $(document).ready(function () {
                $('#sub_category').on('change', function () {
                let id = $(this).val();
                $('#prime_cat').empty();
                $('#prime_cat').append(`<option value="0" disabled selected>Processing...</option>`);
                $.ajax({
                type: 'GET',
                url: 'primecat/' + id,
                success: function (response) {
                var response = JSON.parse(response);
                console.log(response);   
                $('#prime_cat').empty();
                $('#prime_cat').append(`<option value="0" disabled selected>Select Sub Category*</option>`);
                response.forEach(element => {
                    $('#prime_cat').append(`<option value="${element['id']}">${element['gencname']}</option>`);
                    });
                }
            });
        });
    });
    </script>

</body>
</html>