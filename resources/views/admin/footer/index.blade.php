@extends('admin.includes.main')

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_30 pt-4">
                    <div class="white_card_body">
                        <div class="QA_section">
                            <div class="white_box_tittle list_header d-flex">
                                <h4> Footer Content </h4>
                                <a href="/admin/footer/create" class="white_btn3 justify-content-end">Add</a>
                            </div>
                            <div class="QA_table mb_30">
                                <table class="table lms_table_active3">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Menu</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Sub_Category</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        @foreach ($element as $item)
                                            <tr>
                                              
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->title }}</td>
                                                {{-- <td>{{ $item->menu->title }}</td> --}}
                                                <td>{{ $item->menu->title ?? 'No Menu' }}</td>

                                                {{-- <td><img src="/{{ $item->image }}" alt="{{ $item->alt ? $item->alt:"No Alt" }}" class="image-list"></td> --}}
                                                <td>{{ $item->category_id ? $item->category->title : 'N/A' }}</td>
                                               
                                                <td>{{ $item->sub_category_id ? $item->sub_category->title : 'N/A' }}</td>
                                                <td>
                                                    <div class="action_btns d-flex">
                                                        <a href="{{route('footer.update', $item->id)}}" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                                        <a href="javascript:;" class="action_btn" onclick="deleteItem({{ $item->id }},'/admin/footer/delete','Record')"> <i class="fas fa-trash"></i>
                                                        </a>
                                                    </div>  
                                                </td>
                                            </tr>
                                            {{-- @empty
                                                <tr class="text-center"><td colspan="7">No Records Found</td></tr> --}}

                                            
                                        @endforeach

                                           
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
