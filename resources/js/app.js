require('./bootstrap');

let deleteProfile = document.querySelector('.profile')
let cross = document.querySelectorAll('.profile__delete')

for (let element of cross) {
    element.onclick = () =>  deleteProfile.remove()
}




/* for (let element of cross) {
    element.onclick = function(){
        for (let element2 of deleteProfile) {
            element2.remove()
        }
    }
} */
