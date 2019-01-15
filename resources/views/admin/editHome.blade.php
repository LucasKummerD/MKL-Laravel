@extends('layouts.app')

@section('content')

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-4">
                <div class="card-header text-center" style="background-color: #3768A2; color:white">{{ __('Productos Destacados') }}</div>

                    <div class="card-body ">
                        <form method="POST" action="" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Producto 1') }}</label>
                                <div class="col-md-2">
                                    <input id="name" type="text" class="form-control" name="product1" value="">
                                    <div id="errorName"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Producto 2') }}</label>
                                <div class="col-md-2">
                                    <input id="name" type="text" class="form-control" name="product2" value="">
                                    <div id="errorName"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Producto 3') }}</label>
                                <div class="col-md-2">
                                    <input id="name" type="text" class="form-control" name="product3" value="">
                                    <div id="errorName"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Producto 4') }}</label>
                                <div class="col-md-2">
                                    <input id="name" type="text" class="form-control" name="product4" value="">
                                    <div id="errorName"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Producto 5') }}</label>
                                <div class="col-md-2">
                                    <input id="name" type="text" class="form-control" name="product5" value="">
                                    <div id="errorName"></div>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Producto 6') }}</label>
                                <div class="col-md-2">
                                    <input id="name" type="text" class="form-control" name="product6" value="">
                                    <div id="errorName"></div>
                                </div>
                            </div>     

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Producto 7') }}</label>
                                <div class="col-md-2">
                                    <input id="name" type="text" class="form-control" name="product7" value="">
                                    <div id="errorName"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Producto 8') }}</label>
                                <div class="col-md-2">
                                    <input id="name" type="text" class="form-control" name="product8">
                                    <div id="errorName"></div>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Producto 9') }}</label>
                                <div class="col-md-2">
                                    <input id="name" type="text" class="form-control" name="product9">
                                    <div id="errorName"></div>
                                </div>
                            </div>                      

                            <div class="form-group row mb-0 mt-4">
                                <div class="col-md-6 offset-md-3">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Cargar Productos') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection