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
<body>
<br>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
            <div class="container">
                <h4 class="text-light">IPT Midterm Project </h4>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarAltMarkup" aria-controls="navbarAltMarkup">
                    <span class="navbar-toggle-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-link " href="<?= url('/') ?>">Home</a>
                        <a class="nav-link" href="<?= url('/users') ?>">Users</a>
                        <a class="nav-link active" href="<?= url('/accounts') ?>">Accounts <span class="sr-only">(current)</span></a>
                    </div>
                </div>
            </div>
        </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
            <br>
                <h1>Accounts Table</h1>
                    <table class="table table-bordered bg-light">
                        <thead class="bg-primary">
                            <tr>
                                <th>Account #</th>
                                <th>Account Name</th>
                                <th>Initial InvestMent</th>
                                <th>Date Started</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($accounts as $a): ?>
                                <tr>
                                    <td><?= $a->user_id ?></td>
                                    <td><?= $a->acc_name ?></td>
                                    <td><?= $a->init_invest ?></td>
                                    <td><?= $a->start_date ?></td>
                                </tr>
                            <?php endforeach; ?>    
                        </tbody>
                    </table>

            </div>
        </div>
    </div>

</body>
</html>