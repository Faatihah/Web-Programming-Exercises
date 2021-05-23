<?php
    include_once ("koneksi.php");
    $db = new universitasDB();
    $koneksi = $db->getA();
    $request = $_SERVER ['REQUEST_METHOD'];
    $uri_path = parse_url ($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri_segment = explode('/', $uri_path);

    switch($request){
        case 'GET' :
            if(!empty($uri_segment[4])){
                $nim = $uri_segment[4];
                $db->get_mahasiswa(ucfirst($nim));
            } else {
                $db->get_mahasiswa();
            }
            break;
        case 'POST' :
            $db->insert_mahasiswa();
            break;

        case 'PUT' :
            $nim = $uri_segment[4];
            $db->update_mahasiswa(ucfirst($nim));
            break;
        
        case 'DELETE' :
            $nim = $uri_segment[4];
            $db->delete_mahasiswa(ucfirst($nim));
            break;
        default:
            header ("HTTP/1.0 405 Method Tidak Terdaftar");
            break;

    }

?>