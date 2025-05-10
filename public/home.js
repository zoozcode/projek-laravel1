const humberger = document.querySelector(".ri-menu-line");
const menu = document.querySelector(".menu");
humberger.addEventListener("click", ()=>{
   menu.classList.toggle("menu-active");
});

window.onscroll = ()=>{
   menu.classList.remove("menu-active");
};

const btnFilter = document.querySelectorAll(".produk-box ul li");
const imgItem = document.querySelectorAll(".produk-list-img");

btnFilter.forEach(data => {
   data.onclick = ()=>{
      btnFilter.forEach(data =>{
         data.className = "";
      });

      data.className = "active";

      // filter image
      const btnText = data.textContent;
      imgItem.forEach((img) => {
         img.style.display = "none";
         if (img.getAttribute("data-filter") == btnText.toLowerCase() || btnText == "All produk"){
            img.style.display = "block";
         }
      });
   };
});
