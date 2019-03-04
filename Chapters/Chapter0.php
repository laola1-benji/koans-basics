<?php
namespace PHPKoans\Chapters;

use PHPKoans\Tests\Chapter as Chapter;

/**
 * Edit the exercises below
 */
class Chapter0 extends Chapter
{
    /**
     * Exercise 0.1
     *
     * INSTRUCTIONS
     * Return true to make sure your Machine is set up correctly
     */
    public function runTest()
    {
        //return true;
        return false;
    }

    // DO NOT EDIT BELOW
    public function __construct()
    {
        $this->number = 0;
        $this->name = 'Setup';

        $this->exerciseTests = [
            'runTest' => function () {
                if ($this->runTest() !== true) {
                    throw new \Exception('$anyVariable was not properly declared.');
                }
            }
        ];
    }
}
