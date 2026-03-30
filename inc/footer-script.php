<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
      <script>
         const slider = document.getElementById("depositSlider");
         const depositAmount = document.getElementById("depositAmount");
         const avgReturn = document.getElementById("avgReturn");
         const saviumReturn = document.getElementById("saviumReturn");

         function updateCalculator(){

         let amount = parseFloat(slider.value);

         depositAmount.innerText =
         "£" + amount.toLocaleString() + ".00";

         let avg = amount * 2.21 / 100;
         let savium = amount * 4.13 / 100;

         avgReturn.innerText =
         "£" + avg.toFixed(2);

         saviumReturn.innerText =
         "£" + savium.toFixed(2);

         }

         slider.addEventListener("input", updateCalculator);

         updateCalculator();
      </script>

      <script>
         document.addEventListener("DOMContentLoaded", function () {
         new Swiper(".testimonial-swiper", {
            slidesPerView: 1,
            loop: true,
            speed: 600,
            autoHeight: false,
            navigation: {
               nextEl: ".custom-next",
               prevEl: ".custom-prev"
            }
         });
         });
      </script>
      <script>
         document.querySelectorAll(".faq-question").forEach(btn=>{
         btn.addEventListener("click",function(){

            const item = this.parentElement;

            item.classList.toggle("active");

         });
         });
      </script>

      <script>
         document.addEventListener("DOMContentLoaded", function () {
         const slider = document.querySelector(".savium-1nklwu3");
         if (!slider) return;

         let isDown = false;
         let startX;
         let scrollLeft;

         slider.addEventListener("mousedown", (e) => {
            isDown = true;
            startX = e.pageX - slider.offsetLeft;
            scrollLeft = slider.scrollLeft;
         });

         slider.addEventListener("mouseleave", () => {
            isDown = false;
         });

         slider.addEventListener("mouseup", () => {
            isDown = false;
         });

         slider.addEventListener("mousemove", (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - slider.offsetLeft;
            const walk = (x - startX) * 1.5;
            slider.scrollLeft = scrollLeft - walk;
         });
         });
      </script>

      <script>
         document.addEventListener("DOMContentLoaded", function () {
         const toggle = document.querySelector(".mobile-nav-toggle");
         const panel = document.getElementById("mobileNav");
         if (!toggle || !panel) return;
         toggle.addEventListener("click", function () { panel.classList.toggle("open"); });
         panel.querySelectorAll("a").forEach(function(link){ link.addEventListener("click", function(){ panel.classList.remove("open"); }); });
         document.addEventListener("click", function(e){
            if (!panel.classList.contains("open")) return;
            if (!panel.contains(e.target) && !toggle.contains(e.target)) panel.classList.remove("open");
         });
         });
      </script>