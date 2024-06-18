@props([
    'pattern' => 'abbccd',
    'size' => 'sm'
])
@php
    $count = strlen($pattern);
    $frs = collect(range(1, $count))->reduce(fn ($carry, $i) => $carry.' 1fr ' , '');

    $cols = [];
    $index = 0;
    while ($index < strlen($pattern)) {
        $step = 1;
        $current = $pattern[$index];

        while (($next = $pattern[$index + $step]?? null) === $current) {
            $step++;
        }

        $end = $index + $step;
        $cols[] = [
            'start' => $index + 1,
            'end' => $end + 1
        ];

        $index += $step;
    }

@endphp
<div {{ $attributes->class('animate-pulse flex space-x-4')  }} >
    <div class="flex-1">
        <div class="grid gap-2" style="grid-template-columns: {{ $frs }}">
            @foreach($cols as $col)
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
        </div>
    </div>
</div>
