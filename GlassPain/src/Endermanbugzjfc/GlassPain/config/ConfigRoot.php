<?php

namespace Endermanbugzjfc\GlassPain\config;

use Endermanbugzjfc\ConfigStruct\KeyName;
use Endermanbugzjfc\GlassPain\animation\AnimationConfig;
use pocketmine\block\utils\DyeColor;

class ConfigRoot
{

    #[KeyName("default-animation")] public ?AnimationConfig $defaultAnimation = null;

}