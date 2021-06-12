<x-app-layout>


    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-card />
            <div class="p-6 bg-white rounded shadow">
                {!! $chart->container() !!}
            </div>
        </div>
    </div>


@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>


        {{ $chart->script() }}
@endpush
</x-app-layout>
