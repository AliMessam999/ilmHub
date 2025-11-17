@extends('admin.includes.main')

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_30 pt-4">
                    <div class="white_card_body">
                        <div class="QA_section">
                            <div class="white_box_tittle list_header d-flex">
                                <h4>Team Member List </h4>
                                <a href="/admin/team_member/create" class="white_btn3 justify-content-end">Create Team Member</a>
                            </div>
                            <div class="QA_table mb_30">
                                <table class="table lms_table_active3">
                                    <thead>
                                        <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Designation</th>
                                            <th scope="col">Division</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($career as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->designation  }}</td>
                                                <td>{{ $item->division   }}</td>
                                                <td><img src="/{{ $item->image }}" alt="{{ $item->alt ? $item->alt:"No Alt" }}" class="image-list"></td>
                                                <td>{{ $item->description }}</td>
                                                <td>
                                                    <div class="action_btns d-flex">
                                                        <a href="/admin/team_member/update/{{$item->id}}" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                                        <a href="javascript:;" class="action_btn" onclick="deleteItem(<?php echo $item->id ?>,'/admin/team_member/delete','Record')"> <i class="fas fa-trash"></i>
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
