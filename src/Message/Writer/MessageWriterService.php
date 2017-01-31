<?php
namespace ZBateson\MailMimeParser\Message\Writer;

/**
 * Simple service provider for MimePartWriter singletons.
 *
 * @author Zaahid Bateson
 */
class MessageWriterService
{
    /**
     * Returns the MessageWriter singleton instance.
     * 
     * @return \ZBateson\MailMimeParser\Message\Writer\MessageWriter
     */
    public function getMessageWriter()
    {
        return MessageWriter::getInstance();
    }
    
    /**
     * Returns the MimePartWriter singleton instance.
     * 
     * @return \ZBateson\MailMimeParser\Message\Writer\MimePartWriter
     */
    public function getMimePartWriter()
    {
        return MimePartWriter::getInstance();
    }
}
