<?php
defined('IN_IA') or exit ('Access Denied');

class Core extends WeModuleSite
{

    public function getMainMenu()
    {
        global $_W, $_GPC;
           $type=pdo_get('zhtc_system',array('uniacid'=>$_W['uniacid']));
        $do = $_GPC['do'];
        $navemenu = array();
        $cur_color = ' style="color:#d9534f;" ';
          if ($_W['role'] == 'operator') {
            $navemenu[13] = array(
                'title' => '<a href="javascript:void(0)" id="yframe-15" class="panel-title wytitle"><icon style="color:#8d8d8d;" class="fa fa-cog"></icon>  业务菜单</a>',
                'items' => array(
                    0 => $this->createMainMenu('账号管理', $do, 'account', 'fa-home')
                )
            );}elseif($_W['isfounder'] || $_W['role'] == 'manager' || $_W['role'] == 'operator') {
               $navemenu[14] = array(
                'title' => '<a href="index.php?c=site&a=entry&op=display&do=index&m=zh_tcwq" class="panel-title wytitle" id="yframe-14"><icon style="color:#8d8d8d;" class="fa fa-newspaper-o"></icon>  数据概况</a>',
                'items' => array(
                     0 => $this->createMainMenu('数据展示 ', $do, 'index', ''),
                     // 1 => $this->createMainMenu('自定义数据 ', $do, 'numdata', ''),
                )
            );              
            
             $navemenu[17] = array(
                'title' => '<a href="index.php?c=site&a=entry&op=display&do=nav&m=zh_tcwq" class="panel-title wytitle" id="yframe-17"><icon style="color:#8d8d8d;" class="fa fa-compass"></icon>导航管理</a>',
                'items' => array(
                     0 => $this->createMainMenu('导航管理 ', $do, 'nav', ''),
                     1=> $this->createMainMenu('添加导航', $do, 'addnav', ''),
                    
                   
                )
            );           
         
          $navemenu[0] = array(
                'title' => '<a href="index.php?c=site&a=entry&op=display&do=store&m=zh_tcwq" class="panel-title wytitle" id="yframe-0"><icon style="color:#8d8d8d;" class="fa fa-university"></icon>  商家管理</a>',
                'items' => array(
                     0 => $this->createMainMenu('商家列表 ', $do, 'store', ''),
                     1 => $this->createMainMenu('商家添加 ', $do, 'storeinfo2', ''),
                     2 => $this->createMainMenu('入驻期限', $do, 'in', ''), 
                     3 => $this->createMainMenu('商家分类', $do, 'storetype', ''),
                     4=> $this->createMainMenu('审核设置', $do, 'storecheck', ''), 
                     5=> $this->createMainMenu('评论管理', $do, 'sjpinglun', ''),
                )
            );
              $navemenu[1] = array(
                'title' => '<a href="index.php?c=site&a=entry&op=display&do=information&m=zh_tcwq" class="panel-title wytitle" id="yframe-1"><icon style="color:#8d8d8d;" class="fa fa-comment-o"></icon>  帖子管理</a>',
                'items' => array(
                     0 => $this->createMainMenu('帖子列表 ', $do, 'information', ''),
                     1=> $this->createMainMenu('分类列表', $do, 'fenlei', ''),
                     2 => $this->createMainMenu('添加帖子', $do, 'addinformation', ''),
                     3 => $this->createMainMenu('置顶设置', $do, 'top', ''),
                     // 3 => $this->createMainMenu('信息分类 ', $do, 'type', ''),
                     // 4 => $this->createMainMenu('二级信息分类 ', $do, 'type2', ''),
                     4=> $this->createMainMenu('帖子设置', $do, 'tzcheck', ''),
                     5=> $this->createMainMenu('评论管理', $do, 'tzpinglun', '')
                     
                     
                )
            );
if($type['is_pcfw']==1){
             $navemenu[2] = array(
                'title' => '<a href="index.php?c=site&a=entry&op=display&do=carinfo&m=zh_tcwq" class="panel-title wytitle" id="yframe-2"><icon style="color:#8d8d8d;" class="fa fa-car"></icon>  拼车管理</a>',
                'items' => array(
                     0 => $this->createMainMenu('拼车列表 ', $do, 'carinfo', ''),
                     2=> $this->createMainMenu('审核设置', $do, 'carcheck', ''),
                     3=> $this->createMainMenu('标签管理', $do, 'tag', ''),
                )
            );
}
            $navemenu[3] = array(
                'title' => '<a href="index.php?c=site&a=entry&op=display&do=zx&m=zh_tcwq" class="panel-title wytitle" id="yframe-3"><icon style="color:#8d8d8d;" class="fa fa-book"></icon>  资讯管理</a>',
                'items' => array(
                      1 => $this->createMainMenu('资讯管理', $do, 'zx', ''), 
                     3=> $this->createMainMenu('资讯审核', $do, 'zxcheckmanager', ''),             
                     0 => $this->createMainMenu('分类管理 ', $do, 'zxtype', ''),                       
                     2=> $this->createMainMenu('审核设置', $do, 'zxcheck', ''),                  
                    4=> $this->createMainMenu('评论管理', $do, 'zxpinglun', ''),
                )
            );

             $navemenu[18] = array(
                'title' => '<a href="index.php?c=site&a=entry&op=display&do=video&m=zh_tcwq" class="panel-title wytitle" id="yframe-18"><icon style="color:#8d8d8d;" class="fa fa-compass"></icon>视频管理</a>',
                'items' => array(
                     0 => $this->createMainMenu('视频管理 ', $do, 'video', ''),
                     1=> $this->createMainMenu('分类管理', $do, 'videotype', ''),
                    
                   
                )
            );           
         if($type['is_pageopen']==1){
            $navemenu[4] = array(
                'title' => '<a href="index.php?c=site&a=entry&op=display&do=yellowstore&m=zh_tcwq" class="panel-title wytitle" id="yframe-4"><icon style="color:#8d8d8d;" class="fa fa-compass"></icon>黄页114</a>',
                'items' => array(
                     0 => $this->createMainMenu('入驻列表 ', $do, 'yellowstore', ''),
                     1=> $this->createMainMenu('分类管理', $do, 'yellowtype', ''),
                     2=> $this->createMainMenu('添加入驻', $do, 'addyellowstore', ''),
                     3=> $this->createMainMenu('入驻设置', $do, 'yellowset', ''),
                     4=> $this->createMainMenu('审核设置', $do, 'yellowcheck', ''), 
                )
            );
        }
        $navemenu[20] = array(
            'title' => '<a href="index.php?c=site&a=entry&op=display&do=activity&m=zh_tcwq" class="panel-title wytitle" id="yframe-20"><icon style="color:#8d8d8d;" class="fa fa-compass"></icon>活动管理</a>',
            'items' => array(
                 0 => $this->createMainMenu('活动管理 ', $do, 'activity', ''),
                 1 => $this->createMainMenu('分类管理 ', $do, 'acttype', ''),
                 2 => $this->createMainMenu('活动设置 ', $do, 'activityset', ''),
            )
        );
           // $navemenu[5] = array(
           //      'title' => '<a href="index.php?c=site&a=entry&op=display&do=news&m=zh_tcwq" class="panel-title wytitle" id="yframe-5"><icon style="color:#8d8d8d;" class="fa fa-bell"></icon>  公告管理</a>',
           //      'items' => array(
           //           0 => $this->createMainMenu('公告列表 ', $do, 'news', ''),
           //      )
           //  );
            // 下面是复制的上面的数据
            $navemenu[6] = array(
                'title' => '<a href="index.php?c=site&a=entry&op=display&do=ad&m=zh_tcwq" class="panel-title wytitle" id="yframe-6"><icon style="color:#8d8d8d;" class="fa fa-life-ring"></icon>  广告管理</a>',
                'items' => array(
                     0 => $this->createMainMenu('广告列表 ', $do, 'ad', ''),
                    1 => $this->createMainMenu('广告添加', $do, 'addad', ''),
                    2 => $this->createMainMenu('公告列表', $do, 'news', ''),
                )
            );

  
         
              $navemenu[7] = array(
                'title' => '<a href="index.php?c=site&a=entry&op=display&do=goods&m=zh_tcwq" class="panel-title wytitle" id="yframe-7"><icon style="color:#8d8d8d;" class="fa fa-cart-plus"></icon>  商品管理</a>',
                'items' => array(
                     0 => $this->createMainMenu('商品列表 ', $do, 'goods', ''),
                     3=> $this->createMainMenu('商品设置', $do, 'goodscheck', ''),
                     4=> $this->createMainMenu('订单管理 ', $do, 'ddgl', ''),
                )
            );
      
          $navemenu[9] = array(
                'title' => '<a href="index.php?c=site&a=entry&op=display&do=ygquan&m=zh_tcwq" class="panel-title wytitle" id="yframe-9"><icon style="color:#8d8d8d;" class="fa fa-gift"></icon>  营销设置</a>',
                'items' => array(
                    0 => $this->createMainMenu('营销插件 ', $do, 'ygquan', ''),
                    1 => $this->createMainMenu('商家入驻', $do, 'storerz', ''),
                    2 => $this->createMainMenu('拼车设置', $do, 'caropen', ''),
                    3 => $this->createMainMenu('发帖子', $do, 'tzopen', ''),
                    4 => $this->createMainMenu('黄页114', $do, 'hyopen', ''),
                    5 => $this->createMainMenu('红包福利', $do, 'hbopen', ''),
                    5 => $this->createMainMenu('加入合伙人', $do, 'hhropen', ''),
                    6 => $this->createMainMenu('开通多城市', $do, 'manycity', ''),
                    7 => $this->createMainMenu('积分功能', $do, 'jfsz', '')
                )
            );
          if($type['is_jf']==1){
             $navemenu[8] = array(
                'title' => '<a href="index.php?c=site&a=entry&op=display&do=integral&m=zh_tcwq" class="panel-title wytitle" id="yframe-8"><icon style="color:#8d8d8d;" class="fa fa-star-half-o"></icon>  积分商城</a>',
                'items' => array(
                     0 => $this->createMainMenu('签到管理', $do, 'integral', ''),
                    // 1 => $this->createMainMenu('积分设置', $do, 'jfsz', ''),
                    2 => $this->createMainMenu('商品列表', $do, 'jfgoods', ''),
                    3 => $this->createMainMenu('商品分类', $do, 'jftype', '')
                )
            );
         }
           $navemenu[16] = array(
                'title' => '<a href="index.php?c=site&a=entry&op=display&do=txlist&m=zh_tcwq" class="panel-title wytitle" id="yframe-16"><icon style="color:#8d8d8d;" class="fa fa-key"></icon>  数据统计</a>',
                'items' => array(
                     2 => $this->createMainMenu('提现列表 ', $do, 'txlist', ''),
                    3 => $this->createMainMenu('提现设置 ', $do, 'txsz', ''),
                  //  0 => $this->createMainMenu('红包统计 ', $do, 'hbdata', ''),
                    1 => $this->createMainMenu('销售额统计 ', $do, 'xsdata', ''),
                   
                )
            );  
            $navemenu[11] = array(
                'title' => '<a href="index.php?c=site&a=entry&op=display&do=user2&m=zh_tcwq" class="panel-title wytitle" id="yframe-11"><icon style="color:#8d8d8d;" class="fa fa-user"></icon>  会员管理</a>',
                'items' => array(
                     0 => $this->createMainMenu('会员列表 ', $do, 'user2', ''),
                )
            );
        if($type['is_hhr']==1){
          $navemenu[19] = array(
                'title' => '<a href="index.php?c=site&a=entry&op=display&do=fxlist&m=zh_tcwq" class="panel-title wytitle" id="yframe-19"><icon style="color:#8d8d8d;" class="fa fa-users"></icon>  同城合伙人</a>',
                'items' => array(
                    0 => $this->createMainMenu('合伙人管理', $do, 'fxlist', ''),
                    1 => $this->createMainMenu('合伙人设置', $do, 'fxset', ''),
                    2 => $this->createMainMenu('等级设置', $do, 'level', ''),
                    3 => $this->createMainMenu('提现申请', $do, 'fxtx', ''),
                )
            );
        }
               if($type['many_city']==2){
            $navemenu[15] = array(
                'title' => '<a href="index.php?c=site&a=entry&op=display&do=account&m=zh_tcwq" class="panel-title wytitle" id="yframe-15"><icon style="color:#8d8d8d;" class="fa fa-graduation-cap"></icon>多城市管理</a>',
                'items' => array(
                    0 => $this->createMainMenu('账号管理 ', $do, 'account', ''),
                    1 => $this->createMainMenu('账号添加 ', $do, 'countadd', ''),
                    2 => $this->createMainMenu('佣金提现 ', $do, 'yjtx', ''),
                    3 => $this->createMainMenu('代理佣金比例设置', $do, 'commission', '')
                )
            );
        }
           
            
            
            $navemenu[12] = array(
                'title' => '<a href="index.php?c=site&a=entry&op=display&do=settings&m=zh_tcwq" class="panel-title wytitle" id="yframe-12"><icon style="color:#8d8d8d;" class="fa fa-cog"></icon>  系统设置</a>',
                'items' => array(
                    0 => $this->createMainMenu('基本信息 ', $do, 'settings', ''),
                    1 => $this->createMainMenu('小程序配置', $do, 'peiz', ''),
                    2 => $this->createMainMenu('支付配置', $do, 'pay', ''), 
                    // 3 => $this->createMainMenu('分享设置', $do, 'fenx', ''),
                    4 => $this->createMainMenu('短信配置', $do, 'sms', ''),
                    5 => $this->createMainMenu('模板消息', $do, 'template', ''),                  
                    6 => $this->createMainMenu('帮助中心', $do, 'help', ''),
                    7 => $this->createMainMenu('版权设置', $do, 'copyright', ''),                   
                    
                )
            );
        }
     
        return $navemenu;
    }

