<section>
    <div class="flex flex-col px-6 mx-auto max-w-screen-2xl sm:px-10 justify-between pb-28">
        <div class="py-20">
            @livewire('components.redirect-back')
        </div>
        <div class="max-w-[530px] flex gap-6 mx-auto flex-col items-center">
            <div>
                <img class="w-44" src="{{asset('assets/frontend/images/auth/confirm-email.svg')}}">
            </div>
            <div class="flex flex-col gap-6 items-center">
                <h1 class="text-5xl font-semibold text-center text-sg-base">Confirm your email</h1>
                <div class="flex flex-col gap-2">
                    <p class="text-lg font-normal text-center text-sg-gray">We’ll send you confirmation link to your email <span class="font-medium text-sg-base">
                        @if (session()->has('email'))
                            {{ session('email') }}.
                        @endif
                    </span></p>
                    <p class="text-lg font-normal text-center text-sg-gray">Morem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@section('description', $meta_description)
