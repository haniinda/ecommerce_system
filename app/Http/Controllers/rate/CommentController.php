<?php

namespace App\Http\Controllers\rate;

use App\Models\Comment;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Http\Controllers\Controller;


class CommentController extends Controller
{
   
    /*************************************************************************************************/

    public function index()
    {
        //
    }


    /*************************************************************************************************/

    public function create()
    {
        //
    }


    /*************************************************************************************************/

    public function store(StoreCommentRequest $request)
    {
        //
    }


    /*************************************************************************************************/

    public function show(Comment $comment)
    {
        //
    }


    /*************************************************************************************************/

    public function edit(Comment $comment)
    {
        //
    }


    /*************************************************************************************************/

    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        //
    }


    /*************************************************************************************************/

    public function destroy(Comment $comment)
    {
        //
    }
}
