<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Social</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <form action="{{route('login')}}" method="POST" autocomplete="off">
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" placeholder="Enter email" id="email">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <div class="form-group">
            <a href="#" class="btn btn-primary">
                <i class="fab fa-facebook fa-fw"></i>
            </a>
            <a href="#" class="btn btn-info">
                <i class="fab fa-twitter fa-fw"></i>
            </a>
            <a href="#" class="btn btn-danger">
                <i class="fab fa-google fa-fw"></i>
            </a>
            <a href="#" class="btn btn-success">
                <i class="fab fa-line"></i>
            </a>
        </div>
    </form>
</div>
</body>
</html>
