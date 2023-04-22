<footer class="bg-ci-white dark:bg-ci-black">
    <div class="flex flex-col items-center justify-center gap-4 border-t py-6 dark:border-0">
        <nav class="flex flex-wrap justify-center gap-6 text-lg">
            <a href="{{ route('home') }}" class="text-ci-black dark:text-ci-white transition duration-100 hover:text-ci-black active:text-ci-black dark:hover:text-ci-white dark:active:text-ci-white {{ Route::is('home') ? 'underline' : '' }}">
                Home
            </a>
            <a
                href="{{ route('tire.index') }}"
                class="text-ci-black dark:text-ci-white transition duration-100 hover:text-ci-black {{ Route::is('tire.index') ? 'underline' : '' }}"
            >
                Our Tires
            </a>
            <a href="#contact" class="text-ci-black dark:text-ci-white transition duration-100 hover:text-ci-black active:text-ci-black dark:hover:text-ci-white dark:active:text-ci-white">
                Contact
            </a>
            <a href="{{ route('privacy') }}" class="text-ci-black dark:text-ci-white transition duration-100 hover:text-ci-black active:text-ci-black dark:hover:text-ci-white dark:active:text-ci-white {{ Route::is('privacy') ? 'underline' : '' }}">
                Privacy Policy
            </a>
        </nav>
    </div>

    <div class="py-6 max-w-md mx-auto text-center text-sm text-ci-black dark:text-ci-white border-t dark:border-0">
        <span>© 2023 - Sander Gebrauchte Reifen. All rights reserved.</span>
    </div>
</footer>