<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/_partial/channels' => [[['_route' => 'sylius_admin_partial_channel_index', '_controller' => 'sylius.controller.channel:indexAction', '_sylius' => ['repository' => ['method' => 'findAll'], 'template' => '$template', 'permission' => true]], null, ['GET' => 0], null, true, false, null]],
        '/admin/_partial/taxons/tree' => [[['_route' => 'sylius_admin_partial_taxon_tree', '_controller' => 'sylius.controller.taxon:indexAction', '_sylius' => ['template' => '$template', 'repository' => ['method' => 'findRootNodes'], 'permission' => true]], null, ['GET' => 0], null, false, false, null]],
        '/admin/ajax/taxons/root-nodes' => [[['_route' => 'sylius_admin_ajax_taxon_root_nodes', '_controller' => 'sylius.controller.taxon:indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Autocomplete'], 'permission' => true, 'repository' => ['method' => 'findRootNodes']]], null, ['GET' => 0], null, false, false, null]],
        '/admin/ajax/taxons/leafs' => [[['_route' => 'sylius_admin_ajax_taxon_leafs', '_controller' => 'sylius.controller.taxon:indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Autocomplete'], 'permission' => true, 'repository' => ['method' => 'findChildren', 'arguments' => ['parentCode' => '$parentCode']]]], null, ['GET' => 0], null, false, false, null]],
        '/admin/ajax/taxons/leaf' => [[['_route' => 'sylius_admin_ajax_taxon_by_code', '_controller' => 'sylius.controller.taxon:indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Autocomplete'], 'permission' => true, 'repository' => ['method' => 'findBy', 'arguments' => [['code' => '$code']]]]], null, ['GET' => 0], null, false, false, null]],
        '/admin/ajax/taxons/search' => [[['_route' => 'sylius_admin_ajax_taxon_by_name_phrase', '_controller' => 'sylius.controller.taxon:indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Autocomplete'], 'permission' => true, 'repository' => ['method' => 'findByNamePart', 'arguments' => ['phrase' => '$phrase', 'locale' => null, 'limit' => 25]]]], null, ['GET' => 0], null, false, false, null]],
        '/admin/ajax/taxons/generate-slug' => [[['_route' => 'sylius_admin_ajax_generate_taxon_slug', '_controller' => 'sylius.controller.taxon_slug:generateAction', '_format' => 'json'], null, ['GET' => 0], null, true, false, null]],
        '/admin/ajax/products/generate-slug' => [[['_route' => 'sylius_admin_ajax_generate_product_slug', '_controller' => 'sylius.controller.product_slug:generateAction', '_format' => 'json'], null, ['GET' => 0], null, true, false, null]],
        '/admin/ajax/products/search' => [[['_route' => 'sylius_admin_ajax_product_by_name_phrase', '_controller' => 'sylius.controller.product:indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Autocomplete'], 'permission' => true, 'repository' => ['method' => 'findByNamePart', 'arguments' => ['phrase' => '$phrase', 'locale' => 'expr:service(\'sylius.context.locale\').getLocaleCode()', 'limit' => 25]]]], null, ['GET' => 0], null, false, false, null]],
        '/admin/ajax/products/code' => [[['_route' => 'sylius_admin_ajax_product_by_code', '_controller' => 'sylius.controller.product:indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Autocomplete'], 'permission' => true, 'repository' => ['method' => 'findBy', 'arguments' => [['code' => '$code']]]]], null, ['GET' => 0], null, false, false, null]],
        '/admin/ajax/products' => [[['_route' => 'sylius_admin_ajax_product_index', '_controller' => 'sylius.controller.product:indexAction', '_format' => 'json', '_sylius' => ['permission' => true, 'grid' => 'sylius_admin_product']], null, ['GET' => 0], null, true, false, null]],
        '/admin/ajax/product-taxons/update' => [[['_route' => 'sylius_admin_ajax_product_taxons_update_position', '_controller' => 'sylius.controller.product_taxon:updatePositionsAction', '_format' => 'json', '_sylius' => ['permission' => true]], null, ['PUT' => 0], null, false, false, null]],
        '/admin/ajax/product-variants/update' => [[['_route' => 'sylius_admin_ajax_product_variants_update_position', '_controller' => 'sylius.controller.product_variant:updatePositionsAction', '_format' => 'json', '_sylius' => ['permission' => true]], null, ['PUT' => 0], null, false, false, null]],
        '/admin/ajax/product-variants/search' => [[['_route' => 'sylius_admin_ajax_product_variants_by_phrase', '_controller' => 'sylius.controller.product_variant:indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Autocomplete'], 'permission' => true, 'repository' => ['method' => 'findByPhraseAndProductCode', 'arguments' => ['phrase' => '$phrase', 'locale' => 'expr:service(\'sylius.context.locale\').getLocaleCode()', 'productCode' => '$productCode']]]], null, ['GET' => 0], null, false, false, null]],
        '/admin/ajax/product-variants' => [[['_route' => 'sylius_admin_ajax_product_variants_by_codes', '_controller' => 'sylius.controller.product_variant:indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Autocomplete'], 'permission' => true, 'repository' => ['method' => 'findByCodesAndProductCode', 'arguments' => ['$code', '$productCode']]]], null, ['GET' => 0], null, true, false, null]],
        '/admin/ajax/render-province-form' => [[['_route' => 'sylius_admin_ajax_render_province_form', '_controller' => 'sylius.controller.province:choiceOrTextFieldFormAction', '_sylius' => ['template' => '@SyliusAdmin/Common/Form/_province.html.twig']], null, null, null, false, false, null]],
        '/admin/ajax/get-version' => [[['_route' => 'sylius_admin_ajax_get_version', '_controller' => 'sylius.controller.admin.notification:getVersionAction', '_format' => 'json'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'sylius_admin_dashboard', '_controller' => 'sylius.controller.admin.dashboard:indexAction'], null, null, null, true, false, null]],
        '/admin/users' => [[['_route' => 'sylius_admin_admin_user_index', '_controller' => 'sylius.controller.admin_user:indexAction', '_sylius' => ['grid' => 'sylius_admin_admin_user', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_users_able_to_access_administration_panel', 'templates' => ['form' => '@SyliusAdmin/AdminUser/_form.html.twig'], 'icon' => 'lock']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/users/new' => [[['_route' => 'sylius_admin_admin_user_create', '_controller' => 'sylius.controller.admin_user:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_admin_user_index', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_users_able_to_access_administration_panel', 'templates' => ['form' => '@SyliusAdmin/AdminUser/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/users/bulk-delete' => [[['_route' => 'sylius_admin_admin_user_bulk_delete', '_controller' => 'sylius.controller.admin_user:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_users_able_to_access_administration_panel', 'templates' => ['form' => '@SyliusAdmin/AdminUser/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/channels' => [[['_route' => 'sylius_admin_channel_index', '_controller' => 'sylius.controller.channel:indexAction', '_sylius' => ['grid' => 'sylius_admin_channel', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.configure_channels_available_in_your_store', 'templates' => ['form' => '@SyliusAdmin/Channel/_form.html.twig'], 'icon' => 'share alternate']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/channels/new' => [[['_route' => 'sylius_admin_channel_create', '_controller' => 'sylius.controller.channel:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_channel_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.configure_channels_available_in_your_store', 'templates' => ['form' => '@SyliusAdmin/Channel/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/channels/bulk-delete' => [[['_route' => 'sylius_admin_channel_bulk_delete', '_controller' => 'sylius.controller.channel:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.configure_channels_available_in_your_store', 'templates' => ['form' => '@SyliusAdmin/Channel/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/countries' => [[['_route' => 'sylius_admin_country_index', '_controller' => 'sylius.controller.country:indexAction', '_sylius' => ['grid' => 'sylius_admin_country', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_destinations', 'templates' => ['form' => '@SyliusAdmin/Country/_form.html.twig'], 'icon' => 'flag']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/countries/new' => [[['_route' => 'sylius_admin_country_create', '_controller' => 'sylius.controller.country:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_country_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_destinations', 'templates' => ['form' => '@SyliusAdmin/Country/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/countries/bulk-delete' => [[['_route' => 'sylius_admin_country_bulk_delete', '_controller' => 'sylius.controller.country:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_destinations', 'templates' => ['form' => '@SyliusAdmin/Country/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/currencies' => [[['_route' => 'sylius_admin_currency_index', '_controller' => 'sylius.controller.currency:indexAction', '_sylius' => ['grid' => 'sylius_admin_currency', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_currencies_available_in_the_store', 'templates' => ['form' => '@SyliusAdmin/Currency/_form.html.twig'], 'icon' => 'dollar']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/currencies/new' => [[['_route' => 'sylius_admin_currency_create', '_controller' => 'sylius.controller.currency:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_currency_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_currencies_available_in_the_store', 'templates' => ['form' => '@SyliusAdmin/Currency/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/currencies/bulk-delete' => [[['_route' => 'sylius_admin_currency_bulk_delete', '_controller' => 'sylius.controller.currency:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_currencies_available_in_the_store', 'templates' => ['form' => '@SyliusAdmin/Currency/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/customers' => [[['_route' => 'sylius_admin_customer_index', '_controller' => 'sylius.controller.customer:indexAction', '_sylius' => ['grid' => 'sylius_admin_customer', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_your_customers', 'templates' => ['form' => '@SyliusAdmin/Customer/_form.html.twig'], 'icon' => 'users']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/customers/new' => [[['_route' => 'sylius_admin_customer_create', '_controller' => 'sylius.controller.customer:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_customer_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_your_customers', 'templates' => ['form' => '@SyliusAdmin/Customer/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/customers/bulk-delete' => [[['_route' => 'sylius_admin_customer_bulk_delete', '_controller' => 'sylius.controller.customer:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_your_customers', 'templates' => ['form' => '@SyliusAdmin/Customer/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/orders-statistics' => [[['_route' => 'sylius_admin_customer_orders_statistics', '_controller' => 'sylius.controller.customer_statistics:renderAction', '_sylius' => ['section' => 'admin', 'permission' => true]], null, ['GET' => 0], null, false, false, null]],
        '/admin/customer-groups' => [[['_route' => 'sylius_admin_customer_group_index', '_controller' => 'sylius.controller.customer_group:indexAction', '_sylius' => ['grid' => 'sylius_admin_customer_group', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['header' => 'sylius.ui.customer_groups', 'subheader' => 'sylius.ui.manage_customer_groups', 'templates' => ['form' => '@SyliusAdmin/CustomerGroup/_form.html.twig'], 'icon' => 'archive']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/customer-groups/new' => [[['_route' => 'sylius_admin_customer_group_create', '_controller' => 'sylius.controller.customer_group:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_customer_group_update', 'permission' => true, 'vars' => ['header' => 'sylius.ui.customer_groups', 'subheader' => 'sylius.ui.manage_customer_groups', 'templates' => ['form' => '@SyliusAdmin/CustomerGroup/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/customer-groups/bulk-delete' => [[['_route' => 'sylius_admin_customer_group_bulk_delete', '_controller' => 'sylius.controller.customer_group:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['header' => 'sylius.ui.customer_groups', 'subheader' => 'sylius.ui.manage_customer_groups', 'templates' => ['form' => '@SyliusAdmin/CustomerGroup/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/exchange-rates' => [[['_route' => 'sylius_admin_exchange_rate_index', '_controller' => 'sylius.controller.exchange_rate:indexAction', '_sylius' => ['grid' => 'sylius_admin_exchange_rate', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_exchange_rates', 'templates' => ['form' => '@SyliusAdmin/ExchangeRate/_form.html.twig'], 'icon' => 'sliders']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/exchange-rates/new' => [[['_route' => 'sylius_admin_exchange_rate_create', '_controller' => 'sylius.controller.exchange_rate:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_exchange_rate_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_exchange_rates', 'templates' => ['form' => '@SyliusAdmin/ExchangeRate/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/exchange-rates/bulk-delete' => [[['_route' => 'sylius_admin_exchange_rate_bulk_delete', '_controller' => 'sylius.controller.exchange_rate:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_exchange_rates', 'templates' => ['form' => '@SyliusAdmin/ExchangeRate/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/inventory' => [[['_route' => 'sylius_admin_inventory_index', '_controller' => 'sylius.controller.product_variant:indexAction', '_sylius' => ['template' => '@SyliusAdmin/Crud/index.html.twig', 'grid' => 'sylius_admin_inventory', 'section' => 'admin', 'permission' => true, 'vars' => ['icon' => 'history', 'templates' => ['breadcrumb' => '@SyliusAdmin/Inventory/Index/_breadcrumb.html.twig'], 'header' => 'sylius.ui.inventory', 'subheader' => 'sylius.ui.manage_inventory']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/locales' => [[['_route' => 'sylius_admin_locale_index', '_controller' => 'sylius.controller.locale:indexAction', '_sylius' => ['grid' => 'sylius_admin_locale', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_languages_available_in_the_store', 'templates' => ['form' => '@SyliusAdmin/Locale/_form.html.twig'], 'icon' => 'translate']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/locales/new' => [[['_route' => 'sylius_admin_locale_create', '_controller' => 'sylius.controller.locale:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_locale_index', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_languages_available_in_the_store', 'templates' => ['form' => '@SyliusAdmin/Locale/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/locales/bulk-delete' => [[['_route' => 'sylius_admin_locale_bulk_delete', '_controller' => 'sylius.controller.locale:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_languages_available_in_the_store', 'templates' => ['form' => '@SyliusAdmin/Locale/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/orders' => [[['_route' => 'sylius_admin_order_index', '_controller' => 'sylius.controller.order:indexAction', '_sylius' => ['grid' => 'sylius_admin_order', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.process_your_orders', 'icon' => 'cart']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/payments' => [[['_route' => 'sylius_admin_payment_index', '_controller' => 'sylius.controller.payment:indexAction', '_sylius' => ['grid' => 'sylius_admin_payment', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_payments', 'icon' => 'payment']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/payment-methods' => [[['_route' => 'sylius_admin_payment_method_index', '_controller' => 'sylius.controller.payment_method:indexAction', '_sylius' => ['grid' => 'sylius_admin_payment_method', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_payment_methods_available_to_your_customers', 'templates' => ['form' => '@SyliusAdmin/PaymentMethod/_form.html.twig'], 'icon' => 'payment']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/payment-methods/bulk-delete' => [[['_route' => 'sylius_admin_payment_method_bulk_delete', '_controller' => 'sylius.controller.payment_method:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_payment_methods_available_to_your_customers', 'templates' => ['form' => '@SyliusAdmin/PaymentMethod/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/payment-gateways' => [[['_route' => 'sylius_admin_get_payment_gateways', '_controller' => 'sylius.controller.payment_method:getPaymentGatewaysAction', 'template' => '@SyliusAdmin/PaymentMethod/Gateways/paymentGateways.html.twig'], null, ['GET' => 0], null, false, false, null]],
        '/admin/products/bulk-delete' => [[['_route' => 'sylius_admin_product_bulk_delete', '_controller' => 'sylius.controller.product:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_your_product_catalog', 'templates' => ['form' => '@SyliusAdmin/Product/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/products' => [[['_route' => 'sylius_admin_product_index', '_controller' => 'sylius.controller.product:indexAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'grid' => 'sylius_admin_product', 'template' => '@SyliusAdmin/Product/index.html.twig', 'vars' => ['subheader' => 'sylius.ui.manage_your_product_catalog', 'icon' => 'cube']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/products/new/simple' => [[['_route' => 'sylius_admin_product_create_simple', '_controller' => 'sylius.controller.product:createAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'factory' => ['method' => 'createWithVariant'], 'template' => '@SyliusAdmin/Crud/create.html.twig', 'redirect' => 'sylius_admin_product_update', 'vars' => ['subheader' => 'sylius.ui.manage_your_product_catalog', 'templates' => ['form' => '@SyliusAdmin/Product/_form.html.twig'], 'route' => ['name' => 'sylius_admin_product_create_simple']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/product-association-types' => [[['_route' => 'sylius_admin_product_association_type_index', '_controller' => 'sylius.controller.product_association_type:indexAction', '_sylius' => ['grid' => 'sylius_admin_product_association_type', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_association_types_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAssociationType/_form.html.twig'], 'icon' => 'tasks']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/product-association-types/new' => [[['_route' => 'sylius_admin_product_association_type_create', '_controller' => 'sylius.controller.product_association_type:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_product_association_type_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_association_types_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAssociationType/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/product-association-types/bulk-delete' => [[['_route' => 'sylius_admin_product_association_type_bulk_delete', '_controller' => 'sylius.controller.product_association_type:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_association_types_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAssociationType/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/product-attributes' => [[['_route' => 'sylius_admin_product_attribute_index', '_controller' => 'sylius.controller.product_attribute:indexAction', '_sylius' => ['grid' => 'sylius_admin_product_attribute', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_attributes_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAttribute/_form.html.twig'], 'icon' => 'cubes']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/product-attributes/bulk-delete' => [[['_route' => 'sylius_admin_product_attribute_bulk_delete', '_controller' => 'sylius.controller.product_attribute:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_attributes_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAttribute/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/attribute-types' => [[['_route' => 'sylius_admin_get_attribute_types', '_controller' => 'sylius.controller.product_attribute:getAttributeTypesAction', 'template' => '@SyliusAdmin/ProductAttribute/Types/attributeTypes.html.twig'], null, ['GET' => 0], null, false, false, null]],
        '/admin/attributes' => [[['_route' => 'sylius_admin_get_product_attributes', '_controller' => 'sylius.controller.product_attribute:renderAttributesAction', 'template' => '@SyliusAdmin/Product/Attribute/attributeChoice.html.twig'], null, ['GET' => 0], null, false, false, null]],
        '/admin/attribute-forms' => [[['_route' => 'sylius_admin_render_attribute_forms', '_controller' => 'sylius.controller.product_attribute:renderAttributeValueFormsAction', 'template' => '@SyliusAdmin/Product/Attribute/attributeValues.html.twig'], null, ['GET' => 0], null, false, false, null]],
        '/admin/product-options' => [[['_route' => 'sylius_admin_product_option_index', '_controller' => 'sylius.controller.product_option:indexAction', '_sylius' => ['grid' => 'sylius_admin_product_option', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_configuration_options_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductOption/_form.html.twig'], 'icon' => 'options']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/product-options/new' => [[['_route' => 'sylius_admin_product_option_create', '_controller' => 'sylius.controller.product_option:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_product_option_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_configuration_options_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductOption/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/product-options/bulk-delete' => [[['_route' => 'sylius_admin_product_option_bulk_delete', '_controller' => 'sylius.controller.product_option:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_configuration_options_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductOption/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/product-reviews' => [[['_route' => 'sylius_admin_product_review_index', '_controller' => 'sylius.controller.product_review:indexAction', '_sylius' => ['grid' => 'sylius_admin_product_review', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_reviews_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductReview/_form.html.twig'], 'icon' => 'newspaper']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/product-reviews/bulk-delete' => [[['_route' => 'sylius_admin_product_review_bulk_delete', '_controller' => 'sylius.controller.product_review:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_reviews_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductReview/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/product-taxons/update' => [[['_route' => 'sylius_admin_product_taxons_update_position', '_controller' => 'sylius.controller.product_taxon:updateProductTaxonsPositionsAction'], null, ['PUT' => 0], null, false, false, null]],
        '/admin/promotions' => [[['_route' => 'sylius_admin_promotion_index', '_controller' => 'sylius.controller.promotion:indexAction', '_sylius' => ['grid' => 'sylius_admin_promotion', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns', 'templates' => ['form' => '@SyliusAdmin/Promotion/_form.html.twig'], 'icon' => 'in cart']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/promotions/new' => [[['_route' => 'sylius_admin_promotion_create', '_controller' => 'sylius.controller.promotion:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_promotion_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns', 'templates' => ['form' => '@SyliusAdmin/Promotion/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/promotions/bulk-delete' => [[['_route' => 'sylius_admin_promotion_bulk_delete', '_controller' => 'sylius.controller.promotion:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns', 'templates' => ['form' => '@SyliusAdmin/Promotion/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/login' => [[['_route' => 'sylius_admin_login', '_controller' => 'sylius.controller.security:loginAction', '_sylius' => ['template' => '@SyliusAdmin/Security/login.html.twig', 'permission' => true, 'logged_in_route' => 'sylius_admin_dashboard']], null, ['GET' => 0], null, false, false, null]],
        '/admin/login-check' => [[['_route' => 'sylius_admin_login_check', '_controller' => 'sylius.controller.security:checkAction'], null, ['POST' => 0], null, false, false, null]],
        '/admin/logout' => [[['_route' => 'sylius_admin_logout'], null, ['GET' => 0], null, false, false, null]],
        '/admin/shipments' => [[['_route' => 'sylius_admin_shipment_index', '_controller' => 'sylius.controller.shipment:indexAction', '_sylius' => ['grid' => 'sylius_admin_shipment', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipments', 'icon' => 'truck']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/shipping-categories' => [[['_route' => 'sylius_admin_shipping_category_index', '_controller' => 'sylius.controller.shipping_category:indexAction', '_sylius' => ['grid' => 'sylius_admin_shipping_category', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_categories_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingCategory/_form.html.twig'], 'icon' => 'list layout']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/shipping-categories/new' => [[['_route' => 'sylius_admin_shipping_category_create', '_controller' => 'sylius.controller.shipping_category:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_shipping_category_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_categories_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingCategory/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/shipping-categories/bulk-delete' => [[['_route' => 'sylius_admin_shipping_category_bulk_delete', '_controller' => 'sylius.controller.shipping_category:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_categories_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingCategory/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/shipping-methods' => [[['_route' => 'sylius_admin_shipping_method_index', '_controller' => 'sylius.controller.shipping_method:indexAction', '_sylius' => ['grid' => 'sylius_admin_shipping_method', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_methods_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingMethod/_form.html.twig'], 'icon' => 'shipping']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/shipping-methods/new' => [[['_route' => 'sylius_admin_shipping_method_create', '_controller' => 'sylius.controller.shipping_method:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_shipping_method_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_methods_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingMethod/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/shipping-methods/bulk-delete' => [[['_route' => 'sylius_admin_shipping_method_bulk_delete', '_controller' => 'sylius.controller.shipping_method:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_methods_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingMethod/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/taxons/new' => [[['_route' => 'sylius_admin_taxon_create', '_controller' => 'sylius.controller.taxon:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Taxon/create.html.twig', 'redirect' => 'sylius_admin_taxon_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_categorization_of_your_products', 'templates' => ['form' => '@SyliusAdmin/Taxon/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/taxons/bulk-delete' => [[['_route' => 'sylius_admin_taxon_bulk_delete', '_controller' => 'sylius.controller.taxon:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_categorization_of_your_products', 'templates' => ['form' => '@SyliusAdmin/Taxon/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/taxons' => [[['_route' => 'sylius_admin_taxon_index', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sylius_admin_taxon_create', 'permanent' => true], null, ['GET' => 0], null, true, false, null]],
        '/admin/tax-categories' => [[['_route' => 'sylius_admin_tax_category_index', '_controller' => 'sylius.controller.tax_category:indexAction', '_sylius' => ['grid' => 'sylius_admin_tax_category', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxCategory/_form.html.twig'], 'icon' => 'tags']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/tax-categories/new' => [[['_route' => 'sylius_admin_tax_category_create', '_controller' => 'sylius.controller.tax_category:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_tax_category_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxCategory/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/tax-categories/bulk-delete' => [[['_route' => 'sylius_admin_tax_category_bulk_delete', '_controller' => 'sylius.controller.tax_category:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxCategory/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/tax-rates' => [[['_route' => 'sylius_admin_tax_rate_index', '_controller' => 'sylius.controller.tax_rate:indexAction', '_sylius' => ['grid' => 'sylius_admin_tax_rate', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxRate/_form.html.twig'], 'icon' => 'money']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/tax-rates/new' => [[['_route' => 'sylius_admin_tax_rate_create', '_controller' => 'sylius.controller.tax_rate:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_tax_rate_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxRate/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/tax-rates/bulk-delete' => [[['_route' => 'sylius_admin_tax_rate_bulk_delete', '_controller' => 'sylius.controller.tax_rate:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxRate/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/zones' => [[['_route' => 'sylius_admin_zone_index', '_controller' => 'sylius.controller.zone:indexAction', '_sylius' => ['grid' => 'sylius_admin_zone', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_geographical_zones', 'templates' => ['form' => '@SyliusAdmin/Zone/_form.html.twig'], 'icon' => 'world']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/zones/bulk-delete' => [[['_route' => 'sylius_admin_zone_bulk_delete', '_controller' => 'sylius.controller.zone:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_geographical_zones', 'templates' => ['form' => '@SyliusAdmin/Zone/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/api/oauth/v2/token' => [[['_route' => 'fos_oauth_server_token', '_controller' => 'fos_oauth_server.controller.token:tokenAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/payment/capture/session-token' => [[['_route' => 'payum_capture_do_session', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\CaptureController::doSessionTokenAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'sylius_shop_default_locale', '_controller' => 'sylius.controller.shop.locale_switch:switchAction'], null, ['GET' => 0], null, false, false, null]],
        '/test/main' => [[['_route' => 'sylius_test_plugin_main', 'template' => '@SyliusTestPlugin/main.html.twig', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:61)'
                    .'|([A-z0-9_-]*)/(.+)(*:86)'
                .')'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|_partial/(?'
                            .'|address/log\\-entry/([^/]++)(*:146)'
                            .'|customers/(?'
                                .'|latest/([^/]++)(*:182)'
                                .'|([^/]++)(*:198)'
                            .')'
                            .'|orders/(?'
                                .'|latest/([^/]++)(?'
                                    .'|(*:235)'
                                    .'|/([^/]++)(*:252)'
                                .')'
                                .'|([^/]++)/shipments/([^/]++)/ship(*:293)'
                            .')'
                            .'|pro(?'
                                .'|ducts/([^/]++)(*:322)'
                                .'|motions/([^/]++)(*:346)'
                            .')'
                            .'|taxons/([^/]++)(*:370)'
                        .')'
                        .'|ajax/taxons/([^/]++)/move(*:404)'
                        .'|impersonate(?:/([^/]++))?(*:437)'
                        .'|users/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:470)'
                                .'|remove\\-avatar(*:492)'
                            .')'
                            .'|(*:501)'
                        .')'
                        .'|c(?'
                            .'|hannels/([^/]++)(?'
                                .'|/edit(*:538)'
                                .'|(*:546)'
                            .')'
                            .'|ountries/([^/]++)/edit(*:577)'
                            .'|u(?'
                                .'|rrencies/([^/]++)/edit(*:611)'
                                .'|stomer(?'
                                    .'|s/([^/]++)(?'
                                        .'|/(?'
                                            .'|edit(*:649)'
                                            .'|orders(*:663)'
                                        .')'
                                        .'|(*:672)'
                                    .')'
                                    .'|\\-groups/([^/]++)(?'
                                        .'|/edit(*:706)'
                                        .'|(*:714)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|exchange\\-rates/([^/]++)(?'
                            .'|/edit(*:758)'
                            .'|(*:766)'
                        .')'
                        .'|locales/([^/]++)/edit(*:796)'
                        .'|orders/([^/]++)(?'
                            .'|(*:822)'
                            .'|/(?'
                                .'|history(*:841)'
                                .'|edit(*:853)'
                                .'|cancel(*:867)'
                                .'|payments/([^/]++)/(?'
                                    .'|complete(*:904)'
                                    .'|refund(*:918)'
                                .')'
                            .')'
                        .')'
                        .'|([^/]++)/(?'
                            .'|ship(*:945)'
                            .'|resend\\-confirmation\\-email(*:980)'
                        .')'
                        .'|p(?'
                            .'|ayment(?'
                                .'|s/([^/]++)/complete(*:1021)'
                                .'|\\-methods/(?'
                                    .'|([^/]++)(?'
                                        .'|/edit(*:1059)'
                                        .'|(*:1068)'
                                    .')'
                                    .'|new/([^/]++)(*:1090)'
                                .')'
                            .')'
                            .'|ro(?'
                                .'|duct(?'
                                    .'|s/(?'
                                        .'|([^/]++)(?'
                                            .'|(*:1129)'
                                            .'|/edit(*:1143)'
                                        .')'
                                        .'|taxon/([^/]++)(*:1167)'
                                        .'|new(*:1179)'
                                        .'|([^/]++)(?'
                                            .'|(*:1199)'
                                            .'|/variants(?'
                                                .'|(*:1220)'
                                                .'|/(?'
                                                    .'|new(*:1236)'
                                                    .'|([^/]++)/edit(*:1258)'
                                                    .'|bulk\\-delete(*:1279)'
                                                    .'|([^/]++)(*:1296)'
                                                    .'|generate(*:1313)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|\\-(?'
                                        .'|a(?'
                                            .'|ssociation\\-types/([^/]++)(?'
                                                .'|/edit(*:1369)'
                                                .'|(*:1378)'
                                            .')'
                                            .'|ttributes/([^/]++)(?'
                                                .'|/(?'
                                                    .'|edit(*:1417)'
                                                    .'|new(*:1429)'
                                                .')'
                                                .'|(*:1439)'
                                            .')'
                                        .')'
                                        .'|options/([^/]++)(?'
                                            .'|/edit(*:1474)'
                                            .'|(*:1483)'
                                        .')'
                                        .'|review(?'
                                            .'|s/([^/]++)(?'
                                                .'|/edit(*:1520)'
                                                .'|(*:1529)'
                                            .')'
                                            .'|/([^/]++)/(?'
                                                .'|accept(*:1558)'
                                                .'|reject(*:1573)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|motions/([^/]++)(?'
                                    .'|/(?'
                                        .'|edit(*:1613)'
                                        .'|coupons(?'
                                            .'|(*:1632)'
                                            .'|/(?'
                                                .'|new(*:1648)'
                                                .'|([^/]++)/edit(*:1670)'
                                                .'|generate(*:1687)'
                                                .'|bulk\\-delete(*:1708)'
                                                .'|([^/]++)(*:1725)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|(*:1737)'
                                .')'
                            .')'
                        .')'
                        .'|sh(?'
                            .'|ip(?'
                                .'|ments/([^/]++)(?'
                                    .'|/(?'
                                        .'|ship(*:1784)'
                                        .'|resend\\-confirmation\\-email(*:1820)'
                                    .')'
                                    .'|(*:1830)'
                                .')'
                                .'|ping\\-(?'
                                    .'|categories/([^/]++)(?'
                                        .'|/edit(*:1876)'
                                        .'|(*:1885)'
                                    .')'
                                    .'|methods/([^/]++)(?'
                                        .'|/(?'
                                            .'|edit(*:1922)'
                                            .'|archive(*:1938)'
                                        .')'
                                        .'|(*:1948)'
                                    .')'
                                .')'
                            .')'
                            .'|op\\-user/([^/]++)(*:1977)'
                        .')'
                        .'|tax(?'
                            .'|ons/(?'
                                .'|([^/]++)(?'
                                    .'|/edit(*:2016)'
                                    .'|(*:2025)'
                                .')'
                                .'|new/([^/]++)(*:2047)'
                            .')'
                            .'|\\-(?'
                                .'|categories/([^/]++)(?'
                                    .'|/edit(*:2089)'
                                    .'|(*:2098)'
                                .')'
                                .'|rates/([^/]++)(?'
                                    .'|/edit(*:2130)'
                                    .'|(*:2139)'
                                .')'
                            .')'
                        .')'
                        .'|zones/(?'
                            .'|([^/]++)(?'
                                .'|/edit(*:2176)'
                                .'|(*:2185)'
                            .')'
                            .'|(country|province|zone)/new(*:2222)'
                        .')'
                    .')'
                    .'|pi/v([^/]++)/(?'
                        .'|orders(?'
                            .'|/([^/]++)(?'
                                .'|/(?'
                                    .'|adjustments(?'
                                        .'|(*:2288)'
                                        .'|/([^/]++)(?'
                                            .'|(*:2309)'
                                        .')'
                                    .')'
                                    .'|cancel(*:2326)'
                                    .'|shipments/([^/]++)/ship(*:2358)'
                                    .'|payments/([^/]++)/complete(*:2393)'
                                .')'
                                .'|(*:2403)'
                            .')'
                            .'|(*:2413)'
                        .')'
                        .'|users(?'
                            .'|(*:2431)'
                            .'|/([^/]++)(?'
                                .'|(*:2452)'
                            .')'
                        .')'
                        .'|c(?'
                            .'|arts(?'
                                .'|(*:2474)'
                                .'|/([^/]++)(?'
                                    .'|(*:2495)'
                                    .'|/items(?'
                                        .'|(*:2513)'
                                        .'|/([^/]++)(?'
                                            .'|(*:2534)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|h(?'
                                .'|annels(?'
                                    .'|(*:2560)'
                                    .'|/([^/]++)(?'
                                        .'|(*:2581)'
                                    .')'
                                .')'
                                .'|eckouts/(?'
                                    .'|([^/]++)(*:2611)'
                                    .'|addressing/([^/]++)(*:2639)'
                                    .'|select\\-(?'
                                        .'|shipping/([^/]++)(?'
                                            .'|(*:2679)'
                                        .')'
                                        .'|payment/([^/]++)(?'
                                            .'|(*:2708)'
                                        .')'
                                    .')'
                                    .'|complete/([^/]++)(*:2736)'
                                .')'
                            .')'
                            .'|ountries(?'
                                .'|(*:2758)'
                                .'|/([^/]++)(?'
                                    .'|(*:2779)'
                                    .'|/provinces/([^/]++)(?'
                                        .'|(*:2810)'
                                    .')'
                                .')'
                            .')'
                            .'|u(?'
                                .'|rrencies(?'
                                    .'|(*:2837)'
                                    .'|/([^/]++)(?'
                                        .'|(*:2858)'
                                    .')'
                                .')'
                                .'|stomers(?'
                                    .'|(*:2879)'
                                    .'|/([^/]++)(?'
                                        .'|(*:2900)'
                                        .'|/orders(*:2916)'
                                    .')'
                                    .'|(*:2926)'
                                .')'
                            .')'
                        .')'
                        .'|exchange\\-rates(?'
                            .'|(*:2956)'
                            .'|/([^/\\-]++)\\-([^/]++)(?'
                                .'|(*:2989)'
                            .')'
                        .')'
                        .'|locales(?'
                            .'|(*:3010)'
                            .'|/([^/]++)(?'
                                .'|(*:3031)'
                            .')'
                        .')'
                        .'|p(?'
                            .'|ayment(?'
                                .'|\\-methods/([^/]++)(*:3073)'
                                .'|s(?'
                                    .'|(*:3086)'
                                    .'|/([^/]++)(*:3104)'
                                .')'
                            .')'
                            .'|ro(?'
                                .'|duct(?'
                                    .'|s(?'
                                        .'|(*:3131)'
                                        .'|/([^/]++)(?'
                                            .'|(*:3152)'
                                            .'|/(?'
                                                .'|reviews(?'
                                                    .'|(*:3175)'
                                                    .'|/([^/]++)(?'
                                                        .'|(*:3196)'
                                                        .'|/(?'
                                                            .'|accept(*:3215)'
                                                            .'|reject(*:3230)'
                                                        .')'
                                                    .')'
                                                .')'
                                                .'|variants(?'
                                                    .'|(*:3253)'
                                                    .'|/([^/]++)(?'
                                                        .'|(*:3274)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|\\-(?'
                                        .'|a(?'
                                            .'|ttributes(?'
                                                .'|(*:3309)'
                                                .'|/([^/]++)(?'
                                                    .'|(*:3330)'
                                                    .'|(*:3339)'
                                                .')'
                                            .')'
                                            .'|ssociation\\-types(?'
                                                .'|(*:3370)'
                                                .'|/([^/]++)(?'
                                                    .'|(*:3391)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|options(?'
                                            .'|(*:3413)'
                                            .'|/([^/]++)(?'
                                                .'|(*:3434)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|motions(?'
                                    .'|(*:3457)'
                                    .'|/([^/]++)(?'
                                        .'|(*:3478)'
                                        .'|/coupons(?'
                                            .'|(*:3498)'
                                            .'|/([^/]++)(?'
                                                .'|(*:3519)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|tax(?'
                            .'|ons(?'
                                .'|/([^/]++)(?'
                                    .'|/products(*:3567)'
                                    .'|(*:3576)'
                                .')'
                                .'|(*:3586)'
                            .')'
                            .'|\\-(?'
                                .'|categories(?'
                                    .'|(*:3614)'
                                    .'|/([^/]++)(?'
                                        .'|(*:3635)'
                                    .')'
                                .')'
                                .'|rates(?'
                                    .'|(*:3654)'
                                    .'|/([^/]++)(*:3672)'
                                .')'
                            .')'
                        .')'
                        .'|ship(?'
                            .'|ments(?'
                                .'|(*:3699)'
                                .'|/([^/]++)(*:3717)'
                            .')'
                            .'|ping\\-(?'
                                .'|categories(?'
                                    .'|(*:3749)'
                                    .'|/([^/]++)(?'
                                        .'|(*:3770)'
                                    .')'
                                .')'
                                .'|methods/([^/]++)(*:3797)'
                            .')'
                        .')'
                        .'|zones(?'
                            .'|(*:3816)'
                            .'|/([^/]++)(?'
                                .'|(*:3837)'
                                .'|(*:3846)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/ajax/users/check(*:3952)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/ajax/cart/add(*:4051)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/ajax/cart/([^/]++)/remove(*:4162)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/ajax/render\\-province\\-form(*:4275)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/_partial/taxons/by\\-slug/(.+)(*:4390)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/_partial/taxons/by\\-code/([^/]++)(*:4509)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/_partial/taxons/by\\-channel\\-menu\\-taxon(*:4635)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/_partial/cart/summary(*:4742)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/_partial/cart/add\\-item(*:4851)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/_partial/products/latest/([^/]++)(*:4970)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/_partial/products/([^/]++)(*:5082)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/_partial/products/([^/]++)/reviews/latest(?:/([^/]++))?(*:5223)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/_partial/products/([^/]++)/associations/([^/]++)(*:5357)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)(*:5442)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/login(*:5533)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/login\\-check(*:5631)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/logout(*:5723)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/register(*:5817)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/register\\-after\\-checkout/([^/]++)(*:5937)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/forgotten\\-password(*:6042)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/forgotten\\-password/([^/]++)(*:6156)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/verify(*:6248)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/verify/([^/]++)(*:6349)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/products/([^/]++)(*:6452)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/taxons/(.+)(*:6549)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/products/([^/]++)/reviews(*:6660)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/products/([^/]++)/reviews/new(*:6775)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/cart(?'
                    .'|(*:6868)'
                .')'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/cart/([^/]++)/remove(*:6975)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/checkout(*:7069)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/checkout/address(*:7171)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/checkout/select\\-shipping(*:7282)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/checkout/select\\-payment(*:7392)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/checkout/complete(*:7495)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/contact(*:7588)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/order/thank\\-you(*:7690)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/order/([^/]++)/pay(*:7794)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/order/after\\-pay(*:7896)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/order/([^/]++)(*:7996)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/account/orders(*:8096)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/account/orders/([^/]++)(*:8205)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/account/address\\-book(*:8312)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/account/address\\-book/add(*:8423)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/account/address\\-book/([^/]++)/edit(*:8544)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/account/address\\-book/([^/]++)(*:8660)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/account/address\\-book/([^/]++)/set\\-as\\-default(*:8793)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/account(*:8886)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/account/dashboard(*:8989)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/account/profile/edit(*:9095)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/account/change\\-password(*:9205)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/switch\\-currency/([^/]++)(*:9316)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/switch\\-locale/([^/]++)(*:9425)'
                .'|/payment/(?'
                    .'|authorize/([^/]++)(*:9464)'
                    .'|capture/([^/]++)(*:9489)'
                    .'|notify/(?'
                        .'|unsafe/([^/]++)(*:9523)'
                        .'|([^/]++)(*:9540)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        61 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        86 => [[['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null]],
        146 => [[['_route' => 'sylius_admin_partial_address_log_entry_index', '_controller' => 'sylius.controller.address_log_entry:indexAction', '_sylius' => ['template' => '@SyliusUi/Grid/_history.html.twig', 'grid' => 'sylius_admin_address_log_entry', 'section' => 'admin', 'permission' => true]], ['id'], ['GET' => 0], null, false, true, null]],
        182 => [[['_route' => 'sylius_admin_partial_customer_latest', '_controller' => 'sylius.controller.customer:indexAction', '_sylius' => ['repository' => ['method' => 'findLatest', 'arguments' => ['!!int $count']], 'template' => '$template', 'permission' => true]], ['count'], ['GET' => 0], null, false, true, null]],
        198 => [[['_route' => 'sylius_admin_partial_customer_show', '_controller' => 'sylius.controller.customer:showAction', '_sylius' => ['template' => '$template', 'vars' => '$vars', 'permission' => true]], ['id'], ['GET' => 0], null, false, true, null]],
        235 => [[['_route' => 'sylius_admin_partial_order_latest', '_controller' => 'sylius.controller.order:indexAction', '_sylius' => ['repository' => ['method' => 'findLatest', 'arguments' => ['!!int $count']], 'template' => '$template', 'permission' => true]], ['count'], ['GET' => 0], null, false, true, null]],
        252 => [[['_route' => 'sylius_admin_partial_order_latest_in_channel', '_controller' => 'sylius.controller.order:indexAction', '_sylius' => ['repository' => ['method' => 'findLatestInChannel', 'arguments' => ['count' => '!!int $count', 'channel' => 'expr:notFoundOnNull(service(\'sylius.repository.channel\').findOneByCode($channelCode))']], 'template' => '$template', 'permission' => true]], ['channelCode', 'count'], ['GET' => 0], null, false, true, null]],
        293 => [[['_route' => 'sylius_admin_partial_shipment_ship', '_controller' => 'sylius.controller.shipment:updateAction', '_sylius' => ['event' => 'ship', 'repository' => ['method' => 'findOneByOrderId', 'arguments' => ['id' => '$id', 'orderId' => '$orderId']], 'state_machine' => ['graph' => 'sylius_shipment', 'transition' => 'ship'], 'section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Shipment/Partial/_ship.html.twig', 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentShipType', 'vars' => ['route' => ['parameters' => ['orderId' => '$orderId', 'id' => '$id']]]]], ['orderId', 'id'], ['GET' => 0], null, false, false, null]],
        322 => [[['_route' => 'sylius_admin_partial_product_show', '_controller' => 'sylius.controller.product:showAction', '_sylius' => ['template' => '$template', 'vars' => '$vars', 'permission' => true]], ['id'], ['GET' => 0], null, false, true, null]],
        346 => [[['_route' => 'sylius_admin_partial_promotion_show', '_controller' => 'sylius.controller.promotion:showAction', '_sylius' => ['template' => '$template', 'vars' => '$vars', 'permission' => true]], ['id'], ['GET' => 0], null, false, true, null]],
        370 => [[['_route' => 'sylius_admin_partial_taxon_show', '_controller' => 'sylius.controller.taxon:showAction', '_sylius' => ['template' => '$template', 'vars' => '$vars', 'permission' => true]], ['id'], ['GET' => 0], null, false, true, null]],
        404 => [[['_route' => 'sylius_admin_ajax_taxon_move', '_controller' => 'sylius.controller.taxon:updateAction', '_format' => 'json', '_sylius' => ['permission' => true, 'form' => 'Sylius\\Bundle\\TaxonomyBundle\\Form\\Type\\TaxonPositionType']], ['id'], ['PUT' => 0], null, false, false, null]],
        437 => [[['_route' => 'sylius_admin_impersonate_user', '_controller' => 'sylius.controller.impersonate_user:impersonateAction', 'username' => '$username'], ['username'], null, null, false, true, null]],
        470 => [[['_route' => 'sylius_admin_admin_user_update', '_controller' => 'sylius.controller.admin_user:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_admin_user_index', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_users_able_to_access_administration_panel', 'templates' => ['form' => '@SyliusAdmin/AdminUser/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        492 => [[['_route' => 'sylius_admin_admin_user_remove_avatar', '_controller' => 'Sylius\\Bundle\\AdminBundle\\Action\\RemoveAvatarAction'], ['id'], ['PUT' => 0], null, false, false, null]],
        501 => [[['_route' => 'sylius_admin_admin_user_delete', '_controller' => 'sylius.controller.admin_user:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_users_able_to_access_administration_panel', 'templates' => ['form' => '@SyliusAdmin/AdminUser/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        538 => [[['_route' => 'sylius_admin_channel_update', '_controller' => 'sylius.controller.channel:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_channel_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.configure_channels_available_in_your_store', 'templates' => ['form' => '@SyliusAdmin/Channel/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        546 => [[['_route' => 'sylius_admin_channel_delete', '_controller' => 'sylius.controller.channel:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.configure_channels_available_in_your_store', 'templates' => ['form' => '@SyliusAdmin/Channel/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        577 => [[['_route' => 'sylius_admin_country_update', '_controller' => 'sylius.controller.country:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_country_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_destinations', 'templates' => ['form' => '@SyliusAdmin/Country/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        611 => [[['_route' => 'sylius_admin_currency_update', '_controller' => 'sylius.controller.currency:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_currency_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_currencies_available_in_the_store', 'templates' => ['form' => '@SyliusAdmin/Currency/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        649 => [[['_route' => 'sylius_admin_customer_update', '_controller' => 'sylius.controller.customer:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_customer_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_your_customers', 'templates' => ['form' => '@SyliusAdmin/Customer/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        663 => [[['_route' => 'sylius_admin_customer_order_index', '_controller' => 'sylius.controller.order:indexAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Crud/index.html.twig', 'grid' => 'sylius_admin_customer_order', 'vars' => ['route' => ['parameters' => ['$customerId' => '$id']], 'templates' => ['breadcrumb' => '@SyliusAdmin/Customer/Order/Index/_breadcrumb.html.twig', 'header_title' => '@SyliusAdmin/Customer/Order/Index/_headerTitle.html.twig'], 'subheader' => 'sylius.ui.process_your_orders', 'icon' => 'cart']]], ['id'], ['GET' => 0], null, false, false, null]],
        672 => [[['_route' => 'sylius_admin_customer_show', '_controller' => 'sylius.controller.customer:showAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin/Customer/show.html.twig', 'permission' => true]], ['id'], null, null, false, true, null]],
        706 => [[['_route' => 'sylius_admin_customer_group_update', '_controller' => 'sylius.controller.customer_group:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_customer_group_update', 'permission' => true, 'vars' => ['header' => 'sylius.ui.customer_groups', 'subheader' => 'sylius.ui.manage_customer_groups', 'templates' => ['form' => '@SyliusAdmin/CustomerGroup/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        714 => [[['_route' => 'sylius_admin_customer_group_delete', '_controller' => 'sylius.controller.customer_group:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['header' => 'sylius.ui.customer_groups', 'subheader' => 'sylius.ui.manage_customer_groups', 'templates' => ['form' => '@SyliusAdmin/CustomerGroup/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        758 => [[['_route' => 'sylius_admin_exchange_rate_update', '_controller' => 'sylius.controller.exchange_rate:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_exchange_rate_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_exchange_rates', 'templates' => ['form' => '@SyliusAdmin/ExchangeRate/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        766 => [[['_route' => 'sylius_admin_exchange_rate_delete', '_controller' => 'sylius.controller.exchange_rate:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_exchange_rates', 'templates' => ['form' => '@SyliusAdmin/ExchangeRate/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        796 => [[['_route' => 'sylius_admin_locale_update', '_controller' => 'sylius.controller.locale:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_locale_index', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_languages_available_in_the_store', 'templates' => ['form' => '@SyliusAdmin/Locale/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        822 => [[['_route' => 'sylius_admin_order_show', '_controller' => 'sylius.controller.order:showAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Order/show.html.twig']], ['id'], ['GET' => 0], null, false, true, null]],
        841 => [[['_route' => 'sylius_admin_order_history', '_controller' => 'sylius.controller.order:showAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Order/history.html.twig']], ['id'], ['GET' => 0], null, false, false, null]],
        853 => [[['_route' => 'sylius_admin_order_update', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Order/update.html.twig', 'form' => ['options' => ['validation_groups' => ['sylius_shipping_address_update']]]]], ['id'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        867 => [[['_route' => 'sylius_admin_order_cancel', '_controller' => 'sylius.controller.order:applyStateMachineTransitionAction', '_sylius' => ['permission' => true, 'state_machine' => ['graph' => 'sylius_order', 'transition' => 'cancel'], 'redirect' => 'referer']], ['id'], ['PUT' => 0], null, false, false, null]],
        904 => [[['_route' => 'sylius_admin_order_payment_complete', '_controller' => 'sylius.controller.payment:applyStateMachineTransitionAction', '_sylius' => ['event' => 'complete', 'permission' => true, 'repository' => ['method' => 'findOneByOrderId', 'arguments' => ['id' => '$id', 'orderId' => '$orderId']], 'state_machine' => ['graph' => 'sylius_payment', 'transition' => 'complete'], 'redirect' => 'referer']], ['orderId', 'id'], ['PUT' => 0], null, false, false, null]],
        918 => [[['_route' => 'sylius_admin_order_payment_refund', '_controller' => 'sylius.controller.payment:applyStateMachineTransitionAction', '_sylius' => ['permission' => true, 'repository' => ['method' => 'findOneByOrderId', 'arguments' => ['id' => '$id', 'orderId' => '$orderId']], 'state_machine' => ['graph' => 'sylius_payment', 'transition' => 'refund'], 'redirect' => 'referer', 'flash' => 'sylius.payment.refunded']], ['orderId', 'id'], ['PUT' => 0], null, false, false, null]],
        945 => [[['_route' => 'sylius_admin_order_shipment_ship', '_controller' => 'sylius.controller.shipment:updateAction', '_sylius' => ['event' => 'ship', 'repository' => ['method' => 'findOneByOrderId', 'arguments' => ['id' => '$id', 'orderId' => '$orderId']], 'state_machine' => ['graph' => 'sylius_shipment', 'transition' => 'ship'], 'redirect' => 'referer', 'section' => 'admin', 'permission' => true, 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentShipType', 'vars' => ['route' => ['parameters' => ['orderId' => '$orderId', 'id' => '$id']]]]], ['id'], ['PUT' => 0], null, false, false, null]],
        980 => [[['_route' => 'sylius_admin_order_resend_confirmation_email', '_controller' => 'Sylius\\Bundle\\AdminBundle\\Action\\ResendOrderConfirmationEmailAction'], ['id'], ['GET' => 0], null, false, false, null]],
        1021 => [[['_route' => 'sylius_admin_payment_complete', '_controller' => 'sylius.controller.payment:applyStateMachineTransitionAction', '_sylius' => ['event' => 'complete', 'section' => 'admin', 'permission' => true, 'state_machine' => ['graph' => 'sylius_payment', 'transition' => 'complete'], 'redirect' => 'referer', 'flash' => 'sylius.payment.completed']], ['id'], ['PUT' => 0], null, false, false, null]],
        1059 => [[['_route' => 'sylius_admin_payment_method_update', '_controller' => 'sylius.controller.payment_method:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_payment_method_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_payment_methods_available_to_your_customers', 'templates' => ['form' => '@SyliusAdmin/PaymentMethod/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1068 => [[['_route' => 'sylius_admin_payment_method_delete', '_controller' => 'sylius.controller.payment_method:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_payment_methods_available_to_your_customers', 'templates' => ['form' => '@SyliusAdmin/PaymentMethod/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1090 => [[['_route' => 'sylius_admin_payment_method_create', '_controller' => 'sylius.controller.payment_method:createAction', '_sylius' => ['section' => 'admin', 'factory' => ['method' => 'createWithGateway', 'arguments' => ['gatewayFactory' => '$factory']], 'template' => '@SyliusAdmin/Crud/create.html.twig', 'redirect' => 'sylius_admin_payment_method_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_payment_methods_available_to_your_customers', 'templates' => ['form' => '@SyliusAdmin/PaymentMethod/_form.html.twig'], 'route' => ['parameters' => ['factory' => '$factory']]]]], ['factory'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1129 => [[['_route' => 'sylius_admin_product_delete', '_controller' => 'sylius.controller.product:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_your_product_catalog', 'templates' => ['form' => '@SyliusAdmin/Product/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1143 => [[['_route' => 'sylius_admin_product_update', '_controller' => 'sylius.controller.product:updateAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'redirect' => 'referer', 'template' => '@SyliusAdmin/Crud/update.html.twig', 'vars' => ['subheader' => 'sylius.ui.manage_your_product_catalog', 'icon' => 'cube', 'templates' => ['form' => '@SyliusAdmin/Product/_form.html.twig', 'toolbar' => '@SyliusAdmin/Product/Update/_toolbar.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1167 => [[['_route' => 'sylius_admin_product_per_taxon_index', '_controller' => 'sylius.controller.product:indexAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'grid' => 'sylius_admin_product_from_taxon', 'template' => '@SyliusAdmin/Product/index.html.twig', 'vars' => ['subheader' => 'sylius.ui.manage_your_product_catalog', 'icon' => 'cube']]], ['taxonId'], ['GET' => 0], null, false, true, null]],
        1179 => [[['_route' => 'sylius_admin_product_create', '_controller' => 'sylius.controller.product:createAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Crud/create.html.twig', 'redirect' => 'sylius_admin_product_update', 'vars' => ['subheader' => 'sylius.ui.manage_your_product_catalog', 'templates' => ['form' => '@SyliusAdmin/Product/_form.html.twig'], 'route' => ['name' => 'sylius_admin_product_create']]]], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1199 => [[['_route' => 'sylius_admin_product_show', '_controller' => 'sylius.controller.product:showAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Product/show.html.twig']], ['id'], ['GET' => 0], null, false, true, null]],
        1220 => [[['_route' => 'sylius_admin_product_variant_index', '_controller' => 'sylius.controller.product_variant:indexAction', '_sylius' => ['template' => '@SyliusAdmin/ProductVariant/index.html.twig', 'grid' => 'sylius_admin_product_variant', 'section' => 'admin', 'permission' => true, 'vars' => ['route' => ['parameters' => ['productId' => '$productId']], 'templates' => ['breadcrumb' => '@SyliusAdmin/ProductVariant/Index/_breadcrumb.html.twig'], 'icon' => 'cubes', 'subheader' => 'sylius.ui.manage_variants']]], ['productId'], ['GET' => 0], null, true, false, null]],
        1236 => [[['_route' => 'sylius_admin_product_variant_create', '_controller' => 'sylius.controller.product_variant:createAction', '_sylius' => ['factory' => ['method' => 'createForProduct', 'arguments' => ['expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))']], 'template' => '@SyliusAdmin/Crud/create.html.twig', 'grid' => 'sylius_admin_product_variant', 'section' => 'admin', 'redirect' => ['route' => 'sylius_admin_product_variant_index', 'parameters' => ['productId' => '$productId']], 'permission' => true, 'vars' => ['route' => ['parameters' => ['productId' => '$productId']], 'templates' => ['form' => '@SyliusAdmin/ProductVariant/_form.html.twig', 'breadcrumb' => '@SyliusAdmin/ProductVariant/Create/_breadcrumb.html.twig', 'header_title' => '@SyliusAdmin/ProductVariant/Create/_headerTitle.html.twig']]]], ['productId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1258 => [[['_route' => 'sylius_admin_product_variant_update', '_controller' => 'sylius.controller.product_variant:updateAction', '_sylius' => ['template' => '@SyliusAdmin/Crud/update.html.twig', 'grid' => 'sylius_admin_product_variant', 'section' => 'admin', 'redirect' => ['route' => 'sylius_admin_product_variant_index', 'parameters' => ['productId' => '$productId']], 'permission' => true, 'repository' => ['method' => 'findOneByIdAndProductId', 'arguments' => ['id' => '$id', 'productId' => '$productId']], 'vars' => ['route' => ['parameters' => ['id' => '$id', 'productId' => '$productId']], 'templates' => ['form' => '@SyliusAdmin/ProductVariant/_form.html.twig', 'breadcrumb' => '@SyliusAdmin/ProductVariant/Update/_breadcrumb.html.twig', 'toolbar' => '@SyliusAdmin/ProductVariant/Update/_toolbar.html.twig']]]], ['productId', 'id'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        1279 => [[['_route' => 'sylius_admin_product_variant_bulk_delete', '_controller' => 'sylius.controller.product_variant:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'redirect' => 'referer', 'permission' => true, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], ['productId'], ['DELETE' => 0], null, false, false, null]],
        1296 => [[['_route' => 'sylius_admin_product_variant_delete', '_controller' => 'sylius.controller.product_variant:deleteAction', '_sylius' => ['section' => 'admin', 'redirect' => 'referer', 'permission' => true, 'repository' => ['method' => 'findOneByIdAndProductId', 'arguments' => ['id' => '$id', 'productId' => '$productId']]]], ['productId', 'id'], ['DELETE' => 0], null, false, true, null]],
        1313 => [[['_route' => 'sylius_admin_product_variant_generate', '_controller' => 'sylius.controller.product:updateAction', '_sylius' => ['template' => '@SyliusAdmin/ProductVariant/generate.html.twig', 'section' => 'admin', 'permission' => true, 'redirect' => ['route' => 'sylius_admin_product_variant_index', 'parameters' => ['productId' => '$productId']], 'form' => ['type' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductGenerateVariantsType'], 'repository' => ['method' => 'find', 'arguments' => ['$productId']], 'flash' => 'sylius.product_variant.generate']], ['productId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1369 => [[['_route' => 'sylius_admin_product_association_type_update', '_controller' => 'sylius.controller.product_association_type:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_product_association_type_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_association_types_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAssociationType/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1378 => [[['_route' => 'sylius_admin_product_association_type_delete', '_controller' => 'sylius.controller.product_association_type:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_association_types_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAssociationType/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1417 => [[['_route' => 'sylius_admin_product_attribute_update', '_controller' => 'sylius.controller.product_attribute:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_product_attribute_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_attributes_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAttribute/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1429 => [[['_route' => 'sylius_admin_product_attribute_create', '_controller' => 'sylius.controller.product_attribute:createAction', '_sylius' => ['section' => 'admin', 'factory' => ['method' => 'createTyped', 'arguments' => ['type' => '$type']], 'template' => '@SyliusAdmin/Crud/create.html.twig', 'redirect' => 'sylius_admin_product_attribute_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_attributes_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAttribute/_form.html.twig'], 'route' => ['parameters' => ['type' => '$type']]]]], ['type'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1439 => [[['_route' => 'sylius_admin_product_attribute_delete', '_controller' => 'sylius.controller.product_attribute:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_attributes_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAttribute/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1474 => [[['_route' => 'sylius_admin_product_option_update', '_controller' => 'sylius.controller.product_option:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_product_option_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_configuration_options_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductOption/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1483 => [[['_route' => 'sylius_admin_product_option_delete', '_controller' => 'sylius.controller.product_option:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_configuration_options_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductOption/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1520 => [[['_route' => 'sylius_admin_product_review_update', '_controller' => 'sylius.controller.product_review:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_product_review_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_reviews_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductReview/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1529 => [[['_route' => 'sylius_admin_product_review_delete', '_controller' => 'sylius.controller.product_review:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_reviews_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductReview/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1558 => [[['_route' => 'sylius_admin_product_review_accept', '_controller' => 'sylius.controller.product_review:applyStateMachineTransitionAction', '_sylius' => ['permission' => true, 'state_machine' => ['graph' => 'sylius_product_review', 'transition' => 'accept'], 'redirect' => 'referer', 'flash' => 'sylius.review.accept']], ['id'], ['PUT' => 0], null, false, false, null]],
        1573 => [[['_route' => 'sylius_admin_product_review_reject', '_controller' => 'sylius.controller.product_review:applyStateMachineTransitionAction', '_sylius' => ['permission' => true, 'state_machine' => ['graph' => 'sylius_product_review', 'transition' => 'reject'], 'redirect' => 'referer', 'flash' => 'sylius.review.reject']], ['id'], ['PUT' => 0], null, false, false, null]],
        1613 => [[['_route' => 'sylius_admin_promotion_update', '_controller' => 'sylius.controller.promotion:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_promotion_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns', 'templates' => ['form' => '@SyliusAdmin/Promotion/_form.html.twig', 'toolbar' => '@SyliusAdmin/Promotion/_toolbar.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1632 => [[['_route' => 'sylius_admin_promotion_coupon_index', '_controller' => 'sylius.controller.promotion_coupon:indexAction', '_sylius' => ['template' => '@SyliusAdmin/PromotionCoupon/index.html.twig', 'grid' => 'sylius_admin_promotion_coupon', 'section' => 'admin', 'permission' => true, 'vars' => ['route' => ['parameters' => ['promotionId' => '$promotionId']], 'templates' => ['breadcrumb' => '@SyliusAdmin/PromotionCoupon/Index/_breadcrumb.html.twig'], 'icon' => 'tags', 'subheader' => 'sylius.ui.manage_coupons']]], ['promotionId'], ['GET' => 0], null, true, false, null]],
        1648 => [[['_route' => 'sylius_admin_promotion_coupon_create', '_controller' => 'sylius.controller.promotion_coupon:createAction', '_sylius' => ['factory' => ['method' => 'createForPromotion', 'arguments' => ['expr:notFoundOnNull(service(\'sylius.repository.promotion\').find($promotionId))']], 'template' => '@SyliusAdmin/Crud/create.html.twig', 'grid' => 'sylius_admin_promotion_coupon', 'section' => 'admin', 'redirect' => ['route' => 'sylius_admin_promotion_coupon_index', 'parameters' => ['promotionId' => '$promotionId']], 'permission' => true, 'vars' => ['route' => ['parameters' => ['promotionId' => '$promotionId']], 'templates' => ['form' => '@SyliusAdmin/PromotionCoupon/_form.html.twig', 'breadcrumb' => '@SyliusAdmin/PromotionCoupon/Create/_breadcrumb.html.twig', 'header_title' => '@SyliusAdmin/PromotionCoupon/Create/_headerTitle.html.twig']]]], ['promotionId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1670 => [[['_route' => 'sylius_admin_promotion_coupon_update', '_controller' => 'sylius.controller.promotion_coupon:updateAction', '_sylius' => ['template' => '@SyliusAdmin/Crud/update.html.twig', 'grid' => 'sylius_admin_promotion_coupon', 'section' => 'admin', 'redirect' => ['route' => 'sylius_admin_promotion_coupon_index', 'parameters' => ['promotionId' => '$promotionId']], 'permission' => true, 'vars' => ['route' => ['parameters' => ['id' => '$id', 'promotionId' => '$promotionId']], 'templates' => ['form' => '@SyliusAdmin/PromotionCoupon/_form.html.twig', 'breadcrumb' => '@SyliusAdmin/PromotionCoupon/Update/_breadcrumb.html.twig'], 'subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns']]], ['promotionId', 'id'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        1687 => [[['_route' => 'sylius_admin_promotion_coupon_generate', '_controller' => 'sylius.controller.promotion_coupon:generateAction', '_sylius' => ['template' => '@SyliusAdmin/PromotionCoupon/generate.html.twig', 'section' => 'admin', 'redirect' => ['route' => 'sylius_admin_promotion_coupon_index', 'parameters' => ['promotionId' => '$promotionId']], 'permission' => true]], ['promotionId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1708 => [[['_route' => 'sylius_admin_promotion_coupon_bulk_delete', '_controller' => 'sylius.controller.promotion_coupon:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'redirect' => 'referer', 'permission' => true, 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], ['promotionId'], ['DELETE' => 0], null, false, false, null]],
        1725 => [[['_route' => 'sylius_admin_promotion_coupon_delete', '_controller' => 'sylius.controller.promotion_coupon:deleteAction', '_sylius' => ['section' => 'admin', 'redirect' => 'referer', 'permission' => true]], ['promotionId', 'id'], ['DELETE' => 0], null, false, true, null]],
        1737 => [[['_route' => 'sylius_admin_promotion_delete', '_controller' => 'sylius.controller.promotion:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns', 'templates' => ['form' => '@SyliusAdmin/Promotion/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1784 => [[['_route' => 'sylius_admin_shipment_ship', '_controller' => 'sylius.controller.shipment:updateAction', '_sylius' => ['event' => 'ship', 'section' => 'admin', 'permission' => true, 'state_machine' => ['graph' => 'sylius_shipment', 'transition' => 'ship'], 'redirect' => 'referer', 'flash' => 'sylius.shipment.shipped', 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentShipType']], ['id'], ['PUT' => 0], null, false, false, null]],
        1820 => [[['_route' => 'sylius_admin_shipment_resend_confirmation_email', '_controller' => 'Sylius\\Bundle\\AdminBundle\\Action\\ResendShipmentConfirmationEmailAction'], ['id'], ['GET' => 0], null, false, false, null]],
        1830 => [[['_route' => 'sylius_admin_shipment_show', '_controller' => 'sylius.controller.shipment:showAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Shipment/show.html.twig']], ['id'], ['GET' => 0], null, false, true, null]],
        1876 => [[['_route' => 'sylius_admin_shipping_category_update', '_controller' => 'sylius.controller.shipping_category:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_shipping_category_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_categories_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingCategory/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1885 => [[['_route' => 'sylius_admin_shipping_category_delete', '_controller' => 'sylius.controller.shipping_category:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_categories_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingCategory/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1922 => [[['_route' => 'sylius_admin_shipping_method_update', '_controller' => 'sylius.controller.shipping_method:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_shipping_method_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_methods_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingMethod/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1938 => [[['_route' => 'sylius_admin_shipping_method_archive', '_controller' => 'sylius.controller.shipping_method:updateAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusUi/Grid/Action/archive.html.twig', 'form' => ['type' => 'Sylius\\Bundle\\ResourceBundle\\Form\\Type\\ArchivableType'], 'redirect' => ['route' => 'sylius_admin_shipping_method_index', 'parameters' => []]]], ['id'], ['PATCH' => 0], null, false, false, null]],
        1948 => [[['_route' => 'sylius_admin_shipping_method_delete', '_controller' => 'sylius.controller.shipping_method:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_methods_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingMethod/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1977 => [[['_route' => 'sylius_admin_shop_user_delete', '_controller' => 'sylius.controller.shop_user:deleteAction', '_sylius' => ['section' => 'admin', 'redirect' => 'referer', 'permission' => true]], ['id'], ['DELETE' => 0], null, false, true, null]],
        2016 => [[['_route' => 'sylius_admin_taxon_update', '_controller' => 'sylius.controller.taxon:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Taxon/update.html.twig', 'redirect' => 'sylius_admin_taxon_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_categorization_of_your_products', 'templates' => ['form' => '@SyliusAdmin/Taxon/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        2025 => [[['_route' => 'sylius_admin_taxon_delete', '_controller' => 'sylius.controller.taxon:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_categorization_of_your_products', 'templates' => ['form' => '@SyliusAdmin/Taxon/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        2047 => [[['_route' => 'sylius_admin_taxon_create_for_parent', '_controller' => 'sylius.controller.taxon:createAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Taxon/create.html.twig', 'redirect' => 'sylius_admin_taxon_update', 'factory' => ['method' => 'createForParent', 'arguments' => ['expr:notFoundOnNull(service("sylius.repository.taxon").find($id))']], 'vars' => ['subheader' => 'sylius.ui.manage_categorization_of_your_products', 'templates' => ['form' => '@SyliusAdmin/Taxon/_form.html.twig']]]], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2089 => [[['_route' => 'sylius_admin_tax_category_update', '_controller' => 'sylius.controller.tax_category:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_tax_category_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxCategory/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        2098 => [[['_route' => 'sylius_admin_tax_category_delete', '_controller' => 'sylius.controller.tax_category:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxCategory/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        2130 => [[['_route' => 'sylius_admin_tax_rate_update', '_controller' => 'sylius.controller.tax_rate:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_tax_rate_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxRate/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        2139 => [[['_route' => 'sylius_admin_tax_rate_delete', '_controller' => 'sylius.controller.tax_rate:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxRate/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        2176 => [[['_route' => 'sylius_admin_zone_update', '_controller' => 'sylius.controller.zone:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_zone_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_geographical_zones', 'templates' => ['form' => '@SyliusAdmin/Zone/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        2185 => [[['_route' => 'sylius_admin_zone_delete', '_controller' => 'sylius.controller.zone:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_geographical_zones', 'templates' => ['form' => '@SyliusAdmin/Zone/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        2222 => [[['_route' => 'sylius_admin_zone_create', '_controller' => 'sylius.controller.zone:createAction', '_sylius' => ['section' => 'admin', 'factory' => ['method' => 'createTyped', 'arguments' => ['type' => '$type']], 'template' => '@SyliusAdmin/Crud/create.html.twig', 'redirect' => 'sylius_admin_zone_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_geographical_zones', 'templates' => ['form' => '@SyliusAdmin/Zone/_form.html.twig'], 'route' => ['parameters' => ['type' => '$type']]]]], ['type'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2288 => [
            [['_route' => 'sylius_admin_api_adjustment_index', '_controller' => 'sylius.controller.adjustment:indexAction', '_sylius' => ['serialization_version' => '$version', 'repository' => ['method' => 'findByOrder', 'arguments' => ['$orderId']], 'paginate' => false]], ['version', 'orderId'], ['GET' => 0], null, true, false, null],
            [['_route' => 'sylius_admin_api_adjustment_create', '_controller' => 'sylius.controller.adjustment:createAction', '_sylius' => ['serialization_version' => '$version']], ['version', 'orderId'], ['POST' => 0], null, true, false, null],
        ],
        2309 => [
            [['_route' => 'sylius_admin_api_adjustment_update', '_controller' => 'sylius.controller.adjustment:updateAction', '_sylius' => ['serialization_version' => '$version']], ['version', 'orderId', 'id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'sylius_admin_api_adjustment_delete', '_controller' => 'sylius.controller.adjustment:deleteAction', '_sylius' => ['serialization_version' => '$version', 'filterable' => true, 'criteria' => ['order' => '$orderId'], 'csrf_protection' => false]], ['version', 'orderId', 'id'], ['DELETE' => 0], null, false, true, null],
        ],
        2326 => [[['_route' => 'sylius_admin_api_order_cancel', '_controller' => 'sylius.controller.order:applyStateMachineTransitionAction', '_sylius' => ['section' => 'admin_api', 'state_machine' => ['graph' => 'sylius_order', 'transition' => 'cancel'], 'csrf_protection' => false, 'return_content' => false]], ['version', 'id'], ['PUT' => 0], null, false, false, null]],
        2358 => [[['_route' => 'sylius_admin_api_order_shipment_ship', '_controller' => 'sylius.controller.shipment:updateAction', '_sylius' => ['event' => 'ship', 'repository' => ['method' => 'findOneByOrderId', 'arguments' => ['id' => '$id', 'orderId' => '$orderId']], 'state_machine' => ['graph' => 'sylius_shipment', 'transition' => 'ship'], 'section' => 'admin_api', 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentShipType']], ['version', 'orderId', 'id'], ['PUT' => 0], null, false, false, null]],
        2393 => [[['_route' => 'sylius_admin_api_order_payment_complete', '_controller' => 'sylius.controller.payment:applyStateMachineTransitionAction', '_sylius' => ['event' => 'complete', 'repository' => ['method' => 'findOneByOrderId', 'arguments' => ['id' => '$id', 'orderId' => '$orderId']], 'state_machine' => ['graph' => 'sylius_payment', 'transition' => 'complete'], 'section' => 'admin_api', 'csrf_protection' => false, 'return_content' => false]], ['version', 'orderId', 'id'], ['PUT' => 0], null, false, false, null]],
        2403 => [[['_route' => 'sylius_admin_api_order_show', '_controller' => 'sylius.controller.order:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false]], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        2413 => [[['_route' => 'sylius_admin_api_order_index', '_controller' => 'sylius.controller.order:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'grid' => 'sylius_admin_order', 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false]], ['version'], ['GET' => 0], null, true, false, null]],
        2431 => [
            [['_route' => 'sylius_api_admin_user_index', '_controller' => 'sylius.controller.admin_user:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'serialization_version' => '$version', 'section' => 'api', 'permission' => false]], ['version'], ['GET' => 0], null, true, false, null],
            [['_route' => 'sylius_api_admin_user_create', '_controller' => 'sylius.controller.admin_user:createAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'api', 'permission' => false]], ['version'], ['POST' => 0], null, true, false, null],
        ],
        2452 => [
            [['_route' => 'sylius_api_admin_user_update', '_controller' => 'sylius.controller.admin_user:updateAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'api', 'permission' => false]], ['version', 'id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'sylius_api_admin_user_show', '_controller' => 'sylius.controller.admin_user:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'api', 'permission' => false]], ['version', 'id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_user_delete', '_controller' => 'sylius.controller.admin_user:deleteAction', '_sylius' => ['csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'api', 'permission' => false]], ['version', 'id'], ['DELETE' => 0], null, false, true, null],
        ],
        2474 => [
            [['_route' => 'sylius_admin_api_cart_index', '_controller' => 'sylius.controller.order:indexAction', '_sylius' => ['grid' => 'sylius_admin_api_cart', 'section' => 'admin_api', 'serialization_groups' => ['Default'], 'serialization_version' => '$version']], ['version'], ['GET' => 0], null, true, false, null],
            [['_route' => 'sylius_admin_api_cart_create', '_controller' => 'sylius.controller.order:createAction', '_sylius' => ['serialization_version' => '$version', 'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\OrderType', 'serialization_groups' => ['Default', 'DetailedCart']]], ['version'], ['POST' => 0], null, true, false, null],
        ],
        2495 => [
            [['_route' => 'sylius_admin_api_cart_update', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => ['serialization_version' => '$version', 'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\OrderPromotionCouponType', 'serialization_groups' => ['Default', 'DetailedCart']]], ['version', 'id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'sylius_admin_api_cart_delete', '_controller' => 'sylius.controller.order:deleteAction', '_format' => 'json', '_sylius' => ['serialization_version' => '$version', 'csrf_protection' => false, 'repository' => ['method' => 'findCartById', 'arguments' => ['$id']]]], ['version', 'id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'sylius_admin_api_cart_show', '_controller' => 'sylius.controller.order:showAction', '_sylius' => ['serialization_version' => '$version', 'repository' => ['method' => 'findCartById', 'arguments' => ['$id']], 'serialization_groups' => ['Default', 'DetailedCart']]], ['version', 'id'], ['GET' => 0], null, false, true, null],
        ],
        2513 => [[['_route' => 'sylius_admin_api_cart_item_create', '_controller' => 'sylius.controller.order_item:createAction', '_sylius' => ['serialization_version' => '$version', 'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\OrderItemType', 'factory' => ['method' => 'createForCart', 'arguments' => ['expr:notFoundOnNull(service(\'sylius.repository.order\').findCartById($cartId))']], 'serialization_groups' => ['Default', 'DetailedCart']]], ['version', 'cartId'], ['POST' => 0], null, true, false, null]],
        2534 => [
            [['_route' => 'sylius_admin_api_order_item_update', '_controller' => 'sylius.controller.order_item:updateAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\OrderItemType', 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['cart' => '$cartId'], 'permission' => false]], ['version', 'cartId', 'id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'sylius_admin_api_order_item_delete', '_controller' => 'sylius.controller.order_item:deleteAction', '_sylius' => ['csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['cart' => '$cartId'], 'permission' => false]], ['version', 'cartId', 'id'], ['DELETE' => 0], null, false, true, null],
        ],
        2560 => [
            [['_route' => 'sylius_admin_api_channel_index', '_controller' => 'sylius.controller.channel:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['GET' => 0], null, true, false, null],
            [['_route' => 'sylius_admin_api_channel_create', '_controller' => 'sylius.controller.channel:createAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['POST' => 0], null, true, false, null],
        ],
        2581 => [
            [['_route' => 'sylius_admin_api_channel_update', '_controller' => 'sylius.controller.channel:updateAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'sylius_admin_api_channel_show', '_controller' => 'sylius.controller.channel:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_admin_api_channel_delete', '_controller' => 'sylius.controller.channel:deleteAction', '_sylius' => ['csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['DELETE' => 0], null, false, true, null],
        ],
        2611 => [[['_route' => 'sylius_admin_api_checkout_show', '_controller' => 'sylius.controller.order:showAction', '_sylius' => ['serialization_version' => '$version', 'serialization_groups' => ['Detailed']]], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        2639 => [[['_route' => 'sylius_admin_api_checkout_addressing', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => ['serialization_version' => '$version', 'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\AddressType', 'repository' => ['method' => 'find', 'arguments' => ['$orderId']], 'state_machine' => ['graph' => 'sylius_order_checkout', 'transition' => 'address']]], ['version', 'orderId'], ['PUT' => 0], null, false, true, null]],
        2679 => [
            [['_route' => 'sylius_admin_api_checkout_available_shipping_methods', '_controller' => 'sylius.controller.show_available_shipping_methods:showAction'], ['version', 'orderId'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_admin_api_checkout_select_shipping', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => ['serialization_version' => '$version', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\SelectShippingType', 'repository' => ['method' => 'find', 'arguments' => ['$orderId']], 'state_machine' => ['graph' => 'sylius_order_checkout', 'transition' => 'select_shipping']]], ['version', 'orderId'], ['PUT' => 0], null, false, true, null],
        ],
        2708 => [
            [['_route' => 'sylius_admin_api_checkout_available_payment_methods', '_controller' => 'sylius.controller.show_available_payment_methods:showAction'], ['version', 'orderId'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_admin_api_checkout_select_payment', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => ['serialization_version' => '$version', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\SelectPaymentType', 'repository' => ['method' => 'find', 'arguments' => ['$orderId']], 'state_machine' => ['graph' => 'sylius_order_checkout', 'transition' => 'select_payment']]], ['version', 'orderId'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
        ],
        2736 => [[['_route' => 'sylius_admin_api_checkout_complete', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => ['serialization_version' => '$version', 'form' => ['type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\CompleteType', 'options' => ['validation_groups' => 'sylius_checkout_complete']], 'repository' => ['method' => 'find', 'arguments' => ['$orderId']], 'state_machine' => ['graph' => 'sylius_order_checkout', 'transition' => 'complete']]], ['version', 'orderId'], ['PUT' => 0], null, false, true, null]],
        2758 => [
            [['_route' => 'sylius_admin_api_country_index', '_controller' => 'sylius.controller.country:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['GET' => 0], null, true, false, null],
            [['_route' => 'sylius_admin_api_country_create', '_controller' => 'sylius.controller.country:createAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['POST' => 0], null, true, false, null],
        ],
        2779 => [
            [['_route' => 'sylius_admin_api_country_show', '_controller' => 'sylius.controller.country:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_admin_api_country_delete', '_controller' => 'sylius.controller.country:deleteAction', '_sylius' => ['csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['DELETE' => 0], null, false, true, null],
        ],
        2810 => [
            [['_route' => 'sylius_admin_api_province_delete', '_controller' => 'sylius.controller.province:deleteAction', '_sylius' => ['serialization_version' => '$version', 'criteria' => ['code' => '$code'], 'csrf_protection' => false]], ['version', 'countryCode', 'code'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'sylius_admin_api_province_show', '_controller' => 'sylius.controller.province:showAction', '_sylius' => ['serialization_version' => '$version', 'serialization_groups' => ['Detailed'], 'criteria' => ['code' => '$code']]], ['version', 'countryCode', 'code'], ['GET' => 0], null, false, true, null],
        ],
        2837 => [
            [['_route' => 'sylius_admin_api_currency_index', '_controller' => 'sylius.controller.currency:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['GET' => 0], null, true, false, null],
            [['_route' => 'sylius_admin_api_currency_create', '_controller' => 'sylius.controller.currency:createAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['POST' => 0], null, true, false, null],
        ],
        2858 => [
            [['_route' => 'sylius_admin_api_currency_show', '_controller' => 'sylius.controller.currency:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_admin_api_currency_delete', '_controller' => 'sylius.controller.currency:deleteAction', '_sylius' => ['csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['DELETE' => 0], null, false, true, null],
        ],
        2879 => [[['_route' => 'sylius_admin_api_customer_index', '_controller' => 'sylius.controller.customer:indexAction', '_sylius' => ['serialization_version' => '$version', 'serialization_groups' => ['Default'], 'paginate' => '$limit', 'sortable' => true, 'sorting' => ['id' => 'desc']]], ['version'], ['GET' => 0], null, true, false, null]],
        2900 => [
            [['_route' => 'sylius_admin_api_customer_show', '_controller' => 'sylius.controller.customer:showAction', '_sylius' => ['serialization_version' => '$version', 'serialization_groups' => ['Detailed']]], ['version', 'id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_admin_api_customer_update', '_controller' => 'sylius.controller.customer:updateAction', '_sylius' => ['serialization_version' => '$version', 'form' => ['type' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\CustomerProfileType']]], ['version', 'id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'sylius_admin_api_customer_delete', '_controller' => 'sylius.controller.customer:deleteAction', '_sylius' => ['serialization_version' => '$version', 'csrf_protection' => false]], ['version', 'id'], ['DELETE' => 0], null, false, true, null],
        ],
        2916 => [[['_route' => 'sylius_admin_api_customer_order_index', '_controller' => 'sylius.controller.order:indexAction', '_sylius' => ['serialization_version' => '$version', 'paginate' => '$limit', 'filterable' => true, 'criteria' => ['customer' => '$id'], 'sortable' => true, 'sorting' => ['updatedAt' => 'desc'], 'csrf_protection' => false]], ['version', 'id'], ['GET' => 0], null, true, false, null]],
        2926 => [[['_route' => 'sylius_admin_api_customer_create', '_controller' => 'sylius.controller.customer:createAction', '_sylius' => ['serialization_version' => '$version', 'serialization_groups' => ['Detailed'], 'form' => ['type' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\CustomerProfileType']]], ['version'], ['POST' => 0], null, true, false, null]],
        2956 => [
            [['_route' => 'sylius_admin_api_exchange_rate_index', '_controller' => 'sylius.controller.exchange_rate:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false]], ['version'], ['GET' => 0], null, true, false, null],
            [['_route' => 'sylius_admin_api_exchange_rate_create', '_controller' => 'sylius.controller.exchange_rate:createAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false]], ['version'], ['POST' => 0], null, true, false, null],
        ],
        2989 => [
            [['_route' => 'sylius_admin_api_exchange_rate_update', '_controller' => 'sylius.controller.exchange_rate:updateAction', '_sylius' => ['serialization_version' => '$version', 'serialization_groups' => ['Default', 'Detailed'], 'repository' => ['method' => 'findOneWithCurrencyPair', 'arguments' => ['$sourceCurrencyCode', '$targetCurrencyCode']]]], ['version', 'sourceCurrencyCode', 'targetCurrencyCode'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'sylius_admin_api_exchange_rate_delete', '_controller' => 'sylius.controller.exchange_rate:deleteAction', '_sylius' => ['serialization_version' => '$version', 'repository' => ['method' => 'findOneWithCurrencyPair', 'arguments' => ['$sourceCurrencyCode', '$targetCurrencyCode']], 'csrf_protection' => false]], ['version', 'sourceCurrencyCode', 'targetCurrencyCode'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'sylius_admin_api_exchange_rate_show', '_controller' => 'sylius.controller.exchange_rate:showAction', '_sylius' => ['serialization_version' => '$version', 'serialization_groups' => ['Default', 'Detailed'], 'repository' => ['method' => 'findOneWithCurrencyPair', 'arguments' => ['$sourceCurrencyCode', '$targetCurrencyCode']]]], ['version', 'sourceCurrencyCode', 'targetCurrencyCode'], ['GET' => 0], null, false, true, null],
        ],
        3010 => [
            [['_route' => 'sylius_admin_api_locale_index', '_controller' => 'sylius.controller.locale:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['GET' => 0], null, true, false, null],
            [['_route' => 'sylius_admin_api_locale_create', '_controller' => 'sylius.controller.locale:createAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['POST' => 0], null, true, false, null],
        ],
        3031 => [
            [['_route' => 'sylius_admin_api_locale_show', '_controller' => 'sylius.controller.locale:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_admin_api_locale_delete', '_controller' => 'sylius.controller.locale:deleteAction', '_sylius' => ['csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['DELETE' => 0], null, false, true, null],
        ],
        3073 => [[['_route' => 'sylius_admin_api_payment_method_show', '_controller' => 'sylius.controller.payment_method:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['GET' => 0], null, false, true, null]],
        3086 => [[['_route' => 'sylius_admin_api_payment_index', '_controller' => 'sylius.controller.payment:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'grid' => 'sylius_admin_api_payment', 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false]], ['version'], ['GET' => 0], null, true, false, null]],
        3104 => [[['_route' => 'sylius_admin_api_payment_show', '_controller' => 'sylius.controller.payment:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false]], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        3131 => [
            [['_route' => 'sylius_admin_api_product_index', '_controller' => 'sylius.controller.product:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'grid' => 'sylius_admin_api_product', 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['GET' => 0], null, true, false, null],
            [['_route' => 'sylius_admin_api_product_create', '_controller' => 'sylius.controller.product:createAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\ProductType', 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['POST' => 0], null, true, false, null],
        ],
        3152 => [
            [['_route' => 'sylius_admin_api_product_update', '_controller' => 'sylius.controller.product:updateAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\ProductType', 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'sylius_admin_api_product_show', '_controller' => 'sylius.controller.product:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_admin_api_product_delete', '_controller' => 'sylius.controller.product:deleteAction', '_sylius' => ['csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['DELETE' => 0], null, false, true, null],
        ],
        3175 => [
            [['_route' => 'sylius_admin_api_product_review_index', '_controller' => 'sylius.controller.product_review:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'grid' => 'sylius_admin_api_product_review', 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false]], ['version', 'productCode'], ['GET' => 0], null, true, false, null],
            [['_route' => 'sylius_admin_api_product_review_create', '_controller' => 'sylius.controller.product_review:createAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Product\\ProductReviewType', 'factory' => ['method' => 'createForSubject', 'arguments' => ['expr:notFoundOnNull(service(\'sylius.repository.product\').findOneByCode($productCode))']]]], ['version', 'productCode'], ['POST' => 0], null, true, false, null],
        ],
        3196 => [
            [['_route' => 'sylius_admin_api_product_review_update', '_controller' => 'sylius.controller.product_review:updateAction', '_sylius' => ['serialization_version' => '$version', 'section' => 'admin_api', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Product\\ProductReviewType', 'repository' => ['method' => 'findOneByIdAndProductCode', 'arguments' => ['$id', '$productCode']]]], ['version', 'productCode', 'id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'sylius_admin_api_product_review_delete', '_controller' => 'sylius.controller.product_review:deleteAction', '_sylius' => ['serialization_version' => '$version', 'section' => 'admin_api', 'repository' => ['method' => 'findOneByIdAndProductCode', 'arguments' => ['$id', '$productCode']], 'csrf_protection' => false]], ['version', 'productCode', 'id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'sylius_admin_api_product_review_show', '_controller' => 'sylius.controller.product_review:showAction', '_sylius' => ['serialization_version' => '$version', 'section' => 'admin_api', 'serialization_groups' => ['Default', 'Detailed'], 'repository' => ['method' => 'findOneByIdAndProductCode', 'arguments' => ['$id', '$productCode']]]], ['version', 'productCode', 'id'], ['GET' => 0], null, false, true, null],
        ],
        3215 => [[['_route' => 'sylius_admin_api_product_review_accept', '_controller' => 'sylius.controller.product_review:applyStateMachineTransitionAction', '_sylius' => ['state_machine' => ['graph' => 'sylius_product_review', 'transition' => 'accept'], 'csrf_protection' => false]], ['version', 'productCode', 'id'], ['POST' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        3230 => [[['_route' => 'sylius_admin_api_product_review_reject', '_controller' => 'sylius.controller.product_review:applyStateMachineTransitionAction', '_sylius' => ['state_machine' => ['graph' => 'sylius_product_review', 'transition' => 'reject'], 'csrf_protection' => false]], ['version', 'productCode', 'id'], ['POST' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        3253 => [
            [['_route' => 'sylius_admin_api_product_variant_index', '_controller' => 'sylius.controller.product_variant:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'grid' => 'sylius_admin_api_product_variant', 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false]], ['version', 'productCode'], ['GET' => 0], null, true, false, null],
            [['_route' => 'sylius_admin_api_product_variant_create', '_controller' => 'sylius.controller.product_variant:createAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\ProductVariantType', 'factory' => ['method' => 'createForProduct', 'arguments' => ['expr:notFoundOnNull(service(\'sylius.repository.product\').findOneByCode($productCode))']]]], ['version', 'productCode'], ['POST' => 0], null, true, false, null],
        ],
        3274 => [
            [['_route' => 'sylius_admin_api_product_variant_update', '_controller' => 'sylius.controller.product_variant:updateAction', '_sylius' => ['serialization_version' => '$version', 'section' => 'admin_api', 'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\ProductVariantType', 'repository' => ['method' => 'findOneByCodeAndProductCode', 'arguments' => ['$code', '$productCode']]]], ['version', 'productCode', 'code'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'sylius_admin_api_product_variant_delete', '_controller' => 'sylius.controller.product_variant:deleteAction', '_sylius' => ['serialization_version' => '$version', 'section' => 'admin_api', 'repository' => ['method' => 'findOneByCodeAndProductCode', 'arguments' => ['$code', '$productCode']], 'csrf_protection' => false]], ['version', 'productCode', 'code'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'sylius_admin_api_product_variant_show', '_controller' => 'sylius.controller.product_variant:showAction', '_sylius' => ['serialization_version' => '$version', 'section' => 'admin_api', 'serialization_groups' => ['Default', 'Detailed'], 'repository' => ['method' => 'findOneByCodeAndProductCode', 'arguments' => ['$code', '$productCode']]]], ['version', 'productCode', 'code'], ['GET' => 0], null, false, true, null],
        ],
        3309 => [[['_route' => 'sylius_admin_api_product_attribute_index', '_controller' => 'sylius.controller.product_attribute:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['GET' => 0], null, true, false, null]],
        3330 => [
            [['_route' => 'sylius_admin_api_product_attribute_update', '_controller' => 'sylius.controller.product_attribute:updateAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'sylius_admin_api_product_attribute_show', '_controller' => 'sylius.controller.product_attribute:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_admin_api_product_attribute_delete', '_controller' => 'sylius.controller.product_attribute:deleteAction', '_sylius' => ['csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['DELETE' => 0], null, false, true, null],
        ],
        3339 => [[['_route' => 'sylius_admin_api_product_attribute_create', '_controller' => 'sylius.controller.product_attribute:createAction', '_sylius' => ['serialization_version' => '$version', 'factory' => ['method' => 'createTyped', 'arguments' => ['type' => '$type']]]], ['version', 'type'], ['POST' => 0], null, false, true, null]],
        3370 => [
            [['_route' => 'sylius_admin_api_product_association_type_index', '_controller' => 'sylius.controller.product_association_type:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['GET' => 0], null, true, false, null],
            [['_route' => 'sylius_admin_api_product_association_type_create', '_controller' => 'sylius.controller.product_association_type:createAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['POST' => 0], null, true, false, null],
        ],
        3391 => [
            [['_route' => 'sylius_admin_api_product_association_type_update', '_controller' => 'sylius.controller.product_association_type:updateAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'sylius_admin_api_product_association_type_show', '_controller' => 'sylius.controller.product_association_type:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_admin_api_product_association_type_delete', '_controller' => 'sylius.controller.product_association_type:deleteAction', '_sylius' => ['csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['DELETE' => 0], null, false, true, null],
        ],
        3413 => [
            [['_route' => 'sylius_admin_api_product_option_index', '_controller' => 'sylius.controller.product_option:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['GET' => 0], null, true, false, null],
            [['_route' => 'sylius_admin_api_product_option_create', '_controller' => 'sylius.controller.product_option:createAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['POST' => 0], null, true, false, null],
        ],
        3434 => [
            [['_route' => 'sylius_admin_api_product_option_update', '_controller' => 'sylius.controller.product_option:updateAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'sylius_admin_api_product_option_show', '_controller' => 'sylius.controller.product_option:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_admin_api_product_option_delete', '_controller' => 'sylius.controller.product_option:deleteAction', '_sylius' => ['csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['DELETE' => 0], null, false, true, null],
        ],
        3457 => [
            [['_route' => 'sylius_admin_api_promotion_index', '_controller' => 'sylius.controller.promotion:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'grid' => 'sylius_admin_api_promotion', 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['GET' => 0], null, true, false, null],
            [['_route' => 'sylius_admin_api_promotion_create', '_controller' => 'sylius.controller.promotion:createAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['POST' => 0], null, true, false, null],
        ],
        3478 => [
            [['_route' => 'sylius_admin_api_promotion_update', '_controller' => 'sylius.controller.promotion:updateAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'sylius_admin_api_promotion_show', '_controller' => 'sylius.controller.promotion:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_admin_api_promotion_delete', '_controller' => 'sylius.controller.promotion:deleteAction', '_sylius' => ['csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['DELETE' => 0], null, false, true, null],
        ],
        3498 => [
            [['_route' => 'sylius_admin_api_promotion_coupon_index', '_controller' => 'sylius.controller.promotion_coupon:indexAction', '_sylius' => ['serialization_version' => '$version', 'serialization_groups' => ['Default'], 'section' => 'admin_api', 'repository' => ['method' => 'createPaginatorForPromotion', 'arguments' => ['$promotionCode']]]], ['version', 'promotionCode'], ['GET' => 0], null, true, false, null],
            [['_route' => 'sylius_admin_api_promotion_coupon_create', '_controller' => 'sylius.controller.promotion_coupon:createAction', '_sylius' => ['serialization_version' => '$version', 'section' => 'admin_api', 'factory' => ['method' => 'createForPromotion', 'arguments' => ['expr:service(\'sylius.repository.promotion\').findOneByCode($promotionCode)']], 'criteria' => ['promotion' => '$promotionCode']]], ['version', 'promotionCode'], ['POST' => 0], null, true, false, null],
        ],
        3519 => [
            [['_route' => 'sylius_admin_api_promotion_coupon_update', '_controller' => 'sylius.controller.promotion_coupon:updateAction', '_sylius' => ['serialization_version' => '$version', 'section' => 'admin_api', 'repository' => ['method' => 'findOneByCodeAndPromotionCode', 'arguments' => ['$code', '$promotionCode']]]], ['version', 'promotionCode', 'code'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'sylius_admin_api_promotion_coupon_show', '_controller' => 'sylius.controller.promotion_coupon:showAction', '_sylius' => ['serialization_version' => '$version', 'serialization_groups' => ['Default', 'Detailed'], 'section' => 'admin_api', 'repository' => ['method' => 'findOneByCodeAndPromotionCode', 'arguments' => ['$code', '$promotionCode']]]], ['version', 'promotionCode', 'code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_admin_api_promotion_coupon_delete', '_controller' => 'sylius.controller.promotion_coupon:deleteAction', '_sylius' => ['serialization_version' => '$version', 'section' => 'admin_api', 'csrf_protection' => false, 'repository' => ['method' => 'findOneByCodeAndPromotionCode', 'arguments' => ['$code', '$promotionCode']]]], ['version', 'promotionCode', 'code'], ['DELETE' => 0], null, false, true, null],
        ],
        3567 => [[['_route' => 'sylius_admin_api_taxon_products_update_position', '_controller' => 'sylius.controller.update_product_taxon_position:updatePositionsAction', '_sylius' => ['serialization_version' => '$version']], ['version', 'taxonCode'], ['PUT' => 0], null, false, false, null]],
        3576 => [
            [['_route' => 'sylius_admin_api_taxon_update', '_controller' => 'sylius.controller.taxon:updateAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'form' => 'Sylius\\Bundle\\TaxonomyBundle\\Form\\Type\\TaxonType', 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'sylius_admin_api_taxon_show', '_controller' => 'sylius.controller.taxon:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_admin_api_taxon_delete', '_controller' => 'sylius.controller.taxon:deleteAction', '_sylius' => ['csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['DELETE' => 0], null, false, true, null],
        ],
        3586 => [
            [['_route' => 'sylius_admin_api_taxon_index', '_controller' => 'sylius.controller.taxon:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'grid' => 'sylius_admin_api_taxon', 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['GET' => 0], null, true, false, null],
            [['_route' => 'sylius_admin_api_taxon_create', '_controller' => 'sylius.controller.taxon:createAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'form' => 'Sylius\\Bundle\\TaxonomyBundle\\Form\\Type\\TaxonType', 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['POST' => 0], null, true, false, null],
        ],
        3614 => [
            [['_route' => 'sylius_admin_api_tax_category_index', '_controller' => 'sylius.controller.tax_category:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['GET' => 0], null, true, false, null],
            [['_route' => 'sylius_admin_api_tax_category_create', '_controller' => 'sylius.controller.tax_category:createAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['POST' => 0], null, true, false, null],
        ],
        3635 => [
            [['_route' => 'sylius_admin_api_tax_category_update', '_controller' => 'sylius.controller.tax_category:updateAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'sylius_admin_api_tax_category_show', '_controller' => 'sylius.controller.tax_category:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_admin_api_tax_category_delete', '_controller' => 'sylius.controller.tax_category:deleteAction', '_sylius' => ['csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['DELETE' => 0], null, false, true, null],
        ],
        3654 => [[['_route' => 'sylius_admin_api_tax_rate_index', '_controller' => 'sylius.controller.tax_rate:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['GET' => 0], null, true, false, null]],
        3672 => [[['_route' => 'sylius_admin_api_tax_rate_show', '_controller' => 'sylius.controller.tax_rate:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['GET' => 0], null, false, true, null]],
        3699 => [[['_route' => 'sylius_admin_api_shipment_index', '_controller' => 'sylius.controller.shipment:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'grid' => 'sylius_admin_api_shipment', 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false]], ['version'], ['GET' => 0], null, true, false, null]],
        3717 => [[['_route' => 'sylius_admin_api_shipment_show', '_controller' => 'sylius.controller.shipment:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false]], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        3749 => [
            [['_route' => 'sylius_admin_api_shipping_category_index', '_controller' => 'sylius.controller.shipping_category:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['GET' => 0], null, true, false, null],
            [['_route' => 'sylius_admin_api_shipping_category_create', '_controller' => 'sylius.controller.shipping_category:createAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['POST' => 0], null, true, false, null],
        ],
        3770 => [
            [['_route' => 'sylius_admin_api_shipping_category_update', '_controller' => 'sylius.controller.shipping_category:updateAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'sylius_admin_api_shipping_category_show', '_controller' => 'sylius.controller.shipping_category:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_admin_api_shipping_category_delete', '_controller' => 'sylius.controller.shipping_category:deleteAction', '_sylius' => ['csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['DELETE' => 0], null, false, true, null],
        ],
        3797 => [[['_route' => 'sylius_admin_api_shipping_method_show', '_controller' => 'sylius.controller.shipping_method:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['GET' => 0], null, false, true, null]],
        3816 => [[['_route' => 'sylius_admin_api_zone_index', '_controller' => 'sylius.controller.zone:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['GET' => 0], null, true, false, null]],
        3837 => [
            [['_route' => 'sylius_admin_api_zone_update', '_controller' => 'sylius.controller.zone:updateAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'sylius_admin_api_zone_show', '_controller' => 'sylius.controller.zone:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_admin_api_zone_delete', '_controller' => 'sylius.controller.zone:deleteAction', '_sylius' => ['csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['DELETE' => 0], null, false, true, null],
        ],
        3846 => [[['_route' => 'sylius_admin_api_zone_create', '_controller' => 'sylius.controller.zone:createAction', '_sylius' => ['serialization_version' => '$version', 'factory' => ['method' => 'createTyped', 'arguments' => ['type' => '$type']]]], ['version', 'type'], ['POST' => 0], null, false, true, null]],
        3952 => [[['_route' => 'sylius_shop_ajax_user_check_action', '_controller' => 'sylius.controller.shop_user:showAction', '_format' => 'json', '_sylius' => ['repository' => ['method' => 'findOneByEmail', 'arguments' => ['email' => '$email']], 'serialization_groups' => ['Secured']]], ['_locale'], ['GET' => 0], null, false, false, null]],
        4051 => [[['_route' => 'sylius_shop_ajax_cart_add_item', '_controller' => 'sylius.controller.order_item:addAction', '_format' => 'json', '_sylius' => ['factory' => ['method' => 'createForProduct', 'arguments' => ['expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))']], 'form' => ['type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Order\\AddToCartType', 'options' => ['product' => 'expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))']], 'redirect' => ['route' => 'sylius_shop_cart_summary', 'parameters' => []], 'flash' => 'sylius.cart.add_item']], ['_locale'], ['POST' => 0], null, false, false, null]],
        4162 => [[['_route' => 'sylius_shop_ajax_cart_item_remove', '_controller' => 'sylius.controller.order_item:removeAction', '_format' => 'json', '_sylius' => ['flash' => 'sylius.cart.remove_item']], ['_locale', 'id'], ['DELETE' => 0], null, false, false, null]],
        4275 => [[['_route' => 'sylius_shop_ajax_render_province_form', '_controller' => 'sylius.controller.province:choiceOrTextFieldFormAction', '_sylius' => ['template' => '@SyliusShop/Common/Form/_province.html.twig']], ['_locale'], ['GET' => 0], null, false, false, null]],
        4390 => [[['_route' => 'sylius_shop_partial_taxon_show_by_slug', '_controller' => 'sylius.controller.taxon:showAction', '_sylius' => ['template' => '$template', 'repository' => ['method' => 'findOneBySlug', 'arguments' => ['$slug', 'expr:service(\'sylius.context.locale\').getLocaleCode()']]]], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
        4509 => [[['_route' => 'sylius_shop_partial_taxon_index_by_code', '_controller' => 'sylius.controller.taxon:indexAction', '_sylius' => ['template' => '$template', 'repository' => ['method' => 'findChildren', 'arguments' => ['$code', 'expr:service(\'sylius.context.locale\').getLocaleCode()']]]], ['_locale', 'code'], ['GET' => 0], null, false, true, null]],
        4635 => [[['_route' => 'sylius_shop_partial_channel_menu_taxon_index', '_controller' => 'sylius.controller.taxon:indexAction', '_sylius' => ['template' => '$template', 'repository' => ['method' => 'findChildrenByChannelMenuTaxon', 'arguments' => ['expr:service(\'sylius.context.channel\').getChannel().getMenuTaxon()', 'expr:service(\'sylius.context.locale\').getLocaleCode()']]]], ['_locale'], ['GET' => 0], null, true, false, null]],
        4742 => [[['_route' => 'sylius_shop_partial_cart_summary', '_controller' => 'sylius.controller.order:widgetAction', '_sylius' => ['template' => '$template']], ['_locale'], ['GET' => 0], null, false, false, null]],
        4851 => [[['_route' => 'sylius_shop_partial_cart_add_item', '_controller' => 'sylius.controller.order_item:addAction', '_sylius' => ['template' => '$template', 'factory' => ['method' => 'createForProduct', 'arguments' => ['expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))']], 'form' => ['type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Order\\AddToCartType', 'options' => ['product' => 'expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))']], 'redirect' => ['route' => 'sylius_shop_cart_summary', 'parameters' => []]]], ['_locale'], ['GET' => 0], null, false, false, null]],
        4970 => [[['_route' => 'sylius_shop_partial_product_index_latest', '_controller' => 'sylius.controller.product:indexAction', '_sylius' => ['template' => '$template', 'repository' => ['method' => 'findLatestByChannel', 'arguments' => ['expr:service(\'sylius.context.channel\').getChannel()', 'expr:service(\'sylius.context.locale\').getLocaleCode()', '!!int $count']]]], ['_locale', 'count'], ['GET' => 0], null, false, true, null]],
        5082 => [[['_route' => 'sylius_shop_partial_product_show_by_slug', '_controller' => 'sylius.controller.product:showAction', '_sylius' => ['template' => '$template', 'repository' => ['method' => 'findOneByChannelAndSlug', 'arguments' => ['expr:service(\'sylius.context.channel\').getChannel()', 'expr:service(\'sylius.context.locale\').getLocaleCode()', '$slug']]]], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
        5223 => [[['_route' => 'sylius_shop_partial_product_review_latest', '_controller' => 'sylius.controller.product_review:indexAction', '_sylius' => ['template' => '$template', 'repository' => ['method' => 'findLatestByProductId', 'arguments' => ['$productId', '!!int $count']]], 'count' => 3], ['_locale', 'productId', 'count'], ['GET' => 0], null, false, true, null]],
        5357 => [[['_route' => 'sylius_shop_partial_product_association_show', '_controller' => 'sylius.controller.product_association:showAction', '_sylius' => ['template' => '$template']], ['_locale', 'productId', 'id'], ['GET' => 0], null, false, true, null]],
        5442 => [[['_route' => 'sylius_shop_homepage', '_controller' => 'sylius.controller.shop.homepage:indexAction'], ['_locale'], ['GET' => 0], null, true, true, null]],
        5533 => [[['_route' => 'sylius_shop_login', '_controller' => 'sylius.controller.security:loginAction', '_sylius' => ['template' => '@SyliusShop/login.html.twig', 'logged_in_route' => 'sylius_shop_account_dashboard']], ['_locale'], ['GET' => 0], null, false, false, null]],
        5631 => [[['_route' => 'sylius_shop_login_check', '_controller' => 'sylius.controller.security:checkAction'], ['_locale'], ['POST' => 0], null, false, false, null]],
        5723 => [[['_route' => 'sylius_shop_logout'], ['_locale'], ['GET' => 0], null, false, false, null]],
        5817 => [[['_route' => 'sylius_shop_register', '_controller' => 'sylius.controller.customer:createAction', '_sylius' => ['template' => '@SyliusShop/register.html.twig', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Customer\\CustomerRegistrationType', 'event' => 'register', 'redirect' => ['route' => 'sylius_shop_account_dashboard'], 'flash' => 'sylius.customer.register']], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        5937 => [[['_route' => 'sylius_shop_register_after_checkout', '_controller' => 'sylius.controller.customer:createAction', '_sylius' => ['form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Customer\\CustomerRegistrationType', 'factory' => ['method' => ['expr:service("sylius.factory.customer_after_checkout")', 'createAfterCheckout'], 'arguments' => ['expr:service("sylius.repository.order").findOneByTokenValue($tokenValue)']], 'template' => '@SyliusShop/register.html.twig', 'event' => 'register', 'redirect' => ['route' => 'sylius_shop_account_dashboard'], 'flash' => 'sylius.customer.register']], ['_locale', 'tokenValue'], ['GET' => 0], null, false, true, null]],
        6042 => [[['_route' => 'sylius_shop_request_password_reset_token', '_controller' => 'sylius.controller.shop_user:requestPasswordResetTokenAction', '_sylius' => ['template' => '@SyliusShop/Account/requestPasswordReset.html.twig', 'redirect' => 'sylius_shop_login']], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        6156 => [[['_route' => 'sylius_shop_password_reset', '_controller' => 'sylius.controller.shop_user:resetPasswordAction', '_sylius' => ['template' => '@SyliusShop/Account/resetPassword.html.twig', 'redirect' => 'sylius_shop_login']], ['_locale', 'token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        6248 => [[['_route' => 'sylius_shop_user_request_verification_token', '_controller' => 'sylius.controller.shop_user:requestVerificationTokenAction'], ['_locale'], ['POST' => 0], null, false, false, null]],
        6349 => [[['_route' => 'sylius_shop_user_verification', '_controller' => 'sylius.controller.shop_user:verifyAction', '_sylius' => ['redirect' => 'sylius_shop_account_dashboard']], ['_locale', 'token'], ['GET' => 0], null, false, true, null]],
        6452 => [[['_route' => 'sylius_shop_product_show', '_controller' => 'sylius.controller.product:showAction', '_sylius' => ['template' => '@SyliusShop/Product/show.html.twig', 'repository' => ['method' => 'findOneByChannelAndSlug', 'arguments' => ['expr:service(\'sylius.context.channel\').getChannel()', 'expr:service(\'sylius.context.locale\').getLocaleCode()', '$slug']]]], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
        6549 => [[['_route' => 'sylius_shop_product_index', '_controller' => 'sylius.controller.product:indexAction', '_sylius' => ['template' => '@SyliusShop/Product/index.html.twig', 'grid' => 'sylius_shop_product']], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
        6660 => [[['_route' => 'sylius_shop_product_review_index', '_controller' => 'sylius.controller.product_review:indexAction', '_sylius' => ['template' => '@SyliusShop/ProductReview/index.html.twig', 'repository' => ['method' => 'findAcceptedByProductSlugAndChannel', 'arguments' => ['$slug', 'expr:service(\'sylius.context.locale\').getLocaleCode()', 'expr:service(\'sylius.context.channel\').getChannel()']]]], ['_locale', 'slug'], ['GET' => 0], null, true, false, null]],
        6775 => [[['_route' => 'sylius_shop_product_review_create', '_controller' => 'sylius.controller.product_review:createAction', '_sylius' => ['template' => '@SyliusShop/ProductReview/create.html.twig', 'form' => ['options' => ['validation_groups' => ['sylius', 'sylius_review']]], 'factory' => ['method' => 'createForSubjectWithReviewer', 'arguments' => ['expr:notFoundOnNull(service(\'sylius.repository.product\').findOneByChannelAndSlug(service(\'sylius.context.channel\').getChannel(), service(\'sylius.context.locale\').getLocaleCode(), $slug))', 'expr:service(\'sylius.context.customer\').getCustomer()']], 'redirect' => ['route' => 'sylius_shop_product_show', 'parameters' => ['slug' => '$slug']], 'flash' => 'sylius.review.wait_for_the_acceptation']], ['_locale', 'slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        6868 => [
            [['_route' => 'sylius_shop_cart_summary', '_controller' => 'sylius.controller.order:summaryAction', '_sylius' => ['template' => '@SyliusShop/Cart/summary.html.twig', 'form' => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\CartType']], ['_locale'], ['GET' => 0], null, true, false, null],
            [['_route' => 'sylius_shop_cart_save', '_controller' => 'sylius.controller.order:saveAction', '_sylius' => ['template' => '@SyliusShop/Cart/summary.html.twig', 'redirect' => 'sylius_shop_cart_summary', 'form' => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\CartType', 'flash' => 'sylius.cart.save']], ['_locale'], ['PUT' => 0, 'PATCH' => 1], null, true, false, null],
            [['_route' => 'sylius_shop_cart_clear', '_controller' => 'sylius.controller.order:clearAction', '_sylius' => ['redirect' => 'sylius_shop_cart_summary']], ['_locale'], ['DELETE' => 0], null, true, false, null],
        ],
        6975 => [[['_route' => 'sylius_shop_cart_item_remove', '_controller' => 'sylius.controller.order_item:removeAction', '_sylius' => ['flash' => 'sylius.cart.remove_item', 'redirect' => ['route' => 'sylius_shop_cart_summary', 'parameters' => []]]], ['_locale', 'id'], ['DELETE' => 0], null, false, false, null]],
        7069 => [[['_route' => 'sylius_shop_checkout_start', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sylius_shop_checkout_address'], ['_locale'], ['GET' => 0], null, true, false, null]],
        7171 => [[['_route' => 'sylius_shop_checkout_address', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => ['event' => 'address', 'flash' => false, 'template' => '@SyliusShop/Checkout/address.html.twig', 'form' => ['type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\AddressType', 'options' => ['customer' => 'expr:service(\'sylius.context.customer\').getCustomer()']], 'repository' => ['method' => 'findCartForAddressing', 'arguments' => ['expr:service(\'sylius.context.cart\').getCart().getId()']], 'state_machine' => ['graph' => 'sylius_order_checkout', 'transition' => 'address']]], ['_locale'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        7282 => [[['_route' => 'sylius_shop_checkout_select_shipping', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => ['event' => 'select_shipping', 'flash' => false, 'template' => '@SyliusShop/Checkout/selectShipping.html.twig', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\SelectShippingType', 'repository' => ['method' => 'findCartForSelectingShipping', 'arguments' => ['expr:service(\'sylius.context.cart\').getCart().getId()']], 'state_machine' => ['graph' => 'sylius_order_checkout', 'transition' => 'select_shipping']]], ['_locale'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        7392 => [[['_route' => 'sylius_shop_checkout_select_payment', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => ['event' => 'payment', 'flash' => false, 'template' => '@SyliusShop/Checkout/selectPayment.html.twig', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\SelectPaymentType', 'repository' => ['method' => 'findCartForSelectingPayment', 'arguments' => ['expr:service(\'sylius.context.cart\').getCart().getId()']], 'state_machine' => ['graph' => 'sylius_order_checkout', 'transition' => 'select_payment']]], ['_locale'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        7495 => [[['_route' => 'sylius_shop_checkout_complete', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => ['event' => 'complete', 'flash' => false, 'template' => '@SyliusShop/Checkout/complete.html.twig', 'repository' => ['method' => 'findCartForSummary', 'arguments' => ['expr:service(\'sylius.context.cart\').getCart().getId()']], 'state_machine' => ['graph' => 'sylius_order_checkout', 'transition' => 'complete'], 'redirect' => ['route' => 'sylius_shop_order_pay', 'parameters' => ['tokenValue' => 'resource.tokenValue']], 'form' => ['type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\CompleteType', 'options' => ['validation_groups' => 'sylius_checkout_complete']]]], ['_locale'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        7588 => [[['_route' => 'sylius_shop_contact_request', '_controller' => 'sylius.controller.shop.contact:requestAction', '_sylius' => ['redirect' => 'sylius_shop_homepage']], ['_locale'], ['GET' => 0, 'POST' => 1], null, true, false, null]],
        7690 => [[['_route' => 'sylius_shop_order_thank_you', '_controller' => 'sylius.controller.order:thankYouAction', '_sylius' => ['template' => '@SyliusShop/Order/thankYou.html.twig']], ['_locale'], ['GET' => 0], null, false, false, null]],
        7794 => [[['_route' => 'sylius_shop_order_pay', '_controller' => 'sylius.controller.payum:prepareCaptureAction', '_sylius' => ['redirect' => ['route' => 'sylius_shop_order_after_pay']]], ['_locale', 'tokenValue'], ['GET' => 0], null, false, false, null]],
        7896 => [[['_route' => 'sylius_shop_order_after_pay', '_controller' => 'sylius.controller.payum:afterCaptureAction'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        7996 => [[['_route' => 'sylius_shop_order_show', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => ['template' => '@SyliusShop/Order/show.html.twig', 'repository' => ['method' => 'findOneBy', 'arguments' => [['tokenValue' => '$tokenValue']]], 'form' => ['type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\SelectPaymentType', 'options' => ['validation_groups' => []]], 'redirect' => ['route' => 'sylius_shop_order_pay', 'parameters' => ['tokenValue' => 'resource.tokenValue']], 'flash' => false]], ['_locale', 'tokenValue'], ['GET' => 0, 'PUT' => 1], null, false, true, null]],
        8096 => [[['_route' => 'sylius_shop_account_order_index', '_controller' => 'sylius.controller.order:indexAction', '_sylius' => ['section' => 'shop_account', 'template' => '@SyliusShop/Account/Order/index.html.twig', 'grid' => 'sylius_shop_account_order']], ['_locale'], ['GET' => 0], null, true, false, null]],
        8205 => [[['_route' => 'sylius_shop_account_order_show', '_controller' => 'sylius.controller.order:showAction', '_sylius' => ['section' => 'shop_account', 'template' => '@SyliusShop/Account/Order/show.html.twig', 'repository' => ['method' => 'findOneByNumberAndCustomer', 'arguments' => ['$number', 'expr:service(\'sylius.context.customer\').getCustomer()']]]], ['_locale', 'number'], ['GET' => 0], null, false, true, null]],
        8312 => [[['_route' => 'sylius_shop_account_address_book_index', '_controller' => 'sylius.controller.address:indexAction', '_sylius' => ['section' => 'shop_account', 'template' => '@SyliusShop/Account/AddressBook/index.html.twig', 'paginate' => false, 'repository' => ['method' => 'findByCustomer', 'arguments' => ['expr:service(\'sylius.context.customer\').getCustomer()']]]], ['_locale'], ['GET' => 0], null, true, false, null]],
        8423 => [[['_route' => 'sylius_shop_account_address_book_create', '_controller' => 'sylius.controller.address:createAction', '_sylius' => ['section' => 'shop_account', 'template' => '@SyliusShop/Account/AddressBook/create.html.twig', 'factory' => ['method' => 'createForCustomer', 'arguments' => ['expr:service(\'sylius.context.customer\').getCustomer()']], 'redirect' => ['route' => 'sylius_shop_account_address_book_index', 'parameters' => []], 'flash' => 'sylius.customer.add_address']], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        8544 => [[['_route' => 'sylius_shop_account_address_book_update', '_controller' => 'sylius.controller.address:updateAction', '_sylius' => ['section' => 'shop_account', 'template' => '@SyliusShop/Account/AddressBook/update.html.twig', 'repository' => ['method' => 'findOneByCustomer', 'arguments' => ['$id', 'expr:service(\'sylius.context.customer\').getCustomer()']], 'redirect' => ['route' => 'sylius_shop_account_address_book_index', 'parameters' => []]]], ['_locale', 'id'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        8660 => [[['_route' => 'sylius_shop_account_address_book_delete', '_controller' => 'sylius.controller.address:deleteAction', '_sylius' => ['section' => 'shop_account', 'repository' => ['method' => 'findOneByCustomer', 'arguments' => ['$id', 'expr:service(\'sylius.context.customer\').getCustomer()']], 'redirect' => 'sylius_shop_account_address_book_index']], ['_locale', 'id'], ['DELETE' => 0], null, false, true, null]],
        8793 => [[['_route' => 'sylius_shop_account_address_book_set_as_default', '_controller' => 'sylius.controller.customer:updateAction', '_sylius' => ['section' => 'shop_account', 'template' => '@SyliusShop/Account/AddressBook/_defaultAddressForm.html.twig', 'form' => ['type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Customer\\CustomerDefaultAddressType', 'options' => ['customer' => 'expr:service(\'sylius.context.customer\').getCustomer()']], 'repository' => ['method' => 'find', 'arguments' => ['expr:service(\'sylius.context.customer\').getCustomer()']], 'redirect' => ['route' => 'sylius_shop_account_address_book_index', 'parameters' => []], 'flash' => 'sylius.customer.set_address_as_default']], ['_locale', 'id'], ['GET' => 0, 'PATCH' => 1], null, false, false, null]],
        8886 => [[['_route' => 'sylius_shop_account_root', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sylius_shop_account_dashboard', 'permanent' => true], ['_locale'], ['GET' => 0], null, true, false, null]],
        8989 => [[['_route' => 'sylius_shop_account_dashboard', '_controller' => 'sylius.controller.customer:showAction', '_sylius' => ['template' => '@SyliusShop/Account/dashboard.html.twig', 'repository' => ['method' => 'find', 'arguments' => ['expr:service(\'sylius.context.customer\').getCustomer()']]]], ['_locale'], ['GET' => 0], null, false, false, null]],
        9095 => [[['_route' => 'sylius_shop_account_profile_update', '_controller' => 'sylius.controller.customer:updateAction', '_sylius' => ['template' => '@SyliusShop/Account/profileUpdate.html.twig', 'form' => 'Sylius\\Bundle\\CustomerBundle\\Form\\Type\\CustomerProfileType', 'repository' => ['method' => 'find', 'arguments' => ['expr:service(\'sylius.context.customer\').getCustomer()']], 'redirect' => ['route' => 'sylius_shop_account_profile_update', 'parameters' => []]]], ['_locale'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        9205 => [[['_route' => 'sylius_shop_account_change_password', '_controller' => 'sylius.controller.shop_user:changePasswordAction', '_sylius' => ['template' => '@SyliusShop/Account/changePassword.html.twig', 'redirect' => 'sylius_shop_account_dashboard']], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        9316 => [[['_route' => 'sylius_shop_switch_currency', '_controller' => 'sylius.controller.shop.currency_switch:switchAction'], ['_locale', 'code'], ['GET' => 0], null, false, true, null]],
        9425 => [[['_route' => 'sylius_shop_switch_locale', '_controller' => 'sylius.controller.shop.locale_switch:switchAction'], ['_locale', 'code'], ['GET' => 0], null, false, true, null]],
        9464 => [[['_route' => 'payum_authorize_do', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\AuthorizeController::doAction'], ['payum_token'], null, null, false, true, null]],
        9489 => [[['_route' => 'payum_capture_do', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\CaptureController::doAction'], ['payum_token'], null, null, false, true, null]],
        9523 => [[['_route' => 'payum_notify_do_unsafe', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\NotifyController::doUnsafeAction'], ['gateway'], null, null, false, true, null]],
        9540 => [
            [['_route' => 'payum_notify_do', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\NotifyController::doAction'], ['payum_token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
