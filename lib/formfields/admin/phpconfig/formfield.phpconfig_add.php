<?php

/**
 * This file is part of the Froxlor project.
 * Copyright (c) 2010 the Froxlor Team (see authors).
 *
 * For the full copyright and license information, please view the COPYING
 * file that was distributed with this source code. You can also view the
 * COPYING file online at http://files.froxlor.org/misc/COPYING.txt
 *
 * @copyright  (c) the authors
 * @author     Froxlor team <team@froxlor.org> (2010-)
 * @license    GPLv2 http://files.froxlor.org/misc/COPYING.txt
 * @package    Formfields
 *
 */
return array(
	'phpconfig_add' => array(
		'title' => \Froxlor\Frontend\UI::getLng('admin.phpsettings.addsettings'),
		'image' => 'icons/phpsettings_add.png',
		'sections' => array(
			'section_a' => array(
				'title' => \Froxlor\Frontend\UI::getLng('admin.phpsettings.addsettings'),
				'image' => 'icons/phpsettings_add.png',
				'fields' => array(
					'description' => array(
						'label' => \Froxlor\Frontend\UI::getLng('admin.phpsettings.description'),
						'type' => 'text',
						'maxlength' => 50
					),
					'binary' => array(
						'visible' => (\Froxlor\Settings::Get('system.mod_fcgid') == 1 ? true : false),
						'label' => \Froxlor\Frontend\UI::getLng('admin.phpsettings.binary'),
						'type' => 'text',
						'maxlength' => 255,
						'value' => '/usr/bin/php-cgi',
						'mandatory' => true
					),
					'fpmconfig' => array(
						'visible' => (\Froxlor\Settings::Get('phpfpm.enabled') == 1 ? true : false),
						'label' => \Froxlor\Frontend\UI::getLng('admin.phpsettings.fpmdesc'),
						'type' => 'select',
						'select_var' => $fpmconfigs,
						'mandatory' => true
					),
					'file_extensions' => array(
						'visible' => (\Froxlor\Settings::Get('system.mod_fcgid') == 1 ? true : false),
						'label' => \Froxlor\Frontend\UI::getLng('admin.phpsettings.file_extensions'),
						'desc' => \Froxlor\Frontend\UI::getLng('admin.phpsettings.file_extensions_note'),
						'type' => 'text',
						'maxlength' => 255,
						'value' => 'php'
					),
					'mod_fcgid_starter' => array(
						'visible' => (\Froxlor\Settings::Get('system.mod_fcgid') == 1 ? true : false),
						'label' => \Froxlor\Frontend\UI::getLng('admin.mod_fcgid_starter.title'),
						'type' => 'text'
					),
					'mod_fcgid_maxrequests' => array(
						'visible' => (\Froxlor\Settings::Get('system.mod_fcgid') == 1 ? true : false),
						'label' => \Froxlor\Frontend\UI::getLng('admin.mod_fcgid_maxrequests.title'),
						'type' => 'text'
					),
					'mod_fcgid_umask' => array(
						'visible' => (\Froxlor\Settings::Get('system.mod_fcgid') == 1 ? true : false),
						'label' => \Froxlor\Frontend\UI::getLng('admin.mod_fcgid_umask.title'),
						'type' => 'text',
						'maxlength' => 3,
						'value' => '022'
					),
					'phpfpm_enable_slowlog' => array(
						'visible' => (\Froxlor\Settings::Get('phpfpm.enabled') == 1 ? true : false),
						'label' => \Froxlor\Frontend\UI::getLng('admin.phpsettings.enable_slowlog'),
						'type' => 'checkbox',
						'values' => array(
							array(
								'label' => \Froxlor\Frontend\UI::getLng('panel.yes'),
								'value' => '1'
							)
						),
						'value' => array()
					),
					'phpfpm_reqtermtimeout' => array(
						'visible' => (\Froxlor\Settings::Get('phpfpm.enabled') == 1 ? true : false),
						'label' => \Froxlor\Frontend\UI::getLng('admin.phpsettings.request_terminate_timeout'),
						'type' => 'text',
						'maxlength' => 10,
						'value' => '60s'
					),
					'phpfpm_reqslowtimeout' => array(
						'visible' => (\Froxlor\Settings::Get('phpfpm.enabled') == 1 ? true : false),
						'label' => \Froxlor\Frontend\UI::getLng('admin.phpsettings.request_slowlog_timeout'),
						'type' => 'text',
						'maxlength' => 10,
						'value' => '5s'
					),
					'phpfpm_pass_authorizationheader' => array(
						'visible' => (\Froxlor\Settings::Get('phpfpm.enabled') == 1 ? true : false),
						'label' => \Froxlor\Frontend\UI::getLng('admin.phpsettings.pass_authorizationheader'),
						'type' => 'checkbox',
						'values' => array(
							array(
								'label' => \Froxlor\Frontend\UI::getLng('panel.yes'),
								'value' => '1'
							)
						),
						'value' => array()
					),
					'override_fpmconfig' => array(
						'visible' => (\Froxlor\Settings::Get('phpfpm.enabled') == 1 ? true : false),
						'label' => \Froxlor\Frontend\UI::getLng('serversettings.phpfpm_settings.override_fpmconfig'),
						'type' => 'checkbox',
						'values' => array(
							array(
								'label' => \Froxlor\Frontend\UI::getLng('panel.yes'),
								'value' => '1'
							)
						),
						'value' => array()
					),
					'pm' => array(
						'visible' => (\Froxlor\Settings::Get('phpfpm.enabled') == 1 ? true : false),
						'label' => \Froxlor\Frontend\UI::getLng('serversettings.phpfpm_settings.pm'),
						'desc' => \Froxlor\Frontend\UI::getLng('serversettings.phpfpm_settings.override_fpmconfig_addinfo'),
						'type' => 'select',
						'select_var' => $pm_select
					),
					'max_children' => array(
						'visible' => (\Froxlor\Settings::Get('phpfpm.enabled') == 1 ? true : false),
						'label' => \Froxlor\Frontend\UI::getLng('serversettings.phpfpm_settings.max_children.title'),
						'desc' => \Froxlor\Frontend\UI::getLng('serversettings.phpfpm_settings.max_children.description') . \Froxlor\Frontend\UI::getLng('serversettings.phpfpm_settings.override_fpmconfig_addinfo'),
						'type' => 'int',
						'value' => 1
					),
					'start_servers' => array(
						'visible' => (\Froxlor\Settings::Get('phpfpm.enabled') == 1 ? true : false),
						'label' => \Froxlor\Frontend\UI::getLng('serversettings.phpfpm_settings.start_servers.title'),
						'desc' => \Froxlor\Frontend\UI::getLng('serversettings.phpfpm_settings.start_servers.description') . \Froxlor\Frontend\UI::getLng('serversettings.phpfpm_settings.override_fpmconfig_addinfo'),
						'type' => 'int',
						'value' => 20
					),
					'min_spare_servers' => array(
						'visible' => (\Froxlor\Settings::Get('phpfpm.enabled') == 1 ? true : false),
						'label' => \Froxlor\Frontend\UI::getLng('serversettings.phpfpm_settings.min_spare_servers.title'),
						'desc' => \Froxlor\Frontend\UI::getLng('serversettings.phpfpm_settings.min_spare_servers.description') . \Froxlor\Frontend\UI::getLng('serversettings.phpfpm_settings.override_fpmconfig_addinfo'),
						'type' => 'int',
						'value' => 5
					),
					'max_spare_servers' => array(
						'visible' => (\Froxlor\Settings::Get('phpfpm.enabled') == 1 ? true : false),
						'label' => \Froxlor\Frontend\UI::getLng('serversettings.phpfpm_settings.max_spare_servers.title'),
						'desc' => \Froxlor\Frontend\UI::getLng('serversettings.phpfpm_settings.max_spare_servers.description') . \Froxlor\Frontend\UI::getLng('serversettings.phpfpm_settings.override_fpmconfig_addinfo'),
						'type' => 'int',
						'value' => 35
					),
					'max_requests' => array(
						'visible' => (\Froxlor\Settings::Get('phpfpm.enabled') == 1 ? true : false),
						'label' => \Froxlor\Frontend\UI::getLng('serversettings.phpfpm_settings.max_requests.title'),
						'desc' => \Froxlor\Frontend\UI::getLng('serversettings.phpfpm_settings.max_requests.description') . \Froxlor\Frontend\UI::getLng('serversettings.phpfpm_settings.override_fpmconfig_addinfo'),
						'type' => 'int',
						'value' => 0
					),
					'idle_timeout' => array(
						'visible' => (\Froxlor\Settings::Get('phpfpm.enabled') == 1 ? true : false),
						'label' => \Froxlor\Frontend\UI::getLng('serversettings.phpfpm_settings.idle_timeout.title'),
						'desc' => \Froxlor\Frontend\UI::getLng('serversettings.phpfpm_settings.idle_timeout.description') . \Froxlor\Frontend\UI::getLng('serversettings.phpfpm_settings.override_fpmconfig_addinfo'),
						'type' => 'int',
						'value' => 10
					),
					'limit_extensions' => array(
						'visible' => (\Froxlor\Settings::Get('phpfpm.enabled') == 1 ? true : false),
						'label' => \Froxlor\Frontend\UI::getLng('serversettings.phpfpm_settings.limit_extensions.title'),
						'desc' => \Froxlor\Frontend\UI::getLng('serversettings.phpfpm_settings.limit_extensions.description') . \Froxlor\Frontend\UI::getLng('serversettings.phpfpm_settings.override_fpmconfig_addinfo'),
						'type' => 'text',
						'value' => '.php'
					),
					'phpsettings' => array(
						'style' => 'align-top',
						'label' => \Froxlor\Frontend\UI::getLng('admin.phpsettings.phpinisettings'),
						'type' => 'textarea',
						'cols' => 80,
						'rows' => 20,
						'value' => $default_config['phpsettings'],
						'mandatory' => true
					)
				)
			)
		)
	)
);
