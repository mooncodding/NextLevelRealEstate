<?php

namespace App\Services;
use Spatie\Permission\Models\Permission;

class PermissionService
{
    public function updateModuleInAllPermissions()
    {
        Permission::whereIn('name' , ['organizations', 'create_organization', 'edit_organization', 'delete_organization'])->update(['module' => 'ORGANIZATIONS']);

        Permission::whereIn('name' , ['permissions', 'create_permission', 'edit_permission', 'delete_permission'])->update(['module' => 'PERMISSIONS']);
        
        Permission::whereIn('name' , ['roles', 'create_role', 'edit_role', 'delete_role'])->update(['module' => 'ROLES']);
        
        Permission::whereIn('name' , ['payment_modes', 'create_payment_mode', 'edit_payment_mode', 'delete_payment_mode'])->update(['module' => 'PAYMENT_MODES']);
        
        Permission::whereIn('name' , ['customers', 'create_customer', 'edit_customer', 'delete_customer'])->update(['module' => 'CUSTOMERS']);
        
        Permission::whereIn('name' , ['suppliers', 'create_supplier', 'edit_supplier', 'delete_supplier'])->update(['module' => 'SUPPLIERS']);
        
        Permission::whereIn('name' , ['categories', 'create_category', 'edit_category', 'delete_category'])->update(['module' => 'CATEGORIES']);
        
        Permission::whereIn('name' , ['units', 'create_unit', 'edit_unit', 'delete_unit'])->update(['module' => 'UNITS']);
        
        Permission::whereIn('name' , ['products', 'create_product', 'edit_product', 'delete_product'])->update(['module' => 'PRODUCTS']);
        
        Permission::whereIn('name' , ['outlets', 'create_outlet', 'edit_outlet', 'delete_outlet'])->update(['module' => 'OUTLETS']);
        
        Permission::whereIn('name' , ['sales', 'create_sale', 'edit_sale', 'delete_sale', 'discount'])->update(['module' => 'SALES']);
        
        Permission::whereIn('name' , ['purchases', 'create_purchase', 'edit_purchase', 'delete_purchase'])->update(['module' => 'PURCHASES']);
        
        Permission::whereIn('name' , ['sale_payments', 'create_sale_payment', 'edit_sale_payment', 'delete_sale_payment'])->update(['module' => 'SALE_PAYMENTS']);
        
        Permission::whereIn('name' , ['purchase_payments', 'create_purchase_payment', 'edit_purchase_payment', 'delete_purchase_payment'])->update(['module' => 'PURCHASE_PAYMENTS']);
        
        Permission::whereIn('name' , ['banks', 'create_bank', 'edit_bank', 'delete_bank'])->update(['module' => 'BANKS']);
        
        Permission::whereIn('name' , ['bank_accounts', 'create_bank_account', 'edit_bank_account', 'delete_bank_account'])->update(['module' => 'BANK_ACCOUNTS']);
        
        Permission::whereIn('name' , ['initial_stock', 'create_initial_stock', 'edit_initial_stock', 'delete_initial_stock'])->update(['module' => 'INITIAL_STOCK']);
        
        Permission::whereIn('name' , ['expenses', 'create_expense', 'edit_expense', 'delete_expense'])->update(['module' => 'EXPENSES']);
        
        Permission::whereIn('name' , ['stock_adjustments', 'create_stock_adjustment', 'edit_stock_adjustment', 'delete_stock_adjustment'])->update(['module' => 'STOCK_ADJUSTMENTS']);
        
        Permission::whereIn('name' , ['transfers', 'create_transfer', 'edit_transfer', 'delete_transfer'])->update(['module' => 'TRANSFERS']);
        
        Permission::whereIn('name' , ['brands', 'create_brand', 'edit_brand', 'delete_brand'])->update(['module' => 'BRANDS']);
        
        Permission::whereIn('name' , ['pos', 'pos_sales'])->update(['module' => 'POS']);

        Permission::whereIn('name' , ['registers', 'create_register', 'edit_register', 'delete_register'])->update(['module' => 'REGISTERS']);

        Permission::whereIn('name' , ['tax_rates', 'create_tax_rate', 'edit_tax_rate', 'delete_tax_rate'])->update(['module' => 'TAX_RATES']);

        Permission::whereIn('name' , ['return_and_refund', 'create_return_and_refund', 'edit_return_and_refund', 'delete_return_and_refund'])->update(['module' => 'RETURN_AND_REFUNDS']);

        Permission::whereIn('name' , ['profile', 'dashboard', 'application', 'cancel_sale', 'allow_bank_transaction'])->update(['module' => 'MISCELLANEOUS']);

        Permission::whereIn('name' , ['customer_report', 'supplier_report', 'sale_payment_report', 'purchase_payment_report', 'register_report', 'stock_report', 'stock_adjustment_report', 'expense_report', 'bank_report', 'product_report', 'profit_loss_report', 'return_report'])->update(['module' => 'REPORTS']);

        // return Permission::whereNull('module')->pluck('name');
    }
}