<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div id="navbar" class=" px-6 py-3 fixed top-0 w-full">
        <div class="flex justify-between text-white ">
            <h1 class="text-2xl font-medium">DigiBlast</h1>
            <div class="hidden sm:flex items-center gap-6">
                <a href="#section-about">About</a>
                <a href="#section-pricing">Pricing</a>
                <a href="#footer">Contact</a>
                <div class="flex gap-2"><a href="" class="button button-success">Sign In</a>
                    <a href="" class="button button-transparent">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
    <div id="hero-section"
        class="bg-gradient-to-t text-white from-black to-primary min-h-screen flex justify-between items-center pt-10">
        <div class="shrink-0 max-w-1/2 px-10 ">
            <h2 class="text-5xl">One Click For Everyone</h2>
            <p class="text-base text-stone-300 pb-5">DIGABLAST is a powerful tool that lets you send personalized
                WhatsApp
                messages to multiple contacts with a single click — no copy-pasting, no repetitive work.</p>
            <a href="" class="button button-white ">Learn More <span><i class="fa-solid fa-angle-right"></i></span></a>
        </div>
        <img class="h-auto w-1/2" src="/images/hero.png" alt="">
    </div>

    <div id="section-about" class="bg-black min-h-screen text-white pt-12">
        <h2 class="text-center text-5xl py-10">About</h2>
        <div class="flex items-center gap-10 justify-center">
            <img class="max-w-1/2 h-auto" src="/images/hero.png" alt="">
            <div class="flex-col flex gap-5">
                <div class="flex items-center gap-2">
                    <div class=" w-13 h-13 flex justify-center items-center">
                        <i class="fa-solid fa-arrow-pointer text-4xl "></i>
                    </div>
                    <div class="">
                        <h3 class="text-xl">One Click Broadcast</h3>
                        <p class="text-stone-300">Send your message to many contacts instantly.</p>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="w-13 h-13 flex justify-center items-center"> <i
                            class="fa-solid fa-clipboard-check text-4xl "></i></div>

                    <div class="">
                        <h3 class="text-xl">Easy to Use</h3>
                        <p class="text-stone-300">No technical skills required. Just upload your contacts and message.
                        </p>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="w-13 h-13 flex justify-center items-center"> <i class="fa-solid fa-bolt text-4xl"></i>
                    </div>

                    <div class="">
                        <h3 class="text-xl">Boost Engagement</h3>
                        <p class="text-stone-300">Perfect for promotions, updates, and customer support.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="section-pricing" class="bg-gradient-to-t from-primary to-black  min-h-screen text-white py-12">
        <h2 class="text-center text-5xl py-10">Pricing</h2>
        <div class="flex items-center justify-center flex-wrap gap-6">
            <div
                class="min-h-80 w-60 px-1 border-white border rounded-xl flex flex-col items-center p-2 justify-between">
                <div class="flex flex-col items-center gap-2">
                    <h3 class="text-2xl">Basic</h3>
                    <p class="text-xs text-stone-400 text-center">Perfect for individuals or small businesses just
                        getting started</p>
                    <h3 class="text-2xl">70K / <span class="text-base">month</span></h3>
                    <ul class="list-disc text-stone-300 space-y-2">
                        <li class="text-xs">Send up to 500 messages/month</li>
                        <li class="text-xs">Manual contact upload</li>
                        <li class="text-xs">1 WhatsApp number</li>
                        <li class="text-xs">Basic support</li>
                        <li class="text-xs"> No automation</li>
                    </ul>
                </div>
                <a href="" class="button button-white ">Select Plan
                    <span>
                        <i class="fa-solid fa-angle-right"></i>
                    </span>
                </a>
            </div>
            <div
                class="min-h-96 w-60 px-1 shadow-[0_0_10px_#fff] border-white border rounded-xl flex flex-col items-center p-2 justify-between">
                <div class="flex flex-col items-center gap-2">
                    <h3 class="text-2xl text-center">Pro<br>Best Offer</h3>
                    <p class="text-xs text-stone-400 text-center">Great for growing businesses needing more scale</p>
                    <h3 class="text-2xl">120K / <span class="text-base">month</span></h3>
                    <ul class="list-disc text-stone-300 space-y-2">
                        <li class="text-xs">Send up to 5,000 messages/month</li>
                        <li class="text-xs">Contact grouping & tags</li>
                        <li class="text-xs">Message scheduling</li>
                        <li class="text-xs">2 WhatsApp numbers</li>
                        <li class="text-xs">Priority support</li>
                    </ul>
                </div>
                <a href="" class="button button-solid-white ">Select Plan
                    <span>
                        <i class="fa-solid fa-angle-right"></i>
                    </span>
                </a>
            </div>

            <div
                class="min-h-80 w-60 px-1 border-white border rounded-xl flex flex-col items-center p-2 justify-between">
                <div class="flex flex-col items-center gap-2">
                    <h3 class="text-2xl">Business</h3>
                    <p class="text-xs text-stone-400 text-center">For teams and enterprises with high-volume needs</p>
                    <h3 class="text-2xl">230K / <span class="text-base">month</span></h3>
                    <ul class="list-disc text-stone-300 space-y-2">
                        <li class="text-xs">Unlimited messages</li>
                        <li class="text-xs">Multiple user seats</li>
                        <li class="text-xs">Custom sender ID</li>
                        <li class="text-xs">Dedicated support & onboarding</li>
                    </ul>
                </div>
                <a href="" class="button button-white ">Select Plan
                    <span>
                        <i class="fa-solid fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>
    </div>

    <div id="cta" class="min-h-52 bg-white flex justify-center items-center flex-col text-center">
        <h1 class="text-4xl font-medium">Simplify Your WhatsApp Communication Today.</h1>
        <h2 class="text-base text-stone-400">Reach more people, faster — with just one click.</h2>
    </div>

    <div id="footer" class="min-h-32 bg-black text-white py-10 px-5">
        <div class="flex justify-between">
            <h1 class="text-2xl font-medium">DigiBlast</h1>
            <div class="flex gap-10 text-stone-700">
                <div class="">
                    <h4 class="text-white text-lg">About</h4>
                    <a href="" class="block">Faq</a>
                    <a href="" class="block">Benefit</a>
                    <a href="" class="block">Pricing</a>
                </div>
                <div class="">
                    <h4 class="text-white text-lg">Support</h4>
                    <a href="" class="block">Email</a>
                    <a href="" class="block">Whatsapp</a>
                    <a href="" class="block">Github</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>