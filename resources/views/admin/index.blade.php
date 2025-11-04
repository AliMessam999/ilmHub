@extends('admin.includes.main')

@section('body')


<div class="container-fluid p-0 ">

    <div class="row">
        <div class="col-12">
            <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                <div class="page_title_left d-flex align-items-center">
                    <h3 class="f_s_25 f_w_700 dark_text mr_30">Dashboard</h3>
                    <ol class="breadcrumb page_bradcam mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        <li class="breadcrumb-item active">Analytic</li>
                    </ol>
                </div>
                <div class="page_title_right">
                    <div class="page_date_button d-flex align-items-center">
                        <img src="{{ url('img/icon/calender_icon.svg') }}" alt>
                        August 1, 2020 - August 31, 2020
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row ">

        <div class="white_card card_height_100 mb_30 user_crm_wrapper">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single_crm">
                        <div class="crm_head d-flex align-items-center justify-content-between">
                            <div class="thumb">
                                <img src="{{ url('img/crm/businessman.svg') }}" alt>
                            </div>
                            <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                        </div>
                        <div class="crm_body">
                            <h4>2455</h4>
                            <p>User Registrations</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single_crm ">
                        <div class="crm_head  d-flex align-items-center justify-content-between" style="background: #048391;">
                            <div class="thumb">
                                <img src="{{ url('img/crm/customer.svg') }}" alt>
                            </div>
                            <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                        </div>
                        <div class="crm_body">
                            <h4>125</h4>
                            <p>Total Users</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single_crm">
                        <div class="crm_head d-flex align-items-center justify-content-between" style="background: #04839a;">
                            <div class="thumb">
                                <img src="{{ url('img/crm/infographic.svg') }}" alt>
                            </div>
                            <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                        </div>
                        <div class="crm_body">
                            <h4>145</h4>
                            <p>Approve Circles</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single_crm">
                        <div class="crm_head d-flex align-items-center justify-content-between" style="background: #048391;">
                            <div class="thumb">
                                <img src="{{ url('img/crm/sqr.svg') }}" alt>
                            </div>
                            <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                        </div>
                        <div class="crm_body">
                            <h4>12</h4>
                            <p>Pending Users</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single_crm">
                        <div class="crm_head d-flex align-items-center justify-content-between" style="background: #04839a;">
                            <div class="thumb">
                                <img src="{{ url('img/crm/sqr.svg') }}" alt>
                            </div>
                            <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                        </div>
                        <div class="crm_body">
                            <h4>255</h4>
                            <p>Total Circles</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-xl-12">
            <div class="white_card card_height_100 mb_30">
                <div class="white_card_header">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="main-title">
                                <h3 class="m-0">New Users</h3>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row justify-content-end">
                                <div class="col-lg-8 d-flex justify-content-end">
                                    <div class="serach_field-area theme_bg d-flex align-items-center">
                                        <div class="search_inner">
                                            <form action="#">
                                                <div class="search_field">
                                                    <input type="text" placeholder="Search">
                                                </div>
                                                <button type="submit"> <img src="{{ url('img/icon/icon_search.svg') }}" alt> </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-lg-4 mt_20">
                            <select class="nice_Select2 wide">
                                <option value="1">Show by All</option>
                                <option value="1">Show by A</option>
                                <option value="1">Show by B</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="white_card_body ">
                    <div class="single_user_pil d-flex align-items-center justify-content-between">
                        <div class="user_pils_thumb d-flex align-items-center">
                            <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ url('img/customers/1.png') }}" alt></div>
                            <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                        </div>
                        <div class="user_info">
                            Customer
                        </div>
                        <div class="action_btns d-flex">
                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                        </div>
                    </div>
                    <div class="single_user_pil admin_bg d-flex align-items-center justify-content-between">
                        <div class="user_pils_thumb d-flex align-items-center">
                            <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ url('img/customers/1.png') }}" alt></div>
                            <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                        </div>
                        <div class="user_info">
                            Admin
                        </div>
                        <div class="action_btns d-flex">
                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                        </div>
                    </div>
                    <div class="single_user_pil d-flex align-items-center justify-content-between">
                        <div class="user_pils_thumb d-flex align-items-center">
                            <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ url('img/customers/1.png') }}" alt></div>
                            <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                        </div>
                        <div class="user_info">
                            Customer
                        </div>
                        <div class="action_btns d-flex">
                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                        </div>
                    </div>
                    <div class="single_user_pil d-flex align-items-center justify-content-between">
                        <div class="user_pils_thumb d-flex align-items-center">
                            <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ url('img/customers/1.png') }}" alt></div>
                            <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                        </div>
                        <div class="user_info">
                            Customer
                        </div>
                        <div class="action_btns d-flex">
                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                        </div>
                    </div>
                    <div class="single_user_pil d-flex align-items-center justify-content-between mb-0">
                        <div class="user_pils_thumb d-flex align-items-center">
                            <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ url('img/customers/1.png') }}" alt></div>
                            <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                        </div>
                        <div class="user_info">
                            Customer
                        </div>
                        <div class="action_btns d-flex">
                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>




@stop