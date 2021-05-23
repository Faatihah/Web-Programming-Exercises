<?php
class universitasDB{
    function getA(){
        $host = "localhost";
        $username = "root";
        $pass = "";
        $db = "universitas";
        $konek = mysqli_connect ($host, $username, $pass, $db) or die ("Koneksi gagal ". mysqli_connect_error());

        if (mysqli_connect_errno()){
            exit();
        }
        return $konek;
    }

    function get_mahasiswa($nim=""){
        global $koneksi;
        $query = "SELECT * FROM mahasiswa";
        if(!empty($nim)){
            $query .= " WHERE nim='$nim'";
        }
        $respon = array();
        $result = mysqli_query ($koneksi, $query);
        $i = 0;
        if ($result){
            $respon ['kode'] = 1;
            $respon ['status']="sukses";
            while($row=mysqli_fetch_array($result)){
                $respon ['data'][$i]['Nim'] = $row['nim'];
                $respon ['data'][$i]['Nama'] = $row['nama'];
                $respon ['data'][$i]['Angkatan'] = $row['angkatan'];
                $respon ['data'][$i]['SMT'] = $row['smt'];
                $respon ['data'][$i]['IPK'] = $row['ipk'];
                $i++;
            }
        } else {
            $respon['kode'] = 0;
            $respon ['status']='gagal';
        }
        header('Content-Type: application/json');
        echo json_encode($respon);
    }

    function insert_mahasiswa(){
        global $koneksi;
        $data = json_decode(file_get_contents('php://input'), true);
        $nim = $data['Nim'];
        $nama = $data['Nama'];
        $angkatan = $data['Angkatan'];
        $smt = $data['SMT'];
        $ipk = $data['IPK'];

        $query ="INSERT INTO mahasiswa(nim,nama,angkatan,smt,ipk) VALUES('$nim','$nama','$angkatan','$smt','$ipk')";
        
        if (mysqli_query($koneksi, $query)){
            $respon= [
                'kode'=>1,
                'status' =>'Data Karyawan Berhasil Ditambahkan'
            ];
        } else {
            $respon = [
                'kode'=>0,
                'status' =>'Data Karyawan Gagal Ditambahkan'
            ];
        }
        header('Content-Type: application/json');
        echo json_encode($respon);
    }

    function update_mahasiswa($nimm){
        global $koneksi;
        $data = json_decode(file_get_contents('php://input'), true);
        $nim = $data['Nim'];
        $nama = $data['Nama'];
        $angkatan = $data['Angkatan'];
        $smt = $data['SMT'];
        $ipk = $data['IPK'];

        $query = "UPDATE mahasiswa SET nim='$nim', nama='$nama', angkatan='$angkatan', smt='$smt', ipk='$ipk' WHERE nim = '$nimm'";

        if (mysqli_query($koneksi, $query)){
            $respon= [
                'kode'=>1,
                'status' =>'Data Karyawan Berhasil Diupdate'
            ];
        } else {
            $respon = [
                'kode'=>0,
                'status' =>'Data Karyawan Gagal Diupdate'
            ];
        }
        header('Content-Type: application/json');
        echo json_encode($respon);
    }

    function delete_mahasiswa($nim){
        global $koneksi;
        $query = "DELETE FROM mahasiswa WHERE nim='$nim'";

        if (mysqli_query($koneksi, $query)){
            $respon= [
                'kode'=>1,
                'status' =>'Data Karyawan Berhasil Dihapus'
            ];
        } else {
            $respon = [
                'kode'=>0,
                'status' =>'Data Karyawan Gagal Dihapus'
            ];
        }
        header('Content-Type: application/json');
        echo json_encode($respon);
    }
}
?>