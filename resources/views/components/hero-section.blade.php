<div>
    <div class="text-white font-bold py-36 text-center space-y-5">
        <div class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl space-y-5 font-extrabold">
          <h1>The Best Website to</h1>
          <div class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
            <span id="typewriter"></span>
          </div>
        </div>
        <div class="text-sm md:text-xl font-light text-zinc-400">
          Send email's easier.
        </div>
        <div>
          <button
            onclick="navigateToShop()"
            class="bg-gradient-to-r from-purple-400 to-pink-600 md:text-lg p-4 md:p-6 rounded-full font-semibold"
          >
            Contact us
          </button>
        </div>
        <div class="text-zinc-400 text-xs md:text-sm font-normal">
          No credit card required.
        </div>
      </div>
      
      <script src="https://cdn.jsdelivr.net/npm/typewriter-effect/dist/core.js"></script>
      <script>
        const typewriter = new Typewriter("#typewriter", {
          strings: [
            "Send Email.",
          ],
          autoStart: true,
          loop: true,
        });
      
        const navigateToShop = () => {
          window.location.href = "/contact";
        };
      </script>
        
</div>