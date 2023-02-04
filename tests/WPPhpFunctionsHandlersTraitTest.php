<?php

namespace TenQuality\Gettext\Tests;

use Gettext\Translations;
use PHPUnit\Framework\TestCase;
use TenQuality\Gettext\Scanner\WPPhpScanner;

/**
 * Test case for scanner class.
 * 
 * @author 10 Quality Studio <http://www.10quality.com>
 * @package 10quality/gettext-wp-scanner
 * @license MIT
 * @version 1.0.0
 */
class WPPhpFunctionsHandlersTraitTest extends TestCase
{
    /**
     * Test class.
     * @since 1.0.0
     * 
     * @test
     * @group scanner
     */
    public function testScan()
    {
        // Prepare
        $filename = __DIR__.'/assets/code.php';
        $scanner = new WPPhpScanner(
            Translations::create('domain1')
        );
        // Run
        $scanner->scanFile($filename);
        $translations = $scanner->getTranslations()['domain1']->getTranslations();
        // Assert translation 1
        $translation = array_shift($translations);
        $this->assertEquals('H1', $translation->getOriginal());
        $this->assertNull($translation->getContext());
        $this->assertNull($translation->getPlural());
        // Assert translation 2
        $translation = array_shift($translations);
        $this->assertEquals('attribute1', $translation->getOriginal());
        $this->assertNull($translation->getContext());
        $this->assertNull($translation->getPlural());
        // Assert translation 3
        $translation = array_shift($translations);
        $this->assertEquals('Echo p', $translation->getOriginal());
        $this->assertNull($translation->getContext());
        $this->assertNull($translation->getPlural());
        // Assert translation 4
        $translation = array_shift($translations);
        $this->assertEquals('attribute2', $translation->getOriginal());
        $this->assertNull($translation->getContext());
        $this->assertNull($translation->getPlural());
        // Assert translation 5
        $translation = array_shift($translations);
        $this->assertEquals('Echo context', $translation->getOriginal());
        $this->assertEquals('Context.', $translation->getContext());
        $this->assertNull($translation->getPlural());
        // Assert translation 6
        $translation = array_shift($translations);
        $this->assertEquals('attribute3', $translation->getOriginal());
        $this->assertEquals('Attribute context.', $translation->getContext());
        $this->assertNull($translation->getPlural());
        // Assert translation 7
        $translation = array_shift($translations);
        $this->assertEquals('<span>e</span>', $translation->getOriginal());
        $this->assertNull($translation->getContext());
        $this->assertNull($translation->getPlural());
        // Assert translation 8
        $translation = array_shift($translations);
        $this->assertEquals('<span>r</span>', $translation->getOriginal());
        $this->assertNull($translation->getContext());
        $this->assertNull($translation->getPlural());
        // Assert translation 9
        $translation = array_shift($translations);
        $this->assertEquals('<span>x</span>', $translation->getOriginal());
        $this->assertEquals('HTML context.', $translation->getContext());
        $this->assertNull($translation->getPlural());
        // Assert translation 10
        $translation = array_shift($translations);
        $this->assertEquals('%s flower', $translation->getOriginal());
        $this->assertNull($translation->getContext());
        $this->assertEquals('%s flowers', $translation->getPlural());
        // Assert translation 11
        $translation = array_shift($translations);
        $this->assertEquals('%s cup', $translation->getOriginal());
        $this->assertNull($translation->getContext());
        $this->assertEquals('%s cups', $translation->getPlural());
        // Assert translation 12
        $translation = array_shift($translations);
        $this->assertEquals('%s wall', $translation->getOriginal());
        $this->assertEquals('Number of walls.', $translation->getContext());
        $this->assertEquals('%s walls', $translation->getPlural());
        // Assert translation 13
        $translation = array_shift($translations);
        $this->assertEquals('%s bean', $translation->getOriginal());
        $this->assertEquals('Number of beans.', $translation->getContext());
        $this->assertEquals('%s beans', $translation->getPlural());
        // Assert translation 14
        $translation = array_shift($translations);
        $this->assertEquals('%s flower', $translation->getOriginal());
        $this->assertEquals('Number of flowers.', $translation->getContext());
        $this->assertEquals('%s flowers', $translation->getPlural());
        // Assert translation 15
        $translation = array_shift($translations);
        $this->assertEquals('last one', $translation->getOriginal());
        $this->assertNull($translation->getContext());
        $this->assertNull($translation->getPlural());
    }
}