<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/style.css') }}">

    <title>Data Covid19</title>
  </head>
  <body>
      <div class="container mt-2">
        <div class="row justify-content-center">
                <div class="select" style="width: 22rem;">
                    <form action="{{ url('/') }}" method="get">
                    <div class="form-group row">
                        <div class="col-sm-8">
                        <select class="form-control select2" name="country">
                            <option value="">-- Pilih Negara --</option>
                            @foreach ($country as $result )
                                <option value="{{ $result }}">{{ $result }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-primary btn-block">Cari Data</button>
                        </div>
                    </div>
                    </form>

                


                <div class="card" style="width: 22rem;">
                    <img src="{{ asset('images/logo.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-center font-weight-bold">DATA SEBARAN COVID-19</h5>
                      <!--p class="card-text text-justify">COVID-19 adalah penyakit menular yang disebabkan oleh jenis coronavirus yang baru ditemukan.
                        Virus baru dan penyakit yang disebabkannya ini tidak dikenal sebelum mulainya wabah di Wuhan, Tiongkok, bulan Desember 2019. 
                        COVID-19 ini sekarang menjadi sebuah pandemi yang terjadi di banyak negara di seluruh dunia.</!--p-->
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item text-center"><h4>{{ $list_data['country'] }}</h4></li>
                    </ul>
                    <div class="row ml-1 mr-1">
                      <div class="col mb-2 mt-2">
                        <div class="card text-white bg-info">
                          <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-viruses"></i>
                            </div>
                            <h5 class="card-title text-center">Terkonfirmasi</h5>
                            <h4 class="card-text font-weight-bold text-center">{{number_format($list_data['confirmed']) }}</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="card-group ml-3 mr-3 mb-2">
                        <div class="card">
                            <div class="card text-white bg-danger">
                                <div class="card-body">
                                  <h5 class="card-title text-center">Meninggal</h5>
                                  <h4 class="card-text text-center font-weight-bold">{{number_format($list_data['deaths']) }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card text-white bg-success">
                                <div class="card-body">
                                  <h5 class="card-title text-center">Sembuh</h5>
                                  <h4 class="card-text font-weight-bold text-center">{{number_format($list_data['recovered']) }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer text-center">
                        <h6>Pembaruan Terakhir <br> <b>{{ $list_data['lastUpdate'] }}</b>
                        <br></h6>
                        <p>&copy; 2020 salnuraqidah</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    

    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>

  </body>
</html>

