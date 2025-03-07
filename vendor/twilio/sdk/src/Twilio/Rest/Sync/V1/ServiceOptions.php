<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Sync
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Sync\V1;

use Twilio\Options;
use Twilio\Values;

abstract class ServiceOptions
{
    /**
     * @param string $friendlyName A string that you assign to describe the resource.
     * @param string $webhookUrl The URL we should call when Sync objects are manipulated.
     * @param bool $reachabilityWebhooksEnabled Whether the service instance should call `webhook_url` when client endpoints connect to Sync. The default is `false`.
     * @param bool $aclEnabled Whether token identities in the Service must be granted access to Sync objects by using the [Permissions](https://www.twilio.com/docs/sync/api/sync-permissions) resource.
     * @param bool $reachabilityDebouncingEnabled Whether every `endpoint_disconnected` event should occur after a configurable delay. The default is `false`, where the `endpoint_disconnected` event occurs immediately after disconnection. When `true`, intervening reconnections can prevent the `endpoint_disconnected` event.
     * @param int $reachabilityDebouncingWindow The reachability event delay in milliseconds if `reachability_debouncing_enabled` = `true`.  Must be between 1,000 and 30,000 and defaults to 5,000. This is the number of milliseconds after the last running client disconnects, and a Sync identity is declared offline, before the `webhook_url` is called if all endpoints remain offline. A reconnection from the same identity by any endpoint during this interval prevents the call to `webhook_url`.
     * @param bool $webhooksFromRestEnabled Whether the Service instance should call `webhook_url` when the REST API is used to update Sync objects. The default is `false`.
     * @return CreateServiceOptions Options builder
     */
    public static function create(
        
        string $friendlyName = Values::NONE,
        string $webhookUrl = Values::NONE,
        bool $reachabilityWebhooksEnabled = Values::BOOL_NONE,
        bool $aclEnabled = Values::BOOL_NONE,
        bool $reachabilityDebouncingEnabled = Values::BOOL_NONE,
        int $reachabilityDebouncingWindow = Values::INT_NONE,
        bool $webhooksFromRestEnabled = Values::BOOL_NONE

    ): CreateServiceOptions
    {
        return new CreateServiceOptions(
            $friendlyName,
            $webhookUrl,
            $reachabilityWebhooksEnabled,
            $aclEnabled,
            $reachabilityDebouncingEnabled,
            $reachabilityDebouncingWindow,
            $webhooksFromRestEnabled
        );
    }




    /**
     * @param string $webhookUrl The URL we should call when Sync objects are manipulated.
     * @param string $friendlyName A string that you assign to describe the resource.
     * @param bool $reachabilityWebhooksEnabled Whether the service instance should call `webhook_url` when client endpoints connect to Sync. The default is `false`.
     * @param bool $aclEnabled Whether token identities in the Service must be granted access to Sync objects by using the [Permissions](https://www.twilio.com/docs/sync/api/sync-permissions) resource.
     * @param bool $reachabilityDebouncingEnabled Whether every `endpoint_disconnected` event should occur after a configurable delay. The default is `false`, where the `endpoint_disconnected` event occurs immediately after disconnection. When `true`, intervening reconnections can prevent the `endpoint_disconnected` event.
     * @param int $reachabilityDebouncingWindow The reachability event delay in milliseconds if `reachability_debouncing_enabled` = `true`.  Must be between 1,000 and 30,000 and defaults to 5,000. This is the number of milliseconds after the last running client disconnects, and a Sync identity is declared offline, before the webhook is called if all endpoints remain offline. A reconnection from the same identity by any endpoint during this interval prevents the webhook from being called.
     * @param bool $webhooksFromRestEnabled Whether the Service instance should call `webhook_url` when the REST API is used to update Sync objects. The default is `false`.
     * @return UpdateServiceOptions Options builder
     */
    public static function update(
        
        string $webhookUrl = Values::NONE,
        string $friendlyName = Values::NONE,
        bool $reachabilityWebhooksEnabled = Values::BOOL_NONE,
        bool $aclEnabled = Values::BOOL_NONE,
        bool $reachabilityDebouncingEnabled = Values::BOOL_NONE,
        int $reachabilityDebouncingWindow = Values::INT_NONE,
        bool $webhooksFromRestEnabled = Values::BOOL_NONE

    ): UpdateServiceOptions
    {
        return new UpdateServiceOptions(
            $webhookUrl,
            $friendlyName,
            $reachabilityWebhooksEnabled,
            $aclEnabled,
            $reachabilityDebouncingEnabled,
            $reachabilityDebouncingWindow,
            $webhooksFromRestEnabled
        );
    }

}

