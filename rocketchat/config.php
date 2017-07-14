<?php

require_once INCLUDE_DIR . 'class.plugin.php';

class RocketChatPluginConfig extends PluginConfig {
    function getOptions() {        
        return array(
            'rocketChat' => new SectionBreakField(array(
                'label' => 'RocketChat notifier',
            )),
            'rocketchat-webhook-url' => new TextboxField(array(
                'label' => 'Webhook URL',
                'configuration' => array('size'=>100, 'length'=>200),
            )),			            
        );
    }	
}
