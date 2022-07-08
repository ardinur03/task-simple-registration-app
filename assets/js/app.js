let elems = document.getElementsByClassName('confirm');
let confirmIt = function(e) {
    if (!confirm('Apakah yakin akan dihapus?')) e.preventDefault();
};

for (let i = 0, l = elems.length; i < l; i++) {
    elems[i].addEventListener('click', confirmIt, false);
}

//  untuk menonaktifkan pengiriman formulir jika ada bidang yang tidak valid
(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Ambil semua request form yang ingin di validasi Bootstrap khusus
        var forms = document.getElementsByClassName('needs-validation');

        // ketika input type submit di kilk 
        var validation = Array.prototype.filter.call(forms, function(form) {

            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) { // jika validasinya false atau salah  
                    event.preventDefault(); // maka hentikan aksi default dari elemen terjadi
                    event.stopPropagation();
                }
                form.classList.add('was-validated');

            }, false);

        });
    }, false);

})();


$(function() {
    $('[data-toggle="tooltip"]').tooltip()
})