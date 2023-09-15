<div>
    <h3>Image Sorting</h3>

    <input type="file" multiple>
    {{-- wire:model="images" --}}

    {{-- @if ($images) --}}
    <div class="flex flex-col gap-4.5" wire:sortable="updateImageOrder">

        {{-- <div class="flex flex-col gap-3" style="column-gap: 24px; display: flex; flex-direction: column">
            @foreach (range(0, 2) as $number)
                <li wire:sortable.item wire:key class="flex flex-row gap-x-3 items-center" style="row-gap: 24px;">
                    <i wire:sortable.handle class="fa-solid fa-grip text-[#CACBA]" style="color: #CACBCA"></i>
                    <div style="height: 5rem; aspect-ratio: 16/9; bacground-color: black;"
                        class="h-30 aspect-[16/9] bg-black"></div>
                </li>
            @endforeach
        </div> --}}
        {{-- <div class="flex flex-col !gap-3" style=" display: flex; flex-direction: column"> --}}
        <li wire:sortable.item wire:key class="flex flex-row gap-x-3 items-center" style="row-gap: 24px;">
            <i wire:sortable.handle class="fa-solid fa-grip text-[#CACBA]" style="color: #CACBCA"></i>
            <div style="height: 5rem; aspect-ratio: 16/9; bacground-color: black;" class="h-30 aspect-[16/9] bg-danger">
            </div>
        </li>
        <li wire:sortable.item wire:key class="flex flex-row gap-x-3 items-center" style="row-gap: 24px;">
            <i wire:sortable.handle class="fa-solid fa-grip text-[#CACBA]" style="color: #CACBCA"></i>
            <div style="height: 5rem; aspect-ratio: 16/9; bacground-color: black;" class="h-30 aspect-[16/9] bg-black">
            </div>
        </li>
        <li wire:sortable.item wire:key class="flex flex-row gap-x-3 items-center" style="row-gap: 24px;">
            <i wire:sortable.handle class="fa-solid fa-grip text-[#CACBA]" style="color: #CACBCA"></i>
            <div style="height: 5rem; aspect-ratio: 16/9; bacground-color: black;"
                class="h-30 aspect-[16/9] bg-success"></div>
        </li>
        {{-- </div> --}}
        {{-- <div wire:key="image-{{ $index }}">
                    <img src="{{ $image->temporaryUrl() }}" alt="Image Preview" style="max-width: 100px;">
                </div> --}}
    </div>


    {{-- @endif --}}
</div>
