@props(['message','type'=>'warning' ])
<div class="alert alert-{{ $type }} alert-dismissible fade @if (session('status')) show @endif p-2">
    {{ $message }}
    <button type="button" class="close text-dark" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
