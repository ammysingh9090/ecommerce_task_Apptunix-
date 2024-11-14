@extends('dashboard.main')

@section('content')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Product details</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="col-xl-12 order-xl-1">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <div class="col-12 text-right">
                                        <a class="btn btn-primary btn-sm custom-back-btn"
                                            href="{{ route('products.index') }}">
                                            <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="col-lg-4">
                                <div class="form-group d-flex view-box">
                                    <div style="padding-left: 8px">
                                        <img src="  {{ $product->image  ?? 'N/A' }}" class="img-thumbnail" alt="...">

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group d-flex view-box">
                                    <label class="form-control-label font-weight-bolder" for="input-last-name">Name :
                                    </label>
                                    <div style="padding-left: 8px">
                                       {{ $product->name  ?? 'N/A' }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group d-flex view-box">
                                    <label class="form-control-label font-weight-bolder" for="input-last-name">description :
                                    </label>
                                    <div style="padding-left: 8px">
                                       {{ $product->description  ?? 'N/A' }}
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group d-flex view-box">
                                    <label class="form-control-label font-weight-bolder" for="input-last-name">Price :
                                    </label>
                                    <div style="padding-left: 8px">
                                       {{ $product->price ?? 'N/A' }}
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-4">
                                <div class="form-group d-flex view-box">
                                    <label class="form-control-label font-weight-bolder" for="input-last-name">Status :
                                    </label>
                                    <div style="padding-left: 8px">
                                       {{ ($product->status == 1 ) ? 'Active' : 'Inactive'}}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
