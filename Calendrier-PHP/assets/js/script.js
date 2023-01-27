/* Pâque */
let boxDay = document.querySelectorAll('.boxDay');

let paqueDay = document.getElementById('paqueDay').innerHTML;
let paqueDayN = Number(paqueDay);

let paqueMonth = document.getElementById('paqueMonth').innerHTML;
let paqueMonthN = Number(paqueMonth);

/* Mardi Gras */
let tuesdayDay = document.getElementById('tuesdayDay').innerHTML;
let tuesdayDayN = Number(tuesdayDay);
let tuesdayMonth = document.getElementById('tuesdayMonth').innerHTML;
let tuesdayMonthN = Number(tuesdayMonth);

let tuesdayYear = document.getElementById('tuesdayYear');

var parsedUrl = new URL(window.location.href);
let GET = parsedUrl.searchParams.get("months");

var parsedUrl = new URL(window.location.href);
let GETY = parsedUrl.searchParams.get("years");

/* pâque */
for (let bdE of boxDay) {
    if (bdE.innerHTML == paqueDayN && GET == paqueMonthN) {
        bdE.classList.remove('notEvent');
        bdE.classList.add('paque');
    }
}
/* Mardi Gras */
for (let bdE of boxDay) {
    if (bdE.innerHTML == tuesdayDayN && GET == tuesdayMonthN) {
        bdE.classList.remove('notEvent');
        bdE.classList.add('mardiGras');
    }
}
/* Noël */
for (let bdE of boxDay) {
    if (bdE.innerHTML == 25 && GET == 12) {
        bdE.classList.remove('notEvent');
        bdE.classList.add('noel');
    }
}
/* Halloween */
for (let bdE of boxDay) {
    if (bdE.innerHTML == 31 && GET == 10) {
        bdE.classList.remove('notEvent');
        bdE.classList.add('halloween');
    }
}
/* Fêtes de la musique */
for (let bdE of boxDay) {
    if (bdE.innerHTML == 21 && GET == 06) {
        bdE.classList.remove('notEvent');
        bdE.classList.add('musique');
    }
}
/* Saint-Valentin */
for (let bdE of boxDay) {
    if (bdE.innerHTML == 14 && GET == 02) {
        bdE.classList.remove('notEvent');
        bdE.classList.add('stValentin');
    }
}
/* 14 juillet */
for (let bdE of boxDay) {
    if (bdE.innerHTML == 14 && GET == 07) {
        bdE.classList.remove('notEvent');
        bdE.classList.add('feuDart');
    }
}
/* galette des rois */
for (let bdE of boxDay) {
    if (bdE.innerHTML == 6 && GET == 01) {
        bdE.classList.remove('notEvent');
        bdE.classList.add('galette');
    }
}
/* fin d'annnée */
for (let bdE of boxDay) {
    if (bdE.innerHTML == 31 && GET == 12) {
        bdE.classList.remove('notEvent');
        bdE.classList.add('end');
    }
}
/* nouvel an */
for (let bdE of boxDay) {
    if (bdE.innerHTML == 1 && GET == 01) {
        bdE.classList.remove('notEvent');
        bdE.classList.add('new');
    }
}
/* poisson d'avril */
for (let bdE of boxDay) {
    if (bdE.innerHTML == 1 && GET == 04) {
        bdE.classList.remove('notEvent');
        bdE.classList.add('poisson');
    }
}
/* patrick */
for (let bdE of boxDay) {
    if (bdE.innerHTML == 17 && GET == 03) {
        bdE.classList.remove('notEvent');
        bdE.classList.add('patrick');
    }
}
/* fêtes du travail */
for (let bdE of boxDay) {
    if (bdE.innerHTML == 1 && GET == 05) {
        bdE.classList.remove('notEvent');
        bdE.classList.add('work');
    }
}
/* Armistice */
for (let bdE of boxDay) {
    if (bdE.innerHTML == 11 && GET == 11) {
        bdE.classList.remove('notEvent');
        bdE.classList.add('Armistice');
    }
}
/* victoire du 8 mai */
for (let bdE of boxDay) {
    if (bdE.innerHTML == 08 && GET == 05) {
        bdE.classList.remove('notEvent');
        bdE.classList.add('victoire');
    }
}
/* today */
let today = document.getElementById('today').innerHTML;
let todayN = Number(today);
let monthsToday = document.getElementById('monthsToday').innerHTML;
let monthsTodayN = Number(monthsToday);
let yearsToday = document.getElementById('yearsToday').innerHTML;
let yearsTodayN = Number(yearsToday);
/* today */
for (let bdE of boxDay) {
    if (bdE.innerHTML == todayN && GET == monthsTodayN && GETY == yearsTodayN) {
        bdE.classList.remove('notEvent');
        bdE.classList.add('today');
    }
}