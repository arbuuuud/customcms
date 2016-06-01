<?php 
namespace Arbud\Enquire;

use Backend;

class Plugin extends \System\Classes\PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'Enquire Plugin',
            'description' => 'Hotel Mindimedia',
            'author' => 'arbud',
            'icon' => 'icon-leaf'
        ];
    }

    public function registerPermissions()
    {
        return array(
            'arbud.enquire.access_enquire' => ['label' => 'Manage enquire', 'tab' => 'Enquire']
        );
    }
    public function registerComponents()
    {
        return [
                    '\Arbud\Enquire\Components\Enquire' => 'enquire',
        ];
    }
    public function registerSettings(){
        return [
            'location' => [
                'label'       => 'Enquire',
                'description' => 'Enquire Hotel Management',
                'category'    => 'Enquire',
                'icon'        => 'icon-globe',
                'url'         => Backend::url('acme/user/locations'),
                'order'       => 500,
                'keywords'    => 'enquire'
            ]
        ];
    }
     /**
     * Create the navigation items for this plugin
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'enquire' => [
                'label'    => 'arbud.enquire::lang.enquire.name',
                'url'      => Backend::url('arbud/enquire/enquirecontroller/halotest'),
                'icon'     => 'icon-list-alt',
                'permissions' => ['arbud.enquire.*'],
                'order'    => 500,
                'sideMenu' => [
                    'edit'    => [
                        'label' => 'arbud.enquire::lang.enquire.editenquire',
                        'icon'  => 'icon-list-alt',
                        'url'   => Backend::url('arbud/enquire/enquirecontroller/helotest'),
                        'permissions' => ['arbud.enquire.access_enquire']
                    ],
                    'reorder' => [
                        'label' => 'benfreke.menumanager::lang.menu.reordermenu',
                        'icon'  => 'icon-exchange',
                        'url'   => Backend::url('benfreke/menumanager/menus/reorder'),
                        'permissions' => ['arbud.enquire.access_enquire']
                    ]
                ]
            ]
        ];
    }
}