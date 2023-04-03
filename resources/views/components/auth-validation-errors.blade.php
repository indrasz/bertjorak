@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <h6 class="list-disc list-inside">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </h6>
    </div>
@endif
