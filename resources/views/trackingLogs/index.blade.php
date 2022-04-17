<x-app-layout>
    <x-slot name="header">
        {{ __('Dashboard') }}
    </x-slot>
    <a href="{{ route('tracking_logs.create') }}" class="m-4 text-center bg-white text-black hover:bg-red-500   dark:text-black font-semibold dark:hover:text-white py-2 px-4 border border-black hover:border-transparent rounded-full">
        <b>Create New Tracking Logs</b>
    </a>
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap" id="table_id">
                <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">ID</th>
                        <th class="px-4 py-3">Tracking Title</th>
                        <th class="px-4 py-3">Tracking description</th>
                        <th class="px-4 py-3">Description</th>
                        <th class="px-4 py-3">Location</th>
                        <th class="px-4 py-3">status</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @forelse ($trackingLogs as $item)
                        <tr class="text-gray-700 dark:text-gray-200  dark:bg-gray-800">
                            <td class="px-4 py-3">
                                {{ $loop->index + 1 }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $item->Tracking->title }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $item->Tracking->description }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $item->description }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $item->location }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $item->status }}
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
