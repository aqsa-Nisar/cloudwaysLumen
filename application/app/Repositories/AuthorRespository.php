<?php

namespace App\Repositories;

use App\Interfaces\AuthorRepositoryInterface;
use App\Models\Author;

class AuthorRepository implements AuthorRepositoryInterface
{
    public function showAllAuthors()
    {
        return Author::all();
    }

    public function showOneAuthor($id)
    {
        return Author::findOrFail($id);
    }

    public function delete($authorId)
    {
        Author::destroy($authorId);
    }

    public function create(array $authorDetails)
    {
        return Author::create($authorDetails);
    }

    public function  update($authorId, array $newAuthorDetails)
    {
        return Author::whereId($authorId)->update($newAuthorDetails);
    }


}