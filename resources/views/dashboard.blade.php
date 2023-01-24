<x-app-layout>
    {{-- Hero --}}
    <div class="background-image-hero">
        <div class="relative lg:px-2">
            <div class="mx-auto max-w-3xl pt-20 pb-20 sm:pt-48 sm:pb-40">
                <div>
                    <div class="hidden sm:flex sm:justify-center">
                        <div
                            class="relative overflow-hidden rounded-full py-1.5 px-4 text-sm leading-6 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                            <span class="text-gray-400">
                                Check my components <a href="#" class="font-semibold text-gray-200"><span
                                        class="absolute inset-0" aria-hidden="true"></span>here! <span
                                        aria-hidden="true">&rarr;</span></a>
                            </span>
                        </div>
                    </div>
                    <div>
                        <h1 class="text-4xl font-bold tracking-tight sm:text-center sm:text-6xl">Alberto <span
                                class="text-gray-400">Slavica </span>Portfolio</h1>
                        <p class="mt-6 text-lg leading-8 text-gray-300 sm:text-center">Full-Stack Web Developer with
                            a
                            passion for coding and designing beautiful blazingly fast and responsive apps</p>
                        <div class="mt-4 flex gap-x-4 sm:justify-center">
                            <a href="#"
                                class="inline-block rounded-lg bg-gray-700 px-4 py-1.5 text-base font-semibold leading-7 text-white shadow-sm hover:bg-gray-900 hover:ring-white">
                                Explore my works!
                                <span class="text-white" aria-hidden="true">&rarr;</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Cube --}}
        <div class="cube-wrap">
            <div class="cube">
                <div class="side top"></div>
                <div class="side bottom"></div>
                <div class="side front"></div>
                <div class="side back"></div>
                <div class="side left"></div>
                <div class="side right"></div>
            </div>
        </div>
        {{-- Feature --}}
        <div class="py-12 sm:py-32 lg:py-12">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="sm:text-center">
                    <h2 class="text-lg font-semibold leading-8 text-gray-400">Skills</h2>
                    <p class="mt-2 text-3xl font-bold tracking-tight text-gray-1000 sm:text-4xl">Differents languages to
                        create the perfect mix</p>
                    <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-gray-200">A list of tecnologies used to make
                        a
                        blazingly fast app with good design and easy to maintain. I like to code making sure my
                        components
                        are reusable.</p>
                </div>

                <div class="mt-20 max-w-lg sm:mx-auto md:max-w-none">
                    <div class="grid grid-cols-1 gap-y-16 md:grid-cols-2 md:gap-x-12 md:gap-y-16">
                        <div class="relative flex flex-col gap-6 sm:flex-row md:flex-col lg:flex-row">
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-xl bg-white text-black sm:shrink-0">
                                <!-- Heroicon name: outline/globe-alt -->
                                <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                                </svg>
                            </div>
                            <div class="sm:min-w-0 sm:flex-1">
                                <p class="text-lg font-semibold leading-8 text-gray-100">Lorem, ipsum dolor.</p>
                                <p class="mt-2 text-base leading-7 text-gray-300">Lorem ipsum, dolor sit amet
                                    consectetur
                                    adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate
                                    blanditiis ratione.</p>
                            </div>
                        </div>

                        <div class="relative flex flex-col gap-6 sm:flex-row md:flex-col lg:flex-row">
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-xl  bg-white text-black sm:shrink-0">
                                <!-- Heroicon name: outline/scale -->
                                <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.416 48.416 0 0012 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3-.52l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.988 5.988 0 01-2.031.352 5.988 5.988 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L18.75 4.971zm-16.5.52c.99-.203 1.99-.377 3-.52m0 0l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.989 5.989 0 01-2.031.352 5.989 5.989 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L5.25 4.971z" />
                                </svg>
                            </div>
                            <div class="sm:min-w-0 sm:flex-1">
                                <p class="text-lg font-semibold leading-8 text-gray-100">Lorem, ipsum dolor.</p>
                                <p class="mt-2 text-base leading-7 text-gray-300">Lorem ipsum, dolor sit amet
                                    consectetur
                                    adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate
                                    blanditiis ratione.</p>
                            </div>
                        </div>

                        <div class="relative flex flex-col gap-6 sm:flex-row md:flex-col lg:flex-row">
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-xl  bg-white text-black sm:shrink-0">
                                <!-- Heroicon name: outline/bolt -->
                                <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                                </svg>
                            </div>
                            <div class="sm:min-w-0 sm:flex-1">
                                <p class="text-lg font-semibold leading-8 text-gray-100">Lorem, ipsum dolor.</p>
                                <p class="mt-2 text-base leading-7 text-gray-300">Lorem ipsum, dolor sit amet
                                    consectetur
                                    adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate
                                    blanditiis ratione.</p>
                            </div>
                        </div>

                        <div class="relative flex flex-col gap-6 sm:flex-row md:flex-col lg:flex-row">
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-xl  bg-white text-black sm:shrink-0">
                                <!-- Heroicon name: outline/device-phone-mobile -->
                                <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                                </svg>
                            </div>
                            <div class="sm:min-w-0 sm:flex-1">
                                <p class="text-lg font-semibold leading-8 text-gray-100">Lorem, ipsum dolor.</p>
                                <p class="mt-2 text-base leading-7 text-gray-300">Lorem ipsum, dolor sit amet
                                    consectetur
                                    adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate
                                    blanditiis ratione.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="h-screen flex items-center justify-center background-image-form">

        <div class="max-w-2xl mx-auto">
            <div class="sm:text-center pb-4">
                <h2 class="text-lg font-semibold leading-8 text-gray-400">My experience</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">My journey to software development</p>
                <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-gray-200">A list of tecnologies used to make
                    a
                    blazingly fast app with good design and easy to maintain. I like to code making sure my
                    components
                    are reusable.</p>
            </div>

            <ol class="relative border-l border-gray-200 dark:border-gray-700 mt-10">
                <li class="mb-10 ml-4">
                    <div
                        class="absolute w-3 h-3 bg-gray-200 rounded-full -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                    </div>
                    <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">February 2022</time>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Application UI code in Tailwind CSS</h3>
                    <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Get access to over 20+ pages
                        including a dashboard layout, charts, kanban board, calendar, and pre-order E-commerce &amp; Marketing
                        pages.</p>
                    <a href="#"
                       class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Learn
                        more <svg class="w-3 h-3 ml-2" fill="currentColor" viewBox="0 0 20 20"
                                  xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg></a>
                </li>
                <li class="mb-10 ml-4">
                    <div
                        class="absolute w-3 h-3 bg-gray-200 rounded-full -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                    </div>
                    <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">March 2022</time>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Marketing UI design in Figma</h3>
                    <p class="text-base font-normal text-gray-500 dark:text-gray-400">All of the pages and components are first
                        designed in Figma and we keep a parity between the two versions even as we update the project.</p>
                </li>
                <li class="ml-4">
                    <div
                        class="absolute w-3 h-3 bg-gray-200 rounded-full -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                    </div>
                    <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">April 2022</time>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">E-Commerce UI code in Tailwind CSS</h3>
                    <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens of web components
                        and interactive elements built on top of Tailwind CSS.</p>
                </li>
            </ol>
        </div>
