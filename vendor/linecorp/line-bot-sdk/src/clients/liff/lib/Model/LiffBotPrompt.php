<?php
/**
 * Copyright 2024 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */
/**
 * LiffBotPrompt
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  LINE\Clients\Liff
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * LIFF server API
 *
 * LIFF Server API.
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace LINE\Clients\Liff\Model;
use \LINE\Clients\Liff\ObjectSerializer;

/**
 * LiffBotPrompt Class Doc Comment
 *
 * @category Class
 * @description Specify the setting for bot link feature with one of the following values:  &#x60;normal&#x60;: Display the option to add the LINE Official Account as a friend in the channel consent screen. &#x60;aggressive&#x60;: Display a screen with the option to add the LINE Official Account as a friend after the channel consent screen. &#x60;none&#x60;: Don&#39;t display the option to add the LINE Official Account as a friend.   The default value is none.
 * @package  LINE\Clients\Liff
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LiffBotPrompt
{
    /**
     * Possible values of this enum
     */
    public const NORMAL = 'normal';

    public const AGGRESSIVE = 'aggressive';

    public const NONE = 'none';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NORMAL,
            self::AGGRESSIVE,
            self::NONE
        ];
    }
}


