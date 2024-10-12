<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="jess.css">

        <!--<title>Laravel-Database</title>-->
        <link href="https://cdn.datatables.net/v/dt/dt-2.1.8/datatables.min.css" rel="stylesheet">
        <script src="https://cdn.datatables.net/v/dt/dt-2.1.8/datatables.min.js"></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
</head>

<div class="container container1 mb-5 fixed-top">
        <div class="row">
            <div class="col"></div>
            <div class="col-sm-auto">
                <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Master Data
                    </a>
                  
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="masterCategory.php">Master Event Category</a></li>
                      <li><a class="dropdown-item" href="masterOrg.php">Master Organizer</a></li>
                      <li><a class="dropdown-item" href="masterEvent.php">Master Event</a></li>
                    </ul>
                  </div>
            </div>
            <div class="col-sm-auto">
                <a href="base.php">Event</a>
            </div>
            <div class="col"></div>
        </div>

        <div class="row">
            <hr style="width: 100%; border: 1px solid black;">

        </div>
    </div>

    <div class="container container2 mt-5">
        <div class="row">
            <div class="col">
                <span style="text-align: left;">Event in Surabaya</span>
            </div>
        </div>
    </div>



    
</body>
</html>