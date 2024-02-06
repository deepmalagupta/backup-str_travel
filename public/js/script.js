window.onload = function(){
    const sidebar = document.querySelector(".sidebar");
    const closeBtn = document.querySelector("#btn");
    const searchBtn = document.querySelector(".bx-search");
    // const item = document.querySelector("#btn_2");
    const item_2 = document.querySelectorAll(".php_submenu");
    /*const item_3 = document.querySelector("#btn_4");*/
 
    // // closeBtn.addEventListener("click",function(){
    // //     item_2.classList.toggle("open")
    // //     menuBtnChange()
    // // })
 
    // /*item_3.addEventListener("click",function(){
    //     sidebar.classList.add("open")
    //     menuBtnChange()
    // })
 
 
    // item.addEventListener("click",function(){
    //     sidebar.classList.add("open")
    //     menuBtnChange()
    // })

    item.addEventListener("click",function(){
        sidebar.classList.add("open")
        menuBtnChange()
    })*/
 
 
    item_2.forEach(function(item) {
        item.addEventListener("click", function(e) {
            e.preventDefault();
            sidebar.classList.add("open")
            menuBtnChange()
        })
    })
 
    closeBtn.addEventListener("click",function(){
        item_2.classList.toggle("open")
        menuBtnChange()
    })
 
    closeBtn.addEventListener("click",function(){
        sidebar.classList.toggle("open")
        menuBtnChange()
    })
 
    /*item.addEventListener("click",function(){
        sidebar.classList.add("open")
        menuBtnChange()
    })*/
 
    /*searchBtn.addEventListener("click",function(){
        sidebar.classList.toggle("open")
        menuBtnChange()
    })*/
 
    function menuBtnChange(){
        if(sidebar.classList.contains("open")){
            closeBtn.classList.replace("bx-menu","bx-menu-alt-right")
        }else{
            closeBtn.classList.replace("bx-menu-alt-right","bx-menu")
        }
    }
}
 
// side sub menu js
$(document).ready(function () {
    // Toggle submenu on click
    $(".menu-item").click(function () {
      $(this).toggleClass("active");
    });
  });
 
 
  // Initiate the wowjs
    new WOW().init();
 
 