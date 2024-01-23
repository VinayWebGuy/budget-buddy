<?php

namespace App\Exports;
use App\Models\Income;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Session;

class IncomeExport implements FromCollection, WithHeadings 
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array {
        // according to users table
        return [
            "Amount",
            "Date",
            "Method",
            "Category",
            "Remarks"
           ];
        }
        public function collection(){
            return Income::where('user_id', Session::get('user_id'))->select('amount', 'date', 'method', 'category', 'remarks')->get();
        }
}