       public function getMainMenu2()
    {
        global $_W, $_GPC;
        $type=pdo_get('zhtc_system',array('uniacid'=>$_W['uniacid']));
        $do = $_GPC['do'];
        $navemenu = array();
        $cur_color = ' style="color:#d9534f;" ';
        if($_W['isfounder'] || $_W['role'] == 'manager' || $_W['role'] == 'operator') {
              $navemenu[0] = array(
                'title' => '<a href="index.php?c=site&a=entry&op=display&do=inindex&m=zh_tcwq" class="panel-title wytitle" id="yframe-0"><icon style="color:#8d8d8d;" class="fa fa-newspaper-o"></icon>  数据概况</a>',
                'items' => array(
                     0 => $this->createMainMenu('数据展示', $do, 'inindex', ''),
                )
            );
               $navemenu[9] = array(
                'title' => '<a href="index.php?c=site&a=entry&op=display&do=instore&m=zh_tcwq" class="panel-title wytitle" id="yframe-9"><icon style="color:#8d8d8d;" class="fa fa-university"></icon>  商家管理</a>',
                'items' => array(
                     0 => $this->createMainMenu('商家列表 ', $do, 'instore', ''),
                     1 => $this->createMainMenu('商家添加 ', $do, 'instoreinfo2', ''),
                     3=> $this->createMainMenu('评论管理', $do, 'insjpinglun', ''),
                )
            );
             $navemenu[1] = array(
                'title' => '<a href="index.php?c=site&a=entry&op=display&do=ininformation&m=zh_tcwq" class="panel-title wytitle" id="yframe-1"><icon style="color:#8d8d8d;" class="fa fa-comment-o"></icon>  帖子管理</a>',
                'items' => array(
                     0 => $this->createMainMenu('帖子列表 ', $do, 'ininformation', ''),
                     1 => $this->createMainMenu('添加帖子', $do, 'inaddinformation', ''),
                     2=> $this->createMainMenu('评论管理', $do, 'intzpinglun', ''),
                )
            );
        if($type['is_pcfw']==1){
             $navemenu[2] = array(
                'title' => '<a href="index.php?c=site&a=entry&op=display&do=incarinfo&m=zh_tcwq" class="panel-title wytitle" id="yframe-2"><icon style="color:#8d8d8d;" class="fa fa-car"></icon>  拼车管理</a>',
                'items' => array(
                     0 => $this->createMainMenu('拼车列表 ', $do, 'incarinfo', ''),
                   
                )
            );
         }

            $navemenu[3] = array(
                'title' => '<a href="index.php?c=site&a=entry&op=display&do=inzx&m=zh_tcwq" class="panel-title wytitle" id="yframe-3"><icon style="color:#8d8d8d;" class="fa fa-book"></icon>  资讯管理</a>',
                'items' => array(
                    1 => $this->createMainMenu('资讯管理', $do, 'inzx', ''), 
                    3=> $this->createMainMenu('资讯审核', $do, 'inzxcheckmanager', ''),                              
                    4=> $this->createMainMenu('评论管理', $do, 'inzxpinglun', ''),
                )
            );
            if($type['is_pageopen']==1){
            $navemenu[4] = array(
                'title' => '<a href="index.php?c=site&a=entry&op=display&do=inyellowstore&m=zh_tcwq" class="panel-title wytitle" id="yframe-4"><icon style="color:#8d8d8d;" class="fa fa-compass"></icon>黄页114</a>',
                'items' => array(
                     0=> $this->createMainMenu('入驻列表 ', $do, 'inyellowstore', ''),
                     3=> $this->createMainMenu('添加入驻', $do, 'inaddyellowstore', ''),
                )
            );
        }
           $navemenu[5] = array(
                'title' => '<a href="index.php?c=site&a=entry&op=display&do=innews&m=zh_tcwq" class="panel-title wytitle" id="yframe-5"><icon style="color:#8d8d8d;" class="fa fa-user"></icon>  公告管理</a>',
                'items' => array(
                     0 => $this->createMainMenu('公告列表 ', $do, 'innews', ''),
                )
            );
            // 下面是复制的上面的数据
            $navemenu[6] = array(
                'title' => '<a href="index.php?c=site&a=entry&op=display&do=inad&m=zh_tcwq" class="panel-title wytitle" id="yframe-6"><icon style="color:#8d8d8d;" class="fa fa-life-ring"></icon>  广告管理</a>',
                'items' => array(
                     0 => $this->createMainMenu('广告列表 ', $do, 'inad', ''),
                    1 => $this->createMainMenu('广告添加', $do, 'inaddad', ''),
                )
            );

              $navemenu[7] = array(
                'title' => '<a href="index.php?c=site&a=entry&op=display&do=ingoods&m=zh_tcwq" class="panel-title wytitle" id="yframe-7"><icon style="color:#8d8d8d;" class="fa fa-cart-plus"></icon>  商品管理</a>',
                'items' => array(
                     0 => $this->createMainMenu('商品列表 ', $do, 'ingoods', ''),
                    // 4=> $this->createMainMenu('订单管理 ', $do, 'inddgl', ''),
                )
            );
             $navemenu[8] = array(
                'id' => 'nav12',
                'title' => '<a href="index.php?c=site&a=entry&op=display&do=txdetails&m=zh_tcwq" class="panel-title wytitle" id="yframe-8"><icon style="color:#8d8d8d;" class="fa fa-university"></icon>  提现管理</a>',
                'items' => array(
                    0 => $this->createMainMenu('提现明细 ', $do, 'txdetails', ''),
                    1 => $this->createMainMenu('申请提现 ', $do, 'txapply', '')
                )
            );  
          
          


        }
        return $navemenu;
    }
   
