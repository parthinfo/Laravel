<html>
<head>
  <title>Home Page</title>
<!-- remove in favor of twitter bootstrap <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
     and add following -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
 <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- remove in favor of twitter bootstrap
  <style>
    body {
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100%;
      color: #B0BEC5;
      display: table;
      font-weight: 100;
      font-family: 'Lato';
    }
    .container {
      text-align: center;
      display: table-cell;
      vertical-align: middle;
    }
    .content {
      text-align: center;
      display: inline-block;
    }
    .title {
      font-size: 96px;
      margin-bottom: 40px;
    }
    .quote {
      font-size: 24px;
    }
  </style>
-->

</head>
<body>
  @extends('master')
  @section('title', 'Home')
  @section('content')
    <div class="container">
      <div class="content">
        <div class="title">Home Page</div>
        <div class="quote">Our Home page!</div>
      </div>
  </div>
  @endsection
</body>
</html>
