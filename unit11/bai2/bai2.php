<?php
class person {
    var $name;
    var $gioiTinh;
    var $ngaySinh;
    var $queQuan;

    function set_name($new_name) {
        $this->name = $new_name;
    }

    function get_name() {
        return $this->name;
    }

    function set_gioiTinh($new_gioiTinh) {
        $this->gioiTinh = $new_gioiTinh;
    }

    function get_gioiTinh() {
        return $this->gioiTinh;
    }

    function set_ngaySinh($new_ngaySinh) {
        $this->ngaySinh = $new_ngaySinh;
    }

    function get_ngaySinh() {
        return $this->ngaySinh;
    }

    function set_queQuan($new_queQuan) {
        $this->queQuan = $new_queQuan;
    }

    function get_queQuan() {
        return $this->queQuan;
    }
}

$person = new person();

$person->set_name("Nguyen Sy Minh");
$person->set_gioiTinh("Nam");
$person->set_ngaySinh("28-9-2002");
$person->set_queQuan("Nghe An");


echo "Ten : ". $person->name ."<br/>";
echo "Gioi Tinh : ". $person->gioiTinh ."<br/>";
echo "Ngay Sinh : ". $person->ngaySinh ."<br/>";
echo "Que Quan : ". $person->queQuan ."<br/>";

?>