class CreateServiceOptions extends Options
    {
    /**
     * @param string $friendlyName A string that you assign to describe the resource.
     * @param string $webhookUrl The URL we should call when Sync objects are manipulated.
     * @param bool $reachabilityWebhooksEnabled Whether the service instance should call `webhook_url` when client endpoints connect to Sync. The default is `false`.
     * @param bool $aclEnabled Whether token identities in the Service must be granted access to Sync objects by using the [Permissions](https://www.twilio.com/docs/sync/api/sync-permissions) resource.
     * @param bool $reachabilityDebouncingEnabled Whether every `endpoint_disconnected` event should occur after a configurable delay. The default is `false`, where the `endpoint_disconnected` event occurs immediately after disconnection. When `true`, intervening reconnections can prevent the `endpoint_disconnected` event.
     * @param int $reachabilityDebouncingWindow The reachability event delay in milliseconds if `reachability_debouncing_enabled` = `true`.  Must be between 1,000 and 30,000 and defaults to 5,000. This is the number of milliseconds after the last running client disconnects, and a Sync identity is declared offline, before the `webhook_url` is called if all endpoints remain offline. A reconnection from the same identity by any endpoint during this interval prevents the call to `webhook_url`.
     * @param bool $webhooksFromRestEnabled Whether the Service instance should call `webhook_url` when the REST API is used to update Sync objects. The default is `false`.
     */
    public function __construct(
        
        string $friendlyName = Values::NONE,
        string $webhookUrl = Values::NONE,
        bool $reachabilityWebhooksEnabled = Values::BOOL_NONE,
        bool $aclEnabled = Values::BOOL_NONE,
        bool $reachabilityDebouncingEnabled = Values::BOOL_NONE,
        int $reachabilityDebouncingWindow = Values::INT_NONE,
        bool $webhooksFromRestEnabled = Values::BOOL_NONE

    ) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['webhookUrl'] = $webhookUrl;
        $this->options['reachabilityWebhooksEnabled'] = $reachabilityWebhooksEnabled;
        $this->options['aclEnabled'] = $aclEnabled;
        $this->options['reachabilityDebouncingEnabled'] = $reachabilityDebouncingEnabled;
        $this->options['reachabilityDebouncingWindow'] = $reachabilityDebouncingWindow;
        $this->options['webhooksFromRestEnabled'] = $webhooksFromRestEnabled;
    }

    /**
     * A string that you assign to describe the resource.
     *
     * @param string $friendlyName A string that you assign to describe the resource.
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self
    {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * The URL we should call when Sync objects are manipulated.
     *
     * @param string $webhookUrl The URL we should call when Sync objects are manipulated.
     * @return $this Fluent Builder
     */
    public function setWebhookUrl(string $webhookUrl): self
    {
        $this->options['webhookUrl'] = $webhookUrl;
        return $this;
    }

    /**
     * Whether the service instance should call `webhook_url` when client endpoints connect to Sync. The default is `false`.
     *
     * @param bool $reachabilityWebhooksEnabled Whether the service instance should call `webhook_url` when client endpoints connect to Sync. The default is `false`.
     * @return $this Fluent Builder
     */
    public function setReachabilityWebhooksEnabled(bool $reachabilityWebhooksEnabled): self
    {
        $this->options['reachabilityWebhooksEnabled'] = $reachabilityWebhooksEnabled;
        return $this;
    }

    /**
     * Whether token identities in the Service must be granted access to Sync objects by using the [Permissions](https://www.twilio.com/docs/sync/api/sync-permissions) resource.
     *
     * @param bool $aclEnabled Whether token identities in the Service must be granted access to Sync objects by using the [Permissions](https://www.twilio.com/docs/sync/api/sync-permissions) resource.
     * @return $this Fluent Builder
     */
    public function setAclEnabled(bool $aclEnabled): self
    {
        $this->options['aclEnabled'] = $aclEnabled;
        return $this;
    }

    /**
     * Whether every `endpoint_disconnected` event should occur after a configurable delay. The default is `false`, where the `endpoint_disconnected` event occurs immediately after disconnection. When `true`, intervening reconnections can prevent the `endpoint_disconnected` event.
     *
     * @param bool $reachabilityDebouncingEnabled Whether every `endpoint_disconnected` event should occur after a configurable delay. The default is `false`, where the `endpoint_disconnected` event occurs immediately after disconnection. When `true`, intervening reconnections can prevent the `endpoint_disconnected` event.
     * @return $this Fluent Builder
     */
    public function setReachabilityDebouncingEnabled(bool $reachabilityDebouncingEnabled): self
    {
        $this->options['reachabilityDebouncingEnabled'] = $reachabilityDebouncingEnabled;
        return $this;
    }

    /**
     * The reachability event delay in milliseconds if `reachability_debouncing_enabled` = `true`.  Must be between 1,000 and 30,000 and defaults to 5,000. This is the number of milliseconds after the last running client disconnects, and a Sync identity is declared offline, before the `webhook_url` is called if all endpoints remain offline. A reconnection from the same identity by any endpoint during this interval prevents the call to `webhook_url`.
     *
     * @param int $reachabilityDebouncingWindow The reachability event delay in milliseconds if `reachability_debouncing_enabled` = `true`.  Must be between 1,000 and 30,000 and defaults to 5,000. This is the number of milliseconds after the last running client disconnects, and a Sync identity is declared offline, before the `webhook_url` is called if all endpoints remain offline. A reconnection from the same identity by any endpoint during this interval prevents the call to `webhook_url`.
     * @return $this Fluent Builder
     */
    public function setReachabilityDebouncingWindow(int $reachabilityDebouncingWindow): self
    {
        $this->options['reachabilityDebouncingWindow'] = $reachabilityDebouncingWindow;
        return $this;
    }

    /**
     * Whether the Service instance should call `webhook_url` when the REST API is used to update Sync objects. The default is `false`.
     *
     * @param bool $webhooksFromRestEnabled Whether the Service instance should call `webhook_url` when the REST API is used to update Sync objects. The default is `false`.
     * @return $this Fluent Builder
     */
    public function setWebhooksFromRestEnabled(bool $webhooksFromRestEnabled): self
    {
        $this->options['webhooksFromRestEnabled'] = $webhooksFromRestEnabled;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Sync.V1.CreateServiceOptions ' . $options . ']';
    }
}




