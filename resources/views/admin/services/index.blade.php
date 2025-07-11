@extends('admin.master')

@section('title', __('keywords.index'))

@section('content')

    <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="page-title">{{ __('keywords.services') }}</h2>
                    <div class="page-title-right">
                        <a href="{{ route('admin.services.create') }}" class="btn btn-sm btn-primary"> {{ __('keywords.add_new') }}</a>
                    </div>

                </div>

                  <div class="card shadow">

                    <div class="card-body">
                        @session('success')
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endsession
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>{{  __('keywords.title') }}</th>
                            <th>{{  __('keywords.description') }}</th>
                            <th>{{  __('keywords.icon') }}</th>
                            <th>{{  __('keywords.actions') }}</th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($services as $service)
<tr>
                            <td>{{ $services->firstItem() + $loop->index }}</td>
                            <td>{{ $service->title  ?? 'no title'}}</td>
                            <td width="50%">{{ $service->description  ?? 'no description'}}</td>
                            <td><i class="fe {{ $service->icon  ?? ''}}"></i></td>
                            <td>
                                <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-primary btn-sm"><i class="fe fe-edit fe-2x"></i></a>
                                <a href="{{ route('admin.services.show', $service->id) }}" class="btn btn-info btn-sm"><i class="fe fe-eye fe-2x"></i></a>
                                <a href="{{ route('admin.services.destroy', $service->id) }}" class="btn btn-danger btn-sm"><i class="fe fe-trash fe-2x"></i></a>

                            </td>
                          </tr>
                            @empty

                                <tr>
                                    <td colspan="5" class="text-center">
                                        <div class="alert alert-danger">{{ __('keywords.no_services') }}</div>
                                    </td>
                                </tr>

                            @endforelse

                        </tbody>
                      </table>
                      {{ $services->links() }}
                    </div>
                  </div>

            </div>
          </div>
        </div>

@endSection
