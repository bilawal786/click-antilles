@extends('layouts.back-end.app')
@section('title', \App\CPU\translate('Edit Shipment Option'))

@push('css_or_js')
    <link href="{{asset('public/assets/back-end')}}/css/select2.min.css" rel="stylesheet"/>
    <link href="{{asset('public/assets/back-end/css/croppie.css')}}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Custom styles for this page -->
    <link href="{{asset('public/assets/back-end')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@section('content')
    <div class="content container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{\App\CPU\translate('Dashboard')}}</a></li>
                <li class="breadcrumb-item" aria-current="page">{{\App\CPU\translate('Shipment')}}</li>
            </ol>
        </nav>

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ \App\CPU\translate('Edit')}} {{ \App\CPU\translate('new')}} {{ \App\CPU\translate('Shipment')}}
                    </div>
                    <div class="card-body" style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};">
                        <form action="{{route('admin.shippingOption.update',[$shipmentOption->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            {{--                            @php($language=\App\Model\BusinessSetting::where('type','pnc_language')->first())--}}
                            {{--                            @php($language = $language->value ?? null)--}}
                            {{--                            @php($default_lang = 'en')--}}

                            {{--                            @php($default_lang = json_decode($language)[0])--}}
                            {{--                            <ul class="nav nav-tabs mb-4">--}}
                            {{--                                @foreach(json_decode($language) as $lang)--}}
                            {{--                                    <li class="nav-item">--}}
                            {{--                                        <a class="nav-link lang_link {{$lang == $default_lang? 'active':''}}"--}}
                            {{--                                           href="#"--}}
                            {{--                                           id="{{$lang}}-link">{{\App\CPU\Helpers::get_language_name($lang).'('.strtoupper($lang).')'}}</a>--}}
                            {{--                                    </li>--}}
                            {{--                                @endforeach--}}
                            {{--                            </ul>--}}
                            <div class="row">
                                <div class="col-md-12">
                                    {{--                                    @foreach(json_decode($language) as $lang)--}}
                                    <div class="form-group"
                                         id="">
                                        <label for="name">{{ \App\CPU\translate('Title')}} </label>
                                        <input type="text" name="title" class="form-control" value="{{$shipmentOption->title}}" id="title" placeholder="{{\App\CPU\translate('Ex')}} : {{\App\CPU\translate('LUX')}}">
                                    </div>
                                    <div class="form-group"
                                         id="">
                                        <label for="name">{{ \App\CPU\translate('Description')}} </label>
                                        <input type="text" name="description" class="form-control" value="{{$shipmentOption->description}}" id="description" placeholder="{{\App\CPU\translate('Ex')}} : {{\App\CPU\translate('write_something')}}">
                                    </div>
                                    <div class="form-group"
                                         id="">
                                        <label for="price">{{ \App\CPU\translate('Price')}} </label>
                                        <input type="number" name="price" class="form-control" value="{{$shipmentOption->price}}" id="price" placeholder="{{\App\CPU\translate('Ex')}} : {{\App\CPU\translate('Amount')}}">
                                    </div>
                                    <div class="form-group"
                                         id="">
                                        <label for="location">{{ \App\CPU\translate('Location')}} </label>
                                        <input type="text" name="location" class="form-control" value="{{$shipmentOption->location}}" id="location" placeholder="{{\App\CPU\translate('Ex')}} : {{\App\CPU\translate('Area')}}">
                                    </div>
                                    <div class="form-group"
                                         id="">
                                        <label for="duration">{{ \App\CPU\translate('Duration')}} </label>
                                        <input type="text" name="duration" class="form-control" value="{{$shipmentOption->duration}}" id="duration" placeholder="{{\App\CPU\translate('Ex')}} : {{\App\CPU\translate('Time period')}}">
                                    </div>
                                    {{--                                        <input type="hidden" name="lang[]" value="{{$lang}}">--}}
                                    {{--                                    @endforeach--}}
                                    {{--                                    <div class="form-group">--}}
                                    {{--                                        <label for="name">{{ \App\CPU\translate('brand_logo')}}</label><span class="badge badge-soft-danger">( {{\App\CPU\translate('ratio')}} 1:1 )</span>--}}
                                    {{--                                        <div class="custom-file" style="text-align: left" required>--}}
                                    {{--                                            <input type="file" name="image" id="customFileUpload" class="custom-file-input"--}}
                                    {{--                                                   accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">--}}
                                    {{--                                            <label class="custom-file-label" for="customFileUpload">{{\App\CPU\translate('choose')}} {{\App\CPU\translate('file')}}</label>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                </div>
                                {{--                                <div class="col-md-6 mb-4">--}}
                                {{--                                    <div class="text-center">--}}
                                {{--                                        <img style="border-radius: 10px; max-height:170px;" id="viewer"--}}
                                {{--                                             src="{{asset('public\assets\back-end\img\400x400\img2.jpg')}}" alt="banner image"/>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                            </div>


                            <div class="">
                                <button type="submit" class="btn btn-primary float-right">{{ \App\CPU\translate('update')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')

@endpush