class UpdateServiceOptions extends Options
    {
    /**
     * @param string $webhookUrl The URL we should call when Sync objects are manipulated.
     * @param string $friendlyName A string that you assign to describe the resource.
     * @param bool $reachabilityWebhooksEnabled Whether the service instance should call `webhook_url` when client endpoints connect to Sync. The default is `false`.
     * @param bool $aclEnabled Whether token identities in the Service must be granted access to Sync objects by using the [Permissions](https://www.twilio.com/docs/sync/api/sync-permissions) resource.
     * @param bool $reachabilityDebouncingEnabled Whether every `endpoint_disconnected` event should occur after a configurable delay. The default is `false`, where the `endpoint_disconnected` event occurs immediately after disconnection. When `true`, intervening reconnections can prevent the `endpoint_disconnected` event.
     * @param int $reachabilityDebouncingWindow The reachability event delay in milliseconds if `reachability_debouncing_enabled` = `true`.  Must be between 1,000 and 30,000 and defaults to 5,000. This is the number of milliseconds after the last running client disconnects, and a Sync identity is declared offline, before the webhook is called if all endpoints remain offline. A reconnection from the same identity by any endpoint during this interval prevents the webhook from being called.
     * @param bool $webhooksFromRestEnabled Whether the Service instance should call `webhook_url` when the REST API is used to update Sync objects. The default is `false`.
     */
    public function __construct(
        
        string $webhookUrl = Values::NONE,
        string $friendlyName = Values::NONE,
        bool $reachabilityWebhooksEnabled = Values::BOOL_NONE,
        bool $aclEnabled = Values::BOOL_NONE,
        bool $reachabilityDebouncingEnabled = Values::BOOL_NONE,
        int $reachabilityDebouncingWindow = Values::INT_NONE,
        bool $webhooksFromRestEnabled = Values::BOOL_NONE

    ) {
        $this->options['webhookUrl'] = $webhookUrl;
        $this->options['friendlyName'] = $friendlyName;
        $this->options['reachabilityWebhooksEnabled'] = $reachabilityWebhooksEnabled;
        $this->options['aclEnabled'] = $aclEnabled;
        $this->options['reachabilityDebouncingEnabled'] = $reachabilityDebouncingEnabled;
        $this->options['reachabilityDebouncingWindow'] = $reachabilityDebouncingWindow;
        $this->options['webhooksFromRestEnabled'] = $webhooksFromRestEnabled;
    }

    /**
     * The URL we should call when Sync objects are manipulated.
     *
     * @param string $webhookUrl The URL we should call when Sync objects are manipulated.
     * @return $this Fluent Builder
     */
    public function setWebhookUrl(string $webhookUrl): self
    {
        $this->options['webhookUrl'] = $webhookUrl;
        return $this;
    }

    /**
     * A string that you assign to describe the resource.
     *
     * @param string $friendlyName A string that you assign to describe the resource.
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self
    {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * Whether the service instance should call `webhook_url` when client endpoints connect to Sync. The default is `false`.
     *
     * @param bool $reachabilityWebhooksEnabled Whether the service instance should call `webhook_url` when client endpoints connect to Sync. The default is `false`.
     * @return $this Fluent Builder
     */
    public function setReachabilityWebhooksEnabled(bool $reachabilityWebhooksEnabled): self
    {
        $this->options['reachabilityWebhooksEnabled'] = $reachabilityWebhooksEnabled;
        return $this;
    }

    /**
     * Whether token identities in the Service must be granted access to Sync objects by using the [Permissions](https://www.twilio.com/docs/sync/api/sync-permissions) resource.
     *
     * @param bool $aclEnabled Whether token identities in the Service must be granted access to Sync objects by using the [Permissions](https://www.twilio.com/docs/sync/api/sync-permissions) resource.
     * @return $this Fluent Builder
     */
    public function setAclEnabled(bool $aclEnabled): self
    {
        $this->options['aclEnabled'] = $aclEnabled;
        return $this;
    }

    /**
     * Whether every `endpoint_disconnected` event should occur after a configurable delay. The default is `false`, where the `endpoint_disconnected` event occurs immediately after disconnection. When `true`, intervening reconnections can prevent the `endpoint_disconnected` event.
     *
     * @param bool $reachabilityDebouncingEnabled Whether every `endpoint_disconnected` event should occur after a configurable delay. The default is `false`, where the `endpoint_disconnected` event occurs immediately after disconnection. When `true`, intervening reconnections can prevent the `endpoint_disconnected` event.
     * @return $this Fluent Builder
     */
    public function setReachabilityDebouncingEnabled(bool $reachabilityDebouncingEnabled): self
    {
        $this->options['reachabilityDebouncingEnabled'] = $reachabilityDebouncingEnabled;
        return $this;
    }

    /**
     * The reachability event delay in milliseconds if `reachability_debouncing_enabled` = `true`.  Must be between 1,000 and 30,000 and defaults to 5,000. This is the number of milliseconds after the last running client disconnects, and a Sync identity is declared offline, before the webhook is called if all endpoints remain offline. A reconnection from the same identity by any endpoint during this interval prevents the webhook from being called.
     *
     * @param int $reachabilityDebouncingWindow The reachability event delay in milliseconds if `reachability_debouncing_enabled` = `true`.  Must be between 1,000 and 30,000 and defaults to 5,000. This is the number of milliseconds after the last running client disconnects, and a Sync identity is declared offline, before the webhook is called if all endpoints remain offline. A reconnection from the same identity by any endpoint during this interval prevents the webhook from being called.
     * @return $this Fluent Builder
     */
    public function setReachabilityDebouncingWindow(int $reachabilityDebouncingWindow): self
    {
        $this->options['reachabilityDebouncingWindow'] = $reachabilityDebouncingWindow;
        return $this;
    }

    /**
     * Whether the Service instance should call `webhook_url` when the REST API is used to update Sync objects. The default is `false`.
     *
     * @param bool $webhooksFromRestEnabled Whether the Service instance should call `webhook_url` when the REST API is used to update Sync objects. The default is `false`.
     * @return $this Fluent Builder
     */
    public function setWebhooksFromRestEnabled(bool $webhooksFromRestEnabled): self
    {
        $this->options['webhooksFromRestEnabled'] = $webhooksFromRestEnabled;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Sync.V1.UpdateServiceOptions ' . $options . ']';
    }
}

