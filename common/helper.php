<?php

if (!function_exists('require_file')) {
    // Kiểm tra xem hàm 'require_file' đã được định nghĩa trước đó hay chưa
    function require_file($pathFolder) {
        // Hàm này được thiết kế để đọc và require tất cả các file trong một thư mục

        // Sử dụng scandir để lấy danh sách tất cả các file và thư mục trong đường dẫn được chỉ định
        // Hàm scandir trả về một mảng chứa tên của các file và thư mục
        $files = array_diff(scandir($pathFolder), ['.', '..']);

        // Duyệt qua từng phần tử trong mảng $files
        foreach ($files as $fileName) {
            // Tạo đường dẫn đầy đủ đến file bằng cách ghép $pathFolder và $fileName
            $filePath = $pathFolder . $fileName;

            // Sử dụng require_once để đảm bảo rằng mỗi file chỉ được require một lần
            require_once $filePath;
        }
    }
}


if(!function_exists('debug')){

    function debug($var){
        echo '<pre>';

        print_r($var);

        die;

    }
}


if(!function_exists('e404')){

    function e404(){
        echo '404 NOT FOUND ';
    }
}