    public function getNaveMenu($city, $action)
    {  
        global $_W, $_GPC;
        $type=pdo_get('zhtc_system',array('uniacid'=>$_W['uniacid']));      
        $do = $_GPC['do'];
        $navemenu = array();
        $cur_color = '#8d8d8d';
        $navemenu[0] = array(
            'title' => '<a href="city.php?c=site&a=entry&op=display&do=start&m=zh_tcwq" class="panel-title wytitle" id="yframe-0"><icon style="color:#8d8d8d;" class="fa fa-cog"></icon>  数据概况</a>',
            'items' => array(
                0 => $this->createSubMenu('数据展示', $do, 'start', 'fa-angle-right', $cur_color, $city),
              
               
            ),
            'icon' => 'fa fa-user-md'
        );
        $cur_color = '#8d8d8d';
        $navemenu[9] = array(
                'title' => '<a href="city.php?c=site&a=entry&op=display&do=dlinstore&m=zh_tcwq" class="panel-title wytitle" id="yframe-9"><icon style="color:#8d8d8d;" class="fa fa-university"></icon>  商家管理</a>',
                'items' => array(
                     0 => $this->createSubMenu('商家列表 ', $do, 'dlinstore', 'fa-angle-right', $cur_color, $city),
                     1 => $this->createSubMenu('商家添加 ', $do, 'dlinstoreinfo2', 'fa-angle-right', $cur_color, $city),
                     3=> $this->createSubMenu('评论管理', $do, 'dlinsjpinglun', 'fa-angle-right', $cur_color, $city),
                )
            );
        $navemenu[1] = array(
            'title' => '<a href="city.php?c=site&a=entry&op=display&do=dlininformation&m=zh_tcwq" class="panel-title wytitle" id="yframe-1"><icon style="color:' . $cur_color . ';" class="fa fa-bars"></icon>  帖子管理</a>',
           
            'items' => array(
                0 => $this->createSubMenu('帖子列表 ', $do, 'dlininformation', 'fa-angle-right', $cur_color, $city),
                1 => $this->createSubMenu('添加帖子', $do, 'dlinaddinformation', 'fa-angle-right', $cur_color, $city),
                2 => $this->createSubMenu('评论管理', $do, 'dlintzpinglun', 'fa-angle-right', $cur_color, $city),
               
              
            )

        );
        $cur_color = '#8d8d8d';
         if($type['is_pcfw']==1){
        $navemenu[2] = array(
            'title' => '<a href="city.php?c=site&a=entry&op=display&do=dlincarinfo&m=zh_tcwq" class="panel-title wytitle" id="yframe-2"><icon style="color:' . $cur_color . ';" class="fa fa-trophy"></icon> 拼车管理</a>',
            'items' => array(
                0 => $this->createSubMenu('拼车列表 ', $do, 'dlincarinfo', 'fa-angle-right', $cur_color, $city),
               
            )
        );
}
        $cur_color = '#8d8d8d';
            $navemenu[3] = array(
                'title' => '<a href="city.php?c=site&a=entry&op=display&do=dlinzx&m=zh_tcwq" class="panel-title wytitle" id="yframe-3"><icon style="color:' . $cur_color . ';" class="fa fa-binoculars"></icon>  资讯管理</a>',
                'items' => array(
                    0 => $this->createSubMenu('资讯管理', $do, 'dlinzx', 'fa-angle-right', $cur_color, $city),
                    1 => $this->createSubMenu('资讯审核', $do, 'dlinzxcheckmanager', 'fa-angle-right', $cur_color, $city),
                     5 => $this->createSubMenu('评论管理', $do, 'dlinzxpinglun', 'fa-angle-right', $cur_color, $city),
                ),
            );
   
        $cur_color = '#8d8d8d';
          if($type['is_pageopen']==1){
        $navemenu[4] = array(
            'title' => '<a href="city.php?c=site&a=entry&op=display&do=dlinyellowstore&m=zh_tcwq" class="panel-title wytitle" id="yframe-4"><icon style="color:' . $cur_color . ';" class="fa fa-gift"></icon>  黄页114</a>',
            'items' => array(
                0 => $this->createSubMenu('入驻列表 ', $do, 'dlinyellowstore', 'fa-angle-right', $cur_color, $city),
                1 => $this->createSubMenu('添加入驻', $do, 'dlinaddyellowstore', 'fa-angle-right', $cur_color, $city),
            )
        );
        }
        $cur_color = '#8d8d8d';
        $navemenu[5] = array(
            'title' => '<a href="city.php?c=site&a=entry&op=display&do=dlinnews&m=zh_tcwq" class="panel-title wytitle" id="yframe-5"><icon style="color:' . $cur_color . ';" class="fa fa-key"></icon>  公告管理</a>',
            'items' => array(
                0 => $this->createSubMenu('公告列表 ', $do, 'dlinnews', 'fa-angle-right', $cur_color, $city),
            )
        );
        $cur_color = '#8d8d8d';
        $navemenu[6] = array(
            'title' => '<a href="city.php?c=site&a=entry&op=display&do=dlinad&m=zh_tcwq" class="panel-title wytitle" id="yframe-6"><icon style="color:' . $cur_color . ';" class="fa fa-book"></icon>  广告管理</a>',
            'items' => array(
                0 => $this->createSubMenu('管理广告 ', $do, 'dlinad', 'fa-angle-right', $cur_color, $city),
                1 => $this->createSubMenu('广告添加', $do, 'dlinaddad', 'fa-angle-right', $cur_color, $city),
                
            )
        );
          $cur_color = '#8d8d8d';
        $navemenu[7] = array(
            'title' => '<a href="city.php?c=site&a=entry&op=display&do=dlingoods&m=zh_tcwq" class="panel-title wytitle" id="yframe-7"><icon style="color:' . $cur_color . ';" class="fa fa-cubes"></icon>  商品管理</a>',
            'items' => array(
                0 => $this->createSubMenu('商品列表 ', $do, 'dlingoods', 'fa-angle-right', $cur_color, $city),
               
            )
        );
         $cur_color = '#8d8d8d';
        $navemenu[8] = array(
            'title' => '<a href="city.php?c=site&a=entry&op=display&do=dltxdetails&m=zh_tcwq" class="panel-title wytitle" id="yframe-8"><icon style="color:' . $cur_color . ';" class="fa fa-database"></icon>  提现管理</a>',
            'items' => array(
                0 => $this->createSubMenu('提现明细 ', $do, 'dltxdetails', 'fa-angle-right', $cur_color, $city),
                1 => $this->createSubMenu('申请提现 ', $do, 'dltxapply', 'fa-angle-right', $cur_color, $city),
            )
        );
        return $navemenu;
    }

