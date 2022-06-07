<?php
if (isset($_POST['submitBtn'])) {
    $name = $_POST['std_name'];
}




?>





<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crud</title>
</head>

<body>

    <div class="container py-5 p-4 shadow my-5">
        <h2 class="mb-5"><a style="text-decoration: none;" href="index.php">Cruid Student Database</a></h2>

        <form action="" method="POST" enctype="multipart/form-data">
            <input class="form-control mb-2" type="text" name="std_name" id="" placeholder="Your Name">
            <input class="form-control mb-2" type="number" name="std_emil" id="" placeholder="Your Roll Number">
            <label for="image">Upload Your Image</label>
            <input class="form-control mb-2" type="file" name="std_file" id="" placeholder="Your Name">

            <input type="submit" class="form-control bg-warning" value="Submit" name="submitBtn">
        </form>
    </div>
    <!-- output table  -->
    <div class="container shadow">
        <h3 style="color: red;">Output</h3>
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Roll</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Prince</td>
                    <td>914144</td>
                    <td>img</td>
                    <td>
                        <a class="btn btn-success" href="#">Edit</a>
                        <a class="btn btn-warning" href="#">Delet</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>



    </br></br></br></br></br></br>













    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>