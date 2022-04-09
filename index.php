<?php include "koneksi.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .glass-container{
            height: 375px;
            color: white;
            gap: 20px;
            border-radius: 10px;
            backdrop-filter: blur(4px);
            background-color: rgba(0,191,255, 0.023);
            box-shadow: rgba(0, 0, 0, 0.3) 2px 8px 8px;
            border: 0px rgba(255,255,255,0.4) solid;
            border-bottom: 0px rgba(40,40,40,0.35) solid;
            border-right: 0px rgba(40,40,40,0.35) solid;
        }
        body{
            background-image:url('https://images.unsplash.com/photo-1504253163759-c23fccaebb55?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80');
            background-size:cover;
            background-repeat:no-repeat;
        }
    </style>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="row d-flex justify-content-center mt-5">
        <div class="col-8">
            <div class="glass-container container-fluid p-5" id="glass">
                <h1>My Activity</h1>
                <button class="btn btn-primary">
                    Button
                </button>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <td>No</td>
                            <td>Activity</td>
                            <td>Description</td>
                            <td>Action</td>
                        </tr>
                        <?php
                            $sql_ambil=mysqli_query($koneksi,"SELECT*FROM tb_activity");
                            $no=1;
                            while($data=mysqli_fetch_assoc($sql_ambil)){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data["activity"]; ?></td>
                            <td><?php echo $data["description"]; ?></td>
                            <td>
                                <a href="" class="btn btn-warning">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>