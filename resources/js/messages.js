$(function () {

    let toHide = document.querySelector('.profile__delete')
    let successMessage = document.querySelector('.alert-success')

    toHide.onclick = () => successMessage.classList.add('hidden')

});
