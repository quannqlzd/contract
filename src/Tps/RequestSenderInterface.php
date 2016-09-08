<?php

/**
 * @author Quan Nguyen Quoc <quan.nguyen.quoc@lazada.vn>
 */
interface RequestSenderInterface
{

    /**
     * Handle sending request to 3PL
     *
     * @throws Exception
     */
    public function send();

}
