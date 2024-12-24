<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" connect="width=device-width,initial-scale=1.0">
        <link rel="styleshett" href="assets/style.css">
        <title>CRUD System</title>
</head>
<body>
    <div class="container">
        <h2>daftar pengguna</h2>
        <a href="create.php"class="btn">tambah pengguna baru</a>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>nama</th>
                        <th>email</th>
                        <th>telepon</th>
                        <th>aksi</th>
</th>
<tbody>
    <?php
    //koneksi ke database
    $conn=new mysqli("localhost","root","","crud_db");
    if ($conn->connect_error){
        die("koneksigagal:". $conn->connect_error);
    }
    //mengambil data dari table
    $sql="SELECT* FROM user";
    $result=$conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result-fetch_assoc()){
            echo"<tr>"
            <td>".$row["id"] ."</td>
            echo "<td>" . $row["name"] . "</td>";
                            echo "<td>" . $row["email"] . "</td>";
                            echo "<td>" . $row["phone"] . "</td>";
                            echo "<td>
                                    <a href='update.php?id=" . $row["id"] . "' class='btn-edit'>Edit</a>
                                    <a href='delete.php?id=" . $row["id"] . "' class='btn-delete'>Hapus</a>
                                  </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>Tidak ada data</td></tr>";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
        
    