<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CV Andre Jaya</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/paper.css')}}">

    <style>
      body   { font-family: serif }
      @media print {
        .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
              float: left;
        }
        .col-sm-12 {
              width: 100%;
        }
        .col-sm-11 {
              width: 91.66666667%;
        }
        .col-sm-10 {
              width: 83.33333333%;
        }
        .col-sm-9 {
              width: 75%;
        }
        .col-sm-8 {
              width: 66.66666667%;
        }
        .col-sm-7 {
              width: 58.33333333%;
        }
        .col-sm-6 {
              width: 50%;
        }
        .col-sm-5 {
              width: 41.66666667%;
        }
        .col-sm-4 {
              width: 33.33333333%;
        }
        .col-sm-3 {
              width: 25%;
        }
        .col-sm-2 {
              width: 16.66666667%;
        }
        .col-sm-1 {
              width: 8.33333333%;
        }
      }

      /* untuk membuat tinggi page tidak dibatasi */
      body.letter .sheet{
        width:216mm;
        height:auto;
      }

      a:visited { 
        
      }
    </style>
  </head>

  <body  class="letter" style="margin-top:7mm">
    <nav class="navbar  navbar-fixed-top" style="background-color:#007bff;">
        <div class="container">
            <ul class="nav navbar-nav" style="float:right">
                <li>
                    <p class="navbar-btn">
                    <a href="{{url('/upload')}}"  class="btn" style="background-color: #ffffff;font-family: arial;color:#000000; ">UPLOAD</a>
                    <button type="button" onclick="window.print();" class="btn" style="background-color: #ffffff;font-family: arial">PRINT</button> 
                  </p>
                </li>
            </ul>
        </div>
    </nav>
    <section class="sheet padding-10mm">
      <div class="row">
      @foreach($data as $dt) 
      @if ($dt['nama'] != "")
      <div class="col-sm-4" style="padding:5px;page-break-inside:avoid; page-break-after:auto">
        <table style="border: 2px solid black;width:100%">
          <tr>
            <th colspan="2" style="width:40%;border-bottom-style: solid;"><center>CV. ANDRE JAYA</center></th>
          </tr>
          <tr>
            <td style="width:40%">&nbsp;Tanggal</td><td>{{$dt['tanggal']}}</td>
          </tr>
          <tr>
            <td style="width:40%">&nbsp;Nama</td><td>{{$dt['nama']}}</td>
          </tr>
          <tr>
            <td style="width:40%">&nbsp;NIK</td><td>{{$dt['nik']}}</td>
          </tr>
          <tr>
            <td style="width:40%">&nbsp;Gaji Kotor</td><td style="float:right;">{{$dt['gaji_kotor']}}&nbsp;</td>
          </tr>
          <tr>
            <td style="width:40%">&nbsp;Lembur</td><td style="float:right;">{{$dt['lembur']}}&nbsp;</td>
          </tr>
          <tr>
            <td style="width:40%">&nbsp;Tabungan</td><td style="float:right;">{{$dt['tabungan']}}&nbsp;</td>
          </tr>
          <tr>
            <td style="width:40%">&nbsp;BPJS</td><td style="float:right;">{{$dt['bpjs']}}&nbsp;</td>
          </tr>
          <tr>
            <td style="width:40%">&nbsp;Ang. Seragam</td><td style="float:right;">{{$dt['angsuran_seragam']}}&nbsp;</td>
          </tr>
          <tr style="border-top-style: solid;">
            <td style="width:40%">&nbsp;Total</td><td style="float:right;">{{$dt['total']}}&nbsp;</td>
          </tr>
        </table>
      </div>
      @endif
      @endforeach  
    </section>
  </div>
  </body>
</html>
