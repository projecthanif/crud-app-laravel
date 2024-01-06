@props(['listing'])

@php
    $id = $listing['id'];
@endphp
<article class="model">
    <div class="model-title">Title</div>
    <div class="model-body">
        <p class="model-description">
            {{ $listing['id'] }}
            {{ $listing['description'] }}
        </p>
        <div class="priority-level">
            <h3 class="title fs-3">Priority:</h3>
            <div class="pill yellow">LOW</div>
            <div class="pill blue">MIDDLE</div>
            <div class="pill red">HIGH</div>
        </div>
    </div>
    <div class="model-foot">
        <div class="pill white">EDIT</div>
        <div class="pill red">DELETE</div>
        <div class="pill black r-end" id="model-close">ClOSE</div>
    </div>
</article>
