<template>
  <el-form-item
    ref="formFieldRef"
    class="am-ff__item"
  >
    <div v-html="props.label"></div>
  </el-form-item>
</template>

<script setup>
// * Import from Vue
import {
  ref,
} from "vue";

// * Form Item Props
let props = defineProps({
  label: {
    type: String
  }
})

// * Form Item Reference
let formFieldRef = ref(null)

defineExpose({
  formFieldRef
})
</script>

<script>
export default {
  name: "ContentFormField"
}
</script>
