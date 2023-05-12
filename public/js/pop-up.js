document.addEventListener("DOMContentLoaded",function(){

    var modalpop = document.getElementById('modalpop');
    

    document.getElementById('linkModal').addEventListener('click',function(){
        modalpop.classList.remove('offmodal');
        modalpop.classList.add('onmodal');

    },false)

    document.querySelector('.closet').addEventListener('click',function(){
        modalpop.classList.remove('onmodal');
        modalpop.classList.add('offmodal');
    },false)


});