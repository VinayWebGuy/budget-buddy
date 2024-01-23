<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;

use App\Exports\IncomeExport;

class ExportController extends Controller
{
    public function exportIncome() {
        return Excel::download(new IncomeExport, 'income.xlsx');


    }
}
