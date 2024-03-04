
<!-- navbar section -->
<section class="bg-dark-blue-grashish w-full">
    <nav class="w-[90%] max-w-screen-xl mx-auto text-white py-5 md:py-4 flex items-center justify-between">
        <h1 class="font-bold uppercase md:text-xl">SOYUS SAC</h1>

        <img src="./src/images/menu.svg" alt="menu-icon" class="cursor-pointer md:hidden" id="menu-open">

        <!-- menu lateral mobile-->
        <div class="absolute inset-0 bg-yellow-lime h-full p-10 text-center flex items-center justify-center -translate-y-full transition-transform duration-[400ms] ease md:hidden z-[100]" id="menu-lateral">
            <img src="./src/images/close-menu.svg" alt="" class="w-10 absolute top-4 right-4 cursor-pointer" id="menu-close">

            <ul class="text-dark-blue text-xl space-y-10 font-medium">
                <li>
                    <a href="#">Inicio</a>
                </li>
                <li>
                    <a href="#">Vuelos</a>
                </li>
                <li>    
                    <a href="#" class="bg-green-lime flex gap-2 text-white px-8 py-3 rounded-xl hover:bg-lime-600 transition-colors">
                        <img src="./src/images/user-nosesion.svg" alt="">
                        Login
                    </a>
                </li>
                <li>
                    <a href="#" class="bg-dark-blue flex gap-2 text-white px-8 py-3 rounded-xl hover:bg-dark-blue-grashish transition-colors">
                        Registrarse
                    </a>
                </li>
            </ul>
        </div>

        <!-- menu desktop -->
        <div class="hidden md:block">
            <ul class="flex items-center space-x-5 lg:space-x-10">
                <li>
                    <a href="#">Inicio</a>
                </li>
                <li>
                    <a href="#">Vuelos</a>
                </li>
                <li>    
                    <a href="#" class="bg-green-lime flex gap-2 text-white px-8 py-3 rounded-xl hover:bg-lime-600 transition-colors">
                        <img src="./src/images/user-nosesion.svg" alt="">
                        Login
                    </a>
                </li>
                <li>
                    <a href="#" class="bg-dark-blue flex gap-2 text-white px-8 py-3 rounded-xl hover:bg-white hover:text-dark-blue transition-colors">
                        Registrarse
                    </a>
                </li>
            </ul>
        </div>
        
    </nav>
</section>
