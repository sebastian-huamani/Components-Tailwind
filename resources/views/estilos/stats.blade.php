@extends('layouts.plantilla')

@section('content')

    <h1 class="text-center text-lg font-bold mt-4">Stats</h1>

    {{-- 1 --}}
    <div class="mx-auto w-11/12 bg-gray-100 rounded-md container px-5 py-6 mt-6">

        <div class="flex flex-col">
            <h3 class="my-2 text-sm font-semibold tracking-normal ">Last 30 days </h3>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 items-center gap-3">

                <div class="bg-white w-full h-22 border rounded-md drop-shadow-sm">
                    <div class="h-full w-full px-2 py-4 flex items-center">
                        <div class="w-9/12  ml-2">
                            <p class="text-xs text-gray-600 tracking-wide font-medium">Total Subscribers</p>
                            <p class="text-xl font-semibold">71,897</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white w-full h-22 border rounded-md drop-shadow-sm">
                    <div class="h-full w-full px-2 py-4 flex items-center">
                        <div class="w-9/12  ml-2">
                            <p class="text-xs text-gray-600 tracking-wide font-medium">Avg. Open Rate</p>
                            <p class="text-xl font-semibold">58.16%</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white w-full h-22 border rounded-md drop-shadow-sm">
                    <div class="h-full w-full px-2 py-4 flex items-center">
                        <div class="w-9/12  ml-2">
                            <p class="text-xs text-gray-600 tracking-wide font-medium">Avg. Click Rate</p>
                            <p class="text-xl font-semibold">24.57%</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    {{-- 2 --}} 
    <div class="mx-auto w-11/12 bg-gray-100 rounded-md container px-5 py-6 mt-6">

        <div class="flex flex-col">
            <h3 class="my-2 text-sm font-semibold tracking-normal">Last 30 days </h3>
            
            <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 items-center gap-3">

                <div class="bg-white w-full h-28 border rounded-md drop-shadow-sm">
                    <div class="h-4/6 w-full px-2 py-4 flex">

                        <div class="bg-violet-600 w-2/12 basis-8 m-1 rounded-md flex items-center justify-center">
                            <i class="fa-solid fa-user-group text-white"></i>
                        </div>

                        <div class="w-9/12  ml-2">
                            <p class="text-xs text-gray-500 tracking-wide">Total Subscribers</p>

                            <div class="flex flex-wrap items-end">
                                <p class="text-lg font-semibold">71,897 <small class="text-[10px] text-green-600"> <span class="font-bold  ml-2">↑</span> 122</small> </p>
                            </div>
                        </div>
                    </div>
                        
                    <div class="bg-gray-100 w-full h-2/6 px-2 py-4">
                        <div class="flex h-full items-center">
                            <a href="#" class="text-violet-600 font-semibold text-xs">View all</a>
                        </div>
                    </div>
                </div>

                <div class="bg-white w-full h-28 border rounded-md drop-shadow-sm">
                    <div class="h-4/6 w-full px-2 py-4 flex">

                        <div class="bg-violet-600 w-2/12 basis-8 m-1 rounded-md flex items-center justify-center">
                            <i class="fa-solid fa-envelopes text-white"></i>
                        </div>

                        <div class="w-9/12  ml-2">
                            <p class="text-xs text-gray-500 tracking-wide">Avg. Open Rate</p>
                            
                            <div class="flex flex-wrap items-end">
                                <p class="text-lg font-semibold">58.16% <small class="text-[10px] text-green-600"> <span class="font-bold  ml-2">↑</span> 5.4%</small> </p>
                            </div>
                        </div>
                    </div>
                        
                    <div class="bg-gray-100 w-full h-2/6 px-2 py-4">
                        <div class="flex h-full items-center">
                            <a href="#" class="text-violet-600 font-semibold text-xs">View all</a>
                        </div>
                    </div>
                </div>

                <div class="bg-white w-full h-28 border rounded-md drop-shadow-sm">
                    <div class="h-4/6 w-full px-2 py-4 flex">

                        <div class="bg-violet-600 w-2/12 basis-8 m-1 rounded-md flex items-center justify-center">
                            <i class="fa-solid fa-arrow-pointer text-white"></i>
                        </div>

                        <div class="w-9/12 ml-2">
                            <p class="text-xs text-gray-500 tracking-wide">Avg. Click Rate</p>

                            <div class="flex flex-wrap items-end">
                                <p class="text-lg font-semibold">24.57% <small class="text-[10px] text-red-600"> <span class="font-bold  ml-2">↓</span> 3.2%</small> </p>
                            </div>
                        </div>
                    </div>
                        
                    <div class="bg-gray-100 w-full h-2/6 px-2 py-4">
                        <div class="flex h-full items-center">
                            <a href="#" class="text-violet-600 font-semibold text-xs">View all</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    {{-- 3 --}}
    <div class="mx-auto w-11/12 bg-gray-100 rounded-md container px-5 py-6 mt-6">

        <div class="flex flex-col">
            <h3 class="my-2 text-sm font-semibold tracking-normal ">Last 30 days </h3>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 items-center">

                <div class="bg-white w-full h-22 border rounded-md drop-shadow-sm flex items-end px-2 py-3">
                    <div class="h-full w-10/12">
                        <div class="ml-2">
                            <p class="text-xs text-gray-600 tracking-wide font-medium">Total Subscribers</p>
                            <p class="text-lg font-semibold text-indigo-700">71,897 <span class="text-xs text-gray-500">from 70,946 </span></p>
                        </div>
                    </div>
                    <div class="w-2/12 text-center">
                        <p class="text-xs bg-green-200 rounded-lg font-semibold"><span>↑</span> 12%</p>
                    </div>
                </div>

                <div class="bg-white w-full h-22 border rounded-md drop-shadow-sm flex items-end px-2 py-3">
                    <div class="h-full w-10/12">
                        <div class="ml-2">
                            <p class="text-xs text-gray-600 tracking-wide font-medium">Avg. Open Rate</p>
                            <p class="text-lg font-semibold text-indigo-700">58.16% <span class="text-xs text-gray-500">from 56.14% </span></p>
                        </div>
                    </div>
                    <div class="w-2/12 text-center">
                        <p class="text-xs bg-green-200 rounded-lg font-semibold"><span>↑</span> 2.06%</p>
                    </div>
                </div>

                <div class="bg-white w-full h-22 border rounded-md drop-shadow-sm flex items-end px-2 py-3">
                    <div class="h-full w-10/12">
                        <div class="ml-2">
                            <p class="text-xs text-gray-600 tracking-wide font-medium">Avg. Click Rate</p>
                            <p class="text-lg font-semibold text-indigo-700">24.57% <span class="text-xs text-gray-500">from 56.14% </span></p>
                        </div>
                    </div>
                    <div class="w-2/12 text-center">
                        <p class="text-xs bg-red-200 rounded-lg font-semibold"><span>↓</span> 44.21%</p>
                    </div>  
                </div>

            </div>
        </div>

    </div>

@endsection
