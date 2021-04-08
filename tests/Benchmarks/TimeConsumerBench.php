<?php

namespace Demo\Test\Benchmarks;

use Demo\TimeConsumer;
use PhpBench\Benchmark\Metadata\Annotations\Assert;

/**
 * @Iterations(10)
 * @Revs(10)
 * @BeforeMethods("setUp")
 * @Assert("mode(variant.time.avg) as ms <= mode(baseline.time.avg) as microseconds +/- 10%")
 */
class TimeConsumerBench
{
    private $timeConsumer;

    public function setUp(): void
    {
        $this->timeConsumer = new TimeConsumer();
    }

    public function benchConsume(): void
    {
        usleep(1000);
        $this->timeConsumer->consume();
    }

    public function benchConsume2(): void
    {
        usleep(2000);
        $this->timeConsumer->consume();
    }

    public function benchConsume3(): void
    {
    }
}
