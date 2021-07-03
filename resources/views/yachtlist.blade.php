<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        ul.item {
            list-style-type: none;
        }

        .address {
            font-weight: 700;
            color: #4e595c;
        }

        .price {
            font-weight: bold;
            color: #ef6024;
        }

        .card-wrraper {
            border: 1px solid #ccc;
        }
        .jumbotron {
            margin-bottom: 0px!important;
            Padding: 20px 0px 20px 0px;
        }
    </style>
</head>

<body>
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Album Yacht</h1>
            </p>
        </div>
    </section>
    <!-- {{ print_r($data['results'])}} -->
    
    <div class="list py-5 bg-light">
        <div class="container">
            <div class="row">
                @foreach($data['results'] as $items)
                <div class="col-md-4 card-wrraper">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src=" {{ $items['Images']['0']['Uri'] }} " alt="" srcset="">
                    </div>
                    <ul class="item">
                        <li>
                            <h5>{{ $items['CompanyName'] }}</h5>
                        </li>
                        <li class="address">
                            <h6>{{ $items['Office']['PostalAddress'] }}</h6>
                        </li>
                        <li class="address">
                            <p>{{ $items['DocumentID'] }}</p>
                        </li>
                        <li class="price">
                            <p>{{ $items['Price'] }}</p>
                        </li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Call</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Email</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
                @endforeach
                <!-- <div class="col-md-4 card-wrraper">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src=" {{ $data['results']['1']['Images']['0']['Uri'] }} " alt="" srcset="">
                    </div>
                    <ul class="item">
                        <li>
                            <h5>{{ $data['results']['1']['CompanyName'] }}</h5>
                        </li>
                        <li class="address">
                            <h6>{{ $data['results']['1']['Office']['PostalAddress'] }}</h6>
                        </li>
                        <li class="address">
                            <p>{{ $data['results']['1']['DocumentID'] }}</p>
                        </li>
                        <li class="price">
                            <p>{{ $data['results']['1']['Price'] }}</p>
                        </li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Call</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Email</button>
                        </div>
                        <small class="text-muted">5 mins</small>
                    </div>
                </div>
                <div class="col-md-4 card-wrraper">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src=" {{ $data['results']['2']['Images']['0']['Uri'] }} " alt="" srcset="">
                    </div>
                    <ul class="item">
                        <li>
                            <h5>{{ $data['results']['2']['CompanyName'] }}</h5>
                        </li>
                        <li class="address">
                            <h6>{{ $data['results']['2']['Office']['PostalAddress'] }}</h6>
                        </li>
                        <li class="address">
                            <p>{{ $data['results']['2']['DocumentID'] }}</p>
                        </li>
                        <li class="price">
                            <p>{{ $data['results']['2']['Price'] }}</p>
                        </li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Call</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Email</button>
                        </div>
                        <small class="text-muted">1 mins</small>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>