<<<<<<< HEAD
<?
echo "ini file delete";
=======
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
>>>>>>> 09eb3f08b7cb35194d4b042c0f8c2b6ca24f53e3
