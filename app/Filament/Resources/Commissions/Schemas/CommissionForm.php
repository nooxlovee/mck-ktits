<?php

namespace App\Filament\Resources\Commissions\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CommissionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('address')
                ->label('Адрес')
                ->placeholder('Например: г. Казань, ул. Бари Галеева 3а')
                ->required()
                ->minLength(5)
                ->maxLength(255),

            TextInput::make('phone')
                ->label('Телефон')
                ->extraInputAttributes(['inputmode' => 'tel'])
                ->prefixIcon('heroicon-o-phone')
                ->mask('+7 (999) 999-99-99')
                ->placeholder('+7 (843) 203-55-55')
                ->required()
                ->maxLength(20)
                ->dehydrateStateUsing(fn ($state) => preg_replace('/\D/', '', $state))
                ->rules([
                    fn () => function (string $attribute, $value, \Closure $fail) {
                        $digits = preg_replace('/\D/', '', $value);
                        if (strlen($digits) !== 11) {
                            $fail('Номер должен содержать 11 цифр.');
                        }
                    },
                ]),

            TextInput::make('email')
                ->label('Электронная почта')
                ->email()
                ->placeholder('example@mail.ru')
                ->required()
                ->maxLength(255),

            DatePicker::make('budget_from')
                ->label('Срок подачи бюджета: с')
                ->required()
                ->native(false)
                ->displayFormat('d.m.Y')
                ->prefixIcon('heroicon-o-calendar'),

            DatePicker::make('budget_to')
                ->label('Срок подачи бюджета: по')
                ->required()
                ->native(false)
                ->displayFormat('d.m.Y')
                ->prefixIcon('heroicon-o-calendar')
                ->afterOrEqual('budget_from'),

            DatePicker::make('commerce_from')
                ->label('Срок подачи коммерческого предложения: с')
                ->required()
                ->native(false)
                ->displayFormat('d.m.Y')
                ->prefixIcon('heroicon-o-calendar'),

            DatePicker::make('commerce_to')
                ->label('Срок подачи коммерческого предложения: по')
                ->required()
                ->native(false)
                ->displayFormat('d.m.Y')
                ->prefixIcon('heroicon-o-calendar')
                ->afterOrEqual('commerce_from'),

            TextInput::make('route')
                ->label('Маршрут')
                ->placeholder('Например: «Советская площадь» — автобусы 1, 4')
                ->required()
                ->minLength(3)
                ->maxLength(255),
        ]);
    }
}
