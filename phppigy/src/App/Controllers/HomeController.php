<?php

declare(strict_types= 1);

namespace App\Controllers;

use Framework\TemplateEngine;
// use App\Config\Paths;
use App\Services\TransactionService; 

class HomeController {

  // private TemplateEngine $view;

  public function __construct(private TemplateEngine $view, private TransactionService $transactionService) 
  {
    // $this->view = new TemplateEngine(Paths::VIEW);
    
  }

  public function home() 
  {
  //   echo $this->view->render("/index.php", [
  //     'title' => 'Home page'
  //   ]);

    $page = $_GET['p'] ?? 1;
    $page = (int) $page;
    $length = 3;
    $offset = ($page-1) * $length;
    $searchTerm = $_GET['s'] ?? null;

    [$transactions, $count] = $this->transactionService->getUserTransactions(
      $length,
      $offset
    );

    $lastPage = ceil($count / $length);

    $pages = $lastPage ? range(1,$lastPage) : [];

    $pageLinks = array_map(
      fn($pageNum) => http_build_query([
        'p' => $pageNum,
        's'=> $searchTerm
      ]),$pages);

    
    echo $this->view->render("/index.php",[
      'transactions' => $transactions,
      'currentPage' => $page,
      'previousPageQuery' => http_build_query([
        'p' => $page - 1,
        's' => $searchTerm
      ]),
      'lastPage' => $lastPage,
      'nextPageQuery' => http_build_query(
        [
          'p'=> $page + 1,
          's'=> $searchTerm
        ]),
        'pageLinks' => $pageLinks,
        'searchTerm' => $searchTerm
    ]);//make title using middelware

  }

}

?>