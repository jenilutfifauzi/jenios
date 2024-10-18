<?php

namespace App\Filament\App\Pages\Auth;

use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Auth\Register as BaseRegister;
use Ysfkaya\FilamentPhoneInput\Forms\PhoneInput;

class Register extends BaseRegister
{
    protected function getForms(): array
    {
        return [
            'form' => $this->form(
                $this->makeForm()
                    ->schema([
                        $this->getNameFormComponent(),
                        $this->getEmailFormComponent(),
                        TextInput::make('username')
                            ->label('Username')
                            ->required()
                            ->maxLength(15)
                            ->unique(),
                        $this->getPasswordFormComponent(),
                        $this->getPasswordConfirmationFormComponent(),
                        PhoneInput::make('phone')
                        ->label('No Hp (WhatsApp)')
                    ])
                    ->statePath('data'),
            ),
        ];
    }

    protected function getPhoneFormComponent(): Component
    {
        return TextInput::make('phone')
            ->label('No Hp (WhatsApp)')
            ->required()
            ->autofocus();
    }
}
