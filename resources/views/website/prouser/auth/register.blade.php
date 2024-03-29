@extends('website.layouts.master')
@section('content')
    @section('title', \App\CPU\translate('Register'))

    @push('css_or_js')
        <style>
            @media (max-width: 500px) {
                #sign_in {
                    margin-top: -23% !important;
                }

            }

        </style>
    @endpush
    <div id="content" class="site-content">
        <div class="col-full">
            <div class="row justify-content-center for-margin" style="margin-bottom: 60px;">
                <nav class="woocommerce-breadcrumb">
                    <a href="#">{{\App\CPU\translate('Home')}}</a>
                    <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>{{\App\CPU\translate('Account')}}
                </nav>
                <div class="col-md-8">
                    <div class="card border-0 box-shadow">
                        <div class="card-body">
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div>{{$error}}</div>
                                @endforeach
                            @endif
                            {{--                            <h2 class="h4 mb-1">{{\App\CPU\translate('no_account')}}</h2>--}}
                            <h3  class="h4 mb-1">{{\App\CPU\translate('register_control_your_order')}}
                                .</h3>
                            <form class="needs-validation_" action="{{route('pro.register')}}"
                                  method="post" id="sign-up-form">
                                @csrf
                                @php($default_location=\App\CPU\Helpers::get_business_settings('default_location'))
                                <input type="hidden" id="latitude"
                                       name="latitude" class="form-control d-inline"
                                       placeholder="Ex : -94.22213" value="{{$default_location?$default_location['lat']:0}}" required readonly>
                                <input type="hidden"
                                       name="longitude" class="form-control"
                                       placeholder="Ex : 103.344322" id="longitude" value="{{$default_location?$default_location['lng']:0}}" required readonly>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="reg-fn">{{\App\CPU\translate('first_name')}}</label>
                                            <input class="form-control" value="{{old('f_name')}}" type="text" name="f_name"
                                                   style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};"
                                                   required>
                                            <div class="invalid-feedback">{{\App\CPU\translate('Please enter your first name')}}!</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="reg-ln">{{\App\CPU\translate('last_name')}}</label>
                                            <input class="form-control" type="text" value="{{old('l_name')}}" name="l_name"
                                                   style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};">
                                            <div class="invalid-feedback">{{\App\CPU\translate('Please enter your last name')}}!</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="reg-email">{{\App\CPU\translate('email_address')}}</label>
                                            <input class="form-control" type="email" value="{{old('email')}}"  name="email"
                                                   style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};" required>
                                            <div class="invalid-feedback">{{\App\CPU\translate('Please enter valid email address')}}!</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="reg-phone">{{\App\CPU\translate('phone_number')}}
                                                <small class="text-primary">( * {{\App\CPU\translate('country_code_is_must')}} {{\App\CPU\translate('like_for_BD_880')}} )</small></label>
                                            <input class="form-control" type="number"  value="{{old('phone')}}"  name="phone"
                                                   style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};"
                                                   required>
                                            <div class="invalid-feedback">{{\App\CPU\translate('Please enter your phone number')}}!</div>
                                        </div>
                                    </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="reg-phone">{{\App\CPU\translate('dob')}}</label>
                                                <input class="form-control" type="date"  value="{{old('dob')}}"  name="dob"
                                                       style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};"
                                                       required>
                                            </div>
                                        </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="reg-phone">{{\App\CPU\translate('City')}}</label>
                                            <input class="form-control" type="text"  value="{{old('city')}}"  name="city"
                                                   style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};"
                                                   required>
                                    </div>
                                    </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="reg-phone">{{\App\CPU\translate('zip_code')}}</label>
                                                <input class="form-control" type="text"  value="{{old('zip')}}"  name="zip"
                                                       style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};"
                                                       required>
                                            </div>
                                    </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="reg-phone">{{\App\CPU\translate('Address')}}</label>
                                                <input class="form-control" type="text"  value="{{old('address')}}"  name="address"
                                                       style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};"
                                                       required>
                                            </div>
                                        </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="si-password">{{\App\CPU\translate('password')}}</label>
                                            <div class="password-toggle">
                                                <input class="form-control" name="password" type="password" id="si-password"
                                                       style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};"
                                                       placeholder="{{\App\CPU\translate('minimum_8_characters_long')}}"
                                                       required>
                                                <label class="password-toggle-btn">
                                                    <input class="custom-control-input" type="checkbox"><i
                                                        class="czi-eye password-toggle-indicator"></i><span
                                                        class="sr-only">{{\App\CPU\translate('Show')}} {{\App\CPU\translate('password')}} </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="si-password">{{\App\CPU\translate('confirm_password')}}</label>
                                            <div class="password-toggle">
                                                <input class="form-control" name="con_password" type="password"
                                                       style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};"
                                                       placeholder="{{\App\CPU\translate('minimum_8_characters_long')}}"
                                                       id="si-password"
                                                       required>
                                                <label class="password-toggle-btn">
                                                    <input class="custom-control-input" type="checkbox"
                                                           style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};"><i
                                                        class="czi-eye password-toggle-indicator"></i><span
                                                        class="sr-only">{{\App\CPU\translate('Show')}} {{\App\CPU\translate('password')}} </span>
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group d-flex flex-wrap justify-content-between">

                                    <div class="form-group mb-1">
                                        <strong>
                                            <input type="checkbox" class="mr-1"
                                                   name="remember" id="inputCheckd">
                                        </strong>
                                        <label class="" for="remember">{{\App\CPU\translate('i_agree_to_Your_terms')}}<a
                                                class="font-size-sm" target="_blank" href="{{route('terms')}}">
                                                {{\App\CPU\translate('terms_and_condition')}}
                                            </a></label>
                                    </div>

                                </div>
                                <div class="flex-between row" style="direction: {{ Session::get('direction') }}">
                                    <div class="mx-1">
                                        <div class="text-right">
                                            <button class="btn btn-primary" id="sign-up" type="submit" >
                                                <i class="czi-user {{Session::get('direction') === "rtl" ? 'ml-2 mr-n1' : 'mr-2 ml-n1'}}"></i>
                                                {{\App\CPU\translate('sing_up')}}
                                            </button>
                                        </div>
                                    </div>
                                    <div class="mx-1">
                                        <a class="btn btn-outline-primary" href="{{route('login')}}">
                                            <i class="fa fa-sign-in"></i> {{\App\CPU\translate('sing_in')}}
                                        </a>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <div class="row">
                                            @foreach (\App\CPU\Helpers::get_business_settings('social_login') as $socialLoginService)
                                                @if (isset($socialLoginService) && $socialLoginService['status']==true)
                                                    <div class="col-sm-6 text-center mt-1">
                                                        <a class="btn btn-outline-primary"
                                                           href="{{route('customer.auth.service-login', $socialLoginService['login_medium'])}}"
                                                           style="width: 100%">
                                                            <i class="czi-{{ $socialLoginService['login_medium'] }} {{Session::get('direction') === "rtl" ? 'ml-2 mr-n1' : 'mr-2 ml-n1'}}"></i>
                                                            {{\App\CPU\translate('sing_up_with_'.$socialLoginService['login_medium'])}}
                                                        </a>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .row -->
        </div>
        <!-- .col-full -->
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key={{\App\CPU\Helpers::get_business_settings('map_api_key')}}&libraries=places&v=3.45.8"></script>
    <script>

        function initAutocomplete() {
            var myLatLng = { lat: {{$default_location?$default_location['lat']:'-33.8688'}}, lng: {{$default_location?$default_location['lng']:'151.2195'}} };

            const map = new google.maps.Map(document.getElementById("location_map_canvas"), {
                center: { lat: {{$default_location?$default_location['lat']:'-33.8688'}}, lng: {{$default_location?$default_location['lng']:'151.2195'}} },
                zoom: 13,
                mapTypeId: "roadmap",
            });

            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
            });

            marker.setMap( map );
            var geocoder = geocoder = new google.maps.Geocoder();
            google.maps.event.addListener(map, 'click', function (mapsMouseEvent) {
                var coordinates = JSON.stringify(mapsMouseEvent.latLng.toJSON(), null, 2);
                var coordinates = JSON.parse(coordinates);
                var latlng = new google.maps.LatLng( coordinates['lat'], coordinates['lng'] ) ;
                marker.setPosition( latlng );
                map.panTo( latlng );

                document.getElementById('latitude').value = coordinates['lat'];
                document.getElementById('longitude').value = coordinates['lng'];

                geocoder.geocode({ 'latLng': latlng }, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[1]) {
                            document.getElementById('address').value = results[1].formatted_address;
                            console.log(results[1].formatted_address);
                        }
                    }
                });
            });

            // Create the search box and link it to the UI element.
            const input = document.getElementById("pac-input");
            const searchBox = new google.maps.places.SearchBox(input);
            map.controls[google.maps.ControlPosition.TOP_CENTER].push(input);
            // Bias the SearchBox results towards current map's viewport.
            map.addListener("bounds_changed", () => {
                searchBox.setBounds(map.getBounds());
            });
            let markers = [];
            // Listen for the event fired when the user selects a prediction and retrieve
            // more details for that place.
            searchBox.addListener("places_changed", () => {
                const places = searchBox.getPlaces();

                if (places.length == 0) {
                    return;
                }
                // Clear out the old markers.
                markers.forEach((marker) => {
                    marker.setMap(null);
                });
                markers = [];
                // For each place, get the icon, name and location.
                const bounds = new google.maps.LatLngBounds();
                places.forEach((place) => {
                    if (!place.geometry || !place.geometry.location) {
                        console.log("Returned place contains no geometry");
                        return;
                    }
                    var mrkr = new google.maps.Marker({
                        map,
                        title: place.name,
                        position: place.geometry.location,
                    });

                    google.maps.event.addListener(mrkr, "click", function (event) {
                        document.getElementById('latitude').value = this.position.lat();
                        document.getElementById('longitude').value = this.position.lng();

                    });

                    markers.push(mrkr);

                    if (place.geometry.viewport) {
                        // Only geocodes have viewport.
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }
                });
                map.fitBounds(bounds);
            });
        };
        $(document).on('ready', function () {
            initAutocomplete();

        });

        $(document).on("keydown", "input", function(e) {
            if (e.which==13) e.preventDefault();
        });
    </script>

@endsection
