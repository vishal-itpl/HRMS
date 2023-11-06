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
