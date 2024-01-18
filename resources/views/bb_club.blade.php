@extends('layouts.main')
@section('title', 'BB Club')
@section('bb_club', 'active')
@section('content')
    <div class="content">
        <h2 class="page-heading">BB Club<span>Main <i class="fa fa-chevron-right"></i> BB Club</span></h2>
        <p class="small-text">BB Club facilitates easy self-transfers, converting online balance to cash and vice versa. It serves as a record for transferring funds between accounts or exchanging cash with others. Use BB Club to log transactions when giving or receiving cash in various scenarios.</p>

        <div class="working-area">
            <div class="head">
                <span>Recent Entries</span>
                <div class="head-action">Add Entry +</div>
            </div>
            <div class="body">
                <table>
                    <thead>
                        <th>ID</th>
                        <th>Amount</th>
                        <th>Type</th>
                        <th>Remarks</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>300</td>
                            <td>SAC</td>
                            <td>Aman</td>
                            <td>
                                <a class="table-action edit-data" href="javascript:void(0)"><i class="fa fa-edit"></i></a>
                                <a class="table-action" href="javascript:void(0)"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>12000</td>
                            <td>AAC</td>
                            <td>Preet</td>
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
            <div class="modal-heading">Add Entry
                <div class="close-modal"><i class="fa fa-times"></i></div>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form_group">
                        <label for="amount">Amount</label>
                        <input type="number" id="amount" name="amount">
                    </div>
                    <div class="form_group">
                        <label for="type">Payment Type</label>
                        <select name="type" id="type">
                            <option hidden value=""></option>
                            <option value="SAA">Self Account to Account (SAA)</option>
                            <option value="SAC">Self Account to Cash (SAC)</option>
                            <option value="SCC">Self Cash to Cash (SCC)</option>
                            <option value="SCA">Self Cash to Account (SCA)</option>
                            <option value="ACA">Another Cash to Account (ACA)</option>
                            <option value="AAC">Another Account to Cash (AAC)</option>
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
            <div class="modal-heading">Edit Entry
                <div class="close-modal"><i class="fa fa-times"></i></div>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form_group">
                        <label for="amount">Amount</label>
                        <input type="number" id="amount" name="amount">
                    </div>
                    <div class="form_group">
                        <label for="type">Payment Type</label>
                        <select name="type" id="type">
                            <option hidden value=""></option>
                            <option value="SAA">Self Account to Account (SAA)</option>
                            <option value="SAC">Self Account to Cash (SAC)</option>
                            <option value="SCC">Self Cash to Cash (SCC)</option>
                            <option value="SCA">Self Cash to Account (SCA)</option>
                            <option value="ACA">Another Cash to Account (ACA)</option>
                            <option value="AAC">Another Account to Cash (AAC)</option>
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
