<?php

namespace DesignPatterns\Structural\Facade;

include_once 'Cpu.php';
include_once 'Memory.php';
include_once 'HardDrive.php';

class ComputerFacade
{
    const BOOT_ADDRESS = 0x002A;
    const BOOT_SECTOR = 2;
    const SECTOR_SIZE = 2048;

    /**
     * @var Cpu
     */
    private $processor = null;

    /**
     * Random Access Memory
     * @var Memory
     */
    private $ram = null;

    /**
     * Hard Disk
     * @var HardDrive
     */
    private $hd = null;

    public function __construct()
    {
        $this->processor = new Cpu();
        $this->ram = new Memory();
        $this->hd = new HardDrive();
    }

    public function start()
    {
        $this->processor->freeze();
        $this->ram->load(self::BOOT_ADDRESS, $this->hd->read(self::BOOT_SECTOR, self::SECTOR_SIZE));
        $this->processor->jump(self::BOOT_ADDRESS);
        $this->processor->execute();
    }
}