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
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Type</th>
                        <th>Remarks</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @if(count($club) > 0)
                        @foreach ($club as $c)
                            <tr>
                                <td>{{$c->date}}</td>
                                <td>{{$c->amount}}</td>
                                <td>{{$c->payment_type}}</td>
                                <td>{{$c->remarks}}</td>
                                <td>
                                    <a data-amount="{{$c->amount}}" data-date="{{$c->date}}" data-remarks="{{$c->remarks}}" data-type="{{$c->payment_type}}" data-id="{{$c->id}}" class="table-action edit-clubEntry" href="javascript:void(0)"><i class="fa fa-edit"></i></a>
                                    <a data-id="{{$c->id}}" class="table-action delete-data" href="javascript:void(0)"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        @else
                            <tr>
                                <td colspan="5" class="center">No Entry Found!</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                {{ $club->links('vendor.pagination.custom-pagination') }}
            </div>
        </div>
        <div class="backdrop"></div>
        <div class="modal">
            <div class="modal-heading">Add Entry
                <div class="close-modal"><i class="fa fa-times"></i></div>
            </div>
            <div class="modal-body">
                <form id="addClubForm">
                    <div class="form_group">
                        <label for="date">Date</label>
                        <input type="date" id="date" name="date">
                    </div>
                    <div class="form_group">
                        <label for="amount">Amount</label>
                        <input type="number" id="amount" name="amount">
                    </div>
                    <div class="form_group">
                        <label for="payment_type">Payment Type</label>
                        <select name="payment_type" id="payment_type">
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
                <form id="editClubForm">
                    <input type="hidden" name="id" id="editId">
                    <div class="form_group">
                        <label for="editDate">Date</label>
                        <input type="date" id="editDate" name="editDate">
                    </div>
                    <div class="form_group">
                        <label for="editAmount">Amount</label>
                        <input type="number" id="editAmount" name="editAmount">
                    </div>
                    <div class="form_group">
                        <label for="editType">Payment Type</label>
                        <select name="editType" id="editType">
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
                        <label for="editRemarks">Remarks</label>
                       <textarea name="editRemarks" id="editRemarks" rows="2"></textarea>
                    </div>
                    <button type="submit">Update</button>
                </form>
            </div>
        </div>

        <div class="modal3">
            <div class="modal-heading">Delete Entry
                <div class="close-modal"><i class="fa fa-times"></i></div>
            </div>
            <div class="modal-body">
                <h4>Are you sure your really want to delete this entry?</h4>
                <input type="hidden" id="deleteId">
               <div class="buttonRow">
                <button id="cancel-delete" class="outline">Cancel</button>
                <button id="confirm-clubEntryDelete">Confirm</button>
               </div>
            </div>
        </div>
    </div>
@endsection
