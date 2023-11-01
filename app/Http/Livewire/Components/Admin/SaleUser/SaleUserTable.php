<?php

namespace App\Http\Livewire\Components\Admin\SaleUser;

use Livewire\Component;
use App\Models\User;

use Hash;

class SaleUserTable extends Component
{
    /**
     * Render the livewire component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $users = User::with(['businessInformation'])->latest()->where('is_sales_account', true)->get();
        return view('livewire.components.admin.saleuser.table', ['sale_users' => $users]);
    }

    public function accept(User $sale_user) {
        $sale_user->is_accepted = !$sale_user->is_accepted;
        $sale_user->password = Hash::make('password');
        $sale_user->save();
    }
}
