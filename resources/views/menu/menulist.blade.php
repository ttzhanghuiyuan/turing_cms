@extends('layouts.home')

@section('self_css')
@endsection

@section('self_js')
@endsection


@section('content')
    <div class="content">
        <!-- 顶部全局按钮 -->

        <!-- 检索列表 -->
        <input-component type="text" :value="11111" label="测试一：" :maxlength="20" :show_word_limit="true"></input-component>

        <select-component value="1" placeholder="请选择类型" :options="[{label:'是',value:'1'},{label:'否',value:'0'}]"></select-component>
        <!-- 表格 -->

        <!-- 分页 -->

        <!-- 底部全局按钮 -->
    </div>
@endsection
