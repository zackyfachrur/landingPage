<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "kopikenangan";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Failed To Connect: " . mysqli_connect_error());
}

echo "Connected";
mysqli_close($conn);

$sql = "SELECT id, nama, alamat, jenis_kopi FROM data_kopi";
$result = $conn->query($sql);

if (!$result) {
    die("SQL Error : " . mysqli_error($conn));
}

echo '<table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kopi</th>
            </tr>
        </thead>
    <tbody>';

while($row= mysqli_fetch_array($result)) {
    echo '<tr>
            <td>'.$row['id'].'</td>
            <td>'.$row['nama'].'</td>
            <td>'.$row['alamat'].'</td>
            <td>'.$row['jenis_kopi'].'</td>
    </tr>';
}
echo '</tbody>
</table>';

mysqli_free_result($result);

?>