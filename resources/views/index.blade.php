@extends('layouts.main')
@section('title', 'Dashboard')
@section('dashboard', 'active')
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
        <h2 class="page-heading">Dashboard<span>Main <i class="fa fa-chevron-right"></i> Dashboard</span></h2>

        <div class="working-area">
            <div class="body">
                <div class="total-budget-bar">
                    <div class="consumed-budget-bar {{$over}}" style="--totalBudget: {{$user->monthly_budget}}; --consumedBudget: {{$exp}}"></div>
                </div>
                <div class="row dashboard-recent">
                  <div>
                    <h4>Recent Income</h4>
                    <table>
                        <thead>
                            <th>Date</th>
                            <th>Amount</th>
                        </thead>
                        <tbody>
                            @if(count($income) > 0)
                            @foreach($income as $i)
                            <tr>
                                <td>{{$i->date}}</td>
                                <td><span>{{$user->currency}}</span>{{$i->amount}}</td>
                            </tr>
                            @endforeach
                            @if(count($income) > 5)
                                <tr>
                                    <td colspan="2"> <a href="#" class="view-all">View All <i class="fa fa-arrow-right"></i></a></td>
                                </tr>
                            @endif
                            @else
                            <tr>
                                <td colspan="2" class="center">No Income Found</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                  </div>
                  <div>
                    <h4>Recent Expense</h4>
                    <table>
                        <thead>
                            <th>Date</th>
                            <th>Amount</th>
                        </thead>
                        <tbody>
                            @if(count($expense) > 0)
                            @foreach($expense as $e)
                            <tr>
                                <td>{{$e->date}}</td>
                                <td><span>{{$user->currency}}</span>{{$e->amount}}</td>
                            </tr>
                            @endforeach
                            @if(count($expense) > 5)
                            <tr>
                                <td colspan="2"> <a href="#" class="view-all">View All <i class="fa fa-arrow-right"></i></a></td>
                            </tr>
                            @endif
                            @else
                            <tr>
                                <td colspan="2" class="center">No Income Found</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                  </div>
                </div>
                <div class="row">
                    <div class="pie-chart">
                        <h3>Income Chart (Category wise)</h3>
                        <canvas id="incomeCategoryChart"></canvas>
                        @foreach ($totalIncomeByCategory as $ti)
                            <input type="hidden" class="cw_income" value="{{$ti->amount}}" data-category="{{$ti->category}}">
                        @endforeach
                    </div>
                    <div class="pie-chart">
                        <h3>Expense Chart (Category wise)</h3>
                        <canvas id="expenseCategoryChart"></canvas>
                        @foreach ($totalExpenseByCategory as $te)
                            <input type="hidden" class="cw_expense" value="{{$te->amount}}" data-category="{{$te->category}}">
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="pie-chart">
                        <h3>Income Chart (Method wise)</h3>
                        <canvas id="incomeMethodChart"></canvas>
                        @foreach ($totalIncomeByMethod as $ti)
                            <input type="hidden" class="mw_income" value="{{$ti->amount}}" data-method="{{$ti->method}}">
                        @endforeach
                    </div>
                    <div class="pie-chart">
                        <h3>Expense Chart (Method wise)</h3>
                        <canvas id="expenseMethodChart"></canvas>
                        @foreach ($totalExpenseByMethod as $te)
                            <input type="hidden" class="mw_expense" value="{{$te->amount}}" data-method="{{$te->method}}">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
