<x-layout>
    <x-slot:title> {{ $title }} </x-slot:title>
    <div class="w-full pt-12 px-4">
        <div class="max-w-xl mx-auto text-center mb-16">
            <h2 class="font-bold text-3xl text-dark mb-4 sm:text-4xl
            lg:text-5xl"> Contact </h2>
        </div>
    </div>

    <form>
        <div class="w-full lg:w-2/3 lg:mx-auto pb-12">
            <div class="w-full px-4 mb-8">
                <label for="name" class="text-base font-bold
                text-primary">Name</label>
                <input type="text" id="name" class="w-full
                bg-slate-200 text-dark p-3 rounded-md focus:outline-none
                focus:ring-primary focus:ring-1 focus:border-primary">
                
            </div>
            <div class="w-full px-4 mb-8">
                <label for="email" class="text-base font-bold
                text-primary">Email</label>
                <input type="text" id="email" class="w-full
            bg-slate-200 text-dark p-3 rounded-md focus:outline-none
            focus:ring-primary focus:ring-1 focus:border-primary">
            </div>
            <div class="w-full px-4 mb-8">
                <label for="massage" class="text-base font-bold
                text-primary">Pesan</label>
                <textarea type="text" id="massage" class="w-full`
                bg-slate-200 text-dark p-3 rounded-md focus:outline-none
                focus:ring-primary focus:ring-1 focus:border-primary h-32">
                </textarea>
            </div>
            <div class="w-full px-4">
                <button class="text-base font-semibold text-white
                bg-primary py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500  bg-sky-400">
                Send
                </button>
            </div>
        </div>
    </form>

</x-layout>