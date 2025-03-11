<div>
    <h1>Counter: <span id="counter">{{ $count }}</span></h1>
    <button wire:click="increment">Increase</button>
</div>

<script>
    window.Echo.channel('playground')
        .listen('.PlaygroundEvent', (e) => {
            Livewire.emit('incrementCounter');
        });
</script>