</x-app-layout>

<script>
    window.addEventListener('scroll', () => {
        document.body.style.setProperty('--scroll', window.pageYOffset / (document.body.offsetHeight - window
            .innerHeight));
    }, false);

    var canvas = document.getElementById( 'canvas' ),
        ctx = canvas.getContext( '2d' ),
        canvas2 = document.getElementById( 'canvas2' ),
        ctx2 = canvas2.getContext( '2d' ),
        // full screen dimensions
        cw = window.innerWidth,
        ch = window.innerHeight,
        charArr = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'],
        maxCharCount = 100,
        fallingCharArr = [],
        fontSize = 15,
        maxColums = cw/(fontSize);
    canvas.width = canvas2.width = cw;
    canvas.height = canvas2.height = ch;


    function randomInt( min, max ) {
        return Math.floor(Math.random() * ( max - min ) + min);
    }

    function randomFloat( min, max ) {
        return Math.random() * ( max - min ) + min;
    }

    function Point(x,y)
    {
        this.x = x;
        this.y = y;
    }

    Point.prototype.draw = function(ctx){

        this.value = charArr[randomInt(0,charArr.length-1)].toUpperCase();
        this.speed = randomFloat(1,5);


        ctx2.fillStyle = "rgb(255, 255, 255)";
        ctx2.font = fontSize+"px san-serif";
        ctx2.fillText(this.value,this.x,this.y);

        ctx.fillStyle = "rgb(255, 255, 255)";
        ctx.font = fontSize+"px san-serif";
        ctx.fillText(this.value,this.x,this.y);



        this.y += this.speed;
        if(this.y > ch)
        {
            this.y = randomFloat(-100,0);
            this.speed = randomFloat(2,5);
        }
    }

    for(var i = 0; i < maxColums ; i++) {
        fallingCharArr.push(new Point(i*fontSize,randomFloat(-500,0)));
    }


    var update = function()
    {

        ctx.fillStyle = "rgba(0,0,0,0.05)";
        ctx.fillRect(0,0,cw,ch);

        ctx2.clearRect(0,0,cw,ch);

        var i = fallingCharArr.length;

        while (i--) {
            fallingCharArr[i].draw(ctx);
            var v = fallingCharArr[i];
        }

        requestAnimationFrame(update);
    }

    update();
</script>
