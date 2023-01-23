<x-app-layout>
    {{-- Hero --}}
    <div class="background-image-hero">
        <div class="relative px- lg:px-2">
            <div class="mx-auto max-w-3xl pt-20 pb-20 sm:pt-48 sm:pb-40">
                <div>
                    <div class="hidden sm:flex sm:justify-center">
                        <div
                            class="relative overflow-hidden rounded-full py-1.5 px-4 text-sm leading-6 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                            <span class="text-gray-400">
                                Check my courses <a href="#" class="font-semibold text-gray-200"><span
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
                        <div class="mt-8 flex gap-x-4 sm:justify-center">
                            <a href="#"
                                class="inline-block rounded-lg bg-gray-700 px-4 py-1.5 text-base font-semibold leading-7 text-white shadow-sm hover:bg-gray-900 hover:ring-white">
                                Explore my works
                                <span class="text-white" aria-hidden="true">&rarr;</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Terminal --}}
        <div class="w-68 md:w-1/2 md:mx-auto">
            <div class=" shadow-2xl subpixel-antialiased rounded h-78 bg-black border-black mx-auto ">
                <div class="flex items-center h-6 rounded-t bg-white border-b border-gray-500 text-center text-black"
                    id="headerTerminal">
                    <div class="flex ml-2 items-center text-center border-red-900 bg-red-500 shadow-inner rounded-full w-3 h-3"
                        id="closebtn"></div>
                    <div class="ml-2 border-yellow-900 bg-yellow-500 shadow-inner rounded-full w-3 h-3" id="minbtn">
                    </div>
                    <div class="ml-2 border-green-900 bg-green-500 shadow-inner rounded-full w-3 h-3" id="maxbtn">
                    </div>
                    <div class="mx-auto pr-16" id="terminaltitle">
                        <p class="text-center text-sm">Terminal</p>
                    </div>
                </div>
                <canvas class="text-green-200 font-mono text-xl bg-black" id="console" width="50" height="290"
                    id="canv" />
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
                    <p class="mt-2 text-3xl font-bold tracking-tight text-gray-1000 sm:text-4xl">Differents language to
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
</x-app-layout>

<script>
    window.addEventListener('scroll', () => {
        document.body.style.setProperty('--scroll', window.pageYOffset / (document.body.offsetHeight - window
            .innerHeight));
    }, false);

    // Get the canvas node and the drawing context
    const canvas = document.getElementById('canv');
    const ctx = canvas.getContext('2d');

    // set the width and height of the canvas
    const w = canvas.width;
    const h = canvas.height;

    // draw a black rectangle of width and height same as that of the canvas
    ctx.fillStyle = '#000';
    ctx.fillRect(0, 0, w, h);

    const cols = Math.floor(w / 20) + 1;
    const ypos = Array(cols).fill(0);

    function matrix() {
        // Draw a semitransparent black rectangle on top of previous drawing
        ctx.fillStyle = '#0001';
        ctx.fillRect(0, 0, w, h);

        // Set color to green and font to 15pt monospace in the drawing context
        ctx.fillStyle = '#0f0';
        ctx.font = '10pt monospace';

        // for each column put a random character at the end
        ypos.forEach((y, ind) => {
            // generate a random character
            const text = String.fromCharCode(Math.random() * 128);

            // x coordinate of the column, y coordinate is already given
            const x = ind * 20;
            // render the character at (x, y)
            ctx.fillText(text, x, y);

            // randomly reset the end of the column if it's at least 100px high
            if (y > 100 + Math.random() * 10000) ypos[ind] = 0;
            // otherwise just move the y coordinate for the column 20px down,
            else ypos[ind] = y + 20;
        });
    }

    // render the animation at 20 FPS.
    setInterval(matrix, 50);
</script>
