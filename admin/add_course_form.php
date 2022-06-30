<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles.css">
    <script src="https://kit.fontawesome.com/e9c5aeacfd.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        require "admin_header_from.php";
    ?>
    <section  style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Settings</li>
                    </ol>
                    </nav>
                </div>
            </div>

            <div class="card text-center">
                <div class="card-header">
                    Edit
                </div>
                <div class="card-body">
                    <div style="overflow-x:auto;">
                        <table class="table table-hover">
                        <tr>
                            <td scope="col">#</td>
                            <td scope="col">Course Title</td>
                            <td scope="col">Edit</td>
                            <td scope="col">Save</td>
                            <td scope="col">Delete</td>
                        </tr>
                        <?php
                            $count=0;
                            while($count<10){
                        ?>
                            <tr>
                                <th scope="row"><?php echo $count+1; ?></th>
                                <td><input disabled type="text" placeholder="http://youtube.come/myvideo/responsive%web%develpment"></td>
                                <td>
                                    <i class="fas fa-edit"></i>
                                </td>
                                <td>
                                    <i class="fas fa-save"></i> 
                                </td>
                                <td>
                                    <i class="fas fa-minus-circle"></i>
                                </td>
                            </tr>
                        <?php
                                $count++;
                            }
                        ?>

                        </table>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Course Title</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <button type="Submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>