<div>
    <div class="mx-auto px-2">
        {{-- Navbar --}}
        <div class="navbar bg-transparent relative z-10">
            <div class="navbar-start">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h8m-8 6h16" />
                        </svg>
                    </div>
                    <ul tabindex="0"
                        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                        <li><a>Beranda</a></li>
                        <li x-data="{ layanan: 'Layanan' }">
                            <a x-text="layanan"></a>
                            <ul class="p-2">
                                <li><a>Jasa pembuatan website</a></li>
                                <li><a>Jasa pembuatan dokument </a></li>
                            </ul>
                        </li>
                        <li><a>Kontak kami</a></li>
                    </ul>
                </div>
                <a class="btn btn-ghost text-xl">Jenios</a>

            </div>
            <div class="navbar-center hidden lg:flex">
                <ul class="menu menu-horizontal px-1">
                    <li><a class="menu" href="/" wire:navigate>Beranda</a></li>
                    <li>
                        <details>
                            <summary class="menu">Layanan</summary>
                            <ul class="p-2">
                                <li><a>Jasa pembuatan website</a></li>
                                <li><a>Jasa pembuatan dokument </a></li>
                            </ul>
                        </details>
                    </li>
                    <li><a href="/contact" class="menu" wire:navigate>Kontak kami</a></li>
                </ul>
            </div>
            <div class="navbar-end">
                <a href="https://wa.me/6281388050997" class="btn hover:bg-slate-200">Konsultasi gratis
                </a>
            </div>
        </div>

        {{-- mobile background --}}
        <div class="absolute inset-x-0 top-0 z-15 overflow-hidden pl-[50%] lg:hidden"><img
                src="https://tailwindui.com/plus/img/beams-basic-transparent.png" alt=""
                class="-ml-[39rem] w-[113.125rem] max-w-none"></div>
        {{-- mobile desktop --}}
        <div
            class="absolute inset-y-0 hidden w-full min-w-[1360px] bg-[url('https://tailwindui.com/plus/img/beams-basic-transparent.png')] bg-[length:1500px_1000px] bg-[position:calc(50%_+_190px)_-10px] bg-no-repeat lg:block [mask-image:radial-gradient(closest-side at bottom right, white, transparent)]">
        </div>

        {{-- bg stroke --}}
        <svg aria-hidden="true"
            class="absolute sm:block hidden inset-0 -z-10 h-full w-full stroke-gray-200 dark:stroke-gray-800 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]">
            <defs>
                <pattern x="50%" y="-1" id="0787a7c5-978c-4f66-83c7-11c213f99cb7" width="200" height="200"
                    patternUnits="userSpaceOnUse">
                    <path d="M.5 200V.5H200" fill="none"></path>
                </pattern>
            </defs>
            <rect fill="url(#0787a7c5-978c-4f66-83c7-11c213f99cb7)" width="100%" height="100%" stroke-width="0">
            </rect>
        </svg>

        {{-- Hero section / jumbotron --}}
        <div class="relative isolate p-4">
            <div class="dark:text-white">
                <div
                    class="max-w-8xl relative mx-auto px-4 pb-16 sm:px-6 sm:pb-10 sm:pt-16 lg:grid lg:items-center lg:gap-10 lg:pb-16 lg:pl-24 lg:pr-4 lg:pt-24 xl:grid-cols-2">
                    <div class="absolute right-[calc(50%-4rem)] top-10 -z-10 hidden transform-gpu blur-3xl sm:right-[calc(50%-18rem)] sm:block lg:right-48 lg:top-[calc(70%-30rem)] xl:right-[calc(80%-24rem)]"
                        aria-hidden="true">
                        <div class="hidden aspect-[1108/632] w-[69.25rem] bg-gradient-to-r from-[#80caff] to-transparent opacity-20 lg:block"
                            style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%);">
                        </div>
                    </div>
                    <div class="relative z-10 max-w-3xl xl:ml-auto">
                        <h1
                            class="mt-10 text-4xl font-bold tracking-tighter text-fg sm:mt-0 sm:text-5xl/[3.5rem] md:mt-10 md:text-6xl lg:mt-28 lg:text-7xl xl:mt-12">
                            Platform Jasa Terlengkap <br class="xl:hidden"> untuk UMKM </h1>
                        <p
                            class="mt-5 text-base leading-relaxed tracking-tighter text-muted-fg sm:text-xl/[2rem] xl:text-2xl/[2.3rem] [&amp;_a]:font-medium [&amp;_a]:text-fg">
                            Tingkatkan Bisnis anda dengan layanan kami yang lengkap dan terpercaya. </p>
                        </p>
                        <div class="mt-10 space-x-4">
                            <a href="/app" class="btn btn-slate-900 hover:bg-slate-200" wire:navigate>Login</a>
                            <a href="/app/register" class="btn btn-slate-900 hover:bg-slate-200"
                                wire:navigate>Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:px-8 mx-auto px-4 sm:px-6 md:px-4 xl:max-w-7xl 2xl:max-w-screen-2xl">
            <div class="space-y-10 sm:space-y-24 mt-4">
                <div style="opacity: 1; transform: none;">
                    <section id="pricelist">
                        <div class="mb-6">
                            <h2 class="text-lg font-semibold leading-6 tracking-tight">Mengapa harus jenios?</h2>
                            <p class="text-sm text-muted-fg">
                                Kami memberikan layanan terbaik untuk anda, dengan harga yang terjangkau dan kualitas
                                yang terbaik.
                        </div>

                        {{-- Card  --}}
                        <div class="flex flex-wrap justify-center gap-8">
                        <h1 class="mb-4 text-4xl font-extrabold">Jasa Pembuatan Website</h1>
                        </div>
                        <div class="flex gap-8 flex-wrap justify-center p-4">
                            <div class="w-full max-w-64 p-4 border border-gray-200 rounded-lg shadow sm:p-8 ">
                                <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">Basic plan</h5>
                                <div class="flex items-baseline ">
                                    <span class="text-3xl font-semibold"> Rp</span>
                                    <span class="text-5xl font-extrabold tracking-tight">200 rb</span>

                                </div>
                                <ul role="list" class="space-y-5 my-7">
                                    <li class="flex items-center">
                                        <svg class="flex-shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        <span
                                            class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">
                                            Revisi 3x</span>
                                    </li>
                                    <li class="flex">
                                        <svg class="flex-shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        <span
                                            class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Landing
                                            page</span>
                                    </li>
                                    <li class="flex">
                                        <svg class="flex-shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        <span
                                            class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Source
                                            Code</span>
                                    </li>
                                    <li class="flex line-through decoration-gray-500">
                                        <svg class="flex-shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        <span class="text-base font-normal leading-tight text-gray-500 ms-3">Free
                                            Hosting </span>
                                    </li>
                                </ul>
                                <x-filament::button href="https://wa.me/6281388050997" tag="a"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">
                                    Pesan sekarang
                                </x-filament::button>
                            </div>

                            <div
                                class="w-full max-w-64 p-4 border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                                <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">Middle plan</h5>
                                <div class="flex items-baseline ">
                                    <span class="text-3xl font-semibold"> Rp</span>
                                    <span class="text-5xl font-extrabold tracking-tight">1 jt</span>

                                </div>
                                <ul role="list" class="space-y-5 my-7">
                                    <li class="flex items-center">
                                        <svg class="flex-shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        <span
                                            class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">
                                            Revisi Unlimited</span>
                                    </li>
                                    <li class="flex">
                                        <svg class="flex-shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        <span
                                            class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">
                                            Web Sederhana</span>
                                    </li>
                                    <li class="flex">
                                        <svg class="flex-shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        <span
                                            class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Source
                                            Code</span>
                                    </li>
                                    <li class="flex decoration-gray-500">
                                        <svg class="flex-shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        <span
                                            class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Free
                                            Hosting </span>
                                    </li>
                                </ul>
                                <x-filament::button href="https://wa.me/6281388050997" tag="a"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">
                                    Pesan sekarang
                                </x-filament::button>
                            </div>

                            <div
                                class="w-full max-w-64 p-4 border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                                <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">Complate plan
                                </h5>
                                <div class="flex items-baseline">
                                    <span class="text-3xl font-semibold"> Rp</span>
                                    <span class="text-5xl font-extrabold tracking-tight">3 jt</span>

                                </div>
                                <ul role="list" class="space-y-5 my-7">
                                    <li class="flex items-center">
                                        <svg class="flex-shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        <span
                                            class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">
                                            Revisi Unlimited</span>
                                    </li>
                                    <li class="flex">
                                        <svg class="flex-shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        <span
                                            class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Web
                                            Custom</span>
                                    </li>
                                    <li class="flex">
                                        <svg class="flex-shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        <span
                                            class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Source
                                            Code</span>
                                    </li>
                                    <li class="flex decoration-gray-500">
                                        <svg class="flex-shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        <span class="text-base font-normal leading-tight text-gray-500 ms-3">Free
                                            Hosting </span>
                                    </li>
                                </ul>
                                <x-filament::button href="https://wa.me/6281388050997" tag="a"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">
                                    Pesan sekarang
                                </x-filament::button>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
        </div>

        {{-- Pengajuan pembuatan website --}}
        <div class="lg:px-8 mx-auto px-4 sm:px-6 md:px-4 xl:max-w-7xl 2xl:max-w-screen-2xl">
            <div class="space-y-10 sm:space-y-24 mt-4">
                <h1 class="text-lg font-bold tracking-tighter text-fg sm:mt-0 sm:text-lg/[3.5rem] md:mt-10 md:text-lg">
                    Pengajuan Pembuatan Website </h1>

            </div>
        </div>
    </div>
</div>
</div>
