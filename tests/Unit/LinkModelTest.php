<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

use App\Link;
use QrCode;

class LinkModelTest extends TestCase
{
    /**
     * @test
     */
    public function check_that_it_creates_a_qrcode_and_saves_to_a_folder_and_returns_the_file_location()
    {
        $url = 'www.facebook.com';
        $link = Link::generateQrCode($url);
        $this->assertEquals(true, $link->ok);
    }
}
