<x-app-layout>


    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-card />
            {{-- <div class="p-6 bg-white rounded shadow">
                {!! $chart->container() !!}
            </div> --}}
            <div class="p-6 mt-10 bg-white rounded shadow">
                <h1>{{ $chart1->options['chart_title'] }}</h1>
                    {!! $chart1->renderHtml() !!}
            </div>
        </div>
    </div>


@push('scripts')
{!! $chart1->renderChartJsLibrary() !!}
{!! $chart1->renderJs() !!}
    {{-- <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script> --}}


        {{-- {{ $chart->script() }} --}}
        {{-- {{ $chart2->script() }} --}}
@endpush
</x-app-layout>
