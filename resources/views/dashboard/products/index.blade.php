@extends('dashboard.main')

@section('content')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Manage Products</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card">

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Card header -->
                    <div class="card-header border-0">
                        <div class="row justify-content-between">
                            <div class="col-4">
                                <input class="form-control form-control-sm" id="search_keywords" type="text"
                                    name="keyword" placeholder="Search for Name" value="">
                            </div>
                            <div class="d-flex col-4 d-flex justify-content-end">
                                <div>
                                    <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm"
                                        style="background-color: #465a41; color: #fff; border-color: #465a41; padding: 6px 12px; border-radius: 4px; text-decoration: none; font-weight: bold;">
                                        <i class="fas fa-plus" style="margin-right: 6px;"></i> Add Product
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive custom-scollbar">
                        <table class="table align-items-center">
                            <thead class="thead-light">
                                <tr class="">
                                    <th scope="col" class="font-weight-bolder">S.No</th>
                                    <th scope="col" class="font-weight-bolder">Name</th>
                                    <th scope="col" class="font-weight-bolder">Image</th>
                                    <th scope="col" class="font-weight-bolder">Description</th>
                                    <th scope="col" class="font-weight-bolder">Price</th>
                                    <th class="font-weight-bolder text-center" scope="col" width="30%">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="list product_card">

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>


@push('custom_script')
    <script>
        $('#search_keywords').on('input', function() {
            var keywords = $(this).val();
            filterData(keywords);
        });
        filterData();

        function setSelectedTestPlan() {
            var url = $(this).attr('page');
            $.ajax({
                url: url,
                type: 'get',
                success: function(response) {
                    if (response) {
                        $('.product_card').html(response.html);
                        $('.loader').hide();
                    } else {
                        $('#link_error_message').html(response.message);
                    }
                },
            });
        }

        function filterData(keywords) {
            $.ajax({
                url: "{{ route('product.list') }}",
                type: 'get',
                data: {
                    'keywords': keywords,
                },
                success: function(response) {
                    if (response) {
                        $('.product_card').html(response.html);
                    } else {
                        $('#link_error_message').html(response.message);
                    }
                },
            });
        }
    </script>
@endpush
