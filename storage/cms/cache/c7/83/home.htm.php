<?php 
use RainLab\Pages\Classes\Page;
class Cms5a9cbabb35a27471656824_9e5d84fb0337bc512169db02b399fed0Class extends \Cms\Classes\LayoutCode
{
public function onStart()
{
    $page = Page::find('chairs');
    $this['chairsPages'] = $page->getChildren();
}
}
