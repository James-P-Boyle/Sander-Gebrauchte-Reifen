@extends('layouts.main')

@section('content')

<section id="gallery" class="mx-auto pb-14 mb-14 lg:pb-20 lg:mb-20 container px-2 lg:px-8">

    <div class="flex flex-col gap-8">

        <div class="flex flex-row gap-4">
            <div>
                <img
                    src="../img/hero1.png"
                    loading="lazy"
                    alt="Wheel photo"
                    class="h-full w-full object-cover object-center rounded-lg"
                />
            </div>

            <div class="flex flex-col justify-between gap-4">

                <div class="flex flex-col gap-4">
                    <span class="text-lg text-ci-black-muted dark:text-ci-white-muted">
                        Wheel Type
                    </span>
                    <x-heading class="text-2xl lg:text-3xl ">
                        Wheel Title
                    </x-heading>
                </div>

                <p class="leading-relaxed text-lg text-ci-black-muted dark:text-ci-white-muted">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita molestias necessitatibus ullam voluptates veritatis repudiandae alias, hic quaerat debitis est.
                </p>

                <x-primary-link
                    href="{{ route('tire.show', 1) }}"
                    title="See full product details"
                >
                    View Product
                </x-primary-link>

            </div>
        </div>
        <div class="flex flex-row gap-4">
            <div>
                <img
                    src="../img/hero1.png"
                    loading="lazy"
                    alt="Wheel photo"
                    class="h-full w-full object-cover object-center rounded-lg"
                />
            </div>

            <div class="flex flex-col justify-between gap-4">

                <div class="flex flex-col gap-4">
                    <span class="text-lg text-ci-black-muted dark:text-ci-white-muted">
                        Wheel Type
                    </span>
                    <x-heading class="text-2xl lg:text-3xl ">
                        Wheel Title
                    </x-heading>
                </div>

                <p class="leading-relaxed text-lg text-ci-black-muted dark:text-ci-white-muted">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita molestias necessitatibus ullam voluptates veritatis repudiandae alias, hic quaerat debitis est.
                </p>

                <x-primary-link href="{{ route('tire.show', 1) }}">View Product</x-primary-link>

            </div>
        </div>
        <div class="flex flex-row gap-4">
            <div>
                <img
                    src="../img/hero1.png"
                    loading="lazy"
                    alt="Wheel photo"
                    class="h-full w-full object-cover object-center rounded-lg"
                />
            </div>

            <div class="flex flex-col justify-between gap-4">

                <div class="flex flex-col gap-4">
                    <span class="text-lg text-ci-black-muted dark:text-ci-white-muted">
                        Wheel Type
                    </span>
                    <x-heading class="text-2xl lg:text-3xl ">
                        Wheel Title
                    </x-heading>
                </div>

                <p class="leading-relaxed text-lg text-ci-black-muted dark:text-ci-white-muted">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita molestias necessitatibus ullam voluptates veritatis repudiandae alias, hic quaerat debitis est.
                </p>

                <x-primary-link href="{{ route('tire.show', 1) }}">View Product</x-primary-link>

            </div>
        </div>

    </div>

</section>

@include('sections.contact')

@endsection