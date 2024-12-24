@extends('layouts.guest') <!-- Extends guest.blade.php -->
@section('content')
<div>
    <div class="w-full py-1 px-4 bg-primary">
        <div class="flex items-center sm:flex-nowrap flex-wrap ds:justify-start sm:justify-center gap-3">
            <button
                class="ds:hidden bs:flex items-center justify-center bs:text-sm bg-gray-500/20 py-1 rounded-md px-3 text-white">New</button>
            <p class="bs:text-sm text-xs font-inter text-white">🌟️ Get unlimited access to updates from us weekly </p>
            <a href="{{ route('register') }}"
                class="text-white text-xs bs:text-sm font-medium hover:underline underline-offset-4">Register now</a>
        </div>
    </div>

    <x-navbar />
    <section class="hero h-auto bg-primary/15 pt-10">
        <div class="tw-container">
            <div class="w-full flex  lg:flex-nowrap flex-wrap justify-between gap-10">
                <div class="space-y-7 md:max-w-2xl">
                    <h1
                        class=" md:text-6xl ds:text-4xl font-inter text-balance font-bold md:leading-[4.5rem] text-heading_text">
                        Everything you need in one place
                    </h1>
                    <p className="font-inter font-semibold text-sm text-balance leading-7 text-text_light">
                        Our software is an all in one application that allows you to do
                        everything just in one place, isnt that wonderful? no more
                        minizing and switching , just from the comfort of one so that means you get to do more with
                        just one application
                    </p>
                    <div class="flex items-center gap-3">
                        <button class="btn-primary font-inter font-medium w-fit text-sm">Open Account</button>
                        <a class="text-primary" href="#about">More info about us</a>
                    </div>
                    <div class=" grid grid-cols-2 sm:grid-cols-2 gap-4">
                        <div class="flex items-center gap-4">
                            <button class="rounded-full bg-primary/30 text-primary p-1">
                                <img src="{{ asset('assets/icons/check.svg') }}" alt="">
                            </button>
                            <p class="text-body_text font-semibold text-sm">Ecommerce System</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <button class="rounded-full bg-primary/30 text-primary p-1">
                                <img src="{{ asset('assets/icons/check.svg') }}" alt="">
                            </button>
                            <p class="text-body_text font-semibold text-sm">Payments worldwide</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <button class="rounded-full bg-primary/30 text-primary p-1">
                                <img src="{{ asset('assets/icons/check.svg') }}" alt="">
                            </button>
                            <p class="text-body_text font-semibold text-sm">Flight Booking</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <button class="rounded-full bg-primary/30 text-primary p-1">
                                <img src="{{ asset('assets/icons/check.svg') }}" alt="">
                            </button>

                            <p class="text-body_text font-semibold text-sm">
                                Crypto Trading

                            </p>
                        </div>
                    </div>
                </div>
                <div class="">
                    <img src="{{ asset('assets/temp/Hero.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="companies w-full  bg-primary h-auto">
        <marquee direction="right" class="flex items-center gap-24">
            <div class="flex items-center gap-24">
                <img src="{{ asset('assets/clients/client1.png') }}" width="90" height="50" alt="">
                <img src="{{ asset('assets/clients/client2.png') }}" width="90" height="50" alt="">
                <img src="{{ asset('assets/clients/client3.png') }}" width="90" height="50" alt="">
                <img src="{{ asset('assets/clients/client5.png') }}" width="90" height="50" alt="">
                <img src="{{ asset('assets/clients/client6.png') }}" width="90" height="50" alt="">
                <img src="{{ asset('assets/clients/client7.png') }}" width="90" height="50" alt="">
                <img src="{{ asset('assets/clients/client8.png') }}" width="90" height="50" alt="">
            </div>
        </marquee>
    </section>
    <section class="w-full tw-container">
        <div class="w-full py-16">
            <div class="flex items-center gap-5 flex-wrap md:max-w-xl">
                <img src="{{ asset('assets/icons/logo-1.svg') }}" width="90" height="50" alt="">
                <img src="{{ asset('assets/icons/logo-2.svg') }}" width="70" height="50" alt="">
                <img src="{{ asset('assets/icons/logo-3.svg') }}" width="90" height="50" alt="">
                <img src="{{ asset('assets/icons/logo-4.svg') }}" width="70" height="50" alt="">
                <img src="{{ asset('assets/icons/logo-5.svg') }}" width="60" height="40" alt="">
                <img src="{{ asset('assets/icons/logo-6.svg') }}" width="70" height="50" alt="">
                <img src="{{ asset('assets/icons/logo-7.svg') }}" width="70" height="50" alt="">
                <img src="{{ asset('assets/icons/logo-8.svg') }}" width="70" height="50" alt="">
                <img src="{{ asset('assets/icons/logo-9.svg') }}" width="90" height="50" alt="">
                <img src="{{ asset('assets/icons/logo.svg') }}" width="90" height="50" alt="">
            </div>
        </div>
    </section>
    <section class="w-full tw-container ">
        <div class="w-full py-24">
            <div class="space-y-6">
                <h1 class="font-semibold">Tools</h1>
                <h2 class="text-6xl max-w-sm font-semibold">
                    Seemless
                    integration
                </h2>
                <p class="font-medium text-body_text">Our app offers a lot of features and a totally user friendly
                    interface</p>
            </div>
            <div class="pt-16 flex flex-wrap gap-5">
                <img src="{{ asset('assets/icons/features-lg.svg') }}" alt="">
            </div>
        </div>
    </section>
    <main class="w-full min-h-[70vh] overflow-hidden bg-primary/20">
        <section class="w-full tw-container">
            <div class="w-full flex-wrap flex justify-between">
                <div class="space-y-6 py-16">
                    <h2 class=" ds:text-4xl text-balance sm:text-6xl md:max-w-xl font-semibold">
                        Send & receive money instantly
                    </h2>
                    <p class="font-medium text-body_text max-w-xl">Send money and recieve money at a very fast rate with
                        no network issues and also no charges</p>
                </div>
                <img src="{{ asset('assets/temp/transactions.png') }}" class=" translate-y-3 w-[300px]" alt="">
            </div>
        </section>
    </main>
    <br>
    <br>
    <section class="w-full tw-container">
        <div class="w-full py-24 flex flex-wrap justify-between gap-14">
            <div class="space-y-6">
                <h1 class="font-semibold">Notifications</h1>
                <h2 class="text-6xl max-w-sm font-semibold">
                    Stay notified
                </h2>
                <p class="font-medium md:max-w-xl text-body_text">Stay notified with our ever running notification
                    system , that sends u notifications when you peform an activity</p>
            </div>
            <div class="w-[350px]">
                <img src="{{ asset('assets/temp/grid-notifications.png') }}" alt="">
            </div>
        </div>
    </section>
    <section class="w-full tw-container">
        <div class="w-full py-24 flex justify-between flex-col gap-14">
            <div class="space-y-6">
                <h1 class="font-semibold">Saving Accounts</h1>
                <h2 class="text-4xl w-full md:max-w-4xl text-balance font-semibold">
                    Organize your money the right way
                </h2>
                <p class="font-medium md:max-w-xl text-body_text">Introducing our saving account and spending tracker
                    ,this helps to manage the way you spend , mostly if you're on budget</p>
            </div>
            <div class="w-full">
                <div class="grid w-full grid-cols-2 xs:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
                    <div class="space-y-4 ds:w-[160px] xs:w-[220px]">
                        <img src="{{ asset('assets/icons/Frame1.svg') }}" alt="">
                        <div class="">
                            <h1 class=" text-body_text font-semibold">Dream bike</h1>
                            <p class=" text-text_light text-sm font-medium">200</p>
                        </div>
                    </div>
                    <div class="space-y-4 ds:w-[160px] xs:w-[220px]">
                        <img src="{{ asset('assets/icons/Frame2.svg') }}" alt="">
                        <div class="">
                            <h1 class=" text-body_text  font-semibold">Camera</h1>
                            <p class=" text-text_light text-sm font-medium">300$</p>
                        </div>
                    </div>
                    <div class="space-y-4 ds:w-[160px] xs:w-[220px]">
                        <img src="{{ asset('assets/icons/Frame3.svg') }}" alt="">
                        <div class="">
                            <h1 class=" text-body_text font-semibold">Holiday</h1>
                            <p class=" text-text_light text-sm font-medium">14000$</p>
                        </div>
                    </div>
                    <div class="space-y-4 ds:w-[160px] xs:w-[220px]">
                        <img src="{{ asset('assets/icons/Frame4.svg') }}" alt="">
                        <div class="">
                            <h1 class=" text-body_text font-semibold">New Laptop</h1>
                            <p class=" text-text_light text-sm font-medium">4000$</p>
                        </div>
                    </div>
                    <div class="space-y-4 ds:w-[160px] xs:w-[220px]">
                        <img src="{{ asset('assets/icons/Frame5.svg') }}" alt="">
                        <div class="">
                            <!-- <h1 class=" text-body_text font-semibold">Dream bike</h1>
                            <p class=" text-text_light text-sm font-medium">200</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full tw-container">
        <div class="d-flex w-full items-end justify-between gap-6 flex-wrap">
            <div class="ds:py-10 md:py-16 flex flex-wrap items-center justify-between gap-8">
                <div class="space-y-6">
                    <h1 class="font-semibold">Testimonials</h1>
                    <h2 class="ds:text-3xl sm:text-5xl text-heading_text text-balance md:max-w-3xl font-semibold">
                        People all over the world use our software
                    </h2>
                </div>
                <div>
                    <div class="flex items-center gap-3">
                        <button class=" rounded-full cursor-text flex items-center justify-center p-2 bg-primary/25 ">
                            <img src="{{ asset('assets/icons/star-filled.svg')}}" width="20" alt="">
                        </button>
                        <p class=" font-semibold text-body_text text-sm">Rated 4.8/5 from over 1000 users</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonials masonary grid ds:grid-cols-1 gap-4 xl:grid-cols-3 md:grid-cols-2">
            <div class="testimonial-box w-full row-span-1 rounded-md border p-4 border-primary space-y-5">
                <div class="flex items-center gap-1">
                    <img src="{{ asset('assets/icons/star-filled.svg')}}" width="15" alt="">
                    <img src="{{ asset('assets/icons/star-filled.svg')}}" width="15" alt="">
                    <img src="{{ asset('assets/icons/star-filled.svg')}}" width="15" alt="">
                    <img src="{{ asset('assets/icons/star-filled.svg')}}" width="15" alt="">
                    <img src="{{ asset('assets/icons/star-filled.svg')}}" width="15" alt="">
                </div>
                <h2 class="text-body_text text-sm font-semibold">
                    Chief Marketing Officer
                </h2>
                <p class="text-sm text-text_light leading-6">
                    As a busy executive, I’ve always struggled to keep up with multiple apps for banking, shopping, and
                    other daily tasks. The-Future has been a game changer for me. Now, I can do it all in one place
                    without stress
                </p>
                <div class="">
                    <h1 class="text-sm text-body_text font-semibold">Ngozi Okoro</h1>
                    <p class="text-sm text-text_light">TotalEnergies Nigeria</p>
                </div>
            </div>
            <div class="testimonial-box w-full md:row-span-2 rounded-md border p-4 border-primary space-y-5">
                <div class="flex items-center gap-1">
                    <img src="{{ asset('assets/icons/star-filled.svg')}}" width="15" alt="">
                    <img src="{{ asset('assets/icons/star-filled.svg')}}" width="15" alt="">
                    <img src="{{ asset('assets/icons/star-filled.svg')}}" width="15" alt="">
                    <img src="{{ asset('assets/icons/star-filled.svg')}}" width="15" alt="">
                    <img src="{{ asset('assets/icons/star-filled.svg')}}" width="15" alt="">
                </div>
                <h2 class="text-body_text text-sm font-semibold">
                    Executive Director
                </h2>
                <p class="text-sm text-text_light leading-6">
                    The-Future is revolutionary! I use it for everything, from monitoring my crypto investments to
                    booking flights for my team. It’s fast, secure, and reliable—a must-have app for professionals and
                    businesses alike
                    <br><br>
                    , it handles everything flawlessly. It’s truly the future of convenience
                </p>
                <div class="">
                    <h1 class="text-sm text-body_text font-semibold">Emeka Onwudiwe</h1>
                    <p class="text-sm text-text_light">Zenith Bank</p>
                </div>
                <br>
                <hr class="bg-primary">
                <br>
                <div class="flex items-center gap-1">
                    <img src="{{ asset('assets/icons/star-filled.svg')}}" width="15" alt="">
                    <img src="{{ asset('assets/icons/star-filled.svg')}}" width="15" alt="">
                    <img src="{{ asset('assets/icons/star-filled.svg')}}" width="15" alt="">
                    <img src="{{ asset('assets/icons/star-filled.svg')}}" width="15" alt="">
                    <img src="{{ asset('assets/icons/star-filled.svg')}}" width="15" alt="">
                </div>
                <h2 class="text-body_text text-sm font-semibold">
                    Regional Manager
                </h2>
                <p class="text-sm text-text_light leading-6">
                    The-Future is the perfect blend of innovation and efficiency. Whether I’m shopping online, booking
                    flights for my family, or monitoring my crypto assets, it handles everything flawlessly. It’s truly
                    the future of convenience!
                </p>
                <div class="">
                    <h1 class="text-sm text-body_text font-semibold">Tunde Abiola </h1>
                    <p class="text-sm text-text_light">Access Bank</p>
                </div>
            </div>
            <div class="testimonial-box w-full  rounded-md border p-4 border-primary space-y-5">
                <div class="flex items-center gap-1">
                    <img src="{{ asset('assets/icons/star-filled.svg')}}" width="15" alt="">
                    <img src="{{ asset('assets/icons/star-filled.svg')}}" width="15" alt="">
                    <img src="{{ asset('assets/icons/star-filled.svg')}}" width="15" alt="">
                    <img src="{{ asset('assets/icons/star-filled.svg')}}" width="15" alt="">
                    <img src="{{ asset('assets/icons/star-filled.svg')}}" width="15" alt="">
                </div>
                <h2 class="text-body_text text-sm font-semibold">
                    Managing Director
                </h2>
                <p class="text-sm text-text_light leading-6">
                    Switching to The-Future was the best decision I made for managing my personal and professional
                    transactions. From booking flights to managing my crypto portfolio, everything is seamless and
                    incredibly user-friendly. It’s the definition of convenience
                </p>
                <div class="">
                    <h1 class="text-sm text-body_text font-semibold">Adewale Balogun</h1>
                    <p class="text-sm text-text_light">Shell Nigeria</p>
                </div>
            </div>
            <div class="testimonial-box w-full  rounded-md border p-4 border-primary space-y-5">
                <div class="flex items-center gap-1">
                    <img src="{{ asset('assets/icons/star-filled.svg')}}" width="15" alt="">
                    <img src="{{ asset('assets/icons/star-filled.svg')}}" width="15" alt="">
                    <img src="{{ asset('assets/icons/star-filled.svg')}}" width="15" alt="">
                    <img src="{{ asset('assets/icons/star-filled.svg')}}" width="15" alt="">
                    <img src="{{ asset('assets/icons/star-filled.svg')}}" width="15" alt="">
                </div>
                <h2 class="text-body_text text-sm font-semibold">
                    Director of Operations
                </h2>
                <p class="text-sm text-text_light leading-6">
                    "I was skeptical at first, but The-Future exceeded my expectations. It has streamlined how I handle
                    ecommerce and banking while giving me access to the latest in crypto trading. Highly recommended!
                </p>
                <div class="">
                    <h1 class="text-sm text-body_text font-semibold">Fatima Yusuf</h1>
                    <p class="text-sm text-text_light">Nigerian Breweries</p>
                </div>
            </div>
            <div class="testimonial-box w-full  rounded-md border p-4 border-primary space-y-5">
                <div class="flex items-center gap-1">
                    <img src="{{ asset('assets/icons/star-filled.svg')}}" width="15" alt="">
                    <img src="{{ asset('assets/icons/star-filled.svg')}}" width="15" alt="">
                    <img src="{{ asset('assets/icons/star-filled.svg')}}" width="15" alt="">
                    <img src="{{ asset('assets/icons/star-filled.svg')}}" width="15" alt="">
                    <img src="{{ asset('assets/icons/star-filled.svg')}}" width="15" alt="">
                </div>
                <h2 class="text-body_text text-sm font-semibold">
                    Chief Technology Officer
                </h2>
                <p class="text-sm text-text_light leading-6">
                    The-Future is ahead of its time! It’s not just an app; it’s an all-in-one platform that makes my
                    life easier. I particularly love how it integrates flight bookings and secure banking transactions
                    seamlessly. Absolutely top-notch
                </p>
                <div class="">
                    <h1 class="text-sm text-body_text font-semibold">Chinedu Eze</h1>
                    <p class="text-sm text-text_light">Dangote Group</p>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full tw-container py-24">
        <div
            class="w-full rounded-3xl overflow-hidden px-6 bg-primary/20 flex justify-between gap-6 ds:flex-wrap md:items-center md:flex-nowrap min-h-[70vh]">
            <div class="p-6">
                <div class="space-y-6">
                    <h1 class="font-semibold">Mobile Banking</h1>
                    <h2 class=" ds:text-3xl md:text-4xl w-full md:max-w-lg font-inter text-balance font-semibold">
                     Experience   mobile banking at a whole new level
                    </h2>
                    <p class="font-medium text-sm w-full md:max-w-xl text-body_text">We integrated expense tracking and
                        mobile
                        banking
                        , so that way you get to keep track of your spending , without having to put down anything in
                        data ,just track as you spend</p>
                    <div class=" grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="flex items-center gap-4">
                            <button class="rounded-full bg-primary/30 text-primary p-1">
                                <img src="{{ asset('assets/icons/check.svg') }}" alt="">
                            </button>
                            <p class="text-body_text font-semibold text-sm">Instant transactions</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <button class="rounded-full bg-primary/30 text-primary p-1">
                                <img src="{{ asset('assets/icons/check.svg') }}" alt="">
                            </button>
                            <p class="text-body_text font-semibold text-sm">Payments worldwide</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <button class="rounded-full bg-primary/30 text-primary p-1">
                                <img src="{{ asset('assets/icons/check.svg') }}" alt="">
                            </button>
                            <p class="text-body_text font-semibold text-sm">Saving account</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <button class="rounded-full bg-primary/30 text-primary p-1">
                                <img src="{{ asset('assets/icons/check.svg') }}" alt="">
                            </button>

                            <p class="text-body_text  font-semibold text-sm">
                                100% mobile banking
                            </p>
                        </div>
                    </div>
                    <div class="flex sm:items-center flex-wrap gap-3">
                        <a href="#">
                            <img src="{{ asset('assets/temp/google-play.png') }}" class="object-cover" width="120"
                                alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('assets/temp/apple-store.png') }}" class="object-cover" height="80"
                                width="120" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <img src="{{ asset('assets/icons/app.svg') }}" width="288" class=" translate-y-7" alt="phone-app">
        </div>
    </section>
    <br><br>
    <main class="w-full tw-container pb-24">
        <div class="w-full flex justify-between gap-5 flex-wrap">
            <div class="space-y-5 md:w-[40%]">
                <h2 class="text-5xl max-w-sm font-semibold">
                    Need help?
                </h2>
                <br>
                <div class="flex my-3 items-center gap-4">
                    <button class=" bg-primary/20 text-primary rounded-full p-1 w-9 h-9 ">
                        <i class="bx bxs-phone text-xl"></i>
                    </button>
                    <div class="">
                        <h2 class="text-body_text  font-inter font-semibold">
                            +234 902 524 1052
                        </h2>
                        <p class="text-text_light font-medium">Support Hotline</p>
                    </div>

                </div>
                <div class="flex mt-5 items-center gap-4">
                    <button class=" bg-primary/20 text-primary rounded-full p-1 w-9 h-9 ">
                        <i class="bx bxs-phone text-xl"></i>
                    </button>
                    <div class="">
                        <h2 class="text-body_text  font-inter font-semibold">
                            the-future-support@gmail.com
                        </h2>
                        <p class="text-text_light font-medium">Support email</p>
                    </div>

                </div>
            </div>
            <div class="md:w-[50%] w-full">
                <div class="h-1 w-full mx-auto  my-5"></div>

                <!-- What is term -->
                <div class="transition hover:bg-primary/15 pb-3 border-b border-gray-300">
                    <!-- header -->
                    <div class="accordion-header cursor-pointer transition flex space-x-5 px-5 items-center h-16">
                        <i class="bx bx-plus"></i>
                        <h3 class="text-body_text font-semibold font-inter">What services do you offer?</h3>
                    </div>
                    <!-- Content -->
                    <div class="accordion-content px-5 pt-0 overflow-hidden max-h-0">
                        <p class="leading-6   font-inter font-normal text-text_normal pl-9 text-justify py-5">
                            Our app offers a wide range of services, including mobile banking, crypto, flight booking,
                            ecommerce, and a social media like feeling.
                        </p>

                    </div>
                </div>

                <!-- When to use Accordion Components -->
                <div class="transition hover:bg-primary/15 pb-3 border-b border-gray-300">
                    <!-- header -->
                    <div class="accordion-header cursor-pointer transition flex space-x-5 px-5 items-center h-16">
                        <i class="bx bx-plus"></i>
                        <h3 class="text-body_text font-semibold font-inter">How do you get your own virtual card?</h3>
                    </div>
                    <!-- Content -->
                    <div class="accordion-content px-5 pt-0 overflow-hidden max-h-0">
                        <p class="leading-6  font-inter font-normal text-text_normal pl-9 text-justify py-5">
                            simple , and no stress, it comes when you open an account , so you dont have to do anything
                            else to have it.
                        </p>

                    </div>
                </div>

                <!-- Accordion Wrapper -->
                <div class="transition hover:bg-primary/15 pb-3 border-b border-gray-300">
                    <!-- header -->
                    <div class="accordion-header cursor-pointer transition flex space-x-5 px-5 items-center h-16">
                        <i class="bx bx-plus"></i>
                        <h3 class="text-body_text font-semibold font-inter">How do i change my bank account limits?</h3>
                    </div>
                    <!-- Content -->
                    <div class="accordion-content px-5 pt-0 overflow-hidden max-h-0">
                        <p class="leading-6  font-inter font-normal text-text_normal pl-9 text-justify py-5">
                            you can simply go to your like the gear icon at the top of the app , this takes you to the
                            settings page, navigate to account limit , and change it
                        </p>

                    </div>
                </div>

                <!-- Accordion Wrapper -->
                <div class="transition hover:bg-primary/15 pb-3 border-b border-gray-300">
                    <!-- header -->
                    <div class="accordion-header cursor-pointer transition flex space-x-5 px-5 items-center h-16">
                        <i class="bx bx-plus"></i>
                        <h3 class="text-body_text font-semibold font-inter"> Can i have two accounts?</h3>
                    </div>
                    <!-- Content -->
                    <div class="accordion-content px-5 pt-0 overflow-hidden max-h-0">
                        <p class="leading-6  font-inter font-normal text-text_normal pl-9 text-justify py-5">
                            yes you can but we strongly advise against this, as it may interfere with a lot of things.
                        </p>

                    </div>
                </div>
            </div>
        </div>


