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
function nextStep() {
    document.getElementById("step1").classList.add("hidden");
    document.getElementById("step2").classList.remove("hidden");
  }
  function prevStep() {
    document.getElementById("step2").classList.add("hidden");
    document.getElementById("step1").classList.remove("hidden");
  }