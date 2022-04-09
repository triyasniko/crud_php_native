<?php
    // echo "ini file delete";
    include 'koneksi.php';

    $id= $_GET['id'];
    $sql_delete=mysqli_query($koneksi,"DELETE FROM tb_activity WHERE id='$id' ");
    if($sql_delete){
        echo "<script>
                alert('Delete Success');
                window.location.href='index.php';
             </script>
        ";
    }else{
        echo "<script>
                alert('Delete Failed');
                window.location.href='index.php';
             </script>
        ";
    }

?>