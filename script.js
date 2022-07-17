const btn = document.querySelectorAll(".trending-btns");
const TrendingTVshows = document.getElementsByClassName("trending-tv-shows")[0];
const TrendingMovies = document.getElementsByClassName("trending-movies")[0];
const loginbtn = document.querySelector(".login-btn");
const Login_close_btn = document.querySelector(".form-close-btn");
const popup = document.querySelector(".modal");
TrendingTVshows.style.display = 'none';
btn[0].addEventListener("click", () => {
    if (!btn[0].classList.contains('btn-active')) {
        btn[0].classList.add('btn-active');
        btn[1].classList.remove('btn-active');
        TrendingTVshows.style.display = "none";
        TrendingMovies.style.display = "grid";
    }
})
btn[1].addEventListener("click", () => {
    if (!btn[1].classList.contains('btn-active')) {
        btn[1].classList.add('btn-active');
        btn[0].classList.remove('btn-active');
        TrendingMovies.style.display = "none";
        TrendingTVshows.style.display = "grid";
        }
    })
loginbtn.addEventListener("click", () => {
    popup.showModal();
})
Login_close_btn.addEventListener("click", () => {
    popup.close();
})