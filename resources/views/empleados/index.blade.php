<x-app-layout>
    @livewire('create-empleados');
    @push('scripts')
        <script>
            $(document).ready(function () {
                mascaras();
                window.livewire.on('mascaras', () => {
                mascaras();
                });
            });
        </script>
    @endpush
</x-app-layout>