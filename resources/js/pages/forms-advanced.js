/**
 * Theme: Rizz - Bootstrap 5 Responsive Admin Dashboard
 * Author: Mannatthemes
 * Form Advanced Js
 */
import Selectr from 'mobius1-selectr/src/selectr'
import Huebee from 'huebee/dist/huebee.pkgd'
import { Datepicker, DateRangePicker } from 'vanillajs-datepicker';
import IMask from 'imask'

// JS selectr edit
let selectrInstances = {};

function initializeSelectr() {
    // Hancurkan instansi Selectr yang ada sebelum inisialisasi baru
    Object.keys(selectrInstances).forEach(key => {
        if (selectrInstances[key]) {
            selectrInstances[key].destroy();
        }
    });

    // Inisialisasi Selectr baru
    if (document.querySelector('#default')) {
        selectrInstances.default = new Selectr('#default');
    }
    if (document.querySelector('#multiSelect')) {
        selectrInstances.multiSelect = new Selectr('#multiSelect', {
            multiple: true
        });
    }
    if (document.querySelector('#taggableSelect')) {
        selectrInstances.taggableSelect = new Selectr('#taggableSelect', {
            taggable: true,
            tagSeperators: [",", "|"]
        });
    }
}

// Inisialisasi Selectr pertama kali saat halaman di-load
document.addEventListener('DOMContentLoaded', initializeSelectr);

// Inisialisasi ulang Selectr setiap kali Livewire melakukan render ulang
document.addEventListener('livewire:rendered', initializeSelectr);


// js selecrt original
// new Selectr('#default');
// new Selectr('#multiSelect',{
//     multiple: true
// });
// new Selectr('#taggableSelect',{
//     taggable: true,
//     tagSeperators: [",", "|"]
// });

// color

// var hueb = new Huebee( '.color-input', {
//     // options
//     setBGColor: true,
//     saturations: 3,
//   });

// // Datepicker

// var elem = document.querySelector('input[name="foo"]');
// new Datepicker(elem, {
// }); 


// elem = document.getElementById('inline_calendar');
// new Datepicker(elem, {
//   // ...options
// });

// elem = document.getElementById('DateRange');
// new DateRangePicker(elem, {
//   format: 'yyyy-mm-dd', // Contoh format tanggal
//   language: 'en',       // Atur bahasa sesuai kebutuhan
//   minDate: new Date(),  // Contoh batasan tanggal, mulai dari hari ini
//   // ...options
// }); 

// // Imask

// var regExpMask = IMask(
//   document.getElementById('regexp-mask'),
//   {
//     mask: /^[1-6]\d{0,5}$/
// });

// var startPhoneMask = IMask(document.getElementById('start-phone-mask'), {
//   mask: '+{7}(000)000-00-00'
// }).on('accept', function() {
//   document.getElementById('start-phone-complete').style.display = '';
//   document.getElementById('start-phone-unmasked').innerHTML = startPhoneMask.unmaskedValue;
// }).on('complete', function() {
//   document.getElementById('start-phone-complete').style.display = 'inline-block';
// });

// var overwriteMask = IMask(
//   document.getElementById('date-overwrite-mask'),
//   {
//     mask: Date,
//     lazy: false,
//     overwrite: true,
//     autofix: true,
//     blocks: {
//       d: {mask: IMask.MaskedRange, placeholderChar: 'd', from: 1, to: 31, maxLength: 2},
//       m: {mask: IMask.MaskedRange, placeholderChar: 'm', from: 1, to: 12, maxLength: 2},
//       Y: {mask: IMask.MaskedRange, placeholderChar: 'y', from: 1900, to: 2999, maxLength: 4}
//     }
//   }
// );

// IMask(document.getElementById('uppercase-mask'), {
//   mask: /^\w+$/,
//   prepare: function (str) {
//     return str.toUpperCase();
//   },
//   commit: function (value, masked) {
//     // Don't change value manually! All changes should be done in mask!
//     // But it works and helps to understand what is really change
//     masked._value = value.toLowerCase();
//   }
// });

// var momentFormat = 'YYYY/MM/DD HH:mm';
//     var momentMask = IMask(document.getElementById('moment-mask'), {
//       mask: Date,
//       pattern: momentFormat,
//       lazy: false,
//       min: new Date(1970, 0, 1),
//       max: new Date(2030, 0, 1),

//       format: function (date) {
//         return moment(date).format(momentFormat);
//       },
//       parse: function (str) {
//         return moment(str, momentFormat);
//       },

//       blocks: {
//         YYYY: {
//           mask: IMask.MaskedRange,
//           from: 1970,
//           to: 2030
//         },
//         MM: {
//           mask: IMask.MaskedRange,
//           from: 1,
//           to: 12
//         },
//         DD: {
//           mask: IMask.MaskedRange,
//           from: 1,
//           to: 31
//         },
//         HH: {
//           mask: IMask.MaskedRange,
//           from: 0,
//           to: 23
//         },
//         mm: {
//           mask: IMask.MaskedRange,
//           from: 0,
//           to: 59
//         }
//       }
//     }).on('accept', function() {
//       document.getElementById('moment-value').innerHTML = momentMask.masked.date || '-';
//     });