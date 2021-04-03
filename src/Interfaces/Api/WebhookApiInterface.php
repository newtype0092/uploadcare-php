<?php declare(strict_types=1);

namespace Uploadcare\Interfaces\Api;

use Uploadcare\Interfaces\File\CollectionInterface;
use Uploadcare\Interfaces\Response\WebhookInterface;

/**
 * Webhooks management.
 *
 * @see https://uploadcare.com/api-refs/rest-api/v0.5.0/#tag/Webhook
 */
interface WebhookApiInterface
{
    /**
     * @return CollectionInterface<array-key, WebhookInterface>
     */
    public function listWebhooks(): CollectionInterface;

    /**
     * @param string $targetUrl
     * @param bool   $isActive
     * @param string $event
     *
     * @return WebhookInterface
     */
    public function createWebhook($targetUrl, $isActive = true, $event = 'file.uploaded'): WebhookInterface;

    /**
     * @param int   $id
     * @param array $parameters Parameters for update: string `target_url`, bool `is_active`
     *
     * @return WebhookInterface
     */
    public function updateWebhook($id, array $parameters): WebhookInterface;

    /**
     * @param string $targetUrl
     *
     * @return bool
     */
    public function deleteWebhook($targetUrl): bool;
}
