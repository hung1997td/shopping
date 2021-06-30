<?php
namespace Aws;

/**
 * Interface for adding and retrieving Client-side monitoring events
 */
interface MonitoringEventsInterface
{

    /**
     * Get Client-side monitoring events attached to this object. Each event is
     * represented as an associative array within the returned array.
     *
     * @return array
     */
    public function getMonitoringEvents();

    /**
     * Prepend a Client-side monitoring event to this object's event list
     *
     * @param array $event
     */
    public function prependMonitoringEvent(array $event);

    /**
     * Append a Client-side monitoring event to this object's event list
     *
     * @param array $event
     */
    public function appendMonitoringEvent(array $event);

}
