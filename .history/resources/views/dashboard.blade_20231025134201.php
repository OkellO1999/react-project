<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <strong>
                {{ __('Department:') }}
            </strong>
            <span>Production</span>
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                <div class="ml-2">
                    <input type="file" name="" id=""> br
                    <button class="btn btn-success">Upload file</button>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
