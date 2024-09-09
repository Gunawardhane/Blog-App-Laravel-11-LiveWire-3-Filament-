<footer class="flex flex-wrap items-center justify-between px-4 py-4 text-sm border-t border-gray-100 ">

    <div class="flex space-x-4">

        <a href="{{ route('locale', 'en') }}"><x-flag-country-us class="w-6 h-6 border-2 border-gray-500" /></a>
        <a href="{{ route('locale', 'si') }}"><x-flag-country-lk class="w-6 h-6 border-2 border-gray-500" /></a>

    </div>
    <div class="flex space-x-4">
        <a class="text-gray-500 hover:text-yellow-500" href="">{{ __('menu.login') }} </a>
        <a class="text-gray-500 hover:text-yellow-500" href="">{{ __('menu.profile') }} </a>
        <a class="text-gray-500 hover:text-yellow-500" href="">{{ __('menu.blog') }} </a>
    </div>
</footer>
