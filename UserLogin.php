<?php
    namespace user;
    use SplObserver;
    use SplSubject;

    /**
 * Created by PhpStorm.
 * User: luciano
 * Date: 23/04/15
 * Time: 18:57
 */

class UserLogin implements SplSubject
{
    /**
     * observers
     *
     * @var array
     */
    protected $observers = array();

    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * Attach an SplObserver
     * @link http://php.net/manual/en/splsubject.attach.php
     * @param SplObserver $observer <p>
     * The <b>SplObserver</b> to attach.
     * </p>
     * @return void
     */
    public function attach(SplObserver $observer)
    {
        $this->observers[] = $observer;
    }

    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * Detach an observer
     * @link http://php.net/manual/en/splsubject.detach.php
     * @param SplObserver $observer <p>
     * The <b>SplObserver</b> to detach.
     * </p>
     * @return void
     */
    public function detach(SplObserver $observer)
    {
        $index = array_search($observer, $this->observers);

        if (false !== $index) unset($this->observers[$index]);
    }

    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * Notify an observer
     * @link http://php.net/manual/en/splsubject.notify.php
     * @return void
     */
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function login()
    {
        echo 'login';
        $this->notify();
    }
}