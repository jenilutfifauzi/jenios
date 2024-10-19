<div>
    <div class=" mx-auto px-2">
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
                    <li><a class="menu hover:bg-orange-200">Beranda</a></li>
                    <li>
                        <details>
                            <summary class="menu hover:bg-orange-200">Layanan</summary>
                            <ul class="p-2">
                                <li><a>Jasa pembuatan website</a></li>
                                <li><a>Jasa pembuatan dokument </a></li>
                            </ul>
                        </details>
                    </li>
                    <li><a href="/contact" class="menu hover:bg-orange-200" wire:navigate>Kontak kami</a></li>
                </ul>
            </div>
            <div class="navbar-end">
                <a href="/app" class="btn btn-ghost hover:bg-orange-200" wire:navigate>Login</a>
                <a href="/app/register" class="btn btn-ghost hover:bg-orange-200" wire:navigate>Daftar</a>
                <a href="https://wa.me/6281388050997" class="btn hover:bg-orange-200" wire:navigate>Konsultasi gratis </a>
            </div>
        </div>

        <svg aria-hidden="true" class="absolute sm:block hidden inset-0 -z-10 h-full w-full stroke-gray-200 dark:stroke-gray-800 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]"><defs><pattern x="50%" y="-1" id="0787a7c5-978c-4f66-83c7-11c213f99cb7" width="200" height="200" patternUnits="userSpaceOnUse"><path d="M.5 200V.5H200" fill="none"></path></pattern></defs><rect fill="url(#0787a7c5-978c-4f66-83c7-11c213f99cb7)" width="100%" height="100%" stroke-width="0"></rect></svg>
        
        <div class="relative isolate">
            <div class=" dark:text-white">
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
                    </div>
                    
                        
                    {{-- <div class="group dark relative isolate hidden w-full overflow-hidden xl:block">
                        <div class="h-full">
                            <div class="pointer-events-none absolute inset-0 rounded-lg opacity-0 transition duration-300 group-hover:opacity-100 sm:rounded-2xl"
                                style="background: radial-gradient(450px at 50.5px 380px, rgba(255, 255, 255, 0.2), transparent 50%);">
                            </div>
                            <div class="absolute inset-0 size-full opacity-10" style="opacity: 1;">
                                <div id="tsparticles" class="size-full"><canvas data-generated="true"
                                        style="width: 100%; height: 100%; pointer-events: none;" aria-hidden="true"
                                        width="0" height="0"></canvas></div>
                            </div>
                            <div
                                class="relative isolate grid grid-cols-[repeat(3,14em)] grid-rows-[repeat(3,1fr)] gap-6 overflow-hidden rounded-lg p-6">
                                <div
                                    class="absolute bottom-0 left-0 top-0 z-40 h-full w-80 bg-gradient-to-r from-white via-white to-transparent dark:from-black dark:via-black/80">
                                </div>
                                <div
                                    class="absolute inset-y-0 right-0 z-40 h-full w-20 bg-gradient-to-l from-white via-white to-transparent duration-500 dark:from-black dark:via-black/70">
                                </div>
                                <div
                                    class="absolute inset-x-0 bottom-0 z-40 h-24 w-full bg-gradient-to-t from-white via-white to-transparent dark:from-black dark:via-black/80">
                                </div>
                                <div
                                    class="absolute inset-x-0 top-0 z-40 h-20 w-full bg-gradient-to-b from-white via-white to-transparent dark:from-black dark:via-black/60">
                                </div>
                                <div
                                    class="absolute inset-0 z-10 h-full w-full bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-white via-white to-white dark:from-fg/[0.15] dark:via-black dark:to-black">
                                </div>
                                <div
                                    class="relative h-28 flex-1 overflow-hidden rounded-lg border border-fg/20 z-20 flex justify-end [&amp;>svg]:ml-auto [&amp;>svg]:mr-6 [&amp;>svg]:rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 25" class="justd-icons m-auto h-16 w-16" data-slot="icon"
                                        aria-hidden="true">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M2.182 3.66C2 4.017 2 4.483 2 5.417v14.666c0 .934 0 1.4.182 1.757.16.314.414.569.728.728.357.182.823.182 1.757.182h14.666c.934 0 1.4 0 1.757-.182.314-.16.569-.414.728-.728.182-.357.182-.823.182-1.757V5.417c0-.934 0-1.4-.182-1.757a1.67 1.67 0 0 0-.728-.728c-.357-.182-.823-.182-1.757-.182H4.667c-.934 0-1.4 0-1.757.182-.314.16-.569.414-.728.728m15.677 11.927c1.763.715 2.358 1.48 2.504 2.393.14.785-.034 1.295-.06 1.37-.65 2.225-4.276 2.297-5.725.828l-.125-.14c-.236-.262-.4-.444-.555-.786l.774-.446.744-.43c.407.625.784.97 1.46 1.11.919.112 1.843-.204 1.636-1.179-.124-.462-.736-.72-1.45-1.023-.518-.22-1.089-.461-1.566-.819-1.152-.774-1.422-2.654-.475-3.728.316-.398.854-.694 1.418-.837l.59-.076c1.13-.022 1.838.276 2.357.856.145.146.262.304.483.646l-.309.197c-.33.21-.47.299-1.155.742a1.4 1.4 0 0 0-.814-.754c-.502-.152-1.135.013-1.266.543-.045.164-.036.316.036.586.165.375.643.579 1.145.792q.177.075.353.155m-6.857-3.645h1.87q0 .86.003 1.72c.002 1.145.004 2.287-.002 3.43q.001.233.005.46c.014.869.027 1.658-.336 2.327-.295.6-.857.993-1.51 1.183-1.002.23-1.96.099-2.673-.329-.477-.293-.85-.743-1.102-1.262l.76-.465.76-.467a.7.7 0 0 1 .09.141l.017.03c.194.325.361.555.69.717.323.11 1.033.18 1.306-.388.134-.23.127-.877.119-1.652q-.004-.295-.005-.608 0-1.212.004-2.419t.004-2.418"
                                            clip-rule="evenodd"></path>
                                    </svg></div><a
                                    class="relative flex h-28 flex-1 overflow-hidden rounded-lg border border-fg/20 z-20 opacity-50 duration-1000 hover:border-fg hover:opacity-100"
                                    href="/series/tags/inertia"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24"
                                        class="justd-icons m-auto h-16 w-16" data-slot="icon" aria-hidden="true">
                                        <path fill="currentColor"
                                            d="M8.101 6.743H2.35L7.907 12.3 2.35 17.857H8.1l5.557-5.557L8.1 6.743Z">
                                        </path>
                                        <path fill="currentColor"
                                            d="M16.793 6.743H11.04L16.6 12.3l-5.558 5.557h5.752L22.35 12.3z"></path>
                                    </svg><span class="sr-only">Go to /series/tags/inertia page</span></a><a
                                    class="relative flex h-28 flex-1 overflow-hidden rounded-lg border border-fg/20 z-20 duration-1000 hover:border-fg"
                                    href="/series/tags/php"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" fill="none" viewBox="0 0 24 25"
                                        class="justd-icons m-auto h-16 w-16" data-slot="icon" aria-hidden="true">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="m3 2.75 1.602 17.969 7.187 2.031 7.227-2.031L20.617 2.75zm5.899 8.125h8.046l-.625 6.797-4.492 1.25-4.57-1.25-.273-3.477h2.187l.156 1.758 2.5.664 2.422-.664.274-2.852H6.868l-.587-6.68h11.055l-.195 2.188H8.703z"
                                            clip-rule="evenodd"></path>
                                    </svg><span class="sr-only">Go to /series/tags/php page</span></a>
                                <div
                                    class="relative h-28 flex-1 overflow-hidden rounded-lg border border-fg/20 z-20 flex justify-end [&amp;>svg]:ml-auto [&amp;>svg]:mr-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 25" class="justd-icons m-auto h-16 w-16"
                                        data-slot="icon" aria-hidden="true">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="m3 2.75 1.602 17.969 7.187 2.031 7.227-2.031L20.617 2.75zm5.899 8.125h8.046l-.625 6.797-4.492 1.25-4.57-1.25-.273-3.477h2.187l.156 1.758 2.5.664 2.422-.664.274-2.852H6.868l-.587-6.68h11.055l-.195 2.188H8.703z"
                                            clip-rule="evenodd"></path>
                                    </svg></div><a
                                    class="relative flex h-28 flex-1 overflow-hidden rounded-lg border border-fg/20 z-20 duration-1000 hover:border-fg"
                                    href="/series"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" fill="none" viewBox="0 0 24 24"
                                        class="justd-icons m-auto h-16 w-16" data-slot="icon" aria-hidden="true">
                                        <path fill="currentColor" fill-opacity="0.3"
                                            d="M18.321 18.774c.306.328.821.348 1.123.017A10.024 10.024 0 1 0 2.92 16.206c.186.407.683.546 1.074.327.39-.218.526-.71.346-1.12A8.404 8.404 0 1 1 18.334 17.6c-.297.335-.318.846-.013 1.174">
                                        </path>
                                        <path fill="currentColor"
                                            d="M12.036 2.826c0-.45-.365-.818-.814-.782a10.025 10.025 0 1 0 10.806 10.807c.037-.45-.332-.815-.782-.815s-.811.366-.855.814a8.395 8.395 0 1 1-9.169-9.169c.448-.044.814-.404.814-.855">
                                        </path>
                                        <path fill="currentColor"
                                            d="M15.26 11.311a.824.824 0 0 1 0 1.428l-4.234 2.445a.824.824 0 0 1-1.237-.714V9.58a.824.824 0 0 1 1.237-.714z">
                                        </path>
                                    </svg><span class="sr-only">Go to /series page</span></a><a
                                    class="relative flex h-28 flex-1 overflow-hidden rounded-lg border border-fg/20 z-20 duration-1000 hover:border-fg"
                                    href="/series/tags/tailwind-css"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24"
                                        class="justd-icons m-auto h-16 w-16" data-slot="icon" aria-hidden="true">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M11.993 6c-2.662 0-4.32 1.324-4.99 3.97 1.004-1.323 2.168-1.817 3.506-1.497.756.189 1.31.742 1.905 1.338.975 1.004 2.11 2.153 4.582 2.153 2.662 0 4.335-1.324 5.004-3.971q-1.506 1.985-3.49 1.483c-.757-.189-1.31-.741-1.906-1.338C15.614 7.15 14.48 6 11.993 6m-4.99 5.964c-2.676 0-4.334 1.323-5.003 3.97 1.004-1.323 2.167-1.818 3.505-1.498.757.19 1.31.742 1.906 1.338.974 1.004 2.109 2.153 4.582 2.153 2.662 0 4.334-1.323 5.003-3.97-1.003 1.323-2.167 1.817-3.505 1.483-.756-.19-1.31-.742-1.905-1.338-.975-.99-2.11-2.138-4.582-2.138Z"
                                            clip-rule="evenodd"></path>
                                    </svg><span class="sr-only">Go to /series/tags/tailwind-css page</span></a>
                                <div
                                    class="relative h-28 flex-1 overflow-hidden rounded-lg border border-fg/20 z-20 flex justify-end [&amp;>svg]:ml-auto [&amp;>svg]:mr-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 25" class="justd-icons m-auto h-16 w-16"
                                        data-slot="icon" aria-hidden="true">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="m3 2.75 1.602 17.969 7.187 2.031 7.227-2.031L20.617 2.75zm3.672 8.125h8.046l.235-2.265H6.477L6.28 6.422h11.055l-1.016 11.25-4.492 1.25-4.57-1.25-.274-2.344 4.844 1.29 2.422-.664.274-2.852H6.867z"
                                            clip-rule="evenodd"></path>
                                    </svg></div><a
                                    class="relative flex h-28 flex-1 overflow-hidden rounded-lg border border-fg/20 z-20 duration-1000 hover:border-fg"
                                    href="/series/tags/laravel"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24"
                                        class="justd-icons m-auto h-16 w-16" data-slot="icon" aria-hidden="true">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M21.85 6.626a.3.3 0 0 1 .012.083v4.389a.32.32 0 0 1-.161.277l-3.684 2.121V17.7a.32.32 0 0 1-.16.277l-7.689 4.427q-.027.014-.056.023-.01.005-.022.009a.3.3 0 0 1-.164 0l-.025-.01q-.026-.009-.053-.022l-7.687-4.427A.32.32 0 0 1 2 17.7V4.534q0-.044.011-.084l.011-.027q.008-.026.02-.05l.023-.028q.013-.02.028-.037.015-.014.032-.024a.2.2 0 0 1 .035-.028l3.844-2.213a.32.32 0 0 1 .32 0l3.844 2.213q.02.013.036.027.016.011.032.024l.028.038q.012.014.022.028c.01.016.014.033.02.05q.007.013.012.027a.3.3 0 0 1 .011.084v8.223l3.203-1.844V6.709q0-.043.012-.083.005-.014.01-.028.01-.025.022-.05.01-.014.021-.028.014-.02.029-.037l.031-.024q.018-.016.035-.027l3.845-2.214a.32.32 0 0 1 .32 0l3.844 2.214q.02.013.036.027.016.011.031.024.016.018.029.037.012.014.021.029.014.024.021.05.007.013.011.027m-.63 4.287v-3.65l-3.203 1.845v3.65l3.204-1.845Zm-3.843 6.602v-3.652l-7.048 4.023v3.686zM2.64 5.088v12.427l7.047 4.057v-3.686l-3.682-2.083v-.001h-.002q-.018-.013-.035-.027-.016-.011-.03-.024h-.001q-.014-.016-.026-.034-.013-.015-.024-.032-.01-.02-.018-.04-.009-.018-.015-.037-.005-.023-.006-.047-.004-.018-.005-.036V6.932zM6.165 2.69 2.962 4.534l3.202 1.843 3.202-1.844zm3.523 10.436V5.088L6.485 6.932v8.038zm8.01-8.26-3.203 1.843 3.202 1.844L20.9 6.709zm-.321 4.242-3.204-1.845v3.65l3.204 1.844v-3.65Zm-7.369 8.224 7.045-4.022-3.2-1.842-7.042 4.054z"
                                            clip-rule="evenodd"></path>
                                    </svg><span class="sr-only">Go to /series/tags/laravel page</span></a><a
                                    class="relative flex h-28 flex-1 overflow-hidden rounded-lg border border-fg/20 z-20 duration-1000 hover:border-fg [&amp;>svg]:animate-[spin_24s_linear_infinite] [&amp;>svg]:[animation-delay:7s]"
                                    href="/series/tags/reactjs"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24"
                                        class="justd-icons m-auto h-16 w-16" data-slot="icon" aria-hidden="true">
                                        <path fill="currentColor"
                                            d="M21.951 11.623c0-1.325-1.659-2.58-4.203-3.359.587-2.593.326-4.655-.823-5.316a1.8 1.8 0 0 0-.913-.228v.909c.187 0 .338.037.464.106.555.318.795 1.529.608 3.086-.045.383-.118.787-.208 1.199a20 20 0 0 0-2.589-.445 20 20 0 0 0-1.696-2.038c1.33-1.235 2.577-1.912 3.425-1.912v-.91c-1.121 0-2.589.8-4.073 2.186-1.484-1.378-2.951-2.169-4.072-2.169v.91c.843 0 2.095.672 3.424 1.899-.57.6-1.142 1.28-1.684 2.034-.921.098-1.793.249-2.592.449a12 12 0 0 1-.212-1.183c-.192-1.557.044-2.768.595-3.09a.9.9 0 0 1 .469-.106v-.909c-.343 0-.653.074-.922.228-1.145.66-1.402 2.72-.811 5.304-2.536.783-4.187 2.034-4.187 3.355 0 1.325 1.66 2.58 4.203 3.36-.587 2.592-.326 4.655.824 5.315.265.155.575.229.917.229 1.121 0 2.589-.8 4.073-2.185 1.483 1.378 2.951 2.168 4.072 2.168.343 0 .652-.073.922-.228 1.145-.66 1.402-2.72.81-5.304 2.528-.778 4.18-2.034 4.18-3.355Zm-5.308-2.719c-.15.526-.338 1.068-.55 1.61a22 22 0 0 0-1.121-1.932 19 19 0 0 1 1.671.322m-1.867 4.342c-.318.55-.644 1.072-.982 1.557a21 21 0 0 1-3.677.004 21 21 0 0 1-1.834-3.172 21.7 21.7 0 0 1 1.826-3.184 21 21 0 0 1 3.677-.003 21 21 0 0 1 1.835 3.172 23 23 0 0 1-.845 1.626m1.317-.53c.22.546.408 1.092.563 1.622-.534.13-1.097.24-1.68.327a23 23 0 0 0 1.117-1.95Zm-4.134 4.35a17 17 0 0 1-1.133-1.305c.367.016.742.029 1.121.029q.576.001 1.134-.029c-.367.477-.746.913-1.122 1.305m-3.033-2.401a18 18 0 0 1-1.671-.323c.15-.526.338-1.068.55-1.61q.249.489.534.979a27 27 0 0 0 .587.954M11.94 6.18q.57.588 1.133 1.304a25 25 0 0 0-1.12-.028q-.577-.001-1.134.028c.367-.476.746-.913 1.121-1.304M8.922 8.582a23 23 0 0 0-1.117 1.945 18 18 0 0 1-.562-1.623 20 20 0 0 1 1.68-.322Zm-3.689 5.104c-1.443-.616-2.377-1.423-2.377-2.063s.934-1.451 2.377-2.063c.35-.15.734-.285 1.13-.411.232.799.537 1.63.916 2.482a19 19 0 0 0-.905 2.47 12 12 0 0 1-1.141-.415m2.193 5.826c-.554-.318-.795-1.53-.607-3.086.045-.384.118-.787.208-1.199.799.196 1.671.346 2.588.444.55.755 1.121 1.44 1.696 2.039-1.329 1.235-2.576 1.912-3.424 1.912a1 1 0 0 1-.46-.11Zm9.67-3.107c.192 1.557-.045 2.768-.595 3.09a.9.9 0 0 1-.469.106c-.844 0-2.095-.672-3.424-1.9.57-.599 1.141-1.28 1.683-2.034a19 19 0 0 0 2.593-.448q.143.618.212 1.186m1.57-2.719c-.351.15-.734.285-1.13.412a20 20 0 0 0-.917-2.483c.375-.848.677-1.675.905-2.47q.607.19 1.146.415c1.443.616 2.376 1.423 2.376 2.063-.004.64-.937 1.452-2.38 2.063">
                                        </path>
                                        <path fill="currentColor"
                                            d="M11.947 13.486a1.863 1.863 0 1 0 0-3.726 1.863 1.863 0 0 0 0 3.726">
                                        </path>
                                    </svg><span class="sr-only">Go to /series/tags/reactjs page</span></a><a
                                    class="relative flex h-28 flex-1 overflow-hidden rounded-lg border border-fg/20 z-20 col-start-2 animate-in slide-in-from-bottom [animation-duration:6s] hover:border-fg"
                                    href="/articles/tags/nextjs"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24"
                                        class="justd-icons m-auto h-16 w-16" data-slot="icon" aria-hidden="true">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10c2.088 0 4.026-.64 5.63-1.734L9.846 10.209v6.288H8.5V8.5h1.682l5.096 6.539V8.5h1.333v8h-.195l2.28 2.927A9.98 9.98 0 0 0 22 12c0-5.523-4.477-10-10-10"
                                            clip-rule="evenodd"></path>
                                    </svg><span class="sr-only">Go to /articles/tags/nextjs page</span></a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
