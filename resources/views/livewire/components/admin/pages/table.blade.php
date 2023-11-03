<div>
    <div class="lt-overflow-hidden lt-border lt-border-gray-200 lt-rounded-lg">
        <div class="lt-w-full lt-divide-y lt-divide-gray-200">
            <div class="lt-overflow-x-auto">
                <table class="lt-min-w-full lt-divide-y lt-divide-gray-200 w-full max-full">
                    <thead class="lt-bg-white">
                        <tr>
                            <th class="lt-px-4 lt-py-3 lt-text-sm lt-font-medium lt-text-left lt-text-gray-700 lt-whitespace-nowrap">
                                <span class="lt-capitalize">
                                    Page slug
                                </span>
                            </th>
                            <th class="lt-px-4 lt-py-3 lt-text-sm lt-font-medium lt-text-left lt-text-gray-700 lt-whitespace-nowrap">
                                <span class="lt-capitalize">
                                    Meta Description
                                </span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="lt-relative w-full">
                        @foreach($pages as $page)
                        <tr class="lt-bg-white even:lt-bg-gray-50">
                            <td class="lt-px-4 lt-py-3 lt-whitespace-nowrap lt-text-xs sm:lt-text-sm lt-text-gray-700" sort="sort">
                                <div>
                                    <a href="{{ route('hub.pages.edit', $page->id) }}" class="lt-text-sky-600 hover:lt-underline">
                                        {{ $page->page_slug }}
                                    </a>
                                </div>
                            </td>
                            <td class="lt-px-4 lt-py-3 lt-whitespace-nowrap lt-text-xs sm:lt-text-sm lt-text-gray-700" sort="sort" >
                                <div style="overflow: hidden; max-width: 60%; text-overflow: ellipsis;">
                                    {{ strip_tags($page->meta_description) }}
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>