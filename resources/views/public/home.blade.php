@extends('layouts.main')
@section('content')
    <!-- about me section start -->
    <div>
        <div class="lg:rounded-2xl bg-white dark:bg-[#111111]">
            <div class="pt-12 md:py-12 px-2 sm:px-5 md:px-10 lg:px-14">
                <!-- about page title -->
                <h2 class="after-effect after:left-52">Sobre mi</h2>
                <!-- personal info for mobile devices start -->
                <div class="lg:hidden">
                    <div
                        class="w-full mb-6 lg:mb-0 mx-auto relative bg-white text-center dark:bg-[#111111] px-6 rounded-[20px] mt-[180px] md:mt-[220px] lg:mt-0">
                        <!-- profile image  -->
                        <img src="{{asset('images/LOGO.jpg')}}"
                            class="w-[240px] absolute left-[50%] transform -translate-x-[50%] h-[240px] drop-shadow-xl mx-auto rounded-[20px] -mt-[140px]"
                            alt="about" />
                        <div class="pt-[100px] pb-8">
                            <h2 class="mt-6 mb-1 text-[26px] font-semibold dark:text-white"> Ismael Catalá Gil
                            </h2>
                            <h3
                                class="mb-4 text-[#7B7B7B] inline-block dark:bg-[#1D1D1D] px-5 py-1.5 rounded-lg dark:text-[#A6A6A6]">
                                Software Developer </h3>

                            <div class="flex justify-center space-x-3">
                                <!-- facebook icon and link -->
                                <a href="https://www.facebook.com/" target="_blank"
                                    rel="noopener noreferrer">
                                    <span class="socialbtn text-[#1773EA]">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </span>
                                </a>
                                <!-- twitter icon and link -->
                                <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer">
                                    <span class="socialbtn text-[#1C9CEA]">
                                        <i class="fa-brands fa-twitter"></i>
                                    </span>
                                </a>
                                <!-- dribbble icon and link -->
                                <a href="https://dribbble.com/" target="_blank" rel="noopener noreferrer">
                                    <span class="socialbtn text-[#e14a84]">
                                        <i class="fa-brands fa-dribbble"></i>
                                    </span>
                                </a>
                                <!-- linkedin icon and link -->
                                <a href="https://www.linkedin.com/" target="_blank"
                                    rel="noopener noreferrer">
                                    <span class="socialbtn text-[#0072b1]">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </span>
                                </a>
                            </div>

                            <!-- personal info start -->
                            <div class="p-7 rounded-2xl mt-7 bg-[#F3F6F6] dark:bg-[#1D1D1D]">
                                <div class="flex border-b border-[#E3E3E3] dark:border-[#3D3A3A] pb-2.5">
                                    <span class="socialbtn bg-white dark:bg-black text-[#E93B81] shadow-md">
                                        <i class="fa-solid fa-mobile-screen-button"></i>
                                    </span>
                                    <div class="text-left ml-2.5">
                                        <p class="text-xs text-[#44566C] dark:text-[#A6A6A6]"> Teléfono </p>
                                        <p class="dark:text-white">+123 456 7890</p>
                                    </div>
                                </div>

                                <div class="flex border-b border-[#E3E3E3] dark:border-[#3D3A3A] py-2.5">
                                    <span class="socialbtn bg-white dark:bg-black text-[#6AB5B9] shadow-md">
                                        <i class="fa-solid fa-envelope-open-text"></i>
                                    </span>
                                    <div class="text-left ml-2.5">
                                        <p class="text-xs text-[#44566C] dark:text-[#A6A6A6]"> Email </p>
                                        <p class="dark:text-white">example@mail.com</p>
                                    </div>
                                </div>

                                <div class="flex border-b border-[#E3E3E3] dark:border-[#3D3A3A] py-2.5">
                                    <span class="socialbtn bg-white dark:bg-black text-[#FD7590] shadow-md">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </span>
                                    <div class="text-left ml-2.5">
                                        <p class="text-xs text-[#44566C] dark:text-[#A6A6A6]"> Dirección </p>
                                        <p class="dark:text-white">Madrid, España</p>
                                    </div>
                                </div>

                                <div class="flex py-2.5">
                                    <span class="socialbtn bg-white dark:bg-black text-[#C17CEB] shadow-md">
                                        <i class="fa-solid fa-calendar-days"></i>
                                    </span>
                                    <div class="text-left ml-2.5">
                                        <p class="text-xs text-[#44566C] dark:text-[#A6A6A6]"> Año de nacimiento </p>
                                        <p class="dark:text-white">24 Sept, 1987</p>
                                    </div>
                                </div>
                            </div>
                            <!-- personal info end -->

                            <!-- dowanload button -->
                            <button class="dowanload-btn">
                                <img class="mr-3" src="{{asset('images/icons/dowanload.png')}}" alt="icon" /> Descargar
                                CV
                            </button>
                        </div>
                    </div>
                </div>
                <!-- personal info for mobile devices end -->

                <div class="lg:grid grid-cols-12 md:gap-10 pt-4 md:pt-[30px] items-center hidden">
                    <div class="col-span-12 space-y-2.5">
                        <div class="lg:mr-16">
                            <p class="text-[#44566c] dark:text-color-910 leading-7"> Soy Desarrollador de Software desde hace mas de 15 años.
                                Me encanta la tecnología y todo el mundo que la rodea. </p>
                            <p class="text-[#44566c] leading-7 mt-2.5 dark:text-color-910"> Además de mi vocación como desarrollador, tambien me encanta
                                la creación de contenido, por lo que tengo un canal de Youtube llamado: El Rincón de Isma.
                            </p>
                        </div>
                        <div></div>
                    </div>
                </div>

            </div>

            <!-- what i do section start -->
            <div class="pb-12 px-2 sm:px-5 md:px-10 lg:px-14">
                <h3 class="text-[35px] dark:text-white font-bold font-robotoSlab pb-5"> ¿Qué hago? </h3>
                <div class="grid gap-8 grid-cols-1 md:grid-cols-2 xl:grid-cols-2">
                    <div class="about-box bg-[#fcf4ff] dark:bg-transparent">
                        <img class="w-10 h-10 object-contain block" src="{{asset('images/icons/icon.svg')}}"
                            alt="icon" />
                        <div class="space-y-2">
                            <h3 class="dark:text-white text-[22px] font-semibold"> Diseño UI/UX </h3>
                            <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]"> Diseño interfaces web preparadas para conseguir,
                                un atractivo y una funcionalidad exquisita con las nuevas tecnologías. </p>
                        </div>
                    </div>

                    <div class="about-box bg-[#fefaf0] dark:bg-transparent">
                        <img class="w-10 h-10 object-contain block" src="{{asset('images/icons/icon1.svg')}}"
                            alt="icon" />
                        <div class="space-y-2">
                            <h3 class="dark:text-white text-[22px] font-semibold"> Desarrollo de Apps </h3>
                            <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]"> Realizo aplicaciones nativas tanto web, 
                                como móviles. Si no tienes aplicación hoy en día no eres nadie. </p>
                        </div>
                    </div>

                    <div class="about-box bg-[#fcf4ff] dark:bg-transparent">
                        <img class="w-10 h-10 object-contain block" src="{{asset('images/icons/icon2.svg')}}"
                            alt="icon" />
                        <div class="space-y-2">
                            <h3 class="dark:text-white text-[22px] font-semibold"> Fotografía </h3>
                            <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]"> Gracias a mi canal he descubierto el mundo, 
                                de la fotografía. Me encanta la edición fotográfica.
                            </p>
                        </div>
                    </div>

                    <div class="about-box bg-[#fff4f4] dark:bg-transparent">
                        <img class="w-10 h-10 object-contain block" src="{{asset('images/icons/icon3.svg')}}"
                            alt="icon" />
                        <div class="space-y-2">
                            <h3 class="dark:text-white text-[22px] font-semibold"> Edición de video </h3>
                            <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]"> Al igual que con la fotografía, he descubierto este mundo
                                totalmente nuevo para mi. Ha sido una sorpresa todo lo que se puede realizar. </p>
                        </div>
                    </div>

                    <div class="about-box bg-[#fff0f8] dark:bg-transparent">
                        <img class="w-10 h-10 object-contain block" src="{{asset('images/icons/icon4.svg')}}"
                            alt="icon" />
                        <div class="space-y-2">
                            <h3 class="dark:text-white text-[22px] font-semibold"> Consultoría </h3>
                            <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]"> Con mas de 15 años en el mundo profesional 
                                tecnológico, ayudo a empresas a crecer tecnológicamente. </p>
                        </div>
                    </div>

                    <div class="about-box bg-[#f3faff] dark:bg-transparent">
                        <img class="w-10 h-10 object-contain block" src="{{asset('images/icons/icon5.svg')}}"
                            alt="icon" />
                        <div class="space-y-2">
                            <h3 class="dark:text-white text-[22px] font-semibold"> Desarrollo Web </h3>
                            <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]"> Si hoy en día no tienes presencia en internet,
                                no te encontraran. Ponte en contacto conmigo para crear tu presencia online. </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- what i do section start -->
            <div class="px-2 sm:px-5 md:px-10 lg:px-14">
                <div class="bg-[#F8FBFB] dark:bg-[#0D0D0D] max-w-full h-auto py-10 rounded-xl">
                    <h3 class="text-center dark:text-white text-6xl mb-3 font-semibold"> Clientes </h3>
                    <!-- slider and slider items -->
                    <div class="slickOne text-center px-2 pt-8">
                        <div>
                            <img class="overflow-hidden brand-img" src="{{asset('images/slider/brand.png')}}"
                                alt="brand icon" />
                        </div>
                        <div>
                            <img class="overflow-hidden brand-img" src="{{asset('images/slider/brand1.png')}}"
                                alt="brand icon" />
                        </div>
                        <div>
                            <img class="overflow-hidden brand-img" src="{{asset('images/slider/brand2.png')}}"
                                alt="brand icon" />
                        </div>
                        <div>
                            <img class="overflow-hidden brand-img" src="{{asset('images/slider/brand3.png')}}"
                                alt="brand icon" />
                        </div>
                        <div>
                            <img class="overflow-hidden brand-img" src="{{asset('images/slider/brand4.png')}}"
                                alt="brand icon" />
                        </div>
                        <div>
                            <img class="overflow-hidden brand-img" src="{{asset('images/slider/brand1.png')}}"
                                alt="brand icon" />
                        </div>
                        <div>
                            <img class="overflow-hidden brand-img" src="{{asset('images/slider/brand1.png')}}"
                                alt="brand icon" />
                        </div>
                    </div>
                    <!-- slider and slider items end -->
                </div>
            </div>

            <!-- footer start -->
            <footer class="overflow-hidden rounded-b-2xl" style="background: transparent">
                <p class="text-center py-6 text-gray-lite dark:text-color-910"> © 2023 Todos los derechos reservados
                    by <a class="hover:text-[#FA5252] duration-300 transition"
                        href="me.elrincondeisma.com" target="_blank"
                        rel="noopener noreferrer"> El Rincón de Isma</a>. </p>
            </footer>
            <!-- footer section end -->
        </div>
    </div>
    <!-- about me section start -->
@endsection