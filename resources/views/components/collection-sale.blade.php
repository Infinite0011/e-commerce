<section class="w-full flex mx-auto flex-row py-[120px] px-[184px] bg-[url('/assets/frontend/images/19336.png')]">
    <div class="rounded-l-[32px] bg-[#EBF0F8] flex-1 px-12 py-10 relative flex items-center">
        <div class="flex flex-col gap-8">
            <p class="font-bold text-[#212121] text-5xl leading-[62.4px]">Subscribe to our newsletter</p>
            <form action="" method="post" class="flex flex-col gap-2 text-base font-normal leading-[26px] text-black">
                <div class="flex flex-row gap-2.5">
                    <input type="text" name="firstname" placeholder="First name" class="flex-1 rounded-[9px] bg-white border border-white placeholder-[#707070] text-base py-[17px] pl-5 focus:border-[#2A62FE] focus:ring-white">
                    <input type="text" name="email" placeholder="Email address" class="flex-1 rounded-[9px] bg-white border border-white placeholder-[#707070] text-base py-[17px] pl-5 focus:border-[#2A62FE] focus:ring-white">
                </div>
                <button type="submit" class="font-semibold bg-[#2A62FE] text-white rounded-2xl py-4">Subscribe Now</button>
            </form>
        </div>
        <img src="{{asset('assets/frontend/images/circle3.svg')}}" class="absolute right-5">
        <img src="{{asset('assets/frontend/images/circle4.svg')}}" class="absolute left-5 bottom-16">
        <img src="{{asset('assets/frontend/images/circle5.svg')}}" class="absolute top-5 left-[448px]">
    </div>
    <div class="rounded-r-[32px] bg-[#2A62FE] flex-1 px-12 py-10 justify-between flex flex-col relative">
        <div class="flex flex-col gap-4">
            <h2 class="font-bold text-white text-5xl leading-[62.4px]">Not sure what to get yet?</h2>
            <p class="font-normal text-2xl leading-[31.2px] text-[#EBF0F8]">Complete the quiz. It takes 2 minutes to fill out.</p>
        </div>
        <button class="rounded-2xl bg-white text-[#2A62FE] w-64 text-base leading-7 font-semibold py-4">Let’s find out</button>
        <img src="{{asset('assets/frontend/images/chain5.svg')}}" class="absolute bottom-0 right-0">
        <img src="{{asset('assets/frontend/images/circle6.svg')}}" class="absolute top-5 left-[448px]">
        <img src="{{asset('assets/frontend/images/circle7.svg')}}" class="absolute left-5 bottom-16">
        <img src="{{asset('assets/frontend/images/circle8.svg')}}" class="absolute left-96 bottom-28">
    </div>
</section>
