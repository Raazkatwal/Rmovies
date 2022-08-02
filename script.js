const loginbtn = document.querySelector(".login-btn");
const Login_close_btn = document.querySelector(".form-close-btn");
const popup = document.querySelector(".modal");
loginbtn.addEventListener("click", () => {
    popup.showModal();
    console.log("ye kya ho raha hai ?");
})
Login_close_btn.addEventListener("click", () => {
    popup.close();
})