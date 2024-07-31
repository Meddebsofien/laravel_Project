<?php

namespace App\Livewire\Components;

use App\Models\User;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\View\View;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;
//use Illuminate\Support\Facades\View;

class UserForm extends Component implements HasForms
{

    use InteractsWithForms;
    use WithFileUploads;

    public $username;
    public $name;
    public $email;
    public $phone;
    public $file = null;

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('name')
                ->label('Firstname')
                ->required()
                ->maxLength(255)
                ->extraInputAttributes([
                    'class' => 'bg-blue-700'
                ])
                ->extraAttributes([
                    'class' => 'custom-label'
                ]),
            Forms\Components\TextInput::make('username')
                ->label('Surname')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('email')
                ->label('Email')
                ->email()
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('phone')
                ->label('Phone number')
                ->required()
                ->minLength(10),
            Forms\Components\FileUpload::make('file')
                ->label('ID card')
                ->image(),
        ];
    }

    public function submit()
    {
        $data = $this->form->getState();

        $filePath = $this->file ? $this->store('file', 'public') : null;

        User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'file' => $filePath,
        ]);

        session()->flash('message', 'User successfully registered.');
    }

    public function render():View
    {
        return view('livewire.components.user-form');
    }
}
