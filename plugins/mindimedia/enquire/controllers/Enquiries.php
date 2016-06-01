<?php namespace Mindimedia\Enquire\Controllers;

use Flash;
use Redirect;
use BackendMenu;
use Backend\Classes\Controller;
use ApplicationException;
use Mindimedia\Enquire\Models\Enquire;

class Enquiries extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.ImportExportController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $importExportConfig = 'config_import_export.yaml';

    public $requiredPermissions = ['mindimedia.enquire.access_other_enquiries', 'mindimedia.enquire.access_enquiries'];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Mindimedia.Enquire', 'enquire', 'enquiries');
    }

    public function index()
    {
        $this->vars['enquiriesTotal'] = Enquire::count();
        $this->vars['enquiriesPublished'] = Enquire::isPublished()->count();
        $this->vars['enquiriesDrafts'] = $this->vars['enquiriesTotal'] - $this->vars['enquiriesPublished'];

        $this->asExtension('ListController')->index();
    }

    public function create()
    {
        BackendMenu::setContextSideMenu('new_enquire');

        $this->bodyClass = 'compact-container';
        $this->addCss('/plugins/mindimedia/enquire/assets/css/mindimedia.enquire-preview.css');
        $this->addJs('/plugins/mindimedia/enquire/assets/js/enquire-form.js');

        return $this->asExtension('FormController')->create();
    }

    public function update($recordId = null)
    {
        $this->bodyClass = 'compact-container';
        $this->addCss('/plugins/mindimedia/enquire/assets/css/mindimedia.enquire-preview.css');
        $this->addJs('/plugins/mindimedia/enquire/assets/js/enquire-form.js');

        return $this->asExtension('FormController')->update($recordId);
    }

    public function listExtendQuery($query)
    {
        if (!$this->user->hasAnyAccess(['mindimedia.enquire.access_other_enquiries'])) {
            $query->where('user_id', $this->user->id);
        }
    }

    public function formExtendQuery($query)
    {
        if (!$this->user->hasAnyAccess(['mindimedia.enquire.access_other_enquiries'])) {
            $query->where('user_id', $this->user->id);
        }
    }

    public function index_onDelete()
    {
        if (($checkedIds = enquire('checked')) && is_array($checkedIds) && count($checkedIds)) {

            foreach ($checkedIds as $enquireId) {
                if ((!$enquire = Enquire::find($enquireId)) || !$enquire->canEdit($this->user))
                    continue;

                $enquire->delete();
            }

            Flash::success('Successfully deleted those enquiries.');
        }

        return $this->listRefresh();
    }

    /**
     * {@inheritDoc}
     */
    public function listInjectRowClass($record, $definition = null)
    {
        if (!$record->published)
            return 'safe disabled';
    }

    public function formBeforeCreate($model)
    {
        $model->user_id = $this->user->id;
    }

    public function onRefreshPreview()
    {
        $data = enquire('Enquire');

        $previewHtml = Enquire::formatHtml($data['content'], true);

        return [
            'preview' => $previewHtml
        ];
    }

}