<?php

/**
 * FTP Deployment
 *
 * Copyright (c) 2009 David Grudl (http://davidgrudl.com)
 */

namespace Deployment;


class ServerException extends \Exception
{
}


class FtpException extends ServerException
{
}


class SshException extends ServerException
{
}
