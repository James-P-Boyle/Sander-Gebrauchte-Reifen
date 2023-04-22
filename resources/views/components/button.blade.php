<button {{ $attributes->merge(['class' => 'rounded-lg bg-ci-black px-6 py-2 text-center text-sm font-semibold text-white outline-none ring-ci-black dark:ring-ci-white transition duration-100 hover:bg-ci-black focus-visible:ring active:bg-ci-black md:text-base']) }}>
    {{ $slot }}
</button>