<x-app-layout>
    <div class="bg-gray-900 pt-20 pb-20">
        <div class="p-20 w-1/2 bg-gray-900">
            <form action="{{route('works.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="m-10">
                    <label name="name" for="large-input"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                    <input name="name" type="text" id="large-input"
                           class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="m-10">
                    <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Page_
                        Link</label>
                    <input name="page_link" type="text" id="large-input"
                           class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="m-10">
                    <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Github_link</label>
                    <input name="github_link" type="text" id="large-input"
                           class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="m-10">
                    <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <input name="description" type="text" id="large-input"
                           class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <button type="submit"
                        class=" m-10 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Add work
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