</div>
</div>
</div>
</div>
<section class="blog-section w-full tw-container py-24">
    <div class="w-full grid-cat-3">
        <div class="space-y-5">
            <img src="{{ asset('assets/temp/blog-1.png') }}" class="rounded-md" alt="">
            <div class="space-y-4">
                <h1 class="font-semibold text-body_text text-lg">How to use The-future for your start up</h1>
                <p class="text-text_normal ">
                    Sadly this feature hasnt been made yet, we havent spread to a business module yet , but we would
                    keep you updated , because we are currently working on it
                </p>
                <div class="flex items-center gap-4">
                    <button
                        class="w-fit rounded-md py-1 px-3 text-sm font-medium bg-gray-300/35 text-heading_text">Product</button>
                    <button
                        class="w-fit rounded-md py-1 px-3 text-sm font-medium bg-gray-300/35 text-heading_text">Business</button>
                </div>
            </div>
        </div>
        <div class="space-y-5">
            <img src="{{ asset('assets/temp/blog-2.png') }}" class="rounded-md" alt="">
            <div class="space-y-4">
                <h1 class="font-semibold text-body_text text-lg">How we were able to set up "The-future"</h1>
                <p class="text-text_normal ">
                    clearly it's a lot ,but it was all based on resiliance and believing that we could do something that
                    would serve a lot of people and make them comfortable through software
                </p>
                <div class="flex items-center gap-4">
                    <button
                        class="w-fit rounded-md py-1 px-3 text-sm font-medium bg-gray-300/35 text-heading_text">Product</button>
                    <button
                        class="w-fit rounded-md py-1 px-3 text-sm font-medium bg-gray-300/35 text-heading_text">Company</button>
                </div>
            </div>
        </div>
        <div class="space-y-5">
            <img src="{{ asset('assets/temp/blog-3.png') }}" class="rounded-md" alt="">
            <div class="space-y-4">
                <h1 class="font-semibold text-body_text text-lg">improve your savings using our app </h1>
                <p class="text-text_normal ">
                    you can use the budget tracker feature on our app, to track your spending habits and savings, all
                    you need to do is fill in your budget and things you spend on
                </p>
                <div class="flex items-center gap-4">
                    <button
                        class="w-fit rounded-md py-1 px-3 text-sm font-medium bg-gray-300/35 text-heading_text">Lifestyle</button>
                    <button
                        class="w-fit rounded-md py-1 px-3 text-sm font-medium bg-gray-300/35 text-heading_text">Personal</button>
                </div>
            </div>
        </div>
    </div>
