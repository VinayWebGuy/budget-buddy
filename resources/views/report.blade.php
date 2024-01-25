@extends('layouts.main')
@section('title', 'Report')
@section('report', 'active')
@section('content')
    <div class="content">
        <h2 class="page-heading">Report<span>Main <i class="fa fa-chevron-right"></i> Report</span></h2>

        <div class="working-area">
            <div class="body">
                <form action="export-income" method="get" class="single-report">
                    <h4>Income Report</h4>
                    <div class="form_group">
                        <label for="income_period">Period</label>
                        <select required name="income_period" id="income_period">
                            <option value="">Choose Period</option>
                            <option value="current">Current Month</option>
                            <option value="last_month">Last Month</option>
                            <option value="last_30">Last 30 days</option>
                            <option value="last_7">Last 7 days</option>
                            <option value="custom">Custom</option>
                        </select>
                    </div>
                    <div class="row incomeRange">
                        <div class="form_group">
                            <label for="from_date">From Date</label>
                            <input type="date" name="from_date" class="from_date">
                        </div>
                        <div class="form_group">
                            <label for="to_date">To Date</label>
                            <input disabled type="date" name="to_date" class="to_date">
                        </div>
                    </div>
                    <button type="submit">Download</button>
                </form>
                <form action="export-expense" class="single-report">
                    <h4>Expense Report</h4>
                    <div class="form_group">
                        <label for="expense_period">Period</label>
                        <select required name="expense_period" id="expense_period">
                            <option value="">Choose Period</option>
                            <option value="current">Current Month</option>
                            <option value="last_month">Last Month</option>
                            <option value="last_30">Last 30 days</option>
                            <option value="last_7">Last 7 days</option>
                            <option value="custom">Custom</option>
                        </select>
                    </div>
                    <div class="row expenseRange">
                        <div class="form_group">
                            <label for="from_date">From Date</label>
                            <input type="date" name="from_date" class="from_date">
                        </div>
                        <div class="form_group">
                            <label for="to_date">To Date</label>
                            <input disabled type="date" name="to_date" class="to_date">
                        </div>
                    </div>
                    <button type="submit">Download</button>
                </form>
            </div>
        </div>
        <div class="backdrop"></div>
        <div class="modal">
            <div class="modal-heading">Edit Budget
                <div class="close-modal"><i class="fa fa-times"></i></div>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form_group">
                        <label for="budget">Budget</label>
                        <input type="number" id="budget" name="budget" value="15000">
                    </div>
                    <button type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