        function createWebUrl2($do, $query = array()) {
        $query['do'] = $do;
        $query['m'] = strtolower($this->modulename);
      
        return $this->wurl('site/entry', $query);
    }

    function wurl($segment, $params = array()) {
      
    list($controller, $action, $do) = explode('/', $segment);
    $url = './city.php?';
    if (!empty($controller)) {
        $url .= "c={$controller}&";
    }
    if (!empty($action)) {
        $url .= "a={$action}&";
    }
    if (!empty($do)) {
        $url .= "do={$do}&";
    }
    if (!empty($params)) {
        $queryString = http_build_query($params, '', '&');
        $url .= $queryString;
    }
    return $url;
}

    function createCoverMenu($title, $method, $op, $icon = "fa-image", $color = '#d9534f')
    {
        global $_GPC, $_W;
        $cur_op = $_GPC['op'];
        $color = ' style="color:'.$color.';" ';
        return array('title' => $title, 'url' => $op != $cur_op ? $this->createWebUrl($method, array('op' => $op)) : '',
            'active' => $op == $cur_op ? ' active' : '',
            'append' => array(
                'title' => '<i class="fa fa-angle-right"></i>',
            )
        );
    }

    function createMainMenu($title, $do, $method, $icon = "fa-image", $color = '')
    {
        $color = ' style="color:'.$color.';" ';

        return array('title' => $title, 'url' => $do != $method ? $this->createWebUrl($method, array('op' => 'display')) : '',
            'active' => $do == $method ? ' active' : '',
            'append' => array(
                'title' => '<i '.$color.' class="fa fa-angle-right"></i>',
            )
        );
    }

/*    function createSubMenu($title, $do, $method, $icon = "fa-image", $color = '#d9534f', $storeid)
    {
        $color = ' style="color:'.$color.';" ';
        $url = $this->createWebUrl($method, array('op' => 'display', 'storeid' => $storeid));
        if ($method == 'stores') {
            $url = $this->createWebUrl('stores', array('op' => 'post', 'id' => $storeid, 'storeid' => $storeid));
        }

        return array('title' => $title, 'url' => $do != $method ? $url : '',
            'active' => $do == $method ? ' active' : '',
            'append' => array(
                'title' => '<i class="fa '.$icon.'"></i>',
            )
        );
    }*/
    function createSubMenu($title, $do, $method, $icon = "fa-image", $color = '#d9534f', $city)
    {
        $color = ' style="color:'.$color.';" ';
        $url = $this->createWebUrl2($method, array('op' => 'display', 'city' => $city));
        if ($method == 'stores2') {
            $url = $this->createWebUrl2('stores2', array('op' => 'post', 'id' => $storeid, 'city' =>$city));
        }



        return array('title' => $title, 'url' => $do != $method ? $url : '',
            'active' => $do == $method ? ' active' : '',
            'append' => array(
                'title' => '<i class="fa '.$icon.'"></i>',
                )
            );
    }

