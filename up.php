<?php
Event::SubscribeActionHook('/Controller/before/HandleRequest/', 'SkyAuth::Protect');
Event::SubscribeActionHook('/Router/before/ControllerInit/', 'SkyAuth::AssertAuthorized');

SkyL::Import(Plugin::GetFile($plugin));
$__PluginDir__ = Plugin::GetPluginDir($plugin);
$__ConfigFile__ = $__PluginDir__.'/configs.php';
if(file_exists($__ConfigFile__))
{
  SkyL::Import($__ConfigFile__);
  SkyAuth::$Settings[':ENV'] = array_merge(SkyAuth::$Settings[':ENV'], $_AUTH[SkyDefines::GetEnv()]);
  SkyAuth::$AccessControl = $_ACCESS_CONTROL;
}
