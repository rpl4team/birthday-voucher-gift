<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Birthday</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- CSS untuk selectpicker -->
	<link rel="stylesheet" href="dist/css/selectpicker/bootstrap-select.css">

	<!-- CSS untuk bootstrap 4 -->
	<link rel="stylesheet" href="dist/css/bootstrap/bootstrap.css">
	<link rel="stylesheet" href="dist/css/ownCustom/header-table-fixed.css">

	<!-- CSS untuk font-awesome -->
	<link rel="stylesheet" href="dist/fonts/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="dist/fonts/font-awesome/css/font-awesome.min.css">

	<!-- CSS untuk autocomplete -->
	<link rel="stylesheet" href="dist/css/autocomplete/jquery-ui.css">

	<!-- CSS untuk datepicker bootstrap 4 (tempusdominus) -->
	<link rel="stylesheet" href="dist/css/datetimepicker/tempusdominus/tempusdominus-bootstrap-4.min.css" />

	<!-- CSS untuk fontawesome-5 -->
	<link rel="stylesheet" href="dist/fonts/css/all.min.css">

	<!-- CSS dataTables -->
	<link rel="stylesheet" href="dist/css/dataTables/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="dist/css/dataTables/fixedHeader.dataTables.min.css">
	<link rel="stylesheet" href="dist/css/dataTables/select.bootstrap4.min.css">
    <link rel="stylesheet" href="dist/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="dist/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/login/signin.css">
    <link rel="stylesheet" href="dist/css/ownCustom/header-table-fixed.css">
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <div class="row">
     
     
      <div class="col-md-12">
        <!--  -->
        <!-- <form method="POST" action="pages/action/proses-login.php" class="form-signin"> -->
        	<h1 class="h3 mb-12 font-weight-normal"><a href="#tambahModal" data-toggle='modal' class="btn btn-lg btn-info btn-block">CLICK ME</a></h1>
        <!-- </form> -->
        <!--  -->
      </div>
    </div>



  	<!-- JS untuk selectpicker penempatan harus di paling atas-->
	<script src="dist/js/jquery-3.2.1/jquery.min.js"></script>

	<!-- jquery.min.js digunakan juga untuk datetimepicker -->
	<script src="dist/js/autocomplete/jquery.min.js"></script> 
	<script src="dist/js/autocomplete/jquery-ui.js"></script>

	<!-- JS untuk selectpicker -->
	<script src="dist/js/selectpicker/bootstrap.bundle.min.js"></script>
	<script src="dist/js/selectpicker/bootstrap-select.js"></script>

	<!-- JS untuk datepicker (tempusdominus)-->
	<script type="text/javascript" src="dist/js/datetimepicker/moment/moment.min.js"></script>
	<script type="text/javascript" src="dist/js/datetimepicker/tempusdominus/tempusdominus-bootstrap-4.min.js"></script>

	<!-- JS untuk dataTables -->
	<script type="text/javascript" src="dist/js/dataTables/bootstrap.min.js"></script>
	<script type="text/javascript" src="dist/js/dataTables/jquery.dataTables.min.js"></script>

	<!-- script untuk format datepicker HARUS DISIMPAN DI BAWAH script jquery-3.5.1/jquery.min.js -->
	<script type="text/javascript">
		// function untuk format tanggal dan waktu
	    $(function () {
	        $('#datetimepicker_datetime').datetimepicker();
	    });
		// function untuk format tanggal saja
		$(function () { 
			// di bikin looping karna akan ada banyak datetimepicker yg dibutuhkan dengan id yg berbeda
			for (var i = 1; i < 50; i++) {
				$('#datetimepicker_dateonly'+i).datetimepicker({
		            format: 'L'
		        });
			}
	        
	    });
	    // function untuk format waktu saja
	    $(function () {
	        $('#datetimepicker_timeonly').datetimepicker({
	            format: 'LT'
	        });
	    });
	    // function untuk format disable hari minggu
	    $(function () {
	        $('#datetimepicker_timeonly').datetimepicker({
	            daysOfWeekDisabled: [0, 6]
	        });
	    });
	    //function untuk format multidate
	    $(function () {
	        $('#datetimepicker_multidate').datetimepicker({
	            allowMultidate: true,
	            multidateSeparator: ','
	        });
	    });
	</script>
	<!-- script untuk format datepicker HARUS DISIMPAN DI BAWAH script jquery-3.5.1/jquery.min.js SELESAI-->

  <!--  footer -->
  <script src="dist/js/jquery-3-2-1/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="dist/js/bootstrap/bootstrap.js"></script>
  
  <!-- modal start -->
      <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <!-- fetched-data adalah data yg ada di detail_modals.php -->
        	<div class="modal-header">
        		<p align="center"><center><h3 class="modal-title text-info" id="exampleModalLabel" align="center"><b>Happy Birthday!</b></h3></center></p>
        	</div>
        	<div class="modal-body">
        		<a href="voucher.php"><img src="dist/images/img-new.jpg"></a>
        	</div>
        	<div class="modal-footer">
        		<div class="row">
        			<div class="col-md-12">
        				selamat mengulang tahun yang ke-22 
        				semoga selalu bahagia dan harus lebih bahagia!
        				jangan lagi ngerasa bukan apa-apa !
        				Jangan juga merasa Bukan siapa-siapa!
        				kamu sudah lebih dari hebat!
        				i'm proud of you !
        				<br><br>
        				tahun ini gaada hal yang  aku buat spesial maaf yaa ..
        				udah lama kamu pengen makan ini kan ayo kita makan sepuasnya yaa..
        				ini bukan hadiah hanya bentuk perayaan kecil yang bisa aku lakuin 

        			</div>
        		</div>
        	</div>
            <!-- fetched-data adalah data yg ada di detail_modals.php -->
          </div>
        </div>
      </div>
      <!-- modal end -->

  </body>
</html>


