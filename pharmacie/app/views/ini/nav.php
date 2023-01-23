<?php require APPROOT . '/views/ini/header.php'; ?>

<div class=" p-1 relative flex justify-around items-center bg-white hidden lg:flex ">
    <div class="font-sans text-sm font-normal text-neutral-400">Info :+212 55 755755 About Delivery information</div>
    <div class="font-sans text-lg font-semibold text-green-500">– FREE SHIPPING FOR ORDERS OVER $30 –</div>
    <div class="font-sans text-sm font-normal text-neutral-400">
        <select id="countries" class="border-none">
            <option selected>FAQ English</option>
            <option>France</option>
            <option>Arabe</option>
        </select>
    </div>

</div>
<hr>
<div class=" h-25 relative flex justify-between items-center bg-white  hidden lg:flex ">
    <a class="text-3xl font-bold leading-none" href="<?php echo URLROOT; ?>/Client/index">
        <img src="<?php echo URLROOT; ?>/img/logo1.png" class="h-36" alt="">
    </a>

    <div class=" relative mx-auto text-gray-600">
        <input class="border-2 border-gray-300 bg-white h-15 px-5 pr-16 rounded-lg text-sm focus:outline-none" type="search" name="search" placeholder="Search">
        <button type="submit" class="absolute right-0 top-0 mt-1 mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                <path fill="none" d="M0 0h24v24H0z" />
                <path d="M18.031 16.617l4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617zm-2.006-.742A6.977 6.977 0 0 0 18 11c0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7a6.977 6.977 0 0 0 4.875-1.975l.15-.15zm-3.847-8.699a2 2 0 1 0 2.646 2.646 4 4 0 1 1-2.646-2.646z" fill="rgba(102,188,137,1)" />
            </svg>
        </button>
    </div>
    <div class=" relative  flex mx-auto">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="64" height="64">
            <path fill="none" d="M0 0h24v24H0z" />
            <path d="M4 22a8 8 0 1 1 16 0h-2a6 6 0 1 0-12 0H4zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4z" fill="rgba(102,188,137,1)" />
        </svg>
        <div class="flex flex-col">
            <div class="font-sans text-lg font-normal text-slate-900">Account</div>
            <div>
            <?php if (isset($_SESSION['ID_user'])) : ?>
                <a href="<?php echo URLROOT; ?>/Users/login" class="font-sans text-sm font-normal text-neutral-400">En ligne</a>

                <?php else : ?>
                <a href="<?php echo URLROOT; ?>/Users/login" class="font-sans text-sm font-normal text-neutral-400">Login</a>
                <a href="<?php echo URLROOT; ?>/Users/register" class="font-sans text-sm font-normal text-neutral-400">/Register</a>
                <?php endif; ?>

            </div>
        </div>

    </div>
    <div class=" relative  flex mx-auto">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="64" height="64">
            <path fill="none" d="M0 0h24v24H0z" />
            <path d="M3.161 4.469a6.5 6.5 0 0 1 8.84-.328 6.5 6.5 0 0 1 9.178 9.154l-7.765 7.79a2 2 0 0 1-2.719.102l-.11-.101-7.764-7.791a6.5 6.5 0 0 1 .34-8.826zm1.414 1.414a4.5 4.5 0 0 0-.146 6.21l.146.154L12 19.672l5.303-5.304-3.535-3.535-1.06 1.06a3 3 0 1 1-4.244-4.242l2.102-2.103a4.501 4.501 0 0 0-5.837.189l-.154.146zm8.486 2.828a1 1 0 0 1 1.414 0l4.242 4.242.708-.706a4.5 4.5 0 0 0-6.211-6.51l-.153.146-3.182 3.182a1 1 0 0 0-.078 1.327l.078.087a1 1 0 0 0 1.327.078l.087-.078 1.768-1.768z" fill="rgba(102,188,137,1)" />
        </svg>
        <div class="flex flex-col">
            <div class="font-sans text-lg font-normal text-slate-900">Wishlist</div>
            <div class="font-sans text-sm font-normal text-neutral-400">Edit Your Wishlist</div>
        </div>
    </div>
    <div class=" relative  flex mx-auto">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="64" height="64">
            <path fill="none" d="M0 0h24v24H0z" />
            <path d="M7 8V6a5 5 0 1 1 10 0v2h3a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1h3zm0 2H5v10h14V10h-2v2h-2v-2H9v2H7v-2zm2-2h6V6a3 3 0 0 0-6 0v2z" fill="rgba(102,188,137,1)" />
        </svg>
        <div class="flex flex-col">
            <div class="font-sans text-lg font-normal text-slate-900">Cart</div>
            <div class="font-sans text-sm font-normal text-neutral-400">$0.00</div>
        </div>
    </div>
