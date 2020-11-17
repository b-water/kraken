<template>
    <label class="label" :for="this.for">
        {{ name }}
    </label>
</template>

<script>
export default {
    name: "Label",
    props: {
        text: {
            type: String
        },
        for: {
            type: String
        }
    }
}
</script>

<style scoped>
.label {
    @apply block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2;
}
</style>
