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
                            <th>Amount</th>
                            <th>Category</th>
                        </thead>
                        <tbody>
                            @if(count($income) > 0)
                            @foreach($income as $i)
                            <tr>
                                <td><span>{{$user->currency}}</span>{{$i->amount}}</td>
                                <td>{{$i->category}}</td>
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
                            <th>Amount</th>
                            <th>Category</th>
                        </thead>
                        <tbody>
                            @if(count($expense) > 0)
                            @foreach($expense as $e)
                            <tr>
                                <td><span>{{$user->currency}}</span>{{$e->amount}}</td>
                                <td>{{$e->category}}</td>
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
            </div>
        </div>
    </div>
@endsection
