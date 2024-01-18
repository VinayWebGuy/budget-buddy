@extends('layouts.main')
@section('title', 'Report')
@section('report', 'active')
@section('content')
    <div class="content">
        <h2 class="page-heading">Report<span>Main <i class="fa fa-chevron-right"></i> Report</span></h2>

        <div class="working-area">
            <div class="body">
                <div class="single-report">
                    <h4>Income Report</h4>
                    <div class="form_group">
                        <label for="income_period">Period</label>
                        <select name="income_period" id="income_period">
                            <option value="">Choose Period</option>
                            <option value="current">Current Month</option>
                            <option value="last">Last Month</option>
                            <option value="last_30">Last 30 days</option>
                            <option value="last_7">Last 7 days</option>
                            <option value="custom">Custom</option>
                        </select>
                    </div>
                    <div class="row incomeRange">
                        <div class="form_group">
                            <label for="from_date">From Date</label>
                            <input type="date" name="from_date" id="from_date">
                        </div>
                        <div class="form_group">
                            <label for="to_date">To Date</label>
                            <input type="date" name="to_date" id="to_date">
                        </div>
                    </div>
                    <button type="button">Download</button>
                </div>
                <div class="single-report">
                    <h4>Expense Report</h4>
                    <div class="form_group">
                        <label for="expense_period">Period</label>
                        <select name="expense_period" id="expense_period">
                            <option value="">Choose Period</option>
                            <option value="current">Current Month</option>
                            <option value="last">Last Month</option>
                            <option value="last_30">Last 30 days</option>
                            <option value="last_7">Last 7 days</option>
                            <option value="custom">Custom</option>
                        </select>
                    </div>
                    <div class="row expenseRange">
                        <div class="form_group">
                            <label for="from_date">From Date</label>
                            <input type="date" name="from_date" id="from_date">
                        </div>
                        <div class="form_group">
                            <label for="to_date">To Date</label>
                            <input type="date" name="to_date" id="to_date">
                        </div>
                    </div>
                    <button type="button">Download</button>
                </div>
                <div class="single-report">
                    <h4>Overall Report</h4>
                    <div class="form_group">
                        <label for="overall_period">Period</label>
                        <select name="overall_period" id="overall_period">
                            <option value="">Choose Period</option>
                            <option value="current">Current Month</option>
                            <option value="last">Last Month</option>
                            <option value="last_30">Last 30 days</option>
                            <option value="last_7">Last 7 days</option>
                            <option value="custom">Custom</option>
                        </select>
                    </div>
                    <div class="row overallRange">
                        <div class="form_group">
                            <label for="from_date">From Date</label>
                            <input type="date" name="from_date" id="from_date">
                        </div>
                        <div class="form_group">
                            <label for="to_date">To Date</label>
                            <input type="date" name="to_date" id="to_date">
                        </div>
                    </div>
                    <button type="button">Download</button>
                </div>
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
