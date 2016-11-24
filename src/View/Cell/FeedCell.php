<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Feed cell
 */
class FeedCell extends Cell
{

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];



    /**
     * Default display method.
     *
     * @return void
     */
    public function display($user)
    {
      $this->loadModel('Events');
      $cityEvents = $this->Events->find('city', ['city' => $user['city']]);
      $this->set('cityEvents', $cityEvents);
    }
}
