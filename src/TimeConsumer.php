<?php

namespace Demo;

class TimeConsumer
{
    public function consume(): void
    {
        usleep(10000);
    }
}
