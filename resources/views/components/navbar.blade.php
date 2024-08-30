<div>
    <div class="container max-w-5xl mx-auto">
        <nav class="text-white w-full h-16 flex justify-between items-center">
          <div>
            <span
              onclick="navigationHandler('home')"
              class="font-bold text-4xl cursor-pointer"
            >
              LOGO
            </span>
          </div>
          <div>
            <ul class="flex gap-6 items-center cursor-pointer">
              <li
                class="font-medium text-[18px] hidden md:inline-block"
                onclick="navigationHandler('home')"
              >
                Home
              </li>
              <li
                class="font-medium text-[18px] hidden md:inline-block"
                onclick="navigationHandler('contact')"
              >
                Contact us
              </li>
            </ul>
          </div>
        </nav>
        
      </div>
      
      <script>
        const navigationHandler = (type) => {
          if (type === "contact") {
            window.location.href = "/contact";
          } else {
            window.location.href = "/";
          }
        };
      </script>
      

</div>