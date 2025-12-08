@extends('admin.includes.main')

@section('body')
<div class="container-fluid p-0">
    <div class="row">
        <div class="col-12">
            <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                <div class="page_title_left d-flex align-items-center">
                    <h3 class="f_s_25 f_w_700 dark_text mr_30">Contact Messages</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="white_card card_height_100 mb_30">
                <div class="white_card_body">
                    <div class="QA_table">
                        <table class="table lms_table_active">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contacts as $contact)
                                <tr>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->phone }}</td>
                                    <td>{{ $contact->subject }}</td>
                                    <td>{{ $contact->created_at->format('M d, Y') }}</td>
                                    <td>
                                        <div class="action_btns d-flex">
                                            <a href="javascript:;" class="action_btn mr_10" onclick="viewMessage('{{ addslashes($contact->message) }}')"><i class="far fa-eye"></i></a>
                                            <a href="javascript:;" class="action_btn" onclick="deleteItem({{ $contact->id }},'/admin/contact/delete','Contact Message')"><i class="fas fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function viewMessage(message) {
    Swal.fire({
        title: 'Message',
        html: '<div style="text-align: center; white-space: pre-wrap;">' + message + '</div>',
        icon: 'info',
        confirmButtonText: 'Close'
    });
}
</script>
@stop