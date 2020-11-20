<template>
    <form class="w-full" method="POST">
        <div class="grid grid-cols-10 p-2 gap-3">
            <div class="col-span-5">
                <div class="w-full">
                    <label>Name</label>
                    <input name="name" id="name" type="text" placeholder="Name of your Account" v-model="form.name" class="input-text focus:outline-none focus:bg-white">
                </div>
                <div class="w-full">
                    <label>Reference</label>
                    <input name="reference" id="reference" type="text" placeholder="IBAN or Credit Card Number" v-model="form.reference"  class="input-text focus:outline-none focus:bg-white">
                </div>
            </div>
            <div class="col-span-5">
                <div class="w-full">
                    <label>Currency</label>
                    <t-select
                        class="select focus:outline-none focus:bg-white"
                        placeholder="Choose a Option"
                        :options="currencies"
                        v-model="form.currency"
                    ></t-select>
                </div>
                <div class="w-full">
                    <label>Type</label>
                    <t-select
                        class="select focus:outline-none focus:bg-white"
                        placeholder="Choose a Option"
                        :options="accountTypes"
                        v-model="form.type"
                    ></t-select>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-10 overflow-hidden h-auto">
            <div class="col-span-9"></div>
            <div class="col-span1">
                <div class="relative mr-2 mb-15">
                    <div class="absolute right-0 top-0">
                        <button type="button" class="btn btn-indigo" @click="save">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</template>

<script>
    import AppSelect from "@/Components/Control/Select";
    import AppInputText from "@/Components/Control/InputText";

    export default {
        components: {
            AppInputText,
            AppSelect
        },
        methods: {
            save() {
                this.$inertia.post('/accounts/add', this.form);
            },
        },
        data() {
            return {
                form: {
                    name: '',
                    symbol: '',
                    reference: '',
                    type: '',
                    currency: ''
                },
                currencies: [
                    { value: 1, text: 'Euro' },
                    { value: 2, text: 'Dollar' },
                    { value: 3, text: 'Hong-Kong Dollar', disabled: true }
                ],
                accountTypes: [
                    { value: 1, text: 'Basic' },
                    { value: 2, text: 'Savings' },
                    { value: 3, text: '', disabled: true }
                ]
            }
        }
    }
</script>
