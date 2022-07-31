
setInterval(getCurrentDate, 1000);


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

function FindVerify() {
    if (Verify() == false) {
        alert("Please Choose a Valid Input.");
        return false;
    } else {
        return true;
    }
}

function Verify() {
    let animalBreedArray = document.querySelectorAll('input[name ="animalBreed[]"]');
    let animalReqArray = document.querySelectorAll('input[name ="requirements[]"]');
    let verifyBreed = false;
    let verifyReq = false;

    for (let i = 0; i < animalBreedArray.length; i++) {
        if (animalBreedArray[i].checked == true) {
            verifyBreed = true;
            break;
        }
    }
    for (let i = 0; i < animalReqArray.length; i++) {
        if (animalReqArray[i].checked == true) {
            verifyReq = true;
            break;
        }
    }

    if (verifyBreed == false || verifyReq == false) {
        return false;
    } else {
        return true;
    }
}

function GiveDogVerify() {
    let verifyFname = false;
    let verifyLname = false;
    let verify = !Verify();
    let verifyEmail = false;

    let fname = document.getElementById("fName").value;
    let lname = document.getElementById("lName").value;
    let email = document.getElementById("email").value;

    if (fname.match(/\d+/) || fname == "") {
        verifyFname = true;
    }
    if (lname.match(/\d+/) || lname == "") {
        verifyLname = true;
    }
    if (!(email.match(/^\S+@\S+\.\S+$/)) || email == "") {
        verifyEmail = true;
    }

    if (verify == true || verifyFname == true || verifyLname == true || verifyEmail == true) {
        alert("Please Choose a Valid Input.");
        return false;
    } else {
        return true;
    }

} function GiveCatVerify() {
    let verifyFname = false;
    let verifyLname = false;
    let verify = !Verify();
    let verifyEmail = false;

    let fname = document.getElementById("FName").value;
    let lname = document.getElementById("LName").value;
    let email = document.getElementById("Email").value;

    if (fname.match(/\d+/) || fname == "") {
        verifyFname = true;
    }
    if (lname.match(/\d+/) || lname == "") {
        verifyLname = true;
    }
    if (!(email.match(/^\S+@\S+\.\S+$/)) || email == "") {
        verifyEmail = true;
    }

    if (verify == true || verifyFname == true || verifyLname == true || verifyEmail == true) {
        alert("Please Choose a Valid Input.");
        return false;
    } else {
        return true;
    }
}