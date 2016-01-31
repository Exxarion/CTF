<?php

namespace CTF\GameListener;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\entity\EntityDeathEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\Config;
use pocketmine\level\Position;
use pocketmine\level\Level;
use pocketmine\level\Explosion;
use pocketmine\event\block\BlockEvent;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\Listener;
use pocketmine\math\Vector3 as Vector3;
use pocketmine\math\Vector2 as Vector2;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\player\PlayerRespawnEvent;
use pocketmine\event\player\PlayerLoginEvent;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\player\PlayerKickEvent;
use pocketmine\network\protocol\UpdateBlockPacket;
use pocketmine\block\Block;
use pocketmine\network\protocol\Info;
use pocketmine\network\protocol\LoginPacket;
use pocketmine\command\defaults\TeleportCommand;
use pocketmine\event\block\SignChangeEvent;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\item\Item;
use pocketmine\item\ItemBlock;


class GameListener extends PluginBase implements Listener {
	public function __construct(Main $plugin) {
		parent::__construct($plugin);
	}
//TODO
}
