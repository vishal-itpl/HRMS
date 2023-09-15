<?php
$count = 0;
$date = date_create();
for ($i = date("t"); $i > 0; $i--) {
    date_date_set($date, date("Y"), date("m"), $i);
    if (date_format($date, "w") != 0 && date_format($date, "w") != 6) {
        $count++;
    }
}
echo 'Total working days : ' . $count;
?>