/**
 * Theme: Rizz - Bootstrap 5 Responsive Admin Dashboard
 * Author: Mannatthemes
 * Dropzone Js
 */

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
