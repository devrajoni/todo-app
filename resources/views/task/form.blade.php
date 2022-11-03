@extends('layouts.app')

@section('content')
<x-ui.top-navbar />

<x-ui.drawer />

<div class="content-page">
    <div class="container-fluid">

        <x-ui.header />
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-block card-stretch">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h3>{{ isset($task) ? __('Edit Task') : __('New Task')}}</h3>
                        </div>
                        <div>
                            <form action="{{ isset($task) ? route('tasks.update',$task->id) : route('tasks.store'); }}" method="POST">
                                @csrf
                                @isset($task) @method('PUT') @endisset
                                <div class="row">
                                    <x-ui.input 
                                        group="col-lg-12" 
                                        :label="__('Title')" 
                                        name="title" 
                                        id="title"
                                        :value="$task->title ?? null"
                                        required 
                                    />

                                    <x-ui.input 
                                        group="col-lg-12" 
                                        :label="__('Description')" 
                                        type="textarea"
                                        name="description"
                                        id="description"
                                        :value="$task->description ?? null" 
                                    />
                                    <x-ui.input 
                                        group="col-lg-12" 
                                        :label="__('Started At')" 
                                        type="date"
                                        name="started_at" 
                                        id="started_at" 
                                        :value="optional($task->started_at ?? null)->format('Y-m-d')"
                                        required 
                                    />

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="label-control">{{ __('Status') }}</label>

                                            <div>
                                                <select class="form-control" name="status" id="status">
                                                    <option value="Pending" {{isset($task) && $task->status == 'Pending' ? 'selected' : '' }}>{{ __('Pending') }}</option>
                                                    <option value="Progress" {{isset($task) && $task->status == 'Progress' ? 'selected' : '' }}>{{ __('Progress') }}</option>
                                                    <option value="Hold" {{isset($task) &&  $task->status == 'Hold' ? 'selected' : '' }}>{{ __('Hold') }}</option>
                                                    <option value="Completed" {{isset($task) && $task->status == 'Completed' ? 'selected' : '' }}>{{ __('Completed') }}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <button type="submit" class="btn btn-primary mr-2">{{ __('Submit') }}</button>
                                    <a href="{{ route('tasks.index') }}" class="btn btn-danger">{{ __('Back') }}</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script>
        $(document).ready(function(){
        $('#status').val("{{$task->status ?? 'Pending'}}");
        });
    </script>
@endsection