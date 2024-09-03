<?php

namespace App\Proxy;

use App\Contracts\PodcastServiceContract;
use Illuminate\Support\Facades\Cache;

readonly class PodcastServiceProxy implements PodcastServiceContract
{
    public function __construct(private PodcastServiceContract $service)
    {
    }

    public function getPodcasts(): array
    {
        abort_if(auth()->guest(), 403);

        return Cache::remember('podcasts.list', 3600, fn () => $this->service->getPodcasts());
    }
}
