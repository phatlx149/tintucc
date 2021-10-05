<?php
$host = "localhost";   //địa chỉ mysql server sẽ kết nối đến
$dbname = "php1_news"; //tên database sẽ kết nối đến
$userdb = "root";    //username để kết nối đến database
$passdb = "";        // mật khẩu để kết nối đến database
$conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $userdb, $passdb);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
<?php
//Tạo hàm lấy dữ liệu database
// Lấy danh sách thể loại
function layDanhSachTheLoai()
{
    $sql = "SELECT idTL, TenTL, ThuTu, AnHien, lang FROM theloai ORDER BY ThuTu";
    global $conn;
    $kq = $conn->query($sql);
    return $kq;
}

//Insert thể loại
function themTheLoai($tenTL, $thuTu, $anHien, $lang)
{
    $sql = "INSERT INTO theloai ( tenTL , thuTu , anHien , lang) 
                    VALUES ('{$tenTL}' , '{$thuTu}', '{$anHien}' , '{$lang}')";
    global $conn;
    $kq = $conn->exec($sql);
    return $kq == 1;
}

// Lấy Menu Con
function layChiTietTheLoai($idTL)
{
    $sql = "SELECT idTL, TenTL, ThuTu, AnHien, lang, HienMenu FROM theloai WHERE idTL=$idTL";
    global $conn;
    $kq = $conn->query($sql);
    if ($kq == null) return false;
    else return $kq->fetch();
}
function capnhatTheLoai($idTL, $tenTL, $thuTu, $anHien, $lang)
{
    $sql = "UPDATE theloai SET tenTL ='{$tenTL}', thuTu=$thuTu, anHien=$anHien,lang= '{$lang}'
        WHERE idTL=$idTL";
    global $conn;
    $kq = $conn->exec($sql);
    return $kq == 1;
}
function layDanhSachLoaiTin()
{
    $sql = "SELECT idLT, Ten, ThuTu, AnHien, lang, idTL FROM loaitin ORDER BY ThuTu";
    global $conn;
    $kq = $conn->query($sql);
    return $kq;
}

function layTenTheLoai($idTL = 0)
{
    $sql = "SELECT TenTL FROM theloai WHERE idTL=$idTL";
    global $conn;
    $kq = $conn->query($sql);
    if ($kq == null) return "Không có";
    $row = $kq->fetch();
    return $row['TenTL'];
}
function themLoaiTin($ten, $thuTu, $anHien, $lang, $idTL)
{
    $sql = "INSERT INTO loaitin (Ten, ThuTu, AnHien, lang, idTL) VALUES 
  ('{$ten}','{$thuTu}','{$anHien}','{$lang}',$idTL)";
    global $conn;
    $kq = $conn->exec($sql);
    return $kq == 1;
}
function xoaChiTietTL($idLT)
{
    $sql = "DELETE FROM loaitin  WHERE idLT=$idLT";
    global $conn;
    $kq = $conn->exec($sql);
}
function xoaTheLoai($idTL)
{
    $sql = "DELETE FROM theloai  WHERE idTL=$idTL";
    global $conn;
    $kq = $conn->exec($sql);
}
function layChiTietLoaiTin($idLT)   
{
    $sql = "SELECT idLT, Ten, ThuTu, AnHien, lang, idTL FROM loaitin WHERE idLT=$idLT";
    global $conn;
    $kq = $conn->query($sql);
    if ($kq == null) return false;
    else return $kq->fetch();
}
function capnhatLoaiTin($idLT, $ten, $thuTu, $anHien, $lang, $idTL)
{
    $sql = "UPDATE loaitin SET Ten ='{$ten}', ThuTu=$thuTu, AnHien=$anHien,lang= '{$lang}', idTL=$idTL
        WHERE idLT=$idLT";
    global $conn;
    $kq = $conn->exec($sql);
    return $kq == 1;
}
function layDanhSachThanhVien()
{
    $sql = "SELECT idUser, username, pass, email FROM dangky";
    global $conn;
    $kq = $conn->query($sql);
    return $kq;
}
function layChiTietThanhVien($idUser)
{
    $sql = "SELECT idUser, username, pass, email FROM dangky WHERE idUser=$idUser";
    global $conn;
    $kq = $conn->query($sql);
    if ($kq == null) return false;
    else return $kq->fetch();
}
function capnhatThanhVien($idUser, $username, $pass, $email)
{
    $sql = "UPDATE dangky SET username ='{$username}', pass ='$pass', email ='$email'
        WHERE idUser=$idUser";
    global $conn;
    $kq = $conn->exec($sql);
    return $kq == 1;
}
function xoaThanhVien($idUser){
    $sql = "DELETE FROM dangky WHERE idUser = $idUser";
    global $conn;
    $kq = $conn->exec($sql);
}

?>