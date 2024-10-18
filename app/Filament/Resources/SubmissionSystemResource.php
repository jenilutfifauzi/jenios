<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubmissionSystemResource\Pages;
use App\Filament\Resources\SubmissionSystemResource\RelationManagers;
use App\Models\Submission;
use App\Models\SubmissionSystem;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\Action as TableAction;

class SubmissionSystemResource extends Resource
{
    protected static ?string $model = Submission::class;

    protected static ?string $label = 'Daftar Pengajuan System';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('user_id')
                    ->label('ID User')
                    ->required()
                    ->placeholder('User')
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
                    ->maxFiles(1)
                    ->downloadable()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user_id')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('user.name')
                    ->label('Nama User')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                \Filament\Tables\Columns\TextColumn::make('price')
                    ->currency(shouldConvert: true, currency: 'IDR')
                    ->searchable(),

                \Filament\Tables\Columns\TextColumn::make('nego_price')
                    ->currency(shouldConvert: true, currency: 'IDR'),
                \Filament\Tables\Columns\TextColumn::make('price_final')
                    ->currency(shouldConvert: true, currency: 'IDR'),
                TextColumn::make('description')
                    ->searchable()
                    ->sortable()
                    ->html(),
                TextColumn::make('file')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('status')
                    ->label('Status')
                    ->colors([
                        'warning' => 'pending',
                        'success' => 'approved',
                        'danger' => 'rejected',
                    ]),
                TextColumn::make('created_at')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                TableAction::make('price')
                    ->label('Set Harga')
                    ->icon('heroicon-o-currency-dollar')
                    ->action(function (Submission $record, array $data): void {
                        $record->update([
                            'price' => $data['price'],
                            'price_final' => $data['price_final'],
                            'status' => $data['status'],
                        ]);

                        // notification table
                    })
                    ->form([
                        // tampilkan harga nego 
                        \Filament\Forms\Components\TextInput::make('nego_price')
                            ->label('Harga nego')
                            ->default(fn($record) => $record->nego_price)
                            ->readOnly()
                            ->currencyMask(thousandSeparator: ',', decimalSeparator: '.', precision: 2),
                        \Filament\Forms\Components\TextInput::make('price')
                            ->default(fn($record) => $record->price)
                            ->currencyMask(thousandSeparator: ',', decimalSeparator: '.', precision: 2),
                        // final price
                        \Filament\Forms\Components\TextInput::make('price_final')
                            ->default(fn($record) => $record->price_final)
                            ->currencyMask(thousandSeparator: ',', decimalSeparator: '.', precision: 2),
                        // select status
                        \Filament\Forms\Components\Select::make('status')
                            ->options([
                                'pending' => 'Pending',
                                'approved' => 'Approved',
                                'rejected' => 'Rejected',
                            ])
                            ->default(fn($record) => $record->status)
                            ->required(),

                    ]),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageSubmissionSystems::route('/'),
        ];
    }
}
