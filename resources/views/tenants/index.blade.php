<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Tenant') }}
            </h2>
            <x-link-button href="{{ route('tenant.create') }}"
                class="ml-4 float-right">{{ __('Add Tenant') }}</x-link-button>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        {{ __('Name') }}
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        {{ __('Domain') }}
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        {{ __('Action') }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tenants as $tenant)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $tenant->name }}
                                        </th>
                                        <td class="px-6 py-3 text-center">
                                            @foreach ($tenant->domains as $item)
                                                {{ $item->domain }} {{ $loop->last ? '' : ',' }}
                                            @endforeach
                                        </td>
                                        <td
                                            class="px-6 py-3 text-center whitespace-nowrap text-gray-500 dark:text-gray-400">
                                            <x-link-button href="{{ route('tenant.edit', $item->id) }}">
                                                {{ __('Edit') }}
                                            </x-link-button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
