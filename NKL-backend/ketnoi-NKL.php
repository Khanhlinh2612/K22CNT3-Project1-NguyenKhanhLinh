<?php
    $conn_nkl= new mysqli("localhost","root","","k22cnt3-project1-nguyenkhanhlinh");
    if(!$conn_nkl){
        echo "<h2> Lỗi: ". mysqli_error($conn_nkl). "</h2>";
    }else{
        echo "<h2>Nguyễn Khánh Linh - 2210900035</h2>";
    }
?>