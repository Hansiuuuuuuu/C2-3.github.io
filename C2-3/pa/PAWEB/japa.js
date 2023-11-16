const toggle = document.getElementById('toggleDark');
const body = document.querySelector('body');

toggle.addEventListener('click', function(){
    this.classList.toggle('bi-moon');
    if(this.classList.toggle('bi-brightness-high-fill')){
        body.style.background = 'white';
        body.style.color = 'black';
        body.style.transition = '2s';
    }else{
        body.style.background = 'black';
        body.style.color = 'white';
        body.style.transition = '2s';
    }
});


//pop up box

function openMessageBox() {
    document.getElementById("overlay").style.display = "block";
    document.getElementById("popupBox").style.display = "block";
}

function closeMessageBox() {
    document.getElementById("overlay").style.display = "none";
    document.getElementById("popupBox").style.display = "none";
}

function sendMessage() {
    // Logika untuk mengirim pesan
    alert("Pesan berhasil dikirim!");
    closeMessageBox();
}
