const openPopUp = document.getElementById("open-pop-up");
const openPopUpX = document.getElementById("open-pop-up-x2");
const closePopUp = document.getElementById("close_pop_up");
const popUp = document.getElementById("pop_up");



openPopUp.addEventListener('click', function(e){
    e.preventDefault();
    popUp.classList.add('active');
})

openPopUpX.addEventListener('click', function(e){
    e.preventDefault();
    popUp.classList.add('active');
})

closePopUp.addEventListener('click', ()=> {
    popUp.classList.remove('active');
})

