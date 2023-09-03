@extends('layouts.admin_main')
@section('content')
    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10 dark:bg-[#050505] ">
        @if (session('message'))
            <div
                class="flex w-full border-l-6 border-[#34D399] bg-[#34D399] bg-opacity-[15%] dark:bg-[#1B1B24] px-7 py-8 shadow-md dark:bg-opacity-30 md:p-9 mb-6">
                <div class="mr-5 flex h-9 w-full max-w-[36px] items-center justify-center rounded-lg bg-[#34D399]">
                    <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.2984 0.826822L15.2868 0.811827L15.2741 0.797751C14.9173 0.401867 14.3238 0.400754 13.9657 0.794406L5.91888 9.45376L2.05667 5.2868C1.69856 4.89287 1.10487 4.89389 0.747996 5.28987C0.417335 5.65675 0.417335 6.22337 0.747996 6.59026L0.747959 6.59029L0.752701 6.59541L4.86742 11.0348C5.14445 11.3405 5.52858 11.5 5.89581 11.5C6.29242 11.5 6.65178 11.3355 6.92401 11.035L15.2162 2.11161C15.5833 1.74452 15.576 1.18615 15.2984 0.826822Z"
                            fill="white" stroke="white"></path>
                    </svg>
                </div>
                <div class="w-full">
                    <p class="mb-3 font-normal text-lg text-black dark:text-[#34D399]">
                        {{ session('message') }}
                    </p>
                </div>
            </div>
        @endif
        <div class="flex-col flex mb-6 gap-y-3">
            <h1 class="text-6xl text-primary font-bold ">Simple Cakes</h1>
            <a href="{{ url('/admin/simple-cake/create') }}"
                class="inline-flex items-center justify-center gap-2.5 rounded-md bg-primary py-4 px-3 text-center font-medium text-white hover:bg-opacity-90 lg:px-5 xl:px-7">
                <i class="fa-solid fa-plus"></i>
                Create New Simple Cake
            </a>
        </div>

        <div class="rounded-sm border border-stroke bg-white  shadow-default dark:border-strokedark dark:bg-boxdark ">
            <div class="max-w-full overflow-x-auto">
                <table class="w-full table-auto">
                    <thead>
                        <tr class="bg-gray-2 text-left dark:bg-meta-4">
                            <th class="min-w-[50px] py-4 px-4 font-medium text-black dark:text-white xl:pl-11">
                                Last Updated
                            </th>
                            <th class="min-w-[150px] py-4 px-4 font-medium text-black dark:text-white">
                                Name
                            </th>
                            <th class="min-w-[120px] py-4 px-4 font-medium text-black dark:text-white">
                                Price
                            </th>
                            <th class="py-4 px-4 font-medium text-black dark:text-white">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td class="py-5 px-4 pl-9 text-black dark:text-white">{{ $product->updated_at }}</td>
                                <td class="py-5 px-4 text-black dark:text-white">
                                    <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                                        <div class="h-12.5 w-15 rounded-md">
                                            {{-- <img src="/images/{{ $product->product_images->image->find(1) }}" /> --}}
                                        </div>
                                        <p class="font-medium text-sm text-black dark:text-white">
                                            {{ $product->product_name }}</p>
                                    </div>
                                </td>
                                <td class="py-5 px-4 text-black dark:text-white">{{ $product->product_price }}</td>


                                <td class="border-b border-[#eee] py-5 px-4 dark:border-strokedark">
                                    <div class="flex items-center space-x-3.5">
                                        <button class="">
                                            <i class="fa-solid fa-eye text-black dark:text-white hover:text-secondary"></i>
                                        </button>
                                        <button class="">
                                            <i class="fa-solid fa-pen text-black dark:text-white hover:text-success"></i>
                                        </button>
                                        <button class="">
                                            <i class="fa-solid fa-trash text-black dark:text-white hover:text-danger"></i>
                                        </button>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
