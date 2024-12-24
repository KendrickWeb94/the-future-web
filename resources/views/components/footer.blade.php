<footer class="bg-gray-300/15 w-full min-h-[80vh] py-16 mt-28">
    <div class=" tw-container flex gap-16 flex-col w-full">
        <div class="w-full grid ds:grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-10">
            <div class="col-1 col-span-2">
                <x-logo />
            </div>
            <div class="col-2 space-y-4">
                <h1 class="text-body_text font-semibold">
                    Quick Links
                </h1>
                <ul class="list-none flex flex-col gap-3">
                    <li class="text-sm text-text_normal smooth hover:pl-4 hover:text-primary">
                        <a href="{{ route('features') }}">Product Features</a>
                    </li>
                    <li class="text-sm text-text_normal smooth hover:pl-4 hover:text-primary">
                        <a href="{{ route('usage') }}">Product Usage</a>
                    </li>
                    <li class="text-sm text-text_normal smooth hover:pl-4 hover:text-primary">
                        <a href="{{ route('support') }}">Customer Support</a>
                    </li>
                    <li class="text-sm text-text_normal smooth hover:pl-4 hover:text-primary">
                        <a href="{{ route('blog') }}">Blog & Updates</a>
                    </li>
                    <li class="text-sm text-text_normal smooth hover:pl-4 hover:text-primary">
                        <a class="" href="{{ route('register') }}">Open account </a>
                    </li>
                    <li class="text-sm text-text_normal smooth hover:pl-4 hover:text-primary">
                        <a href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
            </div>
            <!-- <div class="col-3 space-y-4">
                <h1 class="text-body_text font-semibold">
                    About The-future
                </h1>
                <ul class="list-none flex flex-col gap-3">
                    <li class="text-sm text-text_normal smooth hover:pl-4 hover:text-primary">
                        <a href="##">Our Background</a>
                    </li>
                    <li class="text-sm text-text_normal smooth hover:pl-4 hover:text-primary">
                        <a href="##">Our story</a>
                    </li>
                    <li class="text-sm text-text_normal smooth hover:pl-4 hover:text-primary">
                        <a href="##">Our goals & Aims</a>
                    </li>

                </ul>
            </div> -->
            <div class="col-4 space-y-4">
                <h1 class="text-body_text font-semibold">
                    Multi Platform
                </h1>
                <ul class="list-none flex flex-col gap-3">
                    <li class="text-sm text-text_normal smooth hover:pl-4 hover:text-primary">
                        <a href="##">Web Version (coming soon)</a>
                    </li>
                    <li class="text-sm text-text_normal smooth hover:pl-4 hover:text-primary">
                        <a href="##">Mobile devices</a>
                    </li>
                    <li class="text-sm text-text_normal smooth hover:pl-4 hover:text-primary">
                        <a href="##">Ipads</a>
                    </li>
                    <li class="text-sm text-text_normal smooth hover:pl-4 hover:text-primary">
                        <a href="##">Tablets</a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="flex items-center gap-5">
            <button
                class="w-8 h-8 bg-transparent smooth hover:rounded-full hover:bg-primary hover:text-white text-body_text text-xl">
                <i class="bx bxl-facebook"></i>
            </button>
            <button
                class="w-8 h-8 bg-transparent smooth hover:rounded-full hover:bg-primary hover:text-white text-body_text text-xl">
                <i class="bx bxl-whatsapp"></i>
            </button>
            <button
                class="w-8 h-8 bg-transparent smooth hover:rounded-full hover:bg-primary hover:text-white text-body_text text-xl">
                <i class="bx bxl-instagram"></i>
            </button>
            <button
                class="w-8 h-8 bg-transparent smooth hover:rounded-full hover:bg-primary hover:text-white text-body_text text-xl">
                <i class="bx bxl-twitter"></i>
            </button>
            <button
                class="w-8 h-8 bg-transparent smooth hover:rounded-full hover:bg-primary hover:text-white text-body_text text-xl">
                <i class="bx bxl-youtube"></i>
            </button>
            <button
                class="w-8 h-8 bg-transparent smooth hover:rounded-full hover:bg-primary hover:text-white text-body_text text-xl">
                <i class="bx bxl-medium"></i>
            </button>
        </div>
        <hr>
        <div class="w-full flex items-center flex-wrap justify-between gap-8">
            <p class="text-heading_text font-interMedium text-sm md:max-w-[50%]">We Advise we go through these terms
                andd policies to know if
                you should agree to usage agreement and privacy and how we can help secure your account</p>
            <div class="flex items-center gap-4">
                <p class="text-body_text text-sm hover:text-black hover:underline underline-offset-4 cursor-pointer">
                    Terms</p>
                <p class="text-body_text text-sm hover:text-black hover:underline underline-offset-4 cursor-pointer">
                    Privacy</p>
                <p class="text-body_text text-sm hover:text-black hover:underline underline-offset-4 cursor-pointer">
                    Security</p>
            </div>
        </div>
    </div>
</footer>
