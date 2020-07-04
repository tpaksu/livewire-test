<div style="text-align: center">
    <h1>{{ $count }}</h1>

    @if($count % 2 === 0)
    <i
        wire:loading.class.remove="fa-chevron-up cursor-pointer text-green-600"
        wire:loading.class="cursor-wait fa-hourglass text-gray-300"
        wire:click="increment"
        class="fa fa-chevron-up text-lg font-bold text-green-600 cursor-pointer"></i>
    @else
    <i
        wire:click="decrement"
        wire:loading.class.remove="fa-chevron-down cursor-pointer text-green-600"
        wire:loading.class="cursor-wait fa-hourglass text-gray-300"
        class="fa fa-chevron-down text-lg font-bold text-green-600 cursor-pointer"></i>
    @endif

</div>
