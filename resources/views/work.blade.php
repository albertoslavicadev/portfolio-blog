<x-app-layout>
    <div class="">
        <div class="background-image-works p-20">
            <div class="relative lg:px-2">
                <div class="mx-auto max-w-3xl pt-20 pb-20 sm:pt-48 sm:pb-40 m-15">
                    <div>
                        <div class="hidden sm:flex sm:justify-center pb-14">
                            <div
                                class="relative overflow-hidden rounded-full py-1.5 px-4 text-sm leading-6 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                            </div>
                        </div>
                        <div>
                            <h1 class=" 2xl:text-8xl 2xl:mt-20 lg:text-lg m-10 font-bold tracking-tight text-white sm:text-center  sm:text-6xl">Dare to dream. </br> Dare to build.</h1>
                            <div class="mt-4 flex gap-x-4 sm:justify-center">
                                <div class="container m-5 2xl:text-8xl">
                                    <div class="chevron 2xl:text-8xl"></div>
                                    <div class="chevron 2xl:text-8xl"></div>
                                    <div class="chevron 2xl:text-8xl"></div>
                                    <span class="text    ">Scroll down</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" background-image-cards p-15 ">
        <div class=" pt-10 pb-10 sm:pt-48 sm:pb-40 grid grid-cols-2 gap-1 grid-flow-row auto-rows-min place-items-center">
            @foreach($work as $key)
            <a href="{{ $key->github_link }}" class="dark:bg-opacity-60 flex flex-col items-center shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 mt-2 mb-4" >
                <div class="flex flex-col justify-between p-6 leading-normal">
                    <h5 class="mb-2 sm:text-base 2xl:text-4xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $key->name }}</h5>
                    <p class="mb-3 font-normal 2xl:text-3xl text-gray-700 dark:text-gray-400">{{$key->description }}</p>
                </div>
            </a>
            @endforeach




        </div>
    </div>
</x-app-layout>
