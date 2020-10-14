<?php

use Illuminate\Database\Seeder;

class CategoriaBlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->createBlogCategoria();
    }

    public function createBlogCategoria()
    {
      DB::table('blog_categorias')->insert(array (
        0 =>
        array (
            'descricao' => 'investimento',
        ),
        1 =>
        array (
          'descricao' => 'moradia',
        )
      ));

    }
}
