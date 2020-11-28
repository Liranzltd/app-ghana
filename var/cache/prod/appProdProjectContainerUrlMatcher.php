<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/admin')) {
                if (0 === strpos($pathinfo, '/admin/app')) {
                    if (0 === strpos($pathinfo, '/admin/app/c')) {
                        if (0 === strpos($pathinfo, '/admin/app/company')) {
                            // admin_app_company_list
                            if ('/admin/app/company/list' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.companies',  '_sonata_name' => 'admin_app_company_list',  '_route' => 'admin_app_company_list',);
                            }

                            // admin_app_company_create
                            if ('/admin/app/company/create' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.companies',  '_sonata_name' => 'admin_app_company_create',  '_route' => 'admin_app_company_create',);
                            }

                            // admin_app_company_batch
                            if ('/admin/app/company/batch' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.companies',  '_sonata_name' => 'admin_app_company_batch',  '_route' => 'admin_app_company_batch',);
                            }

                            // admin_app_company_edit
                            if (preg_match('#^/admin/app/company/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_company_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.companies',  '_sonata_name' => 'admin_app_company_edit',));
                            }

                            // admin_app_company_delete
                            if (preg_match('#^/admin/app/company/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_company_delete']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.companies',  '_sonata_name' => 'admin_app_company_delete',));
                            }

                            // admin_app_company_show
                            if (preg_match('#^/admin/app/company/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_company_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.companies',  '_sonata_name' => 'admin_app_company_show',));
                            }

                            // admin_app_company_export
                            if ('/admin/app/company/export' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.companies',  '_sonata_name' => 'admin_app_company_export',  '_route' => 'admin_app_company_export',);
                            }

                            if (0 === strpos($pathinfo, '/admin/app/companyaddress')) {
                                // admin_app_companyaddress_list
                                if ('/admin/app/companyaddress/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.company_addresses',  '_sonata_name' => 'admin_app_companyaddress_list',  '_route' => 'admin_app_companyaddress_list',);
                                }

                                // admin_app_companyaddress_batch
                                if ('/admin/app/companyaddress/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.company_addresses',  '_sonata_name' => 'admin_app_companyaddress_batch',  '_route' => 'admin_app_companyaddress_batch',);
                                }

                                // admin_app_companyaddress_edit
                                if (preg_match('#^/admin/app/companyaddress/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_companyaddress_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.company_addresses',  '_sonata_name' => 'admin_app_companyaddress_edit',));
                                }

                                // admin_app_companyaddress_show
                                if (preg_match('#^/admin/app/companyaddress/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_companyaddress_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.company_addresses',  '_sonata_name' => 'admin_app_companyaddress_show',));
                                }

                            }

                            elseif (0 === strpos($pathinfo, '/admin/app/companycontact')) {
                                // admin_app_companycontact_list
                                if ('/admin/app/companycontact/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.company_contacts',  '_sonata_name' => 'admin_app_companycontact_list',  '_route' => 'admin_app_companycontact_list',);
                                }

                                // admin_app_companycontact_batch
                                if ('/admin/app/companycontact/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.company_contacts',  '_sonata_name' => 'admin_app_companycontact_batch',  '_route' => 'admin_app_companycontact_batch',);
                                }

                                // admin_app_companycontact_edit
                                if (preg_match('#^/admin/app/companycontact/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_companycontact_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.company_contacts',  '_sonata_name' => 'admin_app_companycontact_edit',));
                                }

                                // admin_app_companycontact_show
                                if (preg_match('#^/admin/app/companycontact/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_companycontact_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.company_contacts',  '_sonata_name' => 'admin_app_companycontact_show',));
                                }

                                // admin_app_companycontact_export
                                if ('/admin/app/companycontact/export' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.company_contacts',  '_sonata_name' => 'admin_app_companycontact_export',  '_route' => 'admin_app_companycontact_export',);
                                }

                            }

                            elseif (0 === strpos($pathinfo, '/admin/app/companydocumentation')) {
                                // admin_app_companydocumentation_list
                                if ('/admin/app/companydocumentation/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.company_documents',  '_sonata_name' => 'admin_app_companydocumentation_list',  '_route' => 'admin_app_companydocumentation_list',);
                                }

                                // admin_app_companydocumentation_batch
                                if ('/admin/app/companydocumentation/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.company_documents',  '_sonata_name' => 'admin_app_companydocumentation_batch',  '_route' => 'admin_app_companydocumentation_batch',);
                                }

                                // admin_app_companydocumentation_edit
                                if (preg_match('#^/admin/app/companydocumentation/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_companydocumentation_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.company_documents',  '_sonata_name' => 'admin_app_companydocumentation_edit',));
                                }

                                // admin_app_companydocumentation_show
                                if (preg_match('#^/admin/app/companydocumentation/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_companydocumentation_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.company_documents',  '_sonata_name' => 'admin_app_companydocumentation_show',));
                                }

                            }

                            elseif (0 === strpos($pathinfo, '/admin/app/companydirector')) {
                                // admin_app_companydirector_list
                                if ('/admin/app/companydirector/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.company_directors',  '_sonata_name' => 'admin_app_companydirector_list',  '_route' => 'admin_app_companydirector_list',);
                                }

                                // admin_app_companydirector_batch
                                if ('/admin/app/companydirector/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.company_directors',  '_sonata_name' => 'admin_app_companydirector_batch',  '_route' => 'admin_app_companydirector_batch',);
                                }

                                // admin_app_companydirector_edit
                                if (preg_match('#^/admin/app/companydirector/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_companydirector_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.company_directors',  '_sonata_name' => 'admin_app_companydirector_edit',));
                                }

                                // admin_app_companydirector_show
                                if (preg_match('#^/admin/app/companydirector/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_companydirector_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.company_directors',  '_sonata_name' => 'admin_app_companydirector_show',));
                                }

                            }

                            elseif (0 === strpos($pathinfo, '/admin/app/companyshareholding')) {
                                // admin_app_companyshareholding_list
                                if ('/admin/app/companyshareholding/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.company_shareholding',  '_sonata_name' => 'admin_app_companyshareholding_list',  '_route' => 'admin_app_companyshareholding_list',);
                                }

                                // admin_app_companyshareholding_batch
                                if ('/admin/app/companyshareholding/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.company_shareholding',  '_sonata_name' => 'admin_app_companyshareholding_batch',  '_route' => 'admin_app_companyshareholding_batch',);
                                }

                                // admin_app_companyshareholding_edit
                                if (preg_match('#^/admin/app/companyshareholding/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_companyshareholding_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.company_shareholding',  '_sonata_name' => 'admin_app_companyshareholding_edit',));
                                }

                                // admin_app_companyshareholding_show
                                if (preg_match('#^/admin/app/companyshareholding/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_companyshareholding_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.company_shareholding',  '_sonata_name' => 'admin_app_companyshareholding_show',));
                                }

                            }

                            elseif (0 === strpos($pathinfo, '/admin/app/companytype')) {
                                // admin_app_companytype_list
                                if ('/admin/app/companytype/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.company_types',  '_sonata_name' => 'admin_app_companytype_list',  '_route' => 'admin_app_companytype_list',);
                                }

                                // admin_app_companytype_create
                                if ('/admin/app/companytype/create' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.company_types',  '_sonata_name' => 'admin_app_companytype_create',  '_route' => 'admin_app_companytype_create',);
                                }

                                // admin_app_companytype_batch
                                if ('/admin/app/companytype/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.company_types',  '_sonata_name' => 'admin_app_companytype_batch',  '_route' => 'admin_app_companytype_batch',);
                                }

                                // admin_app_companytype_edit
                                if (preg_match('#^/admin/app/companytype/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_companytype_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.company_types',  '_sonata_name' => 'admin_app_companytype_edit',));
                                }

                                // admin_app_companytype_delete
                                if (preg_match('#^/admin/app/companytype/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_companytype_delete']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.company_types',  '_sonata_name' => 'admin_app_companytype_delete',));
                                }

                                // admin_app_companytype_show
                                if (preg_match('#^/admin/app/companytype/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_companytype_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.company_types',  '_sonata_name' => 'admin_app_companytype_show',));
                                }

                                // admin_app_companytype_export
                                if ('/admin/app/companytype/export' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.company_types',  '_sonata_name' => 'admin_app_companytype_export',  '_route' => 'admin_app_companytype_export',);
                                }

                                if (0 === strpos($pathinfo, '/admin/app/companytypedocumentation')) {
                                    // admin_app_companytypedocumentation_list
                                    if ('/admin/app/companytypedocumentation/list' === $pathinfo) {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.company_type_documentation',  '_sonata_name' => 'admin_app_companytypedocumentation_list',  '_route' => 'admin_app_companytypedocumentation_list',);
                                    }

                                    // admin_app_companytypedocumentation_create
                                    if ('/admin/app/companytypedocumentation/create' === $pathinfo) {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.company_type_documentation',  '_sonata_name' => 'admin_app_companytypedocumentation_create',  '_route' => 'admin_app_companytypedocumentation_create',);
                                    }

                                    // admin_app_companytypedocumentation_batch
                                    if ('/admin/app/companytypedocumentation/batch' === $pathinfo) {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.company_type_documentation',  '_sonata_name' => 'admin_app_companytypedocumentation_batch',  '_route' => 'admin_app_companytypedocumentation_batch',);
                                    }

                                    // admin_app_companytypedocumentation_edit
                                    if (preg_match('#^/admin/app/companytypedocumentation/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_companytypedocumentation_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.company_type_documentation',  '_sonata_name' => 'admin_app_companytypedocumentation_edit',));
                                    }

                                    // admin_app_companytypedocumentation_delete
                                    if (preg_match('#^/admin/app/companytypedocumentation/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_companytypedocumentation_delete']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.company_type_documentation',  '_sonata_name' => 'admin_app_companytypedocumentation_delete',));
                                    }

                                    // admin_app_companytypedocumentation_show
                                    if (preg_match('#^/admin/app/companytypedocumentation/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_companytypedocumentation_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.company_type_documentation',  '_sonata_name' => 'admin_app_companytypedocumentation_show',));
                                    }

                                    // admin_app_companytypedocumentation_export
                                    if ('/admin/app/companytypedocumentation/export' === $pathinfo) {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.company_type_documentation',  '_sonata_name' => 'admin_app_companytypedocumentation_export',  '_route' => 'admin_app_companytypedocumentation_export',);
                                    }

                                }

                            }

                            elseif (0 === strpos($pathinfo, '/admin/app/companyreference')) {
                                // admin_app_companyreference_list
                                if ('/admin/app/companyreference/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.company_references',  '_sonata_name' => 'admin_app_companyreference_list',  '_route' => 'admin_app_companyreference_list',);
                                }

                                // admin_app_companyreference_batch
                                if ('/admin/app/companyreference/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.company_references',  '_sonata_name' => 'admin_app_companyreference_batch',  '_route' => 'admin_app_companyreference_batch',);
                                }

                                // admin_app_companyreference_edit
                                if (preg_match('#^/admin/app/companyreference/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_companyreference_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.company_references',  '_sonata_name' => 'admin_app_companyreference_edit',));
                                }

                                // admin_app_companyreference_show
                                if (preg_match('#^/admin/app/companyreference/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_companyreference_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.company_references',  '_sonata_name' => 'admin_app_companyreference_show',));
                                }

                            }

                            elseif (0 === strpos($pathinfo, '/admin/app/companyrequest')) {
                                // admin_app_companyrequest_list
                                if ('/admin/app/companyrequest/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.company_requests',  '_sonata_name' => 'admin_app_companyrequest_list',  '_route' => 'admin_app_companyrequest_list',);
                                }

                                // admin_app_companyrequest_create
                                if ('/admin/app/companyrequest/create' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.company_requests',  '_sonata_name' => 'admin_app_companyrequest_create',  '_route' => 'admin_app_companyrequest_create',);
                                }

                                // admin_app_companyrequest_batch
                                if ('/admin/app/companyrequest/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.company_requests',  '_sonata_name' => 'admin_app_companyrequest_batch',  '_route' => 'admin_app_companyrequest_batch',);
                                }

                                // admin_app_companyrequest_edit
                                if (preg_match('#^/admin/app/companyrequest/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_companyrequest_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.company_requests',  '_sonata_name' => 'admin_app_companyrequest_edit',));
                                }

                                // admin_app_companyrequest_show
                                if (preg_match('#^/admin/app/companyrequest/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_companyrequest_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.company_requests',  '_sonata_name' => 'admin_app_companyrequest_show',));
                                }

                            }

                            elseif (0 === strpos($pathinfo, '/admin/app/companyverification')) {
                                // admin_app_companyverification_list
                                if ('/admin/app/companyverification/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.company_verification',  '_sonata_name' => 'admin_app_companyverification_list',  '_route' => 'admin_app_companyverification_list',);
                                }

                                // admin_app_companyverification_create
                                if ('/admin/app/companyverification/create' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.company_verification',  '_sonata_name' => 'admin_app_companyverification_create',  '_route' => 'admin_app_companyverification_create',);
                                }

                                // admin_app_companyverification_batch
                                if ('/admin/app/companyverification/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.company_verification',  '_sonata_name' => 'admin_app_companyverification_batch',  '_route' => 'admin_app_companyverification_batch',);
                                }

                                // admin_app_companyverification_edit
                                if (preg_match('#^/admin/app/companyverification/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_companyverification_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.company_verification',  '_sonata_name' => 'admin_app_companyverification_edit',));
                                }

                                // admin_app_companyverification_delete
                                if (preg_match('#^/admin/app/companyverification/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_companyverification_delete']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.company_verification',  '_sonata_name' => 'admin_app_companyverification_delete',));
                                }

                                // admin_app_companyverification_show
                                if (preg_match('#^/admin/app/companyverification/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_companyverification_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.company_verification',  '_sonata_name' => 'admin_app_companyverification_show',));
                                }

                                // admin_app_companyverification_export
                                if ('/admin/app/companyverification/export' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.company_verification',  '_sonata_name' => 'admin_app_companyverification_export',  '_route' => 'admin_app_companyverification_export',);
                                }

                            }

                        }

                        elseif (0 === strpos($pathinfo, '/admin/app/contentcategory')) {
                            // admin_app_contentcategory_list
                            if ('/admin/app/contentcategory/list' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.content_categories',  '_sonata_name' => 'admin_app_contentcategory_list',  '_route' => 'admin_app_contentcategory_list',);
                            }

                            // admin_app_contentcategory_create
                            if ('/admin/app/contentcategory/create' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.content_categories',  '_sonata_name' => 'admin_app_contentcategory_create',  '_route' => 'admin_app_contentcategory_create',);
                            }

                            // admin_app_contentcategory_batch
                            if ('/admin/app/contentcategory/batch' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.content_categories',  '_sonata_name' => 'admin_app_contentcategory_batch',  '_route' => 'admin_app_contentcategory_batch',);
                            }

                            // admin_app_contentcategory_edit
                            if (preg_match('#^/admin/app/contentcategory/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_contentcategory_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.content_categories',  '_sonata_name' => 'admin_app_contentcategory_edit',));
                            }

                            // admin_app_contentcategory_delete
                            if (preg_match('#^/admin/app/contentcategory/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_contentcategory_delete']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.content_categories',  '_sonata_name' => 'admin_app_contentcategory_delete',));
                            }

                            // admin_app_contentcategory_show
                            if (preg_match('#^/admin/app/contentcategory/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_contentcategory_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.content_categories',  '_sonata_name' => 'admin_app_contentcategory_show',));
                            }

                            // admin_app_contentcategory_export
                            if ('/admin/app/contentcategory/export' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.content_categories',  '_sonata_name' => 'admin_app_contentcategory_export',  '_route' => 'admin_app_contentcategory_export',);
                            }

                        }

                        elseif (0 === strpos($pathinfo, '/admin/app/category')) {
                            // admin_app_category_list
                            if ('/admin/app/category/list' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.categories',  '_sonata_name' => 'admin_app_category_list',  '_route' => 'admin_app_category_list',);
                            }

                            // admin_app_category_create
                            if ('/admin/app/category/create' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.categories',  '_sonata_name' => 'admin_app_category_create',  '_route' => 'admin_app_category_create',);
                            }

                            // admin_app_category_batch
                            if ('/admin/app/category/batch' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.categories',  '_sonata_name' => 'admin_app_category_batch',  '_route' => 'admin_app_category_batch',);
                            }

                            // admin_app_category_edit
                            if (preg_match('#^/admin/app/category/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_category_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.categories',  '_sonata_name' => 'admin_app_category_edit',));
                            }

                            // admin_app_category_delete
                            if (preg_match('#^/admin/app/category/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_category_delete']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.categories',  '_sonata_name' => 'admin_app_category_delete',));
                            }

                            // admin_app_category_show
                            if (preg_match('#^/admin/app/category/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_category_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.categories',  '_sonata_name' => 'admin_app_category_show',));
                            }

                            // admin_app_category_export
                            if ('/admin/app/category/export' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.categories',  '_sonata_name' => 'admin_app_category_export',  '_route' => 'admin_app_category_export',);
                            }

                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/app/documenttype')) {
                        // admin_app_documenttype_list
                        if ('/admin/app/documenttype/list' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.documents_types',  '_sonata_name' => 'admin_app_documenttype_list',  '_route' => 'admin_app_documenttype_list',);
                        }

                        // admin_app_documenttype_create
                        if ('/admin/app/documenttype/create' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.documents_types',  '_sonata_name' => 'admin_app_documenttype_create',  '_route' => 'admin_app_documenttype_create',);
                        }

                        // admin_app_documenttype_batch
                        if ('/admin/app/documenttype/batch' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.documents_types',  '_sonata_name' => 'admin_app_documenttype_batch',  '_route' => 'admin_app_documenttype_batch',);
                        }

                        // admin_app_documenttype_edit
                        if (preg_match('#^/admin/app/documenttype/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_documenttype_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.documents_types',  '_sonata_name' => 'admin_app_documenttype_edit',));
                        }

                        // admin_app_documenttype_delete
                        if (preg_match('#^/admin/app/documenttype/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_documenttype_delete']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.documents_types',  '_sonata_name' => 'admin_app_documenttype_delete',));
                        }

                        // admin_app_documenttype_show
                        if (preg_match('#^/admin/app/documenttype/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_documenttype_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.documents_types',  '_sonata_name' => 'admin_app_documenttype_show',));
                        }

                        // admin_app_documenttype_export
                        if ('/admin/app/documenttype/export' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.documents_types',  '_sonata_name' => 'admin_app_documenttype_export',  '_route' => 'admin_app_documenttype_export',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/app/buyer')) {
                        // admin_app_buyer_list
                        if ('/admin/app/buyer/list' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.buyers',  '_sonata_name' => 'admin_app_buyer_list',  '_route' => 'admin_app_buyer_list',);
                        }

                        // admin_app_buyer_create
                        if ('/admin/app/buyer/create' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.buyers',  '_sonata_name' => 'admin_app_buyer_create',  '_route' => 'admin_app_buyer_create',);
                        }

                        // admin_app_buyer_batch
                        if ('/admin/app/buyer/batch' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.buyers',  '_sonata_name' => 'admin_app_buyer_batch',  '_route' => 'admin_app_buyer_batch',);
                        }

                        // admin_app_buyer_edit
                        if (preg_match('#^/admin/app/buyer/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_buyer_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.buyers',  '_sonata_name' => 'admin_app_buyer_edit',));
                        }

                        // admin_app_buyer_delete
                        if (preg_match('#^/admin/app/buyer/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_buyer_delete']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.buyers',  '_sonata_name' => 'admin_app_buyer_delete',));
                        }

                        // admin_app_buyer_show
                        if (preg_match('#^/admin/app/buyer/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_buyer_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.buyers',  '_sonata_name' => 'admin_app_buyer_show',));
                        }

                        // admin_app_buyer_export
                        if ('/admin/app/buyer/export' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.buyers',  '_sonata_name' => 'admin_app_buyer_export',  '_route' => 'admin_app_buyer_export',);
                        }

                        if (0 === strpos($pathinfo, '/admin/app/buyermembership')) {
                            // admin_app_buyermembership_list
                            if ('/admin/app/buyermembership/list' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.buyer_membership',  '_sonata_name' => 'admin_app_buyermembership_list',  '_route' => 'admin_app_buyermembership_list',);
                            }

                            // admin_app_buyermembership_create
                            if ('/admin/app/buyermembership/create' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.buyer_membership',  '_sonata_name' => 'admin_app_buyermembership_create',  '_route' => 'admin_app_buyermembership_create',);
                            }

                            // admin_app_buyermembership_batch
                            if ('/admin/app/buyermembership/batch' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.buyer_membership',  '_sonata_name' => 'admin_app_buyermembership_batch',  '_route' => 'admin_app_buyermembership_batch',);
                            }

                            // admin_app_buyermembership_edit
                            if (preg_match('#^/admin/app/buyermembership/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_buyermembership_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.buyer_membership',  '_sonata_name' => 'admin_app_buyermembership_edit',));
                            }

                            // admin_app_buyermembership_show
                            if (preg_match('#^/admin/app/buyermembership/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_buyermembership_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.buyer_membership',  '_sonata_name' => 'admin_app_buyermembership_show',));
                            }

                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/app/businessgrowthhub')) {
                        // admin_app_businessgrowthhub_list
                        if ('/admin/app/businessgrowthhub/list' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.ujuzi_hub',  '_sonata_name' => 'admin_app_businessgrowthhub_list',  '_route' => 'admin_app_businessgrowthhub_list',);
                        }

                        // admin_app_businessgrowthhub_create
                        if ('/admin/app/businessgrowthhub/create' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.ujuzi_hub',  '_sonata_name' => 'admin_app_businessgrowthhub_create',  '_route' => 'admin_app_businessgrowthhub_create',);
                        }

                        // admin_app_businessgrowthhub_batch
                        if ('/admin/app/businessgrowthhub/batch' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.ujuzi_hub',  '_sonata_name' => 'admin_app_businessgrowthhub_batch',  '_route' => 'admin_app_businessgrowthhub_batch',);
                        }

                        // admin_app_businessgrowthhub_edit
                        if (preg_match('#^/admin/app/businessgrowthhub/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_businessgrowthhub_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.ujuzi_hub',  '_sonata_name' => 'admin_app_businessgrowthhub_edit',));
                        }

                        // admin_app_businessgrowthhub_delete
                        if (preg_match('#^/admin/app/businessgrowthhub/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_businessgrowthhub_delete']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.ujuzi_hub',  '_sonata_name' => 'admin_app_businessgrowthhub_delete',));
                        }

                        // admin_app_businessgrowthhub_show
                        if (preg_match('#^/admin/app/businessgrowthhub/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_businessgrowthhub_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.ujuzi_hub',  '_sonata_name' => 'admin_app_businessgrowthhub_show',));
                        }

                        // admin_app_businessgrowthhub_export
                        if ('/admin/app/businessgrowthhub/export' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.ujuzi_hub',  '_sonata_name' => 'admin_app_businessgrowthhub_export',  '_route' => 'admin_app_businessgrowthhub_export',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/app/member')) {
                        // admin_app_member_list
                        if ('/admin/app/member/list' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.members',  '_sonata_name' => 'admin_app_member_list',  '_route' => 'admin_app_member_list',);
                        }

                        // admin_app_member_batch
                        if ('/admin/app/member/batch' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.members',  '_sonata_name' => 'admin_app_member_batch',  '_route' => 'admin_app_member_batch',);
                        }

                        // admin_app_member_edit
                        if (preg_match('#^/admin/app/member/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_member_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.members',  '_sonata_name' => 'admin_app_member_edit',));
                        }

                        // admin_app_member_delete
                        if (preg_match('#^/admin/app/member/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_member_delete']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.members',  '_sonata_name' => 'admin_app_member_delete',));
                        }

                        // admin_app_member_show
                        if (preg_match('#^/admin/app/member/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_member_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.members',  '_sonata_name' => 'admin_app_member_show',));
                        }

                        // admin_app_member_export
                        if ('/admin/app/member/export' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.members',  '_sonata_name' => 'admin_app_member_export',  '_route' => 'admin_app_member_export',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/app/payment')) {
                        // admin_app_payment_list
                        if ('/admin/app/payment/list' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.payments',  '_sonata_name' => 'admin_app_payment_list',  '_route' => 'admin_app_payment_list',);
                        }

                        // admin_app_payment_create
                        if ('/admin/app/payment/create' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.payments',  '_sonata_name' => 'admin_app_payment_create',  '_route' => 'admin_app_payment_create',);
                        }

                        // admin_app_payment_batch
                        if ('/admin/app/payment/batch' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.payments',  '_sonata_name' => 'admin_app_payment_batch',  '_route' => 'admin_app_payment_batch',);
                        }

                        // admin_app_payment_delete
                        if (preg_match('#^/admin/app/payment/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_payment_delete']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.payments',  '_sonata_name' => 'admin_app_payment_delete',));
                        }

                        // admin_app_payment_show
                        if (preg_match('#^/admin/app/payment/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_payment_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.payments',  '_sonata_name' => 'admin_app_payment_show',));
                        }

                        // admin_app_payment_export
                        if ('/admin/app/payment/export' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.payments',  '_sonata_name' => 'admin_app_payment_export',  '_route' => 'admin_app_payment_export',);
                        }

                        if (0 === strpos($pathinfo, '/admin/app/paymentmode')) {
                            // admin_app_paymentmode_list
                            if ('/admin/app/paymentmode/list' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.payment_modes',  '_sonata_name' => 'admin_app_paymentmode_list',  '_route' => 'admin_app_paymentmode_list',);
                            }

                            // admin_app_paymentmode_create
                            if ('/admin/app/paymentmode/create' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.payment_modes',  '_sonata_name' => 'admin_app_paymentmode_create',  '_route' => 'admin_app_paymentmode_create',);
                            }

                            // admin_app_paymentmode_batch
                            if ('/admin/app/paymentmode/batch' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.payment_modes',  '_sonata_name' => 'admin_app_paymentmode_batch',  '_route' => 'admin_app_paymentmode_batch',);
                            }

                            // admin_app_paymentmode_edit
                            if (preg_match('#^/admin/app/paymentmode/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_paymentmode_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.payment_modes',  '_sonata_name' => 'admin_app_paymentmode_edit',));
                            }

                            // admin_app_paymentmode_delete
                            if (preg_match('#^/admin/app/paymentmode/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_paymentmode_delete']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.payment_modes',  '_sonata_name' => 'admin_app_paymentmode_delete',));
                            }

                            // admin_app_paymentmode_show
                            if (preg_match('#^/admin/app/paymentmode/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_paymentmode_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.payment_modes',  '_sonata_name' => 'admin_app_paymentmode_show',));
                            }

                            // admin_app_paymentmode_export
                            if ('/admin/app/paymentmode/export' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.payment_modes',  '_sonata_name' => 'admin_app_paymentmode_export',  '_route' => 'admin_app_paymentmode_export',);
                            }

                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/app/promocode')) {
                        // admin_app_promocode_list
                        if ('/admin/app/promocode/list' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.promo_codes',  '_sonata_name' => 'admin_app_promocode_list',  '_route' => 'admin_app_promocode_list',);
                        }

                        // admin_app_promocode_create
                        if ('/admin/app/promocode/create' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.promo_codes',  '_sonata_name' => 'admin_app_promocode_create',  '_route' => 'admin_app_promocode_create',);
                        }

                        // admin_app_promocode_batch
                        if ('/admin/app/promocode/batch' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.promo_codes',  '_sonata_name' => 'admin_app_promocode_batch',  '_route' => 'admin_app_promocode_batch',);
                        }

                        // admin_app_promocode_edit
                        if (preg_match('#^/admin/app/promocode/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_promocode_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.promo_codes',  '_sonata_name' => 'admin_app_promocode_edit',));
                        }

                        // admin_app_promocode_delete
                        if (preg_match('#^/admin/app/promocode/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_promocode_delete']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.promo_codes',  '_sonata_name' => 'admin_app_promocode_delete',));
                        }

                        // admin_app_promocode_show
                        if (preg_match('#^/admin/app/promocode/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_promocode_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.promo_codes',  '_sonata_name' => 'admin_app_promocode_show',));
                        }

                        // admin_app_promocode_export
                        if ('/admin/app/promocode/export' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.promo_codes',  '_sonata_name' => 'admin_app_promocode_export',  '_route' => 'admin_app_promocode_export',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/app/request')) {
                        // admin_app_request_list
                        if ('/admin/app/request/list' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.requests',  '_sonata_name' => 'admin_app_request_list',  '_route' => 'admin_app_request_list',);
                        }

                        // admin_app_request_create
                        if ('/admin/app/request/create' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.requests',  '_sonata_name' => 'admin_app_request_create',  '_route' => 'admin_app_request_create',);
                        }

                        // admin_app_request_batch
                        if ('/admin/app/request/batch' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.requests',  '_sonata_name' => 'admin_app_request_batch',  '_route' => 'admin_app_request_batch',);
                        }

                        // admin_app_request_edit
                        if (preg_match('#^/admin/app/request/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_request_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.requests',  '_sonata_name' => 'admin_app_request_edit',));
                        }

                        // admin_app_request_show
                        if (preg_match('#^/admin/app/request/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_request_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.requests',  '_sonata_name' => 'admin_app_request_show',));
                        }

                        if (0 === strpos($pathinfo, '/admin/app/requesttype')) {
                            // admin_app_requesttype_list
                            if ('/admin/app/requesttype/list' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.requests_type',  '_sonata_name' => 'admin_app_requesttype_list',  '_route' => 'admin_app_requesttype_list',);
                            }

                            // admin_app_requesttype_create
                            if ('/admin/app/requesttype/create' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.requests_type',  '_sonata_name' => 'admin_app_requesttype_create',  '_route' => 'admin_app_requesttype_create',);
                            }

                            // admin_app_requesttype_batch
                            if ('/admin/app/requesttype/batch' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.requests_type',  '_sonata_name' => 'admin_app_requesttype_batch',  '_route' => 'admin_app_requesttype_batch',);
                            }

                            // admin_app_requesttype_edit
                            if (preg_match('#^/admin/app/requesttype/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_requesttype_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.requests_type',  '_sonata_name' => 'admin_app_requesttype_edit',));
                            }

                            // admin_app_requesttype_delete
                            if (preg_match('#^/admin/app/requesttype/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_requesttype_delete']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.requests_type',  '_sonata_name' => 'admin_app_requesttype_delete',));
                            }

                            // admin_app_requesttype_show
                            if (preg_match('#^/admin/app/requesttype/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_requesttype_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.requests_type',  '_sonata_name' => 'admin_app_requesttype_show',));
                            }

                            // admin_app_requesttype_export
                            if ('/admin/app/requesttype/export' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.requests_type',  '_sonata_name' => 'admin_app_requesttype_export',  '_route' => 'admin_app_requesttype_export',);
                            }

                        }

                        elseif (0 === strpos($pathinfo, '/admin/app/requestdocument')) {
                            // admin_app_requestdocument_list
                            if ('/admin/app/requestdocument/list' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.requests_documents',  '_sonata_name' => 'admin_app_requestdocument_list',  '_route' => 'admin_app_requestdocument_list',);
                            }

                            // admin_app_requestdocument_create
                            if ('/admin/app/requestdocument/create' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.requests_documents',  '_sonata_name' => 'admin_app_requestdocument_create',  '_route' => 'admin_app_requestdocument_create',);
                            }

                            // admin_app_requestdocument_batch
                            if ('/admin/app/requestdocument/batch' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.requests_documents',  '_sonata_name' => 'admin_app_requestdocument_batch',  '_route' => 'admin_app_requestdocument_batch',);
                            }

                            // admin_app_requestdocument_edit
                            if (preg_match('#^/admin/app/requestdocument/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_requestdocument_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.requests_documents',  '_sonata_name' => 'admin_app_requestdocument_edit',));
                            }

                            // admin_app_requestdocument_delete
                            if (preg_match('#^/admin/app/requestdocument/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_requestdocument_delete']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.requests_documents',  '_sonata_name' => 'admin_app_requestdocument_delete',));
                            }

                            // admin_app_requestdocument_show
                            if (preg_match('#^/admin/app/requestdocument/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_requestdocument_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.requests_documents',  '_sonata_name' => 'admin_app_requestdocument_show',));
                            }

                            // admin_app_requestdocument_export
                            if ('/admin/app/requestdocument/export' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.requests_documents',  '_sonata_name' => 'admin_app_requestdocument_export',  '_route' => 'admin_app_requestdocument_export',);
                            }

                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/app/article')) {
                        // admin_app_article_list
                        if ('/admin/app/article/list' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.news',  '_sonata_name' => 'admin_app_article_list',  '_route' => 'admin_app_article_list',);
                        }

                        // admin_app_article_create
                        if ('/admin/app/article/create' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.news',  '_sonata_name' => 'admin_app_article_create',  '_route' => 'admin_app_article_create',);
                        }

                        // admin_app_article_batch
                        if ('/admin/app/article/batch' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.news',  '_sonata_name' => 'admin_app_article_batch',  '_route' => 'admin_app_article_batch',);
                        }

                        // admin_app_article_edit
                        if (preg_match('#^/admin/app/article/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_article_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.news',  '_sonata_name' => 'admin_app_article_edit',));
                        }

                        // admin_app_article_delete
                        if (preg_match('#^/admin/app/article/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_article_delete']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.news',  '_sonata_name' => 'admin_app_article_delete',));
                        }

                        // admin_app_article_show
                        if (preg_match('#^/admin/app/article/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_article_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.news',  '_sonata_name' => 'admin_app_article_show',));
                        }

                        // admin_app_article_export
                        if ('/admin/app/article/export' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.news',  '_sonata_name' => 'admin_app_article_export',  '_route' => 'admin_app_article_export',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/app/testimonial')) {
                        // admin_app_testimonial_list
                        if ('/admin/app/testimonial/list' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.testimonials',  '_sonata_name' => 'admin_app_testimonial_list',  '_route' => 'admin_app_testimonial_list',);
                        }

                        // admin_app_testimonial_create
                        if ('/admin/app/testimonial/create' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.testimonials',  '_sonata_name' => 'admin_app_testimonial_create',  '_route' => 'admin_app_testimonial_create',);
                        }

                        // admin_app_testimonial_batch
                        if ('/admin/app/testimonial/batch' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.testimonials',  '_sonata_name' => 'admin_app_testimonial_batch',  '_route' => 'admin_app_testimonial_batch',);
                        }

                        // admin_app_testimonial_edit
                        if (preg_match('#^/admin/app/testimonial/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_testimonial_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.testimonials',  '_sonata_name' => 'admin_app_testimonial_edit',));
                        }

                        // admin_app_testimonial_delete
                        if (preg_match('#^/admin/app/testimonial/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_testimonial_delete']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.testimonials',  '_sonata_name' => 'admin_app_testimonial_delete',));
                        }

                        // admin_app_testimonial_show
                        if (preg_match('#^/admin/app/testimonial/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_testimonial_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.testimonials',  '_sonata_name' => 'admin_app_testimonial_show',));
                        }

                        // admin_app_testimonial_export
                        if ('/admin/app/testimonial/export' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.testimonials',  '_sonata_name' => 'admin_app_testimonial_export',  '_route' => 'admin_app_testimonial_export',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/app/tier')) {
                        // admin_app_tier_list
                        if ('/admin/app/tier/list' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.tiers',  '_sonata_name' => 'admin_app_tier_list',  '_route' => 'admin_app_tier_list',);
                        }

                        // admin_app_tier_create
                        if ('/admin/app/tier/create' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.tiers',  '_sonata_name' => 'admin_app_tier_create',  '_route' => 'admin_app_tier_create',);
                        }

                        // admin_app_tier_batch
                        if ('/admin/app/tier/batch' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.tiers',  '_sonata_name' => 'admin_app_tier_batch',  '_route' => 'admin_app_tier_batch',);
                        }

                        // admin_app_tier_edit
                        if (preg_match('#^/admin/app/tier/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_tier_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.tiers',  '_sonata_name' => 'admin_app_tier_edit',));
                        }

                        // admin_app_tier_delete
                        if (preg_match('#^/admin/app/tier/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_tier_delete']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.tiers',  '_sonata_name' => 'admin_app_tier_delete',));
                        }

                        // admin_app_tier_show
                        if (preg_match('#^/admin/app/tier/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_tier_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.tiers',  '_sonata_name' => 'admin_app_tier_show',));
                        }

                        // admin_app_tier_export
                        if ('/admin/app/tier/export' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.tiers',  '_sonata_name' => 'admin_app_tier_export',  '_route' => 'admin_app_tier_export',);
                        }

                        if (0 === strpos($pathinfo, '/admin/app/tierbenefit')) {
                            // admin_app_tierbenefit_list
                            if ('/admin/app/tierbenefit/list' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.tierBenefits',  '_sonata_name' => 'admin_app_tierbenefit_list',  '_route' => 'admin_app_tierbenefit_list',);
                            }

                            // admin_app_tierbenefit_create
                            if ('/admin/app/tierbenefit/create' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.tierBenefits',  '_sonata_name' => 'admin_app_tierbenefit_create',  '_route' => 'admin_app_tierbenefit_create',);
                            }

                            // admin_app_tierbenefit_batch
                            if ('/admin/app/tierbenefit/batch' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.tierBenefits',  '_sonata_name' => 'admin_app_tierbenefit_batch',  '_route' => 'admin_app_tierbenefit_batch',);
                            }

                            // admin_app_tierbenefit_edit
                            if (preg_match('#^/admin/app/tierbenefit/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_tierbenefit_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.tierBenefits',  '_sonata_name' => 'admin_app_tierbenefit_edit',));
                            }

                            // admin_app_tierbenefit_delete
                            if (preg_match('#^/admin/app/tierbenefit/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_tierbenefit_delete']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.tierBenefits',  '_sonata_name' => 'admin_app_tierbenefit_delete',));
                            }

                            // admin_app_tierbenefit_show
                            if (preg_match('#^/admin/app/tierbenefit/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_tierbenefit_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.tierBenefits',  '_sonata_name' => 'admin_app_tierbenefit_show',));
                            }

                            // admin_app_tierbenefit_export
                            if ('/admin/app/tierbenefit/export' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.tierBenefits',  '_sonata_name' => 'admin_app_tierbenefit_export',  '_route' => 'admin_app_tierbenefit_export',);
                            }

                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/app/verificationstage')) {
                        // admin_app_verificationstage_list
                        if ('/admin/app/verificationstage/list' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.verification_stages',  '_sonata_name' => 'admin_app_verificationstage_list',  '_route' => 'admin_app_verificationstage_list',);
                        }

                        // admin_app_verificationstage_create
                        if ('/admin/app/verificationstage/create' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.verification_stages',  '_sonata_name' => 'admin_app_verificationstage_create',  '_route' => 'admin_app_verificationstage_create',);
                        }

                        // admin_app_verificationstage_batch
                        if ('/admin/app/verificationstage/batch' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.verification_stages',  '_sonata_name' => 'admin_app_verificationstage_batch',  '_route' => 'admin_app_verificationstage_batch',);
                        }

                        // admin_app_verificationstage_edit
                        if (preg_match('#^/admin/app/verificationstage/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_verificationstage_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.verification_stages',  '_sonata_name' => 'admin_app_verificationstage_edit',));
                        }

                        // admin_app_verificationstage_delete
                        if (preg_match('#^/admin/app/verificationstage/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_verificationstage_delete']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.verification_stages',  '_sonata_name' => 'admin_app_verificationstage_delete',));
                        }

                        // admin_app_verificationstage_show
                        if (preg_match('#^/admin/app/verificationstage/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_verificationstage_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.verification_stages',  '_sonata_name' => 'admin_app_verificationstage_show',));
                        }

                        // admin_app_verificationstage_export
                        if ('/admin/app/verificationstage/export' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.verification_stages',  '_sonata_name' => 'admin_app_verificationstage_export',  '_route' => 'admin_app_verificationstage_export',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/app/verificationstep')) {
                        // admin_app_verificationstep_list
                        if ('/admin/app/verificationstep/list' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.verification_step',  '_sonata_name' => 'admin_app_verificationstep_list',  '_route' => 'admin_app_verificationstep_list',);
                        }

                        // admin_app_verificationstep_create
                        if ('/admin/app/verificationstep/create' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.verification_step',  '_sonata_name' => 'admin_app_verificationstep_create',  '_route' => 'admin_app_verificationstep_create',);
                        }

                        // admin_app_verificationstep_batch
                        if ('/admin/app/verificationstep/batch' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.verification_step',  '_sonata_name' => 'admin_app_verificationstep_batch',  '_route' => 'admin_app_verificationstep_batch',);
                        }

                        // admin_app_verificationstep_edit
                        if (preg_match('#^/admin/app/verificationstep/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_verificationstep_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.verification_step',  '_sonata_name' => 'admin_app_verificationstep_edit',));
                        }

                        // admin_app_verificationstep_delete
                        if (preg_match('#^/admin/app/verificationstep/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_verificationstep_delete']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.verification_step',  '_sonata_name' => 'admin_app_verificationstep_delete',));
                        }

                        // admin_app_verificationstep_show
                        if (preg_match('#^/admin/app/verificationstep/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_verificationstep_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.verification_step',  '_sonata_name' => 'admin_app_verificationstep_show',));
                        }

                        // admin_app_verificationstep_export
                        if ('/admin/app/verificationstep/export' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.verification_step',  '_sonata_name' => 'admin_app_verificationstep_export',  '_route' => 'admin_app_verificationstep_export',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/app/staff')) {
                        // admin_app_staff_list
                        if ('/admin/app/staff/list' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.staff',  '_sonata_name' => 'admin_app_staff_list',  '_route' => 'admin_app_staff_list',);
                        }

                        // admin_app_staff_create
                        if ('/admin/app/staff/create' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.staff',  '_sonata_name' => 'admin_app_staff_create',  '_route' => 'admin_app_staff_create',);
                        }

                        // admin_app_staff_batch
                        if ('/admin/app/staff/batch' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.staff',  '_sonata_name' => 'admin_app_staff_batch',  '_route' => 'admin_app_staff_batch',);
                        }

                        // admin_app_staff_edit
                        if (preg_match('#^/admin/app/staff/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_staff_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.staff',  '_sonata_name' => 'admin_app_staff_edit',));
                        }

                        // admin_app_staff_delete
                        if (preg_match('#^/admin/app/staff/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_staff_delete']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.staff',  '_sonata_name' => 'admin_app_staff_delete',));
                        }

                        // admin_app_staff_show
                        if (preg_match('#^/admin/app/staff/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_staff_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.staff',  '_sonata_name' => 'admin_app_staff_show',));
                        }

                        // admin_app_staff_export
                        if ('/admin/app/staff/export' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.staff',  '_sonata_name' => 'admin_app_staff_export',  '_route' => 'admin_app_staff_export',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/app/userguide')) {
                        if (0 === strpos($pathinfo, '/admin/app/userguidetopic')) {
                            // admin_app_userguidetopic_list
                            if ('/admin/app/userguidetopic/list' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.user_guide.topic',  '_sonata_name' => 'admin_app_userguidetopic_list',  '_route' => 'admin_app_userguidetopic_list',);
                            }

                            // admin_app_userguidetopic_create
                            if ('/admin/app/userguidetopic/create' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.user_guide.topic',  '_sonata_name' => 'admin_app_userguidetopic_create',  '_route' => 'admin_app_userguidetopic_create',);
                            }

                            // admin_app_userguidetopic_batch
                            if ('/admin/app/userguidetopic/batch' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.user_guide.topic',  '_sonata_name' => 'admin_app_userguidetopic_batch',  '_route' => 'admin_app_userguidetopic_batch',);
                            }

                            // admin_app_userguidetopic_edit
                            if (preg_match('#^/admin/app/userguidetopic/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_userguidetopic_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.user_guide.topic',  '_sonata_name' => 'admin_app_userguidetopic_edit',));
                            }

                            // admin_app_userguidetopic_show
                            if (preg_match('#^/admin/app/userguidetopic/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_userguidetopic_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.user_guide.topic',  '_sonata_name' => 'admin_app_userguidetopic_show',));
                            }

                        }

                        // admin_app_userguide_list
                        if ('/admin/app/userguide/list' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.user_guide.content',  '_sonata_name' => 'admin_app_userguide_list',  '_route' => 'admin_app_userguide_list',);
                        }

                        // admin_app_userguide_create
                        if ('/admin/app/userguide/create' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.user_guide.content',  '_sonata_name' => 'admin_app_userguide_create',  '_route' => 'admin_app_userguide_create',);
                        }

                        // admin_app_userguide_batch
                        if ('/admin/app/userguide/batch' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.user_guide.content',  '_sonata_name' => 'admin_app_userguide_batch',  '_route' => 'admin_app_userguide_batch',);
                        }

                        // admin_app_userguide_edit
                        if (preg_match('#^/admin/app/userguide/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_userguide_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.user_guide.content',  '_sonata_name' => 'admin_app_userguide_edit',));
                        }

                        // admin_app_userguide_show
                        if (preg_match('#^/admin/app/userguide/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_app_userguide_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.user_guide.content',  '_sonata_name' => 'admin_app_userguide_show',));
                        }

                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/sonata/user/user')) {
                    // admin_sonata_user_user_list
                    if ('/admin/sonata/user/user/list' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_list',  '_route' => 'admin_sonata_user_user_list',);
                    }

                    // admin_sonata_user_user_create
                    if ('/admin/sonata/user/user/create' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_create',  '_route' => 'admin_sonata_user_user_create',);
                    }

                    // admin_sonata_user_user_batch
                    if ('/admin/sonata/user/user/batch' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_batch',  '_route' => 'admin_sonata_user_user_batch',);
                    }

                    // admin_sonata_user_user_edit
                    if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_user_user_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_edit',));
                    }

                    // admin_sonata_user_user_delete
                    if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_user_user_delete']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_delete',));
                    }

                    // admin_sonata_user_user_show
                    if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_user_user_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_show',));
                    }

                    // admin_sonata_user_user_export
                    if ('/admin/sonata/user/user/export' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_export',  '_route' => 'admin_sonata_user_user_export',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/sonata/user/group')) {
                    // admin_sonata_user_group_list
                    if ('/admin/sonata/user/group/list' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_list',  '_route' => 'admin_sonata_user_group_list',);
                    }

                    // admin_sonata_user_group_create
                    if ('/admin/sonata/user/group/create' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_create',  '_route' => 'admin_sonata_user_group_create',);
                    }

                    // admin_sonata_user_group_batch
                    if ('/admin/sonata/user/group/batch' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_batch',  '_route' => 'admin_sonata_user_group_batch',);
                    }

                    // admin_sonata_user_group_edit
                    if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_user_group_edit']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_edit',));
                    }

                    // admin_sonata_user_group_delete
                    if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_user_group_delete']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_delete',));
                    }

                    // admin_sonata_user_group_show
                    if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sonata_user_group_show']), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_show',));
                    }

                    // admin_sonata_user_group_export
                    if ('/admin/sonata/user/group/export' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_export',  '_route' => 'admin_sonata_user_group_export',);
                    }

                }

                // sonata_admin_redirect
                if ('/admin' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_sonata_admin_redirect;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'sonata_admin_redirect'));
                    }

                    return $ret;
                }
                not_sonata_admin_redirect:

                if (0 === strpos($pathinfo, '/admin/dashboard')) {
                    // sonata_admin_dashboard
                    if ('/admin/dashboard' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Action\\DashboardAction',  '_route' => 'sonata_admin_dashboard',);
                    }

                    // app_dashboard_suppliers
                    if ('/admin/dashboard/suppliers' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\DashboardController::suppliersAction',  'category' => NULL,  '_route' => 'app_dashboard_suppliers',);
                    }

                    // app_dashboard_buyers
                    if ('/admin/dashboard/buyers' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\DashboardController::buyersAction',  'category' => NULL,  '_route' => 'app_dashboard_buyers',);
                    }

                    // app_dashboard_users
                    if ('/admin/dashboard/users' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\DashboardController::usersAction',  'category' => NULL,  '_route' => 'app_dashboard_users',);
                    }

                    // app_dashboard_payment
                    if ('/admin/dashboard/finance' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\DashboardController::paymentAction',  'category' => NULL,  '_route' => 'app_dashboard_payment',);
                    }

                }

                // app_dashboard_download
                if (0 === strpos($pathinfo, '/admin/downloadfile') && preg_match('#^/admin/downloadfile/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_dashboard_download']), array (  '_controller' => 'AppBundle\\Controller\\DashboardController::downloadAction',  'category' => NULL,));
                }

                if (0 === strpos($pathinfo, '/admin/core')) {
                    if (0 === strpos($pathinfo, '/admin/core/get-')) {
                        // sonata_admin_retrieve_form_element
                        if ('/admin/core/get-form-field-element' === $pathinfo) {
                            return array (  '_controller' => 'sonata.admin.action.retrieve_form_field_element',  '_route' => 'sonata_admin_retrieve_form_element',);
                        }

                        // sonata_admin_short_object_information
                        if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'sonata_admin_short_object_information']), array (  '_controller' => 'sonata.admin.action.get_short_object_description',  '_format' => 'html',));
                        }

                        // sonata_admin_retrieve_autocomplete_items
                        if ('/admin/core/get-autocomplete-items' === $pathinfo) {
                            return array (  '_controller' => 'sonata.admin.action.retrieve_autocomplete_items',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
                        }

                    }

                    // sonata_admin_append_form_element
                    if ('/admin/core/append-form-field-element' === $pathinfo) {
                        return array (  '_controller' => 'sonata.admin.action.append_form_field_element',  '_route' => 'sonata_admin_append_form_element',);
                    }

                    // sonata_admin_set_object_field_value
                    if ('/admin/core/set-object-field-value' === $pathinfo) {
                        return array (  '_controller' => 'sonata.admin.action.set_object_field_value',  '_route' => 'sonata_admin_set_object_field_value',);
                    }

                }

                // sonata_admin_search
                if ('/admin/search' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Action\\SearchAction',  '_route' => 'sonata_admin_search',);
                }

                if (0 === strpos($pathinfo, '/admin/login')) {
                    // sonata_user_admin_security_login
                    if ('/admin/login' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\UserBundle\\Action\\LoginAction',  '_route' => 'sonata_user_admin_security_login',);
                    }

                    // sonata_user_admin_security_check
                    if ('/admin/login_check' === $pathinfo) {
                        $ret = array (  '_controller' => 'Sonata\\UserBundle\\Action\\CheckLoginAction',  '_route' => 'sonata_user_admin_security_check',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_sonata_user_admin_security_check;
                        }

                        return $ret;
                    }
                    not_sonata_user_admin_security_check:

                }

                // sonata_user_admin_security_logout
                if ('/admin/logout' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Action\\LogoutAction',  '_route' => 'sonata_user_admin_security_logout',);
                }

                if (0 === strpos($pathinfo, '/admin/resetting')) {
                    // sonata_user_admin_resetting_request
                    if ('/admin/resetting/request' === $pathinfo) {
                        $ret = array (  '_controller' => 'Sonata\\UserBundle\\Action\\RequestAction',  '_route' => 'sonata_user_admin_resetting_request',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_sonata_user_admin_resetting_request;
                        }

                        return $ret;
                    }
                    not_sonata_user_admin_resetting_request:

                    // sonata_user_admin_resetting_reset
                    if (0 === strpos($pathinfo, '/admin/resetting/reset') && preg_match('#^/admin/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'sonata_user_admin_resetting_reset']), array (  '_controller' => 'Sonata\\UserBundle\\Action\\ResetAction',));
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_sonata_user_admin_resetting_reset;
                        }

                        return $ret;
                    }
                    not_sonata_user_admin_resetting_reset:

                    // sonata_user_admin_resetting_send_email
                    if ('/admin/resetting/send-email' === $pathinfo) {
                        $ret = array (  '_controller' => 'Sonata\\UserBundle\\Action\\SendEmailAction',  '_route' => 'sonata_user_admin_resetting_send_email',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_sonata_user_admin_resetting_send_email;
                        }

                        return $ret;
                    }
                    not_sonata_user_admin_resetting_send_email:

                    // sonata_user_admin_resetting_check_email
                    if ('/admin/resetting/check-email' === $pathinfo) {
                        $ret = array (  '_controller' => 'Sonata\\UserBundle\\Action\\CheckEmailAction',  '_route' => 'sonata_user_admin_resetting_check_email',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_sonata_user_admin_resetting_check_email;
                        }

                        return $ret;
                    }
                    not_sonata_user_admin_resetting_check_email:

                }

                // app_admin_apportionpayment
                if ('/admin/actions/apportion' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::apportionPaymentAction',  'category' => NULL,  '_route' => 'app_admin_apportionpayment',);
                }

                // app_dashboard_getcrbreport
                if ('/admin/get-crb-report' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DashboardController::getCRBReportAction',  'category' => NULL,  '_route' => 'app_dashboard_getcrbreport',);
                }

                // user-guide
                if ('/admin/user-guide' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\UserGuideController::indexAction',  'category' => NULL,  '_route' => 'user-guide',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_userguide;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'user-guide'));
                    }

                    return $ret;
                }
                not_userguide:

            }

            // app_api_equitypayment
            if ('/api/equity/payment' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ApiController::equityPaymentAction',  'category' => NULL,  '_route' => 'app_api_equitypayment',);
            }

            // app_api_getrequests
            if ('/api/get/requests' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ApiController::getRequestsAction',  'category' => NULL,  '_route' => 'app_api_getrequests',);
            }

            // auth-login
            if ('/auth/login' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AuthController::loginAction',  'category' => NULL,  '_route' => 'auth-login',);
            }

            // auth-logout
            if ('/auth/logout' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AuthController::logoutAction',  'category' => NULL,  '_route' => 'auth-logout',);
            }

            if (0 === strpos($pathinfo, '/about')) {
                // about-app
                if ('/about/app' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::aboutAppAction',  'category' => NULL,  '_route' => 'about-app',);
                }

                if (0 === strpos($pathinfo, '/about/iia')) {
                    // about-iia
                    if ('/about/iia' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::aboutIIAAction',  'category' => NULL,  '_route' => 'about-iia',);
                    }

                    // about/iia
                    if ('/about/iia' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::aboutAction',  'category' => NULL,  '_route' => 'about/iia',);
                    }

                }

                // about/our-partners
                if ('/about/partners' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::ourPartnersAction',  'category' => NULL,  '_route' => 'about/our-partners',);
                }

                // about/our-purpose
                if ('/about/our-purpose' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::ourPurposeAction',  'category' => NULL,  '_route' => 'about/our-purpose',);
                }

            }

            // accept-invitation
            if ('/accept-invitation' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::acceptInvitation',  'category' => NULL,  '_route' => 'accept-invitation',);
            }

            // articles
            if (0 === strpos($pathinfo, '/articles') && preg_match('#^/articles(?:/(?P<category>[^/]++)(?:/(?P<slug>[^/]++))?)?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'articles']), array (  'category' => NULL,  'slug' => '',  '_controller' => 'AppBundle\\Controller\\DefaultController::articlesAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // register
                if ('/register' === $pathinfo) {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'user-register',  'permanent' => true,  '_route' => 'register',);
                }

                // fos_user_registration_register
                if ('/register' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_fos_user_registration_register;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                    }

                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_registration_register;
                    }

                    return $ret;
                }
                not_fos_user_registration_register:

                // fos_user_registration_check_email
                if ('/register/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_check_email;
                    }

                    return $ret;
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirm']), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_fos_user_registration_confirm;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ('/register/confirmed' === $pathinfo) {
                        $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_fos_user_registration_confirmed;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            // registration-success
            if ('/registration-success' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::registrationSuccessAction',  'category' => NULL,  '_route' => 'registration-success',);
            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_resetting_request;
                    }

                    return $ret;
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_reset']), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_resetting_reset;
                    }

                    return $ret;
                }
                not_fos_user_resetting_reset:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_fos_user_resetting_send_email;
                    }

                    return $ret;
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_resetting_check_email;
                    }

                    return $ret;
                }
                not_fos_user_resetting_check_email:

            }

            // show-request
            if (0 === strpos($pathinfo, '/request') && preg_match('#^/request/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'show-request']), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::requestAction',  'category' => NULL,));
            }

        }

        elseif (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_security_login;
                }

                return $ret;
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_security_check;
                }

                return $ret;
            }
            not_fos_user_security_check:

            // hwi_oauth_connect
            if ('/login' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectAction',  '_route' => 'hwi_oauth_connect',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_hwi_oauth_connect;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'hwi_oauth_connect'));
                }

                return $ret;
            }
            not_hwi_oauth_connect:

            // azure_login
            if ('/login/check-azure' === $pathinfo) {
                return ['_route' => 'azure_login'];
            }

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_security_logout;
            }

            return $ret;
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/profile')) {
                // fos_user_profile_show
                if ('/profile' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_fos_user_profile_show;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_profile_show;
                    }

                    return $ret;
                }
                not_fos_user_profile_show:

                // fos_user_profile_edit
                if ('/profile/edit' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_profile_edit;
                    }

                    return $ret;
                }
                not_fos_user_profile_edit:

                // fos_user_change_password
                if ('/profile/change-password' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_change_password;
                    }

                    return $ret;
                }
                not_fos_user_change_password:

            }

            // privacy
            if ('/privacy' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::privacyAction',  'category' => NULL,  '_route' => 'privacy',);
            }

            if (0 === strpos($pathinfo, '/portal')) {
                // portal-login
                if ('/portal/login' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::loginAction',  'category' => NULL,  '_route' => 'portal-login',);
                }

                // buyer-notification
                if ('/portal/buyer-notification' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::buyerNotificationAction',  'category' => NULL,  '_route' => 'buyer-notification',);
                }

                // portal
                if ('/portal' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\PortalController::portalAction',  'category' => NULL,  '_route' => 'portal',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_portal;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'portal'));
                    }

                    return $ret;
                }
                not_portal:

                if (0 === strpos($pathinfo, '/portal/buyer')) {
                    // buyer-dashboard
                    if (preg_match('#^/portal/buyer/(?P<slug>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'buyer-dashboard']), array (  '_controller' => 'AppBundle\\Controller\\PortalController::buyerDashboardAction',  'category' => NULL,));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_buyerdashboard;
                        }

                        return $ret;
                    }
                    not_buyerdashboard:

                    // buyer-dashboard-requests
                    if (preg_match('#^/portal/buyer/(?P<slug>[^/]++)/requests$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'buyer-dashboard-requests']), array (  '_controller' => 'AppBundle\\Controller\\PortalController::buyerRequestsAction',  'category' => NULL,));
                    }

                    // buyer-new-request
                    if (preg_match('#^/portal/buyer/(?P<slug>[^/]++)/new\\-request$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'buyer-new-request']), array (  '_controller' => 'AppBundle\\Controller\\PortalController::buyerNewRequestAction',  'category' => NULL,));
                    }

                    // buyer-edit-request
                    if (0 === strpos($pathinfo, '/portal/buyer/edit-request') && preg_match('#^/portal/buyer/edit\\-request/(?P<slug>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'buyer-edit-request']), array (  '_controller' => 'AppBundle\\Controller\\PortalController::buyerEditRequestAction',  'category' => NULL,));
                    }

                    if (0 === strpos($pathinfo, '/portal/buyer-actions')) {
                        // supplier-profile
                        if ('/portal/buyer-actions/supplier-profile' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\PortalController::supplierProfileAction',  'category' => NULL,  '_route' => 'supplier-profile',);
                        }

                        // publish-request
                        if ('/portal/buyer-actions/publish-request-suppliers' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\PortalController::buyerPublishRequestAction',  'category' => NULL,  '_route' => 'publish-request',);
                        }

                        // pool-suppliers
                        if ('/portal/buyer-actions/pool-suppliers' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\PortalController::buyerPoolSuppliersAction',  'category' => NULL,  '_route' => 'pool-suppliers',);
                        }

                        // delete-request
                        if ('/portal/buyer-actions/deleteRequest' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\PortalController::buyerDeleteRequestAction',  'category' => NULL,  '_route' => 'delete-request',);
                        }

                        // invite-suppliers
                        if ('/portal/buyer-actions/invite-suppliers' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\PortalController::buyerInviteSuppliersAction',  'category' => NULL,  '_route' => 'invite-suppliers',);
                        }

                        // remove-suppliers
                        if ('/portal/buyer-actions/remove-suppliers' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\PortalController::buyerRemoveSuppliersAction',  'category' => NULL,  '_route' => 'remove-suppliers',);
                        }

                    }

                    // fetch-info
                    if ('/portal/buyer/fetch-info' === $pathinfo) {
                        $ret = array (  '_controller' => 'AppBundle\\Controller\\PortalController::buyerFetchInfoRequestAction',  'category' => NULL,  '_route' => 'fetch-info',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_fetchinfo;
                        }

                        return $ret;
                    }
                    not_fetchinfo:

                    // save-request
                    if ('/portal/buyer/save-request' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\PortalController::buyerSaveRequestAction',  'category' => NULL,  '_route' => 'save-request',);
                    }

                    // team-members
                    if (preg_match('#^/portal/buyer/(?P<slug>[^/]++)/team\\-members$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'team-members']), array (  '_controller' => 'AppBundle\\Controller\\PortalController::buyerTeamAction',  'category' => NULL,));
                    }

                    // buyer-dashboard-suppliers
                    if (preg_match('#^/portal/buyer/(?P<slug>[^/]++)/suppliers(?:/(?P<pool>\\d+))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'buyer-dashboard-suppliers']), array (  'pool' => NULL,  '_controller' => 'AppBundle\\Controller\\PortalController::buyerSuppliersAction',  'category' => NULL,));
                    }

                    // remove-from-pool
                    if ('/portal/buyer-actions/remove-from-pool' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\PortalController::buyerRemoveFromPoolAction',  'category' => NULL,  '_route' => 'remove-from-pool',);
                    }

                    // remove-from-team
                    if ('/portal/buyer-actions/remove-from-team' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\PortalController::removeFromTeamAction',  'category' => NULL,  '_route' => 'remove-from-team',);
                    }

                    // add-to-team
                    if (preg_match('#^/portal/buyer/(?P<slug>[^/]++)/add\\-to\\-team$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'add-to-team']), array (  '_controller' => 'AppBundle\\Controller\\PortalController::buyerAddToTeamAction',  'category' => NULL,));
                    }

                    // buyer-update-information
                    if (preg_match('#^/portal/buyer/(?P<slug>[^/]++)/update\\-information$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'buyer-update-information']), array (  '_controller' => 'AppBundle\\Controller\\PortalController::buyerUpdateInformationAction',  'category' => NULL,));
                    }

                    // review-response
                    if ('/portal/buyer-actions/review-response' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\PortalController::buyerReviewResponseAction',  'category' => NULL,  '_route' => 'review-response',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/portal/s')) {
                    if (0 === strpos($pathinfo, '/portal/supplier')) {
                        // respond-to-request
                        if (0 === strpos($pathinfo, '/portal/supplier/respond') && preg_match('#^/portal/supplier/respond/(?P<slug>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'respond-to-request']), array (  '_controller' => 'AppBundle\\Controller\\PortalController::supplierRequestRespondAction',  'category' => NULL,));
                        }

                        // supplier-dashboard-requests
                        if ('/portal/supplier/requests' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\PortalController::supplierRequestsAction',  'category' => NULL,  '_route' => 'supplier-dashboard-requests',);
                        }

                        // save-supplier-response
                        if ('/portal/supplier/save-reponse' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\PortalController::saveSupplierResponseAction',  'category' => NULL,  '_route' => 'save-supplier-response',);
                        }

                        // supplier-team-members
                        if ('/portal/supplier/team-members' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\PortalController::supplierTeamAction',  'category' => NULL,  '_route' => 'supplier-team-members',);
                        }

                        // supplier-add-to-team
                        if ('/portal/supplier/add-to-team' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\PortalController::supplierAddToTeamAction',  'category' => NULL,  '_route' => 'supplier-add-to-team',);
                        }

                        // my-companies
                        if ('/portal/supplier/my-companies' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\PortalController::myCompaniesAction',  'category' => NULL,  '_route' => 'my-companies',);
                        }

                        // supplier-dashboard-documents
                        if ('/portal/supplier/documents' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\PortalController::supplierDocumentsAction',  'category' => NULL,  '_route' => 'supplier-dashboard-documents',);
                        }

                    }

                    // save-company
                    if ('/portal/save-company' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\PortalController::saveCompanyAction',  'category' => NULL,  '_route' => 'save-company',);
                    }

                    // save-buyer
                    if ('/portal/save-buyer' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\PortalController::saveBuyerAction',  'category' => NULL,  '_route' => 'save-buyer',);
                    }

                    // singleUpload
                    if ('/portal/singleUpload' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\PortalController::singleUploadAction',  'category' => NULL,  '_route' => 'singleUpload',);
                    }

                }

                // apply-promo-code
                if ('/portal/apply-promo-code' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\PortalController::applyPromoCode',  'category' => NULL,  '_route' => 'apply-promo-code',);
                }

                // payment
                if ('/portal/payment' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\PortalController::paymentAction',  'category' => NULL,  '_route' => 'payment',);
                }

                // join-company
                if ('/portal/join-company' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\PortalController::joinCompanyAction',  'category' => NULL,  '_route' => 'join-company',);
                }

                // confirm-membership
                if ('/portal/confirm-membership' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\PortalController::joinConfirmMembership',  'category' => NULL,  '_route' => 'confirm-membership',);
                }

                // change-tier
                if ('/portal/change-tier' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\PortalController::changeTierAction',  'category' => NULL,  '_route' => 'change-tier',);
                }

                if (0 === strpos($pathinfo, '/portal/re')) {
                    // reject-membership
                    if ('/portal/reject-membership' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\PortalController::rejectMembership',  'category' => NULL,  '_route' => 'reject-membership',);
                    }

                    // register-company
                    if ('/portal/register-company' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\PortalController::registerCompanyAction',  'category' => NULL,  '_route' => 'register-company',);
                    }

                    // remove-component
                    if ('/portal/remove-component' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\PortalController::removeCompanyComponentAction',  'category' => NULL,  '_route' => 'remove-component',);
                    }

                }

                // portal-notifications
                if ('/portal/notifications' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\PortalController::notificationsAction',  'category' => NULL,  '_route' => 'portal-notifications',);
                }

                // portal-notification-read
                if ('/portal/notification/read' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\PortalController::readNotificationsAction',  'category' => NULL,  '_route' => 'portal-notification-read',);
                }

                // edit-buyer
                if (0 === strpos($pathinfo, '/portal/edit-buyer') && preg_match('#^/portal/edit\\-buyer/(?P<slug>[^/]++)(?:/(?P<tab>[^/]++))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'edit-buyer']), array (  'tab' => NULL,  '_controller' => 'AppBundle\\Controller\\PortalController::editBuyerAction',  'category' => NULL,));
                }

                // edit-company
                if (0 === strpos($pathinfo, '/portal/edit-company') && preg_match('#^/portal/edit\\-company/(?P<slug>[^/]++)(?:/(?P<tab>[^/]++))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'edit-company']), array (  'tab' => NULL,  '_controller' => 'AppBundle\\Controller\\PortalController::editCompanyAction',  'category' => NULL,));
                }

                if (0 === strpos($pathinfo, '/portal/download')) {
                    // downloadCompanyDocument
                    if (0 === strpos($pathinfo, '/portal/downloadfile') && preg_match('#^/portal/downloadfile/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'downloadCompanyDocument']), array (  '_controller' => 'AppBundle\\Controller\\PortalController::downloadCompanyDocumentAction',  'category' => NULL,));
                    }

                    // downloadBuyerDocument
                    if (0 === strpos($pathinfo, '/portal/download-request-file') && preg_match('#^/portal/download\\-request\\-file/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'downloadBuyerDocument']), array (  '_controller' => 'AppBundle\\Controller\\PortalController::downloadBuyerDocumentAction',  'category' => NULL,));
                    }

                    // downloadResponseDocument
                    if (0 === strpos($pathinfo, '/portal/download-response-file') && preg_match('#^/portal/download\\-response\\-file/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'downloadResponseDocument']), array (  '_controller' => 'AppBundle\\Controller\\PortalController::downloadResponseDocumentAction',  'category' => NULL,));
                    }

                }

                // deleteBuyerDocument
                if (0 === strpos($pathinfo, '/portal/delete-request-file') && preg_match('#^/portal/delete\\-request\\-file/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'deleteBuyerDocument']), array (  '_controller' => 'AppBundle\\Controller\\PortalController::deleteBuyerDocumentAction',  'category' => NULL,));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/o')) {
            // fos_oauth_server_token
            if ('/oauth/v2/token' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_oauth_server.controller.token:tokenAction',  '_route' => 'fos_oauth_server_token',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_oauth_server_token;
                }

                return $ret;
            }
            not_fos_oauth_server_token:

            // fos_oauth_server_authorize
            if ('/oauth/v2/auth' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_oauth_server.controller.authorize:authorizeAction',  '_route' => 'fos_oauth_server_authorize',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_oauth_server_authorize;
                }

                return $ret;
            }
            not_fos_oauth_server_authorize:

            // open-sourcedogg-request
            if ('/open-sourcedogg-request' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::openSouceDoggAction',  'category' => NULL,  '_route' => 'open-sourcedogg-request',);
            }

        }

        elseif (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/co')) {
                // generateInvoice
                if ('/commands/generate-invoice' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\CommandController::generateInvoiceAction',  'category' => NULL,  '_route' => 'generateInvoice',);
                }

                if (0 === strpos($pathinfo, '/contact')) {
                    // contact
                    if ('/contact' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::contactAction',  'category' => NULL,  '_route' => 'contact',);
                    }

                    // contact-us
                    if ('/contact-us' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::contactUsAction',  'category' => NULL,  '_route' => 'contact-us',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/connect')) {
                    // hwi_oauth_service_redirect
                    if (preg_match('#^/connect/(?P<service>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'hwi_oauth_service_redirect']), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::redirectToServiceAction',));
                    }

                    // hwi_oauth_connect_service
                    if (0 === strpos($pathinfo, '/connect/service') && preg_match('#^/connect/service/(?P<service>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'hwi_oauth_connect_service']), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectServiceAction',));
                    }

                    // hwi_oauth_connect_registration
                    if (0 === strpos($pathinfo, '/connect/registration') && preg_match('#^/connect/registration/(?P<key>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'hwi_oauth_connect_registration']), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::registrationAction',));
                    }

                }

            }

            // check-payment
            if ('/check-payment' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::checkPaymentAction',  'category' => NULL,  '_route' => 'check-payment',);
            }

            // check-company
            if ('/check-company' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::checkCompanyAction',  'category' => NULL,  '_route' => 'check-company',);
            }

            // certificate
            if ('/certificate' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::certificateAction',  'category' => NULL,  '_route' => 'certificate',);
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  'category' => NULL,  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if (0 === strpos($pathinfo, '/how-it-work')) {
            // how-it-works
            if ('/how-it-works' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::howItWorksAction',  'category' => NULL,  '_route' => 'how-it-works',);
            }

            // how-it-work
            if ('/how-it-work' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::howItWorkAction',  'category' => NULL,  '_route' => 'how-it-work',);
            }

        }

        // hive-authentication
        if ('/hive-authentication' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::hiveBriteAuthenticationAction',  'category' => NULL,  '_route' => 'hive-authentication',);
        }

        // meet-the-buyers
        if ('/meet-the-buyers' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::meetTheBuyersAction',  'category' => NULL,  '_route' => 'meet-the-buyers',);
        }

        if (0 === strpos($pathinfo, '/business-growth-hub')) {
            // business-growth-hub
            if ('/business-growth-hub' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::businessGrowthHubAction',  'category' => NULL,  '_route' => 'business-growth-hub',);
            }

            // business-growth-hub-show
            if (preg_match('#^/business\\-growth\\-hub/(?P<category>[^/]++)/(?P<slug>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'business-growth-hub-show']), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::businessGrowthHubShowAction',  'category' => NULL,));
            }

        }

        // business-excellence-programme
        if ('/business-excellence-programme' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::businessLinkageProgrammeAction',  'category' => NULL,  '_route' => 'business-excellence-programme',);
        }

        if (0 === strpos($pathinfo, '/n')) {
            // network-hub
            if ('/network-hub' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::networkHubAction',  'category' => NULL,  '_route' => 'network-hub',);
            }

            // mpesa-notification
            if ('/notifications/mpesa' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\NotificationsController::mpesaAction',  'category' => NULL,  '_route' => 'mpesa-notification',);
            }

            // hubtel-notification
            if ('/notifications/hubtel' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\NotificationsController::hubtelAction',  'category' => NULL,  '_route' => 'hubtel-notification',);
            }

        }

        elseif (0 === strpos($pathinfo, '/s')) {
            if (0 === strpos($pathinfo, '/services')) {
                // services
                if ('/services' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::servicesAction',  'category' => NULL,  '_route' => 'services',);
                }

                // app_services_download
                if (0 === strpos($pathinfo, '/services/downloadfile') && preg_match('#^/services/downloadfile/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_services_download']), array (  '_controller' => 'AppBundle\\Controller\\ServicesController::downloadAction',  'category' => NULL,));
                }

            }

            // search
            if ('/search' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::search',  'category' => NULL,  '_route' => 'search',);
            }

            // slugify
            if ('/slugify' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::slugifyAction',  'category' => NULL,  '_route' => 'slugify',);
            }

            if (0 === strpos($pathinfo, '/saml')) {
                // app_saml_sso
                if ('/saml/sso' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\SamlController::singleSignOnAction',  'category' => NULL,  '_route' => 'app_saml_sso',);
                }

                // app_saml_sls
                if ('/saml/sls' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\SamlController::singleLogoutAction',  'category' => NULL,  '_route' => 'app_saml_sls',);
                }

                // app_saml_metadata
                if ('/saml/metadata' === $pathinfo) {
                    return array (  '_format' => 'xml',  '_controller' => 'AppBundle\\Controller\\SamlController::metadataAction',  'category' => NULL,  '_route' => 'app_saml_metadata',);
                }

            }

            // sourcedogg-request
            if ('/sourcedogg/request' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\SourceDoggController::sourceDoggRequestAction',  'category' => NULL,  '_route' => 'sourcedogg-request',);
            }

            // sourcedogg-test
            if ('/sourcedogg/sourcedogg-test' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\SourceDoggController::sourceDoggTestAction',  'category' => NULL,  '_route' => 'sourcedogg-test',);
            }

        }

        // get-started
        if ('/get-started' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::getStartedAction',  'category' => NULL,  '_route' => 'get-started',);
        }

        // user-register
        if ('/user/register' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::registerAction',  'category' => NULL,  '_route' => 'user-register',);
        }

        if (0 === strpos($pathinfo, '/upgrade')) {
            // upgradeindex
            if ('/upgrade' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\RecollectionController::indexAction',  'category' => NULL,  '_route' => 'upgradeindex',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_upgradeindex;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'upgradeindex'));
                }

                return $ret;
            }
            not_upgradeindex:

            // get_company_details
            if ('/upgrade/get_company_details' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\RecollectionController::getCompanyDetailsAction',  'category' => NULL,  '_route' => 'get_company_details',);
            }

            // update_login_details
            if ('/upgrade/update_login_details' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\RecollectionController::updateCredentialsAction',  'category' => NULL,  '_route' => 'update_login_details',);
            }

            // update_company_details
            if (0 === strpos($pathinfo, '/upgrade/update_company_details') && preg_match('#^/upgrade/update_company_details/(?P<slug>[^/]++)(?:/(?P<tab>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'update_company_details']), array (  'tab' => NULL,  '_controller' => 'AppBundle\\Controller\\RecollectionController::updateCompanyDetails',  'category' => NULL,));
            }

            // save-company-upgrade
            if ('/upgrade/save-company' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\RecollectionController::saveCompanyAction',  'category' => NULL,  '_route' => 'save-company-upgrade',);
            }

        }

        // email-confirmation
        if ('/email-confirmation' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::emailConfirmation',  'category' => NULL,  '_route' => 'email-confirmation',);
        }

        // fetch-requirements
        if ('/fetch-requirements' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::fetchRequirementsAction',  'category' => NULL,  '_route' => 'fetch-requirements',);
        }

        if (0 === strpos($pathinfo, '/te')) {
            if (0 === strpos($pathinfo, '/tenderspace')) {
                // tenda
                if (0 === strpos($pathinfo, '/tenderspace/tenders') && preg_match('#^/tenderspace/tenders/(?P<slug>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'tenda']), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::tendaAction',  'category' => NULL,));
                }

                // tenderspace
                if (preg_match('#^/tenderspace(?:/(?P<category>[^/]++)(?:/(?P<subcategory>[^/]++)(?:/(?P<orderby>[^/]++))?)?)?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'tenderspace']), array (  'category' => NULL,  'subcategory' => 'all-subcategories',  'orderby' => 'newest',  '_controller' => 'AppBundle\\Controller\\DefaultController::tenderspaceAction',));
                }

            }

            // terms
            if ('/terms' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::termsAction',  'category' => NULL,  '_route' => 'terms',);
            }

            // registration-tests
            if ('/tests/registration' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\TestController::registrationConfirmationAction',  'category' => NULL,  '_route' => 'registration-tests',);
            }

            // decrypt
            if ('/tests/decrypt' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\TestController::dhotAction',  'category' => NULL,  '_route' => 'decrypt',);
            }

        }

        // @tenderspace
        if ('/@tenderspace' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::tendasAction',  'category' => NULL,  '_route' => '@tenderspace',);
        }

        // what-is-app
        if ('/what-is-app' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::whatIsAppAction',  'category' => NULL,  '_route' => 'what-is-app',);
        }

        // validate-info
        if ('/validate-info' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::validateInfoAction',  'category' => NULL,  '_route' => 'validate-info',);
        }

        // img_save_to_file
        if ('/img_save_to_file' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::imgSaveToFileAction',  'category' => NULL,  '_route' => 'img_save_to_file',);
        }

        // img_crop_to_file
        if ('/img_crop_to_file' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::imgCropToFileAction',  'category' => NULL,  '_route' => 'img_crop_to_file',);
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
