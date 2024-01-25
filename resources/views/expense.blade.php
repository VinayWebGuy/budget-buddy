@extends('layouts.main')
@section('title', 'Expense')
@section('expense', 'active')
@section('content')
    <div class="content">
        <h2 class="page-heading">Expense<span>Main <i class="fa fa-chevron-right"></i> Expense</span></h2>
        <div class="working-area">
            <div class="head">
                <span>Total Expense</span>
                <div class="head-action">Add Expense +</div>
            </div>
            <div class="body">
                <table>
                    <thead>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Category</th>
                        <th>Method</th>
                        <th>Remarks</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @if(count($expense) > 0)
                        @foreach ($expense as $e)
                        <tr>
                            <td>{{$e->date}}</td>
                            <td><span>{{$user->currency}}</span>{{$e->amount}}</td>
                            <td>{{$e->category}}</td>
                            <td>{{$e->method}}</td>
                            <td>{{$e->remarks}}</td>
                            <td>
                                <a data-amount="{{$e->amount}}" data-date="{{$e->date}}" data-category="{{$e->category}}" data-method="{{$e->method}}" data-remarks="{{$e->remarks}}" data-id="{{$e->id}}" class="table-action edit-incomeExpense" href="javascript:void(0)"><i class="fa fa-edit"></i></a>
                                <a data-id="{{$e->id}}" class="table-action delete-data" href="javascript:void(0)"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="5" class="center">No Expense Found</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
                {{ $expense->links('vendor.pagination.custom-pagination') }}
            </div>
        </div>
        <div class="backdrop"></div>
        <div class="modal">
            <div class="modal-heading">Add Expense
                <div class="close-modal"><i class="fa fa-times"></i></div>
            </div>
            <div class="modal-body">
                <form id="addExpenseForm">
                    <div class="form_group">
                        <label for="amount">Amount</label>
                        <input type="number" id="amount" name="amount" step="0.1">
                    </div>
                    <div class="form_group">
                        <label for="date">Date</label>
                        <input type="date" id="date" name="date">
                    </div>
                    <div class="form_group">
                        <label for="category">Category</label>
                        <select name="category" id="category">
                            <option hidden value=""></option>
                           @foreach ($category as $c)
                               <option value="{{$c->name}}">{{$c->name}}</option>
                           @endforeach
                        </select>
                    </div>
                    <div class="form_group">
                        <label for="method">Payment Method</label>
                        <select name="method" id="method">
                            <option hidden value=""></option>
                            <option value="Cash">Cash</option>
                            <option value="UPI">UPI</option>
                              <option value="Cheque">Cheque</option>
                              <option value="Credit Card">Credit Card</option>
                              <option value="Bank Transfer">Bank Transfer</option>
                              <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="form_group">
                        <label for="remarks">Remarks</label>
                       <textarea name="remarks" id="remarks" rows="2"></textarea>
                    </div>
                    <button type="submit">Add</button>
                </form>
            </div>
        </div>
        <div class="modal2">
            <div class="modal-heading">Edit Expense
                <div class="close-modal"><i class="fa fa-times"></i></div>
            </div>
            <div class="modal-body">
                <form id="editExpenseForm">
                    <input type="hidden" id="editId">
                    <div class="form_group">
                        <label for="editAmount">Amount</label>
                        <input type="number" id="editAmount" name="editAmount" step="0.1">
                    </div>
                    <div class="form_group">
                        <label for="editDate">Date</label>
                        <input type="date" id="editDate" name="editDate">
                    </div>
                    <div class="form_group">
                        <label for="editCategory">Category</label>
                        <select name="editCategory" id="editCategory">
                            <option hidden value=""></option>
                            @foreach ($category as $c)
                               <option value="{{$c->name}}">{{$c->name}}</option>
                           @endforeach
                        </select>
                    </div>
                    <div class="form_group">
                        <label for="editMethod">Payment Method</label>
                        <select name="editMethod" id="editMethod">
                            <option hidden value=""></option>
                            <option value="Cash">Cash</option>
                            <option value="UPI">UPI</option>
                              <option value="Cheque">Cheque</option>
                              <option value="Credit Card">Credit Card</option>
                              <option value="Bank Transfer">Bank Transfer</option>
                              <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="form_group">
                        <label for="editRemarks">Remarks</label>
                       <textarea name="editRemarks" id="editRemarks" rows="2"></textarea>
                    </div>
                    <button type="submit">Update</button>
                </form>
            </div>
        </div>
        <div class="modal3">
            <div class="modal-heading">Delete expense
                <div class="close-modal"><i class="fa fa-times"></i></div>
            </div>
            <div class="modal-body">
                <h4>Are you sure your really want to delete this expense?</h4>
                <input type="hidden" id="deleteId">
               <div class="buttonRow">
                <button id="cancel-delete" class="outline">Cancel</button>
                <button id="confirm-expenseDelete">Confirm</button>
               </div>
            </div>
        </div>
    </div>
@endsection
