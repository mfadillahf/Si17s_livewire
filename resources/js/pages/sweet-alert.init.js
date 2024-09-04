/**
 * Theme: Rizz - Bootstrap 5 Responsive Admin Dashboard
 * Author: Mannatthemes
 * Sweet Alert Js
 */
import Swal from "sweetalert2";
import 'sweetalert2/dist/sweetalert2'

document.getElementById('basicMessage').addEventListener("click", function () {
  Swal.fire({
    text: 'Any fool can use a computer',
  })
});

document.getElementById('titleText').addEventListener("click", function () {
  Swal.fire(
    'The Internet?',
    'That thing is still around?',
    'question'
  )
});

document.getElementById('errorType').addEventListener("click", function () {
  Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: 'Something went wrong!',
    footer: '<a href>Why do I have this issue?</a>'
  })
});

document.getElementById('customHtml').addEventListener("click", function () {
  Swal.fire({
    title: '<strong>HTML <u>example</u></strong>',
    icon: 'info',
    html:
      'You can use <b>bold text</b>, ' +
      '<a href="//sweetalert2.github.io">links</a> ' +
      'and other HTML tags',
    showCloseButton: true,
    showCancelButton: true,
    focusConfirm: false,
    confirmButtonText:
      '<i class="fa fa-thumbs-up"></i> Great!',
    confirmButtonAriaLabel: 'Thumbs up, great!',
    cancelButtonText:
      '<i class="fa fa-thumbs-down"></i>',
    cancelButtonAriaLabel: 'Thumbs down'
  })
});

document.getElementById('threeButtons').addEventListener("click", function () {
  Swal.fire({
    title: 'Do you want to save the changes?',
    showDenyButton: true,
    showCancelButton: true,
    confirmButtonText: `Save`,
    denyButtonText: `Don't save`,
  }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
      Swal.fire('Saved!', '', 'success')
    } else if (result.isDenied) {
      Swal.fire('Changes are not saved', '', 'info')
    }
  })
});

document.getElementById('customPosition').addEventListener("click", function () {
  Swal.fire({
    position: 'top-end',
    icon: 'success',
    title: 'Your work has been saved',
    showConfirmButton: false,
    timer: 1500
  })
});

document.getElementById('customAnimation').addEventListener("click", function () {
  Swal.fire({
    title: 'Custom animation with Animate.css',
    showClass: {
      popup: 'animate__animated animate__fadeInDown'
    },
    hideClass: {
      popup: 'animate__animated animate__fadeOutUp'
    }
  })
});

document.getElementById('warningConfirm').addEventListener("click", function () {
  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!',
  }).then(function (result) {
    if (result.isConfirmed) {
      Swal.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success'
      )
    }
  })
});

document.getElementById('handleDismiss').addEventListener("click", function () {
  let swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-success',
      cancelButton: 'btn btn-danger me-2'
    },
    buttonsStyling: false
  })

  swalWithBootstrapButtons.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Yes, delete it!',
    cancelButtonText: 'No, cancel!',
    reverseButtons: true
  }).then((result) => {
    if (result.isConfirmed) {
      swalWithBootstrapButtons.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success'
      )
    } else if (
      /* Read more about handling dismissals below */
      result.dismiss === Swal.DismissReason.cancel
    ) {
      swalWithBootstrapButtons.fire(
        'Cancelled',
        'Your imaginary file is safe :)',
        'error'
      )
    }
  })
});

document.getElementById('customImage').addEventListener("click", function () {
  Swal.fire({
    title: 'Rizz!',
    text: 'Modal with a Brand Logo.',
    imageUrl: '/images/logo-sm.png',
    imageWidth: 80,
    imageHeight: 80,
    imageAlt: 'Custom image',
  })
});

document.getElementById('customWidth').addEventListener("click", function () {
  Swal.fire({
    title: 'Custom width, padding, background.',
    width: 600,
    padding: 50,
    background: 'rgba(254,254,254,0.01)  url(/images/bg-body.jpg) ',
    backgroundSize: 'cover',
    backgroundPosition: 'center',
  })
});

document.getElementById('timer').addEventListener("click", function () {
  let timerInterval
  Swal.fire({
    title: 'Auto close alert!',
    html: 'I will close in <b></b> milliseconds.',
    timer: 2000,
    timerProgressBar: true,
    didOpen: () => {
      Swal.showLoading()
      timerInterval = setInterval(() => {
        const content = Swal.getContent()
        if (content) {
          const b = content.querySelector('b')
          if (b) {
            b.textContent = Swal.getTimerLeft()
          }
        }
      }, 100)
    },
    willClose: () => {
      clearInterval(timerInterval)
    }
  }).then((result) => {
    /* Read more about handling dismissals below */
    if (result.dismiss === Swal.DismissReason.timer) {
      console.log('I was closed by the timer')
    }
  })
});

document.getElementById('rtl').addEventListener("click", function () {
  Swal.fire({
    title: 'هل تريد الاستمرار؟',
    icon: 'question',
    iconHtml: '؟',
    confirmButtonText: 'نعم',
    cancelButtonText: 'لا',
    showCancelButton: true,
    showCloseButton: true
  })
});

document.getElementById('ajaxRequest').addEventListener("click", function () {
  Swal.fire({
    title: 'Submit your Github username',
    input: 'text',
    inputAttributes: {
      autocapitalize: 'off'
    },
    showCancelButton: true,
    confirmButtonText: 'Look up',
    showLoaderOnConfirm: true,
    preConfirm: (login) => {
      return fetch(`//api.github.com/users/${login}`)
        .then(response => {
          if (!response.ok) {
            throw new Error(response.statusText)
          }
          return response.json()
        })
        .catch(error => {
          Swal.showValidationMessage(
            `Request failed: ${error}`
          )
        })
    },
    allowOutsideClick: () => !Swal.isLoading()
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire({
        title: `${result.value.login}'s avatar`,
        imageUrl: result.value.avatar_url
      })
    }
  })
});

document.getElementById('mixin').addEventListener("click", function () {
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })

  Toast.fire({
    icon: 'success',
    title: 'Signed in successfully'
  })
});

document.getElementById('declarativeTemplate').addEventListener("click", function () {
  Swal.fire({
    template: '#my-template',
  })
});

document.getElementById('TriggerModalToast').addEventListener("click", function () {
  Swal.bindClickHandler()
  Swal.mixin({
    toast: true,
  }).bindClickHandler('data-swal-toast-template')
});

document.getElementById('success').addEventListener("click", function () {
  Swal.fire({
    icon: 'success',
    title: 'Your work has been saved',
    timer: 1500
  })
});

document.getElementById('error').addEventListener("click", function () {
  Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: 'Something went wrong!',
  })
});

document.getElementById('warning').addEventListener("click", function () {
  Swal.fire({
    icon: 'warning',
    title: 'Oops...',
    text: 'Icon warning!',
  })
});

document.getElementById('info').addEventListener("click", function () {
  Swal.fire({
    icon: 'info',
    title: 'Oops...',
    text: 'Icon info!',
  })
});

document.getElementById('question').addEventListener("click", function () {
  Swal.fire({
    icon: 'question',
    title: 'Oops...',
    text: 'Icon question!',
  })
});
