<?php

class PostsHelper
{
    const POST_PER_PAGE = 3;

    public function getRelatedPosts()
    {
        global $post;
        $tagIds = self::getPostsTagsIds();

        if ($tagIds) {
            return new WP_Query([
                'tag__in'          => $tagIds,
                'post__not_in'     => [$post->ID],
                'posts_per_page'   => self::POST_PER_PAGE,
                'caller_get_posts' => 1
            ]);
        }

        return false;
    }

    public function getPostsTagsIds()
    {
        global $post;

        $tags = wp_get_post_tags($post->ID);

        $ids = [];
        foreach ($tags as $key => $tag) {
            $ids[] = $tag->term_id;
        }

        return $ids;
    }
}
