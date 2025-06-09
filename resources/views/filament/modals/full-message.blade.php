@props(['message' => null, 'image' => null])

@if ($message)
    <div class="space-y-4">
        {!! $message !!}
    </div>
@endif

@if ($image)
    <img style="border-radius: 2rem !important" src="{{ Storage::url($image) }}" alt="">
@endif
