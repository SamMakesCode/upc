<?php

class UPCTest extends \PHPUnit\Framework\TestCase
{
    public function testCalculatesCorrectly()
    {
        $data = [
            ['check' => '7', 'string' => '03600024145'],
            ['check' => '1', 'string' => '69277198116'],
            ['check' => '5', 'string' => '72641217542'],
            ['check' => '7', 'string' => '05432122345'],
        ];

        foreach ($data as $row) {
            $this->assertEquals($row['check'], \SamLittler\UPC\UPC::calculate($row['string']));
        }
    }
}
