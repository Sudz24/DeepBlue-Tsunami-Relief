<!doctype html>
<html lang="en">
<?php 
    session_start();
 ?>
<head>
    <title>DeepBlue</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary navbar-custom">
        <div class="container">
            
            <a class="navbar-brand" href="#"> <b><u>DeepBlue</u></b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="deepblue.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Donation
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                             <a class="dropdown-item" href="paytm.html">Direct Donation</a>
                            <a class="dropdown-item" href="barter.php">Help Us Buy</a>
                            <a class="dropdown-item" href="collectdonate.php">Request Collection</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ngo_map.php">NGO Service</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary navbar-custom">
        <div class="container">
            <a class="navbar-brand mx-auto" href="#">DONATE</a>
        </div>
    </nav>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="jumbotron text-dark">
                    <h1 class="display-4">Select the Items</h1>
                    <table id="table1" class="table table-hover text-dark">
                        <thead>
                            <th>Commodity</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </thead>
                        <tbody id="table1body">

                        </tbody>

                        <tfoot>
                            <h3>Total Amount: <span id="totalAmount"></span></h3>
                        </tfoot>
                    </table>
                    <a class="btn btn-success btn-md" href="action_barter.php" role="button">Submit</a>

                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.4/jquery.backstretch.min.js"
        integrity="sha256-V52dl3OFjoY+fYAkifhLJ7f1V7mZAKPGCQoWzoQxrEU=" crossorigin="anonymous"></script>
    <script src="app.js"></script>
    <script>
        $.backstretch("bg1.jpg");
    </script>
</body>
</html>

