@props(['title', 'icon'])
<section class="flex-1">
    <div>
        <div class="rounded-t-[20px] bg-[#32908B] border-2 border-[#32908B] flex flex-col items-center justify-center h-[160px]">
            <span class="text-3xl text-white font-semibold">Healthy</span>
            <span class="text-3xl text-white font-semibold">{{ $title }}</span>
        </div>
        <div class="rounded-b-[20px] bg-[#DCFCB2] border-2 border-[#32908B] flex items-center justify-center h-[200px] py-[9px]">
            <img class="h-full" src="{{ $icon }}">
        </div>
    </div>
</section>