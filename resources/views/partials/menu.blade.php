<aside class="main-sidebar">
    <section class="sidebar" style="height: auto;">
        <ul class="sidebar-menu tree" data-widget="tree">
            <li>
                <a href="{{ route("admin.home") }}">
                    <i class="fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            @can('user_management_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-users">

                        </i>
                        <span>{{ trans('cruds.userManagement.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('permission_access')
                            <li class="{{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "active" : "" }}">
                                <a href="{{ route("admin.permissions.index") }}">
                                    <i class="fa-fw fas fa-unlock-alt">

                                    </i>
                                    <span>{{ trans('cruds.permission.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="{{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "active" : "" }}">
                                <a href="{{ route("admin.roles.index") }}">
                                    <i class="fa-fw fas fa-briefcase">

                                    </i>
                                    <span>{{ trans('cruds.role.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('add_business_access')
                            <li class="{{ request()->is("admin/add-businesses") || request()->is("admin/add-businesses/*") ? "active" : "" }}">
                                <a href="{{ route("admin.add-businesses.index") }}">
                                    <i class="fa-fw fas fa-briefcase">

                                    </i>
                                    <span>{{ trans('cruds.addBusiness.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="{{ request()->is("admin/users") || request()->is("admin/users/*") ? "active" : "" }}">
                                <a href="{{ route("admin.users.index") }}">
                                    <i class="fa-fw fas fa-user">

                                    </i>
                                    <span>{{ trans('cruds.user.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('audit_log_access')
                            <li class="{{ request()->is("admin/audit-logs") || request()->is("admin/audit-logs/*") ? "active" : "" }}">
                                <a href="{{ route("admin.audit-logs.index") }}">
                                    <i class="fa-fw fas fa-file-alt">

                                    </i>
                                    <span>{{ trans('cruds.auditLog.title') }}</span>

                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('party_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-user-plus">

                        </i>
                        <span>{{ trans('cruds.party.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('party_detail_access')
                            <li class="{{ request()->is("admin/party-details") || request()->is("admin/party-details/*") ? "active" : "" }}">
                                <a href="{{ route("admin.party-details.index") }}">
                                    <i class="fa-fw far fa-address-card">

                                    </i>
                                    <span>{{ trans('cruds.partyDetail.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('loyalty_point_access')
                            <li class="{{ request()->is("admin/loyalty-points") || request()->is("admin/loyalty-points/*") ? "active" : "" }}">
                                <a href="{{ route("admin.loyalty-points.index") }}">
                                    <i class="fa-fw fas fa-eye">

                                    </i>
                                    <span>{{ trans('cruds.loyaltyPoint.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('whatsapp_connect_access')
                            <li class="{{ request()->is("admin/whatsapp-connects") || request()->is("admin/whatsapp-connects/*") ? "active" : "" }}">
                                <a href="{{ route("admin.whatsapp-connects.index") }}">
                                    <i class="fa-fw fab fa-whatsapp">

                                    </i>
                                    <span>{{ trans('cruds.whatsappConnect.title') }}</span>

                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('item_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-luggage-cart">

                        </i>
                        <span>{{ trans('cruds.item.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('add_item_access')
                            <li class="{{ request()->is("admin/add-items") || request()->is("admin/add-items/*") ? "active" : "" }}">
                                <a href="{{ route("admin.add-items.index") }}">
                                    <i class="fa-fw fas fa-shopping-cart">

                                    </i>
                                    <span>{{ trans('cruds.addItem.title') }}</span>

                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('sale_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-bezier-curve">

                        </i>
                        <span>{{ trans('cruds.sale.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('sale_invoice_access')
                            <li class="{{ request()->is("admin/sale-invoices") || request()->is("admin/sale-invoices/*") ? "active" : "" }}">
                                <a href="{{ route("admin.sale-invoices.index") }}">
                                    <i class="fa-fw fas fa-file-alt">

                                    </i>
                                    <span>{{ trans('cruds.saleInvoice.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('estimate_quotation_access')
                            <li class="{{ request()->is("admin/estimate-quotations") || request()->is("admin/estimate-quotations/*") ? "active" : "" }}">
                                <a href="{{ route("admin.estimate-quotations.index") }}">
                                    <i class="fa-fw fas fa-file-alt">

                                    </i>
                                    <span>{{ trans('cruds.estimateQuotation.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('proforma_invoice_access')
                            <li class="{{ request()->is("admin/proforma-invoices") || request()->is("admin/proforma-invoices/*") ? "active" : "" }}">
                                <a href="{{ route("admin.proforma-invoices.index") }}">
                                    <i class="fa-fw fas fa-file-alt">

                                    </i>
                                    <span>{{ trans('cruds.proformaInvoice.title') }}</span>

                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('purchase_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-file-export">

                        </i>
                        <span>{{ trans('cruds.purchase.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('purchase_bill_access')
                            <li class="{{ request()->is("admin/purchase-bills") || request()->is("admin/purchase-bills/*") ? "active" : "" }}">
                                <a href="{{ route("admin.purchase-bills.index") }}">
                                    <i class="fa-fw fas fa-file-alt">

                                    </i>
                                    <span>{{ trans('cruds.purchaseBill.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('payment_out_access')
                            <li class="{{ request()->is("admin/payment-outs") || request()->is("admin/payment-outs/*") ? "active" : "" }}">
                                <a href="{{ route("admin.payment-outs.index") }}">
                                    <i class="fa-fw fab fa-amazon-pay">

                                    </i>
                                    <span>{{ trans('cruds.paymentOut.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('purchase_order_access')
                            <li class="{{ request()->is("admin/purchase-orders") || request()->is("admin/purchase-orders/*") ? "active" : "" }}">
                                <a href="{{ route("admin.purchase-orders.index") }}">
                                    <i class="fa-fw fas fa-file-alt">

                                    </i>
                                    <span>{{ trans('cruds.purchaseOrder.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('expense_access')
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa-fw fab fa-accusoft">

                                    </i>
                                    <span>{{ trans('cruds.expense.title') }}</span>
                                    <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                                </a>
                                <ul class="treeview-menu">
                                    @can('expense_category_access')
                                        <li class="{{ request()->is("admin/expense-categories") || request()->is("admin/expense-categories/*") ? "active" : "" }}">
                                            <a href="{{ route("admin.expense-categories.index") }}">
                                                <i class="fa-fw fas fa-hand-holding-usd">

                                                </i>
                                                <span>{{ trans('cruds.expenseCategory.title') }}</span>

                                            </a>
                                        </li>
                                    @endcan
                                    @can('expense_list_access')
                                        <li class="{{ request()->is("admin/expense-lists") || request()->is("admin/expense-lists/*") ? "active" : "" }}">
                                            <a href="{{ route("admin.expense-lists.index") }}">
                                                <i class="fa-fw fas fa-arrow-circle-right">

                                                </i>
                                                <span>{{ trans('cruds.expenseList.title') }}</span>

                                            </a>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('stock_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-warehouse">

                        </i>
                        <span>{{ trans('cruds.stock.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('current_stock_access')
                            <li class="{{ request()->is("admin/current-stocks") || request()->is("admin/current-stocks/*") ? "active" : "" }}">
                                <a href="{{ route("admin.current-stocks.index") }}">
                                    <i class="fa-fw fas fa-cubes">

                                    </i>
                                    <span>{{ trans('cruds.currentStock.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('stocks_report_access')
                            <li class="{{ request()->is("admin/stocks-reports") || request()->is("admin/stocks-reports/*") ? "active" : "" }}">
                                <a href="{{ route("admin.stocks-reports.index") }}">
                                    <i class="fa-fw fab fa-accusoft">

                                    </i>
                                    <span>{{ trans('cruds.stocksReport.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('stock_history_access')
                            <li class="{{ request()->is("admin/stock-histories") || request()->is("admin/stock-histories/*") ? "active" : "" }}">
                                <a href="{{ route("admin.stock-histories.index") }}">
                                    <i class="fa-fw fas fa-history">

                                    </i>
                                    <span>{{ trans('cruds.stockHistory.title') }}</span>

                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('bank_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-university">

                        </i>
                        <span>{{ trans('cruds.bank.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('bank_account_access')
                            <li class="{{ request()->is("admin/bank-accounts") || request()->is("admin/bank-accounts/*") ? "active" : "" }}">
                                <a href="{{ route("admin.bank-accounts.index") }}">
                                    <i class="fa-fw fas fa-university">

                                    </i>
                                    <span>{{ trans('cruds.bankAccount.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('cash_in_hand_access')
                            <li class="{{ request()->is("admin/cash-in-hands") || request()->is("admin/cash-in-hands/*") ? "active" : "" }}">
                                <a href="{{ route("admin.cash-in-hands.index") }}">
                                    <i class="fa-fw fas fa-handshake">

                                    </i>
                                    <span>{{ trans('cruds.cashInHand.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('deposit_withdraw_access')
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa-fw fas fa-cogs">

                                    </i>
                                    <span>{{ trans('cruds.depositWithdraw.title') }}</span>
                                    <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                                </a>
                                <ul class="treeview-menu">
                                    @can('bank_to_cash_access')
                                        <li class="{{ request()->is("admin/bank-to-cashes") || request()->is("admin/bank-to-cashes/*") ? "active" : "" }}">
                                            <a href="{{ route("admin.bank-to-cashes.index") }}">
                                                <i class="fa-fw fas fa-money-check-alt">

                                                </i>
                                                <span>{{ trans('cruds.bankToCash.title') }}</span>

                                            </a>
                                        </li>
                                    @endcan
                                    @can('cash_to_bank_access')
                                        <li class="{{ request()->is("admin/cash-to-banks") || request()->is("admin/cash-to-banks/*") ? "active" : "" }}">
                                            <a href="{{ route("admin.cash-to-banks.index") }}">
                                                <i class="fa-fw fas fa-money-check-alt">

                                                </i>
                                                <span>{{ trans('cruds.cashToBank.title') }}</span>

                                            </a>
                                        </li>
                                    @endcan
                                    @can('bank_to_bank_access')
                                        <li class="{{ request()->is("admin/bank-to-banks") || request()->is("admin/bank-to-banks/*") ? "active" : "" }}">
                                            <a href="{{ route("admin.bank-to-banks.index") }}">
                                                <i class="fa-fw fas fa-money-check-alt">

                                                </i>
                                                <span>{{ trans('cruds.bankToBank.title') }}</span>

                                            </a>
                                        </li>
                                    @endcan
                                    @can('adjust_bank_balance_access')
                                        <li class="{{ request()->is("admin/adjust-bank-balances") || request()->is("admin/adjust-bank-balances/*") ? "active" : "" }}">
                                            <a href="{{ route("admin.adjust-bank-balances.index") }}">
                                                <i class="fa-fw fas fa-money-check-alt">

                                                </i>
                                                <span>{{ trans('cruds.adjustBankBalance.title') }}</span>

                                            </a>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('master_data_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-cogs">

                        </i>
                        <span>{{ trans('cruds.masterData.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('user_alert_access')
                            <li class="{{ request()->is("admin/user-alerts") || request()->is("admin/user-alerts/*") ? "active" : "" }}">
                                <a href="{{ route("admin.user-alerts.index") }}">
                                    <i class="fa-fw fas fa-bell">

                                    </i>
                                    <span>{{ trans('cruds.userAlert.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('unit_access')
                            <li class="{{ request()->is("admin/units") || request()->is("admin/units/*") ? "active" : "" }}">
                                <a href="{{ route("admin.units.index") }}">
                                    <i class="fa-fw fas fa-universal-access">

                                    </i>
                                    <span>{{ trans('cruds.unit.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('category_access')
                            <li class="{{ request()->is("admin/categories") || request()->is("admin/categories/*") ? "active" : "" }}">
                                <a href="{{ route("admin.categories.index") }}">
                                    <i class="fa-fw fas fa-cart-arrow-down">

                                    </i>
                                    <span>{{ trans('cruds.category.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('tax_rate_access')
                            <li class="{{ request()->is("admin/tax-rates") || request()->is("admin/tax-rates/*") ? "active" : "" }}">
                                <a href="{{ route("admin.tax-rates.index") }}">
                                    <i class="fa-fw fas fa-cogs">

                                    </i>
                                    <span>{{ trans('cruds.taxRate.title') }}</span>

                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('report_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw far fa-address-card">

                        </i>
                        <span>{{ trans('cruds.report.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('transaction_report_access')
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa-fw fas fa-exchange-alt">

                                    </i>
                                    <span>{{ trans('cruds.transactionReport.title') }}</span>
                                    <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                                </a>
                                <ul class="treeview-menu">
                                    @can('sale_report_access')
                                        <li class="{{ request()->is("admin/sale-reports") || request()->is("admin/sale-reports/*") ? "active" : "" }}">
                                            <a href="{{ route("admin.sale-reports.index") }}">
                                                <i class="fa-fw fas fa-bookmark">

                                                </i>
                                                <span>{{ trans('cruds.saleReport.title') }}</span>

                                            </a>
                                        </li>
                                    @endcan
                                    @can('purchase_report_access')
                                        <li class="{{ request()->is("admin/purchase-reports") || request()->is("admin/purchase-reports/*") ? "active" : "" }}">
                                            <a href="{{ route("admin.purchase-reports.index") }}">
                                                <i class="fa-fw fas fa-shopping-cart">

                                                </i>
                                                <span>{{ trans('cruds.purchaseReport.title') }}</span>

                                            </a>
                                        </li>
                                    @endcan
                                    @can('day_book_access')
                                        <li class="{{ request()->is("admin/day-books") || request()->is("admin/day-books/*") ? "active" : "" }}">
                                            <a href="{{ route("admin.day-books.index") }}">
                                                <i class="fa-fw fas fa-book">

                                                </i>
                                                <span>{{ trans('cruds.dayBook.title') }}</span>

                                            </a>
                                        </li>
                                    @endcan
                                    @can('all_transaction_access')
                                        <li class="{{ request()->is("admin/all-transactions") || request()->is("admin/all-transactions/*") ? "active" : "" }}">
                                            <a href="{{ route("admin.all-transactions.index") }}">
                                                <i class="fa-fw fas fa-exchange-alt">

                                                </i>
                                                <span>{{ trans('cruds.allTransaction.title') }}</span>

                                            </a>
                                        </li>
                                    @endcan
                                    @can('profit_loss_access')
                                        <li class="{{ request()->is("admin/profit-losses") || request()->is("admin/profit-losses/*") ? "active" : "" }}">
                                            <a href="{{ route("admin.profit-losses.index") }}">
                                                <i class="fa-fw fab fa-gratipay">

                                                </i>
                                                <span>{{ trans('cruds.profitLoss.title') }}</span>

                                            </a>
                                        </li>
                                    @endcan
                                    @can('bill_wise_profit_access')
                                        <li class="{{ request()->is("admin/bill-wise-profits") || request()->is("admin/bill-wise-profits/*") ? "active" : "" }}">
                                            <a href="{{ route("admin.bill-wise-profits.index") }}">
                                                <i class="fa-fw fas fa-file-invoice">

                                                </i>
                                                <span>{{ trans('cruds.billWiseProfit.title') }}</span>

                                            </a>
                                        </li>
                                    @endcan
                                    @can('balance_sheet_access')
                                        <li class="{{ request()->is("admin/balance-sheets") || request()->is("admin/balance-sheets/*") ? "active" : "" }}">
                                            <a href="{{ route("admin.balance-sheets.index") }}">
                                                <i class="fa-fw fas fa-balance-scale">

                                                </i>
                                                <span>{{ trans('cruds.balanceSheet.title') }}</span>

                                            </a>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                        @endcan
                        @can('party_report_access')
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa-fw fas fa-user-friends">

                                    </i>
                                    <span>{{ trans('cruds.partyReport.title') }}</span>
                                    <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                                </a>
                                <ul class="treeview-menu">
                                    @can('party_statement_access')
                                        <li class="{{ request()->is("admin/party-statements") || request()->is("admin/party-statements/*") ? "active" : "" }}">
                                            <a href="{{ route("admin.party-statements.index") }}">
                                                <i class="fa-fw fas fa-cannabis">

                                                </i>
                                                <span>{{ trans('cruds.partyStatement.title') }}</span>

                                            </a>
                                        </li>
                                    @endcan
                                    @can('party_wise_profit_loss_access')
                                        <li class="{{ request()->is("admin/party-wise-profit-losses") || request()->is("admin/party-wise-profit-losses/*") ? "active" : "" }}">
                                            <a href="{{ route("admin.party-wise-profit-losses.index") }}">
                                                <i class="fa-fw fab fa-angellist">

                                                </i>
                                                <span>{{ trans('cruds.partyWiseProfitLoss.title') }}</span>

                                            </a>
                                        </li>
                                    @endcan
                                    @can('all_party_access')
                                        <li class="{{ request()->is("admin/all-parties") || request()->is("admin/all-parties/*") ? "active" : "" }}">
                                            <a href="{{ route("admin.all-parties.index") }}">
                                                <i class="fa-fw fas fa-user-cog">

                                                </i>
                                                <span>{{ trans('cruds.allParty.title') }}</span>

                                            </a>
                                        </li>
                                    @endcan
                                    @can('party_report_by_item_access')
                                        <li class="{{ request()->is("admin/party-report-by-items") || request()->is("admin/party-report-by-items/*") ? "active" : "" }}">
                                            <a href="{{ route("admin.party-report-by-items.index") }}">
                                                <i class="fa-fw fas fa-chalkboard-teacher">

                                                </i>
                                                <span>{{ trans('cruds.partyReportByItem.title') }}</span>

                                            </a>
                                        </li>
                                    @endcan
                                    @can('sale_purchase_by_party_access')
                                        <li class="{{ request()->is("admin/sale-purchase-by-parties") || request()->is("admin/sale-purchase-by-parties/*") ? "active" : "" }}">
                                            <a href="{{ route("admin.sale-purchase-by-parties.index") }}">
                                                <i class="fa-fw fas fa-arrow-circle-right">

                                                </i>
                                                <span>{{ trans('cruds.salePurchaseByParty.title') }}</span>

                                            </a>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                        @endcan
                        @can('stock_report_access')
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa-fw fas fa-arrow-right">

                                    </i>
                                    <span>{{ trans('cruds.stockReport.title') }}</span>
                                    <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                                </a>
                                <ul class="treeview-menu">
                                    @can('stocks_summary_access')
                                        <li class="{{ request()->is("admin/stocks-summaries") || request()->is("admin/stocks-summaries/*") ? "active" : "" }}">
                                            <a href="{{ route("admin.stocks-summaries.index") }}">
                                                <i class="fa-fw fas fa-umbrella-beach">

                                                </i>
                                                <span>{{ trans('cruds.stocksSummary.title') }}</span>

                                            </a>
                                        </li>
                                    @endcan
                                    @can('item_report_by_party_access')
                                        <li class="{{ request()->is("admin/item-report-by-parties") || request()->is("admin/item-report-by-parties/*") ? "active" : "" }}">
                                            <a href="{{ route("admin.item-report-by-parties.index") }}">
                                                <i class="fa-fw fas fa-user-friends">

                                                </i>
                                                <span>{{ trans('cruds.itemReportByParty.title') }}</span>

                                            </a>
                                        </li>
                                    @endcan
                                    @can('item_wise_profit_and_loass_access')
                                        <li class="{{ request()->is("admin/item-wise-profit-and-loasses") || request()->is("admin/item-wise-profit-and-loasses/*") ? "active" : "" }}">
                                            <a href="{{ route("admin.item-wise-profit-and-loasses.index") }}">
                                                <i class="fa-fw fas fa-luggage-cart">

                                                </i>
                                                <span>{{ trans('cruds.itemWiseProfitAndLoass.title') }}</span>

                                            </a>
                                        </li>
                                    @endcan
                                    @can('low_stock_summary_access')
                                        <li class="{{ request()->is("admin/low-stock-summaries") || request()->is("admin/low-stock-summaries/*") ? "active" : "" }}">
                                            <a href="{{ route("admin.low-stock-summaries.index") }}">
                                                <i class="fa-fw fab fa-studiovinari">

                                                </i>
                                                <span>{{ trans('cruds.lowStockSummary.title') }}</span>

                                            </a>
                                        </li>
                                    @endcan
                                    @can('stock_detail_access')
                                        <li class="{{ request()->is("admin/stock-details") || request()->is("admin/stock-details/*") ? "active" : "" }}">
                                            <a href="{{ route("admin.stock-details.index") }}">
                                                <i class="fa-fw fab fa-audible">

                                                </i>
                                                <span>{{ trans('cruds.stockDetail.title') }}</span>

                                            </a>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                        @endcan
                        @can('expense_report_access')
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa-fw fab fa-expeditedssl">

                                    </i>
                                    <span>{{ trans('cruds.expenseReport.title') }}</span>
                                    <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                                </a>
                                <ul class="treeview-menu">
                                    @can('expense_report_list_access')
                                        <li class="{{ request()->is("admin/expense-report-lists") || request()->is("admin/expense-report-lists/*") ? "active" : "" }}">
                                            <a href="{{ route("admin.expense-report-lists.index") }}">
                                                <i class="fa-fw fas fa-hand-holding-usd">

                                                </i>
                                                <span>{{ trans('cruds.expenseReportList.title') }}</span>

                                            </a>
                                        </li>
                                    @endcan
                                    @can('expense_category_report_access')
                                        <li class="{{ request()->is("admin/expense-category-reports") || request()->is("admin/expense-category-reports/*") ? "active" : "" }}">
                                            <a href="{{ route("admin.expense-category-reports.index") }}">
                                                <i class="fa-fw fas fa-chalkboard-teacher">

                                                </i>
                                                <span>{{ trans('cruds.expenseCategoryReport.title') }}</span>

                                            </a>
                                        </li>
                                    @endcan
                                    @can('expense_item_report_access')
                                        <li class="{{ request()->is("admin/expense-item-reports") || request()->is("admin/expense-item-reports/*") ? "active" : "" }}">
                                            <a href="{{ route("admin.expense-item-reports.index") }}">
                                                <i class="fa-fw fas fa-copy">

                                                </i>
                                                <span>{{ trans('cruds.expenseItemReport.title') }}</span>

                                            </a>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                        @endcan
                        @can('sale_purchase_report_access')
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa-fw fab fa-affiliatetheme">

                                    </i>
                                    <span>{{ trans('cruds.salePurchaseReport.title') }}</span>
                                    <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                                </a>
                                <ul class="treeview-menu">
                                    @can('sale_purchase_access')
                                        <li class="{{ request()->is("admin/sale-purchases") || request()->is("admin/sale-purchases/*") ? "active" : "" }}">
                                            <a href="{{ route("admin.sale-purchases.index") }}">
                                                <i class="fa-fw fab fa-first-order">

                                                </i>
                                                <span>{{ trans('cruds.salePurchase.title') }}</span>

                                            </a>
                                        </li>
                                    @endcan
                                    @can('sale_purchase_item_access')
                                        <li class="{{ request()->is("admin/sale-purchase-items") || request()->is("admin/sale-purchase-items/*") ? "active" : "" }}">
                                            <a href="{{ route("admin.sale-purchase-items.index") }}">
                                                <i class="fa-fw fas fa-cogs">

                                                </i>
                                                <span>{{ trans('cruds.salePurchaseItem.title') }}</span>

                                            </a>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @php($unread = \App\Models\QaTopic::unreadCount())
                <li class="{{ request()->is("admin/messenger") || request()->is("admin/messenger/*") ? "active" : "" }}">
                    <a href="{{ route("admin.messenger.index") }}">
                        <i class="fa-fw fa fa-envelope">

                        </i>
                        <span>{{ trans('global.messages') }}</span>
                        @if($unread > 0)
                            <strong>( {{ $unread }} )</strong>
                        @endif

                    </a>
                </li>
                @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                    @can('profile_password_edit')
                        <li class="{{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}">
                            <a href="{{ route('profile.password.edit') }}">
                                <i class="fa-fw fas fa-key">
                                </i>
                                {{ trans('global.change_password') }}
                            </a>
                        </li>
                    @endcan
                @endif
                <li>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <i class="fas fa-fw fa-sign-out-alt">

                        </i>
                        {{ trans('global.logout') }}
                    </a>
                </li>
        </ul>
    </section>
</aside>