    public function getStoreById($id)
    {
        $store = pdo_fetch("SELECT * FROM " . tablename('wpdc_store') . " WHERE id=:id LIMIT 1", array(':id' => $id));
        return $store;
    }


    public function set_tabbar($action, $storeid)
    {
        $actions_titles = $this->actions_titles;
        $html = '<ul class="nav nav-tabs">';
        foreach ($actions_titles as $key => $value) {
            if ($key == 'stores') {
                $url = $this->createWebUrl('stores', array('op' => 'post', 'id' => $storeid));
            } else {
                $url = $this->createWebUrl($key, array('op' => 'display', 'storeid' => $storeid));
            }

            $html .= '<li class="' . ($key == $action ? 'active' : '') . '"><a href="' . $url . '">' . $value . '</a></li>';
        }
        $html .= '</ul>';
        return $html;
    }

    public   function getSon($pid ,$arr){
        $newarr=array();
        foreach ($arr as $key => $value) {
            if($pid==$value['type_id']){
                $newarr[]=$value; 
               // continue;                     
            }      
        }
        return $newarr;
        
    }

     public   function getSon2($pid ,$arr){
        $newarr=array();
        foreach ($arr as $key => $value) {
            if($pid==$value['type2_id']){
                $newarr[]=$value; 
               // continue;                     
            }      
        }
        return $newarr;
        
    }
}