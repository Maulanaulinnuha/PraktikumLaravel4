<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<center>
    <h2>Data Mahasiswa</h2>
    <hr />
    <table class="table table-dark" style='width:50%; text-align:center;'>

        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>NIM</td>
                <td>{{$data['nim']}}</td>

            </tr>
            <tr>
                <th scope="row">1</th>
                <td>NAMA</td>
                <td>{{$data['nama']}}</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Alamat</td>
                <td>{{$data['alamat']}}</td>
            </tr>
        </tbody>
    </table>
</center>
<hr />


<center>
    <h2>Tabel Mahasiswa</h2>
    <hr />
</center>

<table class="table table-striped">
    <thead class="table-success">
        <tr>
            <th scope="col">NIM</th>
            <th scope="col">NAMA</th>
            <th scope="col">ALAMAT</th>
            <th scope="col">CREATED AT</th>
        </tr>
    </thead>
    <tbody>

        <?php

        foreach ($dataAll as $datax) {
            echo "<tr>";

            echo "<td>";
            echo "$datax->nim";
            echo "</td>";

            echo "<td>";
            echo "$datax->nama";
            echo "</td>";

            echo "<td>";
            echo "$datax->alamat";
            echo "</td>";

            echo "<td>";
            echo "$datax->created_at";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
</table>