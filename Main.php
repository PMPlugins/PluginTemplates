<?php

namespace Example;

use pocketmine\plugin\PluginBase;

use pocketmine\Player;

use pocketmine\event\Listener;

use pocketmine\command\CommandSender;
use pocketmine\command\Command;

use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;

use pocketmine\level\Level;
use pocketmine\level\Position;

use pocketmine\math\Vector3;

class Example extends PluginBase implements Listener{

	  /** @var string AUTHOR Plugin author(s) */
	  const AUTHOR = "Legoboy0215";
	
	  /** @var string VERSION Plugin version */
	  const VERSION = "1.0.0";
	
	  /** @var string PREFIX Plugin message prefix */
	  const PREFIX = "[Plugin]";
	
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
				if(!file_exists($this->getDataFolder())){
					  @mkdir($this->getDataFolder());
				}
				$this->config = new Config($this->getDataFolder() . "settings.yml", Config::YAML);
				$this->config->save();
        $this->getLogger()->info(TextFormat::GREEN . "Plugin started!");
    }
    
    public function onDisable(){
        $this->config->save();
    }
}
