<div>
    <div x-data="{ scrolled: false }" x-init="$watch('scrolled', value => { if (value) { document.getElementById('navbar').classList.add('backdrop-filter', 'backdrop-blur-lg'); } else { document.getElementById('navbar').classList.remove('backdrop-filter', 'backdrop-blur-lg'); } })" @scroll.window="scrolled = (window.scrollY > 0)">
        <nav id="navbar" class="navbar bg-transparent z-10 fixed top-0">
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
        </nav>
    </div>
</div>
