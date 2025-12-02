<?php
namespace App\Livewire;
use App\Models\Lead;
use Livewire\Attributes\Rule;
use Livewire\Component;
class LeadForm extends Component
{
    #[Rule('required|string|min:3|max:255')]
    public string $name = '';
    #[Rule('required|email|unique:leads,email|max:255')]
    public string $email = '';
    #[Rule('nullable|string|max:20')]
    public string $phone = '';
    #[Rule('nullable|string|max:500')]
    public string $notes = '';
    public bool $success = false; // The essential public property

    public function save(): void
    {
        $this->validate();
        Lead::create(['name' => $this->name, 'email' => $this->email, 'phone' => $this->phone, 'notes' => $this->notes]);
        $this->reset(['name', 'email', 'phone', 'notes']);
        $this->success = true;
        $this->js('setTimeout(() => $wire.success = false, 5000)');
    }
    public function render() { return view('livewire.lead-form'); }
}