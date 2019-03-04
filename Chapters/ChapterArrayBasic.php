<?php
namespace PHPKoans\Chapters;
use PHPKoans\Tests\Chapter as Chapter;
/**
 *
 */
class ChapterArrayBasic extends Chapter
{
    /**
     * Exercise 4.1
     *
     * Instructions
     * Declare an array.
     */
    public function declareAnArray()
    {
        // CODE HERE
        // DO NOT EDIT BELOW
        return $anArray;
    }
    /**
     * Exercise 4.2
     *
     * Instructions
     * Create an array with contents 1,2 and 3.
     */
    public function declareSpecificArray()
    {
        // CODE HERE
        // DO NOT EDIT BELOW
        return $aSpecificArray;
    }
    /**
     * Exercise 4.3
     *
     * Instructions
     * Create an array with contents:
     * index 0 is 1
     * index 1 is "apple"
     */
    public function declareIndexedArray()
    {
        // EDIT CODE BELOW
        // DO NOT EDIT BELOW
        return $anIndexedArray;
    }
    // DO NOT EDIT BELOW
    public function __construct()
    {
        $this->number = 4;
        $this->name = 'Basic Array';
        $this->exerciseTests = [
            'declareAnArray' => function () {
                $result = $this->declareAnArray();
                if (!is_array($result)) {
                    throw new \Exception('$anyArray is not an array.');
                }
            },
            'declareSpecificArray' => function () {
                $result = $this->declareSpecificArray();
                if ($result != [1,2,3]) {
                    throw new \Exception('$specificArray wrong value.');
                }
            },
            'declareIndexedArray' => function () {
                $result = $this->declareIndexedArray();
                if (!isset($result[0])) {
                    throw new \Exception('$indexedArray does not have index 0');
                }
                if ($result[0] != 1) {
                    throw new \Exception('$indexedArray[0] wrong value.');
                }
                if (!isset($result[0])) {
                    throw new \Exception('$indexedArray does not have index 1.');
                }
                if ($result[1] != "apel") {
                    throw new \Exception('$indexedArray[1] wrong value.');
                }
                if (!isset($result[0])) {
                    throw new \Exception('$indexedArray does not have index "item".');
                }
                if ($result["item"] != 3) {
                    throw new \Exception('$indexedArray["item"] wrong value.');
                }
            },
        ];
    }
}