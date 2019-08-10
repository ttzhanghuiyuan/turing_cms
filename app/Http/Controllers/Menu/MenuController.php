<?php

namespace App\Http\Controllers\Menu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{

    /**
     * @desc: 获取目录结构
     * @author: abner<turing_zhy@163.com>
     * @date: "2019-08-10"
     * @return mixed
     */
    public function menuList(){
        $menuList = [
            ["power_id" => 1, "name" => "系统设置", "icon" => "icon-change_owner", "list" => [
                ["power_id" => 2, "name" => "菜单管理", "icon" => "icon-change_owner", "url" => "/student/tmk_m_list"],
                ["power_id" => 3, "name" => "用户管理", "icon" => "icon-change_owner", "url" => "/student/tmk_publish_list"],
                ["power_id" => 4, "name" => "角色管理", "icon" => "icon-change_owner", "url" => "/student/tmk_publish_list"],
                ["power_id" => 5, "name" => "权限管理", "icon" => "icon-change_owner", "url" => "/student/tmk_publish_list"],
            ]],
        ];

        return view('menu.menulist', $menuList);
    }

}
