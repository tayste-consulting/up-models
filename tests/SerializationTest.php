<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\BackedEnumNormalizer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\PropertyNormalizer;
use Symfony\Component\Serializer\Serializer as SymfonySerializer;
use Symfony\Component\Serializer\SerializerInterface;

final class SerializationTest extends TestCase
{
    private SerializerInterface $serializer;

    protected function setUp(): void
    {
        $encoders = [new JsonEncoder()];
        $objectNormalizer = new ObjectNormalizer(null, null, null, new ReflectionExtractor());
        $normalizers = [new DateTimeNormalizer(), new BackedEnumNormalizer(), $objectNormalizer, new PropertyNormalizer(), new ArrayDenormalizer(), new GetSetMethodNormalizer()];

        $this->serializer = new SymfonySerializer($normalizers, $encoders);
    }

    #[DataProvider('dataProvider')]
    public function testSerialization(string $fixture, string $class): void
    {
        $fixture = file_get_contents(sprintf(__DIR__ . '/fixtures/%s', $fixture));

        $model = $this->serializer->deserialize($fixture, $class, 'json');

        $this->assertInstanceOf($class, $model);
    }

    public static function dataProvider(): iterable
    {
        yield ['accounts/list-accounts.json', \Tayste\Up\Model\Accounts\Response\ListAccounts::class];
        yield ['accounts/retrieve-account.json', \Tayste\Up\Model\Accounts\Response\RetrieveAccount::class];
        yield ['categories/list-categories.json', \Tayste\Up\Model\Categories\Response\ListCategories::class];
        yield ['categories/retrieve-category.json', \Tayste\Up\Model\Categories\Response\RetrieveCategory::class];
        yield ['categories/categorize-transaction.json', \Tayste\Up\Model\Categories\Request\CategorizeTransaction::class];
        yield ['tags/list-tags.json', \Tayste\Up\Model\Tags\Response\ListTags::class];
        yield ['tags/add-tags-to-transaction.json', \Tayste\Up\Model\Tags\Request\AddTagsToTransaction::class];
        yield ['tags/remove-tags-from-transaction.json', \Tayste\Up\Model\Tags\Request\RemoveTagsFromTransaction::class];
        yield ['transactions/list-transactions.json', \Tayste\Up\Model\Transactions\Response\ListTransactions::class];
        yield ['transactions/retrieve-transaction.json', \Tayste\Up\Model\Transactions\Response\RetrieveTransaction::class];
        yield ['transactions/list-transactions-by-account.json', \Tayste\Up\Model\Transactions\Response\ListTransactionsByAccount::class];
        yield ['utility/ping.json', \Tayste\Up\Model\Util\Response\Ping::class];
        yield ['webhooks/list-webhooks.json', \Tayste\Up\Model\Webhooks\Response\ListWebhooks::class];
        yield ['webhooks/create-webhook.json', \Tayste\Up\Model\Webhooks\Request\CreateWebhook::class];
        yield ['webhooks/retrieve-webhook.json', \Tayste\Up\Model\Webhooks\Response\RetrieveWebhook::class];
        yield ['webhooks/ping-webhook.json', \Tayste\Up\Model\Webhooks\Response\PingWebhook::class];
        yield ['webhooks/list-webhook-logs.json', \Tayste\Up\Model\Webhooks\Response\ListWebhookLogs::class];
    }
}