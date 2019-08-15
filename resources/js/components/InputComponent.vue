<template>
    <el-input
        v-model="current_value"
        :maxlength="maxlength"
        :minlength="minlength"
        :show-word-limit="show_word_limit"
        :placeholder="placeholder"
        :clearable="clearable"
        :show-password="show_password"
        :disabled="disabled"
        :size="size"
        :prefix-icon="prefix_icon"
        :suffix-icon="suffix_icon"
        :rows="rows"
        :autosize="auto_size"
        :label="label"
    ></el-input>
</template>

<script>
    export default {
        data() {
            return {
                current_value:this.value,
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        props: {
            type:{type:String,default:'text'},                  //类型[text，textarea 和其他 原生 input 的 type 值]
            value:{default:''},                                 //绑定值
            minlength:{type:Number,default:0},                  //原生属性，最大输入长度
            maxlength:{type:Number,default:20},                 //原生属性，最小输入长度
            show_word_limit:{type:Boolean,default:false},       //是否显示输入字数统计，只在 type = "text" 或 type = "textarea" 时有效[boolean]
            placeholder:{type:String,default:'请输入内容'},     //输入框占位文本
            clearable:{type:Boolean,default:true},              //是否可清空[boolean]
            show_password:{type:Boolean,default:false},         //是否显示切换密码图标[boolean]
            disabled: {type:Boolean,default:false},             //禁用[boolean]
            size:{type:String,default:''},                      //输入框尺寸，只在 type!="textarea" 时有效[medium / small / mini]
            prefix_icon:{type:String,default:''},               //输入框头部图标
            suffix_icon:{type:String,default:''},               //输入框尾部图标
            rows:{type:String,default:''},                      //输入框行数，只对 type="textarea" 有效
            auto_size:{type:String,default:''},                 //适应内容高度，只对 type="textarea" 有效，可传入对象，如，{ minRows: 2, maxRows: 6 }
            label:{type:String,default:''},                     //输入框关联的label文字
        },
    }
</script>
