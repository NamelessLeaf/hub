<?php

namespace NamelessLeaf\hub; 

use pocketmine\Plugin;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerPreLoginEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;
use jojoe77777\FormAPI;
use pocketmine\command\CommandExecutor;
use pocketmine\command\ConsoleCommandSender;

class Main extends PluginBase implements Listener {
  
  public fucntion onEnable(){
    $this->getLogger()->info("Enabled");
  }
}
