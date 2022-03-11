<tr class="even:bg-gray-100 odd:bg-gray-200">
    <td class="p-2 text-lg flex flex-col">
        <a href="{{ route('publishers.show', 1) }}" class="hover:underline">{{ 'publisher' => $publisher }}</a>
        <span class="text-gray-500 text-sm">5 games</span>
    </td>
    <td class="p-2">
        <a href="{{ route('publishers.show', 1) }}" class="px-4 py-1 bg-blue-200 hover:bg-blue-300 text-blue-500 hover:text-blue-600">View</a>
        @include('publishers.includes.actions')
    </td>
</tr>
