
setInterval(getCurrentDate, 1000);

function disclaimerBox() {
    alert("Your information will not be sold or misused, and the site builder is protected from any incorrect information posted by a pet owner.");
}

function getCurrentDate() {
    let dateObject = new Date();

    let dayOfWeek = dateObject.getDay();
    let date = dateObject.getDate();
    let month = dateObject.getMonth();
    let year = dateObject.getFullYear();

    switch (dayOfWeek) {
        case 0: dayOfWeek = "Sunday";
            break;
        case 1: dayOfWeek = "Monday";
            break;
        case 2: dayOfWeek = "Tuesday";
            break;
        case 3: dayOfWeek = "Wednesday";
            break;
        case 4: dayOfWeek = "Thursday";
            break;
        case 5: dayOfWeek = "Friday";
            break;
        case 6: dayOfWeek = "Saturday";
    }

    switch (month) {
        case 0: month = "January";
            break;
        case 1: month = "February";
            break;
        case 2: month = "March";
            break;
        case 3: month = "Avril";
            break;
        case 4: month = "May";
            break;
        case 5: month = "June";
            break;
        case 6: month = "July";
            break;
        case 7: month = "August";
            break;
        case 8: month = "September";
            break;
        case 9: month = "October";
            break;
        case 10: month = "November";
            break;
        case 11: month = "December";

    }
    document.getElementById("timer").innerHTML = dayOfWeek + ", " + month + " " + date + ", " + year + " " + getCurrentTime();
}
function getCurrentTime() {
    let dateObject = new Date();

    let hour = dateObject.getHours();
    let minute = dateObject.getMinutes();
    let second = dateObject.getSeconds();

    return (hour + ":" + minute + ":" + second);
}


