// Dapatkan elemen yang diperlukan
const openLoginBtn = document.getElementById("openLogin");
const loginPopup = document.getElementById("login-popup");
const closeBtn = document.getElementById("close");

// Tampilkan pop-up login saat tombol "Login" diklik
openLoginBtn.addEventListener("click", () => {
  loginPopup.style.display = "block";
});

// Sembunyikan pop-up login saat tombol "Tutup" diklik
closeBtn.addEventListener("click", () => {
  loginPopup.style.display = "none";
});
