<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('roles')->insert([

            ['title' => 'Administrator', 'slug' => 'admin'],
            ['title' => 'Editor', 'slug' => 'editor'],
            ['title' => 'User', 'slug' => 'user']

        ]);

        DB::table('users')->insert([

            ['username' => 'GreatAdmin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'seen' => true,
            'role_id' => 1,
            'valid' => true,
            'confirmed' => true],

            ['username' => 'GreatEditor',
            'email' => 'editor@gmail.com',
            'password' => bcrypt('editor'),
            'seen' => true,
            'role_id' => 2,
            'valid' => true,
            'confirmed' => true],

            ['username' => 'Micah',
            'email' => 'micah@gmail.com',
            'password' => bcrypt('micah'),
            'seen' => false,
            'role_id' => 3,
            'valid' => false,
            'confirmed' => true],

            ['username' => 'Slacker',
            'email' => 'slacker@gmail.com',
            'password' => bcrypt('slacker'),
            'seen' => false,
            'role_id' => 3,
            'valid' => false,
            'confirmed' => true]

        ]);

        DB::table('contacts')->insert([

            ['name' => 'Dupont',
            'email' => 'dupont@gmail.com',
            'message' => Lipsum::short()->text(2),
            'seen' => false],

            ['name' => 'Durand',
            'email' => 'durand@gmail.com',
            'message' => Lipsum::short()->text(2),
            'seen' => false],

            ['name' => 'Martin',
            'email' => 'martin@gmail.com',
            'message' => Lipsum::short()->text(2),
            'seen' => true]
            
        ]);

        DB::table('tags')->insert([

            ['tag' => 'olivet'],
            ['tag' => 'riverside'],
            ['tag' => 'otcs'],
            ['tag' => 'oit']

        ]);

        DB::table('posts')->insert([

            ['title' => 'ZSDS Annual Doctoral Colloquium Kicks Off in Riverside',
            'slug' => 'ZSDS Annual Doctoral Colloquium Kicks Off in Riverside',
            'section'=>'1',
            'summary' => '<img alt="" src="http://www.olivetuniversity.edu/images_articles/files/zinzendorf/co201611.jpg" style="float:left; height:128px; width:128px" />' . Lipsum::short()->html(2),
            'content' => Lipsum::medium()->html(2) . '<pre>
<code class="language-php">protected function getUserByRecaller($recaller)
{
    if ($this-&gt;validRecaller($recaller) &amp;&amp; ! $this-&gt;tokenRetrievalAttempted)
    {
        $this-&gt;tokenRetrievalAttempted = true;

        list($id, $token) = explode("|", $recaller, 2);

        $this-&gt;viaRemember = ! is_null($user = $this-&gt;provider-&gt;retrieveByToken($id, $token));

        return $user;
    }
}</code></pre>' . Lipsum::medium()->html(2),
            'active' => true,
            'user_id' => 1],

            ['title' => 'Olivet University President Presents at ABHE Workshop',
            'slug' => 'Olivet University President Presents at ABHE Workshop',
            'section'=>'1',
            'summary' => '<img alt="" src="http://www.olivetuniversity.edu/images_articles/files/gen/ABHE_workshop111.jpg" style="float:left; height:128px; width:128px" />' . Lipsum::short()->html(2),
            'content' => Lipsum::medium()->link()->html(8),
            'active' => true,
            'user_id' => 2],

            ['title' => 'Olivet University Holds Fall Convocation Services',
            'slug' => 'Olivet University Holds Fall Convocation Services',
            'section'=>'1',
            'summary' => '<img alt="" src="http://www.olivetuniversity.edu/images_articles/files/gen/convocation2016_3.jpg" style="float:left; height:128px; width:128px" />' . Lipsum::short()->html(2),
            'content' => Lipsum::medium()->link()->html(8),
            'active' => true,
            'user_id' => 2],

            ['title' => 'Olivet University to Open Bachelor of Science Degree in Agriculture',
            'slug' => 'Olivet University to Open Bachelor of Science Degree in Agriculture',
            'section'=>'1',
            'summary' => '<img alt="" src="http://www.olivetuniversity.edu/images_articles/files/gen/Bachelor-of-Science-in-Agriculture1.jpg" style="float:left; height:128px; width:128px" />' . Lipsum::short()->html(2),
            'content' => Lipsum::medium()->link()->html(8),
            'active' => true,
            'user_id' => 2]

        ]);

        DB::table('post_tag')->insert([

            ['post_id' => 1, 'tag_id' => 1],
            ['post_id' => 1, 'tag_id' => 2],
            ['post_id' => 2, 'tag_id' => 1],
            ['post_id' => 2, 'tag_id' => 2],
            ['post_id' => 2, 'tag_id' => 3],
            ['post_id' => 3, 'tag_id' => 1],
            ['post_id' => 3, 'tag_id' => 2],
            ['post_id' => 3, 'tag_id' => 4]

        ]);

        DB::table('comments')->insert([

            ['content' => Lipsum::medium()->text(3),
            'user_id' => 2,
            'post_id' => 1],

            ['content' =>Lipsum::medium()->text(2),
            'user_id' => 2,
            'post_id' => 2],

            ['content' => Lipsum::medium()->text(3),
            'user_id' => 3,
            'post_id' => 1]

        ]);
    }
}
