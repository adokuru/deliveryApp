<x-app-layout>
    <x-slot name="header">
        {{ __('Dashboard') }}
    </x-slot>
    <a href="{{ route('create') }}" class="m-4 text-center bg-white text-black hover:bg-red-500   dark:text-black font-semibold dark:hover:text-white py-2 px-4 border border-black hover:border-transparent rounded-full">
        <b>Create New Track Order</b>
    </a>
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap" id="table_id">
                <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">ID</th>
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Tracking Code</th>
                        <th class="px-4 py-3">status</th>
                        <th class="px-4 py-3">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @forelse ($trackings as $item)
                        <tr class="text-gray-700 dark:text-gray-200  dark:bg-gray-800">
                            <td class="px-4 py-3">
                                {{ $loop->index + 1 }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $item->title }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $item->tracking_id }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $item->status }}
                            </td>

                            <td class="px-4 py-3 text-sm gap-4">
                                <a href="{{ route('edit', $item->id) }}" class="m-4 bg-transparent hover:bg-red-500  text-black dark:text-white font-semibold hover:text-white py-2 px-4 border border-black hover:border-transparent rounded-full">
                                    <b>Edit</b>
                                </a>
                                <a href="{{ route('delete', $item->id) }}" class="m-4 bg-transparent hover:bg-red-500 dark:text-white text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded-full">
                                    <b>Delete</b>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-gray-700 dark:text-gray-400">
                                No items
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
