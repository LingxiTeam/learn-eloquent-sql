<?php

use App\Post;
use App\User;

class BasicOneTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->seed('DatabaseSeeder');
    }

    /**
     * 从 seed 数据中可以看出拥有 post 的 user 不会超过 8 个
     */
    public function test_user_with_post_count_less_8()
    {
        $this->markTestSkipped();

        /**
         * $userCount = ...;
         * https://laravel.com/docs/5.3/eloquent-relationships#querying-relationship-existence
         */
        $this->assertTrue($userCount <= 8);
    }

    /**
     * whereHas 的使用
     */
    public function test_use_where_has()
    {
        $this->markTestSkipped();

        factory(App\Comment::class, 10)->create(['user_id' => 1, 'post_id' => 2, 'comment' => '__test']);
        factory(App\Comment::class, 10)->create(['user_id' => 2, 'post_id' => 2, 'comment' => '__test']);

        /**
         * 获取有评论内容前缀为 __test 的用户数量
         *
         * $userCount = ...;
         */
        $this->assertEquals($userCount, 2);
    }

    /**
     * 你已经知道了 with 可以查询出管理的所有数据，但是你仅仅只是想获取关联数据的数量呢?
     */
    public function test_get_count_of_post_comment()
    {
        $this->markTestSkipped();

        /**
         * 如果你使用 laravel5.3, 那么原生就支持 withCount() 这个方法去获取数量
         * https://laravel.com/docs/5.3/eloquent-relationships#counting-related-models
         */

        /**
         * 参考 https://gist.github.com/RryLee/1f829c43f01c4590557dc193ff9d2ba9#file-test_get_count_of_post_comment
         * $posts = ...;
         */

        $this->assertEquals(array_keys($posts->toArray()[0]), [
            'id', 'user_id', 'title', 'body', 'created_at', 'updated_at', 'comments_count'
        ]);
        $this->assertTrue($posts->toArray()[0]['comments_count'] >= $posts->toArray()[1]['comments_count']);
    }
}
