<?php
/*
    Cho một đoạn text như sau
ngày 2022-01-29 mua hàng 100,000 đ,
ngày 2022-02-02 mua hàng 300,000 đ,
ngày 2022-02-07 thanh toán 200,000 đ,
ngày 2022-02-10 mua hàng 250,000 đ,
ngày 2022-02-15 thanh toán 400,000 đ,
Hãy viết code PHP để biến đoạn text trên thành biến mảng và lọc ra các khoản giao dịch từ ngày 01/02/2022 
đến ngày 10/02/2022, hiển thị trên màn hình 
(lưu ý hiển thị ngày theo dạng dd/mm/YYYY và cho biết dư nợ tính đến ngày 20/02/2022 là bao nhiêu.

*/ 
$a = ('ngày 2022-01-29 mua hàng 100,000 đ,
ngày 2022-02-02 mua hàng 300,000 đ,
ngày 2022-02-07 thanh toán 200,000 đ,
ngày 2022-02-10 mua hàng 250,000 đ,
ngày 2022-02-15 thanh toán 400,000 đ');

echo '<pre>';
print_r(explode(' ',$a ));
echo '</pre>';

        
    // echo '<pre>';
    // print_r($a);
    // echo '</pre>';
    // foreach ($a as $key2 => $value2) {
    //     // echo $key2;
    //     if ($key2 == 0) {

    //         $date = date_create($value2);
    //         $dates =  date_format($date, "Y/m/d");
    //         // echo '<pre>';
    //         // print_r(getdate());     
    //         // echo '</pre>';
    //         $date = date_create('2022-01-29');
    //         echo "<pre>";
    //         print_r($date);
    //         echo "</pre>";
    //     }
    //     // echo '<pre>';
    //     // print_r($value1);
    //     // echo '</pre>';
    // }