</div>
<hr>
<nav class="h-20  relative px-4 flex justify-between items-center bg-green-300">
    <a class="text-3xl font-bold leading-none" href="#">
        <img src="<?php echo URLROOT; ?>/img/logo2.png" class="h-36" alt="">

    </a>
    <div class="lg:hidden">
        <button class="navbar-burger flex items-center text-white p-3">
            <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20">
                <title>Mobile menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </button>
    </div>
    <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex justify-between  lg:items-center lg:w-auto lg:space-x-6" style="width: 40em;">
        <li><a class="text-xl text-white font-semibold hover:text-slate-800" href="<?php echo URLROOT; ?>/Client/index">Home</a></li>

        <li><a class="text-xl text-white font-semibold hover:text-slate-800" href="<?php echo URLROOT; ?>/Client/index#Shop">Shop</a></li>

        <li><a class="text-xl text-white font-semibold hover:text-slate-800" href="<?php echo URLROOT; ?>/Client/contact">Contact</a></li>
        <?php if (isset($_SESSION['ID_user'])) : ?>
            <?php if ($_SESSION['role'] == 1) : ?>
                <li><a class="text-xl text-white font-semibold hover:text-slate-800" href="<?php echo URLROOT; ?>/Admin/dashbord">dashbord</a></li>
            <?php endif; ?>
            <li>
                <a href="<?php echo URLROOT; ?>/Users/logout">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><path fill="none" d="M0 0h24v24H0z"/><path d="M5 11h8v2H5v3l-5-4 5-4v3zm-1 7h2.708a8 8 0 1 0 0-12H4A9.985 9.985 0 0 1 12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10a9.985 9.985 0 0 1-8-4z" fill="rgba(255,255,255,1)"/></svg>
                </a>
            </li>
        <?php endif; ?>

    </ul>
    <a class=" hidden lg:block text-xl text-white font-semibold   hover:border-solid hover:border-4 hover:border-bg-white " href="<?php echo URLROOT; ?>/Client/contact">ASK YOUR PHARMACIST</a>

</nav>
<!-- mobile -->
<div class="navbar-menu relative z-50 hidden">
    <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
    <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
        <div class="flex items-center mb-8">
            <a class="mr-auto text-3xl font-bold leading-none" href="#">
                <img src="<?php echo URLROOT; ?>/img/logo2.png" class="h-36" alt="">

            </a>
            <button class="navbar-close">
                <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div>
            <ul>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-white rounded" href="<?php echo URLROOT; ?>/Client/index">Home</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-white rounded" href="<?php echo URLROOT; ?>/Client/index#Shop">Shop</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-white rounded" href="<?php echo URLROOT; ?>/Client/contact">Contact</a>
                </li>
                <?php if (isset($_SESSION['ID_user'])) : ?>
                    <?php if ($_SESSION['role'] == 1) : ?>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-white rounded" href="<?php echo URLROOT; ?>/Admin/dashbord">dashbord</a>
                </li>
                <?php endif; ?>
                <?php endif; ?>

            </ul>
        </div>
        <div class="mt-auto">
            <div class="pt-6">

                <?php if (isset($_SESSION['ID_user'])) : ?>
                <a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-green-400 hover:bg-green-300 rounded-xl" href="<?php echo URLROOT; ?>/Users/logout">logout</a>
                <?php else : ?>

                <a class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold leading-none bg-gray-50 hover:bg-gray-100 rounded-xl" href="<?php echo URLROOT; ?>/Users/login">Sign in</a>
                <a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-green-400 hover:bg-green-300 rounded-xl" href="<?php echo URLROOT; ?>/Users/register">Sign Up</a>
                <?php endif; ?>
            </div>
            <p class="my-4 text-xs text-center text-gray-400">
                <span>Copyright © fadwa</span>
            </p>
        </div>
    </nav>
</div>
<script>
    // Burger menus
    document.addEventListener('DOMContentLoaded', function() {
        // open
        const burger = document.querySelectorAll('.navbar-burger');
        const menu = document.querySelectorAll('.navbar-menu');

        if (burger.length && menu.length) {
            for (var i = 0; i < burger.length; i++) {
                burger[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        // close
        const close = document.querySelectorAll('.navbar-close');
        const backdrop = document.querySelectorAll('.navbar-backdrop');

        if (close.length) {
            for (var i = 0; i < close.length; i++) {
                close[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        if (backdrop.length) {
            for (var i = 0; i < backdrop.length; i++) {
                backdrop[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }
    });
</script>