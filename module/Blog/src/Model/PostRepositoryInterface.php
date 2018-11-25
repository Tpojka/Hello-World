<?php
/**
 * Created by PhpStorm.
 * User: tpojka
 * Date: 2018-11-25
 * Time: 16:19
 */

namespace Blog\Model;

interface PostRepositoryInterface
{
    /**
     * Return a set of all blog posts that we can iterate over.
     *
     * Each entry should be a Post instance.
     *
     * @return Post[]
     */
    public function findAllPosts();

    /**
     * Return a single blog post.
     *
     * @param  int $id Identifier of the post to return.
     * @return Post
     */
    public function findPost($id);
}