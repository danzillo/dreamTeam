<?php

class Controller_Portfolio extends Controller
{

    function __construct()
    {
        $this->model = new Model_Portfolio();
        $this->view = new View();
    }

    function action_index()
    {
        $news = $this->model->getNews();
        $test = $this->model->getXyu();

        $data['news'] = array_reverse($news);
        $data['xyi'] = $test;
        $data['title'] = 'Портфолио';

        $this->view->generate('portfolio_view.php', 'template_view.php', $data);
    }
}
