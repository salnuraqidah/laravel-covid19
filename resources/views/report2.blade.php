<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <div class="container mt-2">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <div class="card" style="width: 24rem;">
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
                            <h5 class="card-title text-center">Terkonfirmasi</h5>
                            <h4 class="card-text font-weight-bold text-center">{{ $list_data['confirmed'] }}</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row ml-1 mr-1">
                      <div class="col-sm-6 mb-2">
                        <div class="card text-white bg-success">
                          <div class="card-body">
                            <h5 class="card-title text-center">Sembuh</h5>
                            <h4 class="card-text font-weight-bold text-center">{{ $list_data['recovered'] }}</h4>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="card text-white bg-danger">
                          <div class="card-body">
                            <h5 class="card-title text-center">Meninggal</h5>
                            <h4 class="card-text text-center font-weight-bold">{{ $list_data['deaths'] }}</h4>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="card-footer text-center">
                        <h6>Pembaruan Terakhir <br> <b>{{ $list_data['lastUpdate'] }}</b></h6>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>

