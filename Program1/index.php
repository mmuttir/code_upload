<?php 


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
</style>

<body>
    <div class="container">
        <form action="makepdf.php" method="post">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h1>Generate Pay Slip Form</h1>
                    <p>Enter data of employee</p>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="name" placeholder="Name" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="surname" placeholder="Surname" class="form-control">
                        </div>
                    </div>
                    <div class="mb-2 mt-2">
                        <input type="number" name="id" placeholder="ID" class="form-control">
                    </div>
                    <div class="mb-2">
                        <input type="text" name="phone" placeholder="Phone Number" class="form-control">
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <input type="number" name="dwork" placeholder="Days Worked" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <input type="number" name="dsick" placeholder="Days Sick" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <input type="number" name="dleave" placeholder="Days Leave" class="form-control">
                        </div>
                    </div>
                    <div class="mb-2">
                        <input type="text" name="pay_per_hour" placeholder="Payment per hour(USD)" class="form-control">
                    </div>
                    <div class="mb-2">
                        <input type="submit" name="submit" value="Generate Pay Slip" class="btn btn-primary w-100">
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>