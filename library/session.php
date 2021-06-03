<?php
class Session{
    //lưu phiên thực hiện
    public static function init(){
        if (version_compare(phpversion(), '5.4.0', '<')) {
            if (session_id() == '') {
                session_start();
            }
        } else {
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
        }
    }

    //xét giá trị đưa vào là gì thì sẽ ra cái đó
    public static function set($key, $val){
        $_SESSION[$key] = $val;
    }

    //lấy giá trị
    public static function get($key){
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        } else {
            return false;
        }
    }

    //kiểm tra phiên làm việc có tồn tại không
    public static function checkSession(){
        self::init();
        if (self::get("login")== false) {
            self::destroy();
            header("Location:login.php");
        }
    }

    public static function checkLogin(){
        self::init();
        if (self::get("login")== true) {
            header("Location:index.php");
        }
    }

    //hủy phiên làm việc
    public static function destroy(){
        session_destroy();
        header("Location:login.php");
    }
}
?>