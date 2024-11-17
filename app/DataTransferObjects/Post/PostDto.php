<?php

namespace App\DataTransferObjects\Post;

class PostDto
{
    /**
     * Create a new instance of the class
     * @param string $title
     * @param string $caption
     * @return void
     */
    public function __construct(
        public string $title,
        public string $caption,
        public string $likes,
    )
    {

    }

    /**
     * Create a new instance of the PostDto class from an array
     * @param array $data
     * @return PostDto
     */
    public static function fromArray(array $data): PostDto
    {
        return new self(
            $data['title'],
            $data['caption'],
            $data['likes'],
        );
    }

    /**
     * Convert the object to an array
     * @return array
     */
    public function toArray(): array
    {
        return [
            'title' => $this->title,
            'caption' => $this->caption,
            'likes' => $this->likes,
        ];
    }

    /**
     * Like post
     * @return PostDto
     */
    public function like(): PostDto
    {
        $this->likes++;
        return $this;
    }
}
