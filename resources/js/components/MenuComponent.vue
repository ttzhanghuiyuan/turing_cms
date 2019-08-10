<template>
    <!-- <el-radio-group v-model="isCollapse" style="margin-bottom: 20px;">
         <el-radio-button :label="false">展开</el-radio-button>
         <el-radio-button :label="true">收起</el-radio-button>
         </el-radio-group> -->
    <el-menu default-active="1-4-1" class="el-menu-vertical-demo" @open="handleOpen" @close="handleClose" :collapse="isCollapse">
        <el-submenu index="1">
            <template slot="title">
                <i class="iconfont icon-iconset0196"></i>
                <span slot="title">&#12288;系统设置</span>
            </template>
            <el-menu-item>
                <i class="iconfont icon-caidan"></i>
                <span slot="title">&#12288;菜单管理</span>
            </el-menu-item>
            <el-menu-item>
                <i class="iconfont icon-yonghuguanli1"></i>
                <span slot="title">&#12288;用户管理</span>
            </el-menu-item>
            <el-menu-item>
                <i class="iconfont icon-navicon-jsgl"></i>
                <span slot="title">&#12288;角色管理</span>
            </el-menu-item>
            <el-menu-item>
                <i class="iconfont icon-pingjunfenpeiquanzhong"></i>
                <span slot="title">&#12288;权限管理</span>
            </el-menu-item>
        </el-submenu>
        <el-menu-item index="2">
            <i class="el-icon-menu"></i>
            <span slot="title">导航二</span>
        </el-menu-item>
        <el-menu-item index="3" disabled>
            <i class="el-icon-document"></i>
            <span slot="title">导航三</span>
        </el-menu-item>
        <el-menu-item index="4">
            <i class="el-icon-setting"></i>
            <span slot="title">导航四</span>
        </el-menu-item>
    </el-menu>

</template>

<style>
    .el-menu-vertical-demo:not(.el-menu--collapse) {
        width: 200px;
        min-height: 400px;
    }
</style>

<script>
    export default {
        data() {
            return {
                isCollapse: false
            };
        },
        methods: {
            handleOpen(key, keyPath) {
                console.log(key, keyPath);
            },
            handleClose(key, keyPath) {
                console.log(key, keyPath);
            }
        }
    }
</script>
