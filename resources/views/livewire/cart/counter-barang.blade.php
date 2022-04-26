<div class="input-group border p-2 w-50 mx-auto" style="border-radius: 10px;">
    <span class="input-group-btn">
        <div wire:click="decrement" class="btn btn-minus pb-3 px-1">
            -
        </div>
    </span>
    <input type="text" name="jumlah" class="form-control input-number text-center border-0"
        max="{{ $maxProduct->stock }}" value="{{ $count }}" />
    <span class="input-group-btn">
        <div wire:click="increment" class="btn btn-add pb-3 px-1">
            +
        </div>
    </span>
</div>
