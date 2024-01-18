@extends('layouts.main')
@section('title', 'Dashboard')
@section('dashboard', 'active')
@section('content')
    <div class="content">
        <h2 class="page-heading">Dashboard<span>Main <i class="fa fa-chevron-right"></i> Dashboard</span></h2>

        <div class="working-area">
            <div class="body">
                <div class="total-budget-bar">
                    <div class="consumed-budget-bar" style="--totalBudget: 15000; --consumedBudget: 7000"></div>
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
                            <tr>
                                <td><span>₹</span> 300</td>
                                <td>Food</td>
                            </tr>
                            <tr>
                                <td><span>₹</span> 1700</td>
                                <td>Travel</td>
                            </tr>
                            <tr>
                                <td><span>₹</span> 300</td>
                                <td>Food</td>
                            </tr>
                            <tr>
                                <td><span>₹</span> 1700</td>
                                <td>Travel</td>
                            </tr>
                            <tr>
                                <td><span>₹</span> 300</td>
                                <td>Food</td>
                            </tr>
                            <tr>
                                <td colspan="2"> <a href="#" class="view-all">View All <i class="fa fa-arrow-right"></i></a></td>
                            </tr>
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
                            <tr>
                                <td><span>₹</span> 21000</td>
                                <td>Kitchen</td>
                            </tr>
                            <tr>
                                <td><span>₹</span> 12000</td>
                                <td>Repair</td>
                            </tr>
                            <tr>
                                <td><span>₹</span> 21000</td>
                                <td>Kitchen</td>
                            </tr>
                            <tr>
                                <td><span>₹</span> 12000</td>
                                <td>Repair</td>
                            </tr>
                            <tr>
                                <td><span>₹</span> 12000</td>
                                <td>Repair</td>
                            </tr>
                            <tr>
                                <td colspan="2"> <a href="#" class="view-all">View All <i class="fa fa-arrow-right"></i></a></td>
                            </tr>
                           
                        </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection
