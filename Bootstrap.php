<?php
/**
 * Shopware 5
 * Copyright (c) shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 */

/**
 * Shopware Auth Plugin
 */
class Shopware_Plugins_Backend_JsDevHelper_Bootstrap extends Shopware_Components_Plugin_Bootstrap
{
    /**
     * Register shopware auth resource
     * create pre-dispatch hook to check backend permissions
     *
     * @return bool
     */
    public function install()
    {
        $this->subscribeEvent('Enlight_Controller_Action_PreDispatch', 'onPreDispatchBackend');

        return true;
    }

    /**
     * @return bool
     */
    public function uninstall()
    {
        return true;
    }

    /**
     * This pre-dispatch event-hook checks backend permissions
     *
     * @param \Enlight_Event_EventArgs $args
     *
     * @throws Enlight_Controller_Exception
     */
    public function onPreDispatchBackend(Enlight_Event_EventArgs $args)
    {

    }
}
