<?php

$settings = array(

    'settings' => array(

        'general-options' => array(
            'title' => __( 'General Options', 'yith-woocommerce-product-bundles' ),
            'type'  => 'title',
            'desc'  => '',
            'id'    => 'yith-wcpb-general-options'
        ),

        'show-bundled-items-in-report' => array(
            'id'      => 'yith-wcpb-show-bundled-items-in-report',
            'name'    => __( 'Show bundled items in Reports', 'yith-woocommerce-product-bundles' ),
            'type'    => 'checkbox',
            'desc'    => __( 'Flag this option to show also the bundled items in WooCommerce Reports.', 'yith-woocommerce-product-bundles' ),
            'default' => 'no'
        ),

        'hide-bundled-items-in-cart' => array(
            'id'      => 'yith-wcpb-hide-bundled-items-in-cart',
            'name'    => __( 'Hide bundled items in Cart and Checkout', 'yith-woocommerce-product-bundles' ),
            'type'    => 'checkbox',
            'desc'    => __( 'Flag this option to hide the bundled items in WooCommerce Cart and Checkout.', 'yith-woocommerce-product-bundles' ),
            'default' => 'no'
        ),

        'bundle-out-of-stock-sync' => array(
            'id'      => 'yith-wcpb-bundle-out-of-stock-sync',
            'name'    => __( 'Out of stock Sync', 'yith-woocommerce-product-bundles' ),
            'type'    => 'checkbox',
            'desc'    => __( 'Flag this option to set the bundle as Out of Stock if it contains at least one Out of Stock item.', 'yith-woocommerce-product-bundles' ),
            'default' => 'no'
        ),

        'pip-bundle-order-pricing' => array(
            'id'      => 'yith-wcpb-pip-bundle-order-pricing',
            'name'    => __( 'Order pricing for "per item pricing" Bundles', 'yith-woocommerce-product-bundles' ),
            'type'    => 'select',
            'options' => array(
                'price-in-bundle'        => __( 'Price in bundle', 'yith-woocommerce-product-bundles' ),
                'price-in-bundled-items' => __( 'Price in bundled items', 'yith-woocommerce-product-bundles' ),
            ),
            'desc'    => __( 'Choose how you want to view order pricing for "per item pricing" bundle products', 'yith-woocommerce-product-bundles' ),
            'default' => 'price-in-bundle'
        ),

        'general-options-end' => array(
            'type' => 'sectionend',
            'id'   => 'yith-wcqv-general-options'
        )

    )
);

return apply_filters( 'yith_wcpb_panel_settings_options', $settings );