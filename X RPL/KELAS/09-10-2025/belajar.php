<h1>Saya belajar PHP</h1>

<?php

    $nama = "Dinda Dwi Wulandari";
    $kelas = "X-RPL";
    $umur = "15 Tahun";
    $alamat = "Punggul RT 3 RW 3 Kec. Gedangan Kab. Sidoarjo";
    $hobi = "Mendengarkan musik dan olahraga";
    $citacita = "Atlet karate Internasional";
    $enter = "<br>";

    echo $nama;
    echo $enter;

    echo $kelas;
    echo $enter;

    echo $umur;
    echo $enter;

    echo $alamat;
    echo $enter;

    echo $hobi;
    echo $enter;

    echo $citacita;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Dinda Dwi Wulandari</title>
</head>
<body>
    <div>
        <h1>Identitas</h1>

        <table>
            <tbody>
                <tr>
                    <td>Nama :</</td>
                    <td>
                        <?= $nama;?>
                    </td>
                </tr>

                <tr>
                    <td>Kelas :</</td>
                    <td>
                        <?= $kelas;?>
                    </td>
                </tr>

                <tr>
                    <td>Umur :</</td>
                    <td>
                        <?= $umur;?>
                    </td>
                </tr>

                <tr>
                    <td>Alamat :</</td>
                    <td>
                        <?= $alamat;?>
                    </td>
                </tr>

                <tr>
                    <td>Hobi :</</td>
                    <td>
                        <?= $hobi;?>
                    </td>
                </tr>

                <tr>
                    <td>Cita-cita :</</td>
                    <td>
                        <?= $citacita;?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>