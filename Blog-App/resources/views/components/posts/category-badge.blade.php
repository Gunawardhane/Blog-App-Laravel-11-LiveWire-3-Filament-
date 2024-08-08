@props(['category'])
<div>
    <x-badge wire:navigate href="{{ route('posts.index', ['category' => $category->title]) }}" :textColor="$category->txt_color"
        :bgColor="$category->bg_color">
        {{ $category->title }}
    </x-badge>
</div>
