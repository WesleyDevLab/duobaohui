<?php
/**
* FEROS™ PHP template engine
* @author feros<admin@feros.com.cn>
* @copyright ©2015 feros.com.cn
* @link http://www.feros.com.cn
* @version 2.0.2
*/
?><div class="sidebar" id="sidebar"><script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script><div class="sidebar-shortcuts" id="sidebar-shortcuts"><div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large"><button class="btn btn-success"><i class="icon-signal"></i></button><button class="btn btn-info"><i class="icon-pencil"></i></button><button class="btn btn-warning"><i class="icon-group"></i></button><button class="btn btn-danger"><i class="icon-cogs"></i></button></div><div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini"><span class="btn btn-success"></span><span class="btn btn-info"></span><span class="btn btn-warning"></span><span class="btn btn-danger"></span></div></div><!-- #sidebar-shortcuts --><ul class="nav nav-list"><li><a href="/"><i class="icon-dashboard"></i><span class="menu-text"> 控制台 </span></a></li><?php echo getUl($menu->list, $menu->active, $loginUser->salt);?></ul><!-- /.nav-list --><div class="sidebar-collapse" id="sidebar-collapse"><i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i></div><script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script></div>
