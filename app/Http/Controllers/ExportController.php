<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;

use App\Exports\IncomeExport;
use App\Exports\ExpenseExport;

class ExportController extends Controller
{
    public function exportIncome(Request $request) {
        return Excel::download(new IncomeExport($request), 'income.xlsx');
    }
    public function exportExpense(Request $request) {
        return Excel::download(new ExpenseExport($request), 'expense.xlsx');
    }
}
