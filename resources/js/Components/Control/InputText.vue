<template>
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label>{{ label }}</label>
        <input :name="name" :id="name" :value="value" type="text" :placeholder="this.placeholder" class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
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
        placeholder: {
            type: String
        },
        errorText: {
            type: String,
            default: 'Please fill out this field.'
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
.error-text {
    @apply text-red-500 text-xs italic;
}
.input-error {
    @apply border-red-500;
}
</style>


