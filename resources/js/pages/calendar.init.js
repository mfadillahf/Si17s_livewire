/**
* Theme: Rizz - Bootstrap 5 Responsive Admin Dashboard
* Author: Mannatthemes
* Component: Full-Calendar
*/
import { Calendar } from "fullcalendar/index.js";
import dayGridPlugin from '@fullcalendar/daygrid'
import timeGridPlugin from '@fullcalendar/timegrid'
import dayGrid from '@fullcalendar/daygrid'


// original

document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');

    var calendar = new Calendar(calendarEl, {
        plugins: [ dayGridPlugin, timeGridPlugin, dayGrid ],
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        // defaultDate: '2024-06-12',
        timeZone: 'UTC +8:',
        initialView: 'dayGridMonth',
        editable: true,
        selectable: true,
        events: [
            {
                title: 'Business Lunch',
                start: '2024-06-03T13:00:00',
                constraint: 'businessHours',
            },
            {
                title: 'Meeting',
                start: '2024-06-13T11:00:00',
                constraint: 'availableForMeeting', // defined below
            },
            {
                title: 'Conference',
                start: '2024-06-27',
                end: '2024-06-29',
            },

            {
                title: 'Conference',
                start: '2024-03-27',
                end: '2024-02-29',
            },

            {
                groupId: 'availableForMeeting',
                start: '2024-06-15T10:00:00',
                end: '2024-06-15T16:00:00',
                title: 'holiday',
                className: 'bg-danger-subtle text-danger',
            },

            {
                groupId: 'availableForMeeting',
                start: '2024-02-15T10:00:00',
                end: '2024-02-15T16:00:00',
                title: 'holiday',
                className: 'bg-danger-subtle text-danger',
            },


            {
                start: '2024-06-06',
                end: '2024-06-08',
                overlap: false,
                title: 'New Event',
            }

        ],
    });

    calendar.render();
});




// edited

// function initializeCalendar() {
//     var calendarEl = document.getElementById('calendar');

//     if (calendarEl) {  // Cek apakah elemen #calendar ada
//         var calendar = new Calendar(calendarEl, {
//             plugins: [ dayGridPlugin, timeGridPlugin, dayGrid ],
//             headerToolbar: {
//                 left: 'prev,next today',
//                 center: 'title',
//                 right: 'dayGridMonth,timeGridWeek,timeGridDay'
//             },
//             timeZone: 'UTC +8:',
//             initialView: 'dayGridMonth',
//             editable: true,
//             selectable: true,
//             events: [
//                 // Tambahkan event di sini
//             ],
//         });

//         calendar.render();
//     } else {
//         console.error("Element with ID 'calendar' not found.");
//     }
// }

// // Menggunakan window.addEventListener untuk memuat FullCalendar setelah window siap
// window.addEventListener('load', initializeCalendar);

// // Inisialisasi ulang FullCalendar setelah Livewire merender ulang
// Livewire.hook('message.processed', (message, component) => {
//     if (document.querySelector('#tab-kalender.show.active')) {
//         initializeCalendar();
//     }
// });


