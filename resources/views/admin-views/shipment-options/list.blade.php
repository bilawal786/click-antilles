@extends('layouts.back-end.app')

@section('title', \App\CPU\translate('Shipment Options List'))

@push('css_or_js')

@endpush

@section('content')
    <div class="content container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-2">
            <h1 class="h3 mb-0 text-black-50">{{\App\CPU\translate('shipment_list')}} </h1>
        </div>

        <div class="row" style="margin-top: 20px">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-body" style="padding: 0">
                        <div class="table-responsive">
                            <table style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};"
                                   class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
                                <thead class="thead-light">
                                <tr>
                                    <th>Id</th>
                                    <th scope="col" style="width: 100px">
                                        {{ \App\CPU\translate('Title')}}
                                    </th>
                                    <th scope="col">{{ \App\CPU\translate('Price')}}</th>
                                    <th scope="col">{{ \App\CPU\translate('Location')}}</th>
                                    <th scope="col">{{ \App\CPU\translate('Duration')}}</th>
                                    <th scope="col" style="width: 100px" class="text-center">
                                        {{ \App\CPU\translate('Action')}}
                                    </th>
                                </tr>
                                </thead>
                                <tbody>

                                @forelse($shipments as $shipment)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$shipment->title}}</td>
                                        <td>{{$shipment->price}}</td>
                                        <td>{{$shipment->location}}</td>
                                        <td>{{$shipment->duration}}</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" title="{{ \App\CPU\translate('Edit')}}"
                                               href="{{route('admin.shippingOption.edit',[$shipment->id])}}">
                                                <i class="tio-edit"></i>
                                            </a>
                                            <a class="btn btn-danger btn-sm delete" title="{{ \App\CPU\translate('Delete')}}"
                                               id="{{$shipment->id}}">
                                                <i class="tio-add-to-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class="card-footer">
{{--                        {{$shipments->links()}}--}}
                    </div>
                    @if(count($shipments)==0)
                        <div class="text-center p-4">
                            <img class="mb-3" src="{{asset('public/assets/back-end')}}/svg/illustrations/sorry.svg" alt="Image Description" style="width: 7rem;">
                            <p class="mb-0">{{ \App\CPU\translate('No_data_to_show')}}</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(document).on('click', '.delete', function () {
            var id = $(this).attr("id");
            Swal.fire({
                title: '{{ \App\CPU\translate('Are_you_sure_delete_this_option')}}?',
                text: "{{ \App\CPU\translate('You_will_not_be_able_to_revert_this')}}!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '{{ \App\CPU\translate('Yes')}}, {{ \App\CPU\translate('delete_it')}}!',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: "{{route('admin.shippingOption.delete')}}",
                        method: 'POST',
                        data: {id: id},
                        success: function () {
                            toastr.success('{{ \App\CPU\translate('Brand_deleted_successfully')}}');
                            location.reload();
                        }
                    });
                }
            })
        });
    </script>
@endpush
