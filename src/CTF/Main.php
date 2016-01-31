<?php

namespace CTF\Main;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class Main extends PluginBase implements CommandExecutor {
	
	public $redPlayers = [ ];
	public $bluPlayers = [ ];
	public $stats = [ ];
	
	public $playersWithRedFlag = [ ];
	public $playersWithBlueFlag = [ ];
	
	public $gameState = 0;
	public $redWins = 0;
	public $bluWins = 0;
	public $round = 0;
	public $maxRounds = 3;
	
	public $CTFWorld;

	public $setMode = "";
	

	public function onLoad() {		
		$this->initComponents();
		$this->getLogger()->info(TextFormat::GREEN . "Loading...");
	}

	public function onEnable() {	
		$this->initConfig();
		$this->getServer()->getPluginManager()->registerEvents(new GameListener($this), $this);
		$this->getLogger()->info(TextFormat::GREEN . "CTF Plugin Loaded!");
		
	}
	
	private function initComponents() {
//TODO
	}
	
	private function initConfig() {
		try {
			$this->saveDefaultConfig();
			if (!file_exists($this->getDataFolder())) {
				@mkdir($this->getDataFolder(), 0777, true);
				file_put_contents($this->getDataFolder() . "config.yml", $this->getResource("config.yml"));
			}
			$this->reloadConfig();
			$this->getConfig()->getAll();
	}

	public function onDisable() {
		$this->getLogger()->info(TextFormat::RED . "CTF has been disabled");
	}
	
	public function clearSetup() {
		$this->setMode="";
	}
	
	public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
		//TODO
	}
}
