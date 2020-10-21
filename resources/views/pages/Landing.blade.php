<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Midterm Project</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<style>
    body{
        background-color:grey;
    }
</style>
<br>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card " style="margin-top: 30px;">
                    <div class="card-header ">
                        <h4 class="text-center"> Main Menu</h4>
                    </div>
                    <div class="card-body">
                        <a href="/" class="btn btn-info btn-block">Home</a>
                        <a href="<?= url('/users') ?>" class="btn btn-info btn-block">Users</a>
                        <a href="<?= url('/accounts') ?>" class="btn btn-info btn-block">Accounts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>