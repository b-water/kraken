<template>
    <form class="w-full max-w-lg" method="POST">
        <div class="flex flex-wrap -mx-3 mb-6">
            <input-text name="name" label="Name" placeholder="Name of your Asset" v-model="name"></input-text>
            <input-text name="symbol" label="Symbol" placeholder="e.g VWGL" v-model="symbol"></input-text>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                    Password
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="password" placeholder="******************">
                <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            </div>
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            </div>
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <app-button type="submit" color="indigo">Save</app-button>
            </div>
        </div>
    </form>
</template>

<script>

    import InputText from "@/Components/Control/InputText";
    import AppButton from "@/Components/Control/Button";

    export default {
        components: {
            InputText,
            AppButton
        },
        data() {
            return {
                name: '',
                symbol: ''
            }
        }
    }
</script>
