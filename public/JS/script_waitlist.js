window.innerWidth<768&&[].slice.call(document.querySelectorAll("[data-bss-disabled-mobile]")).forEach((function(t){t.classList.remove("animated"),t.removeAttribute("data-bss-hover-animate"),t.removeAttribute("data-aos"),t.removeAttribute("data-bss-parallax-bg"),t.removeAttribute("data-bss-scroll-zoom")})),document.addEventListener("DOMContentLoaded",(function(){"AOS"in window&&AOS.init();[].slice.call(document.querySelectorAll("[data-bss-hover-animate]")).forEach((function(t){t.addEventListener("mouseenter",(function(t){t.target.classList.add("animated",t.target.dataset.bssHoverAnimate)})),t.addEventListener("mouseleave",(function(t){t.target.classList.remove("animated",t.target.dataset.bssHoverAnimate)}))}))}),!1),$(document).ready((function(){$(".mydatatable").DataTable({dom:"Bfrtip",buttons:["copy","csv","excel","pdf","print"],scrollY:300,scrollX:!0,autoWidth:!1,scrollCollapse:!0,paging:!1})}));