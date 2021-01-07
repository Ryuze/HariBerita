<div class="alert alert-{{ $type }} {{ $styled ? 'alert-styled-left alert-arrow-left' : '' }}">
    {{-- @if ($dismissable)
        <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
    @endif --}}
    <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
    {!! $slot !!}
</div>
