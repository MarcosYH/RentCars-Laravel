<section class="relative h-72 flex flex-col justify-center align-center text-center space-y-4 mb-4">
  <div class="absolute top-0 left-0 w-full h-full opacity-75 bg-no-repeat bg-center"
    style="background-image: url('images/no-image4.png')"> </div>

  <div class="z-10">
    <h1 class="text-6xl font-bold uppercase text-blue-800">
      Car<span class="text-black">Shop</span>
    </h1>
    <p class="text-2xl text-blue-500 font-bold my-4">
     Trouvez le véhicule que vous désirez
    </p>
    <div>
      @auth
      @else
        <a href="/register"
        class=" bg-white inline-block border-2 border-white text-black-800 font-bold py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black">Inscrivez-vous gratuitement</a>

      @endauth
    </div>
  </div>
</section>
