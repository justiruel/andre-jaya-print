<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CV ANDRE JAYA</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
</head>
<body>
  <nav class="navbar  navbar-fixed-top">
    <div class="container">
      <ul class="nav navbar-nav" style="float:right">
        <li>
          <p class="navbar-btn">
          <a href="{{url('/upload')}}"  class="btn" style="background-color:#007bff;font-family: arial;color:#ffffff">Upload</a>
          <a href="{{url('/run_signout')}}"  class="btn" style="background-color:#007bff;font-family: arial;color:#ffffff;">Sign Out!</a>
          </p>
        </li>
      </ul>
    </div>
  </nav>
    <div style="margin-top: 100px;margin: 20mm">
      <button type="button"  class="btn" data-toggle="modal" data-target="#myModal" style="background-color: #28a745; font-family: arial;color:#ffffff;float:right;margin-bottom:2px">Tambah</button>
      {{-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> --}}
      <table class="table table-bordered">
        <thead style="background-color:#007bff;font-family: arial;color:#ffffff">
          <tr>
            <th scope="col">#</th>
            <th scope="col">No KTP</th>
            <th scope="col">Nama</th>
            <th scope="col">No. Telp</th>
            <th scope="col">Tanggal lahir</th>
            
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>99999999999999999999999</td></td>
            <td>narutonarutonarutonarutonarutonarutonarutonarutonarutonarutonarutonarutonarutonaruto</td>
            <td>999999999999999999999999999999999999999999999</td>
            <td>99 november 99999</td>
          </tr>
        </tbody>
      </table>

      <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">DATA KARYAWAN</h4>
                  </div>
              <div class="modal-body">
                  <form>
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">No Ktp</label>
                    <input type="email" class="form-control" name="ktp" placeholder="No Ktp">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Nama</label>
                    <input type="password" class="form-control" name="nama" placeholder="Nama">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">No telp</label>
                    <input type="email" class="form-control" name="telp" placeholder="No Telp">
                  </div>
                  <div class="form-group col-md-6">
                      <label for="inputPassword4">Tanggal Lahir</label>
                      <input type="password" class="form-control" name="tgl_lahir" placeholder="Tanggal lahir">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputCity">Alamat Rumah</label>
                    <input type="text" class="form-control" id="inputCity" placeholder="Alamat rumah">
                  </div>
                  <div class="form-group col-md-12">  
                    <label for="inputCity">Gender</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1">
                        <label class="form-check-label" for="gridRadios1">
                          L
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2" checked>
                        <label class="form-check-label" for="gridRadios2">
                          P
                        </label>
                      </div>
                  </div>
                    
                    <button  type="submit" class="btn btn-primary" style="float: right">Simpan</button>   
                  <button type="button" class="btn btn-default" style="visibility: hidden" data-dismiss="modal">Close</button>   
                </form>
              </div>
            </div>
          </div>
        </div>  
            
      {{-- <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog"  style="width: 80%">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Tambah Data karyawan</h4>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group col-md-6">
                  <label for="inputEmail4">No Ktp</label>
                  <input type="email" class="form-control" id="inputEmail4" placeholder="No Ktp">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Nama</label>
                  <input type="password" class="form-control" id="inputPassword4" placeholder="Nama">
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputEmail4">No telp</label>
                  <input type="email" class="form-control" id="inputEmail4" placeholder="No Telp">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Tanggal Lahir</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Tanggal lahir">
                </div>
                <div class="form-group col-md-12">
                  <label for="inputCity">Alamat Rumah</label>
                  <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-12">  
                  <label for="inputCity">Gender</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1">
                      <label class="form-check-label" for="gridRadios1">
                        L
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2" checked>
                      <label class="form-check-label" for="gridRadios2">
                        P
                      </label>
                    </div>
                </div>
                  <div class="form-group col-md-12">
                      <button  type="submit" class="btn btn-primary">Sign in</button>   
                  </div>
                {{-- <div class="modal-footer">
                    <button  type="submit" class="btn btn-primary">Sign in</button>
                  </div> 
              </form>
            </div>
          </div>
        </div>
      </div> --}}
    </div>
</body>
</html>
