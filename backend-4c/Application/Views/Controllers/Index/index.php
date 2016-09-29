<br/>
<center>
    <h2>Website được thực hiện bởi: </h2>
    <ul>
        <li>Phan Thế Minh</li>
        <li>Trần Thị Thu</li>
        <li>Nguyễn Trung Đức</li>
        <li>Nguyễn Khắc Hoàn</li>
        <li>Trần Kim Tiến</li>
    </ul>


    <?php
    $date = strtotime("November 3, 2016 2:00 PM");
    $remaining = $date - time();
    $days_remaining = floor($remaining / 86400);
    $hours_remaining = floor(($remaining % 86400) / 3600);
    ?>

    <h1>There are <span class="green"> <?php echo $days_remaining ?></span> days and <span
            class="green"> <?php echo $hours_remaining ?></span> hours left</h1>


</center>