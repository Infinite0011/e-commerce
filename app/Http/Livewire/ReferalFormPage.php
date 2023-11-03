<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\BusinessState;
use App\Models\BusinessType;
use App\Models\User;
use App\Models\PageInformation;
use App\Helpers\Utility;

class ReferalFormPage extends Component
{
    use WithFileUploads;

    public $photo;
    public $full_name;
    public $term_condition;
    public $business_type;
    public $ein_number;
    public $business_phone;
    public $business_email;
    public $zip_code;
    public $state_of_business;
    public $city;
    public $street_address;
    public $business_name;

    public $business_states;
    public $business_types;

    public function mount() {
        $this->business_states = BusinessState::get();
        $this->business_types = BusinessType::get();
    }

    public function save()
    {
        $this->validate([
            'photo' => 'image|max:102400', // 1MB Max
        ]);
 
        $filepath = $this->photo->store('photos');
        $user = User::create([
            'name' => $this->full_name,
            'email' => $this->business_email,
            'password' => '1234567890',
            'is_referal_account' => true,
            'is_accepted' => false
        ]);

        $user->referalInformation()->create([
            'code' => Utility::generateUniqueCode(10)
        ]);

        $user->businessInformation()->create([
            'business_type_id' => $this->business_type,
            'business_state_id' => $this->state_of_business,
            'ein_number' => $this->ein_number,
            'phone' => $this->business_phone,
            'zip_code' => $this->zip_code,
            'city' => $this->city,
            'street_address' => $this->street_address,
            'name' => $this->business_name,
            'term_condition' => $this->term_condition,
            'image_path' => $filepath
        ]);
        
        return redirect()->route('home');
    }
    
    public function render()
    {
        $pageInformation = PageInformation::where('page_slug', 'referal-form')->first();
        return view('livewire.referal-form-page', [
            'meta_description' => $pageInformation->meta_description
        ])->layout('layouts.base');
    }
}
