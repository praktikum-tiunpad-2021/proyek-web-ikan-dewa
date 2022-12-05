<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
  public function before(RequestInterface $request, $arguments = null)
  {
    if (!session()->get('isLoggedIn')) {
      session()->setFlashData('error', 'You need to login first!');
      return redirect()->to('/login');
    }
  }
  public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
  {
    // something
  }
}
