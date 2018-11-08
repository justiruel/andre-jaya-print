<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>CV ANDRE JAYA</title>
  
    <link rel="stylesheet" href="{{asset('css/normalize.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/upload.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">


	
</head>

<body>
    <nav class="navbar  navbar-fixed-top">
        <div class="container">
            <ul class="nav navbar-nav" style="float:right">
                <li>
                    <p class="navbar-btn">
                    <a href="{{url('/retrieve_data_karyawan')}}"  class="btn" style="background-color:#007bff;font-family: arial;color:#ffffff;">Data Karyawan</a>
                    <a href="{{url('/run_signout')}}"  class="btn" style="background-color:#007bff;font-family: arial;color:#ffffff;">Sign Out!</a>
                    </p>
                </li>
            </ul>
        </div>
    </nav>

    <div style="margin-top: 100px">
        <img id="spinner" src="{{asset('spin.gif')}}"/>

        <h2>Upload File</h2>
        <p class="lead">Data karyawan <b>CV ANDRE JAYA</b></p>
        <!-- Upload  -->
        <form id="file-upload-form" class="uploader" name="myform" action="{{url('/run_upload')}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <input id="file-upload" type="file" name="fileUpload" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" />
          <label for="file-upload" id="file-drag">
            <div id="start">
              <i class="fa fa-download" aria-hidden="true"></i>
              <div>Untuk memilih file, tekan kotak ini</div>
              <span id="file-upload-btn" class="btn btn-primary">Pilih file</span>
            </div>
          </label>
        </form>
            
    </div>


  <script src='{{asset('js/jquery.min.js')}}'></script>

  <script>
		$(document).ready(function() {
      $('#spinner').hide();
			$('#file-upload-form').change(function() {
        $('#spinner').show();
				document.forms["myform"].submit();
			});
		});
	</script>




</body>

</html>
