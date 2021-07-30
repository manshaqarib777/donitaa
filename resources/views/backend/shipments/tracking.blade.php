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
		<!--begin::Card-->
		<div class="card card-custom gutter-b">
			<div class="card-body p-0 pb-10">
				<!-- begin: Invoice-->
				<!-- begin: Invoice header-->
                @php
                    $code = filter_var($shipment->code, FILTER_SANITIZE_NUMBER_INT);
                @endphp
				<div class="row justify-content-center pt-8 px-8 px-md-0">
					<div class="col-md-10">
                        <section class="contact">
                            <div class="container">
                              <div class="row">
                                <div class="col-xs-12">
                                  <h4 class="section-title"><span>01</span>{{translate('Shipment')}}: {{$shipment->code}}</h4>
                                </div>
                                <div class="d-flex justify-content-between pb-6">
                                    <div class="d-flex flex-column flex-root">
                                        <h4 class="title">{{translate('Current Status')}}: <span class="label label-default">{{$shipment->getStatus()}}</span></h4>
                                    </div>
                                    @if ($shipment->amount_to_be_collected && $shipment->amount_to_be_collected  > 0)
                                        <div class="d-flex flex-column flex-root">
                                            <h4 class="title">{{translate('Shipping Date')}}: <span class="label label-default">{{$shipment->shipping_date}}</span></h4>
                                        </div>
                                    @endif
                                </div>
                                <div class="border-bottom w-100"></div>

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase">{{translate('date')}}</th>
                                            <th class="text-uppercase">{{translate('details')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{$shipment->created_at->diffForHumans()}}</td>
                                            <td>{{translate('Shipment Created')}}</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        @foreach($shipment->logs()->orderBy('id','asc')->get() as $log)
                                            <tr>
                                                <td>{{$log->created_at->diffForHumans()}}</td>
                                                <td>{{\App\Shipment::getClientStatusByStatusId($log->to)}}</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                              </div>
                              <!-- end row -->
                            </div>
                            <!-- end container -->
                        </section>




					</div>
				</div>
				<!-- end: Invoice header-->
			</div>
		</div>
		<!--end::Card-->
	</div>
</div>
@endsection
