<header class="w-full">
        <!-- navbar section -->
        
        <?php 
            require_once('../SoyusSac/src/templates/nabvar.php')
        ?>

        <section class="w-[90%] mx-auto my-6 sm:my-8 md:my-10 bg-tourism-header bg-cover bg-center bg-no-repeat rounded-xl overflow-hidden py-20 px-4 sm:px-10 md:sm:px-20 relative">
            <div class="bg-dark-blue/50 absolute inset-0"></div>
            <div class="text-white text-center sm:text-left space-y-7 sm:max-w-md relative z-10">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold font-madimiOne">
                    Viajes espectarulares, experiencias inolvidables
                </h2>
                <p class="font-notoJP leading-8">
                    Comienza a viajar a cualquier destino con la mejor agencia de viajes. Comienza a adquirir un vuelo y disfruta del viaje.
                </p>

                <a href="#" class="py-4 px-6 text-white text-lg font-madimiOne inline-block bg-green-lime rounded-xl hover:bg-lime-500 transition-colors">Contactar Ahora</a>
            </div>
        </section>
    </header>
    
    <main>
        <!-- seccion vuelos -->
        <section class="w-full bg-yellow-soft py-20">
            <div class="w-[90%] mx-auto">
                <h3 class="text-3xl sm:text-4xl md:text-5xl font-madimiOne text-center text-dark-blue ">Disfruta de nuestros vuelos desde <span class="text-green-lime">precios económicos</span>
                </h3>

                <!-- seccion de cards vuelos -->
                <section class="mt-8 md:mt-14 grid md:grid-cols-2 xl:grid-cols-3 gap-6 justify-center justify-items-center items-center">
                    <article class="font-madimiOne rounded-xl w-full relative overflow-hidden group max-w-md h-[500px]">
                        <img src="./src/images/cusco-card.jpg" class="rounded-2xl brightness-50 object-cover " alt="card-cusco">                        

                        <h3 class="text-white absolute top-5 left-5 uppercase text-3xl">Viaje a Cuzco</h3>

                        <div class="absolute bottom-0 inset-x-0 bg-white w-full text-dark-blue font-notoJP px-4 py-6 space-y-4 translate-y-full z-10 group-hover:translate-y-0 transition-transform duration-[400ms] ease-in" id="card-content">
                            <p class="text-dark-blue-grashish md:text-lg">Disfruta del agradable clima de Cuzo y sus maravillosos paisajes y lugares turisticos.</p>

                            <div class="">
                                <p class="font-madimiOne">Fecha de Salida: <span class="font-notoJP">01/02/2024</span></p>

                                <p class="font-madimiOne">Fecha de Retorno: <span class="font-notoJP">04/02/2024</span>
                                </p>

                                <p class="font-madimiOne">Precio Unitario: <span class="font-notoJP">S/495.90</span>
                                </p>
                            </div>
                            
                            <a href="#" class="block text-center text-white bg-green-lime hover:bg-lime-500 py-2 rounded-lg transition-colors">!Comprar ya¡</a>
                        </div>
                        <!-- <h4 class="text-center font-medium text-2xl text-white">Viaje a Cusco</h4> -->
                    </article>
                    
                </section>
            </div>
        </section>
    </main>

   <?php 
        include_once('../SoyusSac/src/templates/footer.php')
   ?>

<script src="./src/js/menu-lateral.js"></script>