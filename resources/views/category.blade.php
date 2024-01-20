@extends('layouts.main')
@section('title', 'Category')
@section('category', 'active')
@section('content')
    <div class="content">
        <h2 class="page-heading">Category<span>Main <i class="fa fa-chevron-right"></i> Category</span></h2>

        <div class="working-area">
            <div class="head">
                <span>All Categories</span>
                <div class="head-action">Add New +</div>
            </div>
            <div class="body">
                <table>
                    <thead>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @if(count($category) > 0)
                        @foreach ($category as $c)     
                        <tr>
                            <td>{{$c->name}}</td>
                            <td>{{$c->slug}}</td>
                            <td>
                                @if($c->status == 1)
                                <a class="active" href="{{url('category/status/0')}}/{{$c->id}}">Active</a>
                                @else
                                <a class="inactive" href="{{url('category/status/1')}}/{{$c->id}}">Inactive</a>
                                @endif
                            </td>
                            <td>
                                <a data-name="{{$c->name}}" data-id="{{$c->id}}" class="table-action edit-category" href="javascript:void(0)"><i class="fa fa-edit"></i></a>
                                <a data-id="{{$c->id}}" class="table-action delete-data" href="javascript:void(0)"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        @else
                            <tr>
                                <td colspan="4" class="center">No Category Found</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                {{ $category->links('vendor.pagination.custom-pagination') }}
            </div>
        </div>
        <div class="backdrop"></div>
        <div class="modal">
            <div class="modal-heading">Add Category
                <div class="close-modal"><i class="fa fa-times"></i></div>
            </div>
            <div class="modal-body">
                <form action="" id="addCategoryForm">
                    <div class="form_group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name">
                    </div>
                    <button type="submit">Add</button>
                </form>
            </div>
        </div>
        <div class="modal2">
            <div class="modal-heading">Edit Category
                <div class="close-modal"><i class="fa fa-times"></i></div>
            </div>
            <div class="modal-body">
                <form id="editCategoryForm">
                    <input type="hidden" id="editId">
                    <div class="form_group">
                        <label for="editName">Name</label>
                        <input type="text" id="editName" name="editName">
                    </div>
                    <button type="submit">Update</button>
                </form>
            </div>
        </div>
        <div class="modal3">
            <div class="modal-heading">Delete Category
                <div class="close-modal"><i class="fa fa-times"></i></div>
            </div>
            <div class="modal-body">
                <h4>Are you sure your really want to delete this category?</h4>
                <input type="hidden" id="deleteId">
               <div class="buttonRow">
                <button id="cancel-delete" class="outline">Cancel</button>
                <button id="confirm-categoryDelete">Confirm</button>
               </div>
            </div>
        </div>
    </div>
@endsection
