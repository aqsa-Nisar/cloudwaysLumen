<?php

namespace App\Interfaces;

interface AuthorRepositoryInterface 
{
    public function showAllAuthors();
    public function  showOneAuthor($id);
    public function delete($authorId);
    public function create(array $authorDetails);
    public function update($authorId, array $newAuthorDetails);
}