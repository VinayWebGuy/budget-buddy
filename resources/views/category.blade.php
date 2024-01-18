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
                        <th>ID</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Food</td>
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
                            <td>Travel</td>
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
            <div class="modal-heading">Add Category
                <div class="close-modal"><i class="fa fa-times"></i></div>
            </div>
            <div class="modal-body">
                <form action="">
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
                <form action="">
                    <div class="form_group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name">
                    </div>
                    <button type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
