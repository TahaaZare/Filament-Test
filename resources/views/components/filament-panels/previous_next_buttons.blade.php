<div class="flex justify-between">
    <button type="button" onclick="switchTab('{{ $previousTab }}')" class="px-4 py-2 bg-gray-500 text-white rounded">
        {{__('filament/common.previous')}}
    </button>
    <button type="button" onclick="switchTab('{{ $nextTab }}')" class="px-4 py-2 bg-blue-500 text-white rounded">
        {{__('filament/common.next')}}
    </button>
</div>
