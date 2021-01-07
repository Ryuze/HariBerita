<div class="card">
    <div class="card-body">
        <h3 class="card-title">{{ $title }}</h3>

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