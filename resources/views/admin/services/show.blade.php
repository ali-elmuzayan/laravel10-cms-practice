@extends('admin.master')

@section('title', __('keywords.show_services'))

@section('content')

    <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">{{ __('keywords.show_services') }}</h2>

                  <div class="card shadow">
                    <div class="card-body">

                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <h5>{{ __('keywords.title') }}:</h5>
                                    <p  class="mx-auto px-3">{{ $service->title }}</p>
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="row ">
                                    <h5 >{{ __('keywords.icon') }}:</h5>
                                    <p class="mx-auto px-3"><i class="fe {{ $service->icon }}"></i></p>
                                </div>
                            </div>

                            <div class="col-md-12 mt-3">
                                     <div class="row">
                                    <h5>{{ __('keywords.description') }}:</h5>
                                    <p  class="mx-auto px-3">{{ $service?->description  }}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                  </div>

            </div>
          </div>
        </div>

@endSection
