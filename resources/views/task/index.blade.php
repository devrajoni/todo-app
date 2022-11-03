@extends('layouts.app')

@section('content')

<x-ui.top-navbar />

<x-ui.drawer />

<div class="content-page">
    <div class="container-fluid note-details">

        <x-ui.header />

        <div class="row">
            <div class="col-lg-12">
                <div class="card card-block card-stretch">
                    <div class="card-body text-center">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h3>{{__('Tasks')}}</h3>
                            <div>
                                <a href="{{ route('tasks.create') }}" class="btn btn-primary">
                                    <i class="ri-add-line mr-2"></i> {{ __('New Task') }}
                                </a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table tbl-server-info">
                                <thead>
                                    <tr class="lighth bg-dark">
                                        <th class="text-left">{{__('Title')}}</th>
                                        <th class="text-center">{{__('Started At')}}</th>
                                        <th class="text-center">{{__('Status')}}</th>
                                        <th class="text-right">{{__('Action')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($tasks as $task)
                                    <tr>
                                        <td class="text-left">
                                            <div>
                                                <b>{{ $task->title }}</b>
                                            </div>
                                            <div>
                                                {{ $task->description }}
                                            </div>
                                        </td>
                                        <td class="text-center">{{ $task->started_at->format('d-m-Y') }}</td>
                                        <td class="text-center">{{ $task->status }}</td>
                                        <td class="text-right">
                                            <div class="d-flex justify-content-end">
                                                <a href="{{ route('tasks.edit', $task->id) }}"
                                                    class="btn btn-success mr-3"><i class="las la-pen mr-0"></i></a>
                                                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST"
                                                    onsubmit="return confirm('Are you sure delete this ?')">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger"><i
                                                            class="las la-trash-alt mr-0"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection