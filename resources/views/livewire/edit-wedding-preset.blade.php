<div>
    <div x-data="{
            banner_section : {
                open : true
            },
            go() {
                this.banner_section.open = false
            }
        }">

        <section x-cloak x-show="banner_section.open" class="w-screen h-screen max-h-screen bg-center bg-no-repeat bg-gray-700 bg-blend-multiply" style="background-image: url({{ asset('image-2.jpg') }})">
            <div class="absolute top-5 right-5">
                <button x-on:click="$dispatch('open-modal', 'edit-wedding')" class="inline-flex justify-center hover:text-gray-900 items-center py-1.5 px-2 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5 `">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                      </svg>
                </button>
            </div>
            <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
                <div class="font-{{ $wedding->section->data["customize"]["cover_title_font_style"] != null ? $wedding->section->data["customize"]["cover_title_font_style"] : '' }} dark:{{ $wedding->section->data["customize"]["cover_title_text_color"] != null ? $wedding->section->data["customize"]["cover_title_text_color"] : 'text-white' }} {{ $wedding->section->data["customize"]["cover_title_text_color"] != null ? $wedding->section->data["customize"]["cover_title_text_color"] : 'text-white' }}">
                    <h1 class="  mb-4 text-2xl font-extrabold tracking-tight leading-none md:text-5xl lg:text-5xl ">{{ Str::title($wedding->section->data["cover_section"]["cover_title"]) }}</h1>
                </div>

                <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">{{ Str::title($wedding->section->data["banner_section"]["banner_quote"]) }}</p>
                <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">{{ Str::title($wedding->section->data["banner_section"]["banner_title"]) }} : {{ Str::title($wedding->section->data["cover_section"]["cover_wedding_date"]) }}</p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                    <button x-on:click="go" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                        Open Ivitation
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </button>
                </div>
            </div>
        </section>

    </div>

    <x-modal name="edit-wedding">
        <div class="h-12 w-full flex items-center justify-center dark:bg-gray-600 bg-gray-200">
            <span class="dark:text-white text-gray-600">
                Edit Wedding Cover & Banner Section
            </span>
        </div>

        <div class="py-4 px-6">
            <div class="grid md:grid-cols-2 md:gap-6">
              <div class="relative z-0 w-full mb-6 group">
                  <input type="text" wire:model.live="cover_title" name="cover_title" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                  <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm  text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Cover Title</label>
              </div>
              <div class="relative z-0 w-full mb-6 group">
                  <input type="text" wire:model.live="banner_quote" name="banner_quote" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                  <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Banner Quote</label>
              </div>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
              <div class="relative z-0 w-full mb-6 group">
                  <input type="text" wire:model.live="banner_title" name="banner_title" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                  <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Banner Title</label>
              </div>
              <div class="relative z-0 w-full mb-6 group">
                  <input type="text" wire:model.live="cover_wedding_date" name="cover_wedding_date" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                  <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Banner Wedding date</label>
              </div>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="underline_select" class="sr-only">Change Title Text Color</label>
                    <select wire:model.live="cover_title_text_color" id="underline_select" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        <option selected>Choose a text-color</option>
                        @foreach ($customize['color'] as $c)
                            <option value="{{ $c }}" class="{{ $c }}">{{ $c }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-6">
                    <label for="underline_select" class="sr-only">Change Title Font Family</label>
                    <select wire:model.live="cover_title_font_style" id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        <option selected>Choose a font family</option>
                        @foreach ($customize['font'] as $f)
                            <option value="{{ $f }}" class="font-{{ $f }}">{{ $f }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button type="button" x-on:click="show = false" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save and Close</button>
        </div>
    </x-modal>

</div>
