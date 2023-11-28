<div>
    <div class="lt-overflow-hidden lt-border lt-border-gray-200 lt-rounded-lg">
        <div class="lt-w-full lt-divide-y lt-divide-gray-200">
            <div class="lt-p-4 lt-bg-gray-100">
                <div class="lt-flex lt-items-center lt-gap-2 sm:lt-gap-4">
                    <div class="lt-flex-1">
                        <div class="lt-relative">
                            <label for="Search" class="lt-absolute lt-inset-y-0 lt-left-0 lt-grid lt-w-10 lt-place-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="lt-w-4 lt-h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                                </svg>
                                <span class="lt-sr-only">
                                    Search
                                </span>
                            </label>
                            <input type="text" id="Search" placeholder="Search" wire:model.debounce.500ms="query" class="lt-w-full lt-pl-10 lt-text-sm lt-text-gray-700 lt-border-gray-200 lt-rounded-md lt-form-input focus:lt-outline-none focus:lt-ring focus:lt-ring-sky-100 focus:lt-border-sky-300 lt-peer">
                        </div>
                    </div>
                </div>
            </div>
            <div class="lt-overflow-x-auto">
                <table class="lt-min-w-full lt-divide-y lt-divide-gray-200">
                    <thead class="lt-bg-white">
                        <tr>
                            <th class="lt-px-4 lt-py-3 lt-text-sm lt-font-medium lt-text-left lt-text-gray-700 lt-whitespace-nowrap">
                                <span class="lt-capitalize">
                                    Title
                                </span>
                            </th>
                            <th class="lt-px-4 lt-py-3 lt-text-sm lt-font-medium lt-text-left lt-text-gray-700 lt-whitespace-nowrap">
                                <span class="lt-capitalize">
                                </span>
                            </th>
                            <th class="lt-px-4 lt-py-3 lt-text-sm lt-font-medium lt-text-left lt-text-gray-700 lt-whitespace-nowrap">
                                <span class="lt-capitalize">
                                    Description
                                </span>
                            </th>
                            <th class="lt-px-4 lt-py-3 lt-text-sm lt-font-medium lt-text-left lt-text-gray-700 lt-whitespace-nowrap">
                                <span class="lt-capitalize">
                                    Category
                                </span>
                            </th>
                            <th class="lt-px-4 lt-py-3 lt-text-sm lt-font-medium lt-text-left lt-text-gray-700 lt-whitespace-nowrap">
                                <span class="lt-capitalize">
                                    Tag
                                </span>
                            </th>
                            <th class="lt-px-4 lt-py-3 lt-text-sm lt-font-medium lt-text-left lt-text-gray-700 lt-whitespace-nowrap">
                                <span class="lt-capitalize">
                                    Created Date
                                </span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="lt-relative">
                        @foreach($blogs as $blog)
                        <tr class="lt-bg-white even:lt-bg-gray-50">
                            <td class="lt-px-4 lt-py-3 lt-whitespace-nowrap lt-text-xs sm:lt-text-sm lt-text-gray-700" sort="sort">
                                <div>
                                    <a href="{{ route('hub.blogs.edit', $blog->id) }}" class="lt-text-sky-600 hover:lt-underline">
                                        {{ $blog->title }}
                                    </a>
                                </div>
                            </td>
                            <td class="lt-px-4 lt-py-3 lt-whitespace-nowrap lt-text-xs sm:lt-text-sm lt-text-gray-700" sort="sort">
                                <div>
                                    <img src="/storage/{{ $blog->image }}" class="w-16 h-16 rounded" style="min-width: 64px;">
                                </div>
                            </td>
                            <td class="lt-px-4 lt-py-3 lt-whitespace-nowrap lt-text-xs sm:lt-text-sm lt-text-gray-700" sort="sort" >
                                <div style="overflow: hidden; max-width: 300px; text-overflow: ellipsis;">
                                    {!! strip_tags($blog->description) !!}
                                </div>
                            </td>
                            <td class="lt-px-4 lt-py-3 lt-whitespace-nowrap lt-text-xs sm:lt-text-sm lt-text-gray-700" sort="sort">
                                <div>
                                    {{ $blog->categories }}
                                </div>
                            </td>
                            <td class="lt-px-4 lt-py-3 lt-whitespace-nowrap lt-text-xs sm:lt-text-sm lt-text-gray-700" sort="sort">
                                <div>
                                    {{ $blog->tags }}
                                </div>
                            </td>
                            <td class="lt-px-4 lt-py-3 lt-whitespace-nowrap lt-text-xs sm:lt-text-sm lt-text-gray-700" sort="sort">
                                <div>
                                    {{ $blog->created_at }}
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="pt-4">
        {{ $blogs->links() }}
    </div>
</div>