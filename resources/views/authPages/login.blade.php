<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
    @vite('resources/js/script.js')
</head>

<body>
    <div id="navbar" class="fixed top-0 z-50 w-full">
        <div class="flex justify-between text-white">
            <a href="/">
                <h1 class="text-2xl font-medium p-6">DigiBlast</h1>
            </a>
            <div class="hidden sm:flex items-center gap-6 sm:px-4">
                <a href="/#section-about">About</a>
                <a href="/#section-pricing">Pricing</a>
                <a href="#footer">Contact</a>
                <div class="flex gap-2"><a href="/login" class="button button-success">Sign In</a>
                    <a href="/register" class="button button-transparent">Sign Up</a>
                </div>
            </div>
            <button id="menu-bars" class=" p-6 relative z-10 text-3xl top-0 sm:hidden"><i
                    class="fa-solid fa-bars icon-bar"></i></button>
            <div id="mobile-menu" class="sm:hidden flex absolute bg-white text-black w-full h-screen">
                <div class="flex flex-col items-start gap-6 absolute p-7">
                    <div class="flex gap-5"><a href="/login" class="button button-success">Sign In</a>
                        <a href="/register" class="button button-transparent">Sign Up</a>
                    </div>
                    <a href="#section-about">About</a>
                    <a href="#section-pricing">Pricing</a>
                    <a href="#footer">Contact</a>
                </div>
            </div>
        </div>
    </div>
    <div id="hero-section"
        class="relative overflow-hidden bg-gradient-to-t text-white from-black to-primary min-h-screen flex sm:flex-nowrap justify-center items-center gap-2 sm:pt-10">
        <div class="cube -z-0 rotate-45 top-0 -left-44"></div>
        <div class="cube -z-0 rotate-[60deg] bottom-0 opacity- -right-44"></div>
        <div class="flex flex-col relative z-10 items-center mx-5 min-h-52 w-full sm:w-1/3 sm:mx-0  bg-white-transparent rounded-xl text-white">
            <h1 class="text-3xl font-medium">Sign In</h1>
           
            <form action="" class="w-full p-3">
                <label for="email" class="block">Email</label>
                <input placeholder="example@gmail.com" name="email" type="email"
                    class="border border-stone-400 w-full rounded-sm p-1 text-sm">
                <label for="password" class="block pt-2">Password</label>
                <input placeholder="*******" name="password" type="password"
                    class="border border-stone-400 w-full rounded-sm p-1 text-sm">
                <div class="flex justify-end w-full pb-3"><a href="" class="text-sm">Forgot Password?</a></div>
                <button class="button button-success w-full">Sign In</button>
                <p class="text-center text-sm pt-1">Don't have an account? <a href="/register">sign up</a></p>
            </form>
        </div>
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