<?php 
function submitted()
{
    return isset($_GET["submit"]);
}
if (submitted()) {
    $a = $_GET["valuea"];
    $b = $_GET["valueb"];
    $c = $_GET["valuec"];
    $disc = ($b*$b) - (4 * $a * $c);
    if($disc==0)
    {
        $x1 = strval(-$b/(2*$a));
        $x2 = strval(-$b/(2*$a));
        $mess = "Roots are real and equal";
    }
    elseif ($disc>0) {
        $x1 = strval((-$b+sqrt($disc))/(2*$a));
        $x2 = strval((-$b-sqrt($disc))/(2*$a));
        $mess = "Roots are real and distinct";
    }
    else {
        $x1 = strval(-$b/(2*$a)) . " + " . strval(sqrt(-$disc)) . "i";
        $x2 = strval(-$b/(2*$a)) . " - " . strval(sqrt(-$disc)) . "i";
        $mess = "Roots are imaginary and distinct";
    }
    global $mess;
    global $x1;
    global $x2;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Program</title>
</head>
<style>
html,
body,
.container {
    height: 100%;
}

body {
    background-image: url("bg.png");

}
</style>

<body>
    <div class="d-flex justify-content-center align-items-center h-100">
        <div class="d-block">
            <form action="index.php" method="get">
                <div class="m-3 d-flex justify-content-center align-items-center">
                    <input type="number" name="valuea" value="<?php echo (submitted())?$_GET["valuea"]:""; ?>">
                    <p class="m-2">x<sup>2</sup> + </p>
                    <input type="number" name="valueb" value="<?php echo (submitted())?$_GET["valueb"]:""; ?>">
                    <p class="m-2">x + </p>
                    <input type="number" name="valuec" value="<?php echo (submitted())?$_GET["valuec"]:""; ?>">
                </div>
                <div class="m-3 d-flex justify-content-center">
                    <input type="submit" name="submit" value="Calculate">
                </div>
            </form>
            <?php if(submitted()): ?>
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-warning" style="text-align:center;">X1 = <?php echo (submitted())?$x1:""; ?>
                    </h3>
                </div>
                <div class="col-md-6">
                    <h3 class="text-warning" style="text-align:center;">X2 = <?php echo (submitted())?$x2:""; ?>
                    </h3>
                </div>
            </div>
            <?php endif;?>
            <h2 class="text-danger" style="text-align:center;"><?php echo (submitted())?$mess:""; ?></h2>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>