@props(['listing'])

<div class="card-2">
    <div class="card-head">
        <div class="head-2">
            <div class="color red"></div>
            <h6 class="title v4">{{ $listing['title'] }}</h6>
            <input type="hidden" value="{{ $listing['id'] }}">
        </div>
        <button class="btn-2">></button>
    </div>
    <p class="text">
        {{ $listing['description'] }}
    </p>
</div>
