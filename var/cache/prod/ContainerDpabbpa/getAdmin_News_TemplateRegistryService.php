<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'admin.news.template_registry' shared service.

return $this->services['admin.news.template_registry'] = new \Sonata\AdminBundle\Templating\TemplateRegistry(['user_block' => '@SonataUser/Admin/Core/user_block.html.twig', 'layout' => 'AppBundle::standard_layout.html.twig', 'add_block' => '@SonataAdmin/Core/add_block.html.twig', 'ajax' => '@SonataAdmin/ajax_layout.html.twig', 'dashboard' => '@SonataAdmin/Core/dashboard.html.twig', 'search' => '@SonataAdmin/Core/search.html.twig', 'list' => '@SonataAdmin/CRUD/list.html.twig', 'filter' => '@SonataAdmin/Form/filter_admin_fields.html.twig', 'show' => '@SonataAdmin/CRUD/show.html.twig', 'show_compare' => '@SonataAdmin/CRUD/show_compare.html.twig', 'edit' => 'AppBundle:Article:edit.html.twig', 'preview' => '@SonataAdmin/CRUD/preview.html.twig', 'history' => '@SonataAdmin/CRUD/history.html.twig', 'acl' => '@SonataAdmin/CRUD/acl.html.twig', 'history_revision_timestamp' => '@SonataAdmin/CRUD/history_revision_timestamp.html.twig', 'action' => '@SonataAdmin/CRUD/action.html.twig', 'select' => '@SonataAdmin/CRUD/list__select.html.twig', 'list_block' => '@SonataAdmin/Block/block_admin_list.html.twig', 'search_result_block' => '@SonataAdmin/Block/block_search_result.html.twig', 'short_object_description' => '@SonataAdmin/Helper/short-object-description.html.twig', 'delete' => '@SonataAdmin/CRUD/delete.html.twig', 'batch' => '@SonataAdmin/CRUD/list__batch.html.twig', 'batch_confirmation' => '@SonataAdmin/CRUD/batch_confirmation.html.twig', 'inner_list_row' => '@SonataAdmin/CRUD/list_inner_row.html.twig', 'outer_list_rows_mosaic' => '@SonataAdmin/CRUD/list_outer_rows_mosaic.html.twig', 'outer_list_rows_list' => '@SonataAdmin/CRUD/list_outer_rows_list.html.twig', 'outer_list_rows_tree' => '@SonataAdmin/CRUD/list_outer_rows_tree.html.twig', 'base_list_field' => '@SonataAdmin/CRUD/base_list_field.html.twig', 'pager_links' => '@SonataAdmin/Pager/links.html.twig', 'pager_results' => '@SonataAdmin/Pager/results.html.twig', 'tab_menu_template' => '@SonataAdmin/Core/tab_menu_template.html.twig', 'knp_menu_template' => '@SonataAdmin/Menu/sonata_menu.html.twig', 'action_create' => '@SonataAdmin/CRUD/dashboard__action_create.html.twig', 'button_acl' => '@SonataAdmin/Button/acl_button.html.twig', 'button_create' => '@SonataAdmin/Button/create_button.html.twig', 'button_edit' => '@SonataAdmin/Button/edit_button.html.twig', 'button_history' => '@SonataAdmin/Button/history_button.html.twig', 'button_list' => '@SonataAdmin/Button/list_button.html.twig', 'button_show' => '@SonataAdmin/Button/show_button.html.twig']);
