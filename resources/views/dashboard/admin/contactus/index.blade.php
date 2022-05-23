@extends('dashboard.layouts.master')
@section('css')
@toastr_css
@section('title')
    {{trans('ContactUs_trans.Contact_us')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{trans('ContactUs_trans.Message_list')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">{{trans('main_trans.Home')}}</a></li>
                <li class="breadcrumb-item active">{{trans('ContactUs_trans.Contact_us')}}</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<div class="row">   

<div class="col-xl-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                   
                 
                    <br><br>
                    <div class="table-responsive">
                        <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                               data-page-length="50"
                               style="text-align: center">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>{{trans('ContactUs_trans.name')}}</th>
                                <th>{{trans('ContactUs_trans.phone')}}</th>
                                <th>{{trans('ContactUs_trans.message')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($contact_message as $message)
                                <tr>
                                  
                                    <td>{{ $loop->iteration  }}</td>
                                    <td>{{ $message->name }}</td>
                                    <td>{{ $message->phone }}</td>
                                    <td>{!! $message->message !!}</td>
                                   
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
    <!-- row closed -->


@endsection
