<x-app-layout>
    <x-slot name="header">
        {{ __('Edit') }}
    </x-slot>
    <form action="{{ route('update') }}" method="post">
        @csrf
        @method('PUT')
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <label class="block text-sm my-5">
                <span class="text-gray-700 dark:text-gray-400">Name</span>
                <input value="{{$tracking->title}}" type="text" name="name" class="p-2 block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Jane Doe">
                <input value="{{$tracking->id}}" type="hidden" name="id" >
            </label>
            <label class="block text-sm my-5">
                <span class="text-gray-700 dark:text-gray-400">Tracking ID</span>
                <input value="{{$tracking->tracking_id}}" type="text" name="tracking_id" class="p-2 block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Tracking Code">
            </label>

            <label class="block text-sm my-5">
                <span class="text-gray-700 dark:text-gray-400">Estimated Delivery time</span>
                <input value="{{$tracking->expected_delivery_date}}" type="text" name="e_Delivery" class="p-2 block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="09-11-2022">
            </label>

            <label class="block text-sm my-5">
                <span class="text-gray-700 dark:text-gray-400">From Phone</span>
                <input value="{{$tracking->from_phone}}" type="text" name="from_phone" class="p-2 block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder=" +44 (850) 344 0 66">
            </label>
            <label class="block text-sm my-5">
                <span class="text-gray-700 dark:text-gray-400">To Phone</span>
                <input value="{{$tracking->to_phone}}" type="text" name="to_phone" class="p-2 block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder=" +44 (850) 344 0 66">
            </label>
            <label class="block text-sm my-5">
                <span class="text-gray-700 dark:text-gray-400">Status</span>
                <input value="{{$tracking->status}}" type="text" name="status" class="p-2 block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Picked up">
            </label>
            <label class="block text-sm my-5">
                <span class="text-gray-700 dark:text-gray-400">Destination Country</span>
                <input value="{{$tracking->to_country}}" name="destination_country" class="p-2 block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="England">
            </label>
            <label class="block text-sm my-5">
                <span class="text-gray-700 dark:text-gray-400">Destination State</span>
                <input value="{{$tracking->to_state}}"  type="text" name="Destination_state" class="p-2 block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="London">
            </label>
            <label class="block text-sm my-5">
                <span class="text-gray-700 dark:text-gray-400">Destination City</span>
                <input value="{{$tracking->to_city}}" type="text" name="Destination_city" class="p-2 block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Chelsea">
            </label>
            <label class="block text-sm my-5">
                <span class="text-gray-700 dark:text-gray-400">To Address</span>
                <input value="{{$tracking->to_address}}"  type="text" name="to_address" class="p-2 block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Chelsea">
            </label>
            <label class="block text-sm my-5">
                <span class="text-gray-700 dark:text-gray-400">From Address</span>
                <input value="{{$tracking->from_address}}"  type="text" name="from_address" class="p-2 block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Chelsea">
            </label>
            <label class="block text-sm my-5">
                <span class="text-gray-700 dark:text-gray-400">Step</span>
                <input value="{{$tracking->step}}" type="text" name="step" type="textnumber" class="p-2 block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="1-4">
            </label>
            <button type="textsubmit" class="m-4 text-center bg-white text-black hover:bg-red-500   dark:text-black font-semibold dark:hover:text-white py-2 px-4 border border-black hover:border-transparent rounded-full">
                <b>Edit New Track Order</b>
            </button>
        </div>
    </form>
</x-app-layout>
