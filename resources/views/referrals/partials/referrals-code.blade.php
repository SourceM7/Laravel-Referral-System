<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Referral code') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Send this referral code to invite people") }}
        </p>
    </header>


    <div class="mt-6 flex items-baseline space-x-3" x-data="{
    link:'{{ auth()->user()->referralLink() }}',

    copy() {
        $clipboard(this.link)
    }
}">
    <x-text-input id="referral_code" type="text" value="{{ auth()->user()->referralLink() }}"
        class="mt-1 block w-full" readonly />

    <button class="shrink-0 font-medium text-sm text-indigo-500" x-on:click="copy">Copy Link</button>
</div>


</section>