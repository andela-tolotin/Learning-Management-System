<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class VideoCategoryTest extends TestCase
{
    use DatabaseTransactions;

    public function testVideoCategoryWasVisited()
    {
        $this->visit('/dashboard/category/add')
             ->see('/dashboard/category/create');
    }

    public function testThatVideoCategoryWasAddedEalier()
    {
        $category = factory('App\Category')->create([
            'name' => 'Javascript',
            'description' => 'It is the language of the web',
            ]);

        $this->visit('/dashboard/category/add')
             ->type('Javascript', 'name')
             ->type('It is the language of the web', 'description')
             ->press('Create')
             ->see('The name has already been taken.');

    }

    public function testThatVideoCategoryWasSuccessful()
    {
        $category = factory('App\Category')->create();

        $this->visit('/dashboard/category/add')
             ->type('Python2', 'name')
             ->type('Python is a widely used high-level, general-purpose, interpreted, dynamic programming language.', 'description')
             ->press('Create')
             ->see('Sucessfully created!');

    }

    public function testThatVideoCategoryNameFieldIsMissing()
    {
        $category = factory('App\Category')->create();

        $this->visit('/dashboard/category/add')
             ->type('Python is a widely used high-level language.', 'description')
             ->press('Create')
             ->see('The name field is required.');

    }
    public function testThatVideoCategoryDescriptionFieldIsMissing()
    {
        $category = factory('App\Category')->create();

        $this->visit('/dashboard/category/add')
             ->type('Java', 'name')
             ->press('Create')
             ->see('The description field is required.');

    }

    public function testThatVideoCategoryFieldsAreMissing()
    {
        $category = factory('App\Category')->create();

        $this->visit('/dashboard/category/add')
             ->press('Create')
             ->see('The name field is required.')
             ->see('The description field is required.');

    }
}