const ep_btn = document.querySelectorAll(".episode-btn");
ep_btn.forEach(e => {
    e.addEventListener("click", ()=>{
        ep_btn.forEach(f => {
            if (f.classList.contains("active")) {
                f.classList.remove("active");
            }
        });
        e.classList.add("active");
    })
});