<div class="flex">
    <div class="w-1/2">
        <button wire:click="$emit('codeUpdated','data')" type="button"
            class="bg-blue-600 text-gray-200 rounded px-2 py-1">Primary</Button>
        <textarea x-init="CodeMirror.fromTextArea(document.getElementById('_editor'))" id="_editor"
            class="w-full border h-screen">{!!$code!!}</textarea>
    </div>
    <div class="w-1/2">
        {!!$code!!}
    </div>
</div>

@push('scripts')
<script>
    // document.addEventListener('DOMContentLoaded', (event) => {
    //     var myCodeMirror =;
    // });
</script>
@endpush
