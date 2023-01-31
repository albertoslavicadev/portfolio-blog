<x-app-layout>
    <div class="mt-10 z-20">
        <div id="indicators-carousel" class=" mt-10" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="https://th.bing.com/th/id/R.699defcec77365c2dcd1bac50a789a46?rik=sk9qvtl%2fpa%2f5eA&riu=http%3a%2f%2fcdn57.picsart.com%2f179951678001202.jpg&ehk=SEq86wyqKmauSBKOyess7Qp6gtM56dWGBQia7SwkJHg%3d&risl=&pid=ImgRaw&r=0"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://th.bing.com/th/id/R.699defcec77365c2dcd1bac50a789a46?rik=sk9qvtl%2fpa%2f5eA&riu=http%3a%2f%2fcdn57.picsart.com%2f179951678001202.jpg&ehk=SEq86wyqKmauSBKOyess7Qp6gtM56dWGBQia7SwkJHg%3d&risl=&pid=ImgRaw&r=0"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://th.bing.com/th/id/R.699defcec77365c2dcd1bac50a789a46?rik=sk9qvtl%2fpa%2f5eA&riu=http%3a%2f%2fcdn57.picsart.com%2f179951678001202.jpg&ehk=SEq86wyqKmauSBKOyess7Qp6gtM56dWGBQia7SwkJHg%3d&risl=&pid=ImgRaw&r=0"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://th.bing.com/th/id/R.699defcec77365c2dcd1bac50a789a46?rik=sk9qvtl%2fpa%2f5eA&riu=http%3a%2f%2fcdn57.picsart.com%2f179951678001202.jpg&ehk=SEq86wyqKmauSBKOyess7Qp6gtM56dWGBQia7SwkJHg%3d&risl=&pid=ImgRaw&r=0"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://th.bing.com/th/id/R.699defcec77365c2dcd1bac50a789a46?rik=sk9qvtl%2fpa%2f5eA&riu=http%3a%2f%2fcdn57.picsart.com%2f179951678001202.jpg&ehk=SEq86wyqKmauSBKOyess7Qp6gtM56dWGBQia7SwkJHg%3d&risl=&pid=ImgRaw&r=0"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>

</x-app-layout>

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>


<script>
    window.addEventListener('scroll', () => {
        document.body.style.setProperty('--scroll', window.pageYOffset / (document.body.offsetHeight - window
            .innerHeight));
    }, false);
</script>
