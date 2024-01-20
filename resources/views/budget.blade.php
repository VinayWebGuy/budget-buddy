@extends('layouts.main')
@section('title', 'Budget')
@section('budget', 'active')
@section('content')
    <div class="content">
        <h2 class="page-heading">Budget<span>Main <i class="fa fa-chevron-right"></i> Budget</span></h2>
        <div class="working-area">
            <div class="head">
                <span>Budget</span>
                <div class="head-action">Edit Budget</div>
            </div>
            <div class="body">
                <div class="total-budget-bar">
                    <div class="consumed-budget-bar" style="--totalBudget: 15000; --consumedBudget: 7000"></div>
                </div>


                <div class="pie-chart">
                    <canvas id="incomeExpenseChart"></canvas>
                    <input type="hidden" id="incomeVal" value="23000">
                    <input type="hidden" id="expenseVal" value="17000">
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

    <script>
       var chart = true
    </script>
@endsection
