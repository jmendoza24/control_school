<x-app-layout>
    <div class="card">
        <div class="card-header">
            <div class="text-4xl font-normal leading-normal mt-0 flex">
                <h3 class="flex-1"> Alumnos</h3>
                @livewire('create-alumnos')
            </div>
        </div>
        <div class="card-body">
            @livewire('alumnos')
        </div>
    </div>
    
</x-app-layout>
