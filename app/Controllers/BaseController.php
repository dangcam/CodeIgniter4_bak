<?php

namespace App\Controllers;
namespace App\Libraries;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * Constructor.
     */
    private $auth;
    private $session;

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);
        $this->session = \Config\Services::session();
        date_default_timezone_set(TIME_ZONE);
        //$this->auth = $this->dc_authentication->check();
        //if($this->auth == null)	{$this->dc_utils->dc_redirect(DC_BASE_URL.'login');}
        /*if(!$this->session->userdata('site_lang')){
            $this->session->set_userdata('site_lang',DC_DEFAULT_LANGUAGE);
        }*/
        //$this->listFunctions = $this->site_model->getFuntionUser($this->session->userdata('username'));
        //$this->lang->load("dc",$this->session->userdata('site_lang'));
        //$this->m = strtolower($this->router->fetch_class());
        //$this->v = strtolower($this->router->fetch_method());
        //$this->data['m']= $this->m;
        //$this->data['v'] = $this->v;
    }


    function page_construct($page, $meta = array(), $data = array()) {
        echo view('layout/header')
            . view($page)
            . view('layout/footer');
    }

}
