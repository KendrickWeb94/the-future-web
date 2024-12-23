<div  class="bg-primary/15 navbar w-full h-auto py-4">
    <div class="w-full mx-auto max-w-[91%] h-auto relative">
        <div class="w-full flex items-center justify-between gap-4">
            <x-logo />
            <ul class="list-none flex items-center gap-6">
                <a class="ds:hidden sm:block" href="{{ route('login') }}">
                    <button class="btn-link">Login</button>
                </a>
                <a class="ds:hidden sm:block" href="{{ route('register') }}">
                    <div class="btn-primary text-sm">Open Account</div>
                </a>
                <button id="" class="menu-toggle">
                    <img src="{{ asset('assets/icons/menu.svg') }}" width="26" alt="">
                </button>
            </ul>
        </div>
        <div class="mobile-menu absolute hidden top-7 right-0">
            <div class="bg-white shadow-2xl rounded-md w-[200px] h-auto py-2">
                <ul class="list-none">
                    <li class="w-full pb-2 border-gray-400/25"></li>
                    <li
                        class="w-full  py-3 smooth hover:bg-primary hover:text-white font-inter px-3 text-xs cursor-pointer text-body_text border-gray-400/25">
                        <a href="{{ route('features') }}">Product Features</a>
                    </li>
                    <li
                        class="w-full  py-3 smooth hover:bg-primary hover:text-white font-inter px-3 text-xs cursor-pointer text-body_text border-gray-400/25">
                        <a href="{{ route('usage') }}">Product Usage</a>
                    </li>
                    <li
                        class="w-full  py-3 smooth hover:bg-primary hover:text-white font-inter px-3 text-xs cursor-pointer text-body_text border-gray-400/25">
                        <a href="{{ route('support') }}">Customer Support</a>
                    </li>
                    <li
                        class="w-full  py-3 smooth hover:bg-primary hover:text-white font-inter px-3 text-xs cursor-pointer text-body_text border-gray-400/25">
                        <a href="{{ route('blog') }}">Blog & Updates</a>
                    </li>
                    <li
                        class="w-full sm:hidden px-2 ds:block py-2 smooth">
                        <a class="" href="{{ route('register') }}">
                            <div class="btn-primary text-sm">Open Account</div>
                        </a>
                    </li>
                    <li
                        class="w-full sm:hidden ds:block py-3 smooth hover:bg-primary hover:text-white font-inter px-3 text-xs cursor-pointer text-body_text border-gray-400/25">
                        <a href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script>
    let toggleBtns = document.querySelectorAll(".menu-toggle");
    let mobileMenus = document.querySelectorAll(".mobile-menu");

    toggleBtns.forEach((toggleBtn, index) => {
        toggleBtn.addEventListener("click", () => {
            let mobileMenu = mobileMenus[index]; // Match corresponding menu to button
            if (mobileMenu.classList.contains("hidden")) {
                mobileMenu.classList.remove("hidden");
                mobileMenu.classList.add("block");
            } else {
                mobileMenu.classList.remove("block");
                mobileMenu.classList.add("hidden");
            }
        });
    });

let HeaderScroll = document.querySelector(".navbar");
let TextScroll = document.querySelector(".btn-link");

window.addEventListener("scroll", () => {
  if (window.scrollY > 50) {
    HeaderScroll.classList.add("active");
    TextScroll.classList.add("text-active");
  } else {
    HeaderScroll.classList.remove("active");
    TextScroll.classList.remove("text-active");
  }
});
</script>


<!-- i have -

Product Features
Product Usage
Customer Support
blog & Updates

-->
