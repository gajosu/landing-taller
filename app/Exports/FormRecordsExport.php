<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use App\Models\Form;

class FormRecordsExport implements FromCollection, WithHeadings, WithMapping
{
    protected $form;

    public function __construct(Form $form)
    {
        $this->form = $form;
    }

    public function collection()
    {
        return $this->form->records()->get();
    }

    public function headings(): array
    {
        return [
            'Nombre',
            'Apellido',
            'Cédula',
            'Fecha de Nacimiento',
            'Email',
            'Teléfono',
            'Ciudad',
            'Especialidad',
            'Tipo de Negocio',
            // 'Estado',
            'Fecha de Registro'
        ];
    }

    public function map($record): array
    {
        return [
            $record->firstname,
            $record->lastname,
            $record->cedula,
            $record->birthday?->format('d/m/Y'),
            $record->email,
            $record->phone,
            $record->city,
            $record->specialty,
            $record->business_type,
            // ucfirst($record->status),
            $record->created_at->format('d/m/Y H:i:s')
        ];
    }
}
