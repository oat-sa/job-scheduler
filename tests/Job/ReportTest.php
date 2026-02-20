<?php

namespace SchedulerTests\Job;

use PHPUnit\Framework\TestCase;
use Scheduler\Action\Report;
use Scheduler\Action\ActionInterface;

/**
 * Class ReportTest
 * @package SchedulerTests\Job
 * @author Aleh Hutnikau, <goodnickoff@gmail.com>
 */
class ReportTest extends TestCase
{
    public function testGetResult()
    {
        $action = $this->createMock(ActionInterface::class);
        $report = new Report($action, 'foo');
        $this->assertEquals('foo', $report->getResult());
    }

    public function testGetAction()
    {
        $action = $this->createMock(ActionInterface::class);
        $report = new Report($action, 'foo');
        $this->assertEquals($action, $report->getAction());
    }

    public function testGetType()
    {
        $action = $this->createMock(ActionInterface::class);
        $report = new Report($action, 'foo');
        $this->assertEquals(Report::TYPE_SUCCESS, $report->getType());
    }
}
