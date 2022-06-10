// Ambil elemen
var keyword = document.getElementById("keyword");
var tombolCari = document.getElementById("tombol-cari");
var cari = document.getElementById("cari");

tombolCari.addEventListener("keyup", function () {
  // Buat object AJAX
  var xhr = new XMLHttpRequest();

  // Mengecek kesiapan AJAX
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      container.innerHTML = xhr.responeText;
    }
  };

  // Eksekusi AJAX
  // Parameter pertama Methodnya apa?
  // Parameter kedua sumbernya dari mana?
  // Parameter ketiga tipe Sync or Async
  xhr.open("GET", "ajax/index.php?keyword=" + keyword.value, true);
  xhr.send();
});
