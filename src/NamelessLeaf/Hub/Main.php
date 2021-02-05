<?php

namespace NamelessLeaf\Hub;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\command\Command;
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
  
  public function onEnable(){
    $this->getLogger()->info("Enabled");
  }
  
  public function onDisable(){
    $this->getLogger()->info("Disabled");
  }
    public function onCommand(CommandSender $sender, Command $cmd, String $lable, Array $args) : bool {
    
    switch($cmd->getName()){
      case "Hub":
        if($sender instanceof Player){
          $sender->transfer("NamelessLands.mc.gg", 40163);
        }else{
          $sender->sendMessage("Console Bru why u trying to tp");
        }
    }
    return true;
  }
}
