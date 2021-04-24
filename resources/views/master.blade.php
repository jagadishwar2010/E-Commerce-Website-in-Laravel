<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Commerce Website</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
{{view('header')}}
@yield('content')
{{view('footer')}}
</body>
<style>
    .custom-login {
        height: 550px;
        padding: 100px;
    }
    .slider-img {
        height: 300px !important;
        margin-left: 8%;
    }
    .custom-product {
        height: 600px;
    }
    .slider-text {
        background-color: #ffffff00;
        color: #1a202c;
        margin-left: 15%;
        /*width: 15%;*/
    }
    .trending-image {
        height: 100px;
        display: block;
        margin: auto;
    }
    .trending-items {
        float: left;
        width: 20%;
        margin-right: 5%;
    }
    .trending-wrapper {
        margin: 30px;
    }
    .container {
        width: 100%;
    }
    .detail-img {
        height: 200px;
        margin-left: 20%;
        margin-top: 5%;
    }
    .search-box {
        width: 500px !important;
    }
    .searched-image {
        height: 200px;
        margin-left: 20%;
        margin-top: 5%;
    }
</style>
</html>
