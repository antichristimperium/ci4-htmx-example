<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'news';
    protected $allowedFields = ['title',];

    public function getNews($title = false)
    {
        if ($title === false) {
            return $this->findAll();
        }

        return $this->where(['title' => $title])->first();
    }
}