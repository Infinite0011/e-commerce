<?php

namespace App\Http\Livewire\Components\Input;

use Livewire\Component;

use Hash;

class MultiSelect extends Component
{
    public $options;
    public $selected;
    public $open = false;
    public function mount($selected, $options)
    {
        $this->options = $options;
        $this->selected = $selected ? $selected : [];
    }

    public function openDropdown() {
        $this->open = !$this->open;
    }

    public function remove($id) {
        foreach($this->selected as $index => $option) {
            if ($option['id'] == $id) {
                array_splice($this->selected, $index, 1);
            }
        }
        $this->emitUp('updateSelected', $this->selected); 
    }

    public function select($option) {
        $optionObject = json_decode($option);
        foreach ($this->selected as $eachOption) {
            if($eachOption['id'] == $optionObject->id) {
                $this->open = !$this->open;
                return;
            }
        }

        $this->selected[] = [
            'id' => $optionObject->id,
            'name' => $optionObject->name
        ];
        $this->open = !$this->open;
        $this->emitUp('updateSelected',$this->selected); 
    }

    public function render()
    {
        return view('livewire.components.input.multi-select');
    }
}
