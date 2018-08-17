define([
    'jquery',
    'jquery/ui',
    'mage/form' // usually widget can be found in /lib/web/mage dir
], function($){

    $.widget('<your_namespace>.<your_widget_name>', $.mage.<widget.name>, { ... });

    return $.<your_namespace>.<your_widget_name>;
});