<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Scrape Lesson</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" />
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
  <style>
    .btn-wrap {
      margin: 0 auto;
      padding-top: 300px;
      text-align: center;
    }

    .col-md-4 {
      padding: 50px 0;
    }

    .face-img {
      width: 300px;
      height: 300px;
    }
  </style>
</head>
<body>
  <div class="container">
    @yield('content')
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
