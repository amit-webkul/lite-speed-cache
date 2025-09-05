<div class="border-b border-zinc-200 p-4">
    <div class="grid grid-cols-[auto_1fr] items-center gap-4 rounded-xl border border-zinc-200 p-2.5">
        <div>
            <img
                src="{{ auth()->user()?->image_url ??  bagisto_asset('images/user-placeholder.png') }}"
                class="h-[60px] w-[60px] rounded-full max-md:rounded-full"
            >
        </div>

        @guest('customer')
            <a
                href="{{ route('shop.customer.session.create') }}"
                class="flex text-base font-medium"
            >
                @lang('shop::app.components.layouts.header.mobile.login')

                <i class="icon-double-arrow text-2xl ltr:ml-2.5 rtl:mr-2.5"></i>
            </a>
        @endguest

        @auth('customer')
            <div class="flex flex-col justify-between gap-2.5 max-md:gap-0">
                <p class="font-mediums break-all text-2xl max-md:text-xl">Hello! {{ auth()->user()?->first_name }}</p>

                <p class="text-zinc-500 no-underline max-md:text-sm">{{ auth()->user()?->email }}</p>
            </div>
        @endauth
    </div>
</div>