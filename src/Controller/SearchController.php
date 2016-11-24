<?php

namespace App\Controller;

/**
 * Search Controller.
 *
 * @property \App\Model\Table\SearchTable $Search
 */
class SearchController extends AppController
{
    public function index()
    {
        $this->loadModel('Users');
        $query = $this->request->data['search'];
        $queryResultUsers = $this->Users->find('name', ['query' => $query]);
        $this->set('queryResultUsers', $queryResultUsers);

        $this->loadModel('Events');
        $queryResultEvents = $this->Events->find('title', ['query' => $query]);
        $this->set('queryResultEvents', $queryResultEvents);
    }
}