</section>
<x-to-top />
<x-footer />
</main>
</div>
@endsection


<!-- <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" alt="Laravel background" />
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        <div class="flex lg:justify-center lg:col-start-2">
                            <svg class="h-12 w-auto text-white lg:h-16 lg:text-[#FF2D20]" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="currentColor"/></svg>
                        </div>
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header>

                    <main class="mt-6">
                        <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                            <a
                                href="https://laravel.com/docs"
                                id="docs-card"
                                class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                            >
                                <div id="screenshot-container" class="relative flex w-full flex-1 items-stretch">
                                    <img
                                        src="https://laravel.com/assets/img/welcome/docs-light.svg"
                                        alt="Laravel documentation screenshot"
                                        class="aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.06)] dark:hidden"
                                        onerror="
                                            document.getElementById('screenshot-container').classList.add('!hidden');
                                            document.getElementById('docs-card').classList.add('!row-span-1');
                                            document.getElementById('docs-card-content').classList.add('!flex-row');
                                            document.getElementById('background').classList.add('!hidden');
                                        "
                                    />
                                    <img
                                        src="https://laravel.com/assets/img/welcome/docs-dark.svg"
                                        alt="Laravel documentation screenshot"
                                        class="hidden aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.25)] dark:block"
                                    />
                                    <div
                                        class="absolute -bottom-16 -left-16 h-40 w-[calc(100%+8rem)] bg-gradient-to-b from-transparent via-white to-white dark:via-zinc-900 dark:to-zinc-900"
                                    ></div>
                                </div>

                                <div class="relative flex items-center gap-6 lg:items-end">
                                    <div id="docs-card-content" class="flex items-start gap-6 lg:flex-col">
                                        <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                            <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><path fill="#FF2D20" d="M23 4a1 1 0 0 0-1.447-.894L12.224 7.77a.5.5 0 0 1-.448 0L2.447 3.106A1 1 0 0 0 1 4v13.382a1.99 1.99 0 0 0 1.105 1.79l9.448 4.728c.14.065.293.1.447.1.154-.005.306-.04.447-.105l9.453-4.724a1.99 1.99 0 0 0 1.1-1.789V4ZM3 6.023a.25.25 0 0 1 .362-.223l7.5 3.75a.251.251 0 0 1 .138.223v11.2a.25.25 0 0 1-.362.224l-7.5-3.75a.25.25 0 0 1-.138-.22V6.023Zm18 11.2a.25.25 0 0 1-.138.224l-7.5 3.75a.249.249 0 0 1-.329-.099.249.249 0 0 1-.033-.12V9.772a.251.251 0 0 1 .138-.224l7.5-3.75a.25.25 0 0 1 .362.224v11.2Z"/><path fill="#FF2D20" d="m3.55 1.893 8 4.048a1.008 1.008 0 0 0 .9 0l8-4.048a1 1 0 0 0-.9-1.785l-7.322 3.706a.506.506 0 0 1-.452 0L4.454.108a1 1 0 0 0-.9 1.785H3.55Z"/></svg>
                                        </div>

                                        <div class="pt-3 sm:pt-5 lg:pt-0">
                                            <h2 class="text-xl font-semibold text-black dark:text-white">Documentation</h2>

                                            <p class="mt-4 text-sm/relaxed">
                                                Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                                            </p>
                                        </div>
                                    </div>

                                    <svg class="size-6 shrink-0 stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg>
                                </div>
                            </a>

                            <a
                                href="https://laracasts.com"
                                class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                            >
                                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                    <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><g fill="#FF2D20"><path d="M24 8.25a.5.5 0 0 0-.5-.5H.5a.5.5 0 0 0-.5.5v12a2.5 2.5 0 0 0 2.5 2.5h19a2.5 2.5 0 0 0 2.5-2.5v-12Zm-7.765 5.868a1.221 1.221 0 0 1 0 2.264l-6.626 2.776A1.153 1.153 0 0 1 8 18.123v-5.746a1.151 1.151 0 0 1 1.609-1.035l6.626 2.776ZM19.564 1.677a.25.25 0 0 0-.177-.427H15.6a.106.106 0 0 0-.072.03l-4.54 4.543a.25.25 0 0 0 .177.427h3.783c.027 0 .054-.01.073-.03l4.543-4.543ZM22.071 1.318a.047.047 0 0 0-.045.013l-4.492 4.492a.249.249 0 0 0 .038.385.25.25 0 0 0 .14.042h5.784a.5.5 0 0 0 .5-.5v-2a2.5 2.5 0 0 0-1.925-2.432ZM13.014 1.677a.25.25 0 0 0-.178-.427H9.101a.106.106 0 0 0-.073.03l-4.54 4.543a.25.25 0 0 0 .177.427H8.4a.106.106 0 0 0 .073-.03l4.54-4.543ZM6.513 1.677a.25.25 0 0 0-.177-.427H2.5A2.5 2.5 0 0 0 0 3.75v2a.5.5 0 0 0 .5.5h1.4a.106.106 0 0 0 .073-.03l4.54-4.543Z"/></g></svg>
                                </div>

                                <div class="pt-3 sm:pt-5">
                                    <h2 class="text-xl font-semibold text-black dark:text-white">Laracasts</h2>

                                    <p class="mt-4 text-sm/relaxed">
                                        Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                    </p>
                                </div>

                                <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg>
                            </a>

                            <a
                                href="https://laravel-news.com"
                                class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                            >
                                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                    <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><g fill="#FF2D20"><path d="M8.75 4.5H5.5c-.69 0-1.25.56-1.25 1.25v4.75c0 .69.56 1.25 1.25 1.25h3.25c.69 0 1.25-.56 1.25-1.25V5.75c0-.69-.56-1.25-1.25-1.25Z"/><path d="M24 10a3 3 0 0 0-3-3h-2V2.5a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2V20a3.5 3.5 0 0 0 3.5 3.5h17A3.5 3.5 0 0 0 24 20V10ZM3.5 21.5A1.5 1.5 0 0 1 2 20V3a.5.5 0 0 1 .5-.5h14a.5.5 0 0 1 .5.5v17c0 .295.037.588.11.874a.5.5 0 0 1-.484.625L3.5 21.5ZM22 20a1.5 1.5 0 1 1-3 0V9.5a.5.5 0 0 1 .5-.5H21a1 1 0 0 1 1 1v10Z"/><path d="M12.751 6.047h2a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-2A.75.75 0 0 1 12 7.3v-.5a.75.75 0 0 1 .751-.753ZM12.751 10.047h2a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-2A.75.75 0 0 1 12 11.3v-.5a.75.75 0 0 1 .751-.753ZM4.751 14.047h10a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-10A.75.75 0 0 1 4 15.3v-.5a.75.75 0 0 1 .751-.753ZM4.75 18.047h7.5a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-7.5A.75.75 0 0 1 4 19.3v-.5a.75.75 0 0 1 .75-.753Z"/></g></svg>
                                </div>

                                <div class="pt-3 sm:pt-5">
                                    <h2 class="text-xl font-semibold text-black dark:text-white">Laravel News</h2>

                                    <p class="mt-4 text-sm/relaxed">
                                        Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                    </p>
                                </div>

                                <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg>
                            </a>

                            <div class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                    <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <g fill="#FF2D20">
                                            <path
                                                d="M16.597 12.635a.247.247 0 0 0-.08-.237 2.234 2.234 0 0 1-.769-1.68c.001-.195.03-.39.084-.578a.25.25 0 0 0-.09-.267 8.8 8.8 0 0 0-4.826-1.66.25.25 0 0 0-.268.181 2.5 2.5 0 0 1-2.4 1.824.045.045 0 0 0-.045.037 12.255 12.255 0 0 0-.093 3.86.251.251 0 0 0 .208.214c2.22.366 4.367 1.08 6.362 2.118a.252.252 0 0 0 .32-.079 10.09 10.09 0 0 0 1.597-3.733ZM13.616 17.968a.25.25 0 0 0-.063-.407A19.697 19.697 0 0 0 8.91 15.98a.25.25 0 0 0-.287.325c.151.455.334.898.548 1.328.437.827.981 1.594 1.619 2.28a.249.249 0 0 0 .32.044 29.13 29.13 0 0 0 2.506-1.99ZM6.303 14.105a.25.25 0 0 0 .265-.274 13.048 13.048 0 0 1 .205-4.045.062.062 0 0 0-.022-.07 2.5 2.5 0 0 1-.777-.982.25.25 0 0 0-.271-.149 11 11 0 0 0-5.6 2.815.255.255 0 0 0-.075.163c-.008.135-.02.27-.02.406.002.8.084 1.598.246 2.381a.25.25 0 0 0 .303.193 19.924 19.924 0 0 1 5.746-.438ZM9.228 20.914a.25.25 0 0 0 .1-.393 11.53 11.53 0 0 1-1.5-2.22 12.238 12.238 0 0 1-.91-2.465.248.248 0 0 0-.22-.187 18.876 18.876 0 0 0-5.69.33.249.249 0 0 0-.179.336c.838 2.142 2.272 4 4.132 5.353a.254.254 0 0 0 .15.048c1.41-.01 2.807-.282 4.117-.802ZM18.93 12.957l-.005-.008a.25.25 0 0 0-.268-.082 2.21 2.21 0 0 1-.41.081.25.25 0 0 0-.217.2c-.582 2.66-2.127 5.35-5.75 7.843a.248.248 0 0 0-.09.299.25.25 0 0 0 .065.091 28.703 28.703 0 0 0 2.662 2.12.246.246 0 0 0 .209.037c2.579-.701 4.85-2.242 6.456-4.378a.25.25 0 0 0 .048-.189 13.51 13.51 0 0 0-2.7-6.014ZM5.702 7.058a.254.254 0 0 0 .2-.165A2.488 2.488 0 0 1 7.98 5.245a.093.093 0 0 0 .078-.062 19.734 19.734 0 0 1 3.055-4.74.25.25 0 0 0-.21-.41 12.009 12.009 0 0 0-10.4 8.558.25.25 0 0 0 .373.281 12.912 12.912 0 0 1 4.826-1.814ZM10.773 22.052a.25.25 0 0 0-.28-.046c-.758.356-1.55.635-2.365.833a.25.25 0 0 0-.022.48c1.252.43 2.568.65 3.893.65.1 0 .2 0 .3-.008a.25.25 0 0 0 .147-.444c-.526-.424-1.1-.917-1.673-1.465ZM18.744 8.436a.249.249 0 0 0 .15.228 2.246 2.246 0 0 1 1.352 2.054c0 .337-.08.67-.23.972a.25.25 0 0 0 .042.28l.007.009a15.016 15.016 0 0 1 2.52 4.6.25.25 0 0 0 .37.132.25.25 0 0 0 .096-.114c.623-1.464.944-3.039.945-4.63a12.005 12.005 0 0 0-5.78-10.258.25.25 0 0 0-.373.274c.547 2.109.85 4.274.901 6.453ZM9.61 5.38a.25.25 0 0 0 .08.31c.34.24.616.561.8.935a.25.25 0 0 0 .3.127.631.631 0 0 1 .206-.034c2.054.078 4.036.772 5.69 1.991a.251.251 0 0 0 .267.024c.046-.024.093-.047.141-.067a.25.25 0 0 0 .151-.23A29.98 29.98 0 0 0 15.957.764a.25.25 0 0 0-.16-.164 11.924 11.924 0 0 0-2.21-.518.252.252 0 0 0-.215.076A22.456 22.456 0 0 0 9.61 5.38Z"
                                            />
                                        </g>
                                    </svg>
                                </div>

                                <div class="pt-3 sm:pt-5">
                                    <h2 class="text-xl font-semibold text-black dark:text-white">Vibrant Ecosystem</h2>

                                    <p class="mt-4 text-sm/relaxed">
                                        Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white dark:focus-visible:ring-[#FF2D20]">Forge</a>, <a href="https://vapor.laravel.com" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Vapor</a>, <a href="https://nova.laravel.com" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Nova</a>, <a href="https://envoyer.io" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Envoyer</a>, and <a href="https://herd.laravel.com" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Herd</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Echo</a>, <a href="https://laravel.com/docs/horizon" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Telescope</a>, and more.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </main>

                    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </footer>
                </div>
            </div>
        </div> -->
