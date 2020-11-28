<?php

// src/AppBundle/Admin/CategoryAdmin.php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class CompanyAdmin extends AbstractAdmin
{
  protected $datagridValues = [

       // display the first page (default = 1)
       '_page' => 1,

       // reverse order (default = 'ASC')
       '_sort_order' => 'DESC',

       // name of the ordered field (default = the model's id field, if any)
       '_sort_by' => 'createdAt',
   ];
    protected function configureFormFields(FormMapper $formMapper)
    {

      $company = $this->getSubject();
      $fileFieldOptions = ['disabled' => true, 'attr' => ["display" => "none"]];
      if ($company && ($webPath = $company->getCompanyLogo())) {
        $container = $this->getConfigurationPool()->getContainer();
        $fullPath = $container->get('request_stack')->getCurrentRequest()->getBasePath().'/uploads/Supplier Documents/'.$company->getName().'/'.$webPath;
        $fileFieldOptions['help'] = '<img src="'.$fullPath.'" class="admin-preview" />';
      }
      $formMapper
        ->tab('Section A: General Information')
          ->with('')
            ->add('name',null,['disabled' => false, 'label' => 'Registered Name'])
            ->add('description','textarea',['disabled' => false,'label' => 'Company Description'])
            ->add('companyType',null,['label' => 'Company Type','disabled' => true])
            ->add('tier',null,['disabled' => false])
            ->add('website',null,['disabled' => true])
            ->add('graTinNumber',null,['disabled' => true])
            ->add('natureOfBusiness',null,['disabled' => true])
            ->add('registrationNumber',null,['disabled' => true])
            ->add('natureOfBusiness',null,['disabled' => true])
            ->add('registrationNumber',null,['disabled' => true])
            ->add('isTraceCertified',null,['disabled' => false])
            ->add('learnAboutUs',null,['disabled' => true])
          ->end()
          ->with('Location');
            if($this->getSubject()->getAddresses())
            {
              $formMapper->add('addresses.buildingNumber',null,['label' => 'Building Number','disabled' => false])
              ->add('addresses.buildingName',null,['label' => 'Building Name','disabled' => false])
              ->add('addresses.street',null,['label' => 'Street','disabled' => false])
              ->add('addresses.predominantLandmark',null,['label' => 'Street Or Predominant Landmark','disabled' => false])
              ->add('addresses.town',null,['label' => 'Town','disabled' => false])
              ->add('addresses.region',null,['label' => 'Region','disabled' => false])
              ->add('addresses.country',null,['label' => 'Country','disabled' => false])
              ->add('addresses.postalAddress',null,['label' => 'Postal Address','disabled' => false])
              ->add('addresses.postalCode',null,['label' => 'Postal Code','disabled' => false])
              ;
            }
            $formMapper->add('numberOfBranches',null,['label' => '','disabled' => true])
            ->add('companyLogo',null,$fileFieldOptions)
          ->end()
          ->with('Company Contact Person(s)')
              ->add('contacts', 'sonata_type_collection', array('by_reference' => false,'disabled' => false,
                  'type_options' => array(
                      // Prevents the "Delete" option from being displayed
                      'delete' => false,
                      'btn_add' => true
                  )
              ), array(
                  'edit' => 'inline',
                  'inline' => 'table',
              ))
          ->end()
          ->with('Sectors')
            ->add('categories',null,['expanded' => true,'disabled' => false])
          ->end()
        ->end()
        ->tab('Section B: Company Structure  & Ownership Structure')
          ->with('')
            ->add('numberOfEmployees',null,['disabled' => false])
            ->add('shareOfGhanaianDirectors',null,['disabled' => true])
            ->add('shareOfGhanaianEmployees',null,['disabled' => true])
            ->add('employDisabled',null,['label' => 'Do you employ any persons with disabilities?','disabled' => true,'disabled' => true])
            ->add('disabledNo',null,['label' => 'Number of disabled employees','disabled' => true])
            ->add('localContent',null,['label' => 'Do you have a local content policy?','disabled' => true])
            ->add('directors', 'sonata_type_collection', array('by_reference' => false,'disabled' => true,
                'type_options' => array(
                    // Prevents the "Delete" option from being displayed
                    'delete' => false,
                    'btn_add' => false
                )
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
            ))
          ->end()
          ->with('Ownership Structure')
            ->add('ownershipWomen',null,['label' => 'Woman-owned business?','disabled' => true])
            ->add('womanOwnershipPercentage',null,['label' => ' Number of shares owned by a woman/women in the company','disabled' => true])
            ->add('ownershipUnder30',null,['label' => 'Are any of your ownership under 35?','disabled' => true])
          ->end()
        ->end()
        ->tab('Section C: Commercial References and Financial Information')
          ->with('Share holder details')
            ->add('shareholders', 'sonata_type_collection', array('by_reference' => false,'disabled' => true,
                'type_options' => array(
                    // Prevents the "Delete" option from being displayed
                    'delete' => false,
                    'btn_add' => false
                )
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
            ))
          ->end()
          ->with('Commercial References')
            ->add('references', 'sonata_type_collection', array('by_reference' => false,'disabled' => true,
                'type_options' => array(
                    // Prevents the "Delete" option from being displayed
                    'delete' => false,
                    'btn_add' => false
                )
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
            ))
          ->end()
          ->with('Financial Information')
            ->add('approxTurnover',null,['disabled' => true])
            ->add('creditChecks',null,['label' => 'Do you give your approval for credit checks to be run on your company?','disabled' => true])

          ->end()
        ->end()
        ->tab('Section D: Company Documentation')
          ->with('')
            ->add('documents', 'sonata_type_collection', array('by_reference' => false,'disabled' => true,
                'type_options' => array(
                    // Prevents the "Delete" option from being displayed
                    'delete' => false,
                    'btn_add' => false
                )
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
            ))
          ->end()
        ->end()
        ->tab('Section E: Declarations')
          ->with('')
            ->add('debarred',null,['label' => 'I/We declare that I/We have not been debarred from any procurement proceeding and shall not engage in any fraudulent or corrupt acts with regard to any procurement proceeding by IIA Ghana and any other public or private institutions','disabled' => true])
            ->add('criminalOffence',null,['label' => 'The Director(s) of this company have not been convicted of any criminal offense relating to professional conduct or the making of false statements or misrepresentations as to its qualifications to enter into a procurement contract within a period of three (3) years preceding the commencement of procurement proceedings. ','disabled' => true])
            ->add('conflictOfInterest',null,['label' => 'I/We state that I / We have no conflict of interest in relation to participating in a procurement proceeding. ','disabled' => true])
            ->add('conflictOfInterestIIA',null,['label' => 'Is there any person/persons in Invest In Africa-Ghana or any other public institution who has interest in this firm?','disabled' => true])
            ->add('declareTrue',null,['label' => 'By submitting this information I/We declare that all submissions and uploaded documents are a true and accurate representation of our company. I/We also give INVEST IN AFRICA the authority to have the right to check and validate any element of the submitted information for accuracy from whatever sources deemed relevant, e.g. Office of the Registrar of Companies, Bankers, etc. ','disabled' => true])
            ->add('understandRisks',null,['label' => 'I/We understand that if any submitted information is found to be untrue or is deemed to be wilfully misleading, it may result in our company\'s removal from the APP database.','disabled' => true])
          ->end()
        ->end()
        ->tab('Classification')
          ->with('')
            ->add('specialGroups',null,['label' => 'Does Supplier belong to a special group?','expanded' => true])
          ->end()
        ->end()
        ->tab('Verification')
          ->with('')
            ->add('verification', 'sonata_type_collection', array('by_reference' => false,'disabled' => false, 'label' => ' ', 'required' => false,
                'type_options' => array(
                    'delete' => false, 'btn_add' => false
                ),
                'block_name' => 'validation_block',
            ), array(
                'edit' => 'inline',
                'template' => 'AppBundle:Company:horizontal.fields.html.twig'
            ))
          ->end()
        ->end()
        ;

    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('name')
        ->add('companyType')
        ->add('registrationNumber')
        ->add('graTinNumber')
        ->add('tier')
        ->add('createdAt', 'doctrine_orm_date_range', array('label' => 'APP Registration Date',
              'field_type' => 'sonata_type_date_range_picker',
              'field_options' => array(
              'field_options_start' => array(
                  'format'=>'dd/MM/yyyy'
              ),
              'field_options_end' => array(
                  'dp_use_current' => true,
                  'dp_show_today' => true,
                  'format'=>'dd/MM/yyyy'
              )
          )
          ))
        ->add('registrationDate', 'doctrine_orm_date_range', array('label' => 'Company Registration Date',
              'field_type' => 'sonata_type_date_range_picker',
              'field_options' => array(
              'field_options_start' => array(
                  'format'=>'dd/MM/yyyy'
              ),
              'field_options_end' => array(
                  'dp_use_current' => true,
                  'dp_show_today' => true,
                  'format'=>'dd/MM/yyyy'
              )
          )
          ))
        ->add('approxTurnover','doctrine_orm_choice',[],'choice',['choices' => ['Below 500,000 GHS' => 'Below 500,000 GHS', '500,000 – 1 million GHS' => '500,000 – 1 million GHS', '1 million - 5 million GHS' => '1 million - 5 million GHS', '5 million - 25 million GHS' => '5 million - 25 million GHS', '25 million - 50 million GHS' => '25 million - 50 million GHS', '50 million - 100 million GHS' => '50 million - 100 million GHS', '100 million - 250 million GHS' => '100 million - 250 million GHS', '250 million - 500 million GHS' => '250 million - 500 million GHS', '500 million - 1 billion GHS' => '500 million - 1 billion GHS', '1 billion - 2 billion GHS' => '1 billion - 2 billion GHS', '2 billion - 5 billion GHS' => '2 billion - 5 billion GHS', 'More than 5 billion GHS' => 'More than 5 billion GHS']])
        ->add('numberOfEmployees')
        ->add('ownershipWomen',null,['label' => 'Women ownership ?'])
        ->add('ownershipUnder30',null,['label' => 'Ownership under 35?','disabled' => true])
        ->add('status','doctrine_orm_choice',['label' => 'Verification Status'],'choice',['choices' => ['New' => 'New','Awaiting Verification' => 'Awaiting Verification', 'Verification in Progress' => 'Verification in Progress', 'Verified' => 'Verified', 'Verification Deferred' => 'Verification Deferred', 'Rejected' => 'Rejected']])
        ->add('natureOfBusiness','doctrine_orm_choice',[],'choice',['choices' => ['Agriculture & Forestry/Wildlife' => 'Agriculture & Forestry/Wildlife','Business Services' => 'Business Services', 'Information & Communication' => 'Information & Communication', 'Construction/Contracting' => 'Construction/Contracting', 'Utilities' => 'Utilities', 'Manufacturing' => 'Manufacturing', 'Oil & Gas' => 'Oil & Gas', 'Education' => 'Education', 'Finance & Insurance' => 'Finance & Insurance', 'Food & Hospitality' => 'Food & Hospitality', 'Health Services' => 'Health Services', 'Natural Resources/Environmental' => 'Natural Resources/Environmental', 'Real Estate & Housing' => 'Real Estate & Housing', 'Transportation' => 'Transportation', 'Other' => 'Other']])
        ->add('description')
        ->add('categories', null, array('label' => 'Sectors'), null, array('multiple' => true))
        ->add('provinces',null,['label' => 'Areas where they can supply goods'])
        ->add('teamMembers.member',null,['label' => 'User'])
        ->add('teamMembers.member.email',null,['label' => 'User email'])
        ->add('currentSubscriptionStatus','doctrine_orm_choice',['label' => 'Subscription Status'],'choice',['choices' => ['New' => 'New','Active' => 'Active','Expired' => 'Expired']])
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
      $authorization_checker = $this->getConfigurationPool()->getContainer()->get('security.authorization_checker');
        $listMapper
          ->addIdentifier('name')
          ->add('companyType.name',null,['label' => 'Company Type'])
          ->add('registrationNumber')
          ->add('registrationDate')
          ->add('tier')
          ->add('createdAt',null,['label' => 'APP Registration Date'])
          ->add('natureOfBusiness')
          //->add('status','choice',['editable' => true, 'choices' => ['New' => 'New','Awaiting Verification' => 'Awaiting Verification', 'Verification in Progress' => 'Verification in Progress', 'Verified' => 'Verified', 'Verification Deferred' => 'Verification Deferred', 'Rejected' => 'Rejected']])
          ->add('status',null,['label' => 'Verification Status'])
          ->add('currentSubscriptionStatus',null,['label' => 'Subscription Status']);
          if($authorization_checker->isGranted('ROLE_SUPER_ADMIN'))
          {
            $listMapper
              ->add('tier.membershipCategory',null,['label' => 'Membership Category'])
              ->add('_action', null, [
                'actions' => [
                    'invoice' => [
                        'template' => 'AppBundle:Company:list__action_invoice.html.twig',
                    ],
                ],
            ]);
          }

    }

    public function getExportFields()
    {
         $exportFields = [];
         $exportFields["Name"] = 'name';
         $exportFields["Company Contacts"] = 'exportContacts';
         $exportFields["Registration Number"] = 'registrationNumber';             //if your date is an instance of DateTime, you have to format it
         $exportFields["GRA TIN Number"] = 'graTinNumber';   // in case of *-to-many relations
         $exportFields["Nature of Business"] = 'natureOfBusiness'; //for customise format implement getStatusAsString() in you entity
         $exportFields["Description"] = 'description'; //for customise format implement getStatusAsString() in you entity
         $exportFields["Website"] = 'website'; //for customise format implement getStatusAsString() in you entity
         $exportFields["Membership Category"] = 'membershipCategory'; //for customise format implement getStatusAsString() in you entity
         $exportFields["Number of Branches"] = 'numberOfBranches'; //for customise format implement getStatusAsString() in you entity
         $exportFields["Number of Employees"] = 'numberOfEmployees'; //for customise format implement getStatusAsString() in you entity
         $exportFields["Share of Ghanaian Management Employees"] = 'shareOfGhanaianManagementEmployees';
         $exportFields["Percentage of Woman Ownership"] = 'womanOwnershipPercentage';
         $exportFields["Share of Ghanaian Directors"] = 'shareOfGhanaianDirectors';
         $exportFields["Has Local Content Policy"] = 'localContent';
         $exportFields["Percentage of Ghanaian Ownership"] = 'ghanaianOwnershipPercentage';
         $exportFields["Employ Disabled?"] = 'employDisabled';
         $exportFields["Number of disabled employees"] = 'disabledNo';
         $exportFields["Approx Turnover"] = 'approxTurnover';
         $exportFields["Company Type"] = 'companyType';
         $exportFields["Sectors"] = 'exportSectors';
         $exportFields["Company Registration Date"] = 'registrationDate';
         $exportFields["APP Registration Date"] = 'createdAt';
         $exportFields["Verification Status"] = 'status';
         $exportFields["Subscription Status"] = 'subscriptionStatus';
         $exportFields["Subscription renewal"] = 'accountRenewal';
         $exportFields["Subscription Date"] = 'subscriptionDate';
         $exportFields["Completed Section 1"] = 'section1Complete';
         $exportFields["Completed Section 2"] = 'section2Complete';
         $exportFields["Completed Section 3"] = 'section3Complete';
         $exportFields["Completed Section 4"] = 'section4Complete';
         $exportFields["Completed Section 5"] = 'section5Complete';
         $exportFields["Building"] = 'addresses.buildingName';
         $exportFields["Predominant Landmark"] = 'addresses.predominantLandmark';
         $exportFields["Street"] = 'addresses.street';
         $exportFields["Town"] = 'addresses.town';
         $exportFields["Region"] = 'addresses.region.name';

         return $exportFields;
    }

    public function getDataSourceIterator()
    {
        $datagrid = $this->getDatagrid();
        $query = $datagrid->getQuery();
        $query->addOrderBy($query->getRootAlias().'.name');
        $datagrid->buildPager();
        $datasource = $this->getModelManager()->getDataSourceIterator($datagrid, $this->getExportFields());
        return $datasource;
    }
}

 ?>
