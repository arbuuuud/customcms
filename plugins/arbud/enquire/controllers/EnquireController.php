<?php namespace Arbud\Enquire\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use DateTime;

use BenFreke\MenuManager\Models\Menu;
use Illuminate\Support\Facades\Input;
use Lang;
/**
 * Enquire Controller Back-end Controller
 */
class EnquireController extends Controller
{
   public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Arbud.Enquire', 'EnquireController', 'view');
    }
    public function index(){
        BackendMenu::setContext('Arbud.Enquire', 'EnquireController', 'index');
        
    }
    public function submitenquire(){
        $input = post();
        $enquire = new \Arbud\Enquire\Models\Enquire();

        // return $input['dayin'];
        $enquire->quotation_number = uniqid();
        $enquire->full_name = isset($input["fullname"])?$input["fullname"]:"";
        $enquire->email = isset($input["email"])?$input["email"]:"";
        $enquire->phone_number = isset($input["phonenum"])?$input["phonenum"]:"";
        $enquire->mobile_number = isset($input["mobilenum"])?$input["mobilenum"]:"";
        $enquire->address = isset($input["address"])?$input["address"]:"";
        $enquire->city = isset($input["city"])?$input["city"]:"";
        $enquire->postal_code = isset($input["postcode"])?$input["postcode"]:"";
        $enquire->country = isset($input["country"])?$input["country"]:"";
        $enquire->state = isset($input["state"])?$input["state"]:"";
        $enquire->region = isset($input["region"])?$input["region"]:"";
        $enquire->enquire_type = isset($input["enquire_type"])?$input["enquire_type"]:"";
        // $format = "mm/dd/yyyy";
        $format = 'd/m/Y';
        try{
            $datein = DateTime::createFromFormat($format, $input['dayin']);
            $dateout = DateTime::createFromFormat($format, $input['dayout']);
        }catch(Exception $e){

            throw new Exception('error',44405);
        }
        $enquire->day_in = $datein->format('Y-m-d H:i:s');
        $enquire->day_out = $dateout->format('Y-m-d H:i:s');
        $enquire->room_type = isset($input["room_type"])?$input["room_type"]:"";
        $enquire->quantity = isset($input["quantity"])?$input["quantity"]:"";
        $enquire->adult = isset($input["adult"])?$input["adult"]:"";
        $enquire->children = isset($input["children"])?$input["children"]:"";
        $enquire->infant = isset($input["infant"])?$input["infant"]:"";
        // $enquire->template = isset($input["transportcheck"]):
        $enquire->airport_name = isset($input["airport_name"])?$input["airport_name"]:"";
        $enquire->airport_location = isset($input["airport_location"])?$input["airport_location"]:"";
        $enquire->flight_number = isset($input["flightnum"])?$input["flightnum"]:"";
        $enquire->arrival_time = isset($input["arrival_time"])?$input["arrival_time"]:"";
        $enquire->other_transport = isset($input["other_trasport"])?$input["other_trasport"]:"";
        $enquire->comment = isset($input["comment"])?$input["comment"]:"";
        $enquire->info_special_check = isset($input["info_special_check"])?$input["info_special_check"]:"";
        $enquire->info_special = isset($input["info_special"])?json_encode($input["info_special"]):"";
        // $enquire->template = isset($input["info_special_check"]):
        $enquire->how_did_enquire = isset($input["how_did_enquire"])?$input["how_did_enquire"]:"";
        $enquire->status ="W";

        $enquire->save();
        


        return json_encode($input);
        return 'test success'; 
    }
    public function halotest(){
        BackendMenu::setContext('Arbud.Enquire', 'EnquireController', 'halotest');
        // $this->pageTitle = Lang::get('benfreke.menumanager::lang.menu.reordermenu');

        // $toolbarConfig = $this->makeConfig();
        // $toolbarConfig->buttons = '@/plugins/benfreke/menumanager/controllers/menus/_reorder_toolbar.htm';

        // $this->vars['toolbar'] = $this->makeWidget('Backend\Widgets\Toolbar', $toolbarConfig);
        // $this->vars['records'] = Menu::make()->getEagerRoot();

        // $input = get();
        // return var_dump($input);
    }
     public static function getAfterFilters() {return [];}
    public static function getBeforeFilters() {return [];}
    public static function getMiddleware() {return [];}
    public function callAction($method, $parameters=false) {
        return call_user_func_array(array($this, $method), $parameters);
    }
}