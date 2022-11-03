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
                        <h3 class="">Welcome to dashboard</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection