<x-app-layout>
    <div class="">
        <div class="background-image-works p-20">
            <div class="lg:px-2">
                <div class="mx-auto max-w-3xl pt-20 pb-20 sm:pt-48 sm:pb-40 m-15">
                    <div>
                        <div class="hidden sm:flex sm:justify-center pb-14">
                            <div
                                class="relative overflow-hidden rounded-full py-1.5 px-4 text-sm leading-6 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                            </div>
                        </div>
                        <div>
                            <h1 class="phone:text-3xl text-center phone:mt-10 phone:m-2 2xl:text-8xl 2xl:pt-20 2xl:mt-20 m-10 font-bold tracking-tight text-white sm:text-center  sm:text-6xl">
                                Dare to dream. </br> Dare to build.</h1>
                            <div class="mt-4 flex gap-x-4 justify-center">
                                <div class="containeras m-5 2xl:text-8xl">
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
        <div
            class="phone:grid phone:grid-cols-1 phone:p-4 sm:h-screen pt-10 pb-10 sm:pt-48 sm:pb-40 sm:grid sm:grid-cols-2 sm:gap-1 sm:grid-flow-row sm:auto-rows-min place-items-center">
            @foreach($work as $key)
                <a href="{{ $key->github_link }}"
                   class="bg-opacity-25 bg-gray-600 flex flex-col items-center shadow md:flex-row md:max-w-xl hover:bg-gray-100 border-gray-700  hover:bg-gray-700 mt-2 mb-4">
                    <div class=" flex flex-col justify-between p-6 leading-normal">
                        <h5 class="mb-2 text-4xl font-bold tracking-tight text-gray-200 text-white">{{ $key->name }}</h5>
                        <p class="mb-3 font-normal 2xl:text-2xl text-gray-700 text-gray-400">{{$key->description }}</p>
                    </div>
                </a>
            @endforeach


        </div>
    </div>
</x-app-layout>
