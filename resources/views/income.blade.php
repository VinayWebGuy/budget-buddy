@extends('layouts.main')
@section('title', 'Income')
@section('income', 'active')
@section('content')
    <div class="content">
        <h2 class="page-heading">Income<span>Main <i class="fa fa-chevron-right"></i> Income</span></h2>
        <div class="working-area">
            <div class="head">
                <span>Total Income</span>
                <div class="head-action">Add Income +</div>
            </div>
            <div class="body">
                <table>
                    <thead>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Category</th>
                        <th>Remarks</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @if(count($income) > 0)
                        @foreach ($income as $i)
                        <tr>
                            <td>{{$i->date}}</td>
                            <td><span>{{$user->currency}}</span>{{$i->amount}}</td>
                            <td>{{$i->category}}</td>
                            <td>{{$i->remarks}}</td>
                            <td>
                                <a data-amount="{{$i->amount}}" data-date="{{$i->date}}" data-category="{{$i->category}}" data-method="{{$i->method}}" data-remarks="{{$i->remarks}}" data-id="{{$i->id}}" class="table-action edit-incomeExpense" href="javascript:void(0)"><i class="fa fa-edit"></i></a>
                                <a data-id="{{$i->id}}" class="table-action delete-data" href="javascript:void(0)"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="5" class="center">No Income Found</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
        <div class="backdrop"></div>
        <div class="modal">
            <div class="modal-heading">Add Income
                <div class="close-modal"><i class="fa fa-times"></i></div>
            </div>
            <div class="modal-body">
                <form id="addIncomeForm">
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
                            <option value="Bank Transfer">Bank Transfer</option>
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
            <div class="modal-heading">Edit Income
                <div class="close-modal"><i class="fa fa-times"></i></div>
            </div>
            <div class="modal-body">
                <form id="editIncomeForm">
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
                            <option value="Bank Transfer">Bank Transfer</option>
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
            <div class="modal-heading">Delete income
                <div class="close-modal"><i class="fa fa-times"></i></div>
            </div>
            <div class="modal-body">
                <h4>Are you sure your really want to delete this income?</h4>
                <input type="hidden" id="deleteId">
               <div class="buttonRow">
                <button id="cancel-delete" class="outline">Cancel</button>
                <button id="confirm-incomeDelete">Confirm</button>
               </div>
            </div>
        </div>
    </div>
@endsection
