<?php
/**
 * Class RepositoryTest
 */

use PHPUnit\Framework\TestCase;

class RepositoryTest extends TestCase
{
    public function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
    }

    public function tearDown()
    {
        parent::tearDown(); // TODO: Change the autogenerated stub
    }


    public function testRepository_Can_Initialize(){
        $repo = new Repository();

        $this->assertNotNull($repo);
    }

}