@extends('layouts.main')

@section('content')

<section id="gallery" class="mx-auto pb-14 mb-14 lg:pb-20 lg:mb-20 container px-2 lg:px-8">

    <div class="grid gap-4 md:grid-cols-2">

        <div class="space-y-4">
            <div class="relative overflow-hidden rounded-lg">
                <img
                    src="../img/hero1.png"
                    loading="lazy"
                    alt="Wheel photo"
                    class="h-full w-full object-cover object-center"
                />

                <span class="absolute left-0 top-0 rounded-br-lg bg-ci-black px-3 py-1.5 text-sm uppercase tracking-wider text-white">
                    Wheel
                </span>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="overflow-hidden rounded-lg">
                    <img
                        src="../img/hero1.png"
                        loading="lazy"
                        alt="Wheel photo"
                        class="h-full w-full object-cover object-center"
                    />
                </div>
                <div class="overflow-hidden rounded-lg">
                    <img
                       src="../img/hero1.png"
                        loading="lazy"
                        alt="Wheel photo"
                        class="h-full w-full object-cover object-center"
                    />
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-4">

            <div class="">
                <span class="text-lg text-ci-black-muted dark:text-ci-white-muted">
                    Wheel Type
                </span>
                <h1 class="text-2xl lg:text-3xl font-serif font-bold">
                    Wheel Title
                </h1>
                <span class="text-lg font-semibold">
                    Description
                </span>
            </div>

            <p class="leading-relaxed text-lg text-ci-black-muted dark:text-ci-white-muted">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita molestias necessitatibus ullam voluptates veritatis repudiandae alias, hic quaerat debitis est.
            </p>

            <x-primary-link
                href="#contact"
                title="Go to contact form"
            >
                Order
            </x-primary-link>

            <x-secondary-link
                href="{{ url()->previous() }}"
                title="Go back to previous page"
            >
                Go Back
            </x-secondary-link>

        </div>
    </div>

</section>

@include('sections.contact')

@endsection