<section id="contact" class="mx-auto py-14 my-14 lg:py-20 lg:my-20 container px-2 lg:px-8">
    <div class="flex flex-col gap-6 lg:flex-row">

        <div class="lg:w-1/2 flex flex-col gap-4">

            <div class="flex flex-col gap-4">
                <x-heading class="text-4xl lg:text-5xl">
                    Get in touch
                </x-heading>

                <p class="leading-relaxed text-ci-black-muted dark:text-ci-white-muted text-lg">
                    Looking for top-quality used tires for your business needs?
                </p>
            </div>

            <form
                class="flex flex-col gap-2 lg:pr-12"
                method="POST"
                action="{{ route('email') }}"
            >
                @csrf

                <div>
                    <label
                        for="first-name"
                        class="text-base md:text-lg text-ci-black-muted dark:text-ci-white-muted"
                    >
                        First name *
                    </label>
                    <input
                        id="first-name"
                        name="first-name"
                        class="w-full rounded border dark:bg-ci-black px-3 py-2 dark:text-ci-white outline-none ring-ci-black dark:ring-ci-white dark:border-0 transition duration-100 focus:ring-1"
                        value="{{ old('first-name') }}"
                    />
                    @error('first-name')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label
                        for="last-name"
                        class="text-base md:text-lg text-ci-black-muted dark:text-ci-white-muted"
                    >
                        Last name *
                    </label>
                    <input
                        id="last-name"
                        name="last-name"
                        value="{{ old('last-name') }}"
                        class="w-full rounded border dark:bg-ci-black px-3 py-2 dark:text-ci-white outline-none ring-ci-black dark:ring-ci-white dark:border-0 transition duration-100 focus:ring-1"
                    />
                    @error('last-name')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="">
                    <label
                        for="email"
                        class="text-base md:text-lg text-ci-black-muted dark:text-ci-white-muted"
                    >
                        Email *
                    </label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        value="{{ old('email') }}"
                        class="w-full rounded border dark:bg-ci-black px-3 py-2 dark:text-ci-white outline-none ring-ci-black dark:ring-ci-white dark:border-0 transition duration-100 focus:ring-1"
                    />
                    @error('email')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="">
                    <label
                        for="subject"
                        class="text-base md:text-lg text-ci-black-muted dark:text-ci-white-muted">
                        Subject *
                    </label>
                    <input
                        id="subject"
                        name="subject"
                        value="{{ old('subject') }}"
                        class="w-full rounded border dark:bg-ci-black px-3 py-2 dark:text-ci-white outline-none ring-ci-black dark:ring-ci-white dark:border-0 transition duration-100 focus:ring-1"
                    />
                    @error('subject')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="">
                    <label
                        for="message"
                        class="text-base md:text-lg text-ci-black-muted dark:text-ci-white-muted">
                            Message *
                    </label>
                    <textarea
                        id="message"
                        name="message"
                        value="{{ old('message') }}"
                        class="h-64 w-full rounded border dark:bg-ci-black px-3 py-2 dark:text-ci-white outline-none ring-ci-black dark:ring-ci-white dark:border-0 transition duration-100 focus:ring-1"></textarea>
                    @error('message')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="flex items-center col-span-2 gap-2 mt-2">

                    <x-button>Send</x-button>

                    <p class="text-xs text-ci-black-muted dark:text-ci-white-muted self-end">By pressing send you agree to our <a href="{{ route('privacy') }}" class="underline transition duration-100 text-ci-black font-bold dark:text-ci-white hover:text-ci-black active:text-ci-black">Privacy Policy</a>.</p>
                </div>

            </form>

        </div>

        @if(Route::currentRouteName() === 'home')
            <div class="lg:w-1/2 flex items-center relative">
                <x-map />
            </div>
        @else
            <div class="hidden lg:flex w-1/2 items-center relative">
                <x-bg-logo />
            </div>
        @endif

    </div>
</section>