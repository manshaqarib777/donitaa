@extends('frontend.layouts.app')

@section('meta_title') {{translate('Tracking Page')}} @endsection
@section('content')
<section class="sub-header" style="background: url({{ !empty(get_setting_by_lang('page_header_image')) ?  url('public/'.\App\Upload::find(json_decode(get_setting_by_lang('page_header_image'), true))->file_name) : ''}});">
    <h5 class="page-title">Tracking</h5>
    <ul class="breadcrumb">
      <li><a href="{{url('/')}}">Home</a></li>
      <li><span class="active">Tracking</span></li>
    </ul>
  </section>
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <section class="contact">
            <div class="container">
              <div class="row">
                <div class="col-xs-12">
                  <h4 class="section-title"><span>01</span>{{translate('Track your shipment')}}</h4>
                </div>
                 <!--begin::Form-->
            <form class="form" action="{{route('admin.shipments.tracking')}}" method="GET">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <!--begin::Input-->
                            <div class="form-group">
                                <label>{{translate('Enter your tracking code')}}</label>
                                <input type="text" class="form-control form-control-solid form-control-lg" name="code" placeholder="{{translate('Example: SH00001')}}">
                            </div>
                            <!--end::Input-->
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
                <!--begin::Actions-->
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary font-weight-bold mr-2">{{translate('Search')}}</button>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
                <!--end::Actions-->
            </form>

                </div>
              <!-- end row -->
            </div>
            <!-- end container -->
          </section>

    </div>
    <!--end::Container-->
</div>

@endsection
