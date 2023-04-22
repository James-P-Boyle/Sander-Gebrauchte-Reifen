<header class="bg-ci-white dark:bg-ci-black py-4 flex flex-col gap-4 items-center justify-between shadow-sm mb-12">

    <div>
        <img src="/img/logo.svg" alt="Sander Gebrauchte Reifen logo" class="h-32 w-32" />
    </div>

    <nav class="flex flex-wrap justify-center gap-2 text-lg font-bold">
        <a href="{{ route('home') }}" class="text-ci-black dark:text-ci-white transition duration-100 hover:text-ci-black active:text-ci-black dark:hover:text-ci-white dark:active:text-ci-white {{ Route::is('home') ? 'underline' : '' }}">
            Home
        </a>
        <a
            href="{{ route('tire.index') }}"
            class="text-ci-black dark:text-ci-white transition duration-100 hover:text-ci-black {{ Route::is('tire.index') ? 'underline' : '' }}"
        >
            Tires
        </a>
        <a href={{ route('home').'#about' }} class="text-ci-black dark:text-ci-white transition duration-100 hover:text-ci-black active:text-ci-black dark:hover:text-ci-white dark:active:text-ci-white">
            About
        </a>
        <a href="#contact" class="text-ci-black dark:text-ci-white transition duration-100 hover:text-ci-black active:text-ci-black dark:hover:text-ci-white dark:active:text-ci-white">
            Contact
        </a>

    </nav>

</header>