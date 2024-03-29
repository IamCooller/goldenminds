<?php

namespace App\Events;
use App\Model\News2 as News;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class PostHasViewed
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $news;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(News $news)
    {
      $this->news = $news;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
