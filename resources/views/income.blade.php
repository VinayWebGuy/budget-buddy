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
                        <th>ID</th>
                        <th>Amount</th>
                        <th>Category</th>
                        <th>Remarks</th>
                        <th>Status</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><span>₹</span> 300</td>
                            <td>Food</td>
                            <td>Momos</td>
                            <td>
                                <a class="active" href="#">Active</a>
                            </td>
                            <td>
                                <a class="table-action edit-data" href="javascript:void(0)"><i class="fa fa-edit"></i></a>
                                <a class="table-action" href="javascript:void(0)"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><span>₹</span> 1700</td>
                            <td>Travel</td>
                            <td></td>
                            <td>
                                <a class="inactive" href="#">Inactive</a>
                            </td>
                            <td>
                                <a class="table-action edit-data" href="javascript:void(0)"><i class="fa fa-edit"></i></a>
                                <a class="table-action" href="javascript:void(0)"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        
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
                <form action="">
                    <div class="form_group">
                        <label for="amount">Amount</label>
                        <input type="number" id="amount" name="amount">
                    </div>
                    <div class="form_group">
                        <label for="date">Date</label>
                        <input type="date" id="date" name="date">
                    </div>
                    <div class="form_group">
                        <label for="category">Category</label>
                        <select name="category" id="category">
                            <option hidden value=""></option>
                            <option value="Food">Food</option>
                            <option value="Travel">Travel</option>
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
                <form action="">
                    <div class="form_group">
                        <label for="amount">Amount</label>
                        <input type="number" id="amount" name="amount">
                    </div>
                    <div class="form_group">
                        <label for="date">Date</label>
                        <input type="date" id="date" name="date">
                    </div>
                    <div class="form_group">
                        <label for="category">Category</label>
                        <select name="category" id="category">
                            <option hidden value=""></option>
                            <option value="Food">Food</option>
                            <option value="Travel">Travel</option>
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
                    <button type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>


@endsection
