<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <form class="form-horizontal mt-3" method="POST" action="nilai_siswa.php">
            <div class="form-group row">
                <label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label> 
                <div class="col-8">
                <input id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" type="text" class="form-control" size="30">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4 col-form-label" for="select">Mata Kuliah</label> 
                <div class="col-8">
                <select id="mata_kuliah" name="mata_kuliah" class="custom-select">
                    <option value="DDP">Dasar Dasar Pemrograman</option>
                    <option value="BDI">Basis Data I</option>
                    <option value="WEB1">Pemrograman Web</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                <div class="col-8">
                <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                <div class="col-8">
                <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                <div class="col-8">
                <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="proses" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
        <br>
        <?php
        if (isset($_POST['proses'])) {
            $nama = $_POST['nama_lengkap'];
            $mata_kuliah = $_POST['mata_kuliah'];
            $nilai_uts = $_POST['nilai_uts'];
            $nilai_uas = $_POST['nilai_uas'];
            $nilai_tugas = $_POST['nilai_tugas'];

            $persentase_uts = (30 * $nilai_uts) / 100;
            $persentase_uas = (35 * $nilai_uas) / 100;
            $persentase_tugas = (35 * $nilai_tugas) / 100;
            $nilai_total = $persentase_uts + $persentase_uas + $persentase_tugas;

            echo 'Nama : ' . $nama;
            echo '<br />Mata Kuliah : ' . $mata_kuliah;
            echo '<br />Nilai UTS : ' . $nilai_uts;
            echo '<br />Nilai UAS : ' . $nilai_uas;
            echo '<br />Nilai Tugas : ' . $nilai_tugas;
            echo '<br />Nilai Total : ' . $nilai_total;
// Conditional IF
            $kesimpulan_nilai = '';
            if ($nilai_total > 55) {
                echo '<br />Siswa Dinyatakan Lulus';
            } else {
                echo '<br />Siswa Dinyatakan Tidak Lulus';
            }
// Multi Conditional
            $grade_uts = '';
            if ($nilai_uts >= 85 and $nilai_uts <= 100) {
                $grade_uts = 'A';
            } elseif ($nilai_uts >= 70 and $nilai_uts <= 84) {
                $grade_uts = 'B';
            } elseif ($nilai_uts >= 56 and $nilai_uts <= 69) {
                $grade_uts = 'C';
            } elseif ($nilai_uts >= 36 and $nilai_uts <= 55) {
                $grade_uts = 'D';
            } elseif ($nilai_uts >= 0 and $nilai_uts <= 35) {
                $grade_uts = 'E';
            } else {
                $grade_uts = 'I';
            }
            echo "<br />Grade Nilai UTS : " . $grade_uts;

            $grade_uas = '';
            if ($nilai_uas >= 85 and $nilai_uas <= 100) {
                $grade_uas = 'A';
            } elseif ($nilai_uas >= 70 and $nilai_uas <= 84) {
                $grade_uas = 'B';
            } elseif ($nilai_uas >= 56 and $nilai_uas <= 69) {
                $grade_uas = 'C';
            } elseif ($nilai_uas >= 36 and $nilai_uas <= 55) {
                $grade_uas = 'D';
            } elseif ($nilai_uas >= 0 and $nilai_uas <= 35) {
                $grade_uas = 'E';
            } else {
                $grade_uas = 'I';
            }
            echo "<br />Grade Nilai UAS : " . $grade_uas;

            $grade_tugas = '';
            if ($nilai_tugas >= 85 and $nilai_tugas <= 100) {
                $grade_tugas = 'A';
            } elseif ($nilai_tugas >= 70 and $nilai_tugas <= 84) {
                $grade_tugas = 'B';
            } elseif ($nilai_tugas >= 56 and $nilai_tugas <= 69) {
                $grade_tugas = 'C';
            } elseif ($nilai_tugas >= 36 and $nilai_tugas <= 55) {
                $grade_tugas = 'D';
            } elseif ($nilai_tugas >= 0 and $nilai_tugas <= 35) {
                $grade_tugas = 'E';
            } else {
                $grade_tugas = 'I';
            }
            echo "<br />Grade Nilai Tugas : " . $grade_tugas;

            $grade_total = '';
            if ($nilai_total >= 85 and $nilai_total <= 100) {
                $grade_total = 'A';
            } elseif ($nilai_total >= 70 and $nilai_total <= 84) {
                $grade_total = 'B';
            } elseif ($nilai_total >= 56 and $nilai_total <= 69) {
                $grade_total = 'C';
            } elseif ($nilai_total >= 36 and $nilai_total <= 55) {
                $grade_total = 'D';
            } elseif ($nilai_total >= 0 and $nilai_total <= 35) {
                $grade_total = 'E';
            } else {
                $grade_total = 'I';
            }
            echo "<br />Grade Nilai Total : " . $grade_total;
// Alternatif IF atau SWITCH CASE
            switch ($grade_uts) {
                case 'A':
                    echo '<br />Predikat Nilai UTS : Sangat Memuaskan';
                    break;
                case 'B':
                    echo '<br />Predikat Nilai UTS : Memuaskan';
                    break;
                case 'C':
                    echo '<br />Predikat Nilai UTS : Cukup';
                    break;
                case 'D':
                    echo '<br />Predikat Nilai UTS : Kurang';
                    break;
                case 'E':
                    echo '<br />Predikat Nilai UTS : Sangat Kurang';
                    break;
                default:
                    echo '<br />Predikat Nilai UTS : Tidak Ada';
                    break;
            }

            switch ($grade_uas) {
                case 'A':
                    echo '<br />Predikat Nilai UAS : Sangat Memuaskan';
                    break;
                case 'B':
                    echo '<br />Predikat Nilai UAS : Memuaskan';
                    break;
                case 'C':
                    echo '<br />Predikat Nilai UAS : Cukup';
                    break;
                case 'D':
                    echo '<br />Predikat Nilai UAS : Kurang';
                    break;
                case 'E':
                    echo '<br />Predikat Nilai UAS : Sangat Kurang';
                    break;
                default:
                    echo '<br />Predikat Nilai UAS : Tidak Ada';
                    break;
            }

            switch ($grade_tugas) {
                case 'A':
                    echo '<br />Predikat Nilai Tugas : Sangat Memuaskan';
                    break;
                case 'B':
                    echo '<br />Predikat Nilai Tugas : Memuaskan';
                    break;
                case 'C':
                    echo '<br />Predikat Nilai Tugas : Cukup';
                    break;
                case 'D':
                    echo '<br />Predikat Nilai Tugas : Kurang';
                    break;
                case 'E':
                    echo '<br />Predikat Nilai Tugas : Sangat Kurang';
                    break;
                default:
                    echo '<br />Predikat Nilai Tugas : Tidak Ada';
                    break;
            }

            switch ($grade_total) {
                case 'A':
                    echo '<br />Predikat Nilai Total : Sangat Memuaskan';
                    break;
                case 'B':
                    echo '<br />Predikat Nilai Total : Memuaskan';
                    break;
                case 'C':
                    echo '<br />Predikat Nilai Total : Cukup';
                    break;
                case 'D':
                    echo '<br />Predikat Nilai Total : Kurang';
                    break;
                case 'E':
                    echo '<br />Predikat Nilai Total : Sangat Kurang';
                    break;
                default:
                    echo '<br />Predikat Nilai Total : Tidak Ada';
                    break;
            }
        } else {
            echo 'Form belum disubmit';
        }
        ?>
    </div>
</body>
</html>