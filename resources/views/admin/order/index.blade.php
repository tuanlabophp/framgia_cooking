@extends('admin.master')

@section('title')
{{ trans('admin.order_manage') }}
@endsection

@section('style')
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
{{ Html::style('bower/summernote/dist/summernote.css') }}
<meta id="token" name="csrf-token" value="{{ csrf_token() }}">
@endsection
@section('breadcrumb')
<h1>{{ trans('admin.order') }}</h1>
<ul class="breadcrumb">
    <i class="ti-server panel-title"></i>
    <li class="next">
        <a href="{{ route('admin.report') }}">{{ trans('admin.dashboard') }}</a>
    </li>
    <li class="next">
        <a>{{ trans('admin.order') }}</a>
    </ul>
    @endsection

    @section('content')
    <!-- order Listing -->
    <section class="content p-l-r-15" id="manage-order">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <div id="table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-bordered dataTable no-footer" id="table" role="grid">
                                            <thead>
                                                <tr class="filters" role="row">
                                                    <th class="col-md-1">{{ trans('admin.id') }}</th>
                                                    <th class="col-md-3">{{ trans('admin.user') }}</th>
                                                    <th class="col-md-1">{{ trans('admin.seller') }}</th>
                                                    <th class="col-md-1">{{ trans('admin.note') }}</th>
                                                    <th class="col-md-1">{{ trans('admin.status') }}</th>
                                                    <th class="col-md-1">{{ trans('admin.action') }}</th>
                                                </thead>
                                                <tbody>
                                                    <tr role="row" v-for="order in orders">
                                                        <td>@{{ order.id }}</td>
                                                        <td><a data-toggle="modal" v-on:click="showorder(order)" type="button">@{{ order.user.name }}</a></td>
                                                        <td>
                                                            <a v-bind:href="'/admin/user/' + order.user.id">@{{ order.user.name }}</a></td>
                                                            <td>@{{ order.note }}</td>

                                                            <td v-if="order.status == 0">
                                                                <span class="label label-warning">
                                                                    {{ trans('sites.pending') }}
                                                                </span>
                                                            </td>
                                                            <td v-if="order.status == 1">
                                                                <span class="label label-success">
                                                                    {{ trans('sites.success') }}
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <span class="" v-on:click="showOrder(order)">
                                                                    <i class="fa fa-fw ti-pencil text-primary actions_icon" title="{{ trans('admin.show') }}"></i>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- Pagination -->
                                        <nav class="dataTables_paginate paging_simple_numbers">
                                            <ul class="pagination">
                                                <li v-if="pagination.current_page > 1">
                                                    <a href="#"
                                                    @click.prevent="changePage(pagination.current_page - 1)">
                                                    <span aria-hidden="true">«</span>
                                                </a>
                                            </li>
                                            <li v-for="page in pagesNumber"
                                            v-bind:class="[ page == isActived ? 'active' : '']">
                                            <a href="#"
                                            @click.prevent="changePage(page)">@{{ page }}</a>
                                        </li>
                                        <li v-if="pagination.current_page < pagination.last_page">
                                            <a href="#"
                                            @click.prevent="changePage(pagination.current_page + 1)">
                                            <span aria-hidden="true">»</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit order Modal -->
    <div class="modal fade" id="show-order" role="dialog">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel"></h4>
                </div>
                <div class="modal-body clearfix">

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="invoice-title">
                                    <h2>{{ trans('sites.show_order') }}</h2>
                                    <h3 class="pull-right">
                                        <span v-if="order.status == 1" class="label label-success">{{ trans('sites.success') }}</span>
                                        <span v-if="order.status == 0" class="label label-warning">{{ trans('sites.pending') }}</span>
                                    </h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <address>
                                            <strong>{{ trans('sites.order_infomation') }}:</strong><br>
                                            @{{ order.name }}<br>
                                            @{{ order.email }}<br>
                                            @{{ order.phone }}<br>
                                            @{{ order.address }}
                                        </address>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <address>
                                            <strong>{{ trans('sites.order_date') }}:</strong><br>
                                            @{{ order.created_at }}<br><br>
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><strong>{{ trans('sites.order_summary') }}</strong></h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-condensed">
                                                <thead>
                                                    <tr>
                                                        <td><strong>{{ trans('sites.item') }}</strong></td>
                                                        <td class="text-center"><strong>{{ trans('sites.price') }}</strong></td>
                                                        <td class="text-center"><strong>{{ trans('sites.quantity') }}</strong></td>
                                                        <td class="text-right"><strong>{{ trans('sites.total') }}</strong></td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                                    <tr v-for="orderDetail in orderDetails">
                                                        <td>@{{ orderDetail.cooking.name }}</td>
                                                        <td class="text-center">@{{ orderDetail.price / orderDetail.quantity }}</td>
                                                        <td class="text-center">@{{ orderDetail.quantity }}</td>
                                                        <td class="text-right">@{{ orderDetail.price }}</td>
                                                    </tr>
                                                    </tr>
                                                    <tr>
                                                        <td class="thick-line"></td>
                                                        <td class="thick-line"></td>
                                                        <td class="thick-line text-center"><strong>{{ trans('sites.total') }}</strong></td>
                                                        <td class="thick-line text-right">@{{ order.total }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="no-line"></td>
                                                        <td class="no-line"></td>
                                                        <td class="no-line text-center"><strong>{{ trans('sites.shipping') }}</strong></td>
                                                        <td class="no-line text-right">0đ</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="no-line"></td>
                                                        <td class="no-line"></td>
                                                        <td class="no-line text-center"><strong>{{ trans('sites.money') }}</strong></td>
                                                        <td class="no-line text-right">@{{ order.total }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')

{{ Html::script('admin/order.js') }}

@endsection
