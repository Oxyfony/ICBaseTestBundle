<?php
/**
 * @copyright 2012 Instaclick Inc.
 */

namespace IC\Bundle\Base\TestBundle\Test\Loader;

use Doctrine\Common\DataFixtures\Executor\ORMExecutor;

/**
 * Interface used to subscribe to pre load fixture event
 *
 * @author John Cartwright <jcartdev@gmail.com>
 */
interface PreLoadSubscriberInterface
{
    public function preLoad(ORMExecutor $executor);
}