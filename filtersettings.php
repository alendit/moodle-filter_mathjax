<?php

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    $settings->add(new admin_setting_configtext('filter_mathjax_distroothttp',
                       get_string('distroothttp', 'filter_mathjax'),
                       get_string('distroothttp_descr', 'filter_mathjax'), ''));
    $settings->add(new admin_setting_configtext('filter_mathjax_distroothttps',
                       get_string('distroothttps', 'filter_mathjax'),
                       get_string('distroothttps_descr', 'filter_mathjax'), ''));
    $settings->add(new admin_setting_configcheckbox('filter_mathjax_bracket',
                   get_string('bracket', 'filter_mathjax'),
                   get_string('bracket_descr', 'filter_mathjax'), 1));
    $settings->add(new admin_setting_configcheckbox('filter_mathjax_singledollar',
                       get_string('singledollar', 'filter_mathjax'),
                       get_string('singledollar_descr', 'filter_mathjax'), ''));
    $settings->add(new admin_setting_configcheckbox('filter_mathjax_doubledollar',
               get_string('doubledollar', 'filter_mathjax'),
               get_string('doubledollar_descr', 'filter_mathjax'), 1));

}
