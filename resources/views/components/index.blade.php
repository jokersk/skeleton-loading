<div {{ $attributes->class('animate-pulse flex space-x-4')  }} >
    <div class="flex-1">
        <div class="grid gap-2" style="grid-template-columns: {{ $getFrs() }}">
            @foreach($getRows() as $row)
                @foreach($row as $col)
                    <div
                        class="bg-slate-200 rounded"
                        style="
                            grid-column-start: {{ $col['start'] }}; grid-column-end: {{ $col['end']  }};
                            height: {{
                                match($size) {
                                    'xs' => '1rem',
                                    'sm' => '1.5rem',
                                    'md' => '2rem',
                                    'lg' => '3rem',
                                    default => '2rem'
                                }
                            }}
                        "></div>
                @endforeach
            @endforeach
        </div>

    </div>
</div>
