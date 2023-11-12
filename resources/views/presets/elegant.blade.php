<x-preset-layout>
<section>

    <div x-data="{
            banner_section : { open : true },
            go() { this.banner_section = false }
        }">
        @if($invitation && $invitation != null)
        {{-- <div class="w-screen h-screen max-h-screen bg-center bg-no-repeat bg-gray-700 bg-blend-multiply bg-[url('{{ asset('image-2.jpg') }}')]"> --}}
        <div class="w-screen h-screen max-h-screen bg-center bg-no-repeat bg-gray-700 bg-blend-multiply" style="background-image: url({{ asset('image-2.jpg') }})">
            <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
                <div class="font-{{ array_key_exists('customize', $invitation->section->data) ? $invitation->section->data["customize"]["cover_title_font_style"] : '' }} {{ array_key_exists('customize', $invitation->section->data) ? $invitation->section->data["customize"]["cover_title_text_color"] : 'text-white' }}">
                    <h1 class=" mb-4 text-2xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-5xl">{{ Str::title($invitation->section->data["cover_section"]["cover_title"]) }}</h1>
                </div>
                <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">{{ Str::title($invitation->section->data["banner_section"]["banner_quote"]) }}</p>
                {{-- <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">{{ Str::title($invitation->section->data["banner_section"]["banner_title"]) }} : {{ Str::title($invitation->section->data["cover_section"]["cover_invitation_date"]) }}</p> --}}
                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                    <button x-on:click="go" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                        Open Invitation
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        @else
        <div class="w-screen h-screen bg-center bg-no-repeat bg-gray-700 bg-blend-multiply" style="background-image: url({{ asset('image-2.jpg') }})">
            <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
                <h1 class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-5xl">We invest in the world’s potential</h1>
                <p class="mb-2 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                    <button x-on:click="go" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                        Learn more
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        @endif
    </div>

</section>

</x-preset-layout>
