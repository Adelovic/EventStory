<?php

namespace App\Controller;

/**
 * Home Controller.
 *
 * @property \App\Model\Table\HomeTable $Home
 */
class HomeController extends AppController
{
    /**
     * Index method.
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        if ($this->Auth->user())
        {
            return $this->redirect('/Users/');
        }
        
        $carousel = ['carousel_1.jpg', 'carousel_2.jpg', 'carousel_3.jpeg'];
        $this->set('carousel', $carousel);
    }
}
