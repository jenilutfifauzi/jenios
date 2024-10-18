<?php

namespace App\Filament\App\Resources;

use App\Filament\App\Resources\SubmissionResource\Pages;
use App\Filament\App\Resources\SubmissionResource\RelationManagers;
use App\Models\Submission;
use Filament\Actions\Action;
use Filament\Tables\Actions\Action as TableAction;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Number;
use Illuminate\Support\Str;
use function Filament\Support\format_money;

class SubmissionResource extends Resource
{
    protected static ?string $model = Submission::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Pengajuan Judul Sistem';

    public static function form(Form $form): Form
    {
        $user = auth()->user();
        return $form
            ->schema([
                TextInput::make('user_id')
                    ->label('ID User')
                    ->required()
                    ->placeholder('User')
                    ->default($user->id)
                    ->readOnly(),

                TextInput::make('title')
                    ->label('Judul aplikasi')
                    ->required()
                    ->placeholder('Title')
                    ->columnSpan(12),
                RichEditor::make('description')
                    ->label('Deskripsi aplikasi')
                    ->required()
                    ->placeholder('Description')
                    ->columnSpan(12),
                FileUpload::make('file')
                    ->label('File pendukung (opsional)')
                    ->disk("public")
                    ->directory("documentations")
                    ->visibility("public")
                    ->columnSpan(12)
                    ->maxFiles(1)
                    ->downloadable()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Judul aplikasi')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('description')
                    ->label('Deskripsi aplikasi')
                    ->searchable()
                    ->sortable()
                    ->html(),
                \Filament\Tables\Columns\TextColumn::make('price')
                    ->label('Harga')
                    ->currency(shouldConvert: true, currency: 'IDR'),
                BadgeColumn::make('nego')
                    ->label('Nego')
                    ->colors([
                        'warning' => 'No',
                        'success' => 'Yes',
                    ]),
                \Filament\Tables\Columns\TextColumn::make('nego_price')
                    ->label('Harga nego')
                    ->currency(shouldConvert: true, currency: 'IDR'),
                \Filament\Tables\Columns\TextColumn::make('price_final')
                    ->label('Harga final')
                    ->currency(shouldConvert: true, currency: 'IDR'),
                BadgeColumn::make('status')
                    ->label('Status')
                    ->colors([
                        'warning' => 'pending',
                        'success' => 'approved',
                        'danger' => 'rejected',
                    ])
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                // Tables\Actions\DeleteAction::make(),
                TableAction::make('decline')
                    ->label('Batalkan')
                    ->icon('heroicon-o-x-circle')
                    ->action(function (Submission $record, array $data): void {
                        $record->update(['status' => 'rejected']);
                    })
                    ->deselectRecordsAfterCompletion()
                    ->requiresConfirmation()
                    ->modalHeading('Batalkan pengajuan')
                    ->modalSubheading('Apakah Anda yakin ingin membatalkan pengajuan ini?')
                    ->modalButton('Ya, batalkan')
                    ->visible(fn(Submission $record): bool => $record->status !== 'rejected'),

                TableAction::make('nego')
                    ->label('Nego harga')
                    ->icon('heroicon-o-currency-dollar')
                    ->action(function (Submission $record, array $data): void {
                        $record->update([
                                'nego' => 'yes',
                                'nego_price' => $data['nego_price']
                        ]);

                        // notification table
                        // Notifi
                    })
                    ->form([
                        \Filament\Forms\Components\TextInput::make('nego_price')
                            ->currencyMask(thousandSeparator: ',', decimalSeparator: '.', precision: 2)

                    ])
                    ->visible(fn(Submission $record): bool => $record->status !== 'rejected' && $record->nego !== 'yes'),

            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make(),
                // ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageSubmissions::route('/'),
        ];
    }
}
