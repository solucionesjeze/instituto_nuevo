<x-dropdown>
 <div class="btn btn-glass cursor-pointer">

    <x-slot name="trigger">
        selecciona un idioma
    </x-slot>
    </div>


<x-slot name="content">
    @foreach (config('languages') as $code => $data)
        <a href="{{route('set_lang', $code)}}">
            {{ $data['name']}}{{ $data['flag']}}
        </a>
        <br/>

    @endforeach
    </x-slot>
</x-dropdown>

