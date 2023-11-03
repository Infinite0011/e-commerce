<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\PageInformation;

class AdminPageEditPage extends Component
{
    public function render(Request $request)
    {
        $pageInformation = PageInformation::where('id', $request->id)->first();
        return view('livewire.admin.pages.edit', ['pageInformation' => $pageInformation])
                ->layout('adminhub::layouts.app', [
                    'title' => 'Page Edit',
                ]);
    }
}
