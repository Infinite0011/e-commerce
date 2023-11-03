<section>
    <div class="py-8 px-4 max-w-[768px] bg-white text-black m-auto">
        <h1 class="text-[28px] mb-3 font-bold text-[#555]">Contact Us</h1>
        <p class="mb-5 text-base">Need to get in touch with someone at SugarMD? Feel free to send us a message by using the contact form below.
            You can also e-mail us at <a style="text-decoration:underline;color:#3067fe;" href="mailto:feedback@sugarmds.com">feedback@sugarmds.com</a> or call us at <a style="text-decoration:underline;color:#3067fe;" href="tel:+1-561-462-5053">561-462-5053</a></p>
        <div>
            <form class="mb-5" action="https://sugarmds.com/contact-us/" method="post">
                <p class="mb-2"><label class="mb-1.5 block text-sm text-[#222] font-bold" for="name">Name: <span>*</span> <br><input class="mb-4 py-2 px-3 bg-white border border-[#ddd] shadow-inner text-[#333] text-base h-9 max-w-full w-full align-middle focus:!shadow-[inset_0_2px_4px_0_rgb(0,0,0,0.05)]" type="text" name="message_name" value=""></label>
                </p>
                <p class="mb-2"><label class="mb-1.5 block text-sm text-[#222] font-bold" for="message_email">Email: <span>*</span> <br><input class="mb-4 py-2 px-3 bg-white border border-[#ddd] shadow-inner text-[#333] text-base h-9 max-w-full w-full align-middle focus:!shadow-[inset_0_2px_4px_0_rgb(0,0,0,0.05)]" type="text" name="message_email" value=""></label>
                </p>
                <p class="mb-2"><label class="mb-1.5 block text-sm text-[#222] font-bold" for="message_text">Message: <span>*</span> <br><textarea class="mb-4 py-2 px-3 bg-white border border-[#ddd] shadow-inner text-[#333] text-base max-w-full w-full align-middle focus:!shadow-[inset_0_2px_4px_0_rgb(0,0,0,0.05)] min-h-[120px]" type="text" name="message_text"></textarea></label>
                </p>
                <p class="mb-2"><label class="mb-1.5 block text-sm text-[#222] font-bold" for="message_human">Human Verification: <span>*</span> <br><input class="mb-4 py-2 px-3 bg-white border border-[#ddd] shadow-inner text-[#333] text-base h-9 max-w-full w-full align-middle focus:!shadow-[inset_0_2px_4px_0_rgb(0,0,0,0.05)]" type="text" style="width: 60px;" name="message_human"><span class="text-[16px]"> + 3 =
                        5</span></label></p>
                <input type="hidden" name="submitted" value="1">
                <p class="mb-2"><input class="mr-4 mb-4 px-5 bg-[#23e7fe] font-semibold tracking-wide leading-10 text-white uppercase" type="submit"></p>
            </form>
        </div>
    </div>
</section>
@section('description', $meta_description)
