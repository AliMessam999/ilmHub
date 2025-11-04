@extends('admin.includes.main')

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_30 pt-4">
                    <div class="white_card_body">
                        <div class="QA_section">
                            <div class="white_box_tittle list_header d-flex">
                                <h4>Career List </h4>
                                <a href="/admin/career/create" class="white_btn3 justify-content-end">Create Career</a>
                            </div>
                            <div class="QA_table mb_30">
                                <table class="table lms_table_active3">
                                    <thead>
                                        <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Icon</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Last Date To Apply</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($career as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td class="fs-2">{!! $item->icon !!}</td>
                                                <td><img src="/{{ $item->image }}" alt="{{ $item->alt ? $item->alt:"No Alt" }}" class="image-list"></td>
                                                <td>{{ $item->last_date_to_apply }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>
                                                    <div class="action_btns d-flex">
                                                        <a href="/admin/career/update/{{$item->id}}" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                                        <a href="javascript:;" class="action_btn" onclick="deleteItem(<?php echo $item->id ?>,'/admin/career/delete','Record')"> <i class="fas fa-trash"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @empty
                                                <tr><td colspan="7">No Records Found</td></tr>
                                            @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
