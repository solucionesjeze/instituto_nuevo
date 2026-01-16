@props([
    'title',
    'description',
    'buttonText',
    'route',
    'image'
])

<div class="card bg-base-100 image-full w-96 shadow-lg">
    <figure>
        <img src="{{ $image }}" alt="{{ $title }}" />
    </figure>

    <div class="card-body">
        <h2 class="card-title text-white">
            {{ $title }}
        </h2>

        <p class="text-white">
            {{ $description }}
        </p>

        <div class="card-actions justify-end">
            <a href="{{ $route }}" class="btn btn-primary">
                {{ $buttonText }}
            </a>
        </div>
    </div>
</div>