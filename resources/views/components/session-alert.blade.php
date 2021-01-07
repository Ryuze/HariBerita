@if ($alert = session('alert'))
    <x-alert :type="$alert['type']" :styled="true">
        {!! $alert['message'] !!}
    </x-alert>
@endif
