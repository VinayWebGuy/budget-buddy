@extends('layouts.main')
@section('title', 'Budget')
@section('budget', 'active')
@section('content')
@php
    $exp = $sumExpense;
    $over = "";
    if($exp > $user->monthly_budget) {
        $exp = $user->monthly_budget;
        $over = "over";
    }
    $inc = $sumIncome;
@endphp
    <div class="content">
        <h2 class="page-heading">Budget<span>Main <i class="fa fa-chevron-right"></i> Budget</span></h2>
        <div class="working-area">
            <div class="head">
                <span>Budget</span>
                <div class="head-action">Edit Budget</div>
            </div>
            <div class="body">
                <div class="total-budget-bar">
                    <div class="consumed-budget-bar {{$over}}" style="--totalBudget: {{$user->monthly_budget}}; --consumedBudget: {{$exp}}"></div>
                </div>


                <div class="pie-chart">
                    <canvas id="incomeExpenseChart"></canvas>
                    <input type="hidden" id="incomeVal" value="{{$sumIncome}}">
                    <input type="hidden" id="expenseVal" value="{{$sumExpense}}">
                </div>
            </div>
        </div>
        <div class="backdrop"></div>
        <div class="modal">
            <div class="modal-heading">Edit Budget
                <div class="close-modal"><i class="fa fa-times"></i></div>
            </div>
            <div class="modal-body">
                <form id="updateBudget">
                    <div class="form_group">
                        <label for="budget">Budget</label>
                        <input type="number" id="budget" name="budget" value="{{$user->monthly_budget}}">
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
