<x-app-layout>
    <x-slot name="header">
        {{ __('Create Trackings Logs') }}
    </x-slot>
    <form action="{{ route('tracking_logs.store') }}" method="post">
        @csrf
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <label class="block text-sm my-5">
                {{-- select tracking --}}
                <span class="text-gray-700 dark:text-gray-400">Tracking</span>
                <select required name="tracking_id" class="block appearance-none w-full bg-white border border-gray-400 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    <option>Select tracking</option>
                    @foreach ($tracking as $item)
                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                    @endforeach
                </select>
            </label>
            <label class="block text-sm my-5">
                <span class="text-gray-700 dark:text-gray-400">Description</span>
                <input type="text" name="description" class="p-2 block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Arrived a warehouse">
            </label>
            <label class="block text-sm my-5">
                <span class="text-gray-700 dark:text-gray-400">Location</span>
                <input type="text" name="location" class="p-2 block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="London">
            </label>
            <label class="block text-sm my-5">
                <span class="text-gray-700 dark:text-gray-400">Status</span>
                <input type="text" name="status" class="p-2 block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Status">
            </label>
            <label class="block text-sm my-5">
                <span class="text-gray-700 dark:text-gray-400">Time</span>
                <input type="text" name="time" class="p-2 block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="4:00pm EST">
            </label>
            <label class="block text-sm my-5">
                <span class="text-gray-700 dark:text-gray-400">Date</span>
                <input type="text" name="date" class="p-2 block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="23-March-2022">
            </label>
            <button type="textsubmit" class="m-4 text-center bg-white text-black hover:bg-red-500   dark:text-black font-semibold dark:hover:text-white py-2 px-4 border border-black hover:border-transparent rounded-full">
                <b>Create Trackings Logs</b>
            </button>
        </div>
    </form>
</x-app-layout>
