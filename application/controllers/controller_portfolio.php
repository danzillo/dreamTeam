<?php

class Controller_Portfolio extends Controller
{

    function __construct()
    {
        $this->model = new Model_Portfolio();
        $this->view = new View();
    }

    function index()
    {
        $news = $this->model->getNews();

        $data['news'] = array_reverse($news);

        $this->view->generate('portfolio_view.php', 'template_view.php', $data);
    }
}
