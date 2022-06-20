<div class="alert alert-warning bg-yellow-100 dark:bg-black">
    <div class="flex justify-center w-full">
      <div class="flex">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#009688" class="flex-shrink-0 w-6 h-6 mx-2">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
        </svg>
        <label>
            <x-countdown :expires="$offer_expire">
                <div class="flex flex-col lg:flex-row">
                    <div>
                        <span>{{$offer_name}} of <span class="text-green-500 font-bold">{{$offer_amt}}%</span> Discounts Avaliable <a href="/online-training">now</a>.</span>
                    </div>
                    <div class="pl-0 sm:pl-1">
                        <span>Expaire on:</span>
                        <span x-text="timer.days">{{ $component->days() }}</span> days
                        <span x-text="timer.hours">{{ $component->hours() }}</span> hours
                        <span x-text="timer.minutes">{{ $component->minutes() }}</span> minutes
                        <span x-text="timer.seconds">{{ $component->seconds() }}</span> seconds
                    </div>
                </div>
            </x-countdown>
        </label>
      </div>
    </div>
</div>


