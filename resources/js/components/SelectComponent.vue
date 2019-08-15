<template>
    <el-select
        v-model="current_value"
        :placeholder="placeholder"
        :multiple="multiple"
        :disabled="disabled"
        :value-key="value_key"
        :size="size"
        :clearable="clearable"
        :collapse-tags="collapse_tags"
        :multiple-limit="multiple_limit"
        :name="name"
        :autocomplete="autocomplete"
        :filterable="filterable"
        :allow-create="allow_create"
        @filter-method="filter_method"
        :remote="remote"
        @remote-method="remote_method"
        :loading="loading"
        :loading-text="loading_text"
        :no-match-text="no_match_text"
        :no-data-text="no_data_text"
        :popper-class="popper_class"
        :reserve-keyword="reserve_keyword"
        :default-first-option="default_first_option"
        :popper-append-to-body="popper_append_to_body"
        :automatic-dropdown="automatic_dropdown"
    >
        <el-option
            v-for="item in current_options"
            :key="item.value"
            :label="item.label"
            :value="item.value">
        </el-option>
    </el-select>
</template>

<script>
    export default {
        data() {
            return {
                loading:false,                //是否正在从远程获取数据[boolean]
                current_options:this.options, //选项
                current_value:this.value,     //绑定值
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        props: {
            value:{default:null},                                 //绑定值
            multiple:{type:Boolean,default:false},                //是否多选[boolean]
            disabled: {type:Boolean,default:false},               //禁用[boolean]
            value_key:{default:''},                               //作为 value 唯一标识的键名，绑定值为对象类型时必填
            size:{default:''},                                    //输入框尺寸[medium / small / mini]
            clearable:{type:Boolean,default:true},                //是否可清空[boolean]
            collapse_tags:{type:Boolean,default:false},           //多选时是否将选中值按文字的形式展示[boolean]
            multiple_limit:{type:Number,default:0},               //多选时用户最多可以选择的项目数，为 0 则不限制
            name:{type:String,default:''},                        //select input 的 name 属性
            autocomplete:{type:String,default:'off'},             //select input 的 autocomplete 属性
            placeholder:{type:String,default:''},                 //下个主版本弃用
            filterable:{type:Boolean,default:false},              //是否可搜索[boolean]
            allow_create:{type:Boolean,default:false},            //是否允许用户创建新条目，需配合 filterable 使用[boolean]
            filter_method:{type:Function,default:function(){}},   //自定义搜索方法
            remote:{type:Boolean,default:false},                  //是否为远程搜索[boolean]
            remote_method:{type:Function,default:function(){}},   //远程搜索方法
            loading_text:{type:String,default:'加载中'},          //远程加载时显示的文字
            no_match_text:{type:String,default:'无匹配数据'},     //搜索条件无匹配时显示的文字，也可以使用slot="empty"设置
            no_data_text:{type:String,default:'无数据'},          //选项为空时显示的文字，也可以使用slot="empty"设置
            popper_class:{type:String,default:''},                //Select 下拉框的类名
            reserve_keyword:{type:Boolean,default:false},         //多选且可搜索时，是否在选中一个选项后保留当前的搜索关键词[boolean]
            default_first_option:{type:Boolean,default:false},    //在输入框按下回车，选择第一个匹配项。需配合 filterable 或 remote 使用[boolean]
            popper_append_to_body:{type:Boolean,default:true},    //是否将弹出框插入至 body 元素。在弹出框的定位出现问题时，可将该属性设置为 false[boolean]
            automatic_dropdown:{type:Boolean,default:false},      //对于不可搜索的 Select，是否在输入框获得焦点后自动弹出选项菜单[boolean]
            options:{type:Array,default:[]},                      //选项
        },
    }
</script>
