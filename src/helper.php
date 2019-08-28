<?php

//加入Hook
\think\facade\Hook::add('app_init', \Liro\ThinkWechat\Behavior\AppInit::class);