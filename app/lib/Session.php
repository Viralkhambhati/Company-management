<?php

class Session {

    // initialize session
    public static function init() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    // set session value
    public static function set($key, $val) {
        $_SESSION[$key] = $val;
    }

    // get session value
    public static function get($key) {
        return $_SESSION[$key] ?? false;
    }

    // check user session (for protected pages)
    public static function checkUserSession() {
        self::init();
        if (self::get("login") === false) {
            self::destroy();
            echo "<script>location.href='login.php';</script>";
            exit;
        }
    }

    // check login page (already logged-in users)
    public static function checkUserLogin() {
        self::init();
        if (self::get("login") === true) {
            echo "<script>location.href='dashboard.php';</script>";
            exit;
        }
    }

    // destroy session
    public static function destroy() {
        self::init();
        session_unset();
        session_destroy();
        echo "<script>location.href='login.php';</script>";
        exit;
    }
}
