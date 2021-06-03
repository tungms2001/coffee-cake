<?php
    class Format{
        //định dạng ngày tháng năm
    public function formatDate($date){
    return date('F j, Y, g:i a', strtotime($date));
    }

    //làm cho tiêu đề chuẩn hơn
    public function textShorten($text, $limit = 400){
    $text = $text. " ";
    $text = substr($text, 0, $limit);
    $text = substr($text, 0, strrpos($text, ' '));
    $text = $text.".....";
    return $text;
    }

    //kiểm tra form trống hay không
    public function validation($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

    //kiểm tra tên server
    public function title(){
    $path = $_SERVER['SCRIPT_FILENAME'];
    $title = basename($path, '.php');
    //$title = str_replace('_', ' ', $title);
    if ($title == 'index') {
    $title = 'home';
    }elseif ($title == 'contact') {
    $title = 'contact';
    }
    return $title = ucfirst($title);
    }
    }
?>
