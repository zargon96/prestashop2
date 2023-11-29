{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *}
 
 <style>
  .nav-bar.collapsed .nav-bar-overflow {
    overflow: visible!important;
  }

  .nav-bar {
    background: white;
  }
</style>

<nav class="nav-bar d-none d-print-none d-md-block">
  <span class="menu-collapse" data-toggle-url="{$toggle_navigation_url}" style="display: none">
    <i class="material-icons rtl-flip">chevron_left</i>
    <i class="material-icons rtl-flip">chevron_left</i>
  </span>

  <div class="nav-bar-overflow" style="padding-bottom:50px; ">
    <wc-side-bar class="side-bar" tabs="{htmlspecialchars(array_values($tabs_simplify)|json_encode)}" />
  </div>
</nav>