// Harga 0 to juta
let replaced
for (let i = 0; i < $('.harga').length; i++) {
    let harga = $('.harga')[i].innerText
    
    let harganumeral = numeral(harga).format('(Rp. 0.00 a)');
    
    $('.harga')[i].innerText = harganumeral
    hargaa = $('.harga')[i].innerText
    console.log(hargaa[hargaa.length - 1])
    switch (hargaa[hargaa.length - 1]) {
        case "b":
            replaced = hargaa.replace("b","M")
            break;
        case "m":
            replaced = hargaa.replace("m","juta")
            break;
        case "k":
            replaced = hargaa.replace("k","ribu")
            break;
        default:
            replaced = hargaa
            break;
    }
    $('.harga')[i].innerText = replaced
}


// Pengguna Table
$(document).ready( function () {
    $('#table-pengguna').DataTable();
} );
$(document).ready( function () {
    $('#table-petugas').DataTable();
} );