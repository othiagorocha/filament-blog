<div class="p-5">
    <h1>Post Component</h1>
    <form wire:submit="create">
        {{ $this->form }}

        <button type="submit">
            Submit
        </button>
    </form>

</div>
