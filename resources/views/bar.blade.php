<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>



    <div class="container pt-4 mt-4">
        <div class="row pl-4 ml-4 mb-1">
            <div class="h5">Format CODE_39</div>
        </div>
        <div class="row pl-4 ml-4 mb-4">
            <div class="h5">Type TEXT</div>
        </div> 
        <div class="row">
            <div class="col-md-2">
                
            </div>
            <div class="col-md-4">

                <?php

                use \Milon\Barcode\DNS1D;

                $d = new DNS1D();
                $d->setStorPath(__DIR__ . "/cache/");

                echo $d->getBarcodeHTML("101", "C39");
                echo "</br>101 </br> </br>";
                echo "</br> ";
                echo $d->getBarcodeHTML("102", "C39");
                echo "</br>102 </br> </br>";
                echo "</br> ";
                echo $d->getBarcodeHTML("103", "C39");
                echo "</br>103 </br> </br>";
                echo "</br> ";
                echo $d->getBarcodeHTML("104", "C39");
                echo "</br>104 </br> </br>";
                echo "</br> ";
                echo $d->getBarcodeHTML("105", "C39");
                echo "</br>105 </br> </br>";
                echo "</br> ";
                ?>

            </div>


            <div class="col-md-4 ">
                <?php


                $d = new DNS1D();
                $d->setStorPath(__DIR__ . "/cache/");

                echo $d->getBarcodeHTML("106", "C39");
                echo "</br>106 </br> </br>";
                echo "</br> ";
                echo $d->getBarcodeHTML("107", "C39");
                echo "</br>107 </br> </br>";
                echo "</br> ";
                echo $d->getBarcodeHTML("108", "C39");
                echo "</br>108 </br> </br>";
                echo "</br> ";
                echo $d->getBarcodeHTML("109", "C39");
                echo "</br>109 </br> </br>";
                echo "</br> ";
                echo $d->getBarcodeHTML("110", "C39");
                echo "</br>110 </br> </br>";
                echo "</br> ";
                ?>

            </div>

            <div class="col-md-2">
                
            </div>
        </div>
    </div>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>