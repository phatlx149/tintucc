<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "php1_news";
$conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password);
// if (!$conn) {
//     echo "<script>alert('Kết nối không thành công')</script>";
// } else {
//     echo "<script>alert('Kết nối thành công')</script>";
// }
function TheLoai()
{
    $sql = "SELECT idTL, TenTL FROM theloai WHERE lang='vi' AND AnHien=1 AND HienMenu=1 ORDER BY ThuTu ASC";
    global $conn;
    $kq = $conn->query($sql);
    return $kq;
}
function LoaiTinTrongTheLoai($idTL)
{
    $sql = "SELECT idLT, Ten FROM loaitin WHERE lang='vi' AND AnHien=1 AND idTL=$idTL ORDER BY ThuTu ASC";
    global $conn;
    $kq = $conn->query($sql);
    return $kq;
}
function  TinNoiBatFT()
{
    $sql = "SELECT idTin, TieuDe, TomTat, Ngay, urlHinh FROM tin WHERE NoiBat = 1 AND lang='vi' AND AnHien=1 ORDER BY Ngay ASC LIMIT 0,5";
    global $conn;
    $kq = $conn->query($sql);
    return $kq;
}
function TinNoiBat()
{
    $sql = "SELECT idTin, TieuDe, TomTat, Ngay, urlHinh FROM tin WHERE NoiBat = 1 AND lang='vi' AND AnHien=1 ORDER BY Ngay DESC LIMIT 0,5";
    global $conn;
    $kq = $conn->query($sql);
    return $kq;
}
function CotPhaiTinNoiBat()
{
    $sql = "SELECT idTin, TieuDe, Ngay, urlHinh FROM tin WHERE NoiBat = 1 AND lang='vi' AND AnHien=1 ORDER BY Ngay DESC LIMIT 5 ";
    global $conn;
    $kq = $conn->query($sql);
    return $kq;
}
function CotPhaiTinMoiNhat()
{
    $sql = "SELECT idTin, TieuDe, Ngay, urlHinh FROM tin WHERE  lang='vi' AND AnHien=1 ORDER BY Ngay ASC LIMIT 0,5";
    global $conn;
    $kq = $conn->query($sql);
    return $kq;
}
function CotPhaiTinMoiNhat1()
{
    $sql = "SELECT idTin, TieuDe, Ngay, urlHinh FROM tin WHERE  lang='vi' AND AnHien=1 ORDER BY Ngay DESC LIMIT 0,5";
    global $conn;
    $kq = $conn->query($sql);
    return $kq;
}
function TinMoiNhat($sotin = 10)
{
    $sql = "SELECT idTin, TieuDe, TomTat, Ngay, urlHinh FROM tin WHERE  lang='vi' AND AnHien=1 ORDER BY Ngay DESC LIMIT 0,$sotin";
    global $conn;
    $kq = $conn->query($sql);
    return $kq;
}
function TinTrongLoai($idLT = 0, $page_num = 1, $page_size = 12)
{
    $startRow = ($page_num - 1) * $page_size;
    $sql = "SELECT idTin, TieuDe, TomTat, Ngay, urlHinh FROM tin WHERE AnHien=1 AND idLT=$idLT LIMIT $startRow, $page_size";
    global $conn;
    $kq = $conn->query($sql);
    return $kq;
}
function demTinTrongLoai($id = 0)
{
    $sql = "SELECT count(*) FROM tin WHERE idLT=$id AND AnHien=1";
    global $conn;
    $kq = $conn->query($sql);
    $row = $kq->fetch();
    return $row[0];
}
function taoLinkPhanTrang($base_url, $total_rows, $page_num, $page_size = 5, $offset = 3)
{
    if ($page_num <= 0) return "";
    $total_pages = ceil($total_rows / $page_size); //tính tổng số trang
    if ($total_pages <= 1) return "";

    $links = "<nav class='pagination'>";
    if ($page_num < 1) { //chỉ hiện 2 link đầu, trước khi user từ trang 2 trở đi
        $first = "<a class='pagination__page' href='{$base_url}'> << </a>";
        $page_prev = $page_num - 1;
        $prev = "<a class='pagination__page' href='{$base_url}&page_num={$page_prev}'> < </a>";
        $links .= $first . $prev;
    }

    $form = $page_num - $offset;
    $to = $page_num + $offset;

    if ($form < 1) $form = 1;
    if ($to > $total_pages) $to = $total_pages;


    for ($i = $form; $i <= $to; $i++) {
        if ($i == $page_num) $str = "<span class='pagination__page pagination__page--current'>$i</span>";

        else $str = "<a class='pagination__page' href='{$base_url}&page_num={$i}'>{$i}</a>";

        $links .= $str;
    }

    if ($page_num < $total_pages) { //chỉ hiện link cuối, kế khi user kô ở trang cuối 
        $page_next = $page_num + 1;
        $next = "<a class='pagination__page' href='{$base_url}&page_num={$page_next}'> > </a>";
        $last = "<a class='pagination__page' href='{$base_url}&page_num={$total_pages}'> >> </a>";
        $links .= $next . $last;
    }
    $links .= "</nav>";
    return $links;
}


function LayTenTrongLoai($idLT)
{
    $sql = "SELECT Ten FROM loaitin WHERE idLT=$idLT";
    global $conn;
    $kq = $conn->query($sql);
    $row = $kq->fetch();
    return $row['Ten'];
}
function CotPhaiTinTrongLoai($idLT)
{
    $sql = "SELECT idTin, TieuDe, Ngay, urlHinh FROM tin WHERE  lang='vi' AND AnHien=1 AND idLT=$idLT ORDER BY Ngay ASC LIMIT 0,4";
    global $conn;
    $kq = $conn->query($sql);
    return $kq;
}
function ChiTietTin($idTin)
{
    $sql = "SELECT idTin, TieuDe, TomTat, Ngay, SoLanXem, Content FROM tin WHERE idTin=$idTin";
    global $conn;
    $kq = $conn->query($sql);
    $row = $kq->fetch();
    return $row;
}

