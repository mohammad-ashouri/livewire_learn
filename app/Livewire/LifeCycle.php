<?php

namespace App\Livewire;

use App\DataTransferObjects\Post\PostDto;
use App\Traits\WithUserInfo;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Exceptions\Renderer\Exception;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class LifeCycle extends Component
{
    use WithUserInfo;
    /**
     * Creation Time
     * @var int
     */
    public int $creation_time;

    /**
     * Mount function execution count
     * @var int
     */
    public int $mount_calls = 0;

    /**
     * Last Boot Time
     * @var int
     */
    public int $boot_time;

    /**
     * Boot function execution count
     * @var int
     */
    public int $boot_calls = 0;

    /**
     * Route param uuid
     * @var ?string
     */
    public ?string $uuid;



    /**
     * Target Post DTO
     * @var PostDto|array $post
     */
    public $post;

    /**
     * Exception Message
     * @var string
     */
    public string $exception_message;

    /**
     * Exception View
     * @var bool
     */
    public bool $exception_view = true;

    /**
     * Exception Status
     * @bool
     */
    public bool $has_exception = false;

    /**
     * Mount the component
     * @param ?string $uuid
     * @return void
     */
    public function mount(string $uuidOrTitle = null, string $caption = null): void
    {
        //  on component creation
        //  executes only 1 time
        $this->creation_time = time();
        $this->mount_calls++;

        if (Route::is('page.exception')) {
            User::find(2343223423);
        } else if (Route::is('page.uuid')) {
            $this->uuid = $uuidOrTitle;
        } else if (Route::is('page.post')) {
            $this->post = PostDto::fromArray(
                [
                    'title' => $uuidOrTitle,
                    'caption' => $caption,
                    'likes' => 1,
                ]
            );
        }
    }

    /**
     * Boot the component
     * @return void
     */
    public function boot(): void
    {
        // executes on beginning of every request (initial, subsequent)
        $this->boot_time = time();
        $this->boot_calls++;
    }


    public function hydrate()
    {
        if (is_array($this->post)) {
            $this->post = PostDto::fromArray($this->post);
        }
    }

    /**
     * Dehydrate Data
     * @return void
     */
    public function dehydrate()
    {
        $this->post = $this->post?->toArray();
    }

    /**
     * Do some magic
     * @return void
     */
    public function magic(): void
    {

    }

    /**
     * @param Exception $e
     * @param callable $stopPropagation
     * @return void
     */
    public function exception($e, $stopPropagation): void
    {
        if ($e instanceof QueryException) {
//            $this->has_exception = true;
//            $this->exception_message =  $e->getMessage();
            $stopPropagation();
        }
    }
}
