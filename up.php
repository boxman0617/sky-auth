<?php
Event::SubscribeActionHook('/Controller/before/HandleRequest/', 'SkyAuth::Protect');
Event::SubscribeActionHook('/Router/before/ControllerInit/', 'SkyAuth::AssertAuthorized');

SkyL::Import(SkyDefines::Call('SKYCORE_LIB').'/plugins/'.Plugin::$plugin['skyauth']['json']);
$__ConfigFile__ = SkyDefines::Call('DIR_LIB_PLUGINS').'/skyauth/'.Plugin::$plugin['skyauth']['configfile'];
if(file_exists($__ConfigFile__))
{
  SkyL::Import($__ConfigFile__);
  SkyAuth::$Settings[':ENV'] = array_merge(SkyAuth::$Settings[':ENV'], $_AUTH[SkyDefines::GetEnv()]);
  SkyAuth::$AccessControl = $_ACCESS_CONTROL;
}
