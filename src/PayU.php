<?php

namespace Jlorente\PayU;

use Jlorente\PayU\PayU\api\SupportedLanguages;

/**
 * Holds basic request information
 * 
 * @author PayU Latam
 * @since 1.0.0
 * @version 1.0.0, 20/10/2013
 *
 */
class PayU
{

    /**
     * Api version
     */
    const API_VERSION = "4.0.1";

    /**
     * Api name
     */
    const API_NAME = "PayU SDK";
    const API_CODE_NAME = "PAYU_SDK";

    /**
     * The method invocation is for testing purposes
     */
    public $isTest = false;

    /**
     * The merchant API key
     */
    public $apiKey = null;

    /**
     * The merchant API Login
     */
    public $apiLogin = null;

    /**
     * The merchant Id
     */
    public $merchantId = null;

    /**
     * The request language
     */
    public $language = SupportedLanguages::ES;

}
