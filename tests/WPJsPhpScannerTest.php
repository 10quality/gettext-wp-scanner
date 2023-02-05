<?php

namespace TenQuality\Gettext\Tests;

use Gettext\Translations;
use PHPUnit\Framework\TestCase;
use TenQuality\Gettext\Scanner\WPJsScanner;

/**
 * Test case for scanner class.
 * 
 * @author 10 Quality Studio <http://www.10quality.com>
 * @package 10quality/gettext-wp-scanner
 * @license MIT
 * @version 1.0.0
 */
class WPJsPhpScannerTest extends TestCase
{
    /**
     * Test class.
     * @since 1.0.0
     * 
     * @test
     * @group scanner
     * @group js
     */
    public function testWPJsScanner()
    {
        // Prepare
        $filename = __DIR__.'/assets/jscode.js';
        $scanner = new WPJsScanner(
            Translations::create('domain1')
        );
        // Run
        $scanner->scanFile($filename);
        $translations = $scanner->getTranslations();
        // Assert
        $this->assertNotEmpty($translations);
        $this->assertCount(1, $translations);
        $this->assertNotEmpty($translations['domain1']);
        $this->assertCount(4, $translations['domain1']);
    }
}