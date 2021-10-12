<?php

namespace App\Mail;

use App\Models\Post;
use App\Models\Subscriber;
use App\Models\Website;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewPost extends Mailable
{
    use Queueable, SerializesModels;

    public Subscriber $subscriber;
    public Website $website;
    public Post $post;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Subscriber $subscriber, Website $website, Post $post)
    {
        $this->subscriber = $subscriber;
        $this->website = $website;
        $this->post = $post;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('new-order-mail', [
            'subscriber' => $this->subscriber,
            'website' => $this->website,
            'post' => $this->post
        ]);
    }
}
