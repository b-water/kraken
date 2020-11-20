<template>
    <div class="w-full">
        <label>{{ label }}</label>
        <input :name="name" :id="name" :value="value" type="text" :placeholder="this.placeholder" class="">
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


