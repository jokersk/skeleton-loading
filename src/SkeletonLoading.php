<?php

namespace JoeSzeto\SkeletonLoading;

use Illuminate\View\Component;

class SkeletonLoading extends Component
{
    public function __construct(
        public string $pattern,
        public string $size = 'sm',
    ) {
    }

    public function getRows()
    {
        return collect(explode('|', $this->pattern))
            ->map(function (string $pattern) {
                return $this->getCols($pattern);
            });
    }

    public function getCols($pattern)
    {
        $cols = [];
        $index = 0;
        while ($index < strlen($pattern)) {
            $step = 1;
            $current = $pattern[$index];

            while (($next = $pattern[$index + $step] ?? null) === $current) {
                $step++;
            }

            $end = $index + $step;
            $cols[] = [
                'start' => $index + 1,
                'end' => $end + 1
            ];

            $index += $step;
        }

        return $cols;
    }

    public function getFrs()
    {
        $count = strlen(collect(explode('|', $this->pattern))->first());
        return collect(range(1, $count))->reduce(fn($carry, $i) => $carry.' 1fr ', '');
    }

    public function render()
    {
        return view('skeleton-loading::components.index');
    }
}
