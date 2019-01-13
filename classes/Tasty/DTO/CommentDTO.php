<?php
namespace Tasty\DTO;

class CommentDTO{
    private $username;
    private $comment;
    private $page;
    private $timestamp;

    public function __construct($username, $comment, $page, $timestamp) {
        $this->username = $username;
        $this->comment = $comment;
        $this->page = $page;
        $this->timestamp = $timestamp;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getComment()
    {
        return $this->comment;
    }

    public function getPage()
    {
        return $this->page;
    }

    public function getTime()
    {
        return $this->timestamp;
    }

}
