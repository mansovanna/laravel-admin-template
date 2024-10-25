<div
    class="w-[calc(100% - 20%)] left-72  bg-white border-b h-20 fixed right-0 top-0 flex flex-row justify-between items-center px-4 py-2">
    {{-- Block Button Menu of close or on --}}

    {{-- Block Search bar --}}
    <div class="flex flex-row justify-start items-center gap-3 w-6/12  ">
        {{-- Block Menu Bar of app --}}
        <button class="p-2 bg-primary bg-opacity-[0.1] rounded-md hidden">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none">
                <path d="M20 12L10 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M20 5L4 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M20 19L4 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
        {{-- End Block Menu bar of app --}}
        {{-- Block Search bar --}}
        <form class="flex flex-row justify-start items-center relative w-full">
            <input type="text"
                class="w-full h-11 border py-2 pl-11 rounded-md duration-150 ease-in-out focus:outline focus:outline-orange-300 focus:ring-4 focus:ring-orange-200"
                placeholder="Search now!">
            <button class=" absolute left-[2px] top-[2px] bottom-0 p-2 hover:bg-slate-100 rounded-md size-10">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                    class=" text-slate-500" fill="none">
                    <path d="M17.5 17.5L22 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M20 11C20 6.02944 15.9706 2 11 2C6.02944 2 2 6.02944 2 11C2 15.9706 6.02944 20 11 20C15.9706 20 20 15.9706 20 11Z"
                        stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                </svg>
            </button>
        </form>
    </div>

    {{-- Block Menu and Profile --}}
    <div class="flex flex-row justify-end items-center gap-4">
        {{-- Block Switch --}}
        <div>
            <input type="checkbox" class=" hidden" id="switch">


            <label for="switch" class="w-16 h-8 rounded-full bg-slate-200 ">
                <div class="size-7 bg-white rounded-full"></div>
            </label>

        </div>
        {{-- End Block Switch --}}


        <div
            class="size-10 bg-slate-50 hover:bg-slate-100 group rounded-full  border flex flex-row justify-center items-center relative cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                class="size-6 text-slate-400 group-hover:text-primary group-active:text-waning" fill="none">
                <path
                    d="M5.15837 11.491C5.08489 12.887 5.16936 14.373 3.92213 15.3084C3.34164 15.7438 3 16.427 3 17.1527C3 18.1508 3.7818 19 4.8 19H19.2C20.2182 19 21 18.1508 21 17.1527C21 16.427 20.6584 15.7438 20.0779 15.3084C18.8306 14.373 18.9151 12.887 18.8416 11.491C18.6501 7.85223 15.6438 5 12 5C8.35617 5 5.34988 7.85222 5.15837 11.491Z"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M10.5 3.125C10.5 3.95343 11.1716 5 12 5C12.8284 5 13.5 3.95343 13.5 3.125C13.5 2.29657 12.8284 2 12 2C11.1716 2 10.5 2.29657 10.5 3.125Z"
                    stroke="currentColor" stroke-width="1.5" />
                <path d="M15 19C15 20.6569 13.6569 22 12 22C10.3431 22 9 20.6569 9 19" stroke="currentColor"
                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>

            {{-- Note --}}
            <span class=" absolute right-0 top-0">
                <span class="relative flex h-2 w-2">
                    <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-red-500"></span>
                </span>
            </span>
        </div>
        <div
            class="size-10 bg-slate-50 hover:bg-slate-100 group rounded-full  border flex flex-row justify-center items-center relative cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                class="size-6 text-slate-400 group-hover:text-primary group-active:text-waning" fill="none">
                <path d="M8 13.5H16M8 8.5H12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path
                    d="M6.09881 19C4.7987 18.8721 3.82475 18.4816 3.17157 17.8284C2 16.6569 2 14.7712 2 11V10.5C2 6.72876 2 4.84315 3.17157 3.67157C4.34315 2.5 6.22876 2.5 10 2.5H14C17.7712 2.5 19.6569 2.5 20.8284 3.67157C22 4.84315 22 6.72876 22 10.5V11C22 14.7712 22 16.6569 20.8284 17.8284C19.6569 19 17.7712 19 14 19C13.4395 19.0125 12.9931 19.0551 12.5546 19.155C11.3562 19.4309 10.2465 20.0441 9.14987 20.5789C7.58729 21.3408 6.806 21.7218 6.31569 21.3651C5.37769 20.6665 6.29454 18.5019 6.5 17.5"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
            </svg>

            {{-- Note --}}
            <span class=" absolute right-0 top-0">
                <span class="relative flex h-2 w-2">
                    <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-red-500"></span>
                </span>
            </span>
        </div>
        {{-- --}}
        <div class="flex flex-row justify-end items-center gap-3 ml-2 group">
            <div class="flex flex-col  items-end select-none align-middle">
                <p class=" font-semibold select-none">Jone Sone</p>
                <p class="text-xs text-slate-500">UX Designer</p>
            </div>
            <div
                class="size-12 bg-blue-300 rounded-full hover:outline hover:outline-orange-400 duration-150 active:outline-none cursor-pointer relative">
                <img class=" rounded-full"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwme89cM8YZvHcybGrZl_Obd9U9p5QabozJQ&s"
                    alt="">
            </div>
        </div>
    </div>
</div>
