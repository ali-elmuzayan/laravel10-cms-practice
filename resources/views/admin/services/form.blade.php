@extends('admin.master')

@section('title', __('keywords.create_service'))

@section('content')

    <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">{{ isset($service) ? __('keywords.edit_service') : __('keywords.create_service') }}</h2>

                  <div class="card shadow">
                    <div class="card-body">
                      <form action="{{ isset($service) ? route('admin.services.update', $service->id) : route('admin.services.store') }}" method="POST" >
                       @isset($service)
                       @method('PUT')
                       @endisset
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="title" class="form-label">{{ __('keywords.title') }}</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="{{ __('keywords.title') }}"  value="{{ isset($service) ? $service->title : old('title') }}" required>
                                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="icon" class="form-label">{{ __('keywords.icon') }}</label>
                                    <input type="text" class="form-control" id="icon" name="icon" placeholder="{{ __('keywords.icon') }}" value="{{ isset($service) ? $service->icon : old('icon') }}" required>
                                    <x-input-error :messages="$errors->get('icon')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="description" class="form-label">{{ __('keywords.description') }}</label>
                                    <textarea class="form-control" id="description" name="description" placeholder="{{ __('keywords.description') }}" cols="20">{{ isset($service) ? $service->description : old('description') }}</textarea>
                                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary px-4">{{ isset($service) ? __('keywords.update') : __('keywords.save') }}</button>
                            </div>
                        </div>
                      </form>
                    </div>
                  </div>

            </div>
          </div>
        </div>

@endSection
