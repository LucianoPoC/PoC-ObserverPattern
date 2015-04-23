<?php
/**
 * Created by PhpStorm.
 * User: luciano
 * Date: 23/04/15
 * Time: 19:00
 */

namespace user;


use SplObserver;
use SplSubject;

class SenderMailUserLogin implements SplObserver{

    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * Receive update from subject
     * @link http://php.net/manual/en/splobserver.update.php
     * @param SplSubject $subject <p>
     * The <b>SplSubject</b> notifying the observer of an update.
     * </p>
     * @return void
     */
    public function update(SplSubject $subject)
    {
        echo 'trigged';
    }
}