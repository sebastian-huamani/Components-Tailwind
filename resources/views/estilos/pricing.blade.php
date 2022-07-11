@extends('layouts.plantilla')

@section('content')

<div class="my-8">

    <div class="text-center container ">
        <h1 class="font-bold text-4xl">Pricing Plans</h1>
        <p class="text-gray-400 text-base font-extralight mt-3">Start building for free, then add a site plan to go live. Account plans unlock additional features</p>
        
        <div class="mt-6 text-sm w-60 mx-auto bg-zinc-200 grid grid-cols-2 items-center rounded-md">
            <button type="submit" class="font-medium text-xs bg-white p-1 rounded-md m-0.5">Monthly biling</button>
            <button type="submit" class="font-medium text-xs ">Yearly biling</button>
        </div>
    </div>

    <div class="mt-8 container mx-auto h-full px-8 py-1">
        <div class=" w-full h-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            {{-- card --}}
            <div class="border border-zinc-200 rounded-md hover:scale-110 duration-150">
                <div class="p-4 border-b border-zinc-200">
                    <h3 class="font-semibold text-lg">Hobby</h3>
                    <p class="text-xs mt-3">All the basics for starting a new business</p>
                    <p class="font-bold mt-5 text-3xl">$12<sub class="font-light text-xs">/mo</sub></p>
                    <button type="submit" class="w-full bg-slate-900 text-white font-medium text-sm rounded-md py-1 mt-4">Buy Hobby</button>
                </div>
                <div class="p-4">
                    <p class="text-xs font-medium">WHAT'S INCLUDE</p>
                    <ul class="text-sm list-['✔'] list-inside text-gray-500 mt-4">
                        <li class="">Mauris at lectus luctus lorem.</li>
                        <li class="mt-3">Aliquam vitae arcu eu purus vehicula.</li>
                    </ul>
                </div>
            </div>
            {{-- card --}}
            <div class="border border-zinc-200 rounded-md hover:scale-110 duration-150">
                <div class="p-4 border-b border-zinc-200">
                    <h3 class="font-semibold text-lg">Freelancer</h3>
                    <p class="text-xs mt-3">All the basics for starting a new business</p>
                    <p class="font-bold mt-5 text-3xl">$24<sub class="font-light text-xs">/mo</sub></p>
                    <button type="submit" class="w-full bg-slate-900 text-white font-medium text-sm rounded-md py-1 mt-4">Buy Hobby</button>
                </div>
                <div class="p-4">
                    <p class="text-xs font-medium">WHAT'S INCLUDE</p>
                    <ul class="text-sm list-['✔'] list-inside text-gray-500 mt-4">
                        <li class="">Mauris at lectus luctus lorem.</li>
                        <li class="mt-3">Aliquam vitae arcu eu purus vehicula.</li>
                        <li class="mt-3">Donec ac tortor varius elit.</li>
                    </ul>
                </div>
            </div>
            {{-- card --}}
            <div class="border border-zinc-200 rounded-md hover:scale-110 duration-150">
                <div class="p-4 border-b border-zinc-200">
                    <h3 class="font-semibold text-lg">Startup</h3>
                    <p class="text-xs mt-3">All the basics for starting a new business</p>
                    <p class="font-bold mt-5 text-3xl">$32<sub class="font-light text-xs">/mo</sub></p>
                    <button type="submit" class="w-full bg-slate-900 text-white font-medium text-sm rounded-md py-1 mt-4">Buy Hobby</button>
                </div>
                <div class="p-4">
                    <p class="text-xs font-medium">WHAT'S INCLUDE</p>
                    <ul class="text-sm list-['✔'] list-inside text-gray-500 mt-4">
                        <li class="">Mauris at lectus luctus lorem.</li>
                        <li class="mt-3">Aliquam vitae arcu eu purus vehicula.</li>
                        <li class="mt-3">Donec ac tortor varius elit.</li>
                        <li class="mt-3">Sed sed dui ac lectus auctor aliquam at a magna.</li>
                    </ul>
                </div>
            </div>
            {{-- card --}}
            <div class="border border-zinc-200 rounded-md hover:scale-110 duration-150">
                <div class="p-4 border-b border-zinc-200">
                    <h3 class="font-semibold text-lg">Enterprise</h3>
                    <p class="text-xs mt-3">All the basics for starting a new business</p>
                    <p class="font-bold mt-5 text-3xl">$48<sub class="font-light text-xs">/mo</sub></p>
                    <button type="submit" class="w-full bg-slate-900 text-white font-medium text-sm rounded-md py-1 mt-4">Buy Hobby</button>
                </div>
                <div class="p-4">
                    <p class="text-xs font-medium">WHAT'S INCLUDE</p>
                    <ul class="text-sm list-['✔'] list-inside text-gray-500 mt-4">
                        <li class="">Mauris at lectus luctus lorem.</li>
                        <li class="mt-3">Aliquam vitae arcu eu purus vehicula.</li>
                        <li class="mt-3">Donec ac tortor varius elit.</li>
                        <li class="mt-3">Sed sed dui ac lectus auctor aliquam at a magna.</li>
                        <li class="mt-3">In viverra risus ut enim ultrices eleifend.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content mx-auto bg-gray-200 py-8 px-12 rounded-md my-8 items-center">

    <div class="text-center mt-9">
        <h1 class="text-5xl font-bold">Simple no-tricks pricing</h1>
        <p class="mt-5 tracking-wide text-gray-600 font-medium">if you're not satisfied, contact us within the first 14 days and we'll sed you a full refund</p>
    </div>
    <div class=" mt-10 content my-auto h-full rounded-md block sm:flex">

        <div class="p-10 bg-white w-full sm:w-9/12 rounded-md">
            <h1 class="font-bold text-3xl">Lifetime Membership</h1>
            <p class="text-base mt-5 text-gray-500 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, impedit unde aut numquam maiores vel animi, laborum minus temporibus dolores quaerat cumque atque deserunt ab suscipit possimus, distinctio provident quod?</p>
            <div class="flex items-center mt-8">
                <p class="w-3/12 text-violet-600 font-bold text-sm tracking-widest">WHAT'S INCLUDED</p>
                <p class="w-full border-b border-gray-300"></p>
            </div>
            <ul class="grid grid-cols-1 sm:grid-cols-2 mt-8 gap-4 sm:gap-8 text-gray-500 text-base list-['✔'] list-inside">
                <li> Private forum access</li>
                <li> Entry to annual conference</li>
                <li> Member resources</li>
                <li> Officeal member t-shirt</li>
            </ul>
        </div>

        <div class="p-10 bg-neutral-100 text-center w-full sm:w-3/12">
            <p class="font-semibold text-xl">Pay one, own it forever</p>
            <p class="font-bold text-5xl mt-4">$349 <sup class="text-gray-500 font-normal text-base">USD</sup> </p>
            <p class="mt-3 text-gray-600"><a href="#" class="text-sm">Learn about our membership policy</a></p>
            <button type="submit" class="w-full bg-slate-900 text-white font-medium text-sm rounded-md py-3 mt-3">Get Access</button>
            <p class="mt-3 font-semibold">Get a free sample <span class="text-gray-600 font-normal">(20MB)</span> </p>
        </div>
    </div>

</div>



@endsection
