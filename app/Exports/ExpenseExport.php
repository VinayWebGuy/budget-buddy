<?php

namespace App\Exports;

use App\Models\Expense;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Session;
use Illuminate\Http\Request;

class ExpenseExport implements FromCollection, WithHeadings 
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $conditions;

    public function __construct(Request $request)
    {
        $this->conditions = $request;
    }
    public function headings(): array {
        return [
            "Amount",
            "Date",
            "Method",
            "Category",
            "Remarks"
           ];
        }
        public function collection(){
            $query =  Expense::where('user_id', Session::get('user_id'))->select('amount', 'date', 'method', 'category', 'remarks');
            if ($this->conditions->has('expense_period') && $this->conditions->expense_period == 'current') {
                $query->whereMonth('date', '=', date('m'));
                $query->whereYear('date', '=', date('Y'));
            }
            if ($this->conditions->has('expense_period') && $this->conditions->expense_period == 'last_month') {
                $query->whereMonth('date', '=', now()->subMonth()->month);
                $query->whereYear('date', '=', now()->subMonth()->year);
            }
            if ($this->conditions->has('expense_period') && $this->conditions->expense_period == 'last_30') {
                $query->whereDate('date', '>=', now()->subDays(30));
            }
            if ($this->conditions->has('expense_period') && $this->conditions->expense_period == 'last_7') {
                $query->whereDate('date', '>=', now()->subDays(7));
            }
            if ($this->conditions->has('expense_period') && $this->conditions->expense_period == 'custom' && $this->conditions->has('from_date') && $this->conditions->has('to_date')) {
                $query->whereBetween('date', [$this->conditions->from_date, $this->conditions->to_date]);
            }
            return $query->get();
        }
}
