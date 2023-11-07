function getWorkingDaysAndTotalDays(year, month) {
    const firstDay = new Date(year, month, 1);
    const lastDay = new Date(year, month + 1, 0);

    let workingDays = 0;
    let totalDays = lastDay.getDate();

    for (let day = 1; day <= totalDays; day++) {
        const currentDate = new Date(year, month, day);
        const dayOfWeek = currentDate.getDay();

        if (dayOfWeek !== 0 && dayOfWeek !== 6) {
            workingDays++;
        }
    }

    return { workingDays, totalDays };
}

// Example usage:
const year = 2023;
const month = 9; // 0-based, so 9 represents October

const { workingDays, totalDays } = getWorkingDaysAndTotalDays(year, month);

console.log(`Number of working days in the month: ${workingDays}`);
console.log(`Total number of days in the month: ${totalDays}`);






<?php
$curmnth = date('m');
$curyear = date('Y');
function get_days_in_month($month, $year)
{
    if ($month == "02")
    {
        if ($year % 4 == 0) return 29;
        else return 28;
    }
    else if ($month == "01" || $month == "03" || $month == "05" || $month == "07" || $month == "08" || $month == "10" || $month == "12") return 31;
    else return 30;
}
$totDays = get_days_in_month($curmnth, $curyear);
printf("Total no of days in a current month : " . $totDays);
print "</br>";
?>