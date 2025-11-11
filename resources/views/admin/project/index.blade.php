@extends('admin.includes.main')

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_30 pt-4">
                    <div class="white_card_body">
                        <div class="QA_section">
                            <div class="white_box_tittle list_header d-flex">
                                <h4>Solution List </h4>
                                <a href="/admin/solution/create" class="white_btn3 justify-content-end">Create Solution</a>
                            </div>
                            <div class="QA_table mb_30">
                                <table class="table lms_table_active3">
                                    <thead>
                                        <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Alt Tag</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($project as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td><img src="/{{ $item->image }}" alt="{{ $item->alt ? $item->alt:"No Alt" }}" class="image-list"></td>
                                                <td>{{ $item->category->title ?? 'N/A' }}</td>
                                                <td>{!! $item->alt !!}</td>
                                                <td>
                                                    <div class="action_btns d-flex">
                                                        <a href="/admin/solution/update/{{ $item->id }}"
                                                            class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                                        <a href="javascript:;" class="action_btn mr_10"
                                                            onclick="deleteItem(<?php echo $item->id; ?>,'/admin/project/delete','Record')">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                        <a href="/admin/seo/update/CdSolution/{{ $item->id }}"
                                                            title="Add Seo Data" class="action_btn"> <i
                                                                class="fas fa-plus"></i> </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7">No Records Found</td>
                                            </tr>
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
