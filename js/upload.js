console.log('upload js connected....!');

const group = document.querySelector('#group');
const bio_cs = document.querySelector('.bio_cs-lable');
const bio_csDiv = document.querySelector('.bio_cs');

group.addEventListener('change',function(){

    if (group.value === '') {
        bio_csDiv.style.display = 'none'
        alert('not selected');
    }else if (group.value === 'biology') {
        bio_csDiv.style.display = 'block'
        bio_cs.innerHTML = "Biology Mark";
    }else{
        bio_csDiv.style.display = 'block'
        bio_cs.innerHTML = "Computer Science Mark";
    }

});

const error_msg = document.querySelector(".error");
const popUp = document.querySelector('.popup');
console.log(error_msg.innerHTML.length);

function error_popUp() {
    if (error_msg.innerHTML.length > 0) {
        popUp.style.scale = 1;
    }
}
error_popUp();

const popup_close = document.querySelector('.popup_close');

popup_close.addEventListener('click', function(){
    popUp.style.scale = 0;
})