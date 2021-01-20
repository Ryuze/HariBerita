<div class="card card-outline card-{{ $outline }}">
    <div class="card-body">
        <div class="card-title">
            <h4>{{ $title }}</h4>
        </div>

        @if (isset($slot) && $slot != "")
            <p class="card-text">
                {{ $slot }}
            </p>
        @endif

        @isset ($table)
            {{ $table }}
        @endisset
    </div>
</div>