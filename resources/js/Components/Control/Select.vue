<template>
    <div class="w-full">
        <label>{{ label }}</label>
        <t-select
            class="cursor-pointer w-full appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
            :placeholder="placeholder"
            :options="options"
            variant="demo"
        ></t-select>
        <p v-if="this.error" class="error-text">{{ errorText }}</p>
    </div>
</template>

<script>
import Label from "../../Jetstream/Label";
export default {
    name: "InputText",
    components: {
        Label
    },
    props: {
        name: {
            type: String,
        },
        label: {
            type: String
        },
        options: {
            type: Array
        },
        placeholder: {
            type: String,
            default: 'Select an option'
        },
        errorText: {
            type: String,
            default: 'Please select a option'
        }
    },
    data() {
        return {
            value: '',
            error: false
        }
    }
}
</script>
<style scoped>

</style>


