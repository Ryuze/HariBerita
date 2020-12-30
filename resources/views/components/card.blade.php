<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>

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