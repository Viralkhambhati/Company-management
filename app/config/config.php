<?php
// ================================
// ERROR REPORTING (DEV MODE)
// ================================
error_reporting(E_ALL);
ini_set('display_errors', 1);

// ================================
// DATABASE CONSTANTS (REQUIRED)
// ================================
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "user_management_system"); // must match phpMyAdmin DB name
