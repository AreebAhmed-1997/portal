<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
function showfilter() {
  document.getElementById("demo").style.display = 'block';
}
</script>
</head>
<body>
    
    <button onclick="showfilter()" class="btn btn-success  mb-2 ml-2 " style="text-align: center; font-size:3vh; width :10%;">FILTERS</button>

    <div class="container float-none" id="demo" style="display: none;background-image:url(spar4-.jpg); background-repeat: no-repeat; background-size: cover;">
        <div class="jumbotron" style="background: rgba( 255, 255, 255, 0.05 );
        box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
        backdrop-filter: blur( 9.0px );
        -webkit-backdrop-filter: blur( 9.0px );
        border-radius: 10px;
        border: 1px solid rgba( 255, 255, 255, 0.18 );">
    <div class="row">
        <div class="col-md-12 col-sm-12 w-100 text-center ">
    
       
       
        <a class="text-body pl-2 pr-2" style="text-decoration: underline,    ;font-size:3vh;" href="missing.php">Search for missing person</a>
        <a class="text-body pl-2 pr-2" style="text-decoration: underline,    ;font-size:3vh;"  href="police.php">Search  in police station</a>
        <a class="text-body pl-2 pr-2" style="text-decoration: underline,   ;font-size:3vh;"  href="accident.php">Search in hospital </a>
        <a class="text-body pl-2 pr-2" style="text-decoration: underline,    ;font-size:3vh;"  href="other.php">Others</a>
            </div>
    </div>
    </div>
    <br>
    </div>
    </div>
   
</body>
</html>