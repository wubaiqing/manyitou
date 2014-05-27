<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class ZheCommand extends Command
{

	protected $name = 'zhe800:fetch';

	protected $description = '折800-淘宝U站抓取';

	public function __construct()
	{
		parent::__construct();
	}

	public function fire()
	{
        Zhe800Fetch::fire();
	}
}
