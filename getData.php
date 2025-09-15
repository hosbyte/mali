<?php
include 'db.php';

if(isset($_GET['mounth'])) {
    $mounth = $_GET['mounth'];

    // جدول‌های هر ماه
    $tables = [
        "far"  => ["kfar", "dfar"],
        "ord"  => ["kord", "dord"],
        "kho"  => ["kkho", "dkho"],
        "tir"  => ["ktir", "dtir"],
        "mor"  => ["kmor", "dmor"],
        "sha"  => ["ksha", "dsha"],
        "mehr" => ["kmehr", "dmehr"],
        "aban" => ["kaban", "daban"],
        "azar" => ["kazar", "dazar"],
        "dey"  => ["kday", "dday"],
        "bah"  => ["kbahman", "dbahman"],
        "esf"  => ["kesfand", "desfand"],
    ];

    if(isset($tables[$mounth])) {
        // خرج
        $kharj = mysqli_query($db, "SELECT * FROM `{$tables[$mounth][0]}`");
        $kharj_data = mysqli_fetch_all($kharj, MYSQLI_ASSOC);

        // جمع خرج
        $kharj_sum_query = mysqli_query($db , "SELECT SUM(price) as total FROM `{$tables[$mounth][0]}`");
        $kharj_sum = mysqli_fetch_assoc($kharj_sum_query)['total'] ?? 0;

        // دخل
        $dakhl = mysqli_query($db, "SELECT * FROM `{$tables[$mounth][1]}`");
        $dakhl_data = mysqli_fetch_all($dakhl, MYSQLI_ASSOC);

        // جمع دخل
        $dakhl_sum_query = mysqli_query($db, "SELECT SUM(price) as total FROM `{$tables[$mounth][1]}`");
        $dakhl_sum = mysqli_fetch_assoc($dakhl_sum_query)['total'] ?? 0;

        // خروجی JSON
        $result = [
            "kharj" => $kharj_data,
            "kharj_sum" => $kharj_sum,
            "dakhl" => $dakhl_data,
            "dakhl_sum" => $dakhl_sum,
        ];

        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($result, JSON_UNESCAPED_UNICODE);
        exit;
    }
}
