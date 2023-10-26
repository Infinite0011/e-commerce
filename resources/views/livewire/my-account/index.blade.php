<section>
    <div class="flex max-w-screen-2xl px-4 mx-auto sm:px-6 lg:px-8 pt-10">
        @livewire('components.dashboard-left-panel')
        <div class="pl-8 pr-4 flex-grow">
            <p class="mb-5 text-[#777]">
                Hello <strong>Dmytro Savuliak</strong> (not <strong>Dmytro Savuliak</strong>? <a class="text-[#334862]" href="{{ route('logout') }}">Log out</a>)
            </p>
            <p class="mb-5 text-[#777]">
                From your account dashboard you can view your <a class="text-[#334862]" href="{{ route('my-orders.view') }}">recent orders</a>, manage your <a class="text-[#334862]" href="{{ route('edit-address.view') }}">shipping and billing addresses</a>, and <a class="text-[#334862]" href="{{ route('edit-profile.view') }}">edit your password and account details</a>.
            </p>
            <ul class="mb-5 flex text-xl flex-row flex-wrap leading-none">
                <li class="mb-3 w-1/3">
                    <a class="mr-2.5 border rounded-md block py-5 text-center transition text-[#334862]" href="{{ route('my-orders.view') }}">Orders</a>
                </li>
                <li class="mb-3 w-1/3">
                    <a class="mr-2.5 border rounded-md block py-5 text-center transition text-[#334862]" href="https://sugarmds.com/my-account/subscriptions/">Subscriptions</a>
                </li>
                <li class="mb-3 w-1/3">
                    <a class="mr-2.5 border rounded-md block py-5 text-center transition text-[#334862]" href="https://sugarmds.com/my-account/downloads/">Downloads</a>
                </li>
                <li class="mb-3 w-1/3">
                    <a class="mr-2.5 border rounded-md block py-5 text-center transition text-[#334862]" href="{{ route('edit-address.view') }}">Addresses</a>
                </li>
                <li class="mb-3 w-1/3">
                    <a class="mr-2.5 border rounded-md block py-5 text-center transition text-[#334862]" href="https://sugarmds.com/my-account/payment-methods/">Payment methods</a>
                </li>
                <li class="mb-3 w-1/3">
                    <a class="mr-2.5 border rounded-md block py-5 text-center transition text-[#334862]" href="{{ route('edit-profile.view') }}">Account details</a>
                </li>
            </ul>
        </div>
    </div>
</section>