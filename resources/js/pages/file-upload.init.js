/**
 * Theme: Rizz - Bootstrap 5 Responsive Admin Dashboard
 * Author: Mannatthemes
 * Dropzone Js
 */
// old
const fileUploader = document.getElementById('input-file');

const handleChange = function () {
    const getFile = fileUploader.files
    if (getFile.length !== 0) {
        const uploadedFile = getFile[0];
        readFile(uploadedFile);
    }
}

const readFile = function (uploadedFile) {
    if (uploadedFile) {
        const reader = new FileReader();
        reader.onload = function () {
            const parent = document.querySelector('.preview-box');
            parent.innerHTML = `<img class="preview-content" src=${reader.result} alt=""/>`;
        };

        reader.readAsDataURL(uploadedFile);
    }
};

fileUploader.addEventListener('change', handleChange)

// edit
// document.addEventListener('livewire:load', function () {
//     const fileUploader = document.getElementById('input-file');

//     // Fungsi untuk menangani perubahan pada input file
//     const handleChange = function () {
//         const getFile = fileUploader.files;
//         if (getFile.length !== 0) {
//             const parent = document.querySelector('.preview-box');
//             parent.innerHTML = ""; // Kosongkan preview sebelumnya

//             Array.from(getFile).forEach(uploadedFile => {
//                 readFile(uploadedFile);
//             });
//         }
//     };

//     // Fungsi untuk membaca file yang diunggah dan menampilkan pratinjau
//     const readFile = function (uploadedFile) {
//         if (uploadedFile) {
//             const reader = new FileReader();
//             reader.onload = function () {
//                 const parent = document.querySelector('.preview-box');
//                 const img = document.createElement('img');
//                 img.classList.add('preview-content');
//                 img.src = reader.result;
//                 img.style.maxWidth = '150px'; // Atur lebar maksimum
//                 img.style.maxHeight = '150px'; // Atur tinggi maksimum
//                 parent.appendChild(img); // Tambahkan gambar ke dalam kontainer
//             };

//             reader.readAsDataURL(uploadedFile);
//         }
//     };

//     // Pasang event listener pada input file
//     fileUploader.addEventListener('change', handleChange);
// });

// // Pastikan untuk memasang event listener lagi setelah Livewire melakukan update
// document.addEventListener('livewire:updated', function () {
//     const fileUploader = document.getElementById('input-file');
//     if (fileUploader) {
//         fileUploader.addEventListener('change', handleChange);
//     }
// });


