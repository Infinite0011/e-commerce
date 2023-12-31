<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Providers\RouteServiceProvider;
use Lunar\Hub\Facades\Menu;

class HubMenuExtend
{
    /**
     * The names of the cookies that should not be encrypted.
     *
     * @var array<int, string>
     */
    public function handle(Request $request, Closure $next)
    {
        $slot = Menu::slot('sidebar');

        $slot->addItem(function ($item) {
            $item
                ->name('Blogs')
                ->handle('hub.blogs')
                ->route('hub.blogs.view')
                ->icon('blog');
        });

        $slot->addItem(function ($item) {
            $item
                ->name('Blog Categories')
                ->handle('hub.blog.categories')
                ->route('hub.blog.categories.view')
                ->icon('category');
        });

        $slot->addItem(function ($item) {
            $item
                ->name('Blog Tags')
                ->handle('hub.blog.tags')
                ->route('hub.blog.tags.view')
                ->icon('category');
        });

        $slot->addItem(function ($item) {
            $item
                ->name('Sale Users')
                ->handle('hub.saleusers')
                ->route('hub.saleusers.view')
                ->icon('sale');
        });

        $slot->addItem(function ($item) {
            $item
                ->name('Pages')
                ->handle('hub.pages')
                ->route('hub.pages.view')
                ->icon('page');
        });

        return $next($request);
    }